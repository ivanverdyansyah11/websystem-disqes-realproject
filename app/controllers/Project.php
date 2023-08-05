<?php

class Project extends Controller
{
  public function index()
  {
    $data['title'] = "Project";
    $this->view('templates/header', $data);
    $this->view('project/index', $data);
    $this->view('templates/footer', $data);
  }
}
