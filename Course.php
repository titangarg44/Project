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
            <a href="Index.html"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="Index.php">HOME</a></li>
                    <li><a href="About Us.php">ABOUT</a></li>
                    <li><a href="Course.php">COURSE</a></li>
                    <li><a href="Blog.php">BLOG</a></li>
                    <li><a href="Contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Our Courses</h1>
    </section>

    <!------ Course ------>

    <section class="course">
        <h1>Courses We offer</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="row">
            <div class="course-col">
                <h3>Intermediate</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Sapiente, reiciendis provident magnam modi ea doloribus. 
                Numquam, debitis, veritatis, illo amet recusandae et dolor 
                delectus cupiditate modi nesciunt accusantium perspiciatis ratione.</p>
            </div>
            <div class="course-col">
                <h3>Degree</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Sapiente, reiciendis provident magnam modi ea doloribus. 
                Numquam, debitis, veritatis, illo amet recusandae et dolor 
                delectus cupiditate modi nesciunt accusantium perspiciatis ratione.</p>
            </div>
            <div class="course-col">
                <h3>Post-Graduation</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Sapiente, reiciendis provident magnam modi ea doloribus. 
                Numquam, debitis, veritatis, illo amet recusandae et dolor 
                delectus cupiditate modi nesciunt accusantium perspiciatis ratione.</p>
            </div>
        </div>
    </section>

    <!------ Facilities ------->
    
    <section class="facilities">
        <h1>Our Facilities</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="row">
            <div class="facilities-col">
                <img src="images/library.png">
                <h3>World Class library</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Sapiente, reiciendis provident magnam modi ea doloribus. 
                    Numquam, debitis, veritatis, illo amet recusandae et dolor 
                    delectus cupiditate modi nesciunt accusantium perspiciatis ratione.</p>
            </div>
            <div class="facilities-col">
                <img src="images/basketball.png">
                <h3>Largest Play Ground</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Sapiente, reiciendis provident magnam modi ea doloribus. 
                    Numquam, debitis, veritatis, illo amet recusandae et dolor 
                    delectus cupiditate modi nesciunt accusantium perspiciatis ratione.</p>
            </div>
            <div class="facilities-col">
                <img src="images/cafeteria.png">
                <h3>Tasty and Healthy Food</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Sapiente, reiciendis provident magnam modi ea doloribus. 
                    Numquam, debitis, veritatis, illo amet recusandae et dolor 
                    delectus cupiditate modi nesciunt accusantium perspiciatis ratione.</p>
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