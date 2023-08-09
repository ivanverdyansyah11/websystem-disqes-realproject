<?php

class Dashboard extends Controller
{
  public function index()
  {
    if (isset($_SESSION['username'])) {
      $data['title'] = "Dashboard";
      $this->view('templates/header', $data);
      $this->view('dashboard/index', $data);
      $this->view('templates/footer', $data);
    } else {
      header("Location:" . BASEURL . "signin");
      exit;
    };
  }
}
