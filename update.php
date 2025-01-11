<?php 
if(isset($_POST['updatebtn'])){
    $Id = $_POST['Id'];
    $Lawyer = $_POST['Lawyer'];
    $Service = $_POST['Service'];
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Number = $_POST['Number'];
    $Date = $_POST['Date'];
    $Time = $_POST['Time'];

    $con = mysqli_connect("localhost", "root","", "E-project");
   
    $sql = "UPDATE user SET Lawyer = '{$Lawyer}', Service = '{$Service}', Name = '{$Name}', Email = '{$Email}' , Number = '{$Number}', Date = '{$Date}' , Time = '{$Time}' WHERE Id = '{$Id}'";
    $run = mysqli_query($con, $sql);
    if($run){
        echo "<script> alert('Record is updated successfully')</script>";
        header("Location: display.php");
    }else{
        echo "<script>alert('Something Went wrong! Record could not be updated')</script>";
    }
}
?>