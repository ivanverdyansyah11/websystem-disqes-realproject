<?php

class TestCase extends Controller
{
  public function index()
  {
    $data['title'] = "Test Case";
    $this->view('templates/header', $data);
    $this->view('test-case/index', $data);
    $this->view('templates/footer', $data);
  }

  public function add()
  {
    $data['title'] = "Test Case";
    $this->view('templates/header', $data);
    $this->view('test-case/add', $data);
    $this->view('templates/footer', $data);
  }
}
