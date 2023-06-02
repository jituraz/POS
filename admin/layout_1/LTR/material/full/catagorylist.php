<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
$dataslide = file_get_contents($datasource . 'fontslide.json');
$catagory = json_decode($dataslide, true);
// dd($catagory);

?>
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
      <div class="card">
        <!-- Content Header -->
        <?php include_once($partials . 'catagory_content_header.php') ?>
        <!-- Content Header -->
        <h2 class="text-center">ALL CATAGORY LIST</h2>
        <div class="card">



          <div class="table-responsive">
            <table class="table table-bordered">

              <thead>
                <tr>
                  <th style="width:30px">id</th>
                  <th style="width:80px">Category Image</th>
                  <th>Category Name</th>
                  <th>Category Code</th>
                  <th>Description</th>
                  <th>action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($catagory as $key => $slide) {
                  ?>
                  <tr>
                    <td><?= $slide['id'] ?></td>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="col-md-2">
                          <a href="<?= $assets . "catagoryimage/" . $slide['src'] ?>" data-popup="lightbox">
                            <img src="<?= $assets . "catagoryimage/" . $slide['src'] ?>" width="100px" alt="" />
                          </a>
                        </div>
                      </div>
                    </td>
                    <td><?= $slide['catagory'] ?></td>
                    <td><?= $slide['code'] ?></td>
                    <td><?= $slide['caption'] ?></td>
                    <td class="text-center">
                  <div class="list-icons">
                    <a href="#" class="list-icons-item"
                      ><i class="icon-eye"></i
                    ></a>
                    <a href="#" class="list-icons-item"
                      ><i class="icon-pencil7"></i
                    ></a>
                    <a href="#" class="list-icons-item"
                      ><i class="icon-trash"></i
                    ></a>
                  </div>
                </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
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