<?php
/**
 * Created by PhpStorm.
 * User: qcx
 * Date: 2017/10/10
 * Time: 14:01
 */
require_once "../../start.php";
require_once  ROOT_PATH."/lib/MyPDO.class.php";
$id=$_GET['id'];
$pdo= new MyPDO();
$sql ="select id,password,name,address,sex,hobbies,descs,image,education,addtime from user where id=:id";
$data=["id"=>$id];
$user = $pdo->selectOne($sql,$data);
$data =$user;
require_once ROOT_PATH."view/admin/user/show.html";