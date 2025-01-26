
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
    <title>Weight Gain Exercises</title>
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
            <h1><span>Weight</span> Gain Exercises</h1>
            <p>These exercises will help you build muscle mass and gain weight in a healthy way.</p>
        </div>
    </header>

    <section class="section__container">
        <h2 class="section__header">Advanced Exercises</h2>
        <div class="explore__grid">
            <div class="explore__card">
                <h4>Compound Movements</h4>
                <ul>
                    <li>Squats: 4 sets of 8-10 reps</li>
                    <li>Deadlifts: 4 sets of 8-10 reps</li>
                    <li>Bench Press: 4 sets of 8-10 reps</li>
                </ul>
            </div>
            <div class="explore__card">
                <h4>Isolation Movements</h4>
                <ul>
                    <li>Bicep Curls: 3 sets of 12-15 reps</li>
                    <li>Tricep Extensions: 3 sets of 12-15 reps</li>
                    <li>Leg Extensions: 3 sets of 12-15 reps</li>
                </ul>
            </div>
            <div class="explore__card">
                <h4>Bodyweight Exercises</h4>
                <ul>
                    <li>Push-ups: 3 sets of 15-20 reps</li>
                    <li>Pull-ups: 3 sets of 8-12 reps</li>
                    <li>Dips: 3 sets of 12-15 reps</li>
                </ul>
            </div>
            <div class="explore__card">
                <h4>Functional Training</h4>
                <ul>
                    <li>Kettlebell Swings: 3 sets of 15-20 reps</li>
                    <li>Medicine Ball Throws: 3 sets of 12-15 reps</li>
                    <li>Farmer's Walks: 3 sets of 30 seconds</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section__container">
        <h2 class="section__header">Diet Plan</h2>
        <div class="explore__grid">
            <div class="explore__card">
                <h4>Breakfast</h4>
                <p>Oatmeal with nuts, seeds, honey, and whole milk</p>
                <h5>Advice:</h5>
                <ul>
                    <li>Avoid skipping breakfast; it's essential for energy.</li>
                    <li>Add a scoop of protein powder to increase protein intake.</li>
                </ul>
            </div>
            <div class="explore__card">
                <h4>Snack</h4>
                <p>Peanut butter sandwich and a banana</p>
                <h5>Advice</h5>
                <ul>
                    <li>Choose whole grain bread for additional fiber.</li>
                    <li>Avoid processed peanut butter; opt for natural versions.</li>
                </ul>
            </div>
            <div class="explore__card">
                <h4>Lunch</h4>
                <p>Chicken and avocado wrap with a side of sweet potato fries</p>
                <h5>Advice</h5>
                <ul>
                    <li>Incorporate a variety of vegetables for added nutrients.</li>
                    <li>Avoid deep-fried fries; opt for baked or air-fried.</li>
                </ul>
            </div>
            <div class="explore__card">
                <h4>Snack</h4>
                <p>Protein shake with banana and almond butter</p>
                <h5>Advice</h5>
                <ul>
                    <li>Avoid adding too much sugar to the shake.</li>
                    <li>Include a handful of nuts for extra healthy fats.</li>
                </ul>
            </div>
            <div class="explore__card">
                <h4>Dinner</h4>
                <p>Steak with mashed potatoes and green beans</p>
                <h5>Advice</h5>
                <ul>
                    <li>Choose lean cuts of steak to reduce saturated fat intake.</li>
                    <li>Avoid adding too much butter to the mashed potatoes.</li>
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
