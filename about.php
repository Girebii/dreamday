
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About DD Events</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap");

:root{
   --main-color:#58c8f4;
   --primary-color: #404068;
   --white:#fff;
   --bg: #f7f0ed;
   --light-black:#333;
   --box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
}

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   transition: .2s linear;
   text-transform: capitalize;
}

html{
   font-size: 62.5%;
   overflow-x: hidden;
   scroll-behavior: smooth;
   scroll-padding-top: 6rem;
}

section{
   padding: 3rem 9%;
}

.heading{
   text-align: center;
   color:var(--primary-color);
   text-transform: uppercase;
   margin-bottom: 4rem;
   font-size: 4rem;
   margin-top: 2rem;
}
    .header{
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 2rem 9%;
  background: var(--white);
  box-shadow: var(--box-shadow);
}

.header .logo img{
   height: 70px;
   width:auto;
   border-radius:20px;
}


.header .navbar a{
   font-size: 1.7rem;
   margin-left: 2rem;
   color:var(--primary-color);
padding-block: 1.6rem;
  position: relative; 
}

.header .navbar a:hover{
   color: var(--main-color);
}

.header .navbar a::before {
   content: "";
   position: absolute;
   height: .3rem;
   border-block: 1px solid var(--main-color);
   bottom: .5rem;
   width: 100%;
   transform: scaleX(0);
   transform-origin: center;
   transition: 0.5s ease;
 }

 .header .navbar a:is(:hover, :focus)::before { 
   transform: scaleX(1); 
 }

.header .icons div{
   height:4.5rem;
   width:4.5rem;
   line-height:4.5rem;
   font-size: 2rem;
   border-radius: .5rem;
   margin-left: .5rem;
   cursor: pointer;
   color:var(--primary-color);
   background: var(--main-color);
   text-align: center;
}
.header .icons div:hover{
   color: var(--main-color);
   background: var(--primary-color);
}

#menu{
   display: none;
}


body {
    font-family: Arial, sans-serif;
    background-color:aliceblue;
    margin: 0;
    padding: 20px;
}
.container {
    max-width: 800px;
    margin: auto;
    margin-top: 150px;
    background:#bb6f9b;
    padding: 50px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
h1 {
    font-family:'Times New Roman', Times, serif;
    font-size: 50px;
    text-align: center;
    color:#ff0000;
}
h2 {
    color:#17a2b8;
    font-size: 30px;
    margin-top: 20px;
    text-align: center;
}
p {
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    line-height: 1.6;
    color:azure;
    font-size: 15px;
}
.contact_info {
    margin-top: 30px;
    padding: 10px;
    border-top: 1px solid #87cefa;
    text-align: center;
}
.social_media {
    margin-top: 10px;
    font-size: 15px;
}
.social_media a {
    margin-right: 15px;
    text-decoration: none;
    color: #007bff;
    font-size:15px;
}

.contact_info strong:hover{
    color:#333;
}

@media (max-width:991px){

html{
   font-size: 55%;
}

.header{
  padding: 2rem 5rem;
}

section {
   padding: 3rem;
 }

#home .home-content{
    background-size: auto;
}
}

@media (max-width: 768px) {

#menu {
  display: inline-block;
}
.header .navbar {
  position: absolute;
  top: 99%;
  left: 0;
  right: 0;
  background: var(--bg);
  clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
}

.header .navbar.active {
  clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
}

.header .navbar a{
   display: flex;
     background:var(--white);
     border-radius: .5rem;
     padding:1.3rem;
     margin:1.3rem;
     font-size: 2rem;
     justify-content: center;
}

.home .content h3{
   font-size: 4rem;
}

}

@media (max-width:450px){

html{
    font-size: 50%;
}
}

</style>
</head>
<body>

    <header class="header">

        <a href="#" class="logo"> <img src="dreamday.png"> </a>
    
        <nav class="navbar">
           <a href="http://localhost/project/homepage.php">home</a>
           <a href="#">about</a>
           <a href="http://localhost/project/services.php">services</a>
           <a href="http://localhost/project/prices.php">pricing</a>
           <a href="http://localhost/project/reviewForm.php">review</a>
           <a href="logout.php"><input type="button" value="Logout" style="height:30px; width:80px; background-color:#58c8f4; border-radius:2px;"></a>

        </nav>
        
        <div class="icons">
            <div class="fas fa-bars" id="menu"></div>
        </div>
    </header>


<div class="container">
    <h1>About Our Services</h1>
    
    <h2>Our Services</h2>
    <p>DREAMDAY EVENTS, we offer a wide range of event planning services tailored to meet your specific needs. Whether you are planning a wedding, corporate event, birthday party, or any other special occasion, our team is here to help you every step of the way.</p>

    <h2>Planning Process</h2>
    <p>Our planning process is designed to ensure that every detail is taken care of. We start with an initial consultation to understand your vision and requirements. From there, we create a customized plan that includes budgeting, venue selection, vendor coordination, and timeline management. Our goal is to make the planning process as seamless and enjoyable as possible.</p>

    <h2>Compliance</h2>
    <p>We prioritize compliance with all local regulations and industry standards. Our team stays updated on the latest guidelines to ensure that your event is not only successful but also safe and compliant with all necessary laws and regulations.</p>

    <h2>Contact for More Details</h2>
    <div class="contact_info">
        <p><strong>Company Name:</strong>DREAM DAY EVENTS</p>
        <p><strong>Phone Number:</strong>080-9384756438</p>
        <p><strong>Address:</strong>SAGAR,MAIN ROAD SHIVMOGGA</p>
        <div class="social_media">
            <strong>Follow Us:</strong>
            <a href="https:Facebook.com" class="fa fa-facebook-f" target="_blank"> Facebook</a>
            <a href="https:Instagram.com" class="fa fa-instagram" target="_blank"> Instagram</a>
            <a href="https:Twitter.com" class="fa fa-twitter" target="_blank"> Twitter</a>
        </div>
    </div>
</div>
<script>
    let navbar = document.querySelector('.header .navbar');
    let menuBtn = document.querySelector('#menu');

    menuBtn.onclick = () =>{
    menuBtn.classList.toggle('fa-times');
    navbar.classList.toggle('active');
    }
</script>
</body>
</html>