<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AricLaw</title>
    <?php
    include('links.php');
    ?>
</head>
<body>
<?php
    include('navbar.php');
    ?>
<section class="ftco-consultation ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url(images/bg_2.jpg);">
			<!-- <div class="overlay"></div>  -->
    	<div class="container">
    	 <div class="row d-md-flex justify-content-end">
    		<div class="col-md-6 half p-3 py-5 pl-md-5 ftco-animate heading-section heading-section-white" style="margin-top: 100px; border: 2px solid white; background-color:#afa939; border-radius:5px">
    				<h2 class="mb-4">Booking an Appointment</h2> 
    				<form action="#" class="consultation" method="post">
				<div class="form-group">
					<select class="form-control" style="height: 55px;" name="Lawyer">
                        <option selected>Select Lawyer</option>
                        <option value="1" style="color: black;">Service 1</option>
                        <option value="2" style="color: black;">Service 2</option>
                        <option value="3" style="color: black;">Service 3</option>
                    </select>
				</div>
				<div class="form-group">
					<select class="form-control" style="height: 55px;" name="Service">
                        <option selected>Case</option>
                        <option value="1" style="color: black;">Service 1</option>
                        <option value="2" style="color: black;">Service 2</option>
                        <option value="3" style="color: black;">Service 3</option>
                    </select>
				</div>
	            <div class="form-group">
	              <input type="text" class="form-control" placeholder="Your Name" name="Name">
	            </div>
	            <div class="form-group">
	              <input type="Email" class="form-control" placeholder="Your Email" name="Email">
	            </div>
	            <div class="form-group">
	              <input type="number" class="form-control" placeholder="Phone Number" name="Number">
	            </div>
                <div class="form-group">
	              <input type="date" class="form-control" placeholder="Date" name="Date">
	            </div>
                <div class="form-group">
	              <input type="time" class="form-control" placeholder="Time" name="Time">
				  </div>
	            <div class="form-group">
	             <input type="submit" value="Make Appointment" class="btn btn-dark py-3 px-4" name="Submit">
	            </div>
	          </form>
    			</div>
    		</div>
    	</div>
    </section> 
	<?php

if(isset($_POST["Submit"])){
$Lawyer=$_POST["Lawyer"];
$Service=$_POST["Service"];
$Name=$_POST["Name"];
$Email=$_POST["Email"];
$Number=$_POST["Number"];
$Date=$_POST["Date"];
$Time=$_POST["Time"];

 $con= mysqli_connect("localhost","root","","E-project");
if($con){
	echo "CONNECTED";
}else{
	echo "NOT CONNECTED";
}
$sql = "INSERT INTO `user`(`Lawyer`, `Service`, `Name`, `Email`, `Number`, `Date`, `Time`) VALUES ('$Lawyer','$Service','$Name','$Email','$Number','$Date','$Time')";
$run = mysqli_query($con,$sql);
if($run){
	echo "<script> alert('SUCESSFULLY SUBMITTED')</script>";
}else{
	echo "<script> alert('SOMETHING WENT WRONG')</script>";
}
}
?>
    <?php
    include('footer.php');
    include('js.php');
    ?>
</body>
</html>