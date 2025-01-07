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
?>



<div class="container">
    <div class="bg-white rounded shadow p-2 mt-4" style="min-height:80vh">
        <div class="d-flex justify-content-between border-bottom">
            <h5>Resumes</h5>
            <div>
                <a href="" class="text-decoration-none"><i class="bi bi-file-earmark-plus"></i> Add New</a>
            </div>
        </div>

        <div class="text-center py-3 border rounded mt-3" style="background-color: rgba(236, 236, 236, 0.56);">
            <i class="bi bi-file-text"></i> No Resumes Available
        </div>

        <div class="d-flex flex-wrap">
            <div class="col-12 col-md-6 p-2">
                <div class="p-2 border rounded">
                    <h5>Web Developer Consultant</h5>
                    <p class="small text-secondary m-0" style="font-size:12px"><i class="bi bi-clock-history"></i>
                        Last Updated 23 September, 2023 08:09 AM
                    </p>
                    <div class="d-flex gap-2 mt-1">
                        <a href="" class="text-decoration-none small"><i class="bi bi-file-text"></i> Open</a>
                        <a href="" class="text-decoration-none small"><i class="bi bi-pencil-square"></i> Edit</a>
                        <a href="" class="text-decoration-none small"><i class="bi bi-trash2"></i> Delete</a>
                        <a href="" class="text-decoration-none small"><i class="bi bi-share"></i> Share</a>
                        <a href="" class="text-decoration-none small"><i class="bi bi-copy"></i> Clone</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 p-2">
                <div class="p-2 border rounded">
                    <h5>Web Developer Consultant</h5>
                    <p class="small text-secondary m-0" style="font-size:12px"><i class="bi bi-clock-history"></i>
                        Last Updated 23 September, 2023 08:09 AM
                    </p>
                    <div class="d-flex gap-2 mt-1">
                        <a href="" class="text-decoration-none small"><i class="bi bi-file-text"></i> Open</a>
                        <a href="" class="text-decoration-none small"><i class="bi bi-pencil-square"></i> Edit</a>
                        <a href="" class="text-decoration-none small"><i class="bi bi-trash2"></i> Delete</a>
                        <a href="" class="text-decoration-none small"><i class="bi bi-share"></i> Share</a>
                        <a href="" class="text-decoration-none small"><i class="bi bi-copy"></i> Clone</a>
                    </div>
                </div>
            </div>
        </div>
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
require './assets/includes/footer.php'; // Ensure the path to footer.php is correct
?>