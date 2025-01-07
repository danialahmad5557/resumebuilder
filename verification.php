<?php
require './assets/includes/header.php'; // Include your header file
$title = "Verification | Automated Resume Builder";
require './assets/includes/header.php';

$fn->nonAuthPage();
?>
<style>
       .form-signin {
            max-width: 330px;
            padding: 1rem;
        }
</style>
<div class="d-flex align-items-center" style="height:100vh">
    <div class="w-100">
        <main class="form-signin w-100 m-auto bg-white shadow rounded">
            <form method="POST" action="actions\verifyotp.action.php">
                <div class="d-flex gap-2 justify-content-center">
                    <img class="mb-4" src="logo.png" alt="" height="70">

                    <div>
                        <h1 class="h3 fw-normal my-1"><b>Automated Resume</b> Builder</h1>
                        <p class="m-0">Verify your email</p>

                    </div>
                </div>


                <div class="mb-3">a 6 digit code sended to
                <span class="mb-3 fw-bold">
                <?php $fn->getSession('email')==""?$fn->redirect('forgot-password.php'):$fn->getSession('email')?></span>
                </div>
                <div class="form-floating mb-4">
                    <input type="number" require name="otp" class="form-control" id="floatingEmail" placeholder="name@example.com">
                    <label for="floatingInput"><i class="bi bi-patch-check"></i> Enter 6 Digit Code</label>
                </div>



                <button class="btn btn-primary w-100 py-2" type="submit"><i class="bi bi-envelope-check-fill"></i>
                    Verify Email

                </button>
                <div class="d-flex justify-content-between my-3">

                    <a href="register.php" class="text-decoration-none">Register</a>
                    <a href="login.php" class="text-decoration-none">Login</a>

                </div>

            </form>
        </main>

    </div>
    </div>
    <?php
require './assets/includes/footer.php'; // Include footer
?>