<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClientWise</title>
    <link rel="icon" href="assets/images/logo/logo.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.6/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.6/css/dataTables.bootstrap5.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.26.17/dist/sweetalert2.min.css">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <nav class="top-navbar">
        <div class="navbar-left d-md-none">
            <button class="btn" onclick="toggleSidebar()">
                <i class="bi bi-list"></i>
            </button>
            <span class="brand">ClientWise</span>
        </div>

        <div class="navbar-right ms-auto">
            <div class="dropdown">
                <a href="#" class="profile-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://i.pravatar.cc/40" alt="Profile">
                    <span class="d-none d-md-inline fw-semibold">Sadam Qureshi</span>
                    <i class="bi bi-chevron-down"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item text-danger" href="">
                            <i class="bi bi-box-arrow-right me-2"></i>Logout
                        </a></li>
                </ul>
            </div>
        </div>
    </nav>


    <aside class="sidebar">
        <div class="sidebar-logo">ClientWise</div>

        <div class="sidebar-menu">
            <ul class="menu">
                <li>
                    <a href="DashboardKit.php">
                        <i class="bi bi-house-door-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)" onclick="toggleSubmenu(this)">
                        <i class="bi bi-people-fill"></i>
                        <span>Customers</span>
                        <i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="">Add Customers</a></li>
                        <li><a href="">Manage Customers</a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)" onclick="toggleSubmenu(this)">
                        <i class="bi bi-gear-fill"></i>
                        <span>Settings</span>
                        <i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="#">General Settings</a></li>
                        <li><a href="#">Security</a></li>
                    </ul>
                </li>

            </ul>
        </div>

    </aside>


    <div id="overlay" onclick="toggleSidebar()"></div>

    <div class="page-wrapper">

        <div class="card-breadcrumb">
            <div class="card-body d-flex justify-content-end p-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="bi bi-house-door-fill me-1"></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Customer
                        </li>
                        <!-- @hasSection('breadcrumbs-2')
                        <li class="breadcrumb-item active" aria-current="page">
                            Add Customer                            
                        </li>
                        @endif -->

                    </ol>
                </nav>
            </div>
        </div>


        <main class="content container-fluid mt-2">

        </main>

        <footer class="main-footer">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <span>&copy; <time datetime="2026">2026</time> <span
                        class="primary-color fw-semibold">ClientWise</span>. All rights
                    reserved.</span>
                <div class="footer-links d-none d-sm-block">
                    <a href="#">Support</a>
                    <a href="#">Privacy</a>
                    <a href="#">Terms</a>
                </div>
            </div>
        </footer>

    </div>


    <script>
        function toggleSidebar() {
            document.body.classList.toggle('sidebar-open');
        }

        function toggleSubmenu(element) {
            const parentLi = element.closest('li');
            parentLi.classList.toggle('open');
            // Optional: Close other submenus
            document.querySelectorAll('.has-submenu.open').forEach(item => {
                if (item !== parentLi) {
                    item.classList.remove('open');
                }
            });
        }
    </script>

    <script src="https://cdn.datatables.net/2.3.6/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.3.6/js/dataTables.bootstrap5.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- @if (session('success') || session('error'))
    <script>
        Swal.fire({
            toast: true,
            position: 'top-right',
            icon: "{{ session('success') ? 'success' : 'error' }}",
            title: "{{ session('success') ?? session('error') }}",
            iconColor: "{{ session('success') ? '#1373bb' : 'red' }}", // Use primary color for success
            customClass: {
                popup: 'colored-toast',
            },
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
        });
    </script>
    @endif -->

    <script src="assets/js/script.js"></script>
</body>

</html>