<?php
// Start the PHP session for user authentication or other session-based features
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUCATION</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


</head>
<body>
    
    <!-- Navbar Section -->
    <nav class="navbar">
        <div class="navbar__container">
            <a href="#home" id="navbar__logo"><img src="Images/Pinggol.svg" alt="Logo that says GYM HUB"></a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item"><a href="#home" class="navbar__links" id="home-page">Home</a></li>
                <li class="navbar__item"><a href="#about" class="navbar__links" id="about-page">About Us</a></li>
                <li class="navbar__item"><a href="#services" class="navbar__links" id="services-page">Services</a></li>
                <li class="nav_contact">
                    <a href="#sign-in" class="navbar__link" id="signIn-page">Sign-in</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Home Section -->
    <div class="hero" id="home">
        <div class="slogan">
            <h1 class="main_slogan">SHAPING YOUNG MINDS TODAY FOR A <br>
                BRIGHTER FUTURE TOMORROW!</h1>
            <button class="rn_btn" onclick="window.location.href='#sign-in'">Register Now</button>
        </div>
    </div>

    <!-- About Us -->
    <div class="main" id= "about">
        <div class="main_container">

        <i class="fa-solid fa-child-reaching"></i>
        <div class="aboutUs_txt">

        <h1>"Empowering Young Minds, One Click at a Time"</h1>
        <p>At TEACHU, we believe that every child has the potential to achieve greatness. Our mission is to nurture curiosity, ignite innovation, and inspire growth by providing high-quality online education tailored to young learners.
<br>
Through our engaging lessons and interactive activities, we aim to equip children with the skills and knowledge they need to excel in a fast-evolving world. From enhancing critical thinking to sparking creativity, we’re here to shape a generation of thinkers, creators, and dreamers.
<br>
Together, let’s build a brighter future—one lesson, one idea, and one child at a time.</p>
<button onclick="window.location.href='RMAU.html'">Read More About Us</button>

        </div>

        </div>
    </div>

    <!-- Services -->
    <div class="Service" id = "services">
        <div class="services_container">

        <div class="service_below">
            <h1>SERVICES</h1>

            <p>
    <strong>🛒 Educational Products:</strong> <br>
    "We provide a variety of high-quality educational products designed to enhance your child’s learning experience.  
    From books and learning kits to educational games, we have everything to support your child’s academic success.  
    Explore our collection today and give your child the best learning tools!"
</p>

            <p>
    <strong>📚 Personalized Tutoring Services:</strong> <br>
    "Aside from our products, we also offer dedicated tutoring to help your child thrive academically. Our experienced teachers are ready to guide your child’s learning journey.  
    Contact us or just sign-in today to find the perfect tutor!"
    <br>
    <strong>📞 Contact Us:</strong> +63-912-345-6789  
<br>  
<strong>📧 Email:</strong> support@teachU.com  
<br>  
<strong>📱 Facebook:</strong> <a href="https://www.facebook.com/rclie.manib.madalmingan" target="_blank">Jonymar Barrete</a>  
<br>  
<strong>📷 Instagram:</strong> <a href="https://www.instagram.com/barrzzz69/" target="_blank">Barzzz69</a>  
</p>

        <hr>
        </div>


        <div class="book_logo">
            <img src="Images/books.png" alt="Books">
        </div>


        </div>
    </div>

<!-- Sign-in Section -->
<div class="Sign_in" id="sign-in">

    <h2>Sign In</h2>
    <div class="sign-in_container">
        <form action="Finaldashboard.php" method="POST">
            <div class="form-input">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="form-input">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="sign-in_btn">Login</button>
        </form>
        
        <p class="sign-up_link">Don't have an account? <a href="#sign-up">Sign Up</a></p>
    </div>

</div>

<!-- Footer Section -->
<div class="footer__container" id="footer">
        <div class="footer__links">
          <div class="footer__link--wrapper">
            <div class="footer__link--items">
              <h2>About Us</h2>
              <a href="/Footer_Section/Fuck.html">How it works</a> 
              <a href="/Footer_Section/Fuck.html">Testimonials</a>
              <a href="/Footer_Section/Fuck.html">Careers</a> 
              <a href="/Footer_Section/Fuck.html">Terms of Service</a>
            </div>
            <div class="footer__link--items">
              <h2>Contact Us</h2>
              <a href="/Footer_Section/Fuck.html">Contact</a> 
              <a href="/Footer_Section/Fuck.html">Support</a>
              <a href="/Footer_Section/Fuck.html">Destinations</a>
            </div>
          </div>
          <div class="footer__link--wrapper">
            <div class="footer__link--items">
              <h2>Videos</h2>
              <a href="/Footer_Section/Fuck.html">Submit Video</a> 
              <a href="/Footer_Section/Fuck.html">Ambassadors</a>
              <a href="/Footer_Section/Fuck.html">Agency</a>
            </div>
            <div class="footer__link--items">
              <h2>Social Media</h2>
              <a href="/">Instagram</a> <a href="/">Facebook</a>
              <a href="/">Youtube</a> <a href="/">Twitter</a>
            </div>
          </div>
        </div>
        <section class="social__media">
          <div class="social__media--wrap">
            <div class="footer__logo">
              <a href="/" id="footer__logo">TeachU</a>
            </div>
            <p class="website__rights">© TeachU 2024. For Entertainment Purposes Only</p>
            <div class="social__icons">
              <a href="/" class="social__icon--link" target="_blank"
                ><i class="fab fa-facebook"></i
              ></a>
              <a href="/" class="social__icon--link"
                ><i class="fab fa-instagram"></i
              ></a>
              <a href="/" class="social__icon--link"
                ><i class="fab fa-youtube"></i
              ></a>
              <a href="/" class="social__icon--link"
                ><i class="fab fa-linkedin"></i
              ></a>
              <a href="/" class="social__icon--link"
                ><i class="fab fa-twitter"></i
              ></a>
            </div>
          </div>



    <script src="dashboard.js"></script>
</body>
</html>
