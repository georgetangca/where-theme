<?php get_header(); ?>

<img id="location-photo" src="http://www.where.ca/titleimages/h11_manitoba.jpg" />

<div id="content2" class="region-page province-page">
	
	<div class="breadcrumbs">
        <?php
        if(function_exists('bcn_display'))
        { bcn_display(); }
        ?>
	</div>
	
	<h2 id="location-title"><?php single_cat_title(); ?></h2>
<div class="region-info">
	<img id="location-map" src="http://www.where.ca/titleimages/map11p_MB.gif" />
	<h3>Top Destination</h3>
	<ul class="stylized">
	<li><span class="number">1</span><a href="http://www.where.ca/winnipeg/">Winnipeg</a></li>
	</ul>
</div>

	<p>In terms of getting away from it all, this is the place. Manitoba is larger than the U.S. state of California but has only 3% of the population, leaving huge swaths of land uninhabited. The overwhelmingly hilly, rocky, and watery terrain—decidedly un-prairie-like—might catch you off guard, but 60% of the province is within the Canadian Shield. In only a small southern portion of the province do you find those iconic stretches of canola and wheat fields.</p>
	<p>Take advantage Manitoba’s natural assets by flying into a northern fishing lodge, tracking bison herds in Riding Mountain National Park, spending time in one of 175 provincial parks, or venturing to the tiny northern town of Churchill, the world’s most accessible polar-bear-viewing spot. (If you miss the bears, catch beluga whales in summer and the northern lights from January to April.).</p>
	<p>In southern Manitoba rejoin civilization in Gimli, the largest Icelandic community outside of Iceland, at Dauphin’s Ukrainian Festival, or in the provincial capital of <a href="http://www.where.ca/winnipeg/">Winnipeg</a>. The gateway to the <a href="http://www.where.ca/index.php/the-west">Canadian West</a>, Winnipeg is home to a lively French quarter and the Canadian Mint. Its surprisingly strong arts scene includes the world’s largest contemporary Inuit art collection (at the Winnipeg Art Gallery) and the oldest dance company in Canada (the Royal Winnipeg Ballet).</p>

    <div class="region-guide">  
        <h3><img alt="arrow graphic" src="http://www.where.ca/images/arrow-blk.png"> The Guide</h3>
        <ul>
            <li>
                <a href="http://www.where.ca/winnipeg/"><img src="http://www.where.ca/titleimages/h11_winnipeg_198.jpg" alt="Image of Winnipeg"></a><h4><a href="http://www.where.ca/winnipeg/">Winnipeg</a></h4>
            </li>    
        </ul>
    </div>
    
    <div id="location-stories">
        <h3>Travel stories about <?php single_cat_title(); ?></h3>
            <?php
            //global $post;
            //$curr_datetime = time();
            $myposts = get_posts('numberposts=6&category=18');
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
                <li><a href="http://www.where.ca/index.php/category/the-prairies/manitoba/winnipeg/">Winnipeg</a> </li>              
            </ul>    
        </div>     
    </div>	
</div>	
				
<?php get_sidebar(); ?>
<?php get_footer(); ?>
