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
    <nav class="w-full bg-violet-500 shadow">
        <div class="h-16 flex justify-between items-center px-4 md:px-10">

            <!-- Logo -->
            <div class="text-2xl text-white font-bold">Ishi Clinic</div>

            <!-- Desktop Menu -->
            <ul class="hidden md:flex text-white space-x-10 font-semibold">
                <li><a href="#" class="hover:text-gray-200">About</a></li>
                <li><a href="#" class="hover:text-gray-200">Therapies</a></li>
                <li><a href="#" class="hover:text-gray-200">Why Us</a></li>
                <li><a href="#" class="hover:text-gray-200">Team</a></li>
                <li><a href="#" class="hover:text-gray-200">Contact</a></li>
            </ul>

            <!-- Desktop Button -->
            <div class="hidden md:block">
                <a href="#" class="px-6 py-2 rounded-full bg-purple-400 text-white font-semibold hover:text-gray-200">
                    Book Appointment
                </a>
            </div>
            <!-- Mobile Hamburger -->
            <button id="menuBtn" class="md:hidden text-white text-4xl">&#8801;</button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden bg-purple-300 text-white font-semibold space-y-4 py-4 px-6">
            <a href="#" class="block hover:text-gray-200">About</a>
            <a href="#" class="block hover:text-gray-200">Therapies</a>
            <a href="#" class="block hover:text-gray-200">Why Us</a>
            <a href="#" class="block hover:text-gray-200">Team</a>
            <a href="#" class="block hover:text-gray-200">Contact</a>
            <a href="#" class="block mt-4 px-4 py-2 bg-purple-400 rounded-full text-center hover:bg-purple-500">
                Book Appointment
            </a>
        </div>
    </nav>
    <!-- navbar ends here -->

    <!-- Hero section starts here or slider section-->
    <section class="relative w-full h-[600px] overflow-hidden" id="heroCarousel">

        <!-- SLIDE 1 -->
        <div class="carousel-slide absolute inset-0 transition-all duration-700 ease-in-out"
            style="background-image: url('assest/images/hero.jpg'); background-size: cover; background-position: center;">

            <div class="absolute inset-0 bg-black/40"></div>

            <div class="relative container px-6 md:px-12 lg:px-20 text-white 
             flex items-center justify-center h-full text-center">

                <div class="w-full max-w-3xl">

                    <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold leading-tight">
                        Advance Homoeo & <br> Naturopathic Healing
                    </h1>

                    <p class="mt-4 text-lg sm:text-xl font-medium">
                        संपूर्ण और सुरक्षित उपचार — जटिल एवं असाध्य रोगों का सफल समाधान
                    </p>

                    <p class="mt-2 text-lg sm:text-xl">
                        Personalized natural therapies for long-term wellness.
                    </p>

                    <!-- Buttons -->
                    <div class=" flex justify-center gap-4 mt-6 flex-wrap">
                        <a href="#"
                            class="bg-purple-400 text-white md:px-6 px-14 py-3 rounded-full font-semibold shadow-lg whitespace-nowrap">
                            Book Appointment
                        </a>

                        <a href="#"
                            class="bg-purple-400 hover:bg-gray-500 md:px-12 px-20 py-3 rounded-full font-semibold shadow-lg whitespace-nowrap">
                            Learn More
                        </a>
                    </div>

                </div>
            </div>
        </div>


        <!-- SLIDE 2 -->
        <div class="carousel-slide absolute inset-0 opacity-0 transition-all duration-700 ease-in-out"
            style="background-image: url('assest/images/hero2.jpg'); background-size: cover; background-position: center;">

            <div class="absolute inset-0 bg-black/40"></div>

            <div class="relative container px-6 md:px-12 lg:px-20 text-white 
             flex items-center justify-center h-full text-center">

                <div class="w-full max-w-3xl">

                    <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold leading-tight">
                        Advance Homoeo & <br> Naturopathic Healing
                    </h1>

                    <p class="mt-4 text-lg sm:text-xl font-medium">
                        संपूर्ण और सुरक्षित उपचार — जटिल एवं असाध्य रोगों का सफल समाधान
                    </p>

                    <p class="mt-2 text-lg sm:text-xl">
                        Personalized natural therapies for long-term wellness.
                    </p>

                    <!-- Buttons -->
                    <div class="flex justify-center gap-4 mt-6 flex-wrap">
                        <a href="#"
                            class="bg-purple-400 text-white md:px-6 px-14 py-3 rounded-full font-semibold shadow-lg whitespace-nowrap">
                            Book Appointment
                        </a>

                        <a href="#"
                            class="bg-purple-400 hover:bg-gray-500 md:px-12  px-20 py-3 rounded-full font-semibold shadow-lg whitespace-nowrap">
                            Learn More
                        </a>
                    </div>

                </div>
            </div>
        </div>


        <!-- SLIDE 3 -->
        <div class="carousel-slide absolute inset-0 opacity-0 transition-all duration-700 ease-in-out"
            style="background-image: url('assest/images/hero3.png'); background-size: cover; background-position: center;">

            <div class="absolute inset-0 bg-black/40"></div>

            <div class="relative container px-6 md:px-12 lg:px-20 text-white 
             flex items-center justify-center h-full text-center">

                <div class="w-full max-w-3xl">


                    <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold leading-tight">
                        Advance Homoeo & <br> Naturopathic Healing
                    </h1>

                    <p class="mt-4 text-lg sm:text-xl font-medium">
                        संपूर्ण और सुरक्षित उपचार — जटिल एवं असाध्य रोगों का सफल समाधान
                    </p>

                    <p class="mt-2 text-lg sm:text-xl">
                        Personalized natural therapies for long-term wellness.
                    </p>

                    <!-- Buttons -->
                    <div class="flex justify-center gap-4 mt-6 flex-wrap">
                        <a href="#"
                            class="bg-purple-400 text-white md:px-6 px-14 py-3 rounded-full font-semibold shadow-lg whitespace-nowrap">
                            Book Appointment
                        </a>

                        <a href="#"
                            class="bg-purple-400 hover:bg-gray-500 md:px-12 px-20 py-3 rounded-full font-semibold shadow-lg whitespace-nowrap">
                            Learn More
                        </a>
                    </div>

                </div>
            </div>
        </div>


        <!-- LEFT ARROW -->
        <button id="prevSlide" class="absolute left-4 md:left-10 top-1/2 -translate-y-1/2 text-white text-4xl z-10">
            &#10094;
        </button>

        <!-- RIGHT ARROW -->
        <button id="nextSlide" class="absolute right-4 md:right-10 top-1/2 -translate-y-1/2 text-white text-4xl z-10">
            &#10095;
        </button>


        <!-- DOTS -->
        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex space-x-3 z-10">
            <span class="carousel-dot w-10 h-1 bg-white/70 rounded-full"></span>
            <span class="carousel-dot w-10 h-1 bg-white/40 rounded-full"></span>
            <span class="carousel-dot w-10 h-1 bg-white/40 rounded-full"></span>
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
    <section class=" bg-white">
        <div class="container mx-auto px-6">

            <!-- Section Title -->
            <h2 class="text-4xl  font-semibold text-center mb-10  text-[#7b61ff]">
                Our Therapies
            </h2>

            <!-- Cards Wrapper -->
            <div class="grid md:grid-cols-3 gap-8">

                <!-- Card 1 -->
                <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition p-6">
                    <img src="assest/images/therapy-joint.jpg" alt="Joint Pain"
                        class="rounded-xl mb-6 w-full h-56 object-cover">

                    <div class="text-center">
                        <div class="text-teal-600 text-3xl mb-2">💚</div>
                        <h3 class="text-xl font-semibold mb-2 text-[#7b61ff]">Joint Pain & Arthritis</h3>
                        <p class="text-gray-600">
                            Holistic treatment for arthritis, stiffness and chronic joint disorders.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition p-6">
                    <img src="assest/images/therapy-skin.jpg" alt="Skin Diseases"
                        class="rounded-xl mb-6 w-full h-56 object-cover">

                    <div class="text-center">
                        <div class="text-teal-600 text-3xl mb-2">✨</div>
                        <h3 class="text-xl font-semibold mb-2 text-[#7b61ff]">Skin Diseases</h3>
                        <p class="text-gray-600">
                            Safe, natural healing for eczema, psoriasis, acne & allergies.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition p-6">
                    <img src="assest/images/therapy-women.jpg" alt="Women's Health"
                        class="rounded-xl mb-6 w-full h-56 object-cover">

                    <div class="text-center">
                        <div class="text-teal-600 text-3xl mb-2">👩‍⚕️</div>
                        <h3 class="text-xl font-semibold mb-2 text-[#7b61ff]">Women’s Health</h3>
                        <p class="text-gray-600">
                            Expert care for PCOD, thyroid, hormonal imbalance & gynecology issues.
                        </p>
                    </div>
                </div>
                <!-- card 4 -->
                <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition p-6">
                    <img src="assest/images/therapy-child.jpg" alt="Women's Health"
                        class="rounded-xl mb-6 w-full h-56 object-cover">

                    <div class="text-center">
                        <div class="text-teal-600 text-3xl mb-2">👩‍⚕️</div>
                        <h3 class="text-xl font-semibold mb-2 text-[#7b61ff]">Pediatric Care</h3>
                        <p class="text-gray-600">
                            Gentle, effective natural care for kids with allergies & immunity issues.
                        </p>
                    </div>

                </div>
                <!-- card 5  -->
                <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition p-6">
                    <img src="assest/images/therapy-stress.jpg" alt="Women's Health"
                        class="rounded-xl mb-6 w-full h-56 object-cover">

                    <div class="text-center">
                        <div class="text-teal-600 text-3xl mb-2">👩‍⚕️</div>
                        <h3 class="text-xl font-semibold mb-2 text-[#7b61ff]">Lifestyle & Stress</h3>
                        <p class="text-gray-600">
                            Mind-body healing for stress, anxiety and sleep issues.
                        </p>
                    </div>
                </div>
                <!-- card 6  -->
                <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition p-6">
                    <img src="assest/images/therapy-online.jpg" alt="Women's Health"
                        class="rounded-xl mb-6 w-full h-56 object-cover">

                    <div class="text-center">
                        <div class="text-teal-600 text-3xl mb-2">👩‍⚕️</div>
                        <h3 class="text-xl font-semibold mb-2 text-[#7b61ff]">Online Consultation</h3>
                        <p class="text-gray-600">
                            Expert online guidance with digital prescriptions & follow-ups.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- our therapy section ends here -->


    <!-- Why Choose Us section starts here  -->
    <section class="py-16 bg-gray-50">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-semibold  text-[#7b61ff]">
                Why Choose Us
            </h2>
        </div>

        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Card 1 -->
            <div class="bg-white shadow-sm rounded-xl p-8 text-center border border-gray-100">
                <div class="flex justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-teal-500" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z" />
                        <path d="M2 20c1.5-4 6-6 10-6s8.5 2 10 6" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold  mb-2  text-[#7b61ff]">Experienced Team</h3>
                <p class="text-gray-600">
                    Certified homeopathy & naturopathy doctors with years of clinical experience.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white shadow-sm rounded-xl p-8 text-center border border-gray-100">
                <div class="flex justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-teal-500" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2">
                        <path
                            d="M12 21s-6-4.35-9-7.87C1 10.5 3 6 7.5 6 9.9 6 12 8.25 12 8.25S14.1 6 16.5 6C21 6 23 10.5 21 13.13C18 16.65 12 21 12 21z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold  text-[#7b61ff] mb-2">Personalized Care</h3>
                <p class="text-gray-600">
                    Custom treatment designed after a complete root-cause analysis.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white shadow-sm rounded-xl p-8 text-center border border-gray-100">
                <div class="flex justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-teal-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path d="M12 20c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8z" />
                        <path d="M12 12l2.5-4M12 12l-2.5 4" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold  text-[#7b61ff] mb-2">Safe & Natural</h3>
                <p class="text-gray-600">
                    100% natural, gentle & effective therapies without side effects.
                </p>
            </div>

        </div>
    </section>
    <!-- Why Choose Us section ends here  -->

    <!-- our team section starts here  -->
    <section class="py-16 bg-white">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-semibold  text-[#7b61ff]">Our Team</h2>
        </div>

        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-12 text-center">

            <!-- Member 1 -->
            <div>
                <img src="assest/images/team1.jpg" alt="Doctor 1"
                    class="w-48 h-48 mx-auto rounded-full shadow-md object-cover">
                <h3 class="mt-6 text-lg font-medium text-gray-800">Dr. Manoj Kumar</h3>
            </div>

            <!-- Member 2 -->
            <div>
                <img src="assest/images/team3.jpg" alt="Doctor 2"
                    class="w-48 h-48 mx-auto rounded-full shadow-md object-cover">
                <h3 class="mt-6 text-lg font-medium text-gray-800">Dr. Pragya Shrivastav</h3>
            </div>

            <!-- Member 3 -->
            <div>
                <img src="assest/images/team2.jpg" alt="Doctor 3"
                    class="w-48 h-48 mx-auto rounded-full shadow-md object-cover">
                <h3 class="mt-6 text-lg font-medium text-gray-800">Dr. Rahul Shukla</h3>
            </div>

        </div>
    </section>
    <!-- our team section ends here  -->

    <!-- Our Features section starts here  -->
    <section class="py-12 bg-white">
        <h2 class="text-center text-4xl font-semibold mb-10  text-[#7b61ff]">Our Features</h2>

        <div class="container mx-auto px-6 grid md:grid-cols-3 gap-10">

            <!-- Card 1 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <img src="assest/images/feature1.png" class="w-full h-56 object-cover" alt="">
                <div class="text-center py-5">
                    <h3 class="text-xl font-semibold  text-[#7b61ff]">Advanced Treatment</h3>
                    <p class="text-gray-600 mt-1">
                        Modern diagnostics & personalized protocols.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <img src="assest/images/hero.jpg" class="w-full h-56 object-cover" alt="">
                <div class="text-center py-5">
                    <h3 class="text-xl font-semibold  text-[#7b61ff]">Certified Doctors</h3>
                    <p class="text-gray-600 mt-1">
                        Experienced and qualified homeopathy & naturopathy doctors.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <img src="assest/images/feature3.jpg" class="w-full h-56 object-cover" alt="">
                <div class="text-center py-5">
                    <h3 class="text-xl font-semibold  text-[#7b61ff]">Natural Healing</h3>
                    <p class="text-gray-600 mt-1">
                        Natural therapies focused on safety and results.
                    </p>
                </div>
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

                    <p class="flex items-center gap-2">
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
                    <a href="#" class="hover:text-gray-300"></a>
                    <a href="#" class="hover:text-gray-300"></a>
                    <a href="#" class="hover:text-gray-300"></a>
                </div>
            </div>

        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-white/20 mt-10 pt-4 text-center text-sm">
            © 2025 Ishi Advance Homoeo & Naturopathic Center • Website Designed & Developed by
            <span class="font-semibold">UMID Infotech</span>
        </div>

    </footer>

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