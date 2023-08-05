<?php

class Signin extends Controller
{
  public function index()
  {
    $data['title'] = "Signin";
    $this->view('signin/index', $data);
  }
}
