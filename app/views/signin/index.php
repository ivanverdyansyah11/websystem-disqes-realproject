<div class="container-fluid">
    <div class="row">
        <div class="d-none d-lg-inline-block col-lg-7 col-xl-8 p-0 background-image" style="height: 100vh;"></div>
        <div class="col p-0">
            <div class="card-login w-100 d-flex flex-column align-items-center">
                <img src="<?= BASEURL; ?>img/brand-logo/brand-logo.svg" alt="Brand Logo" style="margin-bottom: 48px;">
                <form action="" style="width: 100%; gap: 24px;" class="d-flex flex-column">
                    <div class="wrapper d-flex flex-column" style="gap: 16px;">
                        <div class="input-wrapper w-100 position-relative">
                            <p class="caption-input">Email</p>
                            <input type="email" class="input position-relative">
                        </div>
                        <div class="input-wrapper w-100 position-relative">
                            <p class="caption-input">Password</p>
                            <input type="password" class="input position-relative">
                        </div>
                    </div>
                    <div class="wrapper d-flex justify-content-between align-items-center">
                        <div class="input-checkbox d-flex align-items-center">
                            <input type="checkbox" id="remember_me">
                            <label for="remember_me">Remember Me</label>
                        </div>
                        <a href="<?= BASEURL; ?>confirmEmail" class="link-primary">Forgot Password</a>
                    </div>
                    <button class="button-login text-center">Sign in</button>
                </form>
                <p class="caption-login" style="margin-top: 12px;">This site is protected by reCAPTCHA and the Google <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a> apply.</p>
                <span class="caption-redirect" style="margin-top: 48px;">Don’t have an account? <a href="<?= BASEURL; ?>signup" class="link-redirect">Sign up</a></span>
            </div>
        </div>
    </div>
</div>