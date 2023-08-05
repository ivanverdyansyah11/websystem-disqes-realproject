<div class="content">
    <div class="row section-gap">
        <div class="col-12">
            <h4 class="title">Test Case</h4>
        </div>
    </div>
    <div class="row">
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
                            <button class="button-primary d-flex align-items-center">
                                <div class="search-icon"></div>
                                Search
                            </button>
                            <div class="reset-button button-transparent d-flex align-items-center">
                                <div class="reset-icon"></div>
                                Reset
                            </div>
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

    filterButton.addEventListener('click', function() {
        filterBar.classList.toggle('active');
    });

    resetButton.addEventListener('click', function() {
        keyInput.value = '';
        nameInput.value = '';
        suiteInput.value = 'Choose Suite Selection';
    });
</script>