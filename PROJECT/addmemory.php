<?php
include('connection.php');
session_start();
if(!isset($_SESSION['login']))
{
 header('location:Pro1login1.php');
}
$username=$_SESSION['login'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

		.addmemory-body{
			width: 80%;
			margin-left: 10%;
			display: flex;
			justify-content: center;

		}

		.addmemoryform{
			
			display: flex;
			flex-direction: column;
			
		}

		.addmemoryform label,textarea{
			margin-top: 5%;
		}

		.addmemoryform input[type="submit"]{
			margin-top: 5%;
			width: 20%;
			margin-left: 40%;
			border-radius: 5px;
			background-color: black;
			color:white;
		}

	</style>
</head>
<body>
    <img src="1.png" width="120px" height="100px">
	<div class="addmemory-body">
	<form method="POST" action="added.php" enctype="multipart/form-data">
		<div class="addmemoryform">

		<label>Date of memory:<input type="date" name="date" value="<?php echo date('Y-m-d');?>"></label>	
		<label>Memory Name:<input type="text" name="memoryname" value="untitled"></label>
		<textarea rows="20" cols="70" name="memory" placeholder="Write your Diary"></textarea>
		<label>ADD IMAGE:<input type="file" name="fileupload"></label>
		<input type="submit" name="submit" value="ADD">
	    </div>
	</form>	
	</div>
	
</body>
</html>
