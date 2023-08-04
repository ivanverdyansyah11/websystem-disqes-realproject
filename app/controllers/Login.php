<?php

class Login extends Controller
{
  public function index()
  {
    $data['title'] = "Login";
    $this->view('templates/header', $data);
    $this->view('login/index', $data);
    $this->view('templates/footer', $data);
  }

  public function loginAction()
  {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data['user'] = $this->model('pengguna_model')->getUserLogin($username, $password);

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
