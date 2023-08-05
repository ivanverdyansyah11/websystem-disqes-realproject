<div class="content content-project">
    <div class="row section-gap">
        <div class="col-12 d-flex justify-content-md-between align-items-center gap-3 gap-md-0">
            <h4 class="title">Project</h4>
            <button type="button" class="button-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addNewProject">
                <div class="add-icon"></div>
                New
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-header d-flex align-items-center">
                <div class="row align-items-center w-100">
                    <div class="col">
                        <p>Name</p>
                    </div>
                    <div class="col d-none d-md-inline-block">
                        <p>Suite Count</p>
                    </div>
                    <div class="col d-none d-md-inline-block">
                        <p>Case Count</p>
                    </div>
                    <div class="col">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="table-body d-flex align-items-center">
                <div class="row align-items-center w-100">
                    <div class="col">
                        <p>Retail</p>
                    </div>
                    <div class="col d-none d-md-inline-block">
                        <p>14</p>
                    </div>
                    <div class="col d-none d-md-inline-block">
                        <p>10</p>
                    </div>
                    <div class="col body-action">
                        <div class="wrapper-action d-flex align-items-center">
                            <div class="box-rotate position-relative"></div>
                            <div class="card-action d-flex position-relative">
                                <button type="button" class="wrapper-icon" data-bs-toggle="modal" data-bs-target="#editSuite">
                                    <div class="edit-icon"></div>
                                </button>
                                <button type="button" class="wrapper-icon" data-bs-toggle="modal" data-bs-target="#deleteSuite">
                                    <div class="delete-icon"></div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-body d-flex align-items-center">
                <div class="row align-items-center w-100">
                    <div class="col">
                        <p>Cashier</p>
                    </div>
                    <div class="col d-none d-md-inline-block">
                        <p>10</p>
                    </div>
                    <div class="col d-none d-md-inline-block">
                        <p>0</p>
                    </div>
                    <div class="col body-action">
                        <div class="wrapper-action d-flex align-items-center">
                            <div class="box-rotate position-relative"></div>
                            <div class="card-action d-flex position-relative">
                                <button type="button" class="wrapper-icon" data-bs-toggle="modal" data-bs-target="#editSuite">
                                    <div class="edit-icon"></div>
                                </button>
                                <button type="button" class="wrapper-icon" data-bs-toggle="modal" data-bs-target="#deleteSuite">
                                    <div class="delete-icon"></div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addNewProject" tabindex="-1" aria-labelledby="addNewProjectLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content d-flex flex-column">
                <div class="content-header d-flex justify-content-between align-items-center">
                    <h4 class="title">Add New Project</h4>
                    <div class="wrapper-icon" data-bs-dismiss="modal">
                        <div class="exit-icon"></div>
                    </div>
                </div>
                <div class="content-body">
                    <form action="" style="width: 100%; gap: 24px;" class="d-flex flex-column">
                        <div class="input-wrapper w-100 position-relative">
                            <p class="caption-input">Name</p>
                            <input type="text" class="input position-relative" id="nameInputAddProject">
                        </div>
                        <div class="input-wrapper w-100 position-relative">
                            <p class="caption-input">Description</p>
                            <input type="text" class="input position-relative" id="descriptionInputAddProject">
                        </div>
                        <div class="wrapper d-flex gap-2">
                            <button class="button-primary d-flex align-items-center">
                                <div class="save-icon"></div>
                                Save
                            </button>
                            <button type="button" class="reset-button-add-project button-transparent d-flex align-items-center">
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
                    <h4 class="title">Edit Test Suite</h4>
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
    const tableBody = document.querySelectorAll('.table-body');
    const nameInputAddProject = document.querySelector('#nameInputAddProject');
    const descriptionInputAddProject = document.querySelector('#descriptionInputAddProject');
    const resetButtonAddProject = document.querySelector('.reset-button-add-project');

    resetButtonAddProject.addEventListener('click', function() {
        nameInputAddProject.value = '';
        descriptionInputAddProject.value = '';
    });

    tableBody.forEach(element => {
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