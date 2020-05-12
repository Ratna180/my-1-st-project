<?php 
$id = $_GET['id'];
echo "$id";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Detalils </title>
	<link rel="icon" href="F:\BCA 3 semester\Web technology\html project\icon.png">
	<style>
		div
		{
			width: 500px;
			height: 600px;
			background-color: #757575;
			margin-left: 430px;
		    margin-top: -20px;

		}
		body
		{
			background-color: #0F0F0F;
            
		}
		h1{
			background-color: #000000;
			color: #FFFF;
			
		}
	</style>
</head>
<body>
     <div>
     	<h1 align="center"> Upadate User Information</h1>
   		<form align="center" method="POST" action="updateuser.php">
   			<big>First name:&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="fname" placeholder="  &nbsp;&nbsp;&nbsp;First name"></big><br><br>
   			<big>Last name:&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="lname" placeholder="  &nbsp;&nbsp;&nbsp;Last name"></big><br><br>
   			<big>New Password :<input type="Password"name="password" placeholder="Enter at least 8 character.."/></big><br><br>
   			Email:<input type="Email" placeholder="example:neuapneratna@gmail.com"name="email"><br>   			<br>
   			<input type="hidden" name="id" value="<?php echo $id;?>">
   			<input type="submit" name="submit" value="Update"> 
   			<input type ="reset" name="reset" value="Reset">
   		</form>
     </div>
</body>
</html>