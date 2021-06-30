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
	<style type="text/css">

		.total-above{
			display: flex;
			flex-direction: row;
			justify-content: space-between;
			margin-top: 10px;
		}
		.profile{
			width: 120px;
			height:120px;
			display: flex;
			flex-direction: column;
			border-radius: 100%;
			border:black;
		}

		.profile img{
			width: 100%;
			height: 80%;
			border-radius: 100%;
		}

		.profile input{
			border-radius: 5%;
		}

		.filter-submit{
			display: flex;
			flex-direction: column;
		}

		.filter-submit input{
			width: 100px;

		}

		.filter{
			display: flex;
			flex-direction: row;
			justify-content: space-between;
		}

		.filter input,select{
			width: 170px;
			height: 25px;
		}

		.filter input[type="submit"]{
			margin-left: 10px;
		}

		.session{
			display: flex;
			flex-direction: column;

		}

		.session p{
			color: red;
			margin-right: 10px;

		}

		.session input{
			border-radius: 5px;
			background-color: black;
			color:white;
		}


		.create-memory{
			margin-top: 30px;
			margin-left: 5%;
			margin-bottom: 30px;
		}

		.create-memory input{
			border-radius: 5px;
			background-color: black;
			color:white;
		}

		table{
			width: 90%;
			margin-left: 5%;
			
		}

		td{
			height:50px;
			text-align: center;
			border-width:2px;
			background-color: skyblue;
			font-weight: 600;

		}
		.bold td{
		        font-weight: 1000;
		        background-color: green;
		        border-width:2px;
		        color: white;
		}

		td a{
			font-weight: 900;
			color: red;
		}

		.pa-ul{
			margin-left: 40%;
		}
		
	</style>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="total-above">
        <div class="profile">
	
	        <img src="1.png">
        </div>
        <form action="" method="POST" class="filter-submit">
	        <div class="filter">
            <input type="text" name="memory" placeholder="Search by Name">
            <select name="month">
            	<option>--MONTH--</option>
    	        <option>01</option>
    	        <option>02</option>
    	        <option>03</option>
    	        <option>04</option>
    	        <option>05</option>
    	        <option>06</option>
    	        <option>07</option>
    	        <option>08</option>
    	        <option>09</option>
    	        <option>10</option>
    	        <option>11</option>
    	        <option>12</option>
            </select>
            <input type="year" name="year" placeholder="Search by Year">
            </div>
            <input type="submit" name="search" value="Search">
        </form>

        <div class="session">
	        <p>HELLO!  <?php echo $_SESSION['login']?></p>
	        <form method="POST" action="">
		        <input type="submit" name="logout" value="LOGOUT">
	        </form>
	        <?php
	        if(isset($_POST['logout'])){
		        session_destroy();
	        }
 	        ?>
        </div>
</div>

<div class="create-memory">
	<form method="POST" action="addmemory.php">
	<input type="submit" name="create" value="New Memory +">
	</form>
</div>
<table border="5">
<tr class="bold">
<td>SNO</td>
<td>MEMORY NAME</td>
<td>DATE</td>
<td>VIEW MEMORY</td>
</tr>

<?php

if(isset($_POST['search'])||isset($_GET['page'])){
	$t=1;
	$memoryname="";
	$month="";
	$year="";
	$sql="SELECT * FROM `diarypage` WHERE `username`='$username'";
    
	if (isset($_POST['memory']) && $_POST['memory'] !="") {
            $memoryname = $_POST['memory'];
            $sql .= "AND `memoryname` LIKE '%$memoryname%'";
        }

        else if (isset($_GET['memory']) && $_GET['memory'] !="") {
            $memoryname = $_GET['memory'];
            $sql .= "AND `memoryname` LIKE '%$memoryname%'";
        }
        
        if (isset($_POST['month']) && $_POST['month'] !="--MONTH--") {
            $month = $_POST['month'];
            $sql .= "AND MONTH(`datetime`) = '$month'";
        }

        else if (isset($_GET['month']) && $_GET['month'] !="--MONTH--") {
            $month = $_GET['month'];
            $sql .= "AND MONTH(`datetime`) = '$month'";
        }
        

        if (isset($_POST['year']) && $_POST['year'] !="") {
            $year = $_POST['year'];
            $sql .= "AND YEAR(`datetime`) = '$year'";
        }

       
        
        
        else if (isset($_GET['year']) && $_GET['year'] !="") {
            $year = $_GET['year'];
            $sql .= "AND YEAR(`datetime`) = '$year'";
        }

         $querry=mysqli_query($connector,$sql);
         $total_records=5;
         $page = (isset($_GET['page'])) ? $_GET['page'] : 0;
         if(!$page){
         	$page=1;
         }
         	else{
         		$page=$page;
         	}

         $first=$page-1;
         $first=$first*$total_records;
         $previous_page=$page-1;
         $next_page=$page+1;
        $tr=mysqli_num_rows($querry);
        $total_pages=ceil($tr/$total_records);
        $limitation=mysqli_query($connector,"$sql LIMIT $first,$total_records");
        while($row=mysqli_fetch_array($limitation)){
        	?>
        	<tr>
        	<td><?PHP echo $t;?></td>
        <td><?PHP echo $row['memoryname'];?></td>
        <td><?PHP echo $row['datetime'];?></td>
        <td><a href='viewmemory.php?id=<?PHP echo $row['id'];?>'>VIEW MEMORY</a></td>
        </tr>

        
        <?php
        $t=$t+1;
    }
    if($t==1){
    	?>
    	<tr><td colspan="4">NO MEMORIES FOUND</td></tr>
    	<?php
    }
    ?>

</table>
    <div class="pa-ul">
    
           <ul class="pagination">
       <?php if($page > 1){
       echo "<li><a href='?page=1&memory=$memoryname&month=$month&year=$year'>First Page</a></li>";
       } ?>
           
       <li <?php if($page <= 1){ echo "class='disabled'"; } ?>>
       <a <?php if($page > 1){
       echo "href='?page=$previous_page&memory=$memoryname&month=$month&year=$year'";
       } ?>>Previous</a>
       </li>
    
       <li <?php if($page >= $total_pages){
       echo "class='disabled'";
       } ?>>
       <a <?php if($page < $total_pages) {
       echo "href='?page=$next_page&memory=$memoryname&month=$month&year=$year'";
       } ?>>Next</a>
       </li>

       <?php if($page < $total_pages){
       echo "<li><a href='?page=$total_pages&memory=$memoryname&month=$month&year=$year'>Last &rsaquo;&rsaquo;</a></li>";
       } ?>
       </ul>
       </div>
<?php
	}



else{
	$t=1;
	$sql="SELECT * FROM `diarypage` WHERE `username`='$username' ORDER BY `datetime` DESC LIMIT 5 ";
	$querry=mysqli_query($connector,$sql);
	while($row=mysqli_fetch_array($querry)){
		?><tr>
	    <td><?PHP echo $t;?></td>
        <td><?PHP echo $row['memoryname'];?></td>
        <td><?PHP echo $row['datetime'];?></td>
        <td><a href='viewmemory.php?id=<?PHP echo $row['id'];?>'>VIEW MEMORY</a></td>
			
		</tr><?php
		$t=$t+1;
	}
	if($t==1){
    	?>
    	<tr><td colspan="4">NO MEMORIES FOUND</td></tr>
    	<?php
    }

}
?>

</body>
</html>