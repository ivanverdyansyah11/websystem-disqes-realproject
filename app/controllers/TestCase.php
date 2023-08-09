<?php

class TestCase extends Controller
{
  public function index()
  {
    if (isset($_SESSION['username'])) {
      $data['title'] = "Test Case";
      $data['test_suites'] = $this->model('Testsuite_model')->getTestSuiteByProjectId($_SESSION['project']);

      $this->view('templates/header', $data);
      $this->view('test-case/index', $data);
      $this->view('templates/footer', $data);
    } else {
      header("Location:" . BASEURL . "signin");
      exit;
    };
  }

  public function add()
  {
    if (isset($_SESSION['username'])) {
      $data['title'] = "New Test Case";
      $this->view('templates/header', $data);
      $this->view('test-case/add', $data);
      $this->view('templates/footer', $data);
    } else {
      header("Location:" . BASEURL . "signin");
      exit;
    };
  }

  public function addTestSuiteAction()
  {
    if ($this->model('Testsuite_model')->insertTestSuite($_POST) > 0) {
      Flasher::setFlash('success', 'Successfully create test suite!');
      header("Location:" . BASEURL . "testcase");
      exit;
    } else {
      Flasher::setFlash('danger', 'Failed to create test suite!');
      header("Location:" . BASEURL . "testcase");
      exit;
    }
  }

  public function edit()
  {
    if (isset($_SESSION['username'])) {
      $data['title'] = "Edit Test Cases";
      $this->view('templates/header', $data);
      $this->view('test-case/edit', $data);
      $this->view('templates/footer', $data);
    } else {
      header("Location:" . BASEURL . "signin");
      exit;
    };
  }

  public function editTestSuite($id)
  {
    $data['test_suite'] = $this->model('Testsuite_model')->getTestSuiteById($id);
    $data['test_suiteJson'] = $this->model('Testsuite_model')->getTestSuiteByIdJson($data['test_suite']);
  }

  public function editTestSuiteAction()
  {
    if ($this->model('Testsuite_model')->editTestSuite($_POST) > 0) {
      Flasher::setFlash('success', 'Successfully edit test suite!');
      header("Location:" . BASEURL . "testcase");
      exit;
    } else {
      Flasher::setFlash('danger', 'Failed to edit test suite!');
      header("Location:" . BASEURL . "testcase");
      exit;
    }
  }
}
