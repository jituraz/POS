<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>
<?php


// dd($_FILES);


$filename = $_FILES['picture']['name'];
$filename = uniqid()."_". $_FILES['picture']['name'];
$target = $_FILES['picture']['tmp_name'];
$destination = $uploads.$filename;

$src= null;
if(upload($target,$destination)){
    $src=$filename;
}



// sanitize

// validation

// image processing

// store : as json data to json file

// $src=$_POST['src'];

$catagory=$_POST['catagory'];
$code=$_POST['alt'];
$caption=$_POST['caption'];



$slide =[
      
            "uuid"=>uniqid(),
            "catagory"=>$catagory,
            "code"=>$code,
            "src"=>$src,
            "capiton"=>$caption
        ];

$currentUniqueId =null;

$dataslide = file_get_contents($datasource . 'fontslide.json');
$catagorys = json_decode($dataslide);

if(count($catagorys)>0){
        $ids = [];
    foreach($catagorys as $aslide){
        $ids[]=$aslide->id;
}
        sort($ids);
        $lastIndex = count($ids)-1;
        $highestId = $ids [$lastIndex];
        $currentUniqueId=$highestId+1;
}else{
    $currentUniqueId=1;
}

//finding unique idsdd

$slide['id']= $currentUniqueId;
// d($slide);
// d($lastIndex);
// d($highestId);
// dd($currentUniqueId);


$catagory[] = (object)$slide;
$data_slide = json_encode($catagory);


if(file_exists($datasource."fontslide.json")){
    $result = file_put_contents($datasource."fontslide.json",$data_slide);
}else{
    echo "File not Found";
}
if($result){
    redirect("catagorylist.php");
}
