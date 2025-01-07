<?php
$title = "My Resumes | Automated Resume Builder";
require './assets/includes/header.php'; // Ensure the path to header.php is correct
require './assets/includes/navbar.php'; 
// Check if there is a message in the session
$message = null;
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']); // Clear message after displaying it
}
$fn->authPage();
$user = $db->query("SELECT full_name, email_id FROM users WHERE email_id = '" . $db->real_escape_string($fn->Auth()['email_id']) . "'");

?>
    <div class="container">
        <div class="bg-white rounded shadow p-2 mt-4">
            <div class="d-flex justify-content-between border-bottom">
                <h5>Edit Profile</h5>
                <div>
                    <a class="text-decoration-none"><i class="bi bi-arrow-left-circle"></i> Back</a>
                </div>
            </div>
            <div>
                <form class="row g-3 p-3">
                    <div class="col-md-6">
                        <label class="form-label">Full Name</label>
                        <input type="text" placeholder="Dev Ninja" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" placeholder="dev@abc.com" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">New Password</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i> Update
                            Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <?php
require './assets/includes/footer.php'; // Ensure the path to footer.php is correct
?>