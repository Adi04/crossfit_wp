<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crossfit</title>
<link rel="stylesheet" type="text/css" href="<?php get_template_directory_uri(); ?>/style.css">
 <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsiveslides.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/responsiveslides.js"></script>
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
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.js"></script>
<?php wp_head();?>
</head>

<body>

<div class="header">
	<div class="container">
    	<center><a href="index.php"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" class="logo"></a></center>
        <div class="social">
        	<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/in.png"></a>
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/tweet.png"></a>
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/face.png"></a>
        </div>
        <h3>Call Us Today  <span style="font-size:20px">905 889 2000</span></h3>
        <div class="navigation">
        	<nav id="nav">
            	<?php wp_nav_menu(); ?>
            </nav>
        </div>
    </div>
</div>