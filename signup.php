<?php
  include("conn.php");
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup_css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="signupbox">
            <h2>Signup</h2>
            <form action="details.php" method="post">

                <div class="user">
                    <i class="fas fa-user"></i><input type="text" placeholder="Enter your username" name="name">
                </div>
                <div class="user">
                    <i class="fas fa-envelope"></i><input type="email" placeholder="Enter your email" name="mail">
                </div>
                <div class="user">
                    <i class="fas fa-lock"></i><input type="password" placeholder="create password" name="pass">
                </div>
                <div class="user">
                    <i class="fas fa-lock"></i><input type="password" placeholder="reenter the password" name="cpass">
                </div>
                <input id="btn" type="Submit" name="Submit" value="submit">
            </form>
        </div>
    </div>
</body>
</html>