<?php
include 'model.php';
$idBV = intval($_POST['id']);
 $MAC = exec('getmac');
 $MAC = strtok($MAC, ' ');
 
 $like = new Liked();
 $out = "";
  $check = $like->checkLike($MAC,$idBV);
 if ( $check != []) {
    $out = "m da like bai nay roi,l.";
 } else {
    $add = $like->addLike($MAC,$idBV);
    $out = "Da them like ";
 }
 
 
 die(json_encode($out));