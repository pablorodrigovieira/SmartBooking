<?php

    session_start();
    
    include("includes/contact.php");
    include("includes/signup.php");
    include("includes/login.php");
     include("includes/ajaxLogin.php");
    include("includes/booking.php");
    include("includes/my_account.php");
    include("includes/options_popup.php");
    
    //navigation items as an array
    //display according if user is loged in
    if(!$_SESSION["user_email"])
    {
      $navigation_items = array(
        " Signup"=>"#signUpModal",
        " Login"=>"#loginModal"
      );
    }
    else if($_SESSION["level"] === 2) //2 == ADMIN, 1 == USER
    {
      $navigation_items = array(
      " Admin" => "admin/home.php",
      " Logout"=>"logout.php"
      );
    }
    else
    {
      $name = $_SESSION["user_firstName"];
      $navigation_items = array(
        " $name"=>"#myAccountModal",
        " Logout"=>"logout.php"
      );
    }

?>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-nav" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img id="logo" src="/images/Angelino_Logo.svg" alt="Logo"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="top-nav">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#index">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#location">Location</a></li>
        <li><a href="#" data-toggle="modal" data-target="#bookingModal">Booking</a></li>
        <li><a href="#" data-toggle="modal" data-target="#contactModal">Contact</a></li>
        <?php
              foreach($navigation_items as $name=>$link)
              {
                if($link === "#signUpModal" || $link === "#myAccountModal")
                {
                    $icon = "glyphicon glyphicon-user";
                    echo "<li><a href=\"#\" data-toggle=\"modal\" data-target=\"$link\"><span class=\"$icon\"></span>$name</a></li>";
                }
                else if($link === "#loginModal")
                {
                    $icon = "glyphicon glyphicon-log-in";
                    echo "<li><a href=\"#\" data-toggle=\"modal\" data-target=\"$link\"><span class=\"$icon\"></span>$name</a></li>";
                }
                else if($link === "admin/home.php")
                {
                    echo "<li><a href=\"$link\"><span class=\"glyphicon glyphicon-check\"></span>$name</a></li>";
                }
                else if($link === "logout.php")
                {
                    echo "<li><a href=\"$link\"><span class=\"glyphicon glyphicon-log-out\"></span>$name</a></li>";
                }
            }
      ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->         
</nav>


<script>
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#top-nav a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
  //if(needtologin == true){
  //  $("#loginModal").modal({show: true});
  //}
});
</script>
