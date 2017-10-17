<?php
/**
 * Created by PhpStorm.
 * User: qcx
 * Date: 2017/10/16
 * Time: 20:32
 */
require_once "../../start.php";
require_once ROOT_PATH."model/Flower.class.php";
require_once  ROOT_PATH."model/Category.class.php";
require_once  ROOT_PATH."model/Hint.class.php";
if($_SERVER["REQUEST_METHOD"]=="GET")
{
    $id =$_GET['id'];
    $model =new Flower();
    $cateModel = new Category();
    $hintModel = new Hint();
    $data['flower'] =$model->select(["id"=>$id]);
    $data['flowerHints']=$hintModel->selectMany();
    $data["categories"]=$cateModel->selectMany();
    require_once ROOT_PATH."view/admin/flower/edit.html";
}
else
{
    $image ="";
    //获得数据
    $id =$_POST['id'];
    $oldImage =$_POST['oldImage']; //!!!原来的头像
    $name=$_POST["name"];
    $price = $_POST["price"];
    $counts  =$_POST["counts"];
    $category_id =$_POST["category_id"];
    $descs = $_POST["descs"];

    $tuijian = $_POST['tuijian'];
    $hobbies =[];

    if(isset($_POST["hints"]))
    {
        foreach ($_POST["hints"] as $item)
            $hints[]=$item;
        $hints=implode(",",$hints);//将字符串数组粘结成字符串
    }
    else
        $hints="";
    //上传文件$_FILES是所有上传控件组成的数组，其name在这里就是key
    if ($_FILES["file"]["error"] > 0)//有错误，上传文件失败
    {
        //echo "Error: " . $_FILES["file"]["error"] . "<br />";
        $image=$oldImage;
    }
    else
    {
        //echo "Upload: " . $_FILES["file"]["name"] . "<br />";//上传文件的文件名
        // echo "Type: " . $_FILES["file"]["type"] . "<br />";//文件类型
        // echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
        // echo "Stored in: " . $_FILES["file"]["tmp_name"];
        if (!empty($_FILES['file']['name']))//说明选择了上传控件
        {
            //获得文件扩展名
            $temp_arr = explode(".", $_FILES["file"]["name"]);//将上传的文件名按照.拆分成数组。例如 myfile.gif 拆成 myfile 和 gif
            $file_ext = array_pop($temp_arr); //pops and returns the last value of the array, shortening the array by one element.
            //以时间戳重命名文件
            $new_name = time() . "." . $file_ext;
            //将文件移动到存储目录下
            move_uploaded_file($_FILES["file"]["tmp_name"], UPLOAD_PATH . $new_name);
            //echo "文件上传成功！";
            $image =$new_name;

        } else {
            // echo "无正确的文件上传";
            $image=$oldImage;
        }


    }
    //写添加语句
    $model =new Flower();

    $data =["name"=>$name,"counts"=>$counts,"price"=>$price,
        "hints"=>$hints,"descs"=>$descs,"category_id"=>$category_id,"tuijian"=>$tuijian,
        "image"=>$image
    ];
    $model->update($data,$id);

    //显示添加成功的信息，并跳转到列表页
    $msg ="修改成功";
    require_once  ROOT_PATH."view/admin/info.html";
    header("refresh:2;url=all.php");
}