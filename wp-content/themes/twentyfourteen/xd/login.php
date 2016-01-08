<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crossfit</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
 <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css/responsiveslides.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="js/responsiveslides.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {

      // Slideshow 1
      $("#slider1").responsiveSlides({
        maxwidth: 800,
        speed: 800
      });

      // Slideshow 2
      $("#slider2").responsiveSlides({
        auto: false,
        pager: true,
        speed: 300,
        maxwidth: 540
      });

      // Slideshow 3
      $("#slider3").responsiveSlides({
        manualControls: '#slider3-pager',
        maxwidth: 540
      });

      // Slideshow 4
      $("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
  </script>
  
   <script>
	$(document).ready(function(){
  $('.slider1').bxSlider({
    slideWidth: 200,
    minSlides: 2,
    maxSlides: 3,
    slideMargin: 10
  });
});</script>
<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
<script src="js/jquery.bxslider.js"></script>
</head>

<body>

<?php include('header.php'); ?>
<center><img src="images/s3.jpg"></center>

<div class="info">
    <div class="container">
    	<h3>Our Mission</h3>
        <div class="login">
        	<h2>Member Log In</h2>
            <label>Email Address</label>
            <input type="text">
            <label>Password</label>
            <input type="password">
            <label>&nbsp;</label>
            <input type="submit" value="Log In">
            <a href="">Forgot Your Password?</a>
        </div>
    </div>
 </div>
<div class="clear"></div><br><br>
<?php include('footer.php'); ?>

<script src="js/jquery.meanmenu.js"></script>
<script>
	jQuery(document).ready(function () {
	    jQuery('nav').meanmenu();
	});
</script>
</body>
</html>