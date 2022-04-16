<?php
   class myPDO{
      function pdo_connec(){
         $dburl = "mysql:host=localhost;dbname=thi;charset=utf8";
         $u="root";
         $p="";

         $conn = new PDO($dburl,$u,$p);
         $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
         return $conn;
      }

      function add($sql){
         $args = array_slice(func_get_args(),1);
         $conn = $this->pdo_connec();

         $stmt= $conn->prepare($sql);
         $stmt->execute($args);
      }
      function get_one($sql){
         $args = array_slice(func_get_args(),1);
         $conn = $this->pdo_connec();

         $stmt= $conn->prepare($sql);
         $stmt->execute($args);
         $row = $stmt->fetch(PDO::FETCH_ASSOC);
         return $row;
      }
      function get_all($sql){
         $args = array_slice(func_get_args(),1);
         $conn = $this->pdo_connec();

         $stmt= $conn->prepare($sql);
         $stmt->execute($args);
         $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
         return $row;

      }
   }




   // function pdo_connec()
   // {
   //     $dburl = "mysql:host=localhost;dbname=thi;charset=utf8";
   //     $u = "root";
   //     $p = "";

   //     $conn = new PDO($dburl,$u,$p);
   //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //     return $conn;
   // }

   //  function add($sql)
   // {
   //    $args = array_slice(func_get_args(),1);

   //    $conn = $this->pdo_connec();
   //    $stmt = $conn->prepare($sql);
   //    $stmt->execute($args);
   // }

   //  function get_all($sql)
   // {
   //    $args = array_slice(func_get_args(),1);

   //    $conn = $this->pdo_connec();
   //    $stmt = $conn->prepare($sql);
   //    $stmt->execute($args);
   //    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
   //    return $row;
   // }

   //  function get_one($sql)
   // {
   //    $args = array_slice(func_get_args(),1);

   //    $conn = $this->pdo_connec();
   //    $stmt = $conn->prepare($sql);
   //    $stmt->execute($args);
   //    $row = $stmt->fetch(PDO::FETCH_ASSOC);
   //    return $row;
   // }