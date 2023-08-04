<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Page</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 p-0 background-image" style="height: 100vh;"></div>
            <div class="col p-0">
                <div class="card-login w-100 d-flex flex-column align-items-center">
                    <img src="<?= BASEURL; ?>img/brand-logo.svg" alt="Brand Logo" style="margin-bottom: 48px;">
                    <form action="" style="width: 100%; gap: 24px;" class="d-flex flex-column">
                        <div class="wrapper d-flex flex-column" style="gap: 16px;">
                            <div class="input-wrapper w-100 position-relative">
                                <p class="caption-input">Email</p>
                                <input type="text" class="input position-relative">
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
                            <a href="#" class="link-primary">Forgot Password</a>
                        </div>
                        <button class="button-login text-center">Sign in</button>
                    </form>
                    <p class="caption-login" style="margin-top: 12px;">This site is protected by reCAPTCHA and the Google <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a> apply.</p>
                    <span class="caption-redirect" style="margin-top: 48px;">Don’t have an account? <a href="#" class="link-redirect">Sign up</a></span>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>