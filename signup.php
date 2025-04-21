<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db.php';

    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        header("Location: login.php");
        exit;
    } else {
        $error = "Signup failed. Try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up - SkillUp</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <style>
    #particles-js {
      position: fixed;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      z-index: 0;
      background-color: #0f172a;
    }
    .form-wrapper {
      position: relative;
      z-index: 1;
    }
  </style>
</head>
<body class="bg-gray-900 min-h-screen flex items-center justify-center">

  <div id="particles-js"></div>

  <div class="form-wrapper w-full max-w-5xl flex flex-col md:flex-row bg-gray-800 rounded-xl shadow-2xl overflow-hidden border border-gray-700">
    
    <!-- Left Panel -->
    <div class="md:w-1/2 bg-gray-900 p-10 flex flex-col justify-center items-center text-center">
      <h2 class="text-3xl font-bold text-green-400 mb-4">Welcome to Live School!</h2>
      <ul class="text-left text-purple-300 space-y-3 text-lg">
        <li>📘 Access study materials</li>
        <li>📈 Track your learning</li>
        <li>🧠 Practice and test your skills</li>
      </ul>
      <img src="https://cdn-icons-png.flaticon.com/512/3145/3145765.png" alt="Study Icon" class="w-32 mt-8 drop-shadow-xl" />
    </div>

    <!-- Right Form Panel -->
    <form method="POST" class="md:w-1/2 bg-gray-800 p-10 space-y-5">
      <h2 class="text-2xl font-bold text-center text-blue-400">Create Account</h2>
      <?php if (!empty($error)) echo "<p class='text-red-400'>$error</p>"; ?>

      <input type="text" name="username" placeholder="Username" required
             class="w-full p-3 border border-gray-700 rounded bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500">
      <input type="email" name="email" placeholder="Email" required
             class="w-full p-3 border border-gray-700 rounded bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500">
      <input type="password" name="password" placeholder="Password" required
             class="w-full p-3 border border-gray-700 rounded bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500">
      
      <button type="submit"
              class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold p-3 rounded-lg transition duration-200">
        Sign Up
      </button>

      <p class="text-center text-sm text-gray-400">
        Already have an account? 
        <a href="login.php" class="text-blue-400 hover:underline">Login</a>
      </p>
    </form>

  </div>

  <!-- particles.js setup -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      particlesJS('particles-js', {
        "particles": {
          "number": { "value": 80, "density": { "enable": true, "value_area": 800 } },
          "color": { "value": "#60a5fa" },
          "shape": { "type": "circle" },
          "opacity": { "value": 0.5 },
          "size": { "value": 3, "random": true },
          "line_linked": { "enable": true, "distance": 150, "color": "#60a5fa", "opacity": 0.4, "width": 1 },
          "move": { "enable": true, "speed": 2, "out_mode": "out" }
        },
        "interactivity": {
          "detect_on": "canvas",
          "events": {
            "onhover": { "enable": true, "mode": "grab" },
            "onclick": { "enable": true, "mode": "push" },
            "resize": true
          },
          "modes": {
            "grab": { "distance": 140, "line_linked": { "opacity": 1 } },
            "bubble": { "distance": 400, "size": 40, "duration": 2, "opacity": 8, "speed": 3 },
            "repulse": { "distance": 200, "duration": 0.4 },
            "push": { "particles_nb": 4 },
            "remove": { "particles_nb": 2 }
          }
        },
        "retina_detect": true
      });
    });
  </script>
</body>
</html>
