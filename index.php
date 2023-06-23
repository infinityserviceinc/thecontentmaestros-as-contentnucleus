<?php
ob_start();
session_start();


$url = $_SERVER['REQUEST_URI'];

$current_url = explode('?', $url);
$url = $current_url[0];

if(strstr($url,addslashes('/package/'),false)){
    require_once(__DIR__.'/package/index.php');
    exit();
}
if(strstr($url,addslashes('/service/'),false)){
    require_once(__DIR__.'/service/index.php');
    exit();
}

if(strstr($url,addslashes('/pricing/'),false)){
    require_once(__DIR__.'/pricing/index.php');
    exit();
}

$dir    = __DIR__.'/views';

$files = array_slice(scandir($dir), 2); 
// echo "<pre>";

$fileWithOutExt = array();
foreach($files as $file){
    // remove end slash if you dont need traling slash
    $without_extension = '/'.pathinfo($file, PATHINFO_FILENAME).'/';
    array_push($fileWithOutExt,$without_extension);
}

if($url=="/"){
    require $dir.'/home.php';
    die();
}

if (in_array($url,$fileWithOutExt)) {
  
  $urlWithoutSlashes =  str_replace('/',"",$url);
  require $dir.'/'.$urlWithoutSlashes.'.php';

    
}
else{
    require $dir.'/404.php';
}




?>