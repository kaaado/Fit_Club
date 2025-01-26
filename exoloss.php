
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
    <title>Weight Loss Exercises</title>
</head>
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
            <h1><span>Fat </span>Loss Exercises</h1>
            <p>These exercises will help you shed those extra pounds and get in shape.</p>
        </div>
    </header>

    <section class="section__container">
        <h2 class="section__header">Advanced Exercises</h2>
        <div class="explore__grid">
            <div class="explore__card">
                <h4>HIIT (High-Intensity Interval Training)</h4>
                <p>Warm-up: 5 minutes jogging in place</p>
                <p class="title-program">Circuit (3 rounds):</p>
                <ul>
                    <li>30 seconds Burpees</li>
                    <li>30 seconds Rest</li>
                    <li>30 seconds Mountain Climbers</li>
                    <li>30 seconds Rest</li>
                    <li>30 seconds Jump Squats</li>
                    <li>30 seconds Rest</li>
                </ul>
                <p>Cool-down: 5 minutes stretching</p>
            </div>
            <div class="explore__card">
                <h4>Strength Training</h4>
                <p >Warm-up: 5 minutes dynamic stretching</p>
                <p class="title-program">Workout (3 sets of 10-12 reps):</p>
                <ul>
                    <li>Deadlifts</li>
                    <li>Bent-over Rows</li>
                    <li>Push-ups</li>
                    <li>Plank (hold for 1 minute)</li>
                </ul>
                <p>Cool-down: 5 minutes stretching</p>
            </div>
            <div class="explore__card">
                <h4>LISS (Low-Intensity Steady-State) Cardio</h4>
                <p>Warm-up: 5 minutes walking</p>
                <p class="title-program">Workout:</p>
                <ul>
                    <li>30-60 minutes of brisk walking</li>
                    <li>30-60 minutes of cycling at a steady pace</li>
                    <li>30-60 minutes of swimming at a comfortable speed</li>
                </ul>
                <p>Cool-down: 5 minutes stretching</p>
            </div>
        </div>
    </section>

    <section class="section__container">
        <h2 class="section__header">Diet Plan</h2>
        <div class="explore__grid">
            <div class="explore__card">
                <h4>Breakfast</h4>
                <p>Smoothie with spinach, banana, protein powder, and almond milk</p>
            </div>
            <div class="explore__card">
                <h4>Snack</h4>
                <p>Greek yogurt with berries</p>
            </div>
            <div class="explore__card">
                <h4>Lunch</h4>
                <p>Grilled chicken salad with mixed greens, tomatoes, cucumbers, and vinaigrette</p>
            </div>
            <div class="explore__card">
                <h4>Snack</h4>
                <p>Almonds and an apple</p>
            </div>
            <div class="explore__card">
                <h4>Dinner</h4>
                <p>Baked salmon with steamed broccoli and quinoa</p>
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