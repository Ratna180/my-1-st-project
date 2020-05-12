<?php
	//echo "This is a db file";
	//Why no ending tag in php
	/*connect to database*/
    $con = mysqli_connect('localhost:3307','root','','bca');
    if($con){
    	echo"successfully connected";
        }
    else{
    	die(mysqli_connect_error());
        }
    
