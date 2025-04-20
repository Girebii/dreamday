<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management Pricing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap");
    /* body{
        background-image: "C:\Users\lenovo\Pictures\Saved Pictures\WhatsApp Image 2025-03-14 at 14.22.43_a20cc007.jpg";
    } */

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


        .pricing-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
            margin-top: 120px;
            background-color:#f7f0ed;
        }

        .pricing-card {
            border: 1px solid red;
            border-radius: 20px;
            margin: 20px;
            padding: 20px;
            width: 300px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .pricing-card:hover {
            transform: translateY(-5px);
        }

        .pricing-card h2 {
            margin-bottom: 10px;
        }

        .pricing-card .price {
            font-size: 2em;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 15px;
        }

        .pricing-card ul {
            list-style-type:none;
            padding: 0;
            margin-bottom: 20px;
        }

        .pricing-card ul li {
            font-style:italic;
            font-size:xx-small;
            padding: 8px 0;
            border-bottom:2px solid #eee;
        }

        .pricing-card ul li:last-child {
            border-bottom: none;
        }

        .pricing-card .btn {
            background-color:#007bff;
            color:white ;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .checkout-button-container {
            text-align: center;
            margin:50px 0 50px;
            
        }
        .checkout-button-container #checkout-btn{
           
            border-radius:5px;
        }

        #booking-form {
            display: none;
            /* margin-bottom: 40px; */
            margin: 20px auto;
            width: 300px;
            padding: 20px;
            border: 1px solid black;
            border-radius: 12px;
            background-color:#add8e6 ;
        }
        #booking-form h1{
            color:#800080
        }
        #booking-form label, #booking-form input, #booking-form select {
            display:block;
            margin-bottom: 8px;
            width: calc(100% - 22px);
            padding:8px;
            box-sizing:border-box;
         /* #booking-form label{
            font-size:10px;
         } */
        }
        div{
            text-align: center;
        }
         #booking-form button {
   
            background-color: #008000;
            color:white;
            padding: 10px 20px;
            border:#333;
            border-radius: 10px;
            cursor: pointer;
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
.pricing-card, #booking-form {
        width: 90%;
}
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
           <a  href="http://localhost/project/homepage.php">home</a>
           <a  href="http://localhost/project/about.php">about</a>
           <a  href="http://localhost/project/services.php">services</a>
           <a  href="#">pricing</a>
           <a  href="http://localhost/project/reviewForm.php">reviews</a>
           <a href="logout.php"><input type="button" value="Logout" style="height:30px; width:80px; background-color:#58c8f4; border-radius:2px;"></a>
        </nav>
        
        <div class="icons">
            <div class="fas fa-bars" id="menu"></div>
        </div>
    </header>

    <div class="pricing-container">
        <div class="pricing-card" data-plan="Basic Events" data-price="299" data-event-types='["Birthday Event","Wedding Event","Pre-wedding Shoot Event","Naming Ceremony Event","Party Events","Corporate Event","Exhibition Event"]'>
            <h2>Basic Events</h2>
            <div class="price">$299</div>
            <ul>
                <li>Birthday Event</li>
                 <li>Wedding Event</li>
                <li>Pre-wedding Shoot Event</li>
                <li>Naming Ceremony Event</li>
                <li>Wedding Anniversary Event</li>
                <li>Party Events</li>
                <li>Corporate Event</li>
                <li>Exhibition Event</li>
            </ul>
            <button class="btn select-plan">Select Basic</button>
        </div>

        <div class="pricing-card" data-plan="Standard Events" data-price="799" data-event-types='["Birthday Event","Wedding Event","Pre-wedding Shoot Event","Naming Ceremony Event","Party Events","Corporate Event","Exhibition Event"]'>
            <h2>Standard Events</h2>
            <div class="price">$799</div>
            <ul>
                <li>Birthday Event</li>
                 <li>Wedding Event</li>
                <li>Pre-wedding Shoot Event</li>
                <li>Naming Ceremony Event</li>
                <li>Wedding Anniversary Event</li>
                <li>Party Events</li>
                <li>Corporate Event</li>
                <li>Exhibition Event</li>
            </ul>
            <button class="btn select-plan">Select Standard</button>
        </div><div class="pricing-card" data-plan="Premium Events" data-price="1499" data-event-types='["Birthday Event","Wedding Event","Pre-wedding Shoot Event","Naming Ceremony Event","Party Events","Corporate Event","Exhibition Event"]'>
            <h2>Premium Events</h2>
            <div class="price">$1499</div>
            <ul>
                <li>Birthday Event</li>
                 <li>Wedding Event</li>
                <li>Pre-wedding Shoot Event</li>
                <li>Naming Ceremony Event</li>
                <li>Wedding Anniversary Event</li>
                <li>Party Events</li>
                <li>Corporate Event</li>
                <li>Exhibition Event</li>
            </ul>
            <button class="btn select-plan">Select Premium</button>
        </div>
    </div>
    <div class="checkout-button-container">
        <button id="checkout-btn" class="btn" id="#" disabled>Proceed to Checkout</button>
    </div>

    <form id="booking-form" action="price_db.php" method="post">
        <h1 align="center">RESERVE YOUR DREAM DAY</h1>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="date">Date:</label>
        <input type="date" id="date" name="event_date" required>
        
        <label for="time">Time:</label>
        <input type="time" id="time" name="event_time" required>

        <label for="place">Place:</label>
        <input type="text" id="place" name="place" required>

        <label for="package">Package:</label>
        <input type="text" id="package" name="package" readonly>

        <label for="eventType">Event Type:</label>
        <select id="eventType" name="event_type" required>
            <option value="">Select Event Type</option>
        </select>
        <div >
        <button type="submit">Submit Booking</button>
    </div>
    </form>
