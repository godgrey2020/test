<?php
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"test_db1");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Create an Account</title>
</head>
<body>
<style>
		body{
			border: none;
			background: url(eee.jpg) no-repeat;
    		background-size: cover;
    		display: flex;
    		justify-content: center;
    		align-items: center;
    		height: 100vh;
    		flex-direction: column;
		}
		.boxer{
			width: 320px;
			height: 400px;
			color: black;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			padding: 0px 30px;
			border: solid;
			background-color: grey;
			opacity: .7;
		}
		.pik{
			width: 100px;
			height: 100px;
			border-radius: 50%;
			position: absolute;
			top: -50px;
			left: calc(50% - 50px);
		}
		.h1{
			margin: 0;
			padding: 0 0 20px;
			text-align: center;
			font-size: 22px;
			color: red;
		}
		.boxer p {
			margin: 0;
			padding: 0;
			font-weight: bold;
		}
		.boxer input{
			width: 100%;
			margin-bottom: 20px;
		}
		.boxer input[type="text"], input[type="password"]{
			border: none;
			border-bottom: 1px solid black;
			background: white;
			outline: none;
			height: 40px;
			color: black;
			font-size: 16px;	
		}
		.boxer input[type="email"]{
			border: none;
			border-bottom: 1px solid black;
			background: white;
			outline: none;
			height: 40px;
			color: black;
			font-size: 16px;	
		}
		.boxer input[type="submit"]{
			border: none;
			outline: none;
			height: 40px;
			background: darkred;
			color: black;
			font-size: 18px;
			border border-radius: 20px;
		}
</style>
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<div class="boxer">
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
		
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
				
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
				<center><h1>Sign Up</h1></center>
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
				<form action="#" method="post">
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
					<input class="text" type="text" name="username" placeholder="Username" required= ""/>
					<input class="text email" type="email" name="email" placeholder="Email" required=""/>
					<input class = "text" type="password" id="password" name="password" placeholder = "Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required = ""/>
					<input class = "text w3lpass" type="password" id="password1" name="password" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required = ""/>
	
					<center><button class = "submit" type="submit" value="Sign Up" name = "submit">Sign Up</button></center>
				</form>	
				<p><center><a href="login.php"> Login Now!</a></center></p>
			
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
	
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php

if(isset($_POST['submit'])){
	

$n1=$_POST['username'];
$n2=$_POST['password'];
$n3=$_POST['email'];

$stmt="INSERT INTO users (username,password,email)VALUES('$n1','$n2','$n3')";

if(mysqli_query($link,$stmt)){
	header("Location: login.php");
}
else{
	echo "fail";
}
}
?>

</body>
</html>