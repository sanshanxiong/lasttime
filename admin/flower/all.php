<?php
/**
 * Created by PhpStorm.
 * User: qcx
 * Date: 2017/10/16
 * Time: 20:32
 */
require_once "../../start.php";
require_once ROOT_PATH."model/Flower.class.php";
require_once ROOT_PATH."model/Category.class.php";
$model =new Flower();
if(isset($_GET["category_id"]))
{
    $flowers = $model->getAllFlowers(["category_id"=>$_GET["category_id"]]);
}
else
{
    $flowers = $model->getAllFlowers();
}
$cateModel = new Category();
$data['categories'] = $cateModel->selectMany();
$data['flowers']=$flowers;
require_once ROOT_PATH."view/admin/flower/all.html";