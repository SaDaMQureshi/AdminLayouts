<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body style="background-color: #f2f7ff;">
    <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center">
        <div class="row w-100 justify-content-center">
            <div class="col-lg-4 col-md-7 col-sm-10">
                <div class="card border-0 pt-3 pb-5 px-5 mb-3">
                    <div class="card-body text-center">
                        <img src="assets/images/logo/logo.png" width="150" height="100" alt="logo">
                        <h2 class="text-secondary">Welcome Back</h2>
                        <p class="text-secondary text-opacity-50">Enter your credentials to access your account.</p>

                        <form class="border-0 mt-2">
                            <div class="input-group mb-3">
                                <span class="input-group-text">
                                    <i class="bi bi-envelope text-primary"></i>
                                </span>
                                <input type="email" class="form-control" placeholder="Email address">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text">
                                    <i class="bi bi-lock text-primary"></i>
                                </span>

                                <input type="password" id="password" class="form-control"
                                    placeholder="Enter your password">

                                <span class="input-group-text">
                                    <button type="button" id="togglePassword" class="bg-transparent border-0">
                                        <i class="bi bi-eye text-primary" id="eyeIcon"></i>
                                    </button>
                                </span>
                            </div>

                            <button type="button" class="btn btn-primary w-100">
                                Login
                            </button>
                        </form>
                    </div>
                </div>
                <p class="text-center text-secondary">Forgot your password? <a href="ResetPassword.html" class="text-primary text-opacity-40">Reset password</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script>
        const passwordField = document.getElementById('password');
        const toggleBtn = document.getElementById('togglePassword');
        const eyeIcon = document.getElementById('eyeIcon');

        toggleBtn.addEventListener('click', function () {
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.classList.replace('bi-eye', 'bi-eye-slash');
            } else {
                passwordField.type = 'password';
                eyeIcon.classList.replace('bi-eye-slash', 'bi-eye');
            }
        });
    </script>

</body>

</html>