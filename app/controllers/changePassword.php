<?php

class changePassword extends Controller
{
  public function index()
  {
    $data['title'] = "Change Password";
    $this->view('templates/header', $data);
    $this->view('changePassword/index', $data);
    $this->view('templates/footer', $data);
  }
}
