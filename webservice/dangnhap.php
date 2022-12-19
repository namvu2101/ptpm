<?php
include "connect.php";
$email = $_POST['email'];
$pass = $_POST['password'];
$query = "SELECT * FROM `user` WHERE `email` = '$email'";
$data = mysqli_query($conn,$query);
$numrow = mysqli_num_rows($data); // ktra co du lieu tra ve khong
if($numrow ==null)
    {
      $arr =
      [
        'message' => "Email sai"
      ];
      
    }
else
    {
$query = "SELECT * FROM `user` where `email` ='$email' and `password`='$pass' ";
$data = mysqli_query($conn,$query);
$result = array();
 while ($row = mysqli_fetch_assoc($data))
{
     $result[] = ($row);
}
if(!empty($result)){
	$arr = [
    'success' => true,
    'message' => "thanh cong" ,
    'result' => $result ] ;     
}   
else{

	$arr =  [
    'success' => false ,
    'message' => "Mat khau sai" ,
    'result' =>$result ] ;     

}
    }
echo (json_encode($arr));

?>