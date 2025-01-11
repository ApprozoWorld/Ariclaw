<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AricLaw</title>
  
</head>
<body>
<?php 
$con = mysqli_connect("localhost", "root", "", "E-project");
$Id = $_GET['Id'];

$sql = "SELECT * FROM user WHERE Id = '{$Id}'";
$run = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($run);
?>
<form action="update.php" method="post">
    <input type="hidden" name="Id" value="<?php echo $row['Id']; ?>"><br><br>
    <input type="text" name="Lawyer" id="" value="<?php echo $row['Lawyer']; ?>"><br><br>
    <input type="text" name="Service" id="" value="<?php echo $row['Service']; ?>"><br><br>
    <input type="text" name="Name" id="" value="<?php echo $row['Name']; ?>"><br><br>
    <input type="email" name="Email" id="" value="<?php echo $row['Email']; ?>"><br><br>
    <input type="number" name="Number" id="" value="<?php echo $row['Number']; ?>"><br><br>
    <input type="Date" name="Date" id="" value="<?php echo $row['Date']; ?>"><br><br>
    <input type="Time" name="Time" id="" value="<?php echo $row['Time']; ?>"><br><br>
    <input type="submit" value="Update" name="updatebtn">
</form>

</body>
</html>