<div class="container-fluid">
    <div class="row">
        <div class="d-none d-lg-inline-block col-lg-7 col-xl-8 p-0 background-image" style="height: 100vh;"></div>
        <div class="col p-0">
            <div class="card-login w-100 d-flex flex-column align-items-center">
                <img src="<?= BASEURL; ?>img/brand-logo/brand-logo.svg" alt="Brand Logo" style="margin-bottom: 48px;">
                <form action="" style="width: 100%; gap: 24px;" class="d-flex flex-column">
                    <div class="wrapper d-flex flex-column" style="gap: 16px;">
                        <div class="input-wrapper w-100 position-relative">
                            <p class="caption-input">Password</p>
                            <input type="password" class="input position-relative">
                        </div>
                    </div>
                    <button class="button-login text-center">Change password</button>
                </form>
                <p class="caption-login" style="margin-top: 12px;">This site is protected by reCAPTCHA and the Google <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a> apply.</p>
                <span class="caption-redirect" style="margin-top: 48px;">Remember the password? <a href="<?= BASEURL; ?>signin" class="link-redirect">Sign in</a></span>
            </div>
        </div>
    </div>
</div>