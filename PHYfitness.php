
<?php
session_start();


if ($_SESSION['role'] != 'client' && $_SESSION['role'] != 'admin' ) {
    header("Location: index.php");
    exit();
}
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="exo.css">
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
      rel="stylesheet"
  />
    <title>Physical Fitness Exercises</title>
</head>\
<style>
    .link a:hover::after {
     width: 100%;
   }
    </style>
<body>
    <nav>
        <div class="nav__logo">
            <a href="user.php"><img src="assets/logo.png" alt="logo"></a>
        </div>
        <ul class="nav__links">
            <li class="link"><a href="user.php#home">Home</a></li>
            <li class="link"><a href="user.php#program">Program</a></li>
            <li class="link"><a href="user.php#service">Service</a></li>
            <li class="link"><a href="user.php#about">About</a></li>
            <li class="link"><a href="user.php#calc">BMI Calculator</a></li>
            <li class="link"><a href="user.php#contact">Contact Us</a></li>
        </ul>
        <button class="btn" onclick="window.location.href='logout.php';">Logout</button>
        </nav>

    <header class="section__container header__container">
        <div class="header__content">
            <h1><span>Physical </span>Fitness Exercises</h1>
            <p>These exercises will help you improve your overall fitness and well-being.</p>
        </div>
    </header>

    <section class="section__container">
        <h2 class="section__header">Advanced Exercises</h2>
        <div class="explore__grid">
            <div class="explore__card">
                <h4>Cardio Workouts</h4>
                <ul>
                    <li>Running: 30-45 minutes</li>
                    <li>Cycling: 45-60 minutes</li>
                    <li>Swimming: 30-45 minutes</li>
                </ul>
            </div>
            <div class="explore__card">
                <h4>Flexibility Exercises</h4>
                <ul>
                    <li>Yoga: 60 minutes</li>
                    <li>Dynamic Stretching: 10-15 minutes</li>
                </ul>
            </div>
            <div class="explore__card">
                <h4>Balance and Core Exercises</h4>
                <ul>
                    <li>Planks: 3 sets of 1 minute</li>
                    <li>Side Planks: 3 sets of 30 seconds per side</li>
                    <li>Standing Leg Raises: 3 sets of 15 reps per leg</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section__container">
        <h2 class="section__header">Diet Plan</h2>
        <div class="explore__grid">
            <div class="explore__card">
                <h4>Breakfast</h4>
                <p>Smoothie with kale, banana, protein powder, and almond milk</p>
                <h5>Advice</h5>
                <ul>
                    <li>Avoid adding too much sugar.</li>
                    <li>Include a handful of nuts.</li>
                </ul>
            </div>
            <div class="explore__card">
                <h4>Snack</h4>
                <p>Apple slices with almond butter</p>
                <h5>Advice</h5>
                <ul>
                    <li>Choose organic apples.</li>
                    <li>Avoid processed almond butter.</li>
                </ul>
            </div>
            <div class="explore__card">
                <h4>Lunch</h4>
                <p>Quinoa salad with chickpeas, cherry tomatoes, cucumber, and olive oil dressing</p>
                <h5>Advice</h5>
                <ul>
                    <li>Add a variety of colorful vegetables.</li>
                    <li>Avoid high-calorie dressings.</li>
                </ul>
            </div>
            <div class="explore__card">
                <h4>Snack</h4>
                <p>Cottage cheese with pineapple</p>
                <h5>Advice</h5>
                <ul>
                    <li>Choose low-fat cottage cheese.</li>
                    <li>Avoid canned pineapple with added sugar.</li>
                </ul>
            </div>
            <div class="explore__card">
                <h4>Dinner</h4>
                <p>Grilled chicken with mixed vegetables and brown rice</p>
                <h5>Advice</h5>
                <ul>
                    <li>Opt for skinless chicken breast.</li>
                    <li>Avoid using too much oil or butter for cooking.</li>
                </ul>
            </div>
        </div>
    </section>

    <footer class="section__container footer__container">
        <div class="footer__col">
            <div class="footer__logo"><img src="assets/logo.png" alt="logo"></div>
            <p>Take the first step towards a healthier, stronger you with our unbeatable pricing plans. Let's sweat, achieve, and conquer together!</p>
            <div class="footer__socials">
                <a href="#"><i class="ri-facebook-fill"></i></a>
                <a href="#"><i class="ri-instagram-line"></i></a>
                <a href="#"><i class="ri-twitter-fill"></i></a>
            </div>
        </div>
        <div class="footer__col">
            <h4>Contact</h4>
            <a href="user.php#contact">Contact Us</a>
            <a href="user.php#calc">BMI Calculator</a>
        </div>
    </footer>

    <div class="footer__bar">Copyright © 2025 Gym club. All rights reserved.</div>
</body>
</html>
