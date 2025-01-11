<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AricLaw</title>
</head>
<body>
<?php
$Id= $_GET['Id'];
$con = mysqli_connect("localhost","root","","E-project");
$sql= "DELETE FROM signup WHERE Id='{$Id}'";
$run=mysqli_query($con,$sql);
    header("Location:display.php");
mysqli_close($con);
?>
</body>
</html>