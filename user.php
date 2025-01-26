<?php
session_start();


if ($_SESSION['role'] != 'client' && $_SESSION['role'] != 'admin' ) {
    header("Location: ../index.php");
    exit();
}
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../index.php");
    exit;
}
include 'db.php';

$userid = $_SESSION['user_id'];
    $tablename = $_SESSION['role'];
    

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

if(isset($_POST["add-contact"])){

    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    

    // Insert data into the contacts table
    $sql = "INSERT INTO contacts (name, email, message) 
            VALUES ('$name', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Message sent successfully!')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>Fit Club</title>
  </head>
 <style>
 .link a:hover::after {
  width: 100%;
}
 </style>
  <body>
    <nav>
      <div class="nav__logo">
        <a href="user.php"><img src="assets/logo.png" alt="logo" /></a>
      </div>
      <ul class="nav__links">
        <li class="link"><a href="#home">Home</a></li>
        <li class="link"><a href="#program">Program</a></li>
        <li class="link"><a href="#service">Service</a></li>
        <li class="link"><a href="#about">About</a></li>
         <li class="link"><a href="#calc">BMI Calculator</a></li>
        <li class="link"><a href="#contact">Contact US</a></li>
       
      </ul>
      <button class="btn" onclick="window.location.href='logout.php';">Logout</button>

    </nav>

    <header id="home" class="section__container header__container">
      <div class="header__content">
        <span class="bg__blur"></span>
        <span class="bg__blur header__blur"></span>
        <h4>BEST FITNESS IN THE TOWN</h4>
        <h1><span>MAKE</span> YOUR BODY SHAPE</h1>
        <p>
          Unleash your potential and embark on a journey towards a stronger,
          fitter, and more confident you. Sign up for 'Make Your Body Shape' now
          and witness the incredible transformation your body is capable of!
        </p>
        <button class="btn" onclick="window.location.href='strength.php';">Get Started</button>
      </div>
      <div class="header__image">
        <img src="assets/header.png" alt="header" />
      </div>
    </header>

    <section id="program" class="section__container explore__container">
      <div class="explore__header">
        <h2 class="section__header">EXPLORE OUR PROGRAM</h2>
        
      </div>
      <div class="explore__grid">
        <div class="explore__card">
          <span><i class="ri-boxing-fill"></i></span>
          <h4>Strength</h4>
          <p>
            Embrace the essence of strength as we delve into its various
            dimensions physical, mental, and emotional.
          </p>
          <a href="strength.php">Join Now <i class="ri-arrow-right-line"></i></a>
        </div>
        <div class="explore__card">
          <span><i class="ri-heart-pulse-fill"></i></span>
          <h4>Physical Fitness</h4>
          <p>
            It encompasses a range of activities that improve health, strength,
            flexibility, and overall well-being.
          </p>
          <a href="PHYfitness.php">Join Now <i class="ri-arrow-right-line"></i></a>
        </div>
        <div class="explore__card">
          <span><i class="ri-run-line"></i></span>
          <h4>Fat Lose</h4>
          <p>
            Through a combination of workout routines and expert guidance, we'll
            empower you to reach your goals.
          </p>
          <a href="exoloss.php">Join Now <i class="ri-arrow-right-line"></i></a>
        </div>
        <div class="explore__card">
          <span><i class="ri-shopping-basket-fill"></i></span>
          <h4>Weight Gain</h4>
          <p>
            Designed for individuals, our program offers an effective approach
            to gaining weight in a sustainable manner.
          </p>
          <a href="exogain.php">Join Now <i class="ri-arrow-right-line"></i></a>
        </div>
      </div>
    </section>

    <section id="service" class="section__container class__container">
      <div class="class__image">
        <span class="bg__blur"></span>
        <img src="assets/class-1.jpg" alt="class" class="class__img-1" />
        <img src="assets/class-2.jpg" alt="class" class="class__img-2" />
      </div>
      <div class="class__content">
        <h2 class="section__header">THE CLASS YOU WILL GET HERE</h2>
        <p>
          Led by our team of expert and motivational instructors, "The Class You
          Will Get Here" is a high-energy, results-driven session that combines
          a perfect blend of cardio, strength training, and functional
          exercises. Each class is carefully curated to keep you engaged and
          challenged, ensuring you never hit a plateau in your fitness
          endeavors.
        </p>
        <button class="btn" onclick="window.location.href='strength.php';">Book A Class</button>
      </div>
    </section>

    <section id="about" class="section__container join__container">
      <h2 class="section__header">WHY JOIN US ?</h2>
      <p class="section__subheader">
        Our diverse membership base creates a friendly and supportive
        atmosphere, where you can make friends and stay motivated.
      </p>
      <div class="join__image">
        <img src="assets/join2.jpg" alt="Join" />
        <div class="join__grid">
          <div class="join__card">
            <span><i class="ri-user-star-fill"></i></span>
            <div class="join__card__content">
              <h4>Personal Trainer</h4>
              <p>Unlock your potential with our expert Personal Trainers.</p>
            </div>
          </div>
          <div class="join__card">
            <span><i class="ri-vidicon-fill"></i></span>
            <div class="join__card__content">
              <h4>Practice Sessions</h4>
              <p>Elevate your fitness with practice sessions.</p>
            </div>
          </div>
          <div class="join__card">
            <span><i class="ri-building-line"></i></span>
            <div class="join__card__content">
              <h4>Good Management</h4>
              <p>Supportive management, for your fitness success.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="calc" class="section__container " style="color:white;">
  <h2 class="section__header">BMI Calculator</h2>
  <p class="section__subheader">
    Enter your height and weight to calculate your Body Mass Index.
  </p>
  
  <div style="gap:20px;display:flex;justify-content:center;
align-items:center;flex-direction:column;" class="price__grid">
  <div  class="price__card">
  <div style="overflow:hidden;display:flex;flex-direction:column;gap:20px;text-align:start;" class="price-form">
    <label for="height">Height (cm):</label>
    <input type="number" min="0" required class="input-form" id="height" placeholder="Enter your height in cm" style="width: 100%; height: 45px; padding: 10px 15px; font-size: 16px; border: 2px solid lightgrey; border-radius: 10px; outline: none; transition: all 0.3s ease;" />


    <label for="weight">Weight (kg):</label>
    <input type="number" min="0" required class="input-form" id="weight" placeholder="Enter your weight in kg" style="width: 100%; height: 45px; padding: 10px 15px; font-size: 16px; border: 2px solid lightgrey; border-radius: 10px; outline: none; transition: all 0.3s ease;" />

    <button class="btn bmi__btn" onclick="bmiCalc()">Calculate BMI</button>
    <p id="bmiResult" class="bmi__result"></p>
  </div>
  </div>
  </div> 
</section>
<section id="contact" class="section__container" style="color: white;">
  <h2 class="section__header">Contact Us</h2>
  <p class="section__subheader">We'd love to hear from you! Please fill out the form below to get in touch.</p>
  
  <div style="margin-top:30px;gap: 20px; display: flex; justify-content: center; align-items: center; flex-direction: column;" class="contact__grid">
    <div style="width:400px;" class="contact__card">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="contacts" method="POST" style="overflow: hidden; display: flex; flex-direction: column; gap: 20px; text-align: start;" class="contact-form">
        
        <label for="name">Your Name:</label>
        <input 
          type="text" 
          name="name" 
          required 
          class="input-form" 
          id="name" 
          placeholder="Enter your full name" 
          style="width: 100%; height: 45px; padding: 10px 15px; font-size: 16px; border: 2px solid lightgrey; border-radius: 10px; outline: none; transition: all 0.3s ease;" 
        />

        <label for="email">Email Address:</label>
        <input 
          type="email" 
          name="email" 
          required 
          class="input-form" 
          id="email" 
          placeholder="Enter your email address" 
          style="width: 100%; height: 45px; padding: 10px 15px; font-size: 16px; border: 2px solid lightgrey; border-radius: 10px; outline: none; transition: all 0.3s ease;" 
        />


        <label for="message">Your Message:</label>
        <textarea 
          name="message" 
          required 
          class="input-form" 
          maxLength="200"
          id="message" 
          placeholder="Write your message here" 
          style="width: 100%; height: 100px; padding: 10px 15px; font-size: 16px; border: 2px solid lightgrey; border-radius: 10px; outline: none; transition: all 0.3s ease; resize: none;">
        </textarea>

        <button class="btn contact__btn" name="add-contact" type="submit">Send Message</button>
      </form>
    </div>
  </div> 
</section>

    <footer class="section__container footer__container">
      <span class="bg__blur"></span>
      <span class="bg__blur footer__blur"></span>
      <div class="footer__col">
        <div class="footer__logo"><img src="assets/logo.png" alt="logo" /></div>
        <p>
          Take the first step towards a healthier, stronger you with our
          unbeatable pricing plans. Let's sweat, achieve, and conquer together!
        </p>
        <div class="footer__socials">
          <a href="#"><i class="ri-facebook-fill"></i></a>
          <a href="#"><i class="ri-instagram-line"></i></a>
          <a href="#"><i class="ri-twitter-fill"></i></a>
        </div>
      </div>
     
      <div class="footer__col">
        <h4>Contact</h4>
        <a href="#contact">Contact Us</a>
        <a href="#calc">BMI Calculator</a>
      </div>
    </footer>
    <div class="footer__bar">
      Copyright © 2025 Gym club. All rights reserved.
    </div>
    <script>
      function validerNombre(valeur, min, max) {
    const nombre = parseFloat(valeur);
    return !isNaN(nombre) && nombre >= min && nombre <= max;
}
 document.querySelectorAll('.nav__links .link a').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault(); 
    const targetId = this.getAttribute('href').substring(1); 
    const targetElement = document.getElementById(targetId);

    if (targetElement) {
      window.scrollTo({
        top: targetElement.offsetTop -20, 
        behavior: 'smooth',
      });
    }
  });
});

