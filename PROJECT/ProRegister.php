<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<style>
* {
	box-sizing: border-box;
}

body {
	
	font-family: 'Open Sans', sans-serif;
	display: flex;
	align-items: center;
	justify-content: center;
	min-height: 100vh;
	margin: 0;
}
.container {
	background-color: #fff;
	border-radius: 5px;
	box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
	overflow: hidden;
	width: 330px;
	max-width: 90%;
}
.form {
	padding: 30px 40px;	
}
.form-control {
	margin-bottom: 10px;
	padding-bottom: 20px;
	position: relative;
}

.form-control label {
	display: inline-block;
	margin-bottom: 5px;
    font-weight:700;
}

.form-control input {
	border: 2px solid rgb(209, 206, 206);
	border-radius: 4px;
	display: block;
	font-family: inherit;
	font-size: 14px;
	padding: 10px;
	width: 100%;
}

.form-control input:focus {
	outline: 0;
	border-color: rgb(141, 138, 138);
}

.form-control.error input {
	border-color: #e74c3c;
}

.form-control i {
	visibility: hidden;
	position: absolute;
	top: 36px;
	right: 10px;
}
.form-control .eye{
  visibility: visible;
  position: absolute;
  top:45%;
}
.form-control.error i.fa-exclamation-circle {
	color: #e74c3c;
	visibility: visible;
}

.form-control small {
	color: #e74c3c;
	position: absolute;
	bottom: 0;
	left: 0;
	visibility: hidden;
}

.form-control.error small {
	visibility: visible;
}

.form .button {
	background-color:black;
	border: 2px solid black;
	border-radius: 4px;
	color: #fff;
	display: block;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	padding: 10px;
	margin-top: 20px;
	width: 100%;
    font-weight: bold;
}
.form .button:focus{
    background-color:rgb(70, 109, 119);
    border: 2px solid rgb(70, 109, 119);
    color:white;
}
::placeholder{
    color:rgb(218, 206, 228);
}

</style>
<body>
  <div class="container">
    <form id="form" class="form" method="POST" action="">
      <div class="form-control">
              <label for="username">Username</label>
              <input type="text" placeholder="Full Name" id="username" name="fname" />
              <i class="fas fa-exclamation-circle"></i>
              <small>Error message</small>
      </div>
      <div class="form-control">
              <label for="username">Email</label>
              <input type="email" placeholder="Your Email Address" id="email" name="email"/>
              <i class="fas fa-exclamation-circle"></i>
              <small>Error message</small>
      </div>
      <div class="form-control">
              <label for="username">Password</label>
             <input type="password" placeholder="Password"  id="password" name="Reg_pswd"/>
               <span onclick="typepass()" id="eye"><i class="far fa-eye eye"  ></i></span>
              <i class="fas fa-exclamation-circle"></i>
              <small>Error message</small>
      </div>
      <div class="form-control">
              <label for="username">Confirm Password</label>
              <input type="password" placeholder="confirm password" id="password2" name="Register_psw"/>
             
               <i class="fas fa-exclamation-circle"></i>
               <small>Error message</small>
      </div>
      <input type="submit" name="register" value="SIGN UP" class="button">
     
    </form>
  </div>
 


  <script>
         const form = document.getElementById('form');
        const username = document.getElementById('username');
        const email = document.getElementById('email');
        const password = document.getElementById('password');
        const password2 = document.getElementById('password2');


         function setErrorFor(input, message) {                          //setErrorFor() is used to set error 
              const formControl = input.parentElement;
              const small = formControl.querySelector('small');
              formControl.className = 'form-control error';
              small.innerText = message;
            }

           /*function setSuccessFor(input) {
              #const formControl = input.parentElement;
              #formControl.className = 'form-control success';
            }*/
	
            function isEmail(email) {                                    //it is used to check email is valid or not
	              return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
            }
            function typepass() {                                       //used to change password alternatively into text type 
            var x = document.getElementById("password");
            if (x.type === "password") {
            x.type = "text";
            } else {
            x.type = "password";
            }
            }
                                                             
      
            function checkInputs() {
              const usernameValue = username.value.trim();                //trim() removes all the whitespaces
              const emailValue = email.value.trim();
              const passwordValue = password.value.trim();
              const password2Value = password2.value.trim();
              const i=0;                                                    //used to calculate whether all are success or not
            
              if(usernameValue === '') {                                 //checking username is filled or not
                setErrorFor(username, 'Username cannot be blank');
                i=i+1;
              }
               if(emailValue === '') {                                    //checking email is filled or not
                setErrorFor(email, 'Email cannot be blank');
                i=i+1;
              } else if (!isEmail(emailValue)) {                                          //validating email
                setErrorFor(email, 'Not a valid email');
                i=i+1;
              } 
               if(passwordValue === '') {                                       //checking password is filled or not                       
                setErrorFor(password, 'Password cannot be blank');
                document.getElementById('eye').style.display="none";
                i=i+1;
            
               }
              if(password2Value === '') {                                          //checking confirm password is filled or not
                setErrorFor(password2, ' Confirm Password cannot be blank');
                i=i+1;
              } else if(passwordValue !== password2Value) {                  //checking password and confirm password are same values or not
                setErrorFor(password2, 'Passwords does not match');
                i=i+1;
              } 
                
              if(i==0){
              document.getElementById("submitted").value="1";
              }  


            }
           
  </script>
</body>
</html>
<?php
if(isset($_POST['register'])){
        

                    $i=0;


                     $username=$_POST['fname'];
                     $email=$_POST['email'];
                     $password=$_POST['Reg_pswd'];
                     $confirm_password=$_POST['Register_psw'];
                     if($username==''){
                     	echo "<script type='text/javascript'>setErrorFor(username, 'Username cannot be blank');</script>";
                     	$i=$i+1;
                     }
                     if($email=='')
                     {
                     	echo "<script type='text/javascript'>setErrorFor(email, 'email cannot be blank');</script>";
                     	$i=$i+1;
                     }
                     if($password==''){
                     	echo "<script type='text/javascript'>setErrorFor(password, 'password cannot be blank');</script>";
                     	$i=$i+1;

                     }
                     if($confirm_password!=$password){
                     	echo "<script type='text/javascript'>setErrorFor(password2, 'Passwords does not match');</script>";
                     	$i=$i+1;
                     }


                     if($i==0)
                     {
                     


                     $select="SELECT * FROM `logincredentials` WHERE `username`= '$username'"	;
                     $qu1=mysqli_query($connector,$select);
                     $num1=mysqli_num_rows($qu1);
                     if($num1!=0){
                     	echo "<script type='text/javascript'>setErrorFor(username, 'username is already existing');</script>";
                     }
                     




                     $select1="SELECT * FROM `logincredentials` WHERE `email`= '$email'"	;
                     $qu2=mysqli_query($connector,$select1);
                     $num2=mysqli_num_rows($qu2);
                     if($num2!=0){
                     	echo "<script type='text/javascript'>setErrorFor(email, 'email is already existing');</script>";
                     }
                     





                     if($num1==0 && $num2==0 ){
                     $sql="INSERT INTO `logincredentials` (`username`,`email`,`password`) VALUES ('$username','$email','$password')";
                     $querry=mysqli_query($connector,$sql);
                                          if($querry)
                                          {  
                                             echo "<script>alert('Registration successfull')</script>";                   
                                          	 echo "<script>window.location.assign('index.php')</script>";
                                             }
                                             }
                     }
                     }                     
?> 
