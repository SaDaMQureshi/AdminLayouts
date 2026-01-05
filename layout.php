<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Layout' ?></title>
    <link rel="icon" href="assets/images/logo/logo.png" type="image/x-icon">
    <!-- JQuery CDN  -->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Family  -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Datatables css Style  -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.6/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.6/css/dataTables.bootstrap5.css">
    <!-- Custom CSS  -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- Mobile Topbar -->
    <nav class="top-navbar">
        <!-- LEFT (mobile only) -->
        <div class="navbar-left d-md-none">
            <button class="btn" onclick="toggleSidebar()">
                <i class="bi bi-list"></i>
            </button>
            <span class="brand">Routefy</span>
        </div>

        <!-- RIGHT (desktop + mobile) -->
        <div class="navbar-right ms-auto">
            <div class="dropdown">
                <a href="#" class="profile-toggle" data-bs-toggle="dropdown">
                    <img src="https://i.pravatar.cc/40" alt="Profile">
                    <span class="d-none d-md-inline">Sadam</span>
                    <i class="bi bi-chevron-down"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Sidebar -->
    <aside class="sidebar">
        <!-- Sidebar Header / Logo -->
        <div class="sidebar-logo">Routefy</div>

        <!-- Scrollable Menu -->
        <div class="sidebar-menu">
            <ul class="menu">
                <li>
                    <a href="#">
                        <i class="bi bi-house"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)" onclick="toggleSubmenu(this)">
                        <i class="bi bi-gear"></i>
                        <span>Services</span>
                        <i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="DashboardKit.php">Dashboard Kits</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="ResetPassword.php">Reset Password</a></li>
                        <li><a href="OTPVerification.php">OTP Verification</a></li>
                        <li><a href="ChangePassword.php">Change Password</a></li>
                        <li><a href="Tables.php">Tables</a></li>
                    </ul>
                </li>

                <!-- Add as many li as you want -->
            </ul>
        </div>

    </aside>


    <!-- Overlay (mobile only) -->
    <div id="overlay" onclick="toggleSidebar()"></div>

    <!-- Main Content -->
    <!-- Main Wrapper -->
    <div class="page-wrapper">

        <div class="card" style="border-radius: none; border:none;">
            <div class="card-body d-flex justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 rounded">
                        <li class="breadcrumb-item">
                            <a href="DashboardKit.php" class="text-decoration-none text-primary">
                                <i class="bi bi-house-door-fill me-1"></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            <?= $secondBreadcrumb ?>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>


        <!-- Main Content -->
        <main class="content">
            <?= $content ?>
        </main>

        <!-- Footer -->
        <footer class="main-footer mt-4">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <span>© <time datetime="2026">2026</time> <span class="primary-color">Routefy</span>. All rights
                    reserved.</span>
            </div>
        </footer>

    </div>


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <!-- DataTables -->
    <script src="https://cdn.datatables.net/2.3.6/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.3.6/js/dataTables.bootstrap5.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
</body>

</html>