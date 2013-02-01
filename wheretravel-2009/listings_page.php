<?php
/**
 * Template Name: Listings Page
 *
 * A custom page template for Videos.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 */


include(TEMPLATEPATH . '/header.php');



?>
<div>
<div id="content"> 
<?php include(TEMPLATEPATH . '/listings_map.html'); ?>
</div>

 

        <!-- #page_container -->
</div>

 	<div id="sidebar" style="float:right;">
        <ul>
        <?php include (TEMPLATEPATH . '/sidebar.php'); ?>
        </ul>
	</div>
    
    
   
      

        
        
<?php get_footer(); ?>
