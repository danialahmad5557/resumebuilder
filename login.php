<?php
$title = "Login | Automated Resume Builder";
require './assets/includes/header.php'; // Include your header file

// Check if there is a message in the session
$message = null;
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']); // Clear message after displaying it
}
$fn->nonAuthPage();
?>
<div class="d-flex align-items-center" style="height:100vh">
<div class="w-100">
    <main class="form-signin w-100 m-auto bg-white shadow rounded">
        <form method="POST" action="/resumebuilder/actions/login.action.php">
            <div class="d-flex gap-2 justify-content-center">
                <img class="mb-4" src="logo.png" alt="" height="70">
                <div>
                    <h1 class="h3 fw-normal my-1"><b>Automated Resume </b> Builder</h1>
                    <p class="m-0">Login to your account</p>
                </div>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingEmail" name="email_id" placeholder="name@example.com" required>
                <label for="floatingEmail"><i class="bi bi-envelope"></i> Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                <label for="floatingPassword"><i class="bi bi-key"></i> Password</label>
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit">Login
                <i class="bi bi-box-arrow-in-right"></i>
            </button>
            <div class="d-flex justify-content-between my-3">
                <a href="forgot-password.php" class="text-decoration-none">Forgot Password?</a>
                <a href="register.php" class="text-decoration-none">Register</a ></div>
        </form>
    </main>
</div>
</div>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- Add SweetAlert2 script -->
<script>
    // Check if message is set and show the corresponding alert
    <?php if ($message): ?>
        Swal.fire({
            icon: '<?php echo $message['type']; ?>',
            title: '<?php echo $message['type'] === 'error' ? 'Oops...' : 'Success!'; ?>',
            text: '<?php echo $message['text']; ?>',
        });
    <?php endif; ?>
</script>

<?php
require './assets/includes/footer.php'; // Include footer
?>