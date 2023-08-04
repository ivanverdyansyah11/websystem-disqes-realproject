<?php

class Signin extends Controller
{
  public function index()
  {
    $data['title'] = "Signin";
    $this->view('templates/header', $data);
    $this->view('signin/index', $data);
    $this->view('templates/footer', $data);
  }

  public function signinAction()
  {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data['user'] = $this->model('pengguna_model')->getUserSignIn($username, $password);

    if ($data['user'] == NULL) {
      header("Location:" . BASEURL . "/login");
      exit;
    } else {
      $_SESSION['role'] = $data['user']['role'];
      $_SESSION['pengguna_id'] = $data['user']['id'];

      header("Location:" . BASEURL . "home");
      exit;
    }
  }
}
