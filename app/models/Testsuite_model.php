<?php

class Testsuite_model extends Database
{
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function getTestSuiteByProjectId($data)
  {
    $query = "SELECT * FROM test_suite WHERE project_id=:project_id";
    $this->db->query($query);
    $this->db->bind('project_id', $data);
    $this->db->execute();
    return $this->db->resultSet();
  }

  public function getTestSuiteId()
  {
    $query = "SELECT test_suite.id FROM test_suite ORDER BY test_suite.id DESC LIMIT 1;";
    $this->db->query($query);
    $this->db->execute();
    return $this->db->resultSingle();
  }

  public function getTestSuiteById($id)
  {
    $query = "SELECT * FROM test_suite WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();
    return $this->db->resultSingle();
  }

  public function getTestSuiteByIdJson($data)
  {
    return $this->db->jsonResponse($data);
  }

  public function insertTestSuite($data)
  {
    $query = "INSERT INTO test_suite(id,name,description,project_id) VALUES(:id,:name,:description,:project_id)";
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('name', $data['name']);
    $this->db->bind('description', $data['description']);
    $this->db->bind('project_id', $data['project_id']);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function editTestSuite($data)
  {
    $query = "UPDATE test_suite SET `name`=:name,`description`=:description WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('name', $data['name']);
    $this->db->bind('description', $data['description']);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function deleteTestSuite($id)
  {
    $query = "DELETE FROM test_suite WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();
    return $this->db->rowCount();
  }
}
