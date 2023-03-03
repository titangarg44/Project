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
        <h1>Contact Us</h1>
    </section>

    <!------ Contact Us ------>

    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109741.02912911311!2d76.69348873658222!3d30.73506264436677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed0be66ec96b%3A0xa5ff67f9527319fe!2sChandigarh!5e0!3m2!1sen!2sin!4v1667208159007!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa-solid fa-house"></i>
                    <span>
                        <h5>Vidya Path Road, Sector 12</h5>
                        <p>Chandigarh, Punjab, India</p>
                    </span>
                    <i class="fa-solid fa-phone"></i>
                    <span>
                        <h5>+91 9851998000</h5>
                        <p>Monday To Friday, 9AM To 5PM</p>
                    </span>
                    <i class="fa-solid fa-envelope"></i>
                    <span>
                        <h5>sandeepgarg0378@gmail.com</h5>
                        <p>Email Us For Your Query</p>
                    </span>
                </div>
            </div>
            <div class="contact-col">
                <form action="form-handler.php" method="post">
                    <input type="text" name="name" placeholder="Enter your name" required>
                    <input type="email" name="email" placeholder="Enter email address" required>
                    <input type="text" name="subject" placeholder="Enter your subject" required>
                    <textarea rows="8" name="message" placeholder="Message" required></textarea>
                    <button type="submit" class="hero-btn red-btn">Send Message</button>
                </form>
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