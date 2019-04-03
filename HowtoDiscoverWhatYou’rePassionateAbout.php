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
        <h1 class="w3-xxxlarge w3-text-red"><b>How to Discover What You’re Passionate About.</b></h1>
        <hr style="width:50px;border:5px solid #4ae54a" class="w3-round">
    </div>
    <div class="w3-container" style="margin-top:30px" >
    <p>A common theme in most writing on goal setting is the need to follow your passions.  Do the things that make you want to get up early in the morning.  There’s only one thing missing:</p>
<p>What if you don’t have any passions?<em><br />
</em><br />
I’m sure everyone on this planet has interests.  But that’s not the same thing.  Enjoying playing video games isn’t the same as spending thousands of hours designing your own.  Your passion has to be something you would work exceptionally hard for.</p>
<p>So what do you do, if there is nothing you feel that engaged about?</p>
<h2>The Way to Start Isn’t With a Survey&#8230;</h2>
<p>A lot of career guidance involves measuring your current skills and personality, and then deciding what you would be most suited for.  I don’t like this approach because people are complex.  And any test will ultimately be a gross simplification of what’s important to you and what you like to do.</p>
<p>I once heard a story about a wealthy woman who was looking for a husband.  She invested over $20,000 on a series of psychological surveys to match her with potential candidates.  She met individually with the dozen candidates that were her best match.  After all that money and effort, she decided she didn’t like any of them.</p>
<p>Six months later, she was engaged to someone she had met randomly at a bar.  <strong>Moral:</strong> people don’t know what they want until they see it (and surveys aren’t much better).</p>
<p>The truth is, I don’t think any questionnaire can tell you what you’re going to be really engaged about.  I’d rather experiment with dozens of wildly different activities, than limit my scope, just because a test said I wouldn’t like it.</p>
<h2>How to Find Your Passions</h2>
<p>The better approach to finding your passions is actually fairly simple:</p>
<ol>
<li>    Try a lot of different things</li>
<li>    See what you enjoy</li>
</ol>
<p>The biggest obstacle to overcome is a narrow vision of what you can do.  If I wasn’t passionately interested in anything, I’d try to cast a wide net to look at dozens of different activities.  Staying safe and familiar is the reason I’m bored, so now is the time to experiment.</p>
<p>Dabbling is key to the art of finding what drives you.  Dabbling means committing to something for 3-6 months.  This amount of time isn’t enough to become really good at anything.  But it is enough time to get over the sharp learning curve in the beginning.</p>
<p>I didn’t enjoy programming for the first few months I worked on it.  I didn’t know enough, and it was too frustrating to continue.  But once I got over the frustration barrier, I found that programming is an activity I really enjoy.</p>
<p>If you don’t have any project that makes you want to wake up early and sacrifice leisure for, you should start dabbling.  Find new activities completely outside your comfort zone you can do for a few hours a week, and commit for at least two months.</p>
<h2>Sometimes You Need a Spark&#8230;</h2>
<p>Sometimes the problem with a passion isn’t the activity, but the goal.  I enjoyed working on small self-made projects.  But it wasn’t until I saw that people actually made self-run businesses out of those efforts that I became really engaged.  Until that point, my goal was just to dabble in something fun.  After that point, I realized there was room for a challenging goal I hadn’t considered before.</p>
<p>Equally important to dabbling in activities is to dabble in experiences.  Meet people from weird and unique backgrounds.  Read books that don’t normally appear on your shelf.  Randomness increases the chance that one of your interests will be sparked into something more.</p>
<h2>Always Look for More</h2>
<p>Dabbling is a continuous process.  Committing yourself to one goal is good.  But that should still leave time for brief experiments.  If you’re always dabbling, you have a large base of passions you can do interesting work from.  Don’t tolerate boredom.</p></div>
<br><br>
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
         
    </script>
    
</body>
</html>