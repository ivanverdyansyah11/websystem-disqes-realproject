<?php

class Project extends Controller
{
  public function index()
  {
    if (isset($_SESSION['username'])) {
      $data['title'] = "Project";
      $this->view('templates/header', $data);
      $this->view('project/index', $data);
      $this->view('templates/footer', $data);
    } else {
      header("Location:" . BASEURL . "signin");
      exit;
    };
  }
}
