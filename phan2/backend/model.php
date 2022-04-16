<?php
include "pdo.php";

 class Cate extends myPDO {
   
     public function getAllCate()
     {
        $sql = "select * from danh_muc order by idDM";
        return $kq =  parent::get_all($sql);
     }
 }


 class News extends myPDO {
     public function getAllNews($s,$q)
     {
        $sql = "select * from bai_viet order by id limit {$s},{$q}";
        return $kq = parent::get_all($sql);
     }

     public function getNewsHome()
     {
        $sql = "select * from bai_viet order by id limit 2";
        return $kq = parent::get_all($sql);
     }


     public function getNewInCate($id)
     {
        $sql = "select * from bai_viet inner join dm_bv on bai_viet.id = dm_bv.idBV where dm_bv.idDM = {$id} order by bai_viet.id limit 2";
        return $kq = parent::get_all($sql);
     }


     public function getNews($id)
     {
        $sql = "select *from bai_viet where id ={$id}";
        return $kq = parent::get_one($sql);
     }
 }

 class Liked extends myPDO{
    public function addLike($id,$idBV)
    {
      $sql = "insert into like_news (idDevice,idBV) values ('{$id}',{$idBV}) ";
      $kq = parent::add($sql);
    }

    public function checkLike($id,$idBV)
    {
      $sql = "select * from like_news where idDevice = '{$id}' and idBV = {$idBV}";
       return $kq = parent::get_all($sql);
    }
 }
