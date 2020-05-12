<?php
include('db.php');																					
$id=$_POST['id'];
echo $id;
$fName=$_POST['fname'];
$lName=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
echo $fname;
$sql="UPDATE users SET fname='$fName',lname='$lName',email='$email',password='$password'WHERE id='$id'";
   
 $result=mysqli_query($con,$sql);
    if($result){
        echo"Update successfully";
    }
    else
    {
        die(mysqli_connect_error());
    }
