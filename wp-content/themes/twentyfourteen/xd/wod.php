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
<center><img src="images/s1.jpg"></center>

<div class="info">
    <div class="container">
    	<h3>WOD</h3>
        <div class="left">
         	<div class="div50">
            	<h6>CrossFit Solid Ground – July 3, 2015</h6>
                <p>Written by <span style="color:#00558f">J. Tamane</span> on July 1, 2015</p>
            </div>
            <div class="div50" style="float:right">
            	<p style="margin:0;">Workout of the day:</p>
                <table width="100%" border="0">
                  <tr>
                    <td>A.</td>
                    <td>15min to find 3RM Hang Power Clean</td>
                  </tr>
                  <tr>
                    <td>B. </td>
                    <td>For time:</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>3 Rounds 200m Run</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>15 Toes to Bar</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>then</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>3 Rounds</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>15 Box Jumps 24/20″</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>20 KBS 24kg/16kg</td>
                  </tr>
                </table>
                <p>Categories:<span style="color:#00558f"> WOD </span>- Tags: <span style="color:#00558f"><em>CrossFit, CrossFit in Markham, CrossFit in Richmond Hill, CrossFit in Thornhill, CrossFit in Vaughan</em></span></p>

            </div>
            <div class="clear"></div><br>
            <div style="width:100%; float:left; border-bottom:1px solid #ccc;"></div>
            <div class="clear"></div><br>
            <div class="div50">
            	<h6>CrossFit Solid Ground – June 30, 2015</h6>
                <p>Written by <span style="color:#00558f">J. Tamane</span> on July 1, 2015</p>
            </div>
            <div class="div50" style="float:right">
            	<p style="margin:0;">Workout of the day:</p>
                <table width="100%" border="0">
                  <tr>
                    <td>A.</td>
                    <td>Back Squa</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>3×10</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>Rest 3′</td>
                  </tr>
                  <tr>
                    <td>B. </td>
                    <td>For time:</td>
                  </tr>
                  
                  <tr>
                    <td>&nbsp;</td>
                    <td>“Karen”</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>150 Wall Balls 20/14</td>
                  </tr>
                  
                </table>
                <p>Categories:<span style="color:#00558f"> WOD </span>- Tags: <span style="color:#00558f"><em>CrossFit, CrossFit in Markham, CrossFit in Richmond Hill, CrossFit in Thornhill, CrossFit in Vaughan</em></span></p>

            </div>
            <div class="clear"></div><br>
            <div style="width:100%; float:left; border-bottom:1px solid #ccc;"></div>
            <div class="clear"></div><br>
            <div class="div50">
            	<h6>CrossFit Solid Ground – June 26, 2015</h6>
                <p>Written by <span style="color:#00558f">J. Tamane</span> on July 1, 2015</p>
            </div>
            <div class="div50" style="float:right">
            	<p style="margin:0;">Workout of the day:</p>
                <table width="100%" border="0">
                  <tr>
                    <td>A.</td>
                    <td>Hang Power Clean</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>Work to 5RM (15min)</td>
                  </tr>
                  
                  <tr>
                    <td>B. </td>
                    <td>For time:</td>
                  </tr>
                  
                  <tr>
                    <td>&nbsp;</td>
                    <td>10-8-6-4-2</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>Deficite HSPU (6inch)</td>
                  </tr>
                   <tr>
                    <td>&nbsp;</td>
                    <td>2-4-6-8-10</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>Power Clean 225/155</td>
                  </tr>
                  
                </table>
                <p>Categories:<span style="color:#00558f"> WOD </span>- Tags: <span style="color:#00558f"><em>CrossFit, CrossFit in Markham, CrossFit in Richmond Hill, CrossFit in Thornhill, CrossFit in Vaughan</em></span></p>

            </div>
            <div class="clear"></div><br>
            <div style="width:100%; float:left; border-bottom:1px solid #ccc;"></div>
            <div class="clear"></div><br>
            <a href=""><img src="images/s2.jpg" style="float:right"></a>
            <div class="clear"></div><br><br><br>
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