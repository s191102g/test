<?php
include 'model.php';
$News = new News();
   $id = intval($_POST['id']);
  
   $data = $News->getNews($id);
   die(json_encode($data));