<?php get_header(); ?>

<img id="location-photo" src="http://www.where.ca/titleimages/h11_nunavut.jpg" />

<div id="content2" class="region-page province-page">
	
	<div class="breadcrumbs">
        <?php
        if(function_exists('bcn_display'))
        { bcn_display(); }
        ?>
	</div>
	
	<h2 id="location-title"><?php single_cat_title(); ?></h2>
	<div class="region-info">
	<img id="location-map" src="http://www.where.ca/titleimages/map11p_NU.gif" />
	</div>
	<p>Live out your wildest Arctic fantasies in this traditional Inuit homeland (<em>nunavut</em> means “our land” in the Inuktitut language) extending nearly to the North Pole. Many of Nunavut’s 32,000 residents—80% of them Inuit—live in isolated communities that still subsist through hunting and fishing. Barren tundra, mountains, and coastal fjords permeate the Territory, teeming with wolves, muskoxen, polar bears, caribou, and, along coastal ice floes, seals, walrus, narwhal, and whales.</p>
	<p>Occupying a full fifth of Canada, Nunavut has no roads leading to it or connecting its 28 communities. Getting around is difficult and expensive, and even experienced adventurers opt for organized tours and cruises. These include sea-kayaking, rafting, overnights in igloos, northern lights and iceberg tours, Northwest Passage cruises, and flying into Canada’s northernmost national park, Quttinirpaaq, where you can navigate a team of sled dogs through the land of the midnight sun.</p>
	<p>On southern Baffin Island, icebergs are within reach and you can visit two national parks and Iqaluit, Nunavut’s capital and largest community (pop. 7,000). Iqaluit is a good place to develop a taste for traditional foods like muskox stew, caribou burgers, and dried Arctic char, <em>iguanaq</em> (aged walrus meat), to soak up Inuit culture in the form of a throat-singing or storytelling performance, or to purchase Inuit stone carvings and intricately beaded clothing.</p>

</div>	
				
<?php get_sidebar(); ?>
<?php get_footer(); ?>
