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
}