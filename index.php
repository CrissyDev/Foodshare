<?php
include('includes/header.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodShare</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <header id="home">
        <div id="homeCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="foodshare5.webp" alt="First Slide" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="foodshare2.webp" alt="Second Slide" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="foodshare3.webp" alt="Third Slide" class="d-block w-100">
                </div>
            </div>
        </div>
        <div class="header-content">
            <h1 style="color:rgb(84, 239, 221);"><b>FOOD-SHARE</b></h1>
            <p style="color:rgb(84, 239, 221);"><b>No more food-wastage</b> </p>
            <a id="ctaButton" href="register.php">Register</a>


        </div>
    </header>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>About Us</h2>
                    <p>At foodshare, we aim to create a network that bridges the gap between food vendors, distributors, recyclers, and the less fortunate. Our goal is to ensure everyone has access to essential food supplies while reducing waste. By facilitating efficient food distribution and recycling, we provide a sustainable solution that benefits the entire community.</p>
                </div>
                <div class="col-md-6">
                    <img src="foodshare1.webp" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="services-section">
        <div class="container">
            <h2 class="text-center">OUR SERVICES</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-item text-center">
                        <i class="fa-solid fa-recycle fa-3x"></i>
                        <h3>Recycling</h3>
                        <p>Converting spoiled food into usable manure</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item text-center">
                        <i class="fa fa-cutlery fa-3x aria-hidden="true"></i>

                        <h3>Food Distribution</h3>
                        <p>Supporting the needy community through food distribution</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item text-center">
                        <i class="fa fa-shopping-basket fa-3x" aria-hidden="true"></i>
                        <h3>Food-Bank</h3>
                        <p>Storage of food donations  for easier distributions.</p>
                    </div>
                </div>
                </div>
                </div>  
                </div>
            </div>
        </div>
    </section>
    <div class="contact-container">
        <h2>Contact Us</h2>
        <p><i class="fas fa-phone"></i> +2546687901</p>
        <p><i class="fas fa-envelope"></i> info@foodshare.com</p>
        
        <form id="feedbackForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send Feedback</button>
        </form>
    </div>
    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <p>© 2024 FOODSHARE. All rights reserved.</p>
                <p>Contact us at: <a href="mailto:info@foodshare.com">info@foodshare.com</a> | Tel: +2546687901</p>
                <div class="social-links">
                    <a href="#" class="footer-link">Facebook</a>
                    <a href="#" class="footer-link">Twitter</a>
                    <a href="#" class="footer-link">Instagram</a>
                </div>
            </div>
        </div>
    </footer>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.10/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
