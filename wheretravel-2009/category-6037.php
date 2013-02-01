<?php get_header(); ?>

<img id="location-photo" src="http://www.where.ca/titleimages/h11_saskatchewan.jpg" />

<div id="content2" class="region-page province-page">
	
	<div class="breadcrumbs">
        <?php
        if(function_exists('bcn_display'))
        { bcn_display(); }
        ?>
	</div>
	
	<h2 id="location-title"><?php single_cat_title(); ?></h2>
	<div class="region-info">
	<img id="location-map" src="http://www.where.ca/titleimages/map11p_SK.gif" />
	</div>
	<p>Welcome to the Wild West. Back in the frontier days Prohibition-era rumrunners operated out of Moose Jaw and outlaws holed up in the Big Muddy Badlands’ sandstone caves. Tours can take you through Saskatchewan’s racy past, but today the province is focused on more sedate pleasures: fishing on northern Lac la Ronge, ticking off waterfowl from birding “life lists,” and visiting historic First Nations and Métis sites like Batoche. If you’re looking for rowdy crowds, you’ll have to attend a rodeo or a Saskatchewan Roughriders’ (Canadian football) game.</p>
	<p>The lower third of the province is a <a href="http://www.where.ca/index.php/the-prairies">Prairies</a> postcard: fields of sunflowers, neatly rolled wheat bales, grasslands, badlands, and wide-open blue skies. The Great Sand Hills, 1,900 sq km of ever-changing, desertlike dunes, are here, as is Grasslands National Park, a landscape of buttes and rolling hills, pronghorn antelope, and prickly pear cacti.</p>
	<p>But Saskatchewan isn’t all prairies. Aspen parkland and boreal forests cover the northern two-thirds of the province. Prince Albert National Park, north of the fast-growing urban centre of Saskatoon, is a prime example, with lakes, coniferous trees, timber wolves, black bears, elk, moose, and bison. Also worth a visit is the capital city of Regina, for museums (like the McKenzie Art Gallery), the Royal Canadian Mounted Police Heritage Centre, and its downtown forest of 350,000 hand-planted trees.</p>

</div>	
				
<?php get_sidebar(); ?>
<?php get_footer(); ?>
