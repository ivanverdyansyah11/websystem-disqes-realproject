<?php

class User_model extends Database
{
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function getUserSignIn($data)
  {
    $query = "SELECT * FROM user WHERE email=:email && password=:password";
    $this->db->query($query);
    $this->db->bind('email', $data['email']);
    $this->db->bind('password', $data['password']);
    $this->db->execute();
    return $this->db->resultSingle();
  }

  public function insertUserSignup($data)
  {
    $query = "INSERT INTO user(username,email,password) VALUES(:username,:email,:password)";
    $this->db->query($query);
    $this->db->bind('username', $data['username']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('password', $data['password']);
    $this->db->execute();
    return $this->db->rowCount();
  }
}
