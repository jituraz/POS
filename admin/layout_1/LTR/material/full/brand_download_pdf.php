<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
$dataslide = file_get_contents($datasource . 'brand.json');
$slides = json_decode($dataslide, "ture");
// d($slides);


$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->Output();

?>  


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
<table border="1" width="100%" cellpadding="10" cellspacing="0">
  <thead>
    <th colspan="7" style="padding: 10px; font-size:larger">ALL BRAND LIST </th>
    <tr style="background-color: #f2f2f2;">


      <th >ID</th>
      <th >Brand Image</th>
      <th >Brand Name</th>
      <th >Brand Code</th>
      <th >Discription</th>
      <th>Created by</th>
    </tr>
  </thead>
  <tbody style="text-align: center;">
    <?php
    foreach ($slides as $key => $slide) :
    ?>
      <!-- ...........1........... -->
      <tr>

        <td ><?= $slide['id'] ?></td>
        <td style="width: 80px;">
          <div class="d-flex align-items-center">
            <div class="col-md-2">
              <a href="<?= $assets . $slide['src'] ?>" data-popup="lightbox">
                <img src="<?= $assets . $slide['src'] ?>" width="100px" alt="" />
              </a>
            </div>
          </div>
        </td>

        <td ><?= $slide['BrandName'] ?></td>
        <td ><?= $slide['BrandCode'] ?></td>
        <td ><?= $slide['Discription'] ?></td>
        <td ><span class="badge badge-success"><?= $slide['Createdby'] ?></span></td>

      </tr>
    <?php 
    endforeach
     ?>

    <!-- ...............0.............. -->
  </tbody>
</table>
</body>
</html>