<html >  
<head>
    <title>Billing</title>
    <link rel="stylesheet" href="data1.css">
</head>
<body>
<h1 class="main_heading">Billing</h1>
    <center>  
        <form action ="result.php"  >                                 
<p>
                <label for="NP">Name of Product:</label>
                <input type="text" name="NP" >
            </p>           
<p>
                <label for="Qt">Quantity</label>
                <input type="number" name="Qt">
            </p>               
            <input type="submit" name="submit" value="Submit" >
            <input type= "text" name = "search">
        </form>
        <nav>
        <a href="index.php">Home</a>
        </nav>
    </center>
    <?php
    include "config.php";
$conn->close();
?>
</body>  
</html>