function bmiCalc() {
  const height = document.getElementById('height').value/100 ; 
  const weight = document.getElementById('weight').value;
  const bmiResult = document.getElementById('bmiResult');

  if (!validerNombre(weight, 30, 300)) {
      bmiResult.textContent = 'the weight average range must be between 30 and 300 kg';
      bmiResult.style.color = 'yellow';
        return;
    }

    if (!validerNombre(height, 1, 3)) {
      bmiResult.textContent = 'the height average range must be between 100 and 300 cm';
      bmiResult.style.color = 'yellow';
        return;
    }


  let bmi = (weight / (height * height)).toFixed(2);
  let bmiCategory = '';
  let bmiColor = '';

  if (bmi < 18.5) {
    bmiCategory = 'You are Under-Weight please consider Checking our weight gain program for more details.';
    bmiColor = 'blue';
  } else if (bmi < 25) {
    bmiCategory = 'You are in a Normale state , Keep it up! ';
    bmiColor = 'green';
  } else if (bmi < 30) {
    bmiCategory = 'You are Over-Weight consider Checking our fat loss program for more details.';
    bmiColor = 'orange';
  } else {
    bmiCategory = 'You might be in risk of obesity and your health might be in danger please consider checking our fat loss and fitness program.';
    bmiColor = 'red';
  }

  bmiResult.textContent = ` ${bmiCategory}`;
  bmiResult.style.color = bmiColor;
  bmiResult.style.textAlign = 'center';
}
</script>
</body>
</html>
