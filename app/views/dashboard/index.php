<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="flasher-wrap w-100">
                <?php Flasher::flash(); ?>
            </div>
        </div>
    </div>
    <div class="row section-gap">
        <div class="col-12">
            <h4 class="title">Dashboard</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 mb-3 mb-md-0">
            <div class="card-menu d-flex justify-content-between">
                <div class="wrapper">
                    <h6 class="menu-title">Project</h6>
                    <h5 class="menu-value"><?= $data['countProject']['total_project']; ?></h5>
                </div>
                <div class="menu-icon d-flex justify-content-center align-items-center">
                    <div class="test-case-icon"></div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3 mb-md-0">
            <div class="card-menu d-flex justify-content-between">
                <div class="wrapper">
                    <h6 class="menu-title">Test Suites</h6>
                    <h5 class="menu-value"><?= $data['countTestSuite']['total_test_suite']; ?></h5>
                </div>
                <div class="menu-icon d-flex justify-content-center align-items-center">
                    <div class="test-ruins-icon"></div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3 mb-md-0">
            <div class="card-menu d-flex justify-content-between">
                <div class="wrapper">
                    <h6 class="menu-title">Test Case</h6>
                    <h5 class="menu-value"><?= $data['countTestCase']['total_test_case'] ?></h5>
                </div>
                <div class="menu-icon d-flex justify-content-center align-items-center">
                    <div class="test-ruins-icon"></div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-menu d-flex justify-content-between">
                <div class="wrapper">
                    <h6 class="menu-title">Priority</h6>
                    <h5 class="menu-value">-</h5>
                </div>
                <div class="menu-icon d-flex justify-content-center align-items-center">
                    <div class="status-icon"></div>
                </div>
            </div>
        </div>
    </div>
</div>