<?php
$currentPage = basename($_SERVER['PHP_SELF']);
// echo $currentPage;
?>


<!-- MOBILE OVERLAY -->
<div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40 md:hidden" onclick="toggleSidebar()">
</div>
<!-- SIDEBAR -->
<aside id="sidebar" class="fixed md:static top-0 left-0 w-full md:w-64 h-auto 
              bg-slate-900 text-white
              transform -translate-y-full md:translate-y-0
              transition-transform duration-300 z-50">

    <nav class="p-4">
        <ul class="space-y-2">

            <button onclick="toggleSidebar()" class="md:hidden focus:outline-none">
                ☰
            </button>

            <li>

                <a href="../dashboard/admin_dashboard.php" class="flex items-center gap-2 px-4 py-2 rounded
                 <?php echo ($currentPage == 'admin_dashboard.php')
                     ? 'bg-slate-700'
                     : 'hover:bg-slate-700'; ?>">
                    📊 <span>Dashboard</span>
                </a>

                <!-- <a href="../dashboard/admin_dashboard.php"
                   class="flex items-center gap-2 px-4 py-2 rounded bg-slate-700">
                    📊 <span>Dashboard</span>
                </a> -->
            </li>

            <li>
                <a href="../sliders/manage_slider.php"
                    class="flex items-center gap-2 px-4 py-2 rounded hover:bg-slate-700">
                    📷 <span>Slider</span>
                </a>
            </li>

            <li>
                <a href="../ourtherapies/manage_therapy.php"
                    class="flex items-center gap-2 px-4 py-2 rounded hover:bg-slate-700">
                    💆 <span>Therapies</span>
                </a>
            </li>

            <li>
                <a href="../chooseUs/manage_chooseUs.php"
                    class="flex items-center gap-2 px-4 py-2 rounded hover:bg-slate-700">
                    💆 <span>Why Choose Us</span>
                </a>
            </li>

            <li>
                <a href="../ourteam/manage_ourteam.php"
                    class="flex items-center gap-2 px-4 py-2 rounded hover:bg-slate-700">
                    💆 <span>Our Team</span>
                </a>
            </li>
            <li>
                <a href="../ourfeatures/manage_ourfeatures.php"
                    class="flex items-center gap-2 px-4 py-2 rounded hover:bg-slate-700">
                    💆 <span>Our Features</span>
                </a>
            </li>
            <li>
                <a href="../contactUs/manage_contactUs.php"
                    class="flex items-center gap-2 px-4 py-2 rounded hover:bg-slate-700">
                    💆 <span>Contact Us</span>
                </a>
            </li>

        </ul>
    </nav>
</aside>