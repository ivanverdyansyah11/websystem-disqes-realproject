<?php

class Signup extends Controller
{
  public function index()
  {
    if (!isset($_SESSION['username'])) {
      $data['title'] = "Signup";
      $this->view('signup/index', $data);
    } else {
      header("Location:" . BASEURL . "dashboard");
      exit;
    };
  }

  public function signUpAction()
  {
    if ($this->model('User_model')->insertUserSignup($_POST) > 0) {
      Flasher::setFlash('success', 'Successfully create account!');
      header("Location:" . BASEURL . "signin");
      exit;
    } else {
      Flasher::setFlash('danger', 'Failed to create account!');
      header("Location:" . BASEURL . "signup");
      exit;
    }
  }
}
