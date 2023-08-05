<div class="content">
    <div class="row section-gap">
        <div class="col-12">
            <h4 class="title">Test Case</h4>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-12">
            <div class="filter-bar">
                <div class="filter-button d-flex justify-content-between align-items-center">
                    <div class="wrapper d-flex align-items-center gap-2">
                        <div class="filter-icon"></div>
                        <p>Filter</p>
                    </div>
                    <div class="arrow-icon"></div>
                </div>
                <div class="filter-content">
                    <form action="" style="width: 100%; gap: 24px;" class="d-flex flex-column">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-wrapper w-100 position-relative">
                                    <p class="caption-input">Key</p>
                                    <input type="text" class="input position-relative" id="keyInput">
                                </div>
                            </div>
                            <div class="col-md-6 mt-4 mt-md-0">
                                <div class="input-wrapper w-100 position-relative">
                                    <p class="caption-input">Name</p>
                                    <input type="text" class="input position-relative" id="nameInput">
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="input-wrapper w-100 position-relative">
                                    <p class="caption-input">Suite</p>
                                    <select class="input position-relative" id="suiteInput">
                                        <option>Choose Suite Selection</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper d-flex gap-2">
                            <button type="button" class="button-primary d-flex align-items-center">
                                <div class="search-icon"></div>
                                Search
                            </button>
                            <button type="button" class="reset-button button-transparent d-flex align-items-center">
                                <div class="reset-icon"></div>
                                Reset
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-3 mb-4 mb-lg-0">
            <div class="table-header d-flex justify-content-between align-items-center">
                <p class="table-title">Test Suites</p>
                <div class="wrapper-icon" data-bs-toggle="modal" data-bs-target="#addNewSuite">
                    <div class="add-suite-icon"></div>
                </div>
            </div>
            <a href="#" class="suite-header d-flex align-items-center">
                <div class="all-suite-icon"></div>
                <p>All Test Cases</p>
            </a>
            <div class="wrapper-suite">
                <div class="wrapper-header position-relative">
                    <a href="#" class="suite-header d-flex align-items-center justify-content-between position-relative">
                        <div class="wrapper-header d-flex align-items-center">
                            <div class="suite-icon"></div>
                            <p>Dashboard</p>
                        </div>
                        <div class="arrow-suite p-1 pe-0">
                            <div class="arrow-icon"></div>
                        </div>
                    </a>
                    <div class="wrapper-action d-flex align-items-center">
                        <div class="box-rotate position-relative"></div>
                        <div class="card-action d-flex position-relative">
                            <button type="button" class="wrapper-icon">
                                <div class="add-section-icon"></div>
                            </button>
                            <button type="button" class="wrapper-icon" data-bs-toggle="modal" data-bs-target="#editSuite">
                                <div class="edit-icon"></div>
                            </button>
                            <button type="button" class="wrapper-icon" data-bs-toggle="modal" data-bs-target="#deleteSuite">
                                <div class="delete-icon"></div>
                            </button>
                        </div>
                    </div>
                </div>

                <a href="#" class="suite-menu">
                    <p>Dashboard Sales</p>
                </a>
            </div>

            <div class="wrapper-suite">
                <div class="wrapper-header position-relative">
                    <a href="#" class="suite-header d-flex align-items-center justify-content-between">
                        <div class="wrapper-header d-flex align-items-center">
                            <div class="suite-icon"></div>
                            <p>Report</p>
                        </div>
                        <div class="arrow-suite p-1 pe-0">
                            <div class="arrow-icon"></div>
                        </div>
                    </a>
                    <div class="wrapper-action d-flex align-items-center">
                        <div class="box-rotate position-relative"></div>
                        <div class="card-action d-flex position-relative">
                            <button type="button" class="wrapper-icon">
                                <div class="add-section-icon"></div>
                            </button>
                            <button type="button" class="wrapper-icon" data-bs-toggle="modal" data-bs-target="#editSuite">
                                <div class="edit-icon"></div>
                            </button>
                            <button type="button" class="wrapper-icon" data-bs-toggle="modal" data-bs-target="#deleteSuite">
                                <div class="delete-icon"></div>
                            </button>
                        </div>
                    </div>
                </div>

                <a href="#" class="suite-menu">
                    <p>Report Sales</p>
                </a>
            </div>

            <div class="wrapper-close"></div>
        </div>

        <div class="col">
            <div class="table-header d-flex justify-content-between align-items-center">
                <p class="table-title">Dashboard</p>
                <a href="#" class="button-primary d-flex align-items-center">
                    <div class="add-icon"></div>
                    New
                </a>
            </div>
            <div class="case-header">
                <p>Name</p>
            </div>

            <div class="case-menu position-relative">
                <a href="#">See a graph of the number of sales transactions per day</a>
                <div class="wrapper-action d-flex align-items-center">
                    <div class="box-rotate position-relative"></div>
                    <div class="card-action d-flex position-relative">
                        <a href="#" type="button" class="wrapper-icon">
                            <div class="edit-icon"></div>
                        </a>
                        <button type="button" class="wrapper-icon">
                            <div class="delete-icon"></div>
                        </button>
                    </div>
                </div>
            </div>

            <div class="case-menu position-relative">
                <a href="#">Filter the report date of the number of transactions per day</a>
                <div class="wrapper-action d-flex align-items-center">
                    <div class="box-rotate position-relative"></div>
                    <div class="card-action d-flex position-relative">
                        <a href="#" type="button" class="wrapper-icon">
                            <div class="edit-icon"></div>
                        </a>
                        <button type="button" class="wrapper-icon">
                            <div class="delete-icon"></div>
                        </button>
                    </div>
                </div>
            </div>

            <div class="case-menu position-relative">
                <a href="#">View monthly sales report graphs</a>
                <div class="wrapper-action d-flex align-items-center">
                    <div class="box-rotate position-relative"></div>
                    <div class="card-action d-flex position-relative">
                        <a href="#" type="button" class="wrapper-icon">
                            <div class="edit-icon"></div>
                        </a>
                        <button type="button" class="wrapper-icon">
                            <div class="delete-icon"></div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="wrapper-close"></div>
        </div>
    </div>

    <div class="modal fade" id="addNewSuite" tabindex="-1" aria-labelledby="addNewSuiteLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content d-flex flex-column">
                <div class="content-header d-flex justify-content-between align-items-center">
                    <h4 class="title">Add New Suite</h4>
                    <div class="wrapper-icon" data-bs-dismiss="modal">
                        <div class="exit-icon"></div>
                    </div>
                </div>
                <div class="content-body">
                    <form action="" style="width: 100%; gap: 24px;" class="d-flex flex-column">
                        <div class="input-wrapper w-100 position-relative">
                            <p class="caption-input">Name</p>
                            <input type="text" class="input position-relative" id="nameInputAddSuite">
                        </div>
                        <div class="input-wrapper w-100 position-relative">
                            <p class="caption-input">Description</p>
                            <input type="text" class="input position-relative" id="descriptionInputAddSuite">
                        </div>
                        <div class="wrapper d-flex gap-2">
                            <button class="button-primary d-flex align-items-center">
                                <div class="save-icon"></div>
                                Save
                            </button>
                            <button type="button" class="reset-button-add-suite button-transparent d-flex align-items-center">
                                <div class="reset-icon"></div>
                                Reset
                            </button>
                            <button type="button" class="button-transparent d-flex align-items-center" data-bs-dismiss="modal">
                                <div class="cancel-icon"></div>
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editSuite" tabindex="-1" aria-labelledby="editSuiteLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content d-flex flex-column">
                <div class="content-header d-flex justify-content-between align-items-center">
                    <h4 class="title">Edit Suite</h4>
                    <div class="wrapper-icon" data-bs-dismiss="modal">
                        <div class="exit-icon"></div>
                    </div>
                </div>
                <div class="content-body">
                    <form action="" style="width: 100%; gap: 24px;" class="d-flex flex-column">
                        <div class="input-wrapper w-100 position-relative">
                            <p class="caption-input">Name</p>
                            <input type="text" class="input position-relative" id="nameInputEditSuite">
                        </div>
                        <div class="input-wrapper w-100 position-relative">
                            <p class="caption-input">Description</p>
                            <input type="text" class="input position-relative" id="descriptionInputEditSuite">
                        </div>
                        <div class="wrapper d-flex gap-2">
                            <button class="button-primary d-flex align-items-center">
                                <div class="save-icon"></div>
                                Save
                            </button>
                            <button type="button" class="reset-button-edit-suite button-transparent d-flex align-items-center">
                                <div class="reset-icon"></div>
                                Reset
                            </button>
                            <button type="button" class="button-transparent d-flex align-items-center" data-bs-dismiss="modal">
                                <div class="cancel-icon"></div>
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteSuite" tabindex="-1" aria-labelledby="deleteSuiteLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content d-flex flex-column" style="gap: 14px !important;">
                <div class="content-header d-flex justify-content-between align-items-center">
                    <h4 class="title">Are you sure?</h4>
                </div>
                <div class="content-body">
                    <form action="" style="width: 100%; gap: 24px;" class="d-flex flex-column">
                        <p class="caption-delete">Are you sure you want to delete this <span>test suite</span>? This action cannot be undone, and the <span>test suite</span> will be permanently removed from the system.</p>
                        <div class="wrapper d-flex gap-2">
                            <button class="button-primary d-flex align-items-center">
                                <div class="save-icon"></div>
                                Save
                            </button>
                            <button type="button" class="button-transparent d-flex align-items-center" data-bs-dismiss="modal">
                                <div class="cancel-icon"></div>
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    const filterButton = document.querySelector('.filter-button');
    const filterBar = document.querySelector('.filter-bar');
    const keyInput = document.querySelector('#keyInput');
    const nameInput = document.querySelector('#nameInput');
    const resetButton = document.querySelector('.reset-button');
    const arrowSuite = document.querySelectorAll('.arrow-suite');
    const wrapperHeader = document.querySelectorAll('.wrapper-header');
    const caseMenu = document.querySelectorAll('.case-menu');
    const nameInputAddSuite = document.querySelector('#nameInputAddSuite');
    const descriptionInputAddSuite = document.querySelector('#descriptionInputAddSuite');
    const resetButtonAddSuite = document.querySelector('.reset-button-add-suite');
    const nameInputEditSuite = document.querySelector('#nameInputEditSuite');
    const descriptionInputEditSuite = document.querySelector('#descriptionInputEditSuite');
    const resetButtonEditSuite = document.querySelector('.reset-button-edit-suite');

    filterButton.addEventListener('click', function() {
        filterBar.classList.toggle('active');
    });

    resetButton.addEventListener('click', function() {
        keyInput.value = '';
        nameInput.value = '';
        suiteInput.value = 'Choose Suite Selection';
    });

    resetButtonAddSuite.addEventListener('click', function() {
        nameInputAddSuite.value = '';
        descriptionInputAddSuite.value = '';
    });

    resetButtonEditSuite.addEventListener('click', function() {
        nameInputEditSuite.value = '';
        descriptionInputEditSuite.value = '';
    });

    arrowSuite.forEach(element => {
        element.addEventListener('click', function() {
            const wrapperSuite = element.parentElement.parentElement.parentElement;
            const suiteMenu = wrapperSuite.querySelector('.suite-menu');
            this.classList.toggle('active');
            suiteMenu.classList.toggle('active');
        });
    });

    wrapperHeader.forEach(element => {
        element.addEventListener('mouseover', function() {
            const wrapperAction = this.querySelector('.wrapper-action');
            wrapperAction.classList.add('active');
        });
        element.addEventListener('mouseout', function() {
            const wrapperAction = this.querySelector('.wrapper-action');
            wrapperAction.classList.remove('active');
        });
    });

    caseMenu.forEach(element => {
        element.addEventListener('mouseover', function() {
            const wrapperAction = this.querySelector('.wrapper-action');
            wrapperAction.classList.add('active');
        });
        element.addEventListener('mouseout', function() {
            const wrapperAction = this.querySelector('.wrapper-action');
            wrapperAction.classList.remove('active');
        });
    });
</script>