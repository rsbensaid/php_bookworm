<?php

	class profiledb extends CI_Model
	{
		// getAllCourses = does a query from the connected database to
		// retrieve all courses and return an array of the results.
		

		// public function getAllOthers()
		// {
		// 	$query = "SELECT * FROM users ORDER BY alias";
		// 	return $this->db->query($query)->result_array();
		// }

		// public function newfriend($friend)
		// {
		// 	$query1 = "INSERT INTO friends SELECT * FROM users 
		// 	WHERE '$friend' = users.id";
		// 	// $query2 = "DELETE * FROM users WHERE users.id = '$friend'";
		// 	return $this->db->query($query1);
		// }

		public function addbook($book)
		{
			// var_dump('here is sess', $this->session->userdata);
			$id = $this->session->userdata('id')['id'];
			$query = "INSERT INTO books (users_id, title, author, subject, book_group, library, audio, date_started, date_finished, assessment, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())";
			// var_dump($id);
			// $use_this = (string)$this_id;
			$values = array($id, $book['title'], $book['author'], $book['subject'], $book['book_group'], $book['library'], $book['audio'], $book['date_started'], $book['date_finished'], $book['assessment']);
			return $this->db->query($query, $values);
		}

		public function getBooks($user)
		{
			// var_dump('user', $user);
			$id = $user['id']['id'];
			$query = "SELECT * FROM books WHERE users_id = '$id'";
			return $this->db->query($query)->result_array();
		}

		public function getTitle($title)
		{
			// var_dump('look here', $title);
			$query = "SELECT * FROM books WHERE title = '$title'";
			return $this->db->query($query)->result_array();
		}

		public function getAuthor($author)
		{
			// var_dump('look here', $title);
			$query = "SELECT * FROM books WHERE author = '$author'";
			return $this->db->query($query)->result_array();
		}

		public function getSubject($subject)
		{
			// var_dump('look here', $title);
			$query = "SELECT * FROM books WHERE subject = '$subject'";
			return $this->db->query($query)->result_array();
		}

		public function getGroup($group)
		{
			// var_dump('look here', $title);
			$query = "SELECT * FROM books WHERE book_group = '$group'";
			return $this->db->query($query)->result_array();
		}

	}