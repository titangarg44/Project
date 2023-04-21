<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/664c0df918.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="sub-header">
        <nav>
            <a href="Index.php"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="login.php">SIGN UP</a></li>
                    <li><a href="About Us.php">ABOUT</a></li>
                    <li><a href="Course.php">COURSE</a></li>
                    <li><a href="Blog.php">BLOG</a></li>
                    <li><a href="Contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>About Us</h1>
    </section>

    <!------ About Us Content ------>
    
    <section class="about-us">
        <div class="row">
            <div class="about-col">
                <h1>We Are The World's Largest University</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Voluptatum, veniam repudiandae nisi porro eligendi, 
                minima doloribus perferendis provident incidunt deserunt quasi architecto? 
                Voluptates expedita exercitationem accusamus, optio soluta aliquid quae?</p>
                <a href="https://educationhomie.school.blog" class="hero-btn red-btn">EXPLORE NOW</a>
            </div>
            <div class="about-col">
                <img src="images/about.jpg">
            </div>
        </div>
    </section>

    <!------ Footer ------>

    <section class="footer">
        <h4>About Us</h4>
        <p>Lorem, ipsum dolor sit amet consectetur<br>adipisicing elit.
            Sapiente, reiciendis providentmagnam modi ea doloribus. 
            Numquam, debitis, veritatis,<br>illo amet recusandae et dolor 
            delectus cupiditate modi nesciunt accusantium perspiciatis ratione.</p>
            <div class="icons">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-square-twitter"></i>
                <i class="fa-brands fa-square-instagram"></i>
                <i class="fa-brands fa-linkedin"></i>
            </div>
            <p>Education <i class="fa-solid fa-book"></i> is the key to success.</p>
    </section>

    <!------ JavaScript for Toggle Menu ------>

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