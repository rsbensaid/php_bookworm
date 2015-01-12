<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1>Hello, <?php echo $this->session->userdata('username'); ?>!</h1>
	<a href="/Login/gotoprof">My Books</a>
	<a href="/Login/addbook">Add Book</a>
</body>
</html>