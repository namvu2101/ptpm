<?
include "connect.php";
if(isset($_POST['submit_password']) && $_POST['email'])
{
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $select=("update user set password='$pass' where email='$email'");
  print_r($select);
  $data = mysqli_query($conn,$select);

  if($data == true)
  {
    echo " thanh cong";
  }
}
?>