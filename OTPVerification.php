<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OTP Verification</title>
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
                        <h3 class="text-secondary">OTP Verification</h3>
                        <p class="text-secondary  text-opacity-50">Please enter the OTP received on the email
                            someone@example.com.</p>

                        <form class="border-0 mt-2">
                            <div class="input-group mb-3">
                                <span class="input-group-text">
                                    <i class="bi bi-shield-lock text-primary"></i>
                                </span>
                                <input type="number" class="form-control" min="0" max="999999" placeholder="Enter OTP" maxlength="6"
                                    pattern="[0-9]{6}" inputmode="numeric" required>
                            </div>


                            <button type="submit" class="btn btn-primary w-100">
                                Confirm
                            </button>
                        </form>
                    </div>
                </div>
                <p class="text-center text-secondary"><a href="login.html" class="text-secondary text-opacity-40"><i
                            class="bi bi-arrow-bar-left"></i><u class="mx-2">Change Email</u></a></p>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>