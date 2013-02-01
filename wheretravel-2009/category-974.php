<?php get_header(); ?>

<img id="location-photo" src="http://www.where.ca/titleimages/h11_westcoast.jpg" />

<div id="content2" class="region-page">
	<div class="breadcrumbs">
        <?php
        if(function_exists('bcn_display'))
        { bcn_display(); }
        ?>
	</div>
	
	<h2 id="location-title"><?php single_cat_title(); ?></h2>
    <div class="region-info">
        <img id="location-map" src="http://www.where.ca/titleimages/map11r_westcoast.gif" />
        <h3>Top Destinations</h3>
        <ul class="stylized">
            <li><span class="number">1</span><a href="http://www.where.ca/vancouver/">Vancouver</a></li>
            <li><span class="number">2</span><a href="http://www.where.ca/victoria/">Victoria</a></li>
            <li><span class="number">3</span><a href="http://www.where.ca/whistler/">Whistler</a></li>
        </ul>
    </div>

	<p>As the crow flies, Canada’s Pacific coast—which belongs entirely to the verdant and ecologically rich province of <a href="http://www.where.ca/index.php/british-columbia/">British Columbia</a>—is 1,000 km tip to toe. But its true length, were you to unravel its serpentine route around thousands of inlets and islands, is nearly 26,000 km.</p>
	<p>Most of the West Coast population congregates in and around <a href="http://www.where.ca/vancouver/">Vancouver</a> (pop. 2 million), the country’s third-largest metropolitan area, justly famed for its scenery: a tableau of snowy mountains looming above a waterfront skyline. A quick ferry across the strait is Vancouver Island and the provincial capital of <a href="http://www.where.ca/victoria/">Victoria</a> (pop. 83,000). Quite the northern hub in the early 1900s, the city still exudes Victorian charm in its manicured flower gardens and foremost attraction: the (admittedly touristy) afternoon tea at the Fairmont Empress Hotel, a tradition since 1908.</p>
	<p>To experience some of most pristine environments on the planet, go north: to one of the world’s largest remaining tracts of temperate rainforest, calm channels backed by the Coastal Mountains (amazing for kayaking), forests of giant old-growth spruce, rivers teeming with wild salmon, a grizzly bear sanctuary, and the Haida Gwaii, a north-coast archipelago with remnants of Haida villages, where orca whales, sea lions, and seals play offshore. (Pacific Rim National Park, on Vancouver Island, is another hotspot for diverse Pacific sea life.) Accessing these areas is easier than ever: Numerous cruises and boat tours ply portions of the coast and even the entire Inside Passage to Alaska.</p>

    <div class="region-guide">  
        <h3><img alt="arrow graphic" src="http://www.where.ca/images/arrow-blk.png"> The Guide</h3>
        <ul>
            <li>
                <a href="http://www.where.ca/index.php/british-columbia/"><img src="http://www.where.ca/titleimages/h11_britishcolumbia_198.jpg" alt="Image of British Columbia"></a>
                <h4><a href="http://www.where.ca/index.php/british-columbia/">British Columbia</a></h4>            
            </li>          
        </ul>
    </div>  

    <div id="location-stories">
        <h3>Travel stories about <?php single_cat_title(); ?></h3>
            <?php
            //global $post;
            //$curr_datetime = time();
            $myposts = get_posts('numberposts=6&category=19,741,742');
            foreach($myposts as $post) :
            $post_datetime = get_the_time('U');
            ?> 
    
        <div class="story-item">
            <span class="story-thumb"><a href="<?php the_permalink(); ?>" class="photo"><?php $post_thumb =			get_the_post_thumbnail($post->ID)?><?php echo($post_thumb); ?></a></span>		
            <h4 class="story-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span>(<?php the_category(', '); ?>)</span></h4>
        </div>
            <?php endforeach; ?>		
        <div class="read-more">
            <p><img alt="arrow graphic" src="http://www.where.ca/images/arrow-blk.png"> See more from&#133;</p>
            <ul>
                <li><a href="http://www.where.ca/index.php/category/the-west/british-columbia/vancouver/">Vancouver</a></li>
                <li><a href="http://www.where.ca/index.php/category/the-west/british-columbia/victoria/">Victoria</a></li>
                <li><a href="http://www.where.ca/index.php/category/the-west/british-columbia/whistler/">Whistler</a></li>                
            </ul>    
        </div>      
    </div>	
</div>	
				
<?php get_sidebar(); ?>
<?php get_footer(); ?>
