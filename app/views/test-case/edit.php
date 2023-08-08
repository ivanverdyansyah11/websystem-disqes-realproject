<div class="content">
    <div class="row section-gap">
        <div class="col-12">
            <h4 class="title">Edit Test Cases</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-11 col-xl-10">
            <form action="" class="card-form d-flex flex-column w-100">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="input-wrapper w-100 position-relative">
                            <p class="caption-input">Name</p>
                            <input type="text" class="input position-relative" id="nameInputAddCase">
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="input-wrapper w-100 position-relative">
                            <p class="caption-input">Suite</p>
                            <select class="input position-relative" id="suiteInputAddCase">
                                <option>Choose Suite Selection</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
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
                                    <div class="button-outline button-step d-flex align-items-center">
                                        <div class="add-outline-icon"></div>
                                        Step
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row row-step">
                                    <div class="col-12 d-flex justify-content-between align-items-center gap-4 col-step">
                                        <div class="input-wrapper w-100 position-relative" id="inputWrapperInstructions">
                                            <div class="caption-input-table">
                                                <p>Instructions</p>
                                                <div class="wrapper-button">
                                                    <div class="add-table-icon"></div>
                                                    <div class="remove-table-icon d-none"></div>
                                                </div>
                                            </div>
                                            <label class="input input-table position-relative d-none" id="inputTable">
                                                <table class="table-input">
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="input-transparent">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="input-transparent">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="input-transparent">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </label>
                                            <input type="text" class="input position-relative" id="inputText">
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

    rowStep.addEventListener('click', function(e) {
        if (e.target.className === 'add-table-icon') {
            const addTableIcon = e.target;
            addTableIcon.classList.add('d-none');

            const wrapperButton = addTableIcon.parentElement;
            const removeTableButton = wrapperButton.querySelector('.remove-table-icon');
            removeTableButton.classList.remove('d-none');

            const inputWrapper = addTableIcon.parentElement.parentElement.parentElement;
            const inputTable = inputWrapper.querySelector('#inputTable');
            const input = inputWrapper.querySelector('#inputText');

            inputTable.classList.remove('d-none');
            input.classList.add('d-none');
        } else if (e.target.className === 'remove-table-icon') {
            const removeTableIcon = e.target;
            removeTableIcon.classList.add('d-none');

            const wrapperButton = removeTableIcon.parentElement;
            const addTableButton = wrapperButton.querySelector('.add-table-icon');
            addTableButton.classList.remove('d-none');

            const inputWrapper = removeTableIcon.parentElement.parentElement.parentElement;
            const inputTable = inputWrapper.querySelector('#inputTable');
            const input = inputWrapper.querySelector('#inputText');

            inputTable.classList.add('d-none');
            input.classList.remove('d-none');
        } else if (e.target.className === 'minus-icon') {
            const minusComponentIcon = e.target;
            const colStep = minusComponentIcon.parentElement.parentElement;
            colStep.remove();
        }
    });

    stepButton.addEventListener('click', function() {
        const colStep = document.createElement('div');
        colStep.classList.add("col-step");
        colStep.classList.add("col-12");
        colStep.classList.add("gap-4");
        colStep.classList.add("mt-4");

        const inputWrapperInstructions = document.createElement('div');
        inputWrapperInstructions.classList.add("input-wrapper");

        const captionInputTable = document.createElement('div');
        captionInputTable.classList.add('caption-input-table');
        inputWrapperInstructions.appendChild(captionInputTable);

        const pInstructions = document.createElement('p');
        const textPInstructions = document.createTextNode('Instructions');
        pInstructions.appendChild(textPInstructions);
        captionInputTable.appendChild(pInstructions);

        const wrapperButton = document.createElement('div');
        wrapperButton.classList.add('wrapper-button');
        captionInputTable.appendChild(wrapperButton);

        const addTableIcon = document.createElement('div');
        addTableIcon.classList.add('add-table-icon');
        const removeTableIcon = document.createElement('div');
        removeTableIcon.classList.add('remove-table-icon');
        removeTableIcon.classList.add('d-none');

        wrapperButton.appendChild(addTableIcon);
        wrapperButton.appendChild(removeTableIcon);

        const inputTableInstructions = document.createElement('label');
        inputTableInstructions.classList.add('input');
        inputTableInstructions.classList.add('input-table');
        inputTableInstructions.classList.add('position-relative');
        inputTableInstructions.classList.add('d-none');
        inputTableInstructions.id = 'inputTable';

        const tableInstructions = document.createElement('table');
        tableInstructions.classList.add('table-input');
        inputTableInstructions.appendChild(tableInstructions);

        const trTableInstructions = document.createElement('tr');
        tableInstructions.appendChild(trTableInstructions);

        const tdTableInstructions1 = document.createElement('td');
        trTableInstructions.appendChild(tdTableInstructions1);

        const inputTransparentInstructions1 = document.createElement('input');
        inputTransparentInstructions1.type = 'text';
        inputTransparentInstructions1.classList.add('input-transparent');
        tdTableInstructions1.appendChild(inputTransparentInstructions1);

        const tdTableInstructions2 = document.createElement('td');
        trTableInstructions.appendChild(tdTableInstructions2);

        const inputTransparentInstructions2 = document.createElement('input');
        inputTransparentInstructions2.type = 'text';
        inputTransparentInstructions2.classList.add('input-transparent');
        tdTableInstructions2.appendChild(inputTransparentInstructions2);

        const tdTableInstructions3 = document.createElement('td');
        trTableInstructions.appendChild(tdTableInstructions3);

        const inputTransparentInstructions3 = document.createElement('input');
        inputTransparentInstructions3.type = 'text';
        inputTransparentInstructions3.classList.add('input-transparent');
        tdTableInstructions3.appendChild(inputTransparentInstructions3);

        const inputInstructions = document.createElement('input');
        inputInstructions.classList.add('input');
        inputInstructions.type = 'text';
        inputInstructions.id = 'inputText';

        const inputWrapperExpected = document.createElement('div');
        inputWrapperExpected.classList.add("input-wrapper");

        const pExpected = document.createElement('p');
        pExpected.classList.add('caption-input');

        const textPExpected = document.createTextNode('Expected Result');
        pExpected.appendChild(textPExpected);

        const inputExpected = document.createElement('input');
        inputExpected.classList.add('input');
        inputExpected.type = 'text';
        inputExpected.id = 'instructionInputAddCase';

        const wrapperIcon = document.createElement('div');
        wrapperIcon.classList.add('wrapper-icon');
        const minusIcon = document.createElement('div');
        minusIcon.classList.add('minus-icon');

        inputWrapperInstructions.appendChild(inputTableInstructions);
        inputWrapperInstructions.appendChild(inputInstructions);

        inputWrapperExpected.appendChild(pExpected);
        inputWrapperExpected.appendChild(inputExpected);

        wrapperIcon.appendChild(minusIcon);

        colStep.appendChild(inputWrapperInstructions);
        colStep.appendChild(inputWrapperExpected);
        colStep.appendChild(wrapperIcon);

        rowStep.appendChild(colStep);
    });
</script>