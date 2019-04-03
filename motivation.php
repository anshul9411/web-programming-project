<!DOCTYPE html>
<html lang="en">
<title>Saphalata</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
header.w3-container.w3-top.w3-hide-large.w3-red.w3-xlarge.w3-padding{background-color: #4ae54a !important}
a.w3-button.w3-red.w3-margin-right{background-color: #4ae54a !important}
nav#mySidebar{background-color: #4ae54a !important}
.w3-text-red, .w3-hover-text-red:hover{color: #4ae54a !important}
.w3-red, .w3-hover-red:hover{background-color: #4ae54a !important}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}


.form-inline {  
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline label {
  margin: 5px 10px 5px 0;
}

.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

.form-inline button {
  padding: 10px 20px;
  background-color: #4ae54a;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
}

.form-inline button:hover {
  background-color: #000000;
}

@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }
  
  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
  * {box-sizing: border-box;}
}


</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Saphalata</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Quotes</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Motivation</a> 
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Articles</a> 
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Videos</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
    <!--<a href="#login" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Log In</a> -->
    <a href="signup.php" onclick="w3_close_php()" class="w3-bar-item w3-button w3-hover-white">Sign Up</a>
    <a href="checkout1.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Book Appointment</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Saphalata</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">
  <div class="w3-container" style="margin-top:80px">
    <form class="form-inline " name="lform" method="POST" action="motInsert2.php" onsubmit="return validateForm()">
      <label >Contact Number:</label>
      <input type="text" id="number" placeholder="Enter Contact Number" name="number" >
      <label >Password:</label>
      <input type="password" id="pwd" placeholder="Enter password" name="pswd" >
      <button type="submit">Submit</button>
      </form>
  </div>



  <!-- Header -->
  <div class="w3-container" style="margin-top:30px" id="showcase">
    <h1 class="w3-jumbo"><b>Saphalata</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Quotes.</b></h1>
    <hr style="width:50px;border:5px solid #4ae54a" class="w3-round">
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="Quotefancy-766-3840x2160.jpg" style="width:100%" onclick="onClick(this)" alt="There are only ways to live your life. One is as though nothing is a miracle. The other is as though everything is a miracle">
      <img src="Quotefancy-867-3840x2160.jpg" style="width:100%" onclick="onClick(this)" alt="Life shrinks or expands in proportion to one's courage.">
      <img src="Quotefancy-2085-3840x2160.jpg" style="width:100%" onclick="onClick(this)" alt="If you love life, don't waste time, for time is what life is made up of.">
    </div>

    <div class="w3-half">
      <img src="Quotefancy-2936-3840x2160.jpg" style="width:100%" onclick="onClick(this)" alt="When we strive to become better than we are,everything around us becomes better,too.">
      <img src="Quotefancy-17003-3840x2160.jpg" style="width:100%" onclick="onClick(this)" alt="Life begins at the end of your comfort zone">
      <img src="Quotefancy-18771-3840x2160.jpg" style="width:100%" onclick="onClick(this)" alt="If you want something you have never had, you must be willing to do something you have never done.">
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Motivation.</b></h1>
    <hr style="width:50px;border:5px solid #4ae54a" class="w3-round">
    <p>Self motivation is a must. If ever it doesn't come from inside, you should work on loving yourself first and then your life. You should believe that this life that you've got, people out there crave for it. 
      You are one of the luckiest to post it here and I am another who's answering. How about them who can't even ask anyone, who're so deprived of social, mental and emotional support. Aren't you glad that you got
      this life and you can take it anywhere you want?</p>
    <p>Never compare your life with someone who's already succeeded. Better see others, who just like you, are willing to give up for no reasons. Everyone works to get name and fame. Nothing comes easy. 
      If you're disoriented, take your time, think about the things you badly want in your life. Be inspired by small indifferent acts. Feel proud on yourself for maybe very little achievements. 
      Value yourself. And start feeling hungry for a fab life. Start working. Or just stay strong all through. Never let yourself or anyone else down.
    </p>
    <p>Your parents brought you up, make them feel you're worth it.</p>
  </div>
  
  <!-- Articles -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Articles.</b></h1>
    <hr style="width:50px;border:5px solid #4ae54a" class="w3-round">
    <ol>
      <li><p><a href="AverageDoesn’tMeanSecure.php">Average Doesn’t Mean Secure</a>. Just because it’s common, that doesn’t mean it’s not risky. Many people fall into the misconception that if a lot of people are doing something, it must be the safest path.</p></li>
      <li><p><a href="WalkSlowlySoYouDon’tTrip.php">Walk Slowly So You Don’t Trip</a>. The more time you give yourself to complete a goal, the more likely you’ll achieve it. By undertaking new goals with deliberate slowness, you increase the chance you can achieve lasting success.</p></li>
      <li><p><a href="HowtoDiscoverWhatYou’rePassionateAbout.php">How to Discover What You’re Passionate About</a>. Enjoying playing video games isn’t the same as spending thousands of hours designing your own.  Your passion has to be something you would work exceptionally hard for. So what do you do, if there is nothing you feel that engaged about?</p></li>
      <li><p><a href="WhatDoYouWanttoDoWithYourLife.php">What Do You Want to Do With Your Life?</a>What do you want to do with your life? It’s a question almost everyone asks themselves. It’s also a question I don’t believe you should bother asking in the first place.</p></li>
    </ol>
  </div>


  <!-- Videos -->
  <div class="w3-container" id="packages" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Videos.</b></h1>
    <hr style="width:50px;border:5px solid #4ae54a" class="w3-round">
    <p>Anything is possible if you have the dedication and determination to work past life's obstacles.</p>
  </div>

  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
    <iframe width="100%" height="345" src="https://www.youtube.com/embed/28U0m-66LI4">
    </iframe>
    </div>
        
    <div class="w3-half">
    <iframe width="100%" height="345" src="https://www.youtube.com/embed/wnHW6o8WMas">
    </iframe>
    </div>
  </div>
  
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid #4ae54a" class="w3-round">
    <p>Do you want us to style your home? Fill out the form and fill me in with the details :) We love meeting new people!</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
    </form>  
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Designed & Developed By Anshul Singh</p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
function w3_close_php(){
  <?php
    header("location:signup.php");
  ?>
}


function validateForm() {
  var z = document.forms["lform"]["number"].value;
  var phoneno = /^\d{10}$/;
  if (z == "") {
  alert("Email must be filled out");
  return false;
  }  
  else if (!z.match(phoneno)){  
  alert("Please enter a valid Contact number");  
  return false;  
  }
  var p = document.forms["lform"]["pswd"].value;
  var filter = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
  if (p == "") {
  alert("Password must be filled out");
  return false;
  }  
  else if (!p.match(filter)){  
  alert("Please enter a valid password ");  
  return false;  
  }
  }

</script>

</body>
</html>
