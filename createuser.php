<?php
include('db.php');
$fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
     echo $fname;
     $sql1="select * from users where email='$email'";
     $result_1=mysqli_query($con,$sql1);
     $count=mysqli_num_rows($result_1);
    if($count==0)
    {
        $sql="INSERT INTO users(fname,lname,email,password) VALUES('$fname','$lname','$email','$password')";
        $result=mysqli_query($con,$sql);
        if($result){
        echo"inserted successfully";
        }
      else
     {
        die(mysqli_connect_error());
     }
    }
    else{
        echo"Please enter another email id";
    }