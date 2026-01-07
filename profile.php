<?php
$title = "Profile Settings"; // Changed title to be more relevant to a profile card
$secondBreadcrumb = "Profile";
ob_start();
?>
<style>

</style>
<div class="container">
    <div class="card p-4">
        <div class="card-header">
            <h4 class="text-center" style="color: var(--primary-color);">Profile Information</h4>
        </div>
        <div class="card-body">
            <div class="text-center">
                <div class="avatar-container">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTr3jhpAFYpzxx39DRuXIYxNPXc0zI5F6IiMQ&s" class="profile-img" alt="Profile">
                    <div class="edit-avatar" title="Change Avatar">
                        <i class="bi bi-camera"></i>
                        <input type="file" accept="image/*">
                    </div>
                </div>
            </div>

            <hr class="mb-4 mt-1">

            <form>
                <div class="row g-4">
                    <div class="col-md-6">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" placeholder="Leslie" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" placeholder="Cooper" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="example@gmail.com" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Phone</label>
                        <input type="tel" class="form-control" placeholder="+0123-456-789">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Gender</label>
                        <select class="form-select">
                            <option selected disabled>Select Gender</option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" class="form-control">
                    </div>
                </div>

                <div class="text-end mt-5">
                    <button type="submit" class="btn btn-primary primary-background-color">
                        Save Profile
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
include 'layout.php';
