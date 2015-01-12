<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>Profile</title>
	<style>
	#frame {
		width: 750px;
	}
	.search {
		width: 150px;
		display: inline-block;
		margin: 15px;
	}
	</style>
</head>
<body>
	<?php 
	// var_dump($users);
	// die();
	?>
	<div id = 'frame'>
		<div id = 'header'>
			<h1>Hello, <?php echo $this->session->userdata('username'); ?>!</h1>
			<a href="/Login/index">Logout</a>
			<a href="/Login/addbook">Add a new Book</a>
		</div>
		<div id = 'search'>
			<h1>Search by...</h1>
			<div class ='search'>
				<form action="/Profile/search_title" method = 'post'>
					Title <input type = 'text' name = 'title_s'>
					<input type = 'submit' value = 'Submit' name = 'submit'>
				</form>
			</div>
			<div class ='search'>
				<form action="/Profile/search_author" method = 'post'>
					Author <input type = 'text' name = 'author_s'>
					<input type = 'submit' value = 'Submit' name = 'submit'>
				</form>
			</div>
			<div class ='search'>
				<form action="/Profile/search_subject" method = 'post'>
					Subject <select name = 'subject_s'>
						<option value = 'Fiction'>Fiction</option>
						<option value = 'Non-Fiction'>Non-Fiction</option>
					</select>
					<input type = 'submit' value = 'Submit' name = 'submit'>
				</form>
			</div>
			<div class ='search'>
				<form action="/Profile/search_group" method = 'post'>
					Group <input type = 'text' name = 'group_s'>
					<input type = 'submit' value = 'Submit' name = 'submit'>
				</form>
			</div>
		</div>
		<div id = 'books'>
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
		</div>
	</div>
</body>
</html>