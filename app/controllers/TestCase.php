<?php

class TestCase extends Controller
{
  public function index()
  {
    if (isset($_SESSION['username'])) {
      $data['title'] = "Test Case";
      $this->view('templates/header', $data);
      $this->view('test-case/index', $data);
      $this->view('templates/footer', $data);
    } else {
      header("Location:" . BASEURL . "signin");
      exit;
    };
  }

  public function add()
  {
    if (isset($_SESSION['username'])) {
      $data['title'] = "New Test Case";
      $this->view('templates/header', $data);
      $this->view('test-case/add', $data);
      $this->view('templates/footer', $data);
    } else {
      header("Location:" . BASEURL . "signin");
      exit;
    };
  }

  public function edit()
  {
    if (isset($_SESSION['username'])) {
      $data['title'] = "Edit Test Cases";
      $this->view('templates/header', $data);
      $this->view('test-case/edit', $data);
      $this->view('templates/footer', $data);
    } else {
      header("Location:" . BASEURL . "signin");
      exit;
    };
  }
}
