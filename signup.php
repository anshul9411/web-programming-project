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
</style>
<body>
    <nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
        <div class="w3-container">
          <h3 class="w3-padding-64"><b>Saphalata</b></h3>
        </div>
        <div class="w3-bar-block">
          <a href="motivation.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
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

    <div class="w3-container" style="margin-top:80px" >
        <h1 class="w3-jumbo"><b>Saphalata</b></h1>
        <h1 class="w3-xxxlarge w3-text-red"><b>Sign Up.</b></h1>
        <hr style="width:50px;border:5px solid #4ae54a" class="w3-round">
    </div>
    <!-- Signup -->
  <div class="w3-container" id="contact" style="margin-top:30px">
    <p>Please fill in this form to create an account.</p>
    <form name="signup" action="motInsert1.php" method="post" onsubmit="return validateForm()">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="name" >
      </div>
      <div class="w3-section">
        <label>Gender</label>
        <input class="w3-input w3-border" type="radio" name="gender" value="male" checked> Male<br>
        <input class="w3-input w3-border" type="radio" name="gender" value="female"> Female<br>
        <input class="w3-input w3-border" type="radio" name="gender" value="other"> Other
      </div>
      <div class="w3-section">
        <label>Age</label>
        <input class="w3-input w3-border" type="text" name="age" >
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="email" >
      </div>
      <div class="w3-section">
        <label>Password</label>
        <input class="w3-input w3-border" type="password" name="password" >
      </div>
      <div class="w3-section">
        <label>Contact Number</label>
        <input class="w3-input w3-border" type="text" name="number" >
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Sign Up</button>
    </form>  
  </div>


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

        function validateForm() {
          var x = document.forms["signup"]["name"].value;
          if (x == "") {
          alert("Name must be filled out");
          return false;
          }

          var y = document.forms["signup"]["age"].value;
          if (isNaN(y)) {
          alert("Age must be number");
          return false;
          }
          else if(y == ""){
          alert("Age must be filled out");
          return false;
          }
          var z = document.forms["signup"]["email"].value;
          var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if (z == "") {
          alert("Email must be filled out");
          return false;
          }  
          else if (!filter.test(z)){  
          alert("Please enter a valid e-mail address ");  
          return false;  
          }
          var p = document.forms["signup"]["password"].value;
          var filter = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
          if (p == "") {
          alert("Password must be filled out");
          return false;
          }  
          else if (!p.match(filter)){  
          alert("Please enter a valid password ");  
          return false;  
          }

          var cn = document.forms["signup"]["number"].value;
          var phoneno = /^\d{10}$/;
          if(cn == ""){
          alert("Contact number must be filled out");
          return false;
          }
          else if (!cn.match(phoneno)) {
          alert("Please enter a valid Contact number");
          return false;
          }

}  
        
    </script>
    
</body>
</html>