<?php
 session_start();
include('include/dbconnection.php');

if(isset($_POST['submit']));{
    $username_unsafe=$_POST['username'];
    $password_unsafe=$_POST['password'];

     $username=mysqli_real_escape_string($con,$username_unsafe);
     $password=mysqli_real_escape_string($con,$password_unsafe);
    
     $query=mysqli_query($con,"select * from admin where Username='$username' and Password='$password'")or die(mysqli_error($con));

     $row=mysqli_fetch_array($query);

     $name=$row['Username'];
     $counter=mysqli_num_rows($query);
     $id=$row['id'];

     if($counter== 0){
         echo "<script type='text/javascript'>alert('Invailid Username and password try again');
         document.location='login.php'</script>";
     } else{
         $_SESSION['id']=$id;
         $_SESSION['username']=$name;

         echo "<script type='text/javascript'> document.location='dashboard.php'</script>";
     }
    }