</div> <!-- END MAIN WRAPPER -->

<!-- FOOTER -->
<footer class="text-center text-sm text-gray-500 py-3 bg-gray-100">
    © 2026 Admin Dashboard. All rights reserved.
</footer>

<script>
function toggleSidebar() {
    document.getElementById('sidebar').classList.toggle('-translate-y-full');
    document.getElementById('overlay').classList.toggle('hidden');
}








// tailwind toast code  
    const toast = document.getElementById('toast');
    if (toast) {
        setTimeout(() => {
            toast.style.display = 'none';
        }, 3000);
    }



</script>


</body>
</html>
