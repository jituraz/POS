<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
$dataslide = file_get_contents($datasource . 'brand.json');
$slides = json_decode($dataslide);
// dd($slides);

$slidesHTML = <<<SLIDE

<table border="1" width="100%" cellpadding="10" cellspacing="0">
  <thead>
  <tr>
    <th colspan="6" style="padding: 10px; font-size:larger">ALL BRAND LIST </th>
    </tr>
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
 
SLIDE;
// dd($slidesHTML);

?>


<?php
$slideHTMLContent = null;
$src = null;
foreach ($slides as $key => $slide) :

  $slideHTMLContent .= <<<TR

      <tr>

        <td > $slide->id </td>


        
        <td style="width: 80px;">
          <div class="d-flex align-items-center">
            <div class="col-md-2">
              <a href="$assets$slide->src" data-popup="lightbox">
                <img src=" $assets$slide->src" width="100px" alt="" />
              </a>
            </div>
          </div>
        </td>

        <td >$slide->BrandName</td>
        <td >$slide->BrandCode</td>
        <td >$slide->Discription</td>
        <td ><span class="badge badge-success">$slide->Createdby</span></td>

      </tr>
    
TR;


endforeach;

$slideHTMLEnd = <<<EOF
			</tbody>
			</table>
	

	EOF;

$slideHTMLList = $slidesHTML . $slideHTMLContent . $slideHTMLEnd;

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($slideHTMLList);
$mpdf->Output();

?>




<!-- dd($slidesHTML); -->