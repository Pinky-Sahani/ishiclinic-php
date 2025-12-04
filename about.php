<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ishi Clinic Center</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- google fonts links -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body class="font-['Roboto']">

    <!-- Navbar starts here -->
     <?php include('includes/header.inc.php'); ?>
    <!-- navbar ends here -->


    <!-- about section starts here -->
    <section class="py-28">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">

            <!-- Left Image -->
            <div>
                <img src="assest/images/about.jpg" alt="Clinic Image" class="rounded-2xl shadow-lg w-full h-[350px]">
            </div>

            <!-- Right Content -->
            <div>
                <h2 class="text-4xl font-bold text-[#7b61ff] mb-4 text-center">
                    About Ishi Clinic Center
                </h2>

                <p class="text-gray-600 leading-relaxed mb-8 text-center">
                    Dedicated to providing safe, natural, and effective treatments integrating
                    homeopathy, naturopathy, and lifestyle corrections.
                </p>

                <!-- Cards Section -->
                <div class="grid md:grid-cols-2 gap-6">

                    <!-- Mission Card -->
                    <div class="bg-[#f3f4ff] p-6 rounded-xl shadow-sm">
                        <h3 class="text-xl font-semibold text-[#7b61ff] mb-2 text-center">
                            Our Mission
                        </h3>
                        <p class="text-gray-700 text-center">
                            Root-cause healing with scientific natural therapies.
                        </p>
                    </div>

                    <!-- Vision Card -->
                    <div class="bg-[#f3f4ff] p-6 rounded-xl shadow-sm">
                        <h3 class="text-xl font-semibold text-[#7b61ff] mb-2 text-center">
                            Our Vision
                        </h3>
                        <p class="text-gray-700 text-center">
                            Long-term wellness without side effects.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- about section ends here -->

    <!-- footer section starts here  -->
    <?php include('includes/footer.inc.php'); ?>
    <!-- footer section ends here  -->


    <script>
        // toggle mobile menu script starts here
        const btn = document.getElementById("menuBtn");
        const menu = document.getElementById("mobileMenu");

        btn.addEventListener("click", function () {
            menu.classList.toggle("hidden");
        });

        // toggle mobile menu script ends here


        // carousel script starts here
        const slides = document.querySelectorAll(".carousel-slide");
        const dots = document.querySelectorAll(".carousel-dot");

        let index = 0;

        function showSlide(i) {
            slides.forEach((slide, n) => {
                slide.style.opacity = (n === i) ? "1" : "0";
            });

            dots.forEach((dot, n) => {
                dot.classList.toggle("bg-white/70", n === i);
                dot.classList.toggle("bg-white/40", n !== i);
            });
        }

        document.getElementById("nextSlide").addEventListener("click", () => {
            index = (index + 1) % slides.length;
            showSlide(index);
        });

        document.getElementById("prevSlide").addEventListener("click", () => {
            index = (index - 1 + slides.length) % slides.length;
            showSlide(index);
        });

        // Auto slide
        setInterval(() => {
            index = (index + 1) % slides.length;
            showSlide(index);
        }, 5000);

        showSlide(index);
        // carousel script ends here
    </script>

</body>

</html>