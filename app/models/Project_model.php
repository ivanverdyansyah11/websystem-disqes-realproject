<?php

class Project_model extends Database
{
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function getAllProject()
  {
    $query = "SELECT * FROM project";
    $this->db->query($query);
    $this->db->execute();
    return $this->db->resultSet();
  }

  public function insertProject($data)
  {
    $query = "INSERT INTO project(name,description) VALUES(:name,:description)";
    $this->db->query($query);
    $this->db->bind('name', $data['name']);
    $this->db->bind('description', $data['description']);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function deleteProject($id)
  {
    $query = "DELETE FROM project WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();
    return $this->db->rowCount();
  }
}
