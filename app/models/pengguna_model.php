<?php

class pengguna_model extends Database
{
  private $table = "pengguna";
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function getUserSignIn($username, $password)
  {
    $query = "SELECT * FROM pengguna WHERE username=:username && password=:password";
    $this->db->query($query);
    $this->db->bind('username', $username);
    $this->db->bind('password', $password);
    $this->db->execute();
    return $this->db->resultSingle();
  }

  public function getDataPengguna()
  {
    $query = "SELECT * FROM pengguna";
    $this->db->query($query);
    $this->db->execute();
    return $this->db->resultSet();
  }

  public function getDataPenggunaByID($id)
  {
    $query = "SELECT * FROM pengguna WHERE pengguna_id=:pengguna_id";
    $this->db->query($query);
    $this->db->bind('pengguna_id', $id);
    $this->db->execute();
    return $this->db->resultSingle();
  }
}
