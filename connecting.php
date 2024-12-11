<?php
if(isset($_POST['submit']))
{
    $user_name=$_POST['name'];
    $user_pass=$_POST['pass'];
}
$conn=mysqli_connect("localhost","root","","shagundb");
if(!$conn)
{
   die("error in connection".mysqli_error($conn));
}
?>