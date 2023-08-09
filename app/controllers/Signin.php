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
    $email = $_POST['email'];
    $password = $_POST['password'];

    $data['user'] = $this->model('User_model')->getUserSignIn($email, $password);

    if ($data['user'] == NULL) {
      header("Location:" . BASEURL . "signin");
      exit;
    } else {
      header("Location:" . BASEURL . "dashboard");
      exit;
    }
  }
}
