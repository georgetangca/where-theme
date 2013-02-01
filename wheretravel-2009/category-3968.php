<?php get_header(); ?>

<img id="location-photo" src="http://www.where.ca/titleimages/h11_ontario.jpg" />

<div id="content2" class="region-page province-page">
	
	<div class="breadcrumbs">
	<?php
	if(function_exists('bcn_display'))
	{ bcn_display(); }
	?>
	</div>
	
	<h2 id="location-title"><?php single_cat_title(); ?></h2>
    <div class="region-info">
        <img id="location-map" src="http://www.where.ca/titleimages/map11p_ON.gif" />
        <h3>Top Destinations</h3>
        <ul class="stylized">
        <li><span class="number">1</span><a href="http://www.where.ca/toronto/">Toronto</a></li>
        <li><span class="number">2</span><a href="http://www.where.ca/ottawa/">Ottawa</a></li>
        <li><span class="number">3</span><a href="http://www.where.ca/muskoka/">Muskoka/Parry Sound</a></li>
        </ul>
    </div>
	<p>In terms of cities, culture, media, sports, manufacturing, banking, and just plain “stuff,” Ontario is Canada’s heaviest hitter. Forty percent of Canadians live here, most of them in <a href="http://www.where.ca/toronto/">Toronto</a>, Canada’s largest city. Anchored by the iconic CN Tower, this ethnically diverse city of 5 million has high-profile restaurants, museums, arts institutions, and events (like the Toronto International Film Festival).</p>
	<p>“Diverse” could also apply to Ontario’s many attractions and regions, from wineries in the Niagara Escarpment to ice fishing on Lake Simcoe to Canada’s capital, <a href="http://www.where.ca/ottawa/">Ottawa</a>, and its historic Parliament Buildings. A watery province, Ontario borders three Great Lakes (Ontario, Erie, and Superior) and is speckled with hundreds of thousands of smaller lakes ideal for swimming, fishing, canoeing, and kayaking, in regions like the <a href="http://www.where.ca/muskoka/">Muskokas</a>, Georgian Bay, and the Thousand Islands. The most famous water feature hardly needs an introduction: the thundering deluge at Niagara Falls.</p>
	<p>Make your way north of Southern Ontario (where 95% of Ontarians live) to the lower Canadian Shield and you’re practically a pioneer. In this region of sparkling blue pine-fringed waterways and uninhabited islands, you can encounter elk, moose, and bears. Canoeing in Algonquin Provincial Park is perhaps the quintessential Canadian wilderness experience. Farther north are 17th-century trading outposts like Moose Factory, and fly-in destinations like Polar Bear Provincial Park, where you can spot the lumbering mammals in Hudson Bay.</p>

    <div class="region-guide">  
        <h3><img alt="arrow graphic" src="http://www.where.ca/images/arrow-blk.png"> The Guide</h3>
        <ul>
            <li>
                <a href="http://www.where.ca/index.php/category/central-canada/ontario/muskoka/"><img src="http://www.where.ca/titleimages/h11_muskoka_198.jpg" alt="Image of Muskoka"></a>
                <h4><a href="http://www.where.ca/index.php/category/central-canada/ontario/muskoka/">Muskoka</a></h4>
            </li>
            <li>
                <a href="http://www.where.ca/index.php/category/central-canada/ontario/ottawa/"><img src="http://www.where.ca/titleimages/h11_ottawa_198.jpg" alt="Image of Ottawa"></a>
                <h4><a href="http://www.where.ca/index.php/category/central-canada/ontario/ottawa/">Ottawa</a></h4>            
            </li>       
            <li>
                <a href="http://www.where.ca/index.php/category/central-canada/ontario/toronto/"><img src="http://www.where.ca/titleimages/h11_toronto_198.jpg" alt="Image of Toronto"></a>
                <h4><a href="http://www.where.ca/index.php/category/central-canada/ontario/toronto/">Toronto</a></h4>            
            </li>
        </ul>
    </div>

    <div id="location-stories">
        <h3>Travel stories about <?php single_cat_title(); ?></h3>
            <?php
            //global $post;
            //$curr_datetime = time();
            $myposts = get_posts('numberposts=6&category=3,5,21');
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
                    <li><a href="http://www.where.ca/index.php/category/central-canada/ontario/muskoka/">Muskoka</a></li>
                    <li><a href="http://www.where.ca/index.php/category/central-canada/ontario/ottawa/">Ottawa</a></li>
                    <li><a href="http://www.where.ca/index.php/category/central-canada/ontario/toronto/">Toronto</a></li>                
                </ul>    
            </div>               
    </div>	
</div>	
				
<?php get_sidebar(); ?>
<?php get_footer(); ?>
