<?php
include('connection.php');
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<style>
body{
 margin:0;
 padding:0;
 font-family:sans-serif;
 background-color:#34495e;
 }
.box_login{
width:300px;
height:350px;
padding:38.5px;
position:absolute;
top:50%;
left:50%;
transform:translate(-50%,-50%);
text-align:center;
border-radius:5px;
background-color: black;
}
h4{
color:rgb(132, 130, 141);
font-weight:normal;
font-size: medium;
}
.box_login input[type="text"],.box_login input[type="password"]{
border:0;
background:none;
display:block;
margin:20px auto;
text-align:center;
border:2px solid #3498db;
padding:14px 10px;
width:80%;
outline:none;
color:teal;
border-radius:24px;
transition:0.25s;
}
.box_login input[type="submit"]:focus,.box_login input[type="text"]:focus{
 width:280px;
 border-color:#2ecc71;
}
.box_login input[type="submit"]{
border:0;
background:none;
display:block;
margin:20px auto;
text-align:center;
border:2px solid #2ecc71;
padding:14px 40px;
outline:none;
color:cornflowerblue;
border-radius:24px;
transition:0.25s;
cursor:pointer;
width:130px;
}
.box_login input[type="password"]:focus{
    width:280px;
    border-color:coral;
}
.box_login input[type="submit"]:hover{
background:#2ecc71;
color:white;
}
.forgot_password{
    position: relative;
    left:-17%;
    font-size:12px;
}
.forgot_password,a{
    text-decoration: none;
    color: rgb(165, 173, 189);
}
.box_login i{
    font-size:430%;
    color:white;
    opacity: 0.5;
}
@media screen and (max-width:350px) {
    .box_login{
     width:250px;
     height:315px;
     padding:19px;
     position:absolute;
     transform:translate(-50%,-50%);
     text-align:center;
     border-radius:5px;
     background-color: black;
   }
   .box_login input[type="text"],.box_login input[type="password"]{
     border:0;
     background:none;
     display:block;
     margin:20px auto;
     text-align:center;
     border:2px solid #3498db;
     padding:10px 10px;
     width:200px;
     outline:none;
     color:white;
     border-radius:24px;
     transition:0.25s;
    }
    .box_login input[type="submit"]{
        border:0;
        background:none;
        display:block;
        margin:20px auto;
        border:2px solid #2ecc71;
        padding:10px 30px;
        outline:none;
        color:white;
        border-radius:24px;
        transition:0.25s;
        cursor:pointer;
        width:100px;
        text-align: center;
}
    .box_login i{
    font-size:380%;
    color:white;
    opacity: 0.5;
    }
    .box_login input[type="password"]:focus{
        width:240px;
        border-color:coral;
    }
    .box_login input[type="submit"]:focus{
     width:150px;
     border-color:#2ecc71;
     }
     .box_login input[type="text"]:focus{
         width:240px;
     }
     
}
</style>
<body>
<form class="box_login" action="" method="POST" >
    <i class="fal fa-user-circle"></i>
<h4>Hello,Who's this?</h4>
<input type="text" name="box_user" placeholder="username" id="user_login">
<input type="password" name="box_password" placeholder="password" id="login_password">
<p class="forgot_password"><a href="#">Forgot password?</a></p>
<input type="submit" name="submit" value="login" >
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $username=$_POST['box_user'];
    $password=$_POST['box_password'];
     $select="SELECT * FROM `logincredentials` WHERE `username`= '$username'"   ;
                     $querry=mysqli_query($connector,$select);
                     $num=mysqli_num_rows($querry);                    
                     if($num==0){
                        echo "<script>alert('username doesnt exist')</script>";
                     }
                     else{
                        $row=mysqli_fetch_array($querry);
                        if($row['password']!=$password)
                        {
                          echo "<script>alert('password is incorrect')</script>";  
                        }
                        else{
                            session_start();
                            $_SESSION['login']=$username;
                            header("Location:diarypage.php");
                        }
                     }
}
?>