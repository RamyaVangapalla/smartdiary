 <?php

        include('connection.php');




                     $username=$_POST['fname'];
                     $email=$_POST['email'];
                     $password=$_POST['Reg_pswd'];
                     $sql="INSERT INTO `logincredentials` (`username`,`email`,`password`) VALUES ('$username','$email','$password')";
                     $querry=mysqli_query($connector,$sql);
                     if($querry)
                     {
                            echo "string";
                     }
                     
?>                          