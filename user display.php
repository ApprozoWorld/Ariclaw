<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AricLaw</title>
</head>
<body>
<?php
    $con= mysqli_connect("localhost","root","","E-project");
    $sql="SELECT* from signup";
    $run=mysqli_query($con,$sql);
    if (mysqli_num_rows($run)>0) {
    
    ?>
    <table border="1" cellpadding="20px" cellspacing="0">
<thead>
    <tr>
        
        <td>Name</td>
        <td>Username</td>
        <td>Email</td>
        <td>Password</td>
        <td>Confirm_password</td>
        <td>Action</td>
    </tr>
</thead>
<tbody>
    <?php
    while($data=mysqli_fetch_assoc($run)) {
     ?>  
     
     <tr>
         <td><?php  echo $data['Name'];?></td>
         <td><?php  echo $data['Username'];?></td>
         <td><?php  echo $data['Email'];?></td>
         <td><?php  echo $data['Password'];?></td>
        <td><?php  echo $data['Confirm_password'];?></td>
        <td>
        <a style="text-decoration: none; color: green;" href="user edit.php?Id=<?php echo $data['Id']; ?>">Edit</a>
        <a style="text-decoration: none; color: red;" href=" user delete.php>?Id=<?php echo $data['Id']; ?>">Delete</a>
    </td>
     </tr>
<?php }?>
</tbody>
    </table>
    <br><br><br>
    <a href="Appointment.php"><button>Submit</button></a>
<?php }?>
</body>
</html>