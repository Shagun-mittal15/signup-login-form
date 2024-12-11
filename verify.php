<?php
  include("connecting.php");
  if(isset($_POST['submit']))
{
    $user_name=$_POST["name"];
    $user_pass=$_POST["pass"];
}
$sql="select* from register where name='$user_name' or mail='$user_name'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
if($row)
{
    if(password_verify($user_pass,$row["password"]))
    {
        header("location:entery.php");
    }
    else
    {
        echo '<script>
        window.location.href="login.php";
        alert("incorrect password!!")
        </script>';
    }
}
else
{
    echo '<script>
        window.location.href="login.php";
        alert("incorrect username!!!")
        </script>';
}