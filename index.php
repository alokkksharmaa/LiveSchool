<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LiveSchool - Learn & Get Certified</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link src="stylesheet" href="./output.css">
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script> 
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
  <script>
    AOS.init();
  </script>
</head>

<body class="bg-gray-50">
<?php session_start(); ?>

<header class="bg-white shadow-md px-6 py-4 flex items-center justify-between sticky top-0 z-50">

  <!-- Logo and Site Name -->
  <div class="flex items-center space-x-3">
    <img src="https://play-lh.googleusercontent.com/s8agyc1RPNmvBBxnSwBcSoVLh6mbfzRP5wHPhgwvDp96czUbRr8k7BpRUFxhUu1mPLB9=w600-h300-pc0xffffff-pd" alt="LiveSchool Logo" class="h-20 w-20 object-contain"> <!-- Replace with your logo path -->
    <h1 class="text-2xl font-extrabold text-blue-600">LiveSchool</h1>
  </div>

  <!-- Navigation Links -->
  <nav class="hidden md:flex space-x-6 ml-10">
    <a href="index.php" class="text-gray-600 hover:text-blue-600 font-medium">Home</a>
    <a href="courses.html" class="text-gray-600 hover:text-blue-600 font-medium">Courses</a>
    <a href="contact.html" class="text-gray-600 hover:text-blue-600 font-medium">Contact</a>
  </nav>

  <!-- Centered Search Bar -->
  <div class="flex-grow px-6 max-w-xl">
  <div class="border border-blue-300 rounded-full px-4 py-1">
    <input 
      type="text" 
      id="searchInput" 
      placeholder="Search courses..." 
      class="w-full px-2 py-1 bg-transparent focus:outline-none focus:ring-0" 
    />
  </div>
</div>


  <!-- Auth Buttons -->
  <div class="flex items-center space-x-4">
    <?php if (isset($_SESSION['username'])): ?>
      <span class="text-blue-600 font-semibold hidden sm:inline">Hi, <?= $_SESSION['username'] ?></span>
      <a href="logout.php" class="text-red-600 hover:underline">Logout</a>
    <?php else: ?>
      <a href="login.php" class="text-blue-600 hover:underline">Login</a>
      <a href="signup.php" class="bg-blue-600 text-white px-5 py-2 rounded-full hover:bg-blue-700 transition">Sign Up</a>
    <?php endif; ?>
  </div>

</header>



<section class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white py-28 px-6 text-center">
  <h2 class="text-5xl font-extrabold mb-4">Upgrade Your Skills & Get Certified</h2>
  <p class="text-xl mb-6">Join thousands of learners worldwide. Access high-quality courses and earn valuable certifications.</p>
  <a href="#courses" class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-200 transition">Explore Courses</a>
</section>

<section id="courses" class="py-16 px-6 max-w-7xl mx-auto">
  <h3 class="text-3xl font-bold text-center mb-10">Popular Courses</h3>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

    <div class="course-card flex rounded-lg shadow-xl transform transition hover:scale-105 hover:shadow-2xl" data-title="web development" data-aos="fade-up">
      <div class="p-2 w-full">
        <h4 class="text-xl font-semibold mb-2">Web Development</h4>
        <p class="mb-4">Learn to build websites using HTML, CSS, JavaScript, and React.</p>
        <a href="enroled.html" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Enroll</a>
      </div>
      <div class="bg-blue-200 w-full"><img class="w-full h-full" src="src/1.png" alt="Web Development"></div>
    </div>

    <div class="course-card flex rounded-lg shadow-xl transform transition hover:scale-105 hover:shadow-2xl" data-title="data science" data-aos="fade-up">
      <div class="p-2 w-full">
        <h4 class="text-xl font-semibold mb-2">Data Science</h4>
        <p class="mb-4">The process of extracting meaningful knowledge from data using scientific methods.</p>
        <a href="enroled.html" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Enroll</a>
      </div>
      <div class="bg-blue-200 w-full object-cover"><img class="w-full h-70" src="src/2 (2).png" alt="Data Science"></div>
    </div>

    <div class="course-card flex rounded-lg shadow-xl transform transition hover:scale-105 hover:shadow-2xl" data-title="ui ux" data-aos="fade-up">
      <div class="p-2 w-full">
        <h4 class="text-xl font-semibold mb-2">UI/UX</h4>
        <p class="mb-4">Learn how to design stunning interfaces with Figma and Adobe XD.</p>
        <a href="enroled.html" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Enroll</a>
      </div>
      <div class="bg-blue-200 w-full object-cover"><img class="w-full h-full" src="src/3.jpg" alt="UI/UX"></div>
    </div>

    <div class="course-card flex rounded-lg shadow-xl transform transition hover:scale-105 hover:shadow-2xl" data-title="digital marketing" data-aos="fade-up">
      <div class="p-2 w-full">
        <h4 class="text-xl font-semibold mb-2">Digital Marketing</h4>
        <p class="mb-4">Become an expert in SEO, social media marketing, and Google Ads.</p>
        <a href="enroled.html" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Enroll</a>
      </div>
      <div class="bg-blue-200 w-full object-cover"><img class="w-full h-full" src="src/4.jpg" alt="Digital Marketing"></div>
    </div>

    <div class="course-card flex rounded-lg shadow-xl transform transition hover:scale-105 hover:shadow-2xl" data-title="photography" data-aos="fade-up">
      <div class="p-2 w-full">
        <h4 class="text-xl font-semibold mb-2">Photography</h4>
        <p class="mb-4">Learn the art of photography, editing, and camera techniques.</p>
        <a href="enroled.html" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Enroll</a>
      </div>
      <div class="bg-blue-200 w-full object-cover"><img class="w-full h-full" src="src/5.jpg" alt="Photography"></div>
    </div>

    <div class="course-card flex rounded-lg shadow-xl transform transition hover:scale-105 hover:shadow-2xl" data-title="mobile app development" data-aos="fade-up">
      <div class="p-2 w-full">
        <h4 class="text-xl font-semibold mb-2">Mobile App Development</h4>
        <p class="mb-4">Learn to build mobile apps using Swift, Java, and Flutter.</p>
        <a href="enroled.html" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Enroll</a>
      </div>
      <div class="bg-blue-200 w-full object-cover"><img class="w-full h-full" src="src/6.webp" alt="Mobile App Development"></div>
    </div>

  </div>
</section>

<!-- Certifications Section -->
<section id="certifications" class="bg-blue-600 text-white py-16 px-6">
  <h3 class="text-3xl font-bold text-center mb-10">Get Certified & Advance Your Career</h3>
  <div class="max-w-4xl mx-auto text-center">
    <p class="text-xl mb-6">Our certification programs are designed to help you stand out. After completing a course, take an online exam and receive your certification.</p>
    <a href="Explore Certifications.html" class="bg-white text-blue-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-200 transition">Explore Certifications</a>
  </div>
</section>

<!-- Footer -->
<footer class="bg-white text-center py-6 mt-16 border-t">
  <p class="text-gray-600">&copy; 2025 LiveSchool. All rights reserved.</p>
</footer>

<!-- 🔍 Search Filtering Script -->
<script>
  const searchInput = document.getElementById('searchInput');
  const courseCards = document.querySelectorAll('.course-card');

  searchInput.addEventListener('input', function () {
    const searchValue = this.value.toLowerCase();

    courseCards.forEach(card => {
      const title = card.getAttribute('data-title');
      if (title.includes(searchValue)) {
        card.style.display = 'flex';
      } else {
        card.style.display = 'none';
      }
    });
  });
</script>

</body>
</html>
