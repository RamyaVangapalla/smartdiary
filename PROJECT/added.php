<?php
include('connection.php');
session_start();
if(!isset($_SESSION['login']))
{
 header('location:Pro1login1.php');
}
    $username=$_SESSION['login'];
	if(isset($_POST['submit'])){
		$date=date('Y-m-d',strtotime($_POST['date']));
		$memoryname=$_POST['memoryname'];
		$memory=$_POST['memory'];
		$im=$_FILES['fileupload']['name'];
		$memoryimage=addslashes(file_get_contents($_FILES['fileupload']['tmp_name'])) ;
        $sql="INSERT INTO `diarypage` (`username`,`memoryname`,`memory`,`memoryimage`,`datetime`) VALUES ('$username','$memoryname','$memory','$memoryimage','$date')";
        $querry=mysqli_query($connector,$sql);
        if($querry){
             echo "<script>alert('Memory Added')</script>";
             header("location:diarypage.php");
        }
	}

	?>