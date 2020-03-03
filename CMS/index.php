<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Index</title>
        <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
        <style>
        .mySlides {display:none;}
        </style>
    </head>
    <body>
        <div class="w3-container">
        <ul class="w3-ul w3-card-4">
        <li class="w3-bar">
        <img src="logo.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:100px">
        <div class="w3-bar-item">
        <span class="w3-large"><div class="w3-text-blue">POWER SYSTEM OPERATION CORPORATION LIMITED</div></span>
        <span class="w3-text-red">(A Government of India Enterprise) CIN: U40105DL2009GOI188682</span><br>
        <span class="w3-text-blue">North Eastern Regional Load Despatch Centre</span>
        </div>
        </li>
        </ul>
        </div>
        <br>
        <div class="w3-bar w3-theme-l4">   
        <a href="#" class="w3-bar-item w3-button w3-right w3-hover-none w3-bottombar w3-hover-border-blue w3-hover-text-blue"><i class="fa fa-unlock-alt"></i> Forgot Password</a>
        <a href="#" class="w3-bar-item w3-button w3-right w3-hover-none w3-bottombar w3-hover-border-blue w3-hover-text-blue" onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-sign-in"></i> Login</a>
        </div>
        <br>
        <div class="w3-content w3-section" style="max-width:900px">
        <img class="mySlides" src="image1.JPG" style="width:100%">
        <img class="mySlides" src="image2.png" style="width:100%">
        </div>
       <script>
       var myIndex = 0;
       carousel();
       function carousel() {
       var i;
       var x = document.getElementsByClassName("mySlides");
       for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
       }
       myIndex++;
       if (myIndex > x.length) {myIndex = 1}    
       x[myIndex-1].style.display = "block";  
       setTimeout(carousel, 2000);
       }
       </script>
       <div id="id01" class="w3-modal">
      <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="logo.jpg" alt="POSOCO logo" style="width:30%" class="w3-circle w3-margin-top">
      </div>
          <form class="w3-container" action="authenticate.php" method="post">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="user" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" required>
          <button class="w3-button w3-block w3-blue w3-section w3-padding" type="submit">Login</button>
        </div>
      </form>
   </div>
  </div>
    </body>
</html>