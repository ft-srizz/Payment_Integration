<!DOCTYPE html>
<html lang="en">
<head>
  <title>TSF Pay</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    
    a {  
  display: inline-block;
  margin: 20px;
  position: relative;
  text-decoration: none;
}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
      width: 30%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
 
.mySlides {display:none;}

  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">TSF Pay</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="https://www.thesparksfoundationsingapore.org/about/vision-mission-and-values/">About</a></li>
        
        <li><a href="https://www.thesparksfoundationsingapore.org/contact-us/">Contact</a></li>
      </ul>
     
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
        <img class="mySlides" src="flood1.jfif" style="width:100%; height:95%" >
        <img class="mySlides" src="flood2.jfif" style="width:100%; height:95%">
        <img class="mySlides" src="flood3.jfif" style="width:100%; height:95%">
    </div>
    <div class="col-sm-8 text-left"> 
      <h2 style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Welcome to TSF Pay: Payment Gateway Integration </h2>
      <p style="font-size: 30px; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Flood Relief 2021</p>
      <p>This is my task as a Web Development and Design Intern at The Sparks Foundation.</p>
      <hr>
      <h2><a href="checkout.php" class="button"><span>DONATE NOW!</span>
      </a></h2>
     <i><b> <p style="font-family:Georgia, 'Times New Roman', Times, serif">'Your decision today to donate could change someone's life significantly'</p>
     </b></i> </div>
    
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Created by Srijan Tripathi. © 2021</p>
</footer>
<script>
    var slideIndex = 0;
    carousel();
    
    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > x.length) {
          slideIndex = 1
        }    
      x[slideIndex-1].style.display = "block";  
      setTimeout(carousel, 2000); // Change image every 2 seconds
    }
    </script>
</body>
</html>
