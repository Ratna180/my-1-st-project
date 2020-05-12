
<!DOCTYPE html>
<html>
<head>
	<title>Form </title>
	<link rel="icon" href="F:\BCA 3 semester\Web technology\html project\icon.png">
	<style>
		div
		{
			width: 500px;
			height: 600px;
			background-color: #E5E5E5;
			margin-left: 380px;
		    margin-top: 70px;

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
     	<h1 align="center"> lOGIN TO ENTER</h1>
   		<form align="center" method="POST" action="userlogin.php">
   			<strong>Email:<input type="Email" placeholder="example:neuapneratna@gmail.com"name="email"required><br><strong><br><br>
   			<strong><big> Password :<input type="Password"name="password" placeholder="Enter at least 8 character.."/></big><br><br></strong>	
    		<input type="submit" name="submit" value="Sign in"/> 
   		
   		</form>
     </div>
</body>
<script src="https://www.google.com/recaptcha/api.js?render=6Lcz7OEUAAAAAHWbXLJ_RrW-qvTAZtnMKTKeLee-
"></script>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('6Lcz7OEUAAAAAHWbXLJ_RrW-qvTAZtnMKTKeLee-
', {action: 'homepage'}).then(function(token) {
       ...
    });
});
</script>
</html>