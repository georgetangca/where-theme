<?php get_header(); ?>

<img id="location-photo" src="http://www.where.ca/titleimages/h11_princeedwardisland.jpg" />

<div id="content2" class="region-page province-page">
	
	<div class="breadcrumbs">
        <?php
        if(function_exists('bcn_display'))
        { bcn_display(); }
        ?>
	</div>
	
	<h2 id="location-title"><?php single_cat_title(); ?></h2>
    <div class="region-info">
        <img id="location-map" src="http://www.where.ca/titleimages/map11p_PE.gif" />
    </div>
	<p>If you’ve read <em>Anne of Green Gables</em> you have a fairly accurate image of this <a href="http://www.where.ca/index.php/atlantic-canada">Maritime</a> island province; it hasn't changed significantly since Lucy Maud Montgomery's first novel was published in 1908. Attractions devoted to Anne—including a re-created Avonlea Village—are clustered around the pretty town of Cavendish, near Montgomery's childhood home.</p>
	<p>Canada's smallest province by far (it’s just 40 km from end to end), PEI is blanketed with rolling farmland, fields of violet flowers, dunes, and white-sand beaches. Charlottetown (population 32,000), the capital, is a quaint harbour city with tree-lined streets and big Victorian homes. It makes a good home base, since nearly all the island’s sights are within an hour's drive.</p>
	<p>PEI’s summer season is just two months (July and August), and visitors make the most of it by deep-sea fishing, golfing, beachcombing, and cycling some or all of the 278-km Confederation Trail that traverses the island along abandoned railway lines. In this easygoing province, tours are often hands-on: fishermen can take you on ride-alongs to dig for clams and tong for oysters, for example. Whether you haul them in yourself or not, be sure to try PEI’s famous local delicacies: mussels and Malpeque oysters.</p>
</div>	
				
<?php get_sidebar(); ?>
<?php get_footer(); ?>
