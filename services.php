<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DD Events Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap");
:root{
   --main-color:#58c8f4;;
   --primary-color: #404068;
   --white:#fff;
   --bg: #f7f0ed;
   --light-black:#333;
   --box-shadow: 0 .5rem 1rem rgba(0,0,0,.2);
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
   font-size: 70.5%;
   overflow-x: hidden;
   scroll-behavior: smooth;
   scroll-padding-top: 6rem;
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
  padding: 1.5rem 9%;
  background: var(--white);
  box-shadow: var(--box-shadow);
}

.header .logo img{
   height: 70px;
   width:auto;
   border-radius:20px;
}

.header .navbar a{
    font-size: 1.5rem;
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
  padding:1.2rem;
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

/* img gallery */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 2rem 0;
}

header p {
    margin: 0.5rem 0;
}

#gallery {
    margin-top:50px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 2rem;  
    
}

.gallery-item {
    height: 400px;
    position: relative;
    max-width: 300px;
    margin: 10px;
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    background-size: cover;
}

.gallery-item img {
    width: 100%;
    height:auto ;
    transition: transform 0.3s ease;
    object-fit:cover;
}

.gallery-item:hover img {
    transform: scale(1.1);
}

.overlay {
    position: absolute;
    bottom: 0;
    background: rgba(0, 0, 0, 0.6);
    color: white;
    width: 100%;
    text-align: center;
    padding: 10px;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.gallery-item:hover .overlay {
    opacity: 1;
}

.overlay h2, .overlay p {
    margin: 5px;
}


    </style>
</head>
<body >
    <header class="header">

    <a href="#" class="logo"> <img src="dreamday.png"> </a>

    <nav class="navbar">
       <a  href="homepage.php">home</a>
       <a  href="about.php">about</a>
       <a  href="#">services</a>
       <a  href="prices.php">pricing</a>
       <a  href="reviewForm.php">review</a>
       <a href="logout.php"><input type="button" value="Logout" style="height:30px; width:80px; background-color:#58c8f4; border-radius:2px; text-align:center;"></a>

    </nav>
    
    <div class="icons">
        <div class="fas fa-bars" id="menu"></div>
    </div>
</header>
 
    <header>
        <h1 id="services">OUR <span>SERVICES</span></h1>
    </header>
    <section id="gallery">
        <div class="gallery-item">
            <img src="img8.jpg" alt="Wedding Event">
            <div class="overlay">
                <h2>Wedding Events</h2>
                <p>Dream weddings made perfect.</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="crprt.jpg" alt="Corporate Event">
            <div class="overlay">
                <h2>Corporate Events</h2>
                <p>Professional and seamless planning.</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="birthday.jpg" alt="Birthday Party">
            <div class="overlay">
                <h2>Birthday Parties</h2>
                <p>Make birthdays unforgettable.</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="concerts.jpg" alt="Concert Event">
            <div class="overlay">
                <h2>Concerts</h2>
                <p>Music and vibes like never before.</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="exhibition.jpg" alt="Exhibition Event">
            <div class="overlay">
                <h2>Exhibitions</h2>
                <p>Showcase your creativity.</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="nmg ceremony.jpg" alt="Exhibition Event">
            <div class="overlay">
                <h2>Naming Ceremony</h2>
                <p>Celebrating New Beginning.</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="photography.jpg" alt="Concert Event">
            <div class="overlay">
                <h2>Photography</h2>
                <p>Capturing Moments that last a Lifetime</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="food (2).jpg" alt="Exhibition Event">
            <div class="overlay">
                <h2>Food Services</h2>
                <p>Crafted Events, Delicious Memories</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="decoration.jpg" alt="Exhibition Event">
            <div class="overlay">
                <h2>Decoration</h2>
                <p>Where Dream Take Shape,Events Shine.</p>
            </div>
        </div>
    </section>


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