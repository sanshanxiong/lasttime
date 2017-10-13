<?php
/**
 * Created by PhpStorm.
 * User: qcx
 * Date: 2017/10/12
 * Time: 20:03
 */
/*
 *getcwd() 获取的是工作目录的路径，
 *    即a文件若被b包含，执行b时返回的是b的路径；a文件若被c包含，执行c时，返回的是c 的路径
*/
//start.php
define('ROOT_PATH',__DIR__.'/');//_DIR_获取的是它所处于的原始文件的路径。
include_once ROOT_PATH."config/config.php";
define("PUBLIC_PATH",ROOT_PATH."public/");
define("UPLOAD_PATH",PUBLIC_PATH."upload/");

//echo getcwd()."<br/>";
