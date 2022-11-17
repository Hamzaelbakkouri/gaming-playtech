<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
     
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="email" name="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" name="submit" value="Login">
      </form>
    </div>

  </body>
</html>

<?php
    include_once 'connexion.php';
        if (isset($_POST['submit'])){
            $email=$_POST['email'];
            $password=$_POST['password'];
            $req = mysqli_query($con , "SELECT * FROM admin WHERE email= '$email' and password='$password'");
            $row= $req->fetch_assoc();
            if(isset($row)){
                header("location: index.php");
            }
            else{
                echo "email or password is not correct";
            }
        }
    ?>