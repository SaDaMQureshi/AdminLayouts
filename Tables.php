<?php
$title = "Tables";
$secondBreadcrumb = "Tables";
ob_start();
?>
<div class="container">
    <div class="card shodow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-hover align-middle">
                    <thead class="">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 1; $i <= 100; $i++) {
                        ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td>Fiona Green</td>
                                <td>Chief Operating Officer (COO)</td>
                                <td>San Francisco</td>
                                <td>48</td>
                                <td>2010-03-11</td>
                                <td>$850,000</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn" style="border: none;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <a class="dropdown-item text-warning" href="#">
                                                <i class="bi bi-eye-fill"></i> View
                                            </a>
                                            <a class="dropdown-item text-danger" href="#">
                                                <i class="bi bi-trash3-fill"></i> Delete
                                            </a>
                                        </ul>
                                    </div>
                                </td>

                            </tr>
                        <?php
                        }

                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
include 'layout.php';
