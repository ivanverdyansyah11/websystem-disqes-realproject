<?php

class confirmEmail extends Controller
{
  public function index()
  {
    $data['title'] = "Confirm Email";
    $this->view('templates/header', $data);
    $this->view('confirmEmail/index', $data);
    $this->view('templates/footer', $data);
  }
}
