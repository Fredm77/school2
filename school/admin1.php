<?php

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>E SC BYIMANA | Registration Form</title>
    <link rel="icon" style="width:300%;height:200%;" href="byimanalogo.png">
    <style>
        body{
            font-family: montserrat;
        }
        .center{
            position: absolute;
            top: 50%;
            left: 50%;
            transform:translate(-50%,-50%);
            width: 400px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 30px 0px rgba(57, 86, 247, 0.2);
       
        }
        .center h1{
            text-align: center;
            padding: 0 0 20px 0;
            border-bottom: 1px  solid silver;
        } 
        .center form{
            padding: 0 40px;
            box-sizing: border-box;

        }
        form .txt-field{
            position: relative;
            border-bottom: 2px solid #adadad;
            margin: 30px 0;
        }
        .txt-field input{
            width: 100%;
            padding: 0 5px;
            height: 40px;
            font-size: 16px;
            border: none;
            background: none;
            outline: none;
        }
        .txt-field label{
            position: absolute;
            top: 50%;
            left: 5px;
            color: #adadad;
            transform: translateY(-50%);
            font-size: 16px;
            pointer-events: none;
            transition: .5s;
        }
        .txt-field span::before{
            content: '';
            position: absolute;
            top: 40px;
            left: 0;
            width: 0%;
            height: 2px;
            background: #2691d9;
            transition: .5s;
        }
        .txt-field input:focus ~label,
        .txt-field input:valid ~label{
            top: -5px;
            color: #2691d9;
        }
        .txt-field input:focus ~span::before,
    .txt-field input:valid ~span::before{
        width: 100%;
    }
    .pass{
        text-align: center;
    }
    .login{
        color: white;
        background-color: #2691d9;
        background-size: 200px;
        border-radius: 25px;
        border: none;
        padding: 3px 130px;
        font-size: 30px;
        margin: 10px -5px;
        cursor: pointer;
    }
    .signup-link{
        padding-bottom: 20px;
        text-align: center;
    }
    .signup-link a{
        text-decoration: none;
        margin: 0 0 18px;
    }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="center">
            <h1>Login</h1>
            <form method="post">
               <div class="txt-field">
                <input type="text" name="name" required>
                <span></span>
                <label >Username</label>
               </div>
               <div class="txt-field">
                <input type="password" name="password" required>
                <span></span>
                <label >Password</label>
               </div>
               <div class="pass">Forgot Password?</div>
               <input type="submit" value="Login" name="login" class="login">
               <div class="signup-link">
                Do you have an account?<a href="#">Sign Up</a>
               </div>
            </form>
        </div>
    </div>
</body>
</html>
<?php
if(isset($_POST["login"])){
    $name=$_POST["name"];
    $password=$_POST["password"];
    $connect=mysqli_connect("localhost","root","","school");
    $q=mysqli_query($connect,"select * from users where users.name='$name' and users.pasword='$password';");
    while($row=mysqli_fetch_array($q)){
        if($name=$row["name"] && $password=$row["pasword"]){
            header("Location:admin4.php");
           }
           else{
            echo "<script>alert('Wrong Password and Username')</script>";
           }
    }

}
?>