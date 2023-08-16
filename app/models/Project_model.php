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
    $query = "SELECT project.*,COUNT(DISTINCT test_case.id) AS test_case_count,COUNT(DISTINCT test_suite.id) AS test_suite_count FROM project LEFT JOIN test_case ON project.id = test_case.project_id LEFT JOIN test_suite ON project.id = test_suite.project_id GROUP BY project.id;";
    $this->db->query($query);
    $this->db->execute();
    return $this->db->resultSet();
  }

  public function getProjectFirst()
  {
    $query = "SELECT * FROM project LIMIT 1;";
    $this->db->query($query);
    $this->db->execute();
    return $this->db->resultSingle();
  }

  public function getProjectById($id)
  {
    $query = "SELECT * FROM project WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();
    return $this->db->resultSingle();
  }

  public function getProjectByIdJson($data)
  {
    return $this->db->jsonResponse($data);
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

  public function editProject($data)
  {
    $query = "UPDATE project SET `name`=:name,`description`=:description WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
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
