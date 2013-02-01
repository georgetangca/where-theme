<?php get_header(); ?>

<img id="location-photo" src="http://www.where.ca/titleimages/h11_atlantic.jpg" />

<div id="content2" class="region-page">
	
	<div class="breadcrumbs">
        <?php
        if(function_exists('bcn_display'))
        { bcn_display(); }
        ?>
	</div>
	
	<h2 id="location-title"><?php single_cat_title(); ?></h2>
    <div class="region-info">
        <img id="location-map" src="http://www.where.ca/titleimages/map11r_atlantic.gif" />
        <h3>Top Destination</h3>
        <ul class="stylized">
        <li><span class="number">1</span><a href="http://www.where.ca/index.php/category/atlantic-canada/nova-scotia/halifax/">Halifax</a></li>
        </ul>
    </div>
	<p>Lobster and Celtic music. Icebergs and fjords. Whale-watching and beach-combing. These are just a handful of the charms of Atlantic Canada, the country’s easternmost region, comprised of Canada’s three smallest provinces (<a href="http://www.where.ca/index.php/nova-scotia">Nova Scotia</a>, <a href="http://www.where.ca/index.php/new-brunswick">New Brunswick</a>, and <a href="http://www.where.ca/index.php/prince-edward-island">Prince Edward Island</a>), known collectively as the Maritimes, and—across the ocean and a time zone away—the province of <a href="http://www.where.ca/index.php/newfoundland">Newfoundland and Labrador</a>.</p>
	<p>Atlantic Canada’s unique character has been shaped by its Scottish, Irish, English, Acadian, and First Nations roots, and, of course, by its proximity to the sea. The great outdoors is a great reason to visit. Beaches line the abundant coastline, and you can kayak, surf, sail, fish, golf, hike, bike, ski, snowshoe, and go whale-watching in every province. Landscapes include rolling farmland, landlocked fjords, dense forests, and rocky shores anchored by lighthouses. The region is home to two of the country's most beautiful driving trails, Cape Breton's Cabot Trail and Newfoundland's Viking Trail, and one of its best cycling trails: PEI’s Confederation Trail.</p>
	<p>Visit one of North America’s first cities (the still-thriving St. John’s) and its only Viking settlement, both in Newfoundland; explore an Acadian village in New Brunswick; take Celtic step-dancing lessons in Nova Scotia; or trod in the footsteps of the founders of Canadian Confederation in PEI. Wherever you go, you’ll experience Atlantic Canada’s most memorable attraction: the warmth and hospitality of its people.</p>

    <div class="region-guide">  
        <h3><img alt="arrow graphic" src="http://www.where.ca/images/arrow-blk.png"> The Guide</h3>
        <ul>
            <li>
                <a href="http://www.where.ca/index.php/new-brunswick/"><img src="http://www.where.ca/titleimages/h11_newbrunswick_198.jpg" alt="Image of New Brunswick"></a>
                <h4><a href="http://www.where.ca/index.php/new-brunswick/">New Brunswick</a></h4>            
            </li>
            <li>
                <a href="http://www.where.ca/index.php/newfoundland/"><img src="http://www.where.ca/titleimages/h11_newfoundland_198.jpg" alt="Image of Newfoundland"></a>
                <h4><a href="http://www.where.ca/index.php/newfoundland/">Newfoundland and Labrador</a></h4>
            </li>
            <li>
                <a href="http://www.where.ca/index.php/nova-scotia/"><img src="http://www.where.ca/titleimages/h11_novascotia_198.jpg" alt="Image of Nova Scotia"></a>
                <h4><a href="http://www.where.ca/index.php/nova-scotia/">Nova Scotia</a></h4>            
            </li>
            <li>
                <a href="http://www.where.ca/index.php/prince-edward-island/"><img src="http://www.where.ca/titleimages/h11_princeedwardisland_198.jpg" alt="Image of PEI"></a>
                <h4><a href="http://www.where.ca/index.php/prince-edward-island/">Prince Edward Island</a></h4>            
            </li>            
        </ul>
    </div>                    
    <div id="location-stories">
        <h3>Travel stories about <?php single_cat_title(); ?></h3>
            <?php
            //global $post;
            //$curr_datetime = time();
            $myposts = get_posts('numberposts=6&category=17');
            foreach($myposts as $post) :
            $post_datetime = get_the_time('U');
            ?> 
    
        <div class="story-item">
            <span class="story-thumb"><a href="<?php the_permalink(); ?>" class="photo"><?php $post_thumb =			get_the_post_thumbnail($post->ID)?><?php echo($post_thumb); ?></a></span>		
            <h4 class="story-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span>(<?php the_category(', '); ?>)</span></h4>
        </div>
            <?php endforeach; ?>					
        <div class="read-more">
            <p><img alt="arrow graphic" src="http://www.where.ca/images/arrow-blk.png"> See more from&#133;</p>
            <ul>
                <li><a href="http://www.where.ca/index.php/category/atlantic-canada/nova-scotia/halifax/">Halifax</a></li>
            </ul>    
        </div>    
    </div>	

</div>	
				
<?php get_sidebar(); ?>
<?php get_footer(); ?>
