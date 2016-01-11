<?php


 /**
 * Template Name: CrossFit
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php get_header(); ?>

<center><img src="<?php bloginfo('template_url'); ?>/images/w8.jpg"></center>

<div class="info">
    <div class="container">
    	<br>
    	<ul class="fancy">
 			<li><a href="<?php bloginfo('template_url'); ?>/crossfit.php" class="active">CrossFit</a></li>
            <li><a href="<?php bloginfo('template_url'); ?>/barbella.php">Barbell Club</a></li>
            <li><a href="personal.php">Personal Training</a></li>
            <li><a href="team-training.php">Team Training</a></li>
            <li><a href="kids.php">Kids Programs</a></li> 
        </ul>
        <div class="clear"></div>
    	<h3>Crossfit</h3>
        <div class="left">
         	<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
           <img src="<?php bloginfo('template_url'); ?>/images/a7.jpg" style="float:left; margin-right:30px;">
            <ul>
            	<li> Want to get in shape but don’t know how to design your own program</li>
                <li>Have lost interest in your gym ‘routine’</li>
                <li>Dislike the impersonal “GloboGym” environment</li>
                <li> Think you don’t have time to exercise</li>
                <li> Are looking to get strong and faster for your sport</li>
                <li> Want to see REAL results with your fitness program</li>
            </ul>
            <div class="clear"></div>
            <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
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
<?php get_footer(); ?>
