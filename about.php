<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <section class="subheader-section">
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
        <h1 class="subheader-title">About Us</h1>
    </section>
    <section class="about-content">
        <div class="row">
            <div class="about-col">
                <h1>One Of The Best Stenography School</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore 
                     magna aliqua. Ut enim ad minim veniam, quis nostrud 
                     exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                     consequat. Duis aute irure dolor in reprehenderit in voluptate 
                     velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                     sint occaecat cupidatat non proident, sunt in culpa qui officia
                      deserunt mollit anim id est laborum</p> 
                <a href="" class="visit-btn red-btn">Explore Now</a>
            </div>
            <div class="about-col">
                <img src="images/aboutus.jpg">
            </div>
        </div>
    </section>
    
    <section class="footer-section">
        <h4>Gvinevere Stenography</h4>
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
<script src="js/script.js" defer></script>
</body>
</html>