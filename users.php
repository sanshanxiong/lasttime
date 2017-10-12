<?php
/**
 * Created by PhpStorm.
 * User: qcx
 * Date: 2017/10/10
 * Time: 13:46
 */
require_once "MyPDO.class.php";

//生成PDO对象
$pdo = new MyPDO();
//查询数据库得到数据
$sql ="select id,name,address,sex,hobbies,descs,image,education from user order by id desc ";  //insert update delete selet
$users= $pdo->selectAll($sql);
$data=$users;
//数据交给视图显示属兔
require_once "views/users.html";