<?php /* Template Name: testing-template */ ?>

<?php get_header(); ?>

	<div id="content2">
	
        <div id="main-features">
            <!--a href="http://www.where.ca/index.php/blog/slideshow/10-amazing-canadian-fall-vacations/"><img src="http://www.where.ca/images/homepage/hp-fallvacations2011.jpg" alt=""></a>
            <div id="hed-dek">
                <h2><a href="http://www.where.ca/index.php/blog/slideshow/10-amazing-canadian-fall-vacations/">10 Amazing Canadian Fall Vacations</a></h2>
                <p><a href="http://www.where.ca/index.php/blog/slideshow/10-amazing-canadian-fall-vacations/">Polar bears, lasso lessons, and more of our favourite adventures from coast to coast this fall</a></p>
            </div-->
            <?php slidedeck( 34022, array( 'width' => '100%', 'height' => '300px' ) ); ?>
        </div>				

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
