<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Stores</title>
    <link rel="stylesheet" href="#">
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
        input[type="submit"]:hover{
            border-color:#2691d9;
            transition:.5s;
        }
        header h1{
    font-size: 40px;
    padding: 10px;
}
nav{
    background-color: rgb(255, 255, 255);
    overflow: hidden;
    
}
nav a{
    display: block;
    color: rgb(0, 28, 187);
    text-decoration: none;
    padding: 14px 20px;
    float: left;
   
}
footer{
    overflow: hidden;
    background-color: rgb(11, 88, 34);

}
footer a{
    display: block;
    color: white;
    text-decoration: none;
    padding: 14px 20px;
    float: left;
}
        </style>
<?php
   include "config.php";
    ?>
    <header>
        <h1>Super Stores </h1>
    </header>
    <nav>
        <a href="entry.php">Stock Entry Page</a>
        <a href="check.php">Stock Checking Page</a>
        <a href="bill.php">Billing</a>
    </nav>
    <footer>
        <a href="#">Contact Us</a>
        <a href="#">Terms of Use</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Refund Policy</a>
        <a class="copyright" href="#">&copy; 2021 | Super Store</a>
    </footer>

    
  
</body>
</html>