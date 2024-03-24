<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GVNIVERE</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <section class="header-section">
        <nav>
            <a href="home.php"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">
            <i class="bi bi-x" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="course.php">COURSE</a></li>
                    <li><a href="">CONTACT</a></li>
                </ul>
            </div>
            <i class="bi bi-list" onclick="showMenu()"></i>
        </nav>
    <div class="text-box">
        <h1>GVNIVERE STENOGRAPHY LEARNING CENTER</h1>
        <p>Unlock the Power of Words with GVNIVERE: Where Shorthand Becomes Your Superpower!</p>
        <a href="" class="visit-btn">Visit Us</a>
    </section>

    <section class="course-section">
        <h1>Courses We Offer</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="row">
            <div class="course-col">
                <h3>Difficulty</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua.</p>
            </div>
            <div class="course-col">
                <h3>Difficulty</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua.</p>
            </div>
            <div class="course-col">
                <h3>Difficulty</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua.</p>
            </div>

    </section>
    <section class="contact-section">
        <h1>Enroll For Our Stenography Courses Anywhere</h1>
        <a href="" class="visit-btn">Contact Us</a>
    </section>
    <section class="testimonial-section">
        <h1>What Our Student Says</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="row">
            <div class="testimonial-col">
                <img src="images/user1.jpg">
                <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua.</p>
                    <h3>Sample Name</h3>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                </div>
            </div>
            <div class="testimonial-col">
                <img src="images/user2.jpg">
                <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua.</p>
                    <h3>Sample Name</h3>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
            </div>
        </div>
    </section>  
    <section class="footer-section">
        <h4>Guinevere Stenography</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore 
            magna aliqua.</p>
        <div class="footer-icons">
            <i class="bi bi-facebook"></i>
            <i class="bi bi-twitter"></i>
            <i class="bi bi-instagram"></i>
            <i class="bi bi-linkedin"></i>
        </div>
        <p class="heart">Made with <i class="bi bi-heart"></i> by Ken</p>
    </section>
<script>

    var navLinks = document.getElementById("navLinks");

    function showMenu(){
        navLinks.style.right = "0";

    }
    function hideMenu(){
        navLinks.style.right = "-200px";
        
    }
</script>
</body>
</html>