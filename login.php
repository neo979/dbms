<?php
 include "config.php";
 if($conn===false)
 {
     die("connection error");
 }
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sql="select *from login where username='".$username."' AND password='".$password."'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    if($row["usertype"]=="user")
    {
        echo "user";

    }
    elseif($row["usertype"]=="admin")
    {
        header("location:index.php");
        
    }
    else{
        echo "username and password incorrect";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            margin:0;
            padding:0;
            font-family:montserrat;
            background:linear-gradient(120deg,#2980b9,#8e44ad);
            height:100vh;
            overflow:hidden;
        }
        header{
    padding: 10px;
    text-align: center;
   
    color: #edf1f2;

}
header h1{
    font-size: 40px;
    color:white;
}
        .center{
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%, -50%);
            width:400px;
            background:white;
            border-radius:10px;
        }
        .center h2{
            text-align:center;
            color:black;
            font-size: 40px;
            padding:0 0 20px 0;
            border-bottom:1px solid silver;
        }
        .center form{
            padding:0 40px;
            box-sizing:border-box;
        }
        form .txt_field{
            position:relative;
            border-bottom:2px solid #adadad;
            margin:30px 0;
        }
        .txt_field input{
            width:100%;
            padding:0 5px;
            height:40px;
            font-size:16px;
            border:none;
            background:none;
            outline:none;
        }
        .txt_field label{
            position:absolute;
            top:50%;
            left:0;
            color:#adadad;
            transform:translateY(-50%);
            font-size:16px;
            pointer-events:none;
            transition:.5s;

        }
        .txt_field span::before{
            content:'';
            position:absolute;
            top:40px;
            left:0;
            width:100%;
            height:2px;
            background:#2691d9;
            transition:.5s;
        }
        .txt_field input:focus ~ label,
        .txt_field input:valid ~ label{
            top:-5px;
            color:#2691d9;

        }
        .txt_field input:focus ~ span::before,
        .txt_field input:valid ~ span::before{
           width:100%;
        }
        input[type="submit"]{
            width:100%;
            height:50px;
            border:1px solid;
            background:#2691d9;
            border-radius:25px;
            font-size:18px;
            color:#e9f4fb;
            font-weight:700;
            cursor:pointer;
            outline:none;
        }
        input[type="submit"]:hover{
            border-color:#2691d9;
            transition:.5s;
        }

    </style>
    <header>
        <h1>SUPER STORE KOCHI</h1>
    </header>
    <div class="center">
    <h2>Login</h2>
     <form action="index.php" method="POST">
       <div class="txt_field">
         <input type="text" name="username" required>
         <span></span>
         <label>Username</label>
        
      </div>
      <div class="txt_field">
    
        <input type="text" name="password" required>
        <span></span>
        <label>Password</label>
       
     </div>
        <input type="submit" value="Login">
</form>
</div>
</body>
</html>