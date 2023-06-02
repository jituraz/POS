<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
$dataslide = file_get_contents($datasource . 'fontslide.json');
$slides = json_decode($dataslide);
// d($slides);

?>


<div class="page-header">
    <div class="page-title">
        <h4>Categories</h4>
        <h6>Manage your purchases</h6>
    </div>
</div>


<ul class="tabs owl-carousel owl-theme owl-product border-0">

<?php
            foreach ($slides as $key => $slide) {
            ?>

    <li class="" id="<?=$slide->catagory?>">
        <div class="product-details">
            <img src="<?=$assets."catagoryimage/".$slide->src?>" alt="img" />
            <h6><?=$slide->caption?></h6>
        </div>
        <?php } ?>
</ul>


