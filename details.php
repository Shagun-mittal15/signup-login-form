<?php
  include("conn.php");
  if(isset($_POST['submit']))
{
    $user_name=$_POST["name"];
    $user_mail=$_POST["mail"];
    $user_pass=$_POST["pass"];
    $user_cpass=$_POST["cpass"];
}
$sql="select * from register where name='$user_name'";
$result=mysqli_query($conn,$sql);
$count_name=mysqli_num_rows($result);

$sql="select* from register where mail='$user_mail'";
$result=mysqli_query($conn,$sql);
$count_mail=mysqli_num_rows($result);

if($count_mail==0 && $count_name==0)
{
   if($user_pass==$user_cpass)
   {
      $hash=password_hash($user_pass,PASSWORD_DEFAULT);
      $sql="INSERT INTO register(name,mail,password)VALUES('$user_name','$user_mail','$hash')";
      $result=mysqli_query($conn,$sql);
      if($result)
      {
         echo '<script>
         window.location.href="signup.php";
         alert("sign up successfully!!")
         </script>';
       
      }
   }
   else
   {
    echo '<script>
    window.location.href="signup.php";
    alert("password do not match!!")
    </script>';
   }
}
else
{
    if($count_name>0)
    {
       echo '<script>
       window.location.href="signup.php";
       alert("user name already exists!!")
       </script>';
    }
    else
    {
        if($count_mail>0)
       {
          echo '<script>
          window.location.href="signup.php";
          alert("user name already exists!!")
          </script>';
        }
    }
}
  ?>