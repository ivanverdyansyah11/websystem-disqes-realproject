<?php

class Signup extends Controller
{
  public function index()
  {
    $data['title'] = "Signup";
    $this->view('signup/index', $data);
  }

  public function signupAction()
  {
    if ($this->model('Kelas_model')->insertDataKelas($_POST) > 0) {
      header("Location:" . BASEURL . "signup");
      exit;
    } else {
      header("Location:" . BASEURL . "signin");
      exit;
    }
  }
}
