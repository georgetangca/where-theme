<?php get_header(); ?>

<img id="location-photo" src="http://www.where.ca/titleimages/h11_newbrunswick.jpg" />

<div id="content2" class="region-page province-page">
	
	<div class="breadcrumbs">
        <?php
        if(function_exists('bcn_display'))
        { bcn_display(); }
        ?>
	</div>
	
	<h2 id="location-title"><?php single_cat_title(); ?></h2>
    <div class="region-info">
        <img id="location-map" src="http://www.where.ca/titleimages/map11p_NB.gif" />
    </div>
	<p>It's been described as Maine without the crowds, and this western gateway to the <a href="http://www.where.ca/index.php/atlantic-canada">Maritimes</a> does seem designed for getting away from it all. Most of its allures are quiet ones: coastal drives, leaf-peeping (the province is more than 80 percent forested), lobster festivals, farmers markets, bird-watching, and a preponderance of covered bridges. Even the major cities—Fredericton, Moncton, and Saint John—are small, with fewer than 150,000 residents apiece. Among the many natural attractions are white-sand beaches, salmon fishing (on the Miramichi, especially), and the wild and wonderful Fundy National Park.</p>
	<p>Culturally, New Brunswick walks the anglophone-francophone line. Acadians began settling here in the 1700s and today it is Canada's only officially bilingual province; a third of the population is of Acadian descent. Acadian communities lie along the northeast coast, as does Le Pays de la Sagouine, a recreated historic Acadian village.</p>
	<p>The province isn’t entirely without thrills: you can go kite-boarding in the Acadian Islands or sea-kayaking on the Bay of Fundy, which is one of the top whale-watching spots in North America and has the world’s highest tides. At low tide you can walk on the ocean floor among sandstone formations sculpted by the mighty waters. St. Andrews, on the bay, is the closest thing the province has to a tourist hotspot: a Victorian-era town with cute B&Bs and a main street shops selling saltwater taffy.</p>

</div>	
				
<?php get_sidebar(); ?>
<?php get_footer(); ?>
