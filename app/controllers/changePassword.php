<?php

class ChangePassword extends Controller
{
  public function index()
  {
    if (!isset($_SESSION['username'])) {
      $data['title'] = "Change Password";
      $this->view('changePassword/index', $data);
    } else {
      header("Location:" . BASEURL . "dashboard");
      exit;
    };
  }
}
