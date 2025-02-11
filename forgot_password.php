<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Forgot Password | Admin Panel</title>

  <!-- Bootstrap -->
  <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form forgot_password_form">
        <section class="login_content">
          <form action="forgot_password_action.php" method="POST">
            <h1>Forgot Password</h1>
            <p>Enter your email address below, and we'll send you instructions to reset your password.</p>
            <div>
              <input type="email" class="form-control" placeholder="Email" name="email" required="" />
            </div>
            <div>
              <button type="submit" class="btn btn-default submit">Send Reset Link</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Remember your password?
                <a href="index.php" class="to_register"> Log in </a>
              </p>

              <div class="clearfix"></div>
            
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>

</html>
