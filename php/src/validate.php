<?php
session_start();

// $conn = mysqli_connect("db", "jyothika", "jyothika123", "AdmissionForm");
$conn=mysqli_connect('db','jyothika','jyothika123');
mysqli_select_db($conn,'AdmissionForm');

if(!$conn ) {  
die('Could not connect to Server' 
.mysqli_error($conn));  
}


$myusername=$_POST['username'];
$mypassword=$_POST['passcode'];

$query = "SELECT * FROM logindetails
WHERE username='$myusername' AND passcode='$mypassword'";
$result=mysqli_query($conn,$query);
if(!$result )
{
die('Could not retrieve data: '
.mysqli_error($conn));
}
 
$count= mysqli_num_rows($result);
if($count==1)
{   
$_SESSION['username']=$_POST['username'];
header("location:login_retrieve.php");
}
else { 
   session_destroy();
   ?>
   <script>alert('Your Login Name or Password is invalid');
   window.location.href ="index.php?fail";
   </script>
   <?php 
   }
?>