<script>
    let selectedPlan = null;
    let selectedPrice = 0;
    let selectedEventTypes = null;
    
    const planButtons = document.querySelectorAll('.select-plan');
    const checkoutButton = document.getElementById('checkout-btn');
    const bookingForm = document.getElementById('booking-form');
    const packageInput = document.getElementById('package');
    const eventTypeSelect = document.getElementById('eventType');
    
    planButtons.forEach(button => {
        button.addEventListener('click', function() {
            const card = this.closest('.pricing-card');
            selectedPlan = card.dataset.plan;
            selectedPrice = parseInt(card.dataset.price);
            selectedEventTypes = JSON.parse(card.dataset.eventTypes);
            alert(`Plan ${selectedPlan} selected.`); 
            checkoutButton.disabled = false;
        });
    });
    
    // Set the package value when a plan is selected
    checkoutButton.addEventListener('click', function() {
    if (selectedPlan) {
        bookingForm.style.display = 'block';
        packageInput.value = selectedPlan;  // Set the selected package
        eventTypeSelect.innerHTML = '<option value="">Select Event Type</option>';
        selectedEventTypes.forEach(type => {
            const option = document.createElement('option');
            option.value = type;
            option.textContent = type;
            eventTypeSelect.appendChild(option);
        });
    } else {
        alert("Please select a plan before proceeding to checkout.");
    }
});

    bookingForm.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission (comment this out when ready to submit)

    const name = document.getElementById('name').value;
    const date = document.getElementById('date').value;
    const time = document.getElementById('time').value;
    const place = document.getElementById('place').value;
    const eventType = document.getElementById('eventType').value;
    
    // Validate that all fields are filled
    if (!name || !date || !time || !place || !eventType) {
        alert("Please fill in all fields.");
        return;
    }

    // Display an alert with the user input
    alert(`Your order will be confirmed. \n Name: ${name},\n Date: ${date},\n Time: ${time},\n Place: ${place},\n Package: ${selectedPlan},\n Event Type: ${eventType}`);

    // Uncomment the following lines to actually submit the form:
    bookingForm.submit(); // Submit the form
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