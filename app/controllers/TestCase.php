<?php

class TestCase extends Controller
{
  public function index()
  {
    if (isset($_SESSION['username'])) {
      $data['title'] = "Test Case";
      $data['url_add_case'] = [];
      $data['title_case'] = 'All Test Cases';
      $data['test_suites'] = $this->model('Testsuite_model')->getTestSuiteByProjectId($_SESSION['project']);
      $data['test_sections'] = [];
      $data['test_cases'] = $this->model('Testcase_model')->getTestCase($_SESSION['project']);

      $this->view('templates/header', $data);
      $this->view('test-case/index', $data);
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

  public function deleteTestSuiteAction($id)
  {
    if ($this->model('Testsuite_model')->deleteTestSuite($id) > 0) {
      Flasher::setFlash('success', 'Successfully delete test suite!');
      header("Location:" . BASEURL . "testcase");
      exit;
    } else {
      Flasher::setFlash('danger', 'Failed to delete test suite!');
      header("Location:" . BASEURL . "testcase");
      exit;
    }
  }

  public function testsuite($test_suite_id)
  {
    if (isset($_SESSION['username'])) {
      $data['title'] = "Test Case";
      $data['url_add_case'] = [];
      $data['test_suite'] = $this->model('Testsuite_model')->getTestSuiteById($test_suite_id);
      $data['title_case'] = $data['test_suite']['name'];
      $data['test_suites'] = $this->model('Testsuite_model')->getTestSuiteByProjectId($_SESSION['project']);
      $data['test_sections'] = $this->model('Testsection_model')->getTestSectionByTestSuiteId($test_suite_id);
      $data['test_cases'] = $this->model('Testcase_model')->getTestCaseByTestSuiteId($test_suite_id, $_SESSION['project']);

      $this->view('templates/header', $data);
      $this->view('test-case/index', $data);
      $this->view('templates/footer', $data);
    } else {
      header("Location:" . BASEURL . "signin");
      exit;
    };
  }

  public function addTestSection($id)
  {
    $data['test_section'] = $this->model('Testsection_model')->getTestSectionById($id);
    $data['test_sectionJson'] = $this->model('Testsection_model')->getTestSectionByIdJson($data['test_section']);
  }

  public function addTestSectionAction()
  {
    if ($this->model('Testsection_model')->insertTestSection($_POST) > 0) {
      Flasher::setFlash('success', 'Successfully create test section!');
      header("Location:" . BASEURL . "testcase");
      exit;
    } else {
      Flasher::setFlash('danger', 'Failed to create test section!');
      header("Location:" . BASEURL . "testcase");
      exit;
    }
  }

  public function editTestSection($id)
  {
    $data['test_section'] = $this->model('Testsection_model')->getTestSectionById($id);
    $data['test_sectionJson'] = $this->model('Testsection_model')->getTestSectionByIdJson($data['test_section']);
  }

  public function editTestSectionAction()
  {
    if ($this->model('Testsection_model')->editTestSection($_POST) > 0) {
      Flasher::setFlash('success', 'Successfully edit test section!');
      header("Location:" . BASEURL . "testcase");
      exit;
    } else {
      Flasher::setFlash('danger', 'Failed to edit test section!');
      header("Location:" . BASEURL . "testcase");
      exit;
    }
  }

  public function deleteTestSectionAction($id)
  {
    if ($this->model('Testsection_model')->deleteTestSection($id) > 0) {
      Flasher::setFlash('success', 'Successfully delete test section!');
      header("Location:" . BASEURL . "testcase");
      exit;
    } else {
      Flasher::setFlash('danger', 'Failed to delete test section!');
      header("Location:" . BASEURL . "testcase");
      exit;
    }
  }

  public function testsection($test_suite_id, $test_section_id)
  {
    if (isset($_SESSION['username'])) {
      $data['title'] = "Test Case";
      $data['url_add_case'] = $test_suite_id . '/' . $test_section_id;
      $data['test_suite'] = $this->model('Testsuite_model')->getTestSuiteById($test_suite_id);
      $data['test_section'] = $this->model('Testsection_model')->getTestSectionById($test_section_id);
      $data['title_case'] = $data['test_suite']['name'] . ' | ' . $data['test_section']['name'];

      $data['test_suites'] = $this->model('Testsuite_model')->getTestSuiteByProjectId($_SESSION['project']);
      $data['test_sections'] = $this->model('Testsection_model')->getTestSectionByTestSuiteId($test_suite_id);
      $data['test_cases'] = $this->model('Testcase_model')->getTestCaseByTestSectionId($test_suite_id, $test_section_id, $_SESSION['project']);

      $this->view('templates/header', $data);
      $this->view('test-case/index', $data);
      $this->view('templates/footer', $data);
    } else {
      header("Location:" . BASEURL . "signin");
      exit;
    };
  }

  public function addTestCase($test_suite_id, $test_section_id)
  {
    if (isset($_SESSION['username'])) {
      $data['title'] = "New Test Case";
      $data['test_suite'] = $this->model('Testsuite_model')->getTestSuiteById($test_suite_id);
      $data['test_section'] = $this->model('Testsection_model')->getTestSectionById($test_section_id);

      $this->view('templates/header', $data);
      $this->view('test-case/add', $data);
      $this->view('templates/footer', $data);
    } else {
      header("Location:" . BASEURL . "signin");
      exit;
    };
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

  public function addNewCase()
  {
    $_POST['instruction'] = implode(',', $_POST['instruction']);

    if ($this->model('Testcase_model')->insertTestCase($_POST) > 0) {
      Flasher::setFlash('success', 'Successfully create test case!');
      header("Location:" . BASEURL . "testcase");
      exit;
    } else {
      Flasher::setFlash('danger', 'Failed to create test case!');
      header("Location:" . BASEURL . "testcase");
      exit;
    }
  }
}
