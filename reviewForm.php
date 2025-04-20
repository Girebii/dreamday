<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DD Events Review Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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

/* actual Review form start  */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    text-align: center;
    justify-items: center;
}
.review-form {
    width: 100%;
    max-width: 400px;
    background: #91acb8;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    justify-items: center;
    margin-top:150px;
}
.review-form h2 {
    margin-bottom: 15px;
}
input, textarea {
    width: 90%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}
.stars {
    display: flex;
    justify-content: center;
    margin: 10px 0;
}
.stars span {
  font-size: 24px;
  cursor: pointer;
  color: #ccc;
}
.stars span.selected {
  color: gold;
}
button {
    background: #28a745;
    color: #fff;
    border: none;
    padding: 10px;
    cursor: pointer;
    width: 100%;
    border-radius: 5px;
    margin-top: 10px;
}
button:hover {
    background: #218838;
}

.btn{
    margin-top: 30px;
    width:100px;
    height: 100px;
    border-radius: 50%;
    background-color: #5f9ea0;
}
.btn:hover{
    background-color:#2fa8ac;
}
    </style>
</head>
<body>

    <header class="header">

        <a href="#" class="logo"> <img src="dreamday.png"> </a>
    
        <nav class="navbar">
           <a  href="http://localhost/project/homepage.php">home</a>
           <a  href="http://localhost/project/about.php">about</a>
           <a  href="http://localhost/project/services.php">services</a>
           <a  href="http://localhost/project/prices.php">pricing</a>
           <a  href="#">review</a>
           <a href="logout.php"><input type="button" value="Logout" style="height:30px; width:80px; background-color:#58c8f4; border-radius:2px; text-align:center;"></a>

        </nav>
        
        <div class="icons">
            <div class="fas fa-bars" id="menu"></div>
        </div>
    </header>

    <div class="review-form">
    <h2>Write Your Feedback</h2>
    <form id="reviewForm" onsubmit="submitReview(event)">
        <input type="text" id="name" class="name" name="name" placeholder="Your Name" required>
        <input type="email" id="email" class="email" name="email" placeholder="Your Email" required> 
    <div class="stars">
        <span data-rating="1">&#9733;</span>
        <span data-rating="2">&#9733;</span>
        <span data-rating="3">&#9733;</span>
        <span data-rating="4">&#9733;</span>
        <span data-rating="5">&#9733;</span>
    </div>
    <input type="hidden" name="rating" id="rating" required />

        <textarea id="comment" class="comment" rows="4" placeholder="Your Review" required></textarea>
        <button type="submit" class="submit">Submit Review</button>
    </form>
</div>

<div class="check-review">
    <form action="reviews.php">
        <button type="button" onclick="openReviews()" class="btn">View Reviews <br> &#8594 </button>
    </form>
</div>


<script>

document.addEventListener('DOMContentLoaded', () => {
  const stars = document.querySelectorAll('.stars span');
  const ratingInput = document.getElementById('rating');
  const reviewForm = document.getElementById('reviewForm');

  // Rating stars functionality
  stars.forEach((star) => {
    star.addEventListener('click', () => {
      const rating = star.getAttribute('data-rating');
      ratingInput.value = rating;
      stars.forEach(s => s.classList.remove('selected'));
      for (let i = 0; i < rating; i++) {
        stars[i].classList.add('selected');
      }
    });
  });

  // Submit review form via AJAX
  reviewForm.addEventListener('submit', (event) => {
    event.preventDefault(); // Prevent form from submitting traditionally

    // Collect form data
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const comment = document.getElementById('comment').value;
    const rating = ratingInput.value;

    // Create AJAX request to send form data to the server
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "review_php.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Send the form data to PHP
    xhr.send(`name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}&rating=${encodeURIComponent(rating)}&comment=${encodeURIComponent(comment)}`);

    // Handle response from the server
    xhr.onload = function() {
      if (xhr.status == 200) {
        alert(xhr.responseText); // Show success message
        reviewForm.reset(); // Reset the form
        stars.forEach(s => s.classList.remove('selected')); // Clear selected stars
        ratingInput.value = ''; // Clear hidden rating input
      } else {
        alert("Error submitting the review. Status: " + xhr.status);
      }
    };
  });
});

    let navbar = document.querySelector('.header .navbar');
    let menuBtn = document.querySelector('#menu');

    menuBtn.onclick = () => {
        menuBtn.classList.toggle('fa-times');
        navbar.classList.toggle('active');
    }

    function openReviews() {
        window.location.href = "reviews.php";
    }
</script>



</body>
</html>