<?php get_header(); ?>

<img id="location-photo" src="http://www.where.ca/titleimages/h11_britishcolumbia.jpg" />

<div id="content2" class="region-page province-page">
	
	<div class="breadcrumbs">
        <?php
        if(function_exists('bcn_display'))
        { bcn_display(); }
        ?>
	</div>
	
	<h2 id="location-title"><?php single_cat_title(); ?></h2>
    <div class="region-info">
        <img id="location-map" src="http://www.where.ca/titleimages/map11p_BC.gif" />
        <h3>Top Destinations</h3>
        <ul class="stylized">
            <li><span class="number">1</span><a href="http://www.where.ca/vancouver/">Vancouver</a></li>
            <li><span class="number">2</span><a href="http://www.where.ca/victoria/">Victoria</a></li>
            <li><span class="number">3</span><a href="http://www.where.ca/whistler/">Whistler</a></li>
        </ul>
    </div>
	<p>British Columbia is head-to-toe gorgeous, with 26,000 km of coastline and terrain ranging from old-growth rainforest to glaciers, mountains, waterfalls, forests, and brilliantly blue lakes. So mild is southern BC’s climate that vineyards produce arguably Canada’s best wines, in the Okanagan Valley. But seek snow and ye shall find: skiing and snowboarding are top attractions, at resorts like <a href="http://www.where.ca/index.php/category/the-west/british-columbia/whistler/">Whistler</a> and in the <a href="http://www.where.ca/canadianrockies/">Rockies</a> and other eastern ranges.</p>
	<p>BC’s largest city, <a href="http://www.where.ca/vancouver/">Vancouver</a> is wedged between mountains and the sea, melding trendy nightlife, a 405-acre urban forest (Stanley Park), and a relaxed west-coast temperament that keeps the yoga studios and indie coffee shops afloat. Just across the strait, Vancouver Island has fantastic whale watching at the Pacific Rim National Park Reserve.</p>
	<p>As you travel north, distances between destinations widen and roads drop off the map. In the Cariboo region you can trod the old Gold Rush trail and saddle up on working-ranch resorts. Dawson Creek, near the northern <a href="http://www.where.ca/index.php/alberta">Alberta</a> border, is the starting point for the Alaska Highway, a paved route through mountainous wilderness to the <a href="http://www.where.ca/index.php/yukon">Yukon</a> and Alaska. Along BC’s northern coast, ferries ply the lower Inside Passage in summer, and provide transport to the Haida Gwaii, an archipelago of 200 islands known as Canada’s Galápagos for their diverse and endemic species.</p>

    <div class="region-guide">  
        <h3><img alt="arrow graphic" src="http://www.where.ca/images/arrow-blk.png"> The Guide</h3>
        <ul>
            <li>
                <a href="http://www.where.ca/index.php/vancouver/"><img src="http://www.where.ca/titleimages/h11_vancouver_198.jpg" alt="Image of Vancouver"></a>
                <h4><a href="http://www.where.ca/index.php/vancouver/">Vancouver</a></h4>
            </li>
            <li>
                <a href="http://www.where.ca/index.php/victoria/"><img src="http://www.where.ca/titleimages/h11_victoria_198.jpg" alt="Image of Victoria"></a>
                <h4><a href="http://www.where.ca/index.php/victoria/">Victoria</a></h4>            
            </li>       
            <li>
                <a href="http://www.where.ca/index.php/whistler/"><img src="http://www.where.ca/titleimages/h11_whistler_198.jpg" alt="Image of Whistler"></a>
                <h4><a href="http://www.where.ca/index.php/whistler/">Whistler</a></h4>            
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
