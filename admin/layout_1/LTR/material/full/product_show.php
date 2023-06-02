<?php 
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') 
//$dataslide = file_get_contents($datasource . 'product.json');
//$product = json_decode($dataslide, "ture");
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
      <?php include_once($partials . 'product_show_page_header.php') ?>

      <!-- /page header -->

      <!-- Content area -->

      <div class="content">
				<?php
				if (array_key_exists('message', $_SESSION) && !empty($_SESSION['message'])) :
				?>
					<div class="alert alert-success"><?= $_SESSION['message'];
														$_SESSION['message'] = ''; ?></div>
				<?php
				endif
				?>

      <div class="card">
        <div class="card-header header-elements-inline">
          <h1 class="card-title">products Details</h1>

          <div class="header-elements">

            <div class="list-icons">
              <a href="#" class="list-icons-item"> <img src="../../../../global_assets/images/icons/pdf.svg" alt=""></a>
              <a href="#" class="list-icons-item"> <img src="../../../../global_assets/images/icons/excel.svg" alt=""></a>
              <a href="#" class="list-icons-item"> <img src="../../../../global_assets/images/icons/printer.svg" alt=""></a>
              <!-- <a class="list-icons-item" data-action="collapse"></a> -->
              <a class="list-icons-item" data-action="reload"></a>
              <!-- <a class="list-icons-item" data-action="remove"></a> -->
            </div>
          </div>
        </div>


        <!-- Table area -->

        <div class="card-body">


          <form action="#">


            <div class="row">



              <div class="col-lg-8 col-sm-6 col-12">
                <div class="form-group">
                  <div class="card">
                    <div class="card-body">
                      <div class="bar-code-view">
                        <img src="../../../../global_assets/images/placeholders/barcode1.png" alt="barcode">
                        <a href="" class="printimg">
                          <img src="../../../../global_assets/images/icons/printer.svg" alt="print">
                        </a>
                      </div>

                    </div>
                  </div>



                  <div class="card card-table table-responsive shadow-0 mb-0">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                      
                        </tr>
                      </thead>
                      <tbody>

                      <?php
									//foreach ($product as $key => $slide) {
									?>
                  
                        <tr>
                          <td class="col-lg-4 font-width-semibold">Product </td>
                          <td class="text-danger">Mackbook Pro</td>
                        </tr>
                        <tr>
                          <td class="font-width-semibold">Catagory</td>
                          <td class="text-danger">Computer</td>
                        </tr>
                        <tr>
                          <td class="font-width-semibold">Sub Category</td>
                          <td class="text-danger">Laptop</td>
                        </tr>
                        <tr>
                          <td class="font-width-semibold">Brand</td>
                          <td class="text-danger">Apple</td>
                        </tr>
                        <tr>
                          <td class="font-width-semibold">Unit</td>
                          <td class="text-danger">Piece</td>
                        </tr>
                        <tr>
                          <td class="font-width-semibold">SKU</td>
                          <td class="text-danger">PT001</td>
                        </tr>
                        <tr>
                          <td class="font-width-semibold">Quantity</td>
                          <td class="text-primary">50</td>
                        </tr>
                        <tr>
                          <td class="font-width-semibold">VAT/TAX</td>
                          <td class="text-primary">0.00%</td>
                        </tr>
                        <tr>
                          <td class="font-width-semibold">Discount Type</td>
                          <td class="text-primary">Percentage</td>
                        </tr>
                        <tr>
                          <td class="font-width-semibold">Purchase Price</td>
                          <td class="text-primary">15000.00</td>
                        </tr>
                        <tr>
                          <td class="font-width-semibold">Sale Price</td>
                          <td class="text-primary">20000.00</td>
                        </tr>
                        <tr>
                          <td class="font-width-semibold">Status Active</td>
                          <td class="text-primary">5</td>
                        </tr>
                        <tr>
                          <td class="font-width-semibold">Barcode Symbology</td>
                          <td class="text-primary">128</td>
                        </tr>

                        <!-- ?php } ?> -->

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-sm-6 col-12">

                <div class="card">
                  <div class="card-body">
                    <div class="form-group">
                      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="../../../../global_assets/images/New Arrivals/lp03.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="../../../../global_assets/images/New Arrivals/lp03.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="../../../../global_assets/images/New Arrivals/lp03.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-12 col-sm-6 col-12">



                <div class="form-group">
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Print <i class="icon-paperplane ml-2"></i></button>
                    <a href="../../../../layout_1/LTR/material/full/pos_ecommerce_product_list.html" class="btn btn-danger"> Cancel <i class="icon-cancel-square ml-2"></i>

                    </a>
                  </div>



                </div>
              </div>
            </div>

        </div>


      </div>




    </div>



    </form>


  </div>
  <!-- Table area -->



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