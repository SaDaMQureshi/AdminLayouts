<?php
$title = "Dashboard";

ob_start();
?>
<div class="row ">

    <div class="col-xl-3 col-md-3 mb-4 card-box">
        <div class="card shadow" style="border:none">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="icon-box bg-opacity-25 px-1 me-2" style="background-color: #e9f3fb;">
                        <i class="bi bi-currency-dollar fs-5" style="color: #6dace7;"></i>
                    </div>
                    <span class="text-uppercase text-muted" style="font-size: 0.8rem;">Total Revenue</span>
                </div>
                <h4 class="mt-2" data-target="450000">$0</h4>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-3 mb-4 card-box">
        <div class="card shadow" style="border:none">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="icon-box bg-success bg-opacity-25 px-1 me-2 text-success">
                        <i class="bi bi-person fs-5"></i>
                    </div>
                    <span class="text-uppercase text-muted" style="font-size: 0.8rem;">Total Visitors</span>
                </div>
                <h4 class="mt-2" data-target="8000">0</h4>
            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
include 'layout.php';
