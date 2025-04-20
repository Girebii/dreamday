 <?php
session_start();
include("connect.php");
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DD Events</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- swiper link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <header class="header">

        <a href="#" class="logo"> <img src="dreamday.png"> </a>
    
        <nav class="navbar">
           <a data-aos="zoom-in-left" data-aos-delay="300" href="#home">home</a>
           <a data-aos="zoom-in-left" data-aos-delay="450" href="http://localhost/project/about.php">about</a>
           <a data-aos="zoom-in-left" data-aos-delay="600" href="http://localhost/project/services.php">services</a>
           <a data-aos="zoom-in-left" data-aos-delay="750" href="http://localhost/project/prices.php">pricing</a>
           <a data-aos="zoom-in-left" data-aos-delay="1050" href="http://localhost/project/reviewForm.php">review</a>
          
          <a href="logout.php"><input type="button" value="Logout" style="height:30px; width:80px; background-color:#58c8f4; border-radius:2px;"></a>
       
        </nav>
         

        <div class="icons">
            <div data-aos="zoom-in-left" data-aos-delay="1500" class="fas fa-bars" id="menu"></div>
        </div>
    </header>

    <!-- Home Section -->
    <div class="wallpaper">
         <img src="homewall.jpg" alt=" " style="object-fit:cover; height: 500px; width: 100%; margin-top:100px;"> 
    </div>

    <section id="home" class="home-container">
        <div class="home-content">
        <h1>Welcome to <span><b>DreamDAY</b></span> Event Planners</h1><br>
        <p style="color:black;">Plan your next big event with us!!</p>
        <p style="color:black;">Don't Jump into an event without planning first, you can plan with them 
            because It helps to make your day as like your DreamDay!!!  </p>
        <form action="prices.php"><button onclick="contactForm()" class="btn">Book Here!</button></form>
        </div>
    </section>
        <!-- images conatiner  -->
        <div class="container">
        <div class="slide-container">
            <div class="slide-image"><img src="birthday.jpg"></div>
            <div class="slide-image"><img src="img4.jpg" ></div>
            <div class="slide-image"><img src="img5.jpg" ></div>
            <div class="slide-image"><img src="img6.jpg" ></div>
            <div class="slide-image"><img src="img7.jpg" ></div>
            <div class="slide-image"><img src="img9.jpg" ></div>
            <div class="slide-image"><img src="img8.jpg" ></div>
            <div class="slide-image"><img src="decoration.jpg" ></div>
            <div class="slide-image"><img src="marriage.jpg" ></div>
            <div class="slide-image"><img src="img4.jpg" ></div>
            <div class="slide-image"><img src="img5.jpg" ></div>
            <div class="slide-image"><img src="img6.jpg" ></div>
            <div class="slide-image"><img src="img7.jpg" ></div>
        </div>
    </div>
 <!-- footer section  -->
 <section class="footer">

    <div class="box-container">

      <div class="box" data-aos="fade-up">
        <h3>DREAMDAY</h3>
        <p>We are a team of experienced wedding planners dedicated to creating unforgettable Events for our clients.</p>
      </div>

      <div class="box" data-aos="fade-up">
        <h3>Contact Us</h3>
        <a href="#"><i class="fas fa-phone"></i> 123-595-5555</a>
        <a href="#"><i class="fas fa-phone"></i> 555-555-5555</a>
        <a href="#"><i class="fas fa-envelope"></i> info@weddingplanner.com</a>
        <a href="#"><i class="fas fa-map"></i> 123 Main St, Anytown USA</a>
      </div>

      <div class="box" data-aos="fade-up">
        <h3>Follow Us</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
      </div>
    </div>

    <div class="credit"> &copy; copyright @ 2023 by <span>DREAM DAY</span> </div>

  </footer>

    <script >

    let navbar = document.querySelector('.header .navbar');
    let menuBtn = document.querySelector('#menu');

    menuBtn.onclick = () =>{
    menuBtn.classList.toggle('fa-times');
    navbar.classList.toggle('active');
    }
        function contactForm(){
      window.location.href = "http://localhost/project/price.php";
     }

    </script>
</body>
</html>


