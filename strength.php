
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
    <title>Strength Exercises</title>
</head>
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
            <h1><span>Strength</span> Exercises</h1>
            <p>These exercises will help you build strength and enhance overall fitness.</p>
        </div>
    </header>

    <section class="section__container">
        <h2 class="section__header">Advanced Exercises</h2>
        <div class="explore__grid">
            <div class="explore__card">
                <h4>Compound Movements</h4>
                <ul>
                    <li>Deadlifts: 4 sets of 6-8 reps</li>
                    <li>Squats: 4 sets of 6-8 reps</li>
                    <li>Bench Press: 4 sets of 6-8 reps</li>
                </ul>
            </div>
            <div class="explore__card">
                <h4>Isolation Movements</h4>
                <ul>
                    <li>Bicep Curls: 3 sets of 10-12 reps</li>
                    <li>Tricep Extensions: 3 sets of 10-12 reps</li>
                    <li>Calf Raises: 3 sets of 12-15 reps</li>
                </ul>
            </div>
            <div class="explore__card">
                <h4>Functional Movements</h4>
                <ul>
                    <li>Kettlebell Swings: 3 sets of 15 reps</li>
                    <li>Medicine Ball Slams: 3 sets of 15 reps</li>
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
                <p>Scrambled eggs with spinach and whole-grain toast</p>
                <h5>Advice</h5>
                <ul>
                    <li>Include a variety of vegetables.</li>
                    <li>Avoid using too much oil.</li>
                </ul>
            </div>
            <div class="explore__card">
                <h4>Snack</h4>
                <p>Greek yogurt with honey and nuts</p>
                <h5>Advice</h5>
                <ul>
                    <li>Choose unsweetened yogurt.</li>
                    <li>Avoid processed nuts.</li>
                </ul>
            </div>
            <div class="explore__card">
                <h4>Lunch</h4>
                <p>Grilled chicken breast with quinoa and mixed vegetables</p>
                <h5>Advice</h5>
                <ul>
                    <li>Add a variety of colors with different veggies.</li>
                    <li>Avoid high-sodium seasonings.</li>
                </ul>
            </div>
            <div class="explore__card">
                <h4>Snack</h4>
                <p>Protein shake with berries and almond milk</p>
                <h5>Advice</h5>
                <ul>
                    <li>Avoid sugary protein powders.</li>
                    <li>Include healthy fats like flax seeds.</li>
                </ul>
            </div>
            <div class="explore__card">
                <h4>Dinner</h4>
                <p>Salmon with brown rice and steamed broccoli</p>
                <h5>Advice</h5>
                <ul>
                    <li>Choose wild-caught salmon.</li>
                    <li>Avoid adding too much salt.</li>
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