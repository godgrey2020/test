<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
		<style>
		body{
			margin: 0;
			padding: 0;
			background: url(eee.jpg) no-repeat;
   		 	background-size: cover;
    		display: flex;
   	 		justify-content: center;
    		align-items: center;
    		height: 100vh;
    		flex-direction: column;
			font-family: 'Poppins', sans-serif;

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
			padding: 30px 30px;
			border: solid;
			background-color: gray;
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
			color: white;
		}
		.boxer p {
			position: absolute;
			margin: 0;
			padding: 0;
			font-weight: bold;
			color: darkred;
			top: 20px;
			left: 100px;
			font-size: 30px;
		}
		.boxer input{
			width: 100%;
			margin-bottom: 20px;
		}
		.boxer input[type="text"], input[type="password"]{
			border: none;
			border-bottom: 1px solid #fff;
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
			background: #138086;
			color: black;
			background-color: darkred;
			font-size: 18px;
			border border-radius: 20px;
		}
</style>
</head>
<body>

     <form action="login.php" method="post">
     	<div class="boxer">
            <center></center>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		<p>LOGIN</p>
		<br>
		<br>
     	<input type="text" name="uname" placeholder="Username"><br>

     	<input type="password" name="password" placeholder="Password"><br>
            
        <input type="submit" value="Login">
<a href="logout.php" class="ca"></a><br/><br>
			<a href="changpass.php" class="ca">Forgot Password</a>&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="signup.php" class="ca">Create Account</a><br><br>
     	    
          
     </form>
</body>
</html>