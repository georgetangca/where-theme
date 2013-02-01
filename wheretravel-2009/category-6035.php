<?php get_header(); ?>

<img id="location-photo" src="http://www.where.ca/titleimages/h11_quebec.jpg" />

<div id="content2" class="region-page province-page">
	
	<div class="breadcrumbs">
        <?php
        if(function_exists('bcn_display'))
        { bcn_display(); }
        ?>
	</div>
	
	<h2 id="location-title"><?php single_cat_title(); ?></h2>
    <div class="region-info">
        <img id="location-map" src="http://www.where.ca/titleimages/map11p_QC.gif" />
    </div>
	<p>A country within a country, Quebec is the centre for all things French-Canadian, from Cirque du Soleil to <em>poutine</em>. The French settled here in the 1600s and the province of 8 million is still almost entirely French speaking. Many residents also speak English, but having a few key French phrases under your belt is beneficial.</p>
	<p>Canada’s second-largest city, Montreal (pop. 3.6 million) manages to be sophisticated, edgy, historic, and modern. Shopping, museums, and nightlife are highlights, as is the cobblestoned waterfront Old Town. The almost entirely francophone Quebec City (pop. 700,000) is North America’s only remaining fortified city. Vieux-Québec (the Old City) retains much of its 17th-century character.</p>
	<p>With 27 national parks and an extensive network of cycling trails called the Route Verte, outdoorsy types are well served. The Laurentian Mountains (Les Laurentides) beckon for their coveted ski resorts, especially at Mont-Tremblant. The Gaspé Peninsula is an eastern mountainous wilderness with a <a href="http://www.where.ca/index.php/atlantic-canada">Maritime</a> spirit that’s inhabited by caribou and moose. For an otherworldly experience, fly into a northern Inuit village in the arctic tundra region of Nunavik.</p>
	<p>Don’t discount the winter season in Quebec: Canada’s snowiest province is a cold-weather playground. Stay at an ice hotel, join the festivities at the Winter Carnival in Quebec City, do a multiday dog-sledding tour, or fill up on pancakes with fresh-tapped maple syrup at a sugar shack.</p>

</div>	
				
<?php get_sidebar(); ?>
<?php get_footer(); ?>
