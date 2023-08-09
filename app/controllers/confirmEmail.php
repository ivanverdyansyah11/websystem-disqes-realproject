<?php

class ConfirmEmail extends Controller
{
  public function index()
  {
    if (!isset($_SESSION['username'])) {
      $data['title'] = "Confirm Email";
      $this->view('confirmEmail/index', $data);
    } else {
      header("Location:" . BASEURL . "dashboard");
      exit;
    };
  }
}
