<?php get_header(); ?>

<img id="location-photo" src="http://www.where.ca/titleimages/h11_newfoundland.jpg" />

<div id="content2" class="region-page province-page">
	
	<div class="breadcrumbs">
        <?php
        if(function_exists('bcn_display'))
        { bcn_display(); }
        ?>
	</div>
	
	<h2 id="location-title"><?php single_cat_title(); ?></h2>
    <div class="region-info">
        <img id="location-map" src="http://www.where.ca/titleimages/map11p_NL.gif" />
    </div>
	<p>In this land of icebergs and fjords, everything is a world apart: local lingo that can be indecipherable to outsiders, species found nowhere else on earth, only-in-Newfoundland cuisine (cod tongues, seal-flipper pie), and a far-flung location 550 km across the ocean from <a href="http://www.where.ca/index.php/nova-scotia">Nova Scotia</a>. The province even has its own time zone.</p>
	<p>Newfoundland (pronounced <em>new</em>-fun-land or new-fun-<em>land</em>, but never new-<em>found</em>-land), the island portion of the province, is home to 95% of the population and to St. John's, a modern city with a long history. The mainland, Labrador, is a massive region of subarctic and polar climates, Innu and Inuit communities, boreal forests and tundra, and coastal towns accessible only by water, air, or snowmobile.</p>
	<p>There’s no better place in the northern hemisphere to see icebergs than Newfoundland and Labrador: they’re sometimes visible from St. John’s, but boat tours take you out to get a closer look (April–July). A number of sights lie along the scenic Viking Trail highway. At L’Anse aux Meadows, 1,000-year-old Viking ruins mark North America’s first European settlement. Nearby Gros Morne National Park is must-do for its dramatic fjords, glasslike waterways, volcanic rock outcroppings, glacial valleys, and waterfalls. Though staring agape at the scenery is a valid pursuit, you can also visit a puffin reserve; go sea-kayaking, fishing, or whale-watching; and take package tours to remote destinations like Labrador’s restored 19th-century Battle Harbour fishing village.</p>
</div>	
				
<?php get_sidebar(); ?>
<?php get_footer(); ?>
