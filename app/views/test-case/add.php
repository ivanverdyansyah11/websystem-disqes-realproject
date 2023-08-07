<div class="content">
    <div class="row section-gap">
        <div class="col-12">
            <h4 class="title">New Test Case</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="" class="card-form d-flex flex-column w-100">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="input-wrapper w-100 position-relative">
                            <p class="caption-input">Name</p>
                            <input type="text" class="input position-relative" id="nameInputAddCase">
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="input-wrapper w-100 position-relative">
                            <p class="caption-input">Suite</p>
                            <select class="input position-relative" id="suiteInputAddCase">
                                <option>Choose Suite Selection</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="input-wrapper w-100 position-relative">
                            <p class="caption-input">Section</p>
                            <select class="input position-relative" id="sectionInputAddCase">
                                <option>Choose Section Selection</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="input-wrapper w-100 position-relative">
                            <p class="caption-input">Preconditions</p>
                            <input type="text" class="input position-relative" id="preconditionInputAddCase">
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="wrapper d-flex justify-content-between align-items-center">
                                    <h6 class="subtitle">Steps</h6>
                                    <div class="wrapper d-flex gap-2">
                                        <div class="button-outline button-step d-flex align-items-center">
                                            <div class="add-outline-icon"></div>
                                            Step
                                        </div>
                                        <div class="button-outline button-minus d-flex align-items-center d-none">
                                            <div class="minus-icon"></div>
                                            Remove
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row row-step">
                                    <div class="col-12 d-flex justify-content-between align-items-center gap-4 col-step">
                                        <div class="input-wrapper w-100 position-relative">
                                            <p class="caption-input">Instructions</p>
                                            <input type="text" class="input position-relative" id="instructionInputAddCase">
                                        </div>
                                        <div class="input-wrapper w-100 position-relative">
                                            <p class="caption-input">Expected Result</p>
                                            <input type="text" class="input position-relative" id="expectedInputAddCase">
                                        </div>
                                        <!-- <div class="wrapper-icon minus-button">
                                            <div class="minus-icon"></div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="wrapper d-flex gap-2">
                            <button class="button-primary d-flex align-items-center">
                                <div class="save-icon"></div>
                                Save
                            </button>
                            <button type="button" class="reset-button-add-case button-transparent d-flex align-items-center">
                                <div class="reset-icon"></div>
                                Reset
                            </button>
                            <a href="<?= BASEURL; ?>testcase" class="button-transparent d-flex align-items-center">
                                <div class="cancel-icon"></div>
                                Cancel
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const rowStep = document.querySelector('.row-step');
    const stepButton = document.querySelector('.button-step');
    const minusButton = document.querySelector('.button-minus');

    minusButton.addEventListener('click', function() {
        const colStep = document.querySelectorAll('.col-step');

        rowStep.removeChild(rowStep.children[colStep.length - 1]);

        if (colStep.length <= 2) {
            minusButton.classList.add('d-none');
        }
    });

    stepButton.addEventListener('click', function() {
        const countColStep = document.querySelectorAll('.col-step');
        console.log(countColStep.length);

        minusButton.classList.remove('d-none');

        const colStep = document.createElement('div');
        colStep.classList.add("col-step");
        colStep.classList.add("col-12");
        colStep.classList.add("gap-4");
        colStep.classList.add("mt-4");

        const inputWrapperInstructions = document.createElement('div');
        inputWrapperInstructions.classList.add("input-wrapper");

        const pInstructions = document.createElement('p');
        pInstructions.classList.add('caption-input');

        const textPInstructions = document.createTextNode('Instructions');
        pInstructions.appendChild(textPInstructions);

        const inputInstructions = document.createElement('input');
        inputInstructions.classList.add('input');
        inputInstructions.type = 'type';
        inputInstructions.id = 'instructionInputAddCase';

        const inputWrapperExpected = document.createElement('div');
        inputWrapperExpected.classList.add("input-wrapper");

        const pExpected = document.createElement('p');
        pExpected.classList.add('caption-input');

        const textPExpected = document.createTextNode('Expected Result');
        pExpected.appendChild(textPExpected);

        const inputExpected = document.createElement('input');
        inputExpected.classList.add('input');
        inputExpected.type = 'type';
        inputExpected.id = 'instructionInputAddCase';

        // const wrapperIcon = document.createElement('div');
        // wrapperIcon.classList.add('wrapper-icon');
        // wrapperIcon.classList.add('minus-button');
        // const minusIcon = document.createElement('div');
        // minusIcon.classList.add('minus-icon');

        inputWrapperInstructions.appendChild(pInstructions);
        inputWrapperInstructions.appendChild(inputInstructions);

        inputWrapperExpected.appendChild(pExpected);
        inputWrapperExpected.appendChild(inputExpected);

        // wrapperIcon.appendChild(minusIcon);

        colStep.appendChild(inputWrapperInstructions);
        colStep.appendChild(inputWrapperExpected);
        // colStep.appendChild(wrapperIcon);

        rowStep.appendChild(colStep);
    });
</script>