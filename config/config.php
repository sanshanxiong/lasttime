<?php
/**
 * Created by PhpStorm.
 * User: qcx
 * Date: 2017/9/26
 * Time: 7:55
 */
$config=[
  'host'=>'localhost',
    'port'=>'3306',
    'user'=>'root',
    'pwd'=>'study',
    'dbname'=>'library',
    'charset'=>'utf8'
];

define('DB_USER',$config['user']);
define('DB_PASSWORD',$config["pwd"]);
define('DB_NAME',$config["dbname"]);
define('DB_HOST',$config["host"]);
define('DB_CHARSET',$config["charset"]);

//$dsn="mysql:host={$config['host']};dbname={$config['dbname']}";
