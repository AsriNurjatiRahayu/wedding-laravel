<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="template/assets/css/main/app.css">
    <link rel="stylesheet" href="template/assets/css/pages/auth.css">
    <link rel="shortcut icon" href="template/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="template/assets/images/logo/favicon.png" type="image/png">
</head>

<body>
    <div id="auth">
        <div class="container">
            <h1 class="auth-title">Log in.</h1>
            <form action="index.html">
                <div class="form-group position-relative has-icon-left mb-3">
                    <input type="text" class="form-control form-control-xl" placeholder="Username">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-3">
                    <input type="password" class="form-control form-control-xl" placeholder="Password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <div class="form-check form-check-lg d-flex align-items-end">
                    <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label text-gray-600" for="flexCheckDefault">
                        Keep me logged in
                    </label>
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
            </form>
            <div class="text-center mt-5 text-lg fs-4">
                <p class="text-gray-600">Don't have an account? <a href="/registrasi" class="font-bold">Sign
                        up</a>.</p>
            </div>
        </div>
    </div>
    </div>
</div>
</body>

</html>