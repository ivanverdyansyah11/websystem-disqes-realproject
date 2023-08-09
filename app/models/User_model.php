<?php

class User_model extends Database
{
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function getUserSignIn($email, $password)
  {
    $query = "SELECT * FROM user WHERE email=:email && password=:password";
    $this->db->query($query);
    $this->db->bind('email', $email);
    $this->db->bind('password', $password);
    $this->db->execute();
    return $this->db->resultSingle();
  }

  public function addUserSignUp($username, $email, $password)
  {
    $query = "INSERT INTO user(username,email,password) VALUES(:username,:email,:password)";
    $this->db->query($query);
    $this->db->bind('username', $username);
    $this->db->bind('email', $email);
    $this->db->bind('password', $password);
    $this->db->execute();
    return $this->db->rowCount();
  }
}
