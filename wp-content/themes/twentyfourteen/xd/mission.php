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
<center><img src="images/w1.jpg"></center>

<div class="info">
    <div class="container">
    	<h3>Our Mission</h3>
        <div class="left">
         	<h6>Athletic Development</h6>
            <p>Here at the Solid Ground Athletic Academy we are committed to helping people realize their potential. We 3are building a contagious atmosphere that promotes self-improvement and mutual support. With the use of the CrossFit model, our goal is to create an inclusive atmosphere that brings elite athletes together with weekend warriors, all in the pursuit of their own personal best. Regardless of your current fitness level each class is designed to challenge you physically and mentally. We have no ellipticals, no exclusion, and no excuses. Each workout is designed daily to suit the needs of the individual. It is not easy, but you will leave each session exhausted and empowered at the same time.</p>
            <h6>CrossFit in Markham, Thornhill, Vaughan, Richmond Hill</h6>
            <p style="color:#00558f; margin:0;">Solid Ground Athletic Academy is for you if you:</p>
            <ul>
            	<li> Want to get in shape but don’t know how to design your own program</li>
                <li>Have lost interest in your gym ‘routine’</li>
                <li>Dislike the impersonal “GloboGym” environment</li>
                <li> Think you don’t have time to exercise</li>
                <li> Are looking to get strong and faster for your sport</li>
                <li> Want to see REAL results with your fitness program</li>
            </ul>
            <p style="color:#00558f; margin:0;">Our promise to you:</p>
            <p>We promise to offer a professional environment with knowledgeable, well trained staff that are dedicated to helping you meet your fitness goals. We promise to challenge and motivate you as we welcome you into the CrossFit community, and the Solid Ground Family.  Let’s get you started today!</p>
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