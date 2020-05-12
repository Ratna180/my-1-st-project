<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Form </title>
	<link rel="icon" href="F:\BCA 3 semester\Web technology\html project\icon.png">
	<style>
		div
		{
			width: 600px;
			height: 600px;
			background-color: #E5E5E5;
			margin-left: 350px;
		    margin-top: 50px;

		}
		body
		{
			background: linear-gradient(to top left, #33ccff 0%, #ff6699 100%);
		}
		h1{
			background-color: #000000;
			color: #FFFF;
			
		}
	</style>

</head>
<body>
     <div>
     	<h1 align="center"> Registration Form</h1>
   		<form align="center" method="POST" action="createuser.php">
   			<big>First name:&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="fname" placeholder="  &nbsp;&nbsp;&nbsp;First name"></big><br><br>
   			
   			<big>Last name:&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="lname"placeholder="  &nbsp;&nbsp;&nbsp;Last name"></big><br><br>
   			<big>New Password :<input type="Password"name="password" placeholder="Enter at least 8 character.."></big><br><br>
   			<big>Email:&nbsp;&nbsp;&nbsp;&nbsp;<input type="Email" placeholder="example:neuapneratna@gmail.com"name="email"required></big><br>
   			<br><br>
   			<input type="submit" name="submit" value="Register"> 
   			<input type ="reset" name="reset" value="Reset">
   		</form>
     </div>
</body>
<script src="https://www.google.com/recaptcha/api.js?render=6LcPFuIUAAAAAG9hN5m_4gX0OrB8ENoXFO3iYSeD"></script>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('6LcPFuIUAAAAAG9hN5m_4gX0OrB8ENoXFO3iYSeD', {action: 'homepage'}).then(function(token) {
       ...
    });
});
</script>
</html>