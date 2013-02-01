<?php get_header(); ?>

<img id="location-photo" src="http://www.where.ca/titleimages/h11_north.jpg" />

<div id="content2" class="region-page">
	
	<div class="breadcrumbs">
        <?php
        if(function_exists('bcn_display'))
        { bcn_display(); }
        ?>
	</div>
	
	<h2 id="location-title"><?php single_cat_title(); ?></h2>
    <div class="region-info">
        <img id="location-map" src="http://www.where.ca/titleimages/map11r_north.gif" />
        <h3>Top Destination</h3>
        <ul class="stylized">
        <li><span class="number">1</span><a href="http://www.where.ca/index.php/yukon">Alaska &amp; Yukon</a></li>
        </ul>
    </div>
	
	<p>Canada’s final frontier, the Territories—the <a href="http://www.where.ca/index.php/yukon">Yukon</a>, the <a href="http://www.where.ca/index.php/northwest-territories">Northwest Territories</a>, and <a href="http://www.where.ca/index.php/nunavut">Nunavut</a>—extend north from the 60th parallel up through the Arctic Circle. Though the Territories make up 40% of Canada, only 0.3% of Canadians lives here. Mammoth parcels of untouched wilderness are ripe for exploring by ski, snowmobile, snowshoe, foot, or bush plane, a common way to traverse this land of few roads.</p>
	<p>Despite stereotypes of frozen tundra and perpetual winter, many parts of the Yukon and Northwest Territories are verdant and lush, with evergreen trees and clear blue lakes. And while you might envision locals traipsing around in down-filled parkas and mukluks year-round, summer temperatures can reach a balmy 20°C in parts of the Territories. (Hardcore winter gear is recommended in some Arctic regions, however.)</p>
	<p>Among the wonders of this Great White North are unparalleled vistas of the Aurora Borealis (northern lights), thousands of caribou migrating across the tundra, and beluga whales and walruses in Arctic waters. Extreme adventurers have plenty of means for obtaining an adrenaline high, through ice climbing, hiking snow-covered cliffs, whitewater kayaking, and heli-skiing. And with Native Canadians constituting about half of the population in the Territories, each has numerous historic and modern-day First Nations sites, museums, tours, and crafts worth seeing.</p>


    <div class="region-guide">  
        <h3><img alt="arrow graphic" src="http://www.where.ca/images/arrow-blk.png"> The Guide</h3>
        <ul>
            <li>
                <a href="http://www.where.ca/index.php/yukon/"><img src="http://www.where.ca/titleimages/h11_yukon_198.jpg" alt="Image of Yukon"></a>
                <h4><a href="http://www.where.ca/index.php/yukon/">Alaska & Yukon</a></h4>            
            </li>
            <li>
                <a href="http://www.where.ca/index.php/northwest-territories/"><img src="http://www.where.ca/titleimages/h11_territories_198.jpg" alt="Image of the NW Territories"></a>
                <h4><a href="http://www.where.ca/index.php/northwest-territories/">Northwest Territories</a></h4>            
            </li>
            <li>
                <a href="http://www.where.ca/index.php/nunavut/"><img src="http://www.where.ca/titleimages/h11_nunavut_198.jpg" alt="Image of Nunavut"></a>
                <h4><a href="http://www.where.ca/index.php/nunavut/">Nunavut</a></h4>
            </li>          
        </ul>
    </div> 
    
    <div id="location-stories">
        <h3>Travel stories about <?php single_cat_title(); ?></h3>
            <?php
            //global $post;
            //$curr_datetime = time();
            $myposts = get_posts('numberposts=6&category=5423,6038,6039');
            foreach($myposts as $post) :
            $post_datetime = get_the_time('U');
            ?> 
    
        <div class="story-item">
                <span class="story-thumb"><a href="<?php the_permalink(); ?>" class="photo"><?php $post_thumb =			get_the_post_thumbnail($post->ID)?><?php echo($post_thumb); ?></a></span>		
                <h4 class="story-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span>(<?php the_category(', '); ?>)</span></h4>
        </div>
            <?php endforeach; ?>	                       
    </div>	

</div>	
				
<?php get_sidebar(); ?>
<?php get_footer(); ?>
