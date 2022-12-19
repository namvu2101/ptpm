<?php
include "connect.php";
$email = $_POST['email'];
$query = "SELECT email FROM `user` where `email` ='$email' ";
$data = mysqli_query($conn,$query);
$result = array();
 while ($row = mysqli_fetch_assoc($data))
{
     $result[] = ($row);
}
if(!empty($result)){
	$arr = [
    'success' => true,
    'message' => "Thay doi mat khau" ,
    $result ] ;     
}   
else{

	$arr =  [
    'success' => false ,
    'message' => "Mail khong chinh xac" ,
    $result ] ;     

}

echo (json_encode($arr));

?>