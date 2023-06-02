<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
$dataslide = file_get_contents($datasource . 'brand.json');
$slides = json_decode($dataslide, "ture");
// d($slides);

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
      <?php include_once($partials . 'brand_page_header.php') ?>

      <!-- /page header -->

      <!-- Content area -->
      <div class="card">
        <!-- Content Header -->
        <?php include_once($partials . 'Brand_content_header.php') ?>
        <!-- Content Header -->
        <?php
					//if(array_key_exists('message', $_GET) && !empty($_GET['message'])):
					// if(array_key_exists('message', $_SESSION) && !empty($_SESSION['message'])):
						$message = flush_session('message');
						if($message):
					?>
				<div class="alert alert-success"><?=$message?></div>
				<?php
					endif
					?>
        <div class="card card-body ">

        
          
          <div class="text-left ">

            <a href="brand_list.php" type="button" class="btn bg-teal btn-ladda btn-ladda-progress" data-style="expand-left" data-spinner-size="20">List View</a>
            <a href="grid.php" type="button" class="btn bg-teal btn-ladda btn-ladda-progress" data-style="expand-left" data-spinner-size="20">Grid View</a>
           
          </div>
        </div>
        <table class="table datatable-highlight text-nowrap text-center " >
          <thead>
            <tr>
              <th><input type="checkbox" /></th>
              <th style="width:20px">ID</th>
              <th style="width:60px">Brand Image</th>
              <th style="width:250px">Brand Name</th>
              <th style="width:250px">Brand Code</th>
              <th style="width:600px">Discription</th>
              <th>Created by</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($slides as $key => $slide) {
            ?>
              <!-- ...........1........... -->
              <tr>
                <td><input type="checkbox" /></td>
                <td><?= $slide['id'] ?></td>
                <td>
                  <div class="d-flex align-items-center">
                    <div class="col-md-2">
                      <a href="<?= $assets. $slide['src'] ?>" data-popup="lightbox">
                        <img src="<?= $assets. $slide['src'] ?>" width="100px" alt="" />
                      </a>
                    </div>
                  </div>
                </td>

                <td><?= $slide['BrandName'] ?></td>
                <td><?= $slide['BrandCode'] ?></td>
                <td><?= $slide['Discription'] ?></td>
                <td><span class="badge badge-success"><?= $slide['Createdby'] ?></span></td>
                <td class="text-center">
                  <div class="list-icons">
                    
                  <button class="btn btn-outline  bg-indigo-800 btn-icon text-indigo-800 border-indigo-800 border-1 rounded-round">
                  <a href="grid_index.php?id=<?= $slide['id']?>" class="list-icons-item"><i class="icon-eye"></i></a>
                  </button>
                  <button class="btn btn-outline  bg-info-800 btn-icon text-info-800 border-secondary border-1 rounded-round">
                    <a href="brand_edit.php?id=<?= $slide['id']?>" class="list-icons-item"><i class="icon-pencil7"></i></a>
                  </button>
                  
                  
                    <form action="brand_delete.php" method="post">
                      <button type="submit" class="btn btn-outline  bg-danger btn-icon  text-danger border-danger border-1 rounded-round"><i class="icon-trash"></i></button>
                      <input type="hidden" name="id" value="<?= $slide['id']?>" />                    
                    </form>
                  </div>
                </td>
              </tr>
            <?php } ?>

            <!-- ...............0.............. -->
          </tbody>
        </table>
      </div>
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