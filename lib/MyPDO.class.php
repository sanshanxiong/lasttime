<?php
/**
 * Created by PhpStorm.
 * User: qcx
 * Date: 2017/9/28
 * Time: 9:50
 */

// require_once 'config/config.php';  removed because it have included in star.php
class MyPDO {
    protected  $pdo;
    public function __construct()
    {
        $dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST;
        $user=DB_USER;
        $password=DB_PASSWORD;
        $this->pdo=new PDO($dsn,$user,$password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->exec("set names ".DB_CHARSET);
    }
    //如果成功，PDO::query()返回PDOStatement对象，如果失败返回 FALSE 。
    public function selectOne($sql,$data=[])
    {

        $stmt=$this->pdo->prepare($sql);
        $stmt->execute($data);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result=$stmt->fetch();//fetch是取一个
        return $result;
    }
    public function selectAll($sql,$data=[])
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();//fetchAll是取所有的

        return $result;
    }

    public function nonQuery($sql,$data=[])
    {
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute($data);
        return $stmt->rowCount();
    }
}