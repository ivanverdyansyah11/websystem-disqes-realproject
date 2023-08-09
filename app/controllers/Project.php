<?php

class Project extends Controller
{
  public function index()
  {
    if (isset($_SESSION['username'])) {
      $data['title'] = "Project";
      $data['projects'] = $this->model('Project_model')->getAllProject();
      $this->view('templates/header', $data);
      $this->view('project/index', $data);
      $this->view('templates/footer', $data);
    } else {
      header("Location:" . BASEURL . "signin");
      exit;
    };
  }

  public function addAction()
  {
    if ($this->model('Project_model')->insertProject($_POST) > 0) {
      Flasher::setFlash('success', 'Successfully create project!');
      header("Location:" . BASEURL . "project");
      exit;
    } else {
      Flasher::setFlash('danger', 'Failed to create project!');
      header("Location:" . BASEURL . "project");
      exit;
    }
  }
}
