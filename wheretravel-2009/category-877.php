<?php get_header(); ?>

<img id="location-photo" src="http://www.where.ca/titleimages/h11_alberta.jpg" />

<div id="content2" class="region-page province-page">
	
	<div class="breadcrumbs">
        <?php
        if(function_exists('bcn_display'))
        { bcn_display(); }
        ?>
	</div>
	
	<h2 id="location-title"><?php single_cat_title(); ?></h2>
	<div class="region-info">
        <img id="location-map" src="http://www.where.ca/titleimages/map11p_AB.gif" />
        <h3>Top Destinations</h3>
        <ul class="stylized">
            <li><span class="number">1</span><a href="http://www.where.ca/calgary/">Calgary</a></li>
            <li><span class="number">2</span><a href="http://www.where.ca/edmonton/">Edmonton</a></li>
        </ul>
	</div>
    <p>The Great Plains meets the <a href="http://www.where.ca/canadianrockies/">Rockies</a> in Alberta, a colourful province of cowboys, sawtooth mountains, and oil sands where you can be wandering the red hoodoos in the badlands in the morning and skiing snowy slopes in the afternoon. Part of both the Prairies and the Rockies regions, the province has an embarrassment of natural riches, the most famous being <a href="http://www.where.ca/index.php/category/the-west/canadianrockies/banff/">Banff</a> and <a href="http://www.where.ca/index.php/category/the-west/canadianrockies/jasper/">Jasper</a> national parks. These combined 17,500 square km of meadows and mountains, turquoise lakes and glaciers, alpine forests and hot springs are connected by one of the most scenic highways in the world—the Icefields Parkway.</p>
    <p>The rest of the province has some fascinating sights as well, such as Head-Smashed-in Buffalo Jump, one of the best-preserved buffalo jumps in North America, and Dinosaur Provincial Park, where more than 300 dinosaur skeletons, some dating back 75 million years, have been uncovered. An hour’s drive east of Banff is Alberta’s largest city, <a href="http://www.where.ca/calgary/">Calgary</a>. Once known as Cowtown, it is now sophisticated and rapidly evolving, fueled by the oil, energy, and technology industries. But you can still get your cowboy fix at the annual Calgary Stampede, an homage to the Canadian Wild West, with steer wrestling, bull riding, and barrel racing. <a href="http://www.where.ca/edmonton/">Edmonton</a>, 300 km north of Calgary, may be famed for its colossal West Edmonton Mall, home to the world’s largest indoor amusement park, but it is also known as the Festival City, with music, theatre, and art events rivalling those of a city five times its size.</p>

    <div class="region-guide">  
        <h3><img alt="arrow graphic" src="http://www.where.ca/images/arrow-blk.png"> The Guide</h3>
        <ul>
            <li>
                <a href="http://www.where.ca/calgary/"><img src="http://www.where.ca/titleimages/h11_calgary_198.jpg" alt="Image of Calgary"></a>
                <h4><a href="http://www.where.ca/calgary/">Calgary</a></h4>
            </li>
            <li>
                <a href="http://www.where.ca/edmonton/"><img src="http://www.where.ca/titleimages/h11_edmonton_198.jpg" alt="Image of Edmonton"></a>
                <h4><a href="http://www.where.ca/edmonton/">Edmonton</a></h4>            
            </li>       
        </ul>
    </div>

    <div id="location-stories">
        <h3>Travel stories about <?php single_cat_title(); ?></h3>
            <?php
            //global $post;
            //$curr_datetime = time();
            $myposts = get_posts('numberposts=6&category=16,20');
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
                <li><a href="http://www.where.ca/index.php/category/the-prairies/alberta/calgary/">Calgary</a></li>
                <li><a href="http://www.where.ca/index.php/category/the-prairies/alberta/edmonton/">Edmonton</a></li>            
            </ul>    
        </div> 
    </div>	
</div>	
				
<?php get_sidebar(); ?>
<?php get_footer(); ?>
