<?php get_header(); ?>

<img id="location-photo" src="http://www.where.ca/titleimages/h11_territories.jpg" />

<div id="content2" class="region-page province-page">

	<div class="breadcrumbs">
        <?php
        if(function_exists('bcn_display'))
        { bcn_display(); }
        ?>
	</div>
	
	<h2 id="location-title"><?php single_cat_title(); ?></h2>
	
	<div class="region-info">
	<img id="location-map" src="http://www.where.ca/titleimages/map11p_NT.gif" />
	</div>
	<p>In winter, the skies of the Northwest Territories are awash in ethereal ribbons of green, violet, and red. This is one of the best places on earth to see the Aurora Borealis, or northern lights; even in the capital city of Yellowknife you have an 80%–90% chance of seeing them under clear skies.</p> <p>A land of mountains river valleys, and rocky taiga and tundra trampled by caribou and curly-horned Dall’s sheep, the NWT extends over more than 1 million square km. One of the best ways to see it is by floatplane: soar above the otherworldy Barrenlands and the Cirque of the Unclimbables (paradoxically a popular climbing area) or touch down in far-northern Tuktoyaktuk, on the shores of the Arctic Ocean.</p>
	<p>With ample planning you can do your own snowshoeing, kayaking, or cross-country skiing adventure. Easier is to let outfitters arrange things, from hiking the 372-km Canol Heritage Trail through the Mackenzie Mountains to dog-sled runs, ice-road treks, and Arctic rafting in Aulavik National Park. Fly-in transport is best for some trips, like paddling the rapids in Nahanni National Park and fishing championship-size trout and Arctic grayling out of two of the world’s largest lakes, Great Bear and Great Slave.</p>

</div>	
				
<?php get_sidebar(); ?>
<?php get_footer(); ?>
