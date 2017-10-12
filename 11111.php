<?php
/**
 * Created by PhpStorm.
 * User: qcx
 * Date: 2017/10/12
 * Time: 13:08
 */

$t=time();
echo "今天的日期时间戳是:".$t."";
echo "把时间戳转换成日期： " . date("Y-m-d H:i:s", $t);
?>