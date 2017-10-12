<?php
/**
 * Created by PhpStorm.
 * User: qcx
 * Date: 2017/10/10
 * Time: 14:32
 */
require_once  "MyPDO.class.php";

$id = $_POST['id'];

$pdo= new MyPDO();
$sql= "delete from user where id=$id";
$pdo->nonQuery($sql);
$msg ="删除成功";
require_once "views/info.html";
header("refresh:2;url=users.php");
