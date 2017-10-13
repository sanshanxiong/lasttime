<?php
/**
 * Created by PhpStorm.
 * User: qcx
 * Date: 2017/10/10
 * Time: 14:01
 */
require_once "../../start.php";
require_once  ROOT_PATH."/model/User.class.php";
$id=$_GET['id'];
$model =new User();
$user = $model->select(["id"=>$id]);
$data =$user;
require_once ROOT_PATH."view/admin/user/show.html";