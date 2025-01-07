<?php

$title = "Automated Resume Builder";
require './assets/includes/header.php'; // Ensure the path to header.php is correct
$fn->nonAuthPage();

?>
<div class="d-flex align-items-center" style="height:100vh">
<div class="w-100">
    <main class="form-signin w-100 m-auto bg-white shadow rounded">
        <!-- Registration Form -->
        <form method="post" action="actions/register.action.php"> <!-- Ensure the path to register.action.php is correct -->
            <div class="d-flex gap-2 justify-content-center">
                <img class="mb-4" src="./assets/images/logo.png" alt="Logo" height="70"> <!-- Ensure the logo path is correct -->
                <div>
                    <h1 class="h3 fw-normal my-1"><b>Automated Resume</b> Builder</h1>
                    <p class="m-0">Create your new account</p>
                </div>
            </div>
            <!-- Full Name -->
            <div class="form-floating">
                <input type="text" class="form-control" name="full_name" id="floatingName" placeholder="John Doe" required>
                <label for="floatingName"><i class="bi bi-person"></i> Full Name</label>
            </div>
            <!-- Email -->
            <div class="form-floating">
                <input type="email" class="form-control" name="email_id" id="floatingEmail" placeholder="name@example.com" required>
                <label for="floatingEmail"><i class="bi bi-envelope"></i> Email address</label>
            </div>
            <!-- Password -->
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword"><i class="bi bi-key"></i> Password</label>
            </div>
            <!-- Submit Button -->
            <button class="btn btn-primary w-100 py-2" type="submit">
                <i class="bi bi-person-plus-fill"></i> Register
            </button>
            <!-- Links -->
            <div class="d-flex justify-content-between my-3">
                <a href="forgot-password.php" class="text-decoration-none">Forgot Password?</a>
                <a href="login.php" class="text-decoration-none">Login</a>
            </div>
        </form>
    </main>
</div>
</div>
<?php
require './assets/includes/footer.php'; // Ensure the path to footer.php is correct
?>