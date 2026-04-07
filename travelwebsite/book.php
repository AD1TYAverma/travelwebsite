<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

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

    </section>
   <!-- header section end  -->

<div class="heading" style="background: url(images/footer-bg.jpg) no-repeat;">
    <h1>book now</h1>
</div>



<!-- booking section star -->
 <section class="booking">
    <h1 class="heading-title">book your trip</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>Name : </span>
                <input type="text"placeholder="Enter Your Name" name="name">
            </div>
            <div class="inputBox">
                <span>Email : </span>
                <input type="email"placeholder="Enter Your Email" name="email">
            </div>
            <div class="inputBox">
                <span>Phone : </span>
                <input type="number"placeholder="Enter Your Number" name="phone">
            </div>
            <div class="inputBox">
                <span>Address : </span>
                <input type="text"placeholder="Enter Your Address" name="address">
                 <!-- <textarea name="address" placeholder="Enter Your Address"  id=""></textarea> -->
            </div>
            <div class="inputBox">
                <span>Where to Go : </span>
                <input type="text"placeholder="Place You Want To Visit" name="location">
            </div>
            <div class="inputBox">
                <span>How Many : </span>
                <input type="number"placeholder="How Many Guest" name="guests">
            </div>
            <div class="inputBox">
                <span>Arrivals : </span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
                <span>Leaving : </span>
                <input type="date" name="leaving">
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">
    </form>
 </section>
<!-- booking section end-->




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