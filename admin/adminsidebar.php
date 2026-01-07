<!-- MOBILE OVERLAY -->
<div id="overlay"
     class="fixed inset-0 bg-black bg-opacity-50 hidden z-40 md:hidden"
     onclick="toggleSidebar()"></div>

<!-- SIDEBAR -->
<aside id="sidebar"
       class="fixed md:static inset-y-0 left-0 w-64 bg-slate-900 text-white
              transform -translate-x-full md:translate-x-0
              transition-transform duration-300 z-50">

    <nav class="p-4">
        <ul class="space-y-2">

        <button onclick="toggleSidebar()" class="md:hidden focus:outline-none">
                ☰
            </button>

            <li>
                <a href="#"
                   class="flex items-center gap-2 px-4 py-2 rounded bg-slate-700">
                    📊 <span>Dashboard</span>
                </a>
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

        </ul>
    </nav>
</aside>
