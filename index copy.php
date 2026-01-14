<?php
require_once('connect.php');
require_once('admin/controllers/fetch.php');
$sliders = fetchSliders($conn);
$therapies = fetchTherapies($conn);
$whyChooseList = fetchWhyChooseUs($conn);
$teams = fetchTeam($conn);
$features = fetchFeatures($conn);
?>
<!-- Navbar starts here -->
<?php include('includes/header.php'); ?>
<!-- navbar ends here -->

<!-- Hero section starts here or slider section-->
<section class="relative w-full h-[600px] overflow-hidden" id="heroCarousel">
    <?php foreach ($sliders as $key => $slide): ?>
        <div class="carousel-slide absolute inset-0 transition-all duration-700 ease-in-out 
        <?= $key == 0 ? '' : 'opacity-0' ?>" style="background-image: url('admin/uploads/sliders/<?= $slide['image']; ?>');
               background-size: cover; background-position: center;">

            <div class="absolute inset-0 bg-black/40"></div>

            <div class="relative container px-6 text-white 
            flex items-center justify-center h-full text-center">

                <div class="max-w-3xl">
                    <h1 class="text-3xl font-bold">
                        <?= $slide['title']; ?>
                    </h1>

                    <p class="mt-3 text-xl">
                        <?= $slide['subtitle']; ?>
                    </p>

                    <p class="mt-2">
                        <?= $slide['description_text']; ?>
                    </p>

                    <div class="flex justify-center gap-4 mt-6">
                        <a href="#" class="bg-purple-400 px-6 py-3 rounded-full">
                            Book Appointment
                        </a>
                        <a href="#" class="bg-purple-400 px-6 py-3 rounded-full">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Arrows -->
    <button id="prevSlide" class="absolute left-6 top-1/2 text-white text-4xl">&#10094;</button>
    <button id="nextSlide" class="absolute right-6 top-1/2 text-white text-4xl">&#10095;</button>

    <!-- Dots -->
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-3">
        <?php foreach ($sliders as $key => $slide): ?>
            <span class="carousel-dot w-10 h-1 rounded-full 
        <?= $key == 0 ? 'bg-white/70' : 'bg-white/40'; ?>">
            </span>
        <?php endforeach; ?>
    </div>

</section>

<!-- Hero section ends here -->

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


<!-- our therapy section starts here -->
<section class="bg-white">
    <div class="container mx-auto px-6">

        <!-- Section Title -->
        <h2 class="text-4xl font-semibold text-center mb-10 text-[#7b61ff]">
            Our Therapies
        </h2>

        <!-- Cards Wrapper -->
        <div class="grid md:grid-cols-3 gap-8">

            <?php if (!empty($therapies)): ?>
                <?php foreach ($therapies as $therapy): ?>

                    <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition p-6">

                        <img src="admin/uploads/therapies/<?= $therapy['image']; ?>" alt="<?= $therapy['title']; ?>"
                            class="rounded-xl mb-6 w-full h-56 object-cover">

                        <div class="text-center">
                            <div class="text-teal-600 text-3xl mb-2">💚</div>

                            <h3 class="text-xl font-semibold mb-2 text-[#7b61ff]">
                                <?= $therapy['title']; ?>
                            </h3>

                            <p class="text-gray-600">
                                <?= $therapy['description']; ?>
                            </p>
                        </div>
                    </div>

                <?php endforeach; ?>
            <?php else: ?>
                <p class="col-span-3 text-center text-gray-500">
                    No therapies found.
                </p>
            <?php endif; ?>

        </div>
    </div>
</section>
<!-- our therapy section ends here -->


