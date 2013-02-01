<?php get_header(); ?>

<img id="location-photo" src="http://www.where.ca/titleimages/h11_novascotia.jpg" />

<div id="content2" class="region-page province-page">
	
	<div class="breadcrumbs">
        <?php
        if(function_exists('bcn_display'))
        { bcn_display(); }
        ?>
	</div>
	
	<h2 id="location-title"><?php single_cat_title(); ?></h2>
    <div class="region-info">
        <img id="location-map" src="http://www.where.ca/titleimages/map11p_NS.gif" />
        <h3>Top Destination</h3>
        <ul class="stylized">
            <li><span class="number">1</span><a href="http://www.where.ca/index.php/category/atlantic-canada/nova-scotia/halifax/">Halifax</a></li>
        </ul>
    </div>
    <p>You can't help but call Nova Scotia picturesque, with its historic fishing villages of brightly painted clapboard cottages huddled around rocky inlets. Separated from neighbouring <a href="http://www.where.ca/index.php/new-brunswick">New Brunswick</a> by just a 15-km stretch of land, the province is almost entirely surrounded by the sea, which lends a perpetually salty tinge to the air and a bias to the cuisine. You won't go hungry if your tastes tend toward fresh sweet lobster, Digby scallops the size of golf balls, or seafood chowder.</p>
	<p>But there's more to Nova Scotia than postcard-worthy lighthouses and lobster traps piled high by bearded fisherfolk. <a href="http://www.where.ca/halifax/">Halifax</a>, its capital and urban centre, is a historic harbour city with a vibrant downtown. Canada's second-smallest province has two national parks and plentiful outdoor activities, like surfing, sea kayaking, whale watching, and—this being a Scots-inspired province, after all (Nova Scotia means New Scotland)—more than 100 places to golf.</p>
	<p>In the northeastern reaches of the peninsula, the Cabot Trail winds 298 km along verdant, hilly coastline to Cape Breton Island, an area perhaps most visually and culturally reminiscent of the province's namesake Scotland. Canada's only single-malt whisky is brewed here and evenings are often accompanied by Celtic music. To get into the spirit, seek out a <em>ceilidh</em> (a relaxed gathering with fiddle playing) or step-dancing performance.</p>

    <div class="region-guide">  
        <h3><img alt="arrow graphic" src="http://www.where.ca/images/arrow-blk.png"> The Guide</h3>
        <ul>
            <li>
                <a href="http://www.where.ca/index.php/category/atlantic-canada/nova-scotia/halifax/"><img src="http://www.where.ca/titleimages/h11_halifax_198.jpg" alt="Image of Halifax"></a>            
                <h4><a href="http://www.where.ca/index.php/category/atlantic-canada/nova-scotia/halifax/">Halifax</a></h4>
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
            <h4 class="story-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span>(<?php the_category(', '); ?>)</span></h4>
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
