<?php
/**
 * Created by PhpStorm.
 * User: qcx
 * Date: 2017/10/16
 * Time: 20:32
 */
require_once "../../start.php";
require_once  ROOT_PATH."/model/Flower.class.php";
$id=$_GET['id'];
$model =new Flower();
$flower = $model->getFlowerById($id);
$data =$flower;
require_once ROOT_PATH."view/admin/flower/show.html";