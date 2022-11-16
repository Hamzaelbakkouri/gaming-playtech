<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: grey;  
}  
button {   
       background-color: #4CAF50;   
       width: 100%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }   
</style>   
    <title>Home</title>
</head>
<body>
  

    <form action='login.php'  method='POST'>

        email:<input type='email' name=email>
        </br>
        password:<input type='password' name='password'>
        </br>
        <input type='submit' name='submit' value='Login'>
    </form>
</body>
</html>

<?php
    include_once 'connexion.php';
        if (isset($_POST['submit'])){
            $email=$_POST['email'];
            $password=$_POST['password'];
            $req = mysqli_query($con , "SELECT * FROM `admin` WHERE `email`= '$email' and `password`='$password'");
            $row= $req->fetch_assoc();
            if(isset($row)){
                header("location: index.php");
            }
            else{
                echo "email or password is not correct";
            }
        }
    ?>