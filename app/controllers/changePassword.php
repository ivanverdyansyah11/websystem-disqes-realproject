<?php

class changePassword extends Controller
{
  public function index()
  {
    $data['title'] = "Change Password";
    $this->view('changePassword/index', $data);
  }
}
