<html >  
<head>
    <title>Stock Entry Page</title>
    <link rel="stylesheet" href="data1.css">
</head>
<body>
<header>
<h1 class="main_heading">Stock Entry Page</h1>
</header>

    <center>  
        <form method="POST"  >                        
        <p>
                <label for="SNo">Serial No :</label>
                <input type="text" name="SNo">
</P>          
<p>
                <label for="PID">Product ID:</label>
                <input type="text" name="PID" >
            </p>           
<p>
                <label for="NP">Name of Product:</label>
                <input type="text" name="NP" >
            </p>           
<p>
                <label for="Qt">Quantity</label>
                <input type="text" name="Qt">
            </p>             
<p>
                <label for="Pr">Price</label>
                <input type="text" name="Pr">
            </p>    
            <input type="submit" name="submit" value="Submit" >
        </form>
        <?php
include "config.php";
if(isset($_POST['submit']))
{
    $SNo=$_POST['SNo'];
    $PID=$_POST['PID'];
    $NP=$_POST['NP'];
    $Qt=$_POST['Qt'];
    $Pr=$_POST['Pr'];
$ins="INSERT INTO stock values('$SNo','$PID','$NP','$Qt','$Pr')";
if($conn->query($ins)==TRUE)
{
echo"Entered";
}
else
{
    echo"failed";
}
}
?>
       
       <nav>
        <a href="index.php">Home</a>
        </nav>
    </center>
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
input[type="SNo"],
input[type="PID"],
input[type="NP"],
input[type="Qt"],
input[type="Pr"],
textarea{
    width: 100%;
    padding: 12px;
    border:1px solid rgb(0, 0, 0);
    border-radius: 5px;
    margin: 10px;
}
input[type="submit"]{
    background-color:#00aa25;
    color: rgb(0, 0, 0);
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  
}
input[type="submit"]:hover{
    background-color: #00c711;

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
         <footer>
        <a href="#">Contact Us</a>
        <a href="#">Terms of Use</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Refund Policy</a>
        <a class="copyright" href="#">&copy; 2021 | Super Store</a>
    </footer>
</body>  
</html>