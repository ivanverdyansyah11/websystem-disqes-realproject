<?php

class Dashboard extends Controller
{
  public function index()
  {
    if (isset($_SESSION['username'])) {
      $data['title'] = "Dashboard";
      $data['countTestSuite'] = $this->model('Project_model')->getCountTestSuite($_SESSION['project']);
      $data['countTestCase'] = $this->model('Project_model')->getCountTestCase($_SESSION['project']);
      $data['countProject'] = $this->model('Project_model')->getCountProject();

      $this->view('templates/header', $data);
      $this->view('dashboard/index', $data);
      $this->view('templates/footer', $data);
    } else {
      header("Location:" . BASEURL . "signin");
      exit;
    };
  }
}
