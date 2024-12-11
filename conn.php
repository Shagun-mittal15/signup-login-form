<?php
if(isset($_POST['Submit']))
{
    $user_name=$_POST["name"];
    $user_mail=$_POST["mail"];
    $user_pass=$_POST["pass"];
    $user_cpass=$_POST["cpass"];
}
$conn=mysqli_connect("localhost","root","","shagundb");
if(!$conn)
{
   die("error in connection".mysqli_error($conn));
}
?>