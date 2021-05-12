<?php
//$URLPATH="https://".$_SERVER['HTTP_HOST']."/"; 

//$HOSTPATH = $URLPATH. "FeatherSchool/";

//$HOSTPATH = $URLPATH. "FeatherSchool/";
//echo $HOSTPATH;
//die;
//$ROOTPATH = $_SERVER['DOCUMENT_ROOT']."/";

$URLPATH="http://127.0.0.1/Feathers/"; 
$HOSTPATH = $URLPATH;
$ROOTPATH = "http://127.0.0.1/";
//$ROOTPATH = $_SERVER['DOCUMENT_ROOT']."/";

$staffImagePath = $URLPATH."uploads/staffphoto/";
$staffDocumentPath = $URLPATH."uploads/staffdocument/";


$allowedUploadFileExtension = array("jpg", "bmp", "jpeg", "gif", "png");
 

define('HOSTPATH',$HOSTPATH);
define('ROOTPATH',$ROOTPATH); 



define('UPLOADASTAFFIMAGEPATH',$staffImagePath); 

define('UPLOADASTAFFDOCUMENTPATH',$staffDocumentPath); 


  

?>
