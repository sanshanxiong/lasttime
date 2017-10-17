<?php
/**
 * Created by PhpStorm.
 * User: qcx
 * Date: 2017/10/16
 * Time: 20:33
 */
class Flower extends Model
{
    //$data是关联数组格式的选择条件，默认是选择所有的
    public function  getAllFlowers($data=null)
  {
      require_once ROOT_PATH.'model/Category.class.php';
      $cateModel = new Category();
      $flowers = $this->selectMany($data);
      //由于category_id一列是数字，这样可以为得到的$flowers索引数组每个元素添加一个分类名称
      for($i=0;$i<count($flowers);$i++)
      {
          $category_id =$flowers[$i]["category_id"] ;
          $category_name = $cateModel->select(["id"=>$category_id])['name'];
          //给每个花构成的关联数组添加一个键和值
          $flowers[$i]['category_name']= $category_name;
      }

      return $flowers;
  }

    //$data是关联数组格式的选择条件，默认是选择所有的
    public function  getFlowerById($id)
    {
        require_once ROOT_PATH.'model/Category.class.php';
        $cateModel = new Category();
        $flower = $this->select(["id"=>$id]);
        //由于category_id一列是数字，这样可以为得到的$flowers索引数组每个元素添加一个分类名称
        $category =$cateModel->select(["id"=>$flower["category_id"]]);
        $category_name = $category['name'];
        $flower['category_name']= $category_name;


        return $flower;
    }
}