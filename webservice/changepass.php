<?php
include "connect.php";
$email = $_POST['email'];
$password = $_POST['password'];
$newpassword = $_POST['newpassword'];

//check data trung
$query = "SELECT `password` FROM `user` WHERE `email` = '$email'";
$data = mysqli_query($conn,$query);
$numrow = mysqli_num_rows($data); // ktra co du lieu tra ve khong
if($numrow <0)
    {
      $arr =
      [
        'message' => "Mat khau sai"
      ];
      
    }
else
    {
    //
    $update = "UPDATE `user` set `password`='$newpassword' where `email`='$email' ";
    $data = mysqli_query($conn,$update);

if($data == true)
{
	$arr = [
    'success' => true,'message'=>"Doi mk thanh cong"];
}   
else{

	$arr = [
    'success' => false,'message'=>"Thất bại"];

}
}

echo (json_encode($arr));


?>