<?php
/**
 * Created by PhpStorm.
 * User: qcx
 * Date: 2017/10/10
 * Time: 14:32
 */
require_once "../../start.php";
require_once  ROOT_PATH."lib/MyPDO.class.php";

$id = $_POST['id'];

$pdo= new MyPDO();
$sql= "delete from user where id=$id";
$pdo->nonQuery($sql);
$msg ="删除成功";
require_once  ROOT_PATH."view/admin/info.html";
header("refresh:2;url=all.php");
