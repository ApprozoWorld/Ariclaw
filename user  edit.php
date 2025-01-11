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
$sql = "SELECT * FROM signup WHERE Id = '{$Id}'";
$run = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($run);
?>
<form action="update.php" method="post">
    <input type="hidden" name="Id" value="<?php echo $row['Id']; ?>"><br><br>
    <input type="text" name="Name" id="" value="<?php echo $row['Name']; ?>"><br><br>
    <input type="text" name="Username" id="" value="<?php echo $row['Username']; ?>"><br><br>
    <input type="email" name="Email" id="" value="<?php echo $row['Email']; ?>"><br><br>
    <input type="password" name="Password" id="" value="<?php echo $row['Password']; ?>"><br><br>
    <input type="password" name="Confirm_password" id="" value="<?php echo $row['Confirm_password']; ?>"><br><br>
    <input type="submit" value="Update" name="updatebtn">
</form>

</body>
</html>