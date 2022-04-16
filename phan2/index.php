<?php
include './backend/model.php';

$Cate = new Cate();
$allCate = $Cate->getAllCate();
$News = new News();
$news = $News->getNewsHome();

// PHP code to get the MAC address of Server


include './site/header.php';
if (isset($_GET['page'])) {
   $p = $_GET['page'];

   switch ($p) {
       case 'cate':
           $id = $_GET["id"];
          
           $newsCate = $News->getNewInCate($id);
           include "site/cate.php";
           break;
       
       default:
           include "site/home.php";
   }
}else {
    include "site/home.php";
}

include './site/footer.php';