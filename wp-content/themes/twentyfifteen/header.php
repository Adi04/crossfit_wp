<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<link rel="stylesheet" href="/styles.css" type="text/css">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<div class="header">
	<div class="container">
    	<center><a href="index.php"><img src="images/logo.jpg" class="logo"></a></center>
        <div class="social">
        	<a href=""><img src="images/in.png"></a>
            <a href=""><img src="images/tweet.png"></a>
            <a href=""><img src="images/face.png"></a>
        </div>
        <h3>Call Us Today  <span style="font-size:20px">905 889 2000</span></h3>
        <div class="navigation">
        	<nav id="nav">
            	<ul>
                	<li><a href="index.php">Home</a></li>
                    <li><a href="">Getting Started</a>
                    <ul class="submenu">
                        	<li><a href="get-strated.php">Free Intro Session</a></li>
                            <li><a href="foundation.php">Foundations</a></li>
                        </ul>
                    </li>
                    <li><a href=""> About SGAA</a>
                    	<ul class="submenu">
                        	<li><a href="mission.php">Our Mission</a></li>
                            <li><a href="team.php">Our Team</a></li>
                        </ul>
                    </li>
                    <li><a href="programs.php"> Programs</a>
                    	<ul class="submenu" style="width:200px;">
                        	<li><a href="crossfit.php">CrossFit</a></li>
                            <li><a href="barbella.php">Barbell Club</a></li>
                            <li><a href="personal.php">Personal Training</a></li>
                            <li><a href="team-training.php">Team Training</a></li>
                            <li><a href="kids.php">Kids Programs</a></li>
                        </ul>
                    </li>
                    <li><a href="wod.php">WOD</a></li>
                    <li><a href="login.php">Members</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<body>