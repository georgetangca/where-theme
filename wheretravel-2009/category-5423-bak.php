<?php get_header(); ?>

<img id="location-photo" src="http://www.where.ca/titleimages/h11_yukon.jpg" />

<div id="content2">
	
	<div class="breadcrumbs">
	<?php
	if(function_exists('bcn_display'))
	{
		bcn_display();
	}
	?>
	</div>
	
	<h2 id="location-title"><?php single_cat_title(); ?></h2>
<div class="region-info">
	<img id="location-map" src="http://www.where.ca/titleimages/map11p_YT.gif" />
</div>
	<p>Caribou outnumber people nearly ten to one in this pristine northern expanse of boreal forests, mountains, and tundra. Here you can paddle the Yukon River, go dog-sledding or gold-panning, and fly to remote wilderness areas like Kluane National Park, 21,980 square km of Arctic landscapes and Mount Logan, Canada’s highest summit. You might have to buy the postcard, however, since even glimpsing that peak requires a two-day hike and much of the park’s interior is inaccessible.</p>
	<p>The Klondike Gold Rush of 1896–1899 changed the Yukon forever. Prospectors poured in, holing up in the town of Dawson, which today celebrates its gold-rush history to the hilt, with a burlesque show, saloons, colourful false-front shops, and locals in period costume. Whitehorse, the Yukon’s only city (and home to 80% of its 33,000 population), is another gold-rush-era hub with historic sites and tours.</p>
	<p>The Yukon is the most car-friendly Territory, due to is network of paved roads. Along these are some unforgettable drives. Top of the World Highway, between Dawson City and Alaska, climbs above the tree line, giving a bird’s-eye view of mountains, rivers, and valleys in all directions. Rife with Arctic tundra scenery, Canada’s northernmost motorway, the bumpy and gravely Dempster Highway, stretches 740 km east from Dawson City to Inuvik, <a href="http://www.where.ca/index.php/northwest-territories">Northwest Territories</a>.</p>

        <div id="travel-guides">
            <h4><strong>STAY, DINE, DO:</strong> Find a hotel, restaurant or attraction.</h4>
            <p>Listings to get the most out of the city: where to dine, what to see, where to shop, and more.</p>
            <ul>
                <li><a href="http://www.where.ca/alaskayukon/category_guide.cfm?category_id=1"><strong>Anchorage & Southcentral</strong></a></li>
                <li><a href="http://www.where.ca/alaskayukon/category_guide.cfm?category_id=3"><strong>Fairbanks & the Interior</strong></a></li>
                <li><a href="http://www.where.ca/alaskayukon/category_guide.cfm?category_id=4"><strong>Juneau & Southeast</strong></a></li>
                <li><a href="http://www.where.ca/alaskayukon/category_guide.cfm?category_id=5"><strong>The Bush</strong></a></li>
                <li><a href="http://www.where.ca/alaskayukon/category_guide.cfm?category_id=2"><strong>The Kenai Peninsula</strong></a></li>
                <li><a href="http://www.where.ca/alaskayukon/category_guide.cfm?category_id=7"><strong>Tour Operators</strong></a></li>
                <li><a href="http://www.where.ca/alaskayukon/category_guide.cfm?category_id=6"><strong>Yukon Territory</strong></a></li>
                <li><a href="http://www.where.ca/alaskayukon/category_guide.cfm?category_id=8"><strong>Accommodations</strong></a></li>
                <li class="last-item"><a href="http://www.where.ca/alaskayukon/jump_guide.cfm">All Travel Guides...</a></li>            
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
