<?php

class Signup extends Controller
{
  public function index()
  {
    $data['title'] = "Signup";
    $this->view('templates/header', $data);
    $this->view('signup/index', $data);
    $this->view('templates/footer', $data);
  }

  public function signupAction()
  {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data['user'] = $this->model('pengguna_model')->getUserSignUp($username, $password);

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
