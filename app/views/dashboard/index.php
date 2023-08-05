<div class="container-fluid">
    <div class="row">
        <div class="col body-color p-0 position-relative d-flex">
            <div class="sidebar">
                <div class="sidebar-logo"></div>
                <div class="sidebar-menu w-100 d-flex flex-column" style="gap: 4px;">
                    <a href="#" class="menu-link active">
                        <div class="dashboard-icon"></div>
                    </a>
                    <a href="#" class="menu-link">
                        <div class="test-case-icon"></div>
                    </a>
                    <a href="#" class="menu-link">
                        <div class="project-icon"></div>
                    </a>
                </div>
            </div>
            <div class="hamburger d-md-none">
                <div class="hamburger-icon"></div>
            </div>
            <div class="dashboard-content w-100">
                <div class="row">
                    <div class="col-12">123</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const hamburgerButton = document.querySelector('.hamburger');
    const sidebarMenu = document.querySelector('.sidebar');

    hamburgerButton.addEventListener('click', function() {
        sidebarMenu.classList.toggle('active');
    });
</script>