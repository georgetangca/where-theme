<?php get_header(); ?>

<img id="location-photo" src="/titleimages/h11_winnipeg.jpg" />

	<div id="content2">

        <div class="breadcrumbs">
        <?php
        if(function_exists('bcn_display'))
        {
            bcn_display();
        }
        ?>
        </div>
	    
        <div id="travel-guides">
            <h4><strong>STAY, DINE, DO:</strong> Find a hotel, restaurant or attraction.</h4>
            <p>Listings to get the most out of the city: where to dine, what to see, where to shop, and more.</p>
             <ul>                  
             
			<?php
			$listing_cat_id = '3995';
			$listing_cat_id_parent = '3994';
			
			include('listing_category_lists.php');
		
			?>
			<li class="last-item"><a href="/listings/#/?category=<?=$listing_cat_id_parent?>">All Travel Guides...</a></li>
				</ul>   
        </div>

		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle"><?php single_cat_title(); ?></h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle"><?php single_tag_title(); ?></h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Author Archive</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Archives</h2>
 	  <?php } ?>


		<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>" >
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<!--small><?php the_time('l, F jS, Y') ?></small-->

				<div class="entry">
					<?php the_content() ?>
				</div>

			</div>

		<?php endwhile; ?>

			<div class="navigation"><!-- works the opposite way of previous post/next post on single.php-->
				<p class="previous"><?php next_posts_link('&laquo; Older posts'); ?></p>
				<p class="next"><?php previous_posts_link('Newer posts &raquo;'); ?></p>
			</div>


	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>No posts found.</h2>");
		}
		get_search_form();

	endif;
?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
