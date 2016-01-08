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
<center><img src="<?php bloginfo('template_url'); ?>/images/w5.jpg"></center>

<div class="info">
    <div class="container">
    	<h3 style="margin-bottom:0;">Contact Us</h3>
        <br>
        <div class="left">
        <p style="margin:0;">Please call or email us today to set up your complimentary trial class – let’s get started!</p>
         	<img src="<?php bloginfo('template_url'); ?>/images/q5.jpg" style="float:left; margin-right:10px; margin-top:8px">
            <p>93 Green Lane Markham, ON L3T 6K6</p>
            
            <img src="<?php bloginfo('template_url'); ?>/images/q6.jpg" style="float:left;margin-right:10px;">
            <p style=" margin:0;">905-889-2000</p>
            <br>
            <img src="<?php bloginfo('template_url'); ?>/images/q7.jpg" style="float:left;margin-right:10px;">
            <p style="margin:0;">info@crossfitsolidground.com</p>
            <br><br>
            <a href=""><img src="<?php bloginfo('template_url'); ?>/images/face.png" style="float:left; margin:3px;"></a>
            <a href=""><img src="<?php bloginfo('template_url'); ?>/images/tweet.png" style="float:left; margin:3px;"></a>
            <a href=""><img src="<?php bloginfo('template_url'); ?>/images/in.png" style="float:left; margin:3px;"></a>
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
            <div class="clear"></div>
            <br><br>
        </div>
 </div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2878.5836282048554!2d-79.3931988!3d43.82299529999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b2ca5755d8217%3A0x57a47833a0f478ea!2s93+Green+Ln%2C+Thornhill%2C+ON+L3T%2C+Canada!5e0!3m2!1sen!2sin!4v1436647084931" frameborder="0" style="border:0" allowfullscreen></iframe>
<?php include('footer.php'); ?>

<script src="js/jquery.meanmenu.js"></script>
<script>
	jQuery(document).ready(function () {
	    jQuery('nav').meanmenu();
	});
</script>
</body>
</html>