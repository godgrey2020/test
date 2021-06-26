<html>
	<head>
		<title> OTP </title>
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
			height: 300px;
			color: black;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			padding: 30px 30px;
			background-color: gray;
			opacity: .7;
			border: solid;
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
		}
		.boxer p {
			margin: 0;
			padding: 0;
			font-weight: bold;
			color: darkred;
		}
		.boxer input{
			width: 100%;
			margin-bottom: 20px;
		}
		.boxer input[type="text"], input[type="password"]{
			border: none;
			border-bottom: 1px solid #fff;
			background: transparent;
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
			
		</head>
	<body>
		<form action="otpx.php" method="post">
			<div class="boxer">
		<h1>Enter</h1>
			
		
          <?php if (isset($_GET['num1'])) { ?>
               <input type="text" 
                      name="num1" 
                      placeholder="Username"
                      value="<?php echo $_GET['num1']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="num1" 
                      placeholder="OTP"><br>
          <?php }?>
			<input type="submit" value="Send">
		</form>
	<?php 
?> </div>
		</body>
	</html>