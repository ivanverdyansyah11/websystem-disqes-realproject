<?php

class TestCase extends Controller
{
  public function index()
  {
    $data['title'] = "TestCase";
    $this->view('templates/header', $data);
    $this->view('test-case/index', $data);
    $this->view('templates/footer', $data);
  }
}
