<?php
/**
 * Created by PhpStorm.
 * User: qcx
 * Date: 2017/10/10
 * Time: 14:58
 */
require_once  "MyPDO.class.php";
if($_SERVER["REQUEST_METHOD"]=="GET")
{
    $id =$_GET['id'];
    $pdo=new MyPDO();
    $sql="select id,password,name,address,sex,hobbies,descs,image,education from user  where id=$id";
    $user =$pdo->selectOne($sql);
    $data =$user;
    require_once "views/edituser.html";
}
else
{
    //获得post数据,这部分基本和添加时一样
    $image="";
    $id=$_POST['id'];//!!!
    $oldImage =$_POST['oldImage']; //!!!
    $name=$_POST["name"];
    $password = $_POST["password"];
    $address  =$_POST["address"];
    $sex =$_POST['sex'] ;

    $descs = $_POST["descs"];
    $education = $_POST["education"];
    $hobbies =[];
    if(isset($_POST["hobbies"]))
    {
        foreach ($_POST["hobbies"] as $item)
            $hobbies[]=$item;
        $hobbies=implode(",",$hobbies);//将字符串数组粘结成字符串
    }
    else
        $hobbies="";
    //上传文件
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
        if (!empty($_FILES['file']['name']))
        {
            //获得文件扩展名
            $temp_arr = explode(".", $_FILES["file"]["name"]);//将上传的文件名按照.拆分成数组。例如 myfile.gif 拆成 myfile 和 gif
            $file_ext = array_pop($temp_arr); //pops and returns the last value of the array, shortening the array by one element.
            //以时间戳重命名文件
            $new_name = time() . "." . $file_ext;
            //将文件移动到存储目录下
            move_uploaded_file($_FILES["file"]["tmp_name"], UpLoadPath . $new_name);
            //echo "文件上传成功！";
            $image =$new_name;

        } else {
            // echo "无正确的文件上传";
            $image=$oldImage;
        }


    }
    //写添加语句
    $pdo = new MyPDO();
    $sql ="update user  set name= :name ,password=:password,address=:address, sex=:sex,
               descs=:descs,education=:education,hobbies=:hobbies,image=:image
  where id =:id";
    $data =["name"=>$name,"password"=>$password,"address"=>$address,"id"=>$id,
             "sex"=>$sex,"descs"=>$descs,"education"=>$education,"hobbies"=>$hobbies,
             "image"=>$image
        ];
    //执行添加操作
    $pdo->nonQuery($sql,$data);
    //显示添加成功的信息，并跳转到列表页
    $msg ="修改成功";

    require_once "views/info.html";
    header("refresh:2;url=users.php");
}