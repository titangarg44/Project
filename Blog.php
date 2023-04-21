<?php
error_reporting(E_ERROR | E_PARSE);
       
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "comment_system_php";
    
    // Create connection
    $conn = mysqli_connect("localhost","root","","comment_system_php");
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
     
    if(isset($_POST['post_comment'])){
        $name = $_POST['name'];
        $message = $_POST['message'];

        // $sql = "INSERT INTO demo (name,message)
         $sql = "INSERT INTO `demo` ( `name`, `message`) VALUES ('$name','$message')";
         //echo $sql;
         //exit(0);
         mysqli_query($conn, $sql) or die(mysqli_error($conn));
   } 
?>
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
        <h1>Our Certificate & Online Program For 2023</h1>
    </section>

    <!------ Blog Page Content ------>

    <section class="blog-content">
        <div class="row">
            <div class="blog-left">
                <img src="images/certificate.jpg">
                <h2>Our Certificate & Online Program For 2023</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Repellendus at architecto quae pariatur nulla optio possimus 
                itaque quam!Ex perspiciatis odio ipsa eos soluta iure suscipit
                repellat dicta consectetur illo.</p>
                <br>
                <p>lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Repellendus at architecto quae pariatur nulla optio possimus 
                itaque quam!Ex perspiciatis odio ipsa eos soluta iure suscipit
                repellat dicta consectetur illo. ipsum dolor, sit amet consectetur adipisicing elit.
                Repellendus at architecto quae pariatur nulla optio possimus 
                itaque quam!Ex perspiciatis odio ipsa eos soluta iure suscipit
                repellat dicta consectetur illo.</p>
                <br>
                <p> ipsum dolor, sit amet consectetur adipisicing elit.
                Repellendus at architecto quae pariatur nulla optio possimus 
                itaque quam!Ex perspiciatis odio ipsa eos soluta iure suscipit
                repellat dicta consectetur illo. ipsum dolor, sit amet consectetur adipisicing elit.
                Repellendus at architecto quae pariatur nulla optio possimus 
                itaque quam!Ex perspiciatis odio ipsa eos soluta iure suscipit
                repellat dicta consectetur illo.</p>
                <br>
                <p> ipsum dolor, sit amet consectetur adipisicing elit.
                Repellendus at architecto quae pariatur nulla optio possimus 
                itaque quam!Ex perspiciatis odio ipsa eos soluta iure suscipit
                repellat dicta consectetur illo.</p>

                <div class="comment-box">
                    <h3>Leave a comment</h3>
                    <form class="comment-form" action="blog.php" method="POST">
                        <input type="text" name="name" class="name" placeholder="Enter Name">
                        <textarea rows="5" name="message" class="message" placeholder="Your Comment"></textarea>
                        <button type="submit" name="post_comment" class="hero-btn red-btn">POST COMMENT</button>
                    </form>
                </div>
                <div class="mysql_comment">
                 <!--Write php here-->
                 <?php
                 $sql = "SELECT * FROM `demo`";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)){   
                ?>
                <p id="comment_name"><?php echo $row['name'];?></p>
                <p id="comment_message"><?php echo $row['message'];?><p>
                <?php }}?>    
                </div>
            </div>
            <div class="blog-right">
                <h3>Post Categories</h3>
                <div>
                    <span>Business Analytics</span>
                    <span>21</span>
                </div>
                <div>
                    <span>Data Science</span>
                    <span>28</span>
                </div>
                <div>
                    <span>machine Learning</span>
                    <span>15</span>
                </div>
                <div>
                    <span>Computer Science</span>
                    <span>34</span>
                </div>
                <div>
                    <span>AutoCAD</span>
                    <span>42</span>
                </div>
                <div>
                    <span>Journalism</span>
                    <span>22</span>
                </div>
                <div>
                    <span>Commerce</span>
                    <span>30</span>
                </div>
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

<!-- INSERT INTO `demo` (`id`, `name`, `message`) VALUES ('1', 'gurvir singh', 'hlo this should work properly\r\n'); -->