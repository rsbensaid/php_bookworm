<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title></title>
	<style>
	input, select {
		display: block;
	}
	</style>
</head>
<body>
	<div id = 'add_book'>
		<h2>Add a New Book</h2>
		<a href="/Login/index">Logout</a>
		<a href="/Profile/index">Back to my books</a>
		<form action = '/Profile/addbookfunc' method = 'post'>
			<div class="form-group">
				Title: <input type = 'text' name = 'book_title'>
				Author: <input type = 'text' name = 'book_author'>
				Subject: <select name = 'book_subject'>
					<option value = 'Fiction'>Fiction</option>
					<option value = 'Non-Fiction'>Non-Fiction</option>
				</select>
				Group: <input type = 'text' name = 'book_group'>
				Library: <input type = 'text' name = 'book_library'>
				Audio: <select name = 'book_audio'>
					<option value = 'Audio'>Audio</option>
					<option value = 'Classic'>Classic</option>
					<option value = 'E-book'>E-book</option>
				</select>
				Date Started: <input type = 'date' name = 'date_started'>
				Date Finished: <input type = 'date' name = 'date_finished'>
				Assessment: <input type = 'text' name = 'assessment'>
				<input type = 'submit' value = 'Submit' name = 'submit'>
			</div>
		</form>
	</div>
</body>
</html>