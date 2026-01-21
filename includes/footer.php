<footer class="bg-gray-800 text-white py-12">

    <div class="container mx-auto px-6 grid md:grid-cols-4 gap-10">

        <!-- Column 1 -->
        <div>
            <h2 class="text-2xl font-semibold mb-3">Ishi Clinic</h2>
            <p class="font-semibold">Advance Homoeo & Naturopathic Center</p>
            <p class="mt-2">
                जटिल एवं असाध्य रोगों का सफल उपचार
            </p>

            <p class="mt-4 text-sm leading-relaxed">
                Providing holistic, natural, and root-cause-focused healthcare for every patient.
            </p>
        </div>

        <!-- Column 2 -->
        <div>
            <h2 class="text-xl font-semibold mb-3">Quick Links</h2>
            <ul class="space-y-2">
                <li><a href="#" class="hover:text-gray-300">About Us</a></li>
                <li><a href="#" class="hover:text-gray-300">Therapies</a></li>
                <li><a href="#" class="hover:text-gray-300">Doctors</a></li>
                <li><a href="#" class="hover:text-gray-300">Contact</a></li>
            </ul>
        </div>

        <!-- Column 3 -->
        <div>
            <h2 class="text-xl font-semibold mb-3">Contact</h2>

            <div class="space-y-3">
                <p class="flex items-center gap-2">
                    📞 +91 9876543210
                </p>
                <p class="flex items-center gap-2">
                    📞 +91 9123456780
                </p>

                <p class="flex items-center gap-2">
                    ✉️ info@ishiclinic.com
                </p>
                <p class="flex items-center gap-2">
                    ✉️ support@ishiclinic.com
                </p>

                <p  class="flex items-center gap-2">
                    🕒 Mon–Sat: 9:00 AM – 8:00 PM
                </p>
                <p class="flex items-center gap-2">
                    🛑 Sunday: Closed
                </p>
            </div>
        </div>

        <!-- Column 4 -->
        <div>
            <h2 class="text-xl font-semibold mb-3">Address</h2>

            <p class="flex items-center gap-2">
                📍 Ishi Advance Homoeo & Naturopathic Center
            </p>

            <p class="mt-2 leading-relaxed">
                IIT Road, Bank of Baroda Regional Office के सामने,<br>
                देवघाट, प्रयागराज
            </p>

            <!-- Social Icons -->
            <div class="flex space-x-4 mt-4 text-xl">
                <a href="#" class="hover:text-gray-300">📘</a> <!-- Facebook -->
                <a href="#" class="hover:text-gray-300">📸</a> <!-- Instagram -->
                <a href="#" class="hover:text-gray-300">▶️</a> <!-- YouTube -->
            </div>

        </div>

    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-white/20 mt-10 pt-4 text-center text-sm">
        © <span id="currentYear">2026</span> Ishi Advance Homoeo & Naturopathic Center • Website Designed & Developed by
        <span class="font-semibold">UMID Infotech</span>
    </div>
</footer>
<script>
    // Update year dynamically
    document.getElementById("currentYear").textContent = new Date().getFullYear();

    // toggle mobile menu script starts here
    const btn = document.getElementById("menuBtn");
    const menu = document.getElementById("mobileMenu");

    btn.addEventListener("click", function () {
        menu.classList.toggle("hidden");
    });

    // toggle mobile menu script ends here
</script>