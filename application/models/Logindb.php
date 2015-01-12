<?php

	class Logindb extends CI_Model
	{
		// getAllCourses = does a query from the connected database to
		// retrieve all courses and return an array of the results.
		
		public function login($username, $password)
		{
			//gettin here
			$query = "SELECT * FROM users WHERE users.username = '$username' 
			AND users.password = '$password'";
			$user = $this->db->query($query)->row_array();
			return $user;
		}

		public function register($user)
		{
			// var_dump($user);
			$query = "INSERT INTO users (first_name, last_name, username, password, created_at, updated_at)
				VALUES (?, ?, ?, ?, NOW(), NOW())";
			$values = array($user['first_name'], $user['last_name'], $user['username'], $user['password']);

			// var_dump('look here', $query, $values);

			return $this->db->query($query, $values);
		}

		public function getUser($user)
		{
			$use_name = $user['username'];
			$query = "SELECT id FROM users WHERE username = '$use_name'";
			// var_dump($query);
			return $this->db->query($query)->row_array();
		}
	}