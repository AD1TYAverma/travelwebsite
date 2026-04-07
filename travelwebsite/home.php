<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>


    <!-- font aesome cdn -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <!-- header section start  -->
    <section class="header">
        <a href="home.php" class="logo">travel.</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

        <!-- <div class="theme-buttons">
            <button onclick="setTheme('light')">Light</button>
            <button onclick="setTheme('dark')">Dark</button>
            <button onclick="setTheme('blue')">Dark Blue</button>
        </div> -->
    </section>
   <!-- header section end  -->




   <!-- home section start -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url('./images/nature1.jpg') no-repeat;">
                    <div class="content" >
                        <span>explore, discover, travel</span>
                        <h3>travel arround the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url('./images/naute2.jpg') no-repeat;">
                    <div class="content" >
                        <span>explore, discover, travel</span>
                        <h3>dicover new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url('./images/nature3.jpg') no-repeat;">
                    <div class="content" >
                        <span>explore, discover, travel</span>
                        <h3>make your tour worldwide</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
   <!-- home section end -->




   <!-- services section start -->
    <section class="services">
        <h3 class="heading-title">our services</h3>
        <div class="box-container">
            <div class="box">
                <img src="./images/adventure.jpg" alt="">
                <h3>adventure</h3>
            </div>
             <div class="box">
                <img src="./images/ture_guide.jpg" alt="">
                <h3>tour guids</h3>
            </div>
             <div class="box">
                <img src="./images/tracking.jpg" alt="">
                <h3>trekking</h3>
            </div>
             <div class="box">
                <img src="./images/comp_fire.jpg" alt="">
                <h3>camp fire</h3>
            </div>
             <div class="box">
                <img src="./images/offroading.jpg" alt="" >
                <h3>off roading</h3>
            </div>
             <div class="box">
                <img src="./images/camping.jpg" alt="">
                <h3>camping</h3>
            </div>
        </div>
    </section>
   <!-- services section end -->




<!-- home about section start -->
 <section class="home-about">
    <div class="image">
        <img src="./images/about1.jpg" class="special-img" alt="">
    </div>
    <div class="content">
        <h3>about us</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi, magnam. Delectus culpa voluptates assumenda rem aspernatur facilis tenetur at sed modi ducimus, aperiam, consequuntur error perspiciatis cupiditate suscipit? Dicta, laboriosam!</p>
        <a href="about.php" class="btn">read more   </a>
    </div>
 </section>
<!-- home about section end -->




<!-- home package section start -->
 <section class="home-package">
    <h1 class="heading-title">our package</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="./images/about1.jpg" class="special-img" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
         <div class="box">
            <div class="image">
                <img src="./images/about1.jpg" class="special-img" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
         <div class="box">
            <div class="image">
                <img src="./images/about1.jpg" class="special-img" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

    </div>
    <div class="load-more"><a href="package.php" class="btn">load more</a></div>
 </section>
<!-- home package section end -->


<!-- home offer section start -->
<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, accusantium dolore! Nam est hic explicabo autem temporibus voluptatem nostrum, dolorum ratione iusto fugiat quas adipisci provident, corporis commodi non placeat!</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>
<!-- home offer section end -->



<!-- footer section start -->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i>About us</a>
            <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
        </div>
        <div class="box">
            <h3>contact information</h3>
            <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
            <a href="#"><i class="fas fa-phone"></i>+111-456-0000</a>
            <a href="#"><i class="fas fa-envelope"></i>aditya@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i>lucknow, india</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook"></i>facebook</a>
            <a href="#"><i class="fab fa-twitter"></i>twitter</a>
            <a href="#"><i class="fab fa-instagram"></i>instgram</a>
            <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
        </div>
    </div>
    <div class="credit">created by <span>aditya verma</span> | all right reserved!</div>
</section>

<!-- footer section end -->

<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>


<script src="js/script.js"></script>
</body>
</html>