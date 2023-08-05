<?php

class Signin extends Controller
{
  public function index()
  {
    $data['title'] = "Signin";
    $this->view('templates/header', $data);
    $this->view('signin/index', $data);
    $this->view('templates/footer', $data);
  }
}
