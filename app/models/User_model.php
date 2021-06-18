<?php

class User_model {
	private $nama = "zohal";
	private $db ;

	public function __construct()
	{
		$this->db = new Database;
	}
    
	public function regist($data)
	{
		$query = "INSERT INTO users 
					VALUES 
					( '' , :nama , :username , :email , :password , :nomor_telepon  )";

		$this->db->query($query);
		$this->db->bind('username', strtolower(stripslashes($data['username']))) ;
		$this->db->bind('nama', $data['firstname'].' '.$data['lastname']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('password',$data['password']);
		$this->db->bind('nomor_telepon', $data['nomor_telepon']);

		$this->db->execute();
		return $this->db->rowCount();
	}

	public function login($data)
	{
		$query = "SELECT * FROM users WHERE (username = :username OR email = :email) AND password = :password ";

		$this->db->query($query);
		$this->db->bind('username', $data['email-username']);
		$this->db->bind('email', $data['email-username']);
		$this->db->bind('password',$data['password']);
		
		return $this->db->single();
	}
	
	public function getUserByid($id)
	{
		$query = "SELECT * FROM users WHERE id_user = :id";
		$this->db->query($query);
		$this->db->bind('id', $id);
		return $this->db->single();
	}
	
	public function getUser()
	{
		$query = "SELECT * FROM users";
	}
}