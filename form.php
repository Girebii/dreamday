
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DD Events Booking Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap");
:root{
   --main-color:#58c8f4;;
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
   height: 80px;
   width: 90px;
   border-radius: 50%;
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

/* form start  */
body{
  justify-items:center;
}
.container {
  background:#add8e6;
  padding: 20px;
  box-shadow:0 0 10px(0, 0, 0, 0.1);
  max-width: 500px;
  margin: auto;
  border-radius: 10px;
  margin-top:160px; 
  margin-bottom: 50px;
}
h1 {
  text-align: center;
  color:#800080
}

.form_group {
  margin-bottom: 40px;
}

label {
  display: block;
  margin-bottom: 6px;
  font-weight: bold;
  color: #555;
}

input,
select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box; /* Ensures padding is included in width */
}

input:focus,
select:focus {
  border-color: #007bff; /* Change border color on focus */
  outline: none; /* Remove default outline */
}

button {
  background-color:  #008000;;;
  color: white;
  border: none;
  padding: 10px;
  border-radius: 4px;
  cursor: pointer;
  width: 100%;
  font-size: 16px;
}

button:hover {
  background-color: #008000; /* Darker green on hover */
}

.error {
  color: red;
  font-size: 0.9em;
  margin-top: 5px;
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

<body align="center">

    <header class="header">

        <a href="#" class="logo"> <img src="logo5.jpeg"> </a>
    
        <nav class="navbar">
           <a href="http://localhost/project/homepage.php">home</a>
           <a href="http://localhost/project/about.php">about</a>
           <a href="http://localhost/project/services.php">services</a>
           <a href="http://localhost/project/price.php">pricing</a>
           <a href="http://localhost/project/reviewForm.php">review</a>
           <a href="#">contact</a>
        </nav>
        
        <div class="icons">
            <div class="fas fa-bars" id="menu"></div>
        </div>
    </header>

  <div class="container" id="form">
    <h1>Reserve Your Dream Day</h1>
    <form id="ContactForm">
      <div class="form_group">
        <label for="firstName">First Name:</label>
        <input type="text" placeholder="Enter your first name" id="firstName" required>
      </div>
      <div class="form_group">
        <label for="lastName">Last Name:</label>
        <input type="text" placeholder="Enter your last name" id="lastName" required>
      </div>
      <div class="form_group">
        <label for="phoneNumber">Phone Number:</label>
        <input type="tel" placeholder="Enter your phone number" id="phoneNumber" requrired>
      </div>
      <div class="form_group">
        <label for="address">Address:</label>
        <input type="text" placeholder="Enter your address" id="address" required>
      </div>
      <div class="form_group">
        <label for="email">Email:</label>
        <input type="email" placeholder="Enter valid email id" id="email" required>
      </div>
      <div class="form_group">
        <label for="eventDate">Event Date:</label>
        <input type="date" id="eventDate" required>
      </div>
      <div class="form_group">
        <label for="eventType">Event Type:</label>
        <select id="eventType" required>
          <option value="">Select Event Type:</option>
          <option value="1">Birthday Event</option>
          <option value="2">Wedding Event</option>
          <option value="3">Pre-wedding Shoot Event</option>
          <option value="4">Naming Ceremony Event</option>
          <option value="5">Wedding Anniversary Event</option>
          <option value="6">Party Events</option>
        </select>
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>
  <script>
    const form = document.getElementById("ContactForm");

    form.addEventListener("submit",(event) =>{
      event.preventDefault();

      const firstName = document.getElementById("firstName").value;
      const lastName = document.getElementById("lastName").value;
      const phoneNumber = document.getElementById("phoneNumber").value;
      const address = document.getElementById("address").value;
      const email = document.getElementById("email").value;
      const eventDate = document.getElementById("eventDate").value;
      const eventType = document.getElementById("eventType").value;
      const formData = {
        firstName : firstName,
        lastName: lastName,
        phoneNumber: phoneNumber,
        address: address,
        email: email,
        eventDate: eventDate,
        eventType: eventType,
      };

      if (
        firstName !== "" &&
        lastName !== "" &&
        phoneNumber !== "" &&
        address !== "" &&
        email !== "" &&
        eventDate !== "" &&
        eventType !== ""
      ) {
        alert("Message sent successfully!");
        form.reset();
      } else {
        alert("please enter each details correctly");
      }
    });

    let navbar = document.querySelector('.header .navbar');
    let menuBtn = document.querySelector('#menu');

    menuBtn.onclick = () =>{
    menuBtn.classList.toggle('fa-times');
    navbar.classList.toggle('active');
    }
  </script>
</body>

</html>