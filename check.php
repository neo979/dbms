<html>
    <head><link rel="stylesheet" href="result1.css"></head>
    <body>
    <h1 class="main_heading">Stock Checking Page</h1>
<?php
include "config.php";
$sql="SELECT * FROM stock ";
$output=$conn->query($sql);
if($output->num_rows>0)
{
    echo"<table border=1 cellspacing=1 cellpadding=1><tr><th>Serial No</th>
    <th>Product ID</th>
    <th>Name of Product</th>
    <th>Quantity</th>
    <th>Price</th>" ;
    while($row=$output->fetch_assoc())
    {
        echo 
        "<tr><td><font color=red>".$row["SNo"].
        "</font></td><td><font color=red>".$row["PID"].
        "</font></td><td><font color=red>".$row["NP"].
        "</font></td><td><font color=red>".$row["Qt"].
        "</font></td><td><font color=red>".$row["Pr"].
        "</font></td><td>";
    }
    echo"</table>";
}
else
{
    echo"Not Found!";
}
?>
<nav>
        <a href="index.php">Home</a>
        </nav>
</body>
</html>