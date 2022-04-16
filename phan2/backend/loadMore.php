<?php
include 'model.php';
$News = new News();
   $start = intval($_POST['start']);
   $quantity = intval($_POST['quantity']);
   $data = $News->getAllNews($start,$quantity);
   die(json_encode($data));