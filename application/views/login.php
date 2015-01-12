<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>Login/Register</title>
</head>
<body>
	<div id = 'frame'>
		<h1>Welcome!</h1>
		<?php echo $this->session->flashdata('errors'); ?>
		<div id = 'register'>
			<h3>Register</h3>
			<form action = '/Login/registerfunc' method = 'post'>
				First name: <input type = 'text' name = 'first_name'><br>
				Last name: <input type = 'text' name = 'last_name'><br>
				Username: <input type = 'text' name = 'username'><br>
				Password: <input type = 'password' name = 'password'><br>
				Confirm Password: <input type = 'password' name = 'cpassword'><br>
				<input type = 'submit' value = 'Register' name = 'submit'>
			</form>
		</div>
		<div id = 'login'>
			<h3>Login</h3>
			<form action = '/Login/loginfunc' method = 'post'>
				Username: <input type = 'text' name = 'username'><br>
				Password: <input type = 'password' name = 'password'><br>
				<input type = 'submit' name = 'submit' value = 'Login'>
			</form>
		</div>
	</div>
</body>
</html>