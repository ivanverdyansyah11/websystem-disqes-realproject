<?php

class Signup extends Controller
{
  public function index()
  {
    $data['title'] = "Signup";
    $this->view('signup/index', $data);
  }

  public function signUpAction()
  {
    if ($this->model('User_model')->insertUserSignup($_POST) > 0) {
      header("Location:" . BASEURL . "signin");
      exit;
    } else {
      header("Location:" . BASEURL . "signup");
      exit;
    }
  }
}
