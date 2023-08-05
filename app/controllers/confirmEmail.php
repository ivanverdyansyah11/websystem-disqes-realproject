<?php

class ConfirmEmail extends Controller
{
  public function index()
  {
    $data['title'] = "Confirm Email";
    $this->view('confirmEmail/index', $data);
  }
}
