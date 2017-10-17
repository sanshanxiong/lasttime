<?php
/**
 * Created by PhpStorm.
 * User: qcx
 * Date: 2017/10/16
 * Time: 20:31
 */
require_once "../../start.php";
require_once  ROOT_PATH."model/Flower.class.php";

$id = $_POST['id'];

$model= new Flower();
$model->delete(["id"=>$id]);
$msg ="删除成功";
require_once  ROOT_PATH."view/admin/info.html";
header("refresh:2;url=all.php");