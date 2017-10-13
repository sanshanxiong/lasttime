<?php
/**
 * Created by PhpStorm.
 * User: qcx
 * Date: 2017/10/10
 * Time: 13:46
 */
require_once "../../start.php";
require_once ROOT_PATH."Model/User.class.php";

$model =new User();
$users = $model->selectMany();

$data=$users;
//数据交给视图显示属兔
require_once ROOT_PATH."view/admin/user/all.html";