<?php
session_start();

// Capture the email if provided
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'Guest';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Dashboard</title>
    <link href = "FinalDashboard.css" rel = "stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">


</head>
<body>

    <div class="main_container">

        <div class="container">
        <h2>Our Professional Private Tutors</h2>

        <div class="tutors">

        <div class="main_border">
            <div class="tutors_borders">
                <img src="Images/Madalmingan.jpg" alt="Person">
                <span><strong>Lexi Lore Madalmingan</strong></span>
                <p>Private Tutor</p>
            </div>
            <div class="tutor_identity">

            <p>
    <br>
    <strong>📞 Contact Number:</strong> +63-912-345-6789  
    <br>  
    <strong>📧 Email:</strong> arcelie_madalmingan@sjp2cd.edu.ph
    <br>  
    <strong>📱 Facebook:</strong> <a href="https://www.facebook.com/rclie.manib.madalmingan" target="_blank">Rclie Manib Madalmingan </a>  
    <br>  
    <strong>📷 Instagram:</strong> <a href="https://www.instagram.com/bellietrace" target="_blank">bellietrace</a>  
    <br>  
    <strong>🎓 Education:</strong> College Graduate  
    <br>  
    <strong>📜 Course:</strong> Bachelor of Science in Information Technology (BSIT)  
</p>

            </div>
            </div>

            <div class="main_border">
            <div class="tutors_borders">
                <img src="Images/BURAOT.jpg" alt="Person">
                <span><strong>Mia Malkova Heruela</strong></span>
                <p>Private Tutor</p>
            </div>
            
            <div class="tutor_identity">

            <p>
    <br>
    <strong>📞 Contact Number:</strong> +63-912-345-6789  
    <br>  
    <strong>📧 Email:</strong> realyca_heruela@sjp2cd.edu.ph 
    <br>  
    <strong>📱 Facebook:</strong> <a href="https://www.facebook.com/realyca.heruela21" target="_blank">Realyca Heruela  (Chang)</a>  
    <br>  
    <strong>📷 Instagram:</strong> <a href="https://www.instagram.com/barrzzz69/" target="_blank">Barzzz69</a>  
    <br>  
    <strong>🎓 Education:</strong> College Graduate  
    <br>  
    <strong>📜 Course:</strong> Bachelor of Science in Information Technology (BSIT)  
</p>

            </div>

            </div>
        </div>
        </div>

        <h1 class = "product_head">OUR PRODUCTS</h1>
        <div class="product_section">

            <div class="image_borders">
                <img src="Images/Bags.jpg" alt="School Products">
                <div class="image_description">
                <span><strong>₱450.00</strong></span>
                <p><strong>School Bags</strong></p>
                <span class = "little_reminder">Just take a <strong>screenshot if you want to order this and just click Purchase</strong> to contact personally the owner.</span>
                <button onclick="window.open('https://web.facebook.com/jonymar.barrete.1', '_blank')">Purchase</button>
                </div>
            </div>

            <div class="image_borders">
                <img src="Images/Notebooks.jpg" alt="School Products">
                <div class="image_description">
                <span><strong>₱150.00</strong></span>
                <p><strong>School Notebooks</strong></p>
                <span class = "little_reminder">Just take a <strong>screenshot if you want to order this and just click Purchase</strong> to contact personally the owner.</span>
                <button onclick="window.open('https://web.facebook.com/jonymar.barrete.1', '_blank')">Purchase</button>
                </div>
            </div>

            <div class="image_borders">
                <img src="Images/Pencils.jpg" alt="School Products">
                <div class="image_description">
                <span><strong>₱100.00</strong></span>
                <p><strong>School Pencils</strong></p>
                <span class = "little_reminder">Just take a <strong>screenshot if you want to order this and just click Purchase</strong> to contact personally the owner.</span>
                <button onclick="window.open('https://web.facebook.com/jonymar.barrete.1', '_blank')">Purchase</button>
                </div>
            </div>

            <div class="image_borders">
                <img src="Images/Crayons.jpg" alt="School Products">
                <div class="image_description">
                <span><strong>₱120.00</strong></span>
                <p><strong>School Crayons</strong></p>
                <span class = "little_reminder">Just take a <strong>screenshot if you want to order this and just click Purchase</strong> to contact personally the owner.</span>
                <button onclick="window.open('https://web.facebook.com/jonymar.barrete.1', '_blank')">Purchase</button>
                </div>
            </div>

            <div class="image_borders">
                <img src="Images/Tumbler.jpg" alt="School Products">
                <div class="image_description">
                <span><strong>₱320.00</strong></span>
                <p><strong>School Tumbler</strong></p>
                <span class = "little_reminder">Just take a <strong>screenshot if you want to order this and just click Purchase</strong> to contact personally the owner.</span>
                <button onclick="window.open('https://web.facebook.com/jonymar.barrete.1', '_blank')">Purchase</button>
                </div>
            </div>

            <div class="image_borders">
                <img src="Images/Papers.jpg" alt="School Products">
                <div class="image_description">
                <span><strong>₱110.00</strong></span>
                <p><strong>School Papers</strong></p>
                <span class = "little_reminder">Just take a <strong>screenshot if you want to order this and just click Purchase</strong> to contact personally the owner.</span>
                <button onclick="window.open('https://web.facebook.com/jonymar.barrete.1', '_blank')">Purchase</button>
                </div>
            </div>

        </div>
    </div>

    <div class="quiz_container" id = "quiz">
        <div class="quiz_asking">
            <h1>"Think You’re a Quiz Master? 🏆"</h1>
            <br>
            <span>
            "Let’s put your skills to the test! Answer some exciting questions and see how much you know.
            <br><strong>Ready to play?"</strong></span>
            <button onclick="window.location.href='quiz.html'">Click Me!</button>
        </div>

        <hr>

        <div class="logOut_container">
            <h1>"Let us be responsible for building a better future for our childrens."</h1>
            <button onclick="window.location.href='index.php#sign-in'">Log Out</button>
        </div>
    </div>


    <script></script>
</body>
</html>


</body>
</html>
