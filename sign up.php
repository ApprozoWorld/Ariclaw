<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AricLaw</title>
<style>
    body {
	font-family: Arial, sans-serif;
	background-color: #f3f3f3;
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
}
.container1 {
	justify-content: center;
    display:flex;
	align-items: center;
	height: 100%;
	width: 100%;
    margin-top: 300px;
}
.form-container {
	background-color: #afa939;
	border-radius: 8px;
	box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
	padding: 30px;
	width: 100%;
	max-width: 400px;
}
h2 {
	color: white;
	margin-bottom: 20px;
}
label {
	font-size: 14px;
	color: #333;
	text-align: left;
	margin-bottom: 8px;
	display: block;
}
input[type="password"],
input[type="text"],
input[type="Email"] {
	width: 100%;
	padding: 10px;
	margin-bottom: 20px;
	border: 1px solid #ddd;
	border-radius: 4px;
	font-size: 16px;
}
button {
	background-color: black;
	color: white;
	border: none;
	padding: 12px 20px;
	border-radius: 4px;
	font-size: 16px;
	cursor: pointer;
	width: 100%;
}
button:hover {
	background-color: rgb(26, 25, 25);
}
p {
	font-size: 14px;
	color: black;
}
a:hover {
	text-decoration: underline;
}
</style>
    <?php
    include('links.php');
    ?>
</head>
<body>
    <?php
    include('navbar.php');
    ?>
     <section class="ftco-consultation ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url(images/bg_2.jpg);">
            <div class="container1">
        <div class="form-container">
            <h2>Sign Up</h2>
            <form method="POST" onsubmit="handleSignup(event)">
            <label for="Name">Name:</label>
                <input type="text" name="Name" placeholder="Your Name" required>

                <label for="username">Username:</label>
                <input type="text" name="Username" placeholder="Enter username" required>

                <label for="email">Email:</label>
                <input type="email" name="Email" placeholder="Enter your email" required>

                <label for="password">Password:</label>
                <input type="password" name="Password" placeholder="Enter your password" required>

                <label for="confirm-password">Confirm Password:</label>
                <input type="password" name="Confirm_password" placeholder="Confirm your password"
                    required>

                <button type="Submit" name="Submit">Sign Up</button>
                <p>Want to be a Lawyer<a href=".../admin_2/lawyersignup.php" style="color:white;">Register here</a></p>

                <p>Already have an account? <a href="login.php" style="color:white;">Login here</a></p>
            </form>
    </div>
    </div>
</section>
<?php

    if(isset($_POST['Submit'])){
        $Name=$_POST['Name'];
        $Username=$_POST['Username'];
        $Email=$_POST['Email'];
        $Password=$_POST['Password'];
        $Confirm_password=$_POST['Confirm_password'];
        
    $con=mysqli_connect("localhost","root","","E-project");

    if ($con) {
        echo "connected";
    } else {
        echo "not connected";
    }
        $q="INSERT INTO `signup`(`Name`, `Username`,`Email`, `Password`,`Confirm_password`) VALUES ('$Name','$Username','$Email','$Password','$Confirm_password')";
        $run=mysqli_query($con,$q);
        if($run){
            echo "<script>alert('Registeration Successfully')</script>";
            echo  "<script> window.location.href='index.php'; </script>";
        }else{
            echo "<script>alert('Something went wrong')</script>";
        }
    }
?>
    <?php
    include('js.php');
    ?>
</body>
</html>