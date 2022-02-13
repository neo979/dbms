<html>
    <head><link rel="stylesheet" href="result1.css"></head>
    <body>
    <h1 class="main_heading">Bill</h1>
<?php
include "config.php";
$find=$_GET["search"];
$sql="SELECT * FROM storage WHERE NP=$find";
$output=$conn->query($sql);
?>
</body>
</html>