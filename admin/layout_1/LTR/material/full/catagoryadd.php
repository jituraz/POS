<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>
<!DOCTYPE html>
<html lang="en">

<?php include_once($partials . 'head.php') ?>

<body>
  <!-- Main navbar -->
  <?php include_once($partials . 'mainnav.php') ?>
  <!-- /main navbar -->

  <!-- Page content -->
  <div class="page-content">
    <!-- Main sidebar -->
    <?php include_once($partials . 'mainsidebar.php') ?>
    <!-- /main sidebar -->

    <!-- Main content -->
    <div class="content-wrapper">
      <!-- Page header -->
      <?php include_once($partials . 'header.php') ?>
      <!-- /page header -->

      <!-- Content area -->
      <!-- Content area -->
      <div class="card card-body">
        <div class="card-header header-elements-inline">
          <h1 class="card-title">Product Add Category</h1>
          <div class="header-elements">
            <div class="list-icons">
              <a class="list-icons-item" data-action="collapse"></a>
              <a class="list-icons-item" data-action="reload"></a>
              <a class="list-icons-item" data-action="remove"></a>
            </div>
          </div>
        </div>

        <div class="card-body">
          <h5 class="card-title">Create new product Category</h5>

          <form action="catagory_add_processor.php" method="post" class="col-lg-12 col-sm-6 col-12 row"
            enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-6 col-sm-6 col-12">
                
                <div class="form-group">
                  <label class="font-weight-semibold">Category Name</label><br />
                  <input name="catagory" type="text" class="form-control" />
                </div>
              </div>

              <div class="col-lg-6 col-sm-6 col-12">
                <div class="form-group">
                  <label class="font-weight-semibold">Category Code</label><br />
                  <input name="code" type="text" class="form-control" />
                </div>
              </div>

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="font-weight-semibold">Description</label>
                  <input name="caption" type="text" class="form-control" />
                </div>
              </div>

              <div class="col-lg-12">
                <div class="form-group row">
                  <label class="col-lg-2 col-form-label font-weight-semibold">Product Catagories image</label>
                  <div class="col-lg-10">
                    <input name="picture" type="file" class="file-input" multiple="multiple" data-fouc />
                  </div>
                </div>
              </div>
            </div>
          </form>

          <div class="d-flex justify-content-start align-item-center">
              <button type="submit" class="btn btn-outline bg-danger btn-icon text-danger border-danger border-2 rounded-round"> Cancel <i class="icon-cross2"></i> </button>
              <button type="submit" class=" btn btn-outline bg-success ml-3 btn-icon text-success border-success border-2 rounded-round">Submit <i class="icon-arrow-up-right32"></i> </button>
            </div>
        </div>
      </div>
      <!-- /content area -->

      <!-- /content area -->

      <!-- Footer -->
      <?php include_once($partials . 'footer.php') ?>
      <!-- /footer -->
    </div>
    <!-- /main content -->
  </div>
  <!-- /page content -->



</body>

</html>