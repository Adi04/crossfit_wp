<?php


 /**
 * Template Name: Login
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php get_header(); ?>

<center><img src="<?php bloginfo('template_url'); ?>/images/s3.jpg"></center>

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
<?php get_footer(); ?>
