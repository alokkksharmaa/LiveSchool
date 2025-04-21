<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db.php';

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows === 1) {
        $stmt->bind_result($id, $username, $hashed_password);
        $stmt->fetch();
        
        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit;
        }
    }
    $error = "Invalid email or password.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login - Live School</title>
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
    .container {
      position: relative;
      z-index: 1;
    }
  </style>
</head>
<body class="bg-gray-900 h-screen flex items-center justify-center">
  <div id="particles-js"></div>

  <div class="container bg-gray-800 rounded-lg shadow-lg flex w-[900px] max-w-full overflow-hidden border border-gray-700">
    
    <!-- Left Study-Themed Panel -->
    <div class="w-1/2 bg-gray-900 p-8 text-white flex flex-col justify-center space-y-6">
      <h2 class="text-3xl font-bold text-green-400">Welcome Back  To Live School!</h2>
      <ul class="space-y-2 text-purple-300">
        <li>📚 Access personalized content</li>
        <li>🧠 Track your learning</li>
        <li>🚀 Build career-ready skills

        </li>
      </ul>
      <img src="https://cdn-icons-png.flaticon.com/512/3145/3145765.png" alt="Study Illustration" class="w-32 mt-6 mx-auto ml-4">

    </div>

    <!-- Right Login Form (Dark Mode) -->
    <form method="POST" class="w-1/2 bg-gray-800 p-10 space-y-5 flex flex-col justify-center text-white">
      <h2 class="text-2xl font-bold text-center text-blue-400">Log In</h2>
      <?php if (!empty($error)) echo "<p class='text-red-400 text-center'>$error</p>"; ?>
      <input type="email" name="email" placeholder="Email" required class="w-full p-3 border border-gray-700 rounded bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500">
      <input type="password" name="password" placeholder="Password" required class="w-full p-3 border border-gray-700 rounded bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500">
      <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded hover:bg-blue-700 transition duration-200">Log In</button>
      <p class="text-center text-sm text-gray-400">Don't have an account? <a href="signup.php" class="text-blue-400 hover:underline">Sign Up</a></p>
    </form>
  </div>

  <script>
    particlesJS('particles-js', {
      "particles": {
        "number": { "value": 80, "density": { "enable": true, "value_area": 800 }},
        "color": { "value": "#60a5fa" },
        "shape": { "type": "circle" },
        "opacity": { "value": 0.5 },
        "size": { "value": 3, "random": true },
        "line_linked": { "enable": true, "distance": 150, "color": "#60a5fa", "opacity": 0.4, "width": 1 },
        "move": { "enable": true, "speed": 2 }
      },
      "interactivity": {
        "events": {
          "onhover": { "enable": true, "mode": "grab" },
          "onclick": { "enable": true, "mode": "push" },
          "resize": true
        },
        "modes": {
          "grab": { "distance": 140, "line_linked": { "opacity": 1 }},
          "bubble": { "distance": 400, "size": 40, "duration": 2, "opacity": 8, "speed": 3 },
          "repulse": { "distance": 200, "duration": 0.4 },
          "push": { "particles_nb": 4 },
          "remove": { "particles_nb": 2 }
        }
      },
      "retina_detect": true
    });
  </script>
</body>
</html>
