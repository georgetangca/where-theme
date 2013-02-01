<?php get_header(); ?>

<img id="location-photo" src="http://www.where.ca/titleimages/h11_praries.jpg" />

<div id="content2" class="region-page">
	
	<div class="breadcrumbs">
        <?php
        if(function_exists('bcn_display'))
        { bcn_display(); }
        ?>
	</div>
	
	<h2 id="location-title"><?php single_cat_title(); ?></h2>
    <div class="region-info">
        <img id="location-map" src="http://www.where.ca/titleimages/map11r_prairies.gif" />
        <h3>Top Destinations</h3>
        <ul class="stylized">
        <li><span class="number">1</span><a href="http://www.where.ca/winnipeg/">Winnipeg</a></li>
        </ul>
    </div>

	<p>“Home on the Range” is an ode to the U.S. state of Kansas, but it could just as easily have been written about the Prairie Provinces of <a href="http://www.where.ca/index.php/manitoba">Manitoba</a> or <a href="http://www.where.ca/index.php/saskatchewan">Saskatchewan</a>. Roaming buffalo? Check. (Though these days they’re more correctly called bison.) Deer and antelope? Check. A sky that’s not cloudy all day? Well, technically, Manitoba has the clearest skies of any Canadian province, and Saskatchewan has the sunniest days. Check and check.</p>
	<p>Natural attractions are the primary reason to come to the Prairies: in the southern regions, to see the buttes, badlands, and fields of wheat, canola, rye, and flax interrupted by the occasional weather-beaten barn; in more northern climes, for the pristine lakes and forests. In each province you can see bison roaming free: at Riding Mountain National Park in Manitoba and at Prince Albert National Park in Saskatchewan. And in the Prairies, the sky itself is an attraction. This canvas of blue and white, or, at sunset, pink, orange, yellow, and violet, has been painted and photographed a million times over.</p>

    <div class="region-guide">  
        <h3><img alt="arrow graphic" src="http://www.where.ca/images/arrow-blk.png"> The Guide</h3>
        <ul>
            <li>
                <a href="http://www.where.ca/index.php/manitoba/"><img src="http://www.where.ca/titleimages/h11_manitoba_198.jpg" alt="Image of Manitoba"></a>
                <h4><a href="http://www.where.ca/index.php/manitoba/">Manitoba</a></h4>            
            </li>       
            <li>
                <a href="http://www.where.ca/index.php/saskatchewan/"><img src="http://www.where.ca/titleimages/h11_saskatchewan_198.jpg" alt="Image of Saskatchewan"></a>
                <h4><a href="http://www.where.ca/index.php/saskatchewan/">Saskatchewan</a></h4>            
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
                <li><a href="http://www.where.ca/index.php/category/the-prairies/manitoba/winnipeg/">Winnipeg</a></li>                
            </ul>    
        </div>               
    </div>	

</div>	
				
<?php get_sidebar(); ?>
<?php get_footer(); ?>
