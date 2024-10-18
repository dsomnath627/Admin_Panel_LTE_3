<?php
// Include the operations class
include('includes/functions.php');

$obj = new Operations;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // Check if the email exists in the 'users' table
    $user = $obj->getSingle('users', "email = '$email'");

    if ($user) {
        // Generate a unique token
        $token = bin2hex(random_bytes(50));

        // Prepare the data to insert into the 'password_resets' table
        $data = [
            'email' => $email,
            'token' => $token,
            'created_at' => date("Y-m-d H:i:s")
        ];

        // Insert the token into the 'password_resets' table
        $obj->insert('password_resets', $data);

        // Send the password reset link to the user's email
        $reset_link = "http://yourwebsite.com/reset_password.php?token=" . $token;
        $subject = "Password Reset Request";
        $message = "Hi, \n\nClick the link below to reset your password:\n" . $reset_link;
        $headers = 'From: no-reply@yourwebsite.com';

        if (mail($email, $subject, $message, $headers)) {
            echo "Password reset link has been sent to your email.";
        } else {
            echo "Failed to send email.";
        }
    } else {
        echo "Email address not found.";
    }
}
?>
