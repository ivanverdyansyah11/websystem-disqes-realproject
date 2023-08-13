<?php

class Signin extends Controller
{
  public function index()
  {
    if (!isset($_SESSION['username'])) {
      $data['title'] = "Signin";
      $this->view('signin/index', $data);
    } else {
      header("Location:" . BASEURL . "project");
      exit;
    };
  }

  public function signInAction()
  {
    $data['user'] = $this->model('User_model')->getUserSignIn($_POST);

    if ($data['user'] == NULL) {
      Flasher::setFlash('danger', 'Email or Password does not exist!');
      header("Location:" . BASEURL . "signin");
      exit;
    } else {
      $data['project'] = $this->model('Project_model')->getProjectFirst();
      $_SESSION['project'] = $data['project']['id'];

      $_SESSION['username'] = $data['user']['username'];
      header("Location:" . BASEURL . "project");
      exit;
    }
  }

  public  function logout()
  {
    unset($_SESSION['username']);
    session_destroy();
    header("Location:" . BASEURL . "signin");
    exit;
  }
}
