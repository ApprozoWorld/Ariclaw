<?php 
if(isset($_POST['updatebtn'])){
    $Id = $_POST['Id'];
    $Name = $_POST['Name'];
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Confirm_password = $_POST['Confirm_password'];

    $con = mysqli_connect("localhost", "root","", "E-project");
   
    $sql = "UPDATE signup SET Name = '{$Name}', Username = '{$Username}', Email = '{$Email}' ,  Password = '{$Password}', Confirm_password = '{$Confirm_password}' WHERE Id = '{$Id}'";
    $run = mysqli_query($con, $sql);
    if($run){
        echo "<script> alert('Record is updated successfully')</script>";
        header("Location: display.php");
    }else{
        echo "<script>alert('Something Went wrong! Record could not be updated')</script>";
    }
}
?>