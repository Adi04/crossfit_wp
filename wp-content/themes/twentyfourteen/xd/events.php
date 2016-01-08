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
<center><img src="images/w6.jpg"></center>

<div class="info">
    <div class="container">
    	<h3>Events</h3>
        <div class="left">
         	<div class="grey" style="margin:00">
            	<img src="images/x7.jpg" style="float:left; margin-right:15px; margin-bottom:00px">
                <h5 style="color:#00558f; margin:0; font-weight:bold;">Lorem ipsum dolor sit amet, </h5>
                <p style="margin:0;">June 28th, 2015</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa  .....</p>
                <a href="" class="link">Read More</a>
            </div>
            
            <div class="grey">
            	<img src="images/x7.jpg" style="float:left; margin-right:15px; margin-bottom:00px">
                <h5 style="color:#00558f; margin:0; font-weight:bold;">Lorem ipsum dolor sit amet, </h5>
                <p style="margin:0;">June 28th, 2015</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa  .....</p>
                <a href="" class="link">Read More</a>
            </div>
            <div class="grey">
            	<img src="images/x7.jpg" style="float:left; margin-right:15px; margin-bottom:00px">
                <h5 style="color:#00558f; margin:0; font-weight:bold;">Lorem ipsum dolor sit amet, </h5>
                <p style="margin:0;">June 28th, 2015</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa  .....</p>
                <a href="" class="link">Read More</a>
            </div>
            <div class="clear"></div>
            <br><br>
        </div>
        <div class="right">
        	<div class="contact">
            	<h3>Contact</h3>
                <input type="text" placeholder="Name">
            <input type="text" placeholder="Phone">
            <input type="text" placeholder="Email">
            <textarea>Question</textarea>
            <input type="submit" value="SUBMIT">
            </div>
        </div>
 </div>

<?php include('footer.php'); ?>

<script src="js/jquery.meanmenu.js"></script>
<script>
	jQuery(document).ready(function () {
	    jQuery('nav').meanmenu();
	});
</script>
</body>
</html>