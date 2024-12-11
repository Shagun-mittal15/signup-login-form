<?php
  include("connecting.php");
  ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="signup_css.css" rel="stylesheet">
  </head>
  <body>
        <din class="container">
          <div class="signupbox">
             <h1 id="head">login form</h1>
               <form name="form" action="verify.php" method="post">
                  <div class="user">
                    <i class="fas fa-user"></i><input type="text" placeholder="Enter your username/email" name="name">
                  </div>
                  <div class="user">
                    <i class="fas fa-lock"></i><input type="password" placeholder="Enter your password" name="pass">
                  </div>
                <input type="submit" id="btn" name="submit" value="submit"/>
              </form>
           </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>