<?php
include('connection.php');
session_start();
if(!isset($_SESSION['login']))
{
 header('location:Pro1login1.php');
}
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql="SELECT * FROM `diarypage` WHERE `id`= $id";
	$querry=mysqli_query($connector,$sql);
	$row=mysqli_fetch_array($querry);
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<style type="text/css">
			.viewmemory-body{
				width: 80%;
				margin-left: 10%;
				


			}
			

			.viewmemory-header{
				display: flex;
				flex-direction: row;
				justify-content: space-between;

				color: red;
			}

			.viewmemory-header label{
				font-weight: 800;
				color: black;
				text-decoration: underline;
				text-decoration-color: black;

			}

			.viewmemory-content{
				border:1px dotted black;
				width: 96%;

				margin-top: 5%;
				margin-left:2%;
				color: blue;
			}

			.viewmemory-image{
				margin-top: 5%;
				display: flex;
				justify-content: center;
			}
		</style>
	</head>
	<body>
		<img src="1.png" width="120px" height="100px">
<div class="viewmemory-body">
		<div class="viewmemory-header">
			<p><label>DATE:</label>
				<?php
				echo $row['datetime'];
				?>				
			</p>
			<p><label>MEMORY NAME:</label>
				<?php
				echo $row['memoryname'];
				?>
			</p>
		</div>

		<div class="viewmemory-content">
			<textarea rows="20" cols="145">
				<?php
				echo $row['memory'];
				?>
			</textarea>
		</div>

		<div class="viewmemory-image">
			<?php
              $select="SELECT * FROM `diarypage` WHERE `id`='$id'";
              $querry=mysqli_query($connector,$select);
              $image=mysqli_fetch_assoc($querry);
              $ima=$image['memoryimage'];
              if($ima!=null){
            ?> <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($image['memoryimage']);?>" style="width:100px; height: 100px;" /><?php
        }
        else{
        	echo "NO IMAGE OF MEMORY";
        }

        ?>

		</div>
		</div>

	</body>
	</html>


<?php
}
?>