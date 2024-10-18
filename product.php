<?php

include('includes/header.php');

$table = 'products';

$allproducts = $obj->getAll($table);
print_r($allproducts);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Products</h3>
        </div>
        <div class="row" style="margin: 30px;">
          <div class=" col-sm-12 ">
            <div class="x_panel">
              <div class="x_title">
                <ul class="nav navbar-right panel_toolbox">
                  <li><a href="add_product.php" class="btn btn-info"><i
                        class="fa fa-plus"></i> Create</a></li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="d-flex justify-content-end">
                      <!-- Search Bar -->
                      <div class="form-group">
                        <input type="text" id="search-input" class="form-control"
                          placeholder="Search by name, location, or description...">
                      </div>
                    </div>
                    <div class="card-box table-responsive">
                      <table id="program-table" class="table table-striped table-bordered"
                        style="width:100%">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Cost Price</th>
                            <th>Sale Price</th>
                            <th width="250px">Description</th>
                            <th>Created At</th>
                            <th>Action</th>
                          </tr>
                        </thead>


                        <tbody>
                          <?php
                          foreach ($allproducts as $item) {
                            $createdAt = new DateTime($item['created_at']);
                          ?>
                            <tr>
                              <td><?= $item['id'] ?></td>
                              <td><?= $item['name'] ?></td>
                              <td>
                                <img src="<?= $item['image'] ?>" alt="" width="100">
                              </td>
                              <td><?= $item['cost_price'] ?></td>
                              <td><?= $item['sale_price'] ?></td>
                              <td><?= $item['description'] ?></td>
                              <td><?= $createdAt->format('d-m-Y') ?></td>
                              <td>
                                <a href="edit_product.php?id=<?= $item['id'] ?>"
                                  class="btn btn-primary">
                                  <i class="fa fa-edit"></i>
                                </a>
                                <a href="delete_product.php?id=<?= $item['id'] ?>"
                                  class="btn btn-danger"
                                  onclick="return confirm('Are you sure you want to delete this product?');">
                                  <i class="fa fa-trash"></i>
                                </a>
                              </td>

                            </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

<?php
include('includes/footer.php');

?>