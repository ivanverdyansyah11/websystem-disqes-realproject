<?php

class Signin extends Controller
{
  public function index()
  {
    $data['title'] = "Signin";
    $this->view('signin/index', $data);
  }

  public function signInAction()
  {
    $data['user'] = $this->model('User_model')->getUserSignIn($_POST);

    if ($data['user'] == NULL) {
      header("Location:" . BASEURL . "signin");
      exit;
    } else {
      header("Location:" . BASEURL . "dashboard");
      exit;
    }
  }
}
