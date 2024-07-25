<footer class="footer bg-dark text-white text-center py-4 mt-4">
    <div class="container">
        <p class="mb-0">© 2024 Universitas Teknologi Bandung. All rights reserved.</p>
        <p>
            <a href="#" class="text-white">Privacy Policy</a> |
            <a href="#" class="text-white">Terms of Service</a>
        </p>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var successMessage = "{{ session('success') }}";
        var errorMessage = "{{ session('error') }}";
        if (successMessage) {
            toastr.success(successMessage, 'BERHASIL!');
        }
        if (errorMessage) {
            toastr.error(errorMessage, 'GAGAL!');
        }
    });
</script>
