
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<style>
	body{
			border: none;
			background: url(eee.jpg) no-repeat;
    		background-size: cover;
    		display: flex;
    		justify-content: center;
    		align-items: center;
    		height: 100vh;
    		flex-direction: column;	}
    h1 {
            width: 500px;
            background: transparent;
            text-align: center;
			opacity: .7;
        }
        [type="submit"]{
			border: solid;
			outline: none;
			height: 40px;
			background: #EEEDEF;
			color: black;
			font-size: 18px;
			border border-radius: 20px;
		}
       
		</style>
	<title>HOME</title>
	
</head>
<body>
	 <br><br><br><br><br>
		<br><br><br>
		<br><br><br><br><br>
		<br><br><br>
	
     <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
	
   <h1><center><button>  <a href="logout.php">Logout</a> </button></center><br/></h1>
	<h1><center><button type="submit">  <a href="display.php" >View Activity</a> </button></center></h1>

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>                            		                            