<?php
  function pdo_connec(){
      $dburl = "mysql:host=localhost;dbname=thi;charset=utf8";
      $u = 'root';
      $p = '';

      $conn = new PDO($dburl, $u, $p);
      $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      return $conn;
  };
  function add($sql){
     $args = array_slice(func_get_args(),1);
     $conn = pdo_connec();
     $stmt = $conn->prepare($sql);
     $stmt->execute($args);
  };

  function getall($sql){
    $args = array_slice(func_get_args(),1);

    $conn = pdo_connec();
    $stmt = $conn->prepare($sql);
    $stmt->execute($args);
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $row;
  };

  function getone($sql){
    $args = array_slice(func_get_args(),1);

    $conn = pdo_connec();
    $stmt = $conn->prepare($sql);
    $stmt->execute($args);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
  };