<!-- Why Choose Us section starts here  -->
<section class="py-16 bg-gray-50">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-semibold text-[#7b61ff]">
            Why Choose Us
        </h2>
    </div>
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-6">

        <?php foreach ($whyChooseList as $item): ?>
            <?php if ($item['status'] == 1): ?>
                <div class="bg-white shadow rounded-xl p-8 text-center border border-gray-100">
                    <div class="flex justify-center">
                        <img src="admin/uploads/icon/<?= $item['icon']; ?>" alt="<?= $item['icon']; ?>"
                            class="rounded-xl mb-6 h-12 w-12 object-cover"/>
                    </div>

                    <!-- TITLE -->
                    <h3 class="text-xl font-semibold mb-2 text-[#7b61ff]">
                        <?= $item['title']; ?>
                    </h3>

                    <!-- DESCRIPTION -->
                    <p class="text-gray-600">
                        <?= $item['description']; ?>
                    </p>


                </div>

            <?php endif; ?>
        <?php endforeach; ?>

    </div>
</section>
<!-- Why Choose Us section ends here  -->

<!-- our team section starts here  -->
<section class="py-16 bg-white">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-semibold text-[#7b61ff]">Our Team</h2>
    </div>

    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-12 text-center">

        <?php if (!empty($teams)): ?>
            <?php foreach ($teams as $team): ?>
                <div>
                    <img src="admin/uploads/team/<?= $team['image']; ?>" alt="<?= $team['name']; ?>"
                        class="w-48 h-48 mx-auto rounded-full shadow-md object-cover">

                    <h3 class="mt-6 text-lg font-medium text-gray-800">
                        <?= $team['name']; ?>
                    </h3>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="col-span-3 text-center text-gray-500">
                No team members found
            </p>
        <?php endif; ?>

    </div>
</section>
<!-- our team section ends here  -->

<!-- Our Features section starts here  -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-6">

        <!-- Section Title -->
        <h2 class="text-center text-4xl font-semibold mb-10 text-[#7b61ff]">
            Our Features
        </h2>

        <!-- Cards Wrapper -->
        <div class="grid md:grid-cols-3 gap-10">

            <?php if (!empty($features)): ?>
                <?php foreach ($features as $feature): ?>

                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">

                        <!-- Image -->
                        <img src="admin/uploads/features/<?= $feature['image']; ?>" alt="<?= $feature['title']; ?>"
                            class="w-full h-56 object-cover">

                        <!-- Content -->
                        <div class="text-center py-5 px-4">
                            <h3 class="text-xl font-semibold text-[#7b61ff]">
                                <?= $feature['title']; ?>
                            </h3>

                            <p class="text-gray-600 mt-2">
                                <?= $feature['description']; ?>
                            </p>
                        </div>

                    </div>

                <?php endforeach; ?>
            <?php else: ?>
                <p class="col-span-3 text-center text-gray-500">
                    No features available.
                </p>
            <?php endif; ?>

        </div>

    </div>
</section>

<!-- Our Features section starts here  -->

<!-- contact us section starts here  -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-6 lg:px-20">
        <!-- Heading -->
        <h2 class="text-center text-4xl  font-semibold mb-10 text-[#7b61ff]">Contact Us</h2>

        <div class="grid md:grid-cols-2 gap-10">

            <!-- Left : Contact Form -->
            <div class="bg-white p-8 rounded-lg shadow">
                <h3 class="text-xl font-semibold mb-6">Send us a message</h3>

                <!-- Name -->
                <label class="block mb-2 font-medium">Name</label>
                <input type="text" placeholder="Your Name"
                    class="w-full px-4 py-3 mb-4 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">

                <!-- Email -->
                <label class="block mb-2 font-medium">Email</label>
                <input type="email" placeholder="Your Email"
                    class="w-full px-4 py-3 mb-4 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">

                <!-- Message -->
                <label class="block mb-2 font-medium">Message</label>
                <textarea rows="5" placeholder="Your Message"
                    class="w-full px-4 py-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>

                <!-- Button -->
                <button class="w-full mt-6 bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-md font-semibold">
                    Send Message
                </button>
            </div>

            <!-- Right : Contact Info -->
            <div class="bg-white p-8 rounded-lg shadow">
                <h3 class="text-xl font-semibold mb-6">Reach Us</h3>

                <!-- Phone -->
                <div class="mb-6">
                    <p class="font-semibold flex items-center gap-2">
                        <span class="text-green-600 text-xl">📞</span> Phone:
                    </p>
                    <p class="ml-8">+91 9876543210</p>
                    <p class="ml-8">+91 9123456780</p>
                </div>

                <!-- Email -->
                <div class="mb-6">
                    <p class="font-semibold flex items-center gap-2">
                        <span class="text-blue-600 text-xl">✉️</span> Email:
                    </p>
                    <p class="ml-8">info@ishiclinic.com</p>
                    <p class="ml-8">support@ishiclinic.com</p>
                </div>

                <!-- Address -->
                <div class="mb-6">
                    <p class="font-semibold flex items-center gap-2">
                        <span class="text-red-600 text-xl">📍</span> Address:
                    </p>
                    <p class="ml-8">
                        Ishi Advance Homoeo & Naturopathic Center<br>
                        IIT Road, Bank of Baroda Regional Office के सामने,<br>
                        देवघाट, प्रयागराज
                    </p>
                </div>

                <!-- Working Hours -->
                <div>
                    <p class="font-semibold flex items-center gap-2">
                        <span class="text-teal-600 text-xl">⏰</span> Working Hours:
                    </p>
                    <p class="ml-8">Mon – Sat: 9:00 AM – 8:00 PM</p>
                    <p class="ml-8">Sunday: Closed</p>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- contact us section ends here  -->



<!-- footer section starts here  -->
<?php include('includes/footer.php'); ?>
<!-- footer section ends here  -->


<script>
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