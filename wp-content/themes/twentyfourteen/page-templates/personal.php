<?php


 /**
 * Template Name: Personal
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
 			<?php wp_nav_menu(array('menu'=>'Programs' , 'theme_location' => 'primary' )); ?>  
        </ul>
        <div class="clear"></div>
    	<h3>Personal Training</h3>
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
           <img src="<?php bloginfo('template_url'); ?>/images/a9.jpg" style="float:left; margin-right:30px;">
            <?php echo the_field('image_field');?>
            <div class="clear"></div>
            <?php echo the_field('text_field');?>
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