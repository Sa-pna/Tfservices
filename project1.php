<!DOCTYPE html>
<html>
<title>Online Tiffin System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">
  <style>
body {font-family: Arial, Helvetica, sans-serif;}
.w3-display-container{
  background-image:url(im3.jpg); 
  background-repeat: no-repeat;
}



/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  font-weight: bolder;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 20px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  top: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=email], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=email]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
input[type=date]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
.clm{
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}
input[type=radio]{
  width: 50%;
  padding: 2px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 10px;
  resize: vertical;

}
input[type=radio1]{
  width: 50%;
  padding: 2px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 10px;
  resize: vertical;

}



@media only screen and (max-width: 500px) {
  .columns {
    width: 100%;
  }
}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
</style>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>HOME</a>
  <a href="#pricing" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Meals</a>
  <a href="#signup" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Sign Up</a>
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
  <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Log Out</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Team</a>
    <a href="#signup" class="w3-bar-item w3-button">Sign Up</a>
    <a href="#pricing" class="w3-bar-item w3-button">Meals</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="logout.php" class="w3-bar-item w3-button">Log Out</a>
  </div>
</div>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
<img src="\C:\xampp\htdocs\im3.jpg" alt="boat" style="width:100%;min-height:650px;max-height:800px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Go To W3.CSS">Order Meals</button>
  </div>
</div>

<!-- Modal -->

<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-teal w3-display-container"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      <div class="custom-select" style="width:200px; height: 400px">
    <form action="ordermeals1.php" method="POST">
        <h1>Select Days</h1>
      <input type="radio" id="male" name="days" <?php if (isset($days) && $days=="1day/Trial") echo "checked";?> value="1day/Trial"><label for="days">1Day/Trial</label>
      <input type="radio" id="male" name="days" <?php if (isset($days) && $days=="3days") echo "checked";?> value="3days"><label for="days">3Days</label>
      <input type="radio" id="female" name="days" <?php if (isset($days) && $days=="1week") echo "checked";?> value="1week"><label for="days">1week</label>
      <input type="radio" id="female" name="days" <?php if (isset($days) && $days=="1Month") echo "checked";?> value="1Month"><label for="days">1Month</label><br>
     <label>Select Quantity:</label><br>
     <select name="quantity">
    <option value="0" type="select" name="quantity" >Quantity</option>
    <option  value="1" type="select" name="quantity">1</option>
    <option value="2" type="select" name="quantity">2</option>
    <option value="3" type="select"name="quantity">4</option>
    <option value="4" type="select" name="quantity">5</option>
    <option value="5" type="select" name="quantity">6</option>
    <option value="6" type="select" name="quantity">7</option>
    <option value="7" type="select" name="quantity">8</option>
    <option value="8" type="select" name="quantity">9</option>
    <option value="9" type="select" name="quantity">10</option>
    <option value="10" type="select" name="quantity">11</option>

    </select><br>
    <label>Select Tiffin:</label><br>
    <select name="tiffin">
    <option value="Basic Tiffin" type="select1" name="tiffin">BASIC Tiffin</option>
    <option value="Mini Tiffin"  type="select1" name="tiffin">MINI Tiffin</option>
    <option value="High Tiffin"  type="select1" name="tiffin">HIGH Tiffin</option>
  </select><br>
  <label>Select Time:</label><br>
  <select name="time">
    <option value="Morning" type="text" name="time">Morning</option>
    <option value="Evening" name="time">Evening</option>
    <option value="Both" name="time">Both</option>
  </select><br>
  <label for="date"><b>Todays date:</b></label>
    <input type="date" name="today" min="Todays" max="2020-12-14" value="<?php echo date('Y-m-d'); ?>" required/>
    <button type="submit" name="submit" value="Update" class="btn">Submit</button>
    <button type="submit" name="submit" value="Update" class="btn">Order Details</button>
  </form>
</div>
</header>
</div>
</div>

<!-- Container -->
<div class="w3-container" style="position:relative">
  <a onclick="w3_open()" class="w3-button w3-xlarge w3-circle w3-teal"
  style="position:absolute;top:-28px;right:24px">+</a>
</div>

<!-- Pricing Row -->
<div class="w3-row-padding w3-center w3-padding-64" id="pricing"  style="background-color: grey">
    <h2>MEALS</h2>
    <p>Choose Meals that fits your needs.</p><br>
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Basic</p>
        </li>
        <li class="w3-padding-16">4 Chapati</li>
        <li class="w3-padding-16">Seasonal Veg</li>
        <li class="w3-padding-16">Dal</li>
        <li class="w3-padding-16">Rice</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">30Rs.</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i><a href="basicthali.php">Add</a></button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme-l2">
          <p class="w3-xlarge">Mini</p>
        </li>
        <li class="w3-padding-16">4 Chapati</li>
        <li class="w3-padding-16">Seasonal Veg</li>
        <li class="w3-padding-16">Dal</li>
        <li class="w3-padding-16">Rice</li>
        <li class="w3-padding-16">Salad</li>
        <li class="w3-padding-16">Chutney</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">45Rs.</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i><a href="minithali.php">Add</a></button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">High</p>
        </li>
        <li class="w3-padding-16">4 Chapati</li>
        <li class="w3-padding-16">Seasonal Veg</li>
        <li class="w3-padding-16">Dal</li>
        <li class="w3-padding-16">Rice</li>
        <li class="w3-padding-16">Salad</li>
        <li class="w3-padding-16">Chutney</li>
        <li class="w3-padding-16">Rayta</li>
        <li class="w3-padding-16">Sweet Dish</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">60Rs.</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i><a href="highthali.php">Add</a></button>
        </li>
      </ul>
    </div>
</div>

<!-- Work Row -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="signup" >
  <div class="w3-row"  style="background-color: grey">
    <div class="w3-col m5" >
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar"> Sign Up</span></div>
      </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="signup.php" method="post">
      <div class="w3-section">      
        <label>Username</label>
        <input class="w3-input" type="text" name="username" required>
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="email" name="email" required>
      </div>
      <div class="w3-section">
      <label for="password">password</label>
      <input type="password" class="w3-input" type="password" name="psw" required>
      </div>
      <div class="w3-section">      
        <label>Mobileno</label>
        <input class="w3-input" type="number" name="mobileno" required>
      </div>
      <div class="w3-section">      
        <label>Address</label>
        <input class="w3-input" type="address" name="address" required>
      </div>  
      <button type="submit"  name="submit" class="w3-button w3-right w3-theme" >Submit</button>
  
      </form >
    </div>
  </div>
</div>

<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row"  style="background-color: grey">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="contactcont.php" target="_blank" method="post">
      <div class="w3-section">      
        <label>Name</label>
        <input class="w3-input" type="text" name="name" required>
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="text" name="email" required>
      </div>
      <div class="w3-section">      
        <label>Message</label>
        <input class="w3-input" type="text" name="message" required>
      </div>  
      <button type="submit" name="submit" class="w3-button w3-right w3-theme">Send</button>
      </form>
    </div>
  </div>
</div>

<!-- Log In-->

<button class="open-button" onclick="openForm()">Log In</button>

<div class="form-popup" id="myForm">
  <form action="login3.php"  method="post" name="login" class="form-container">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" class="form-control" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password"  class="form-control" required>

    <button type="submit" name ="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>


<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

<!-- Image of location/map -->
<img src="C\xampp\htdocs\im3.jpg" class="w3-image w3-greyscale-min" style="width:100%;">

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">tiffin system</a></p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

<script>
// Script for side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "300px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}

// Close side navigation
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
