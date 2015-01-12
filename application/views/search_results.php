<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Results</h1>
	<table class = 'table'>
		<tr>
			<th>Title</th>
			<th>Author</th>
			<th>Subject</th>
			<th>Group</th>
			<th>Library</th>
			<th>Audio</th>
			<th>Started</th>
			<th>Finished</th>
			<th>Assessment</th>
		</tr>
		<?php 
		foreach($books as $book)
		{
		// var_dump($book);
		echo 
			"<tr>
				<td>" . $book['title'] . "</td>
				<td>" . $book['author'] . "</td>
				<td>" . $book['subject'] . "</td>
				<td>" . $book['book_group'] . "</td>
				<td>" . $book['library'] . "</td>
				<td>" . $book['audio'] . "</td>
				<td>" . $book['date_started'] . "</td>
				<td>" . $book['date_finished'] . "</td>
				<td>" . $book['assessment'] . "</td>
			</tr>";
		}
		?>
	</table>
	<a href="/Login/index">Logout</a>
	<a href="/Login/addbook">Add a new Book</a>
	<a href="/Profile/index">Back to All books</a>
</body>
</html>