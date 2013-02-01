<?php get_header(); ?>

<img id="location-photo" src="http://www.where.ca/titleimages/h11_canada.jpg" />

	<div id="content2">
	<!--index.php-->
        <h2 class="region-map">CANADA</h2>
        <div class="region-map">
            <img src="http://www.where.ca/images/canada-region-map.png" alt="Map of Canada with regions indicated">
                <p class="the-north"><a href="/index.php/the-north/">The North</a></p>
                <p class="the-west"><a href="/index.php/the-west/">The West</a></p>
                <p class="the-prairies"><a href="/index.php/the-prairies/">The Prairies</a></p>
                <p class="central-canada"><a href="/index.php/central-canada/">Central Canada</a></p>
                <p class="atlantic-canada"><a href="/index.php/atlantic-canada/">Atlantic Canada</a></p>        
        </div>
        
        <div class="top-destinations">
            <h3>Top 12 Travel Destinations</h3>
			<ul class="stylized col1">
                <li><span class="number">1</span><a href="/toronto/">Toronto</a></li>      
                <li><span class="number">2</span><a href="/calgary/">Calgary</a></li>
                <li><span class="number">3</span><a href="/winnipeg/">Winnipeg</a></li>
                <li><span class="number">4</span><a href="/halifax/">Halifax</a></li>
            </ul>
            <ul class="stylized col2">
                <li><span class="number">5</span><a href="/edmonton/">Edmonton</a></li>
                <li><span class="number">6</span><a href="/vancouver/">Vancouver</a></li>
                <li><span class="number">7</span><a href="/canadianrockies/">Canadian Rockies</a></li>
                <li><span class="number">8</span><a href="/ottawa/">Ottawa</a></li>
            </ul>
            <ul class="stylized col3">            
                <li><span class="number">9</span><a href="/victoria/">Victoria</a></li> 
                <li><span class="number">10</span><a href="/muskoka/">Muskoka/Parry Sound</a></li>
                <li><span class="number">11</span><a href="/whistler/">Whistler</a></li>
                <li><span class="number">12</span><a href="/index.php/yukon/">Alaska & Yukon</a></li>
			</ul>
        </div>
        
        <div class="region-guide">
            <ul>
                <li class="introduction">
                    <img src="http://www.where.ca/images/arrow-blk.png" alt="arrow graphic">
                    <h3>The Guide</h3>
                    <p>Explore a range of destinations in Canada: the regions, the provinces, and featured cities.</p>        
                </li>
                <li>
                    <a href="/index.php/the-north/"><img src="http://www.where.ca/images/region-guide-north.jpg" alt="Image depicting Northern Canada"></a>
                    <h4><a href="/index.php/the-north/">The North</a></h4>
                    <p><a href="/index.php/northwest-territories/">The Northwest Territories</a></p> 
                    <p><a href="/index.php/yukon/">Alaska & Yukon</a></p>     
                    <p><a href="/index.php/nunavut/">Nunavut</a></p>  
                </li>    
                <li class="last-item">
                    <a href="/index.php/atlantic-canada/"><img src="http://www.where.ca/images/region-guide-atlantic.jpg" alt="Image depicting Atlantic Canada"></a>
                    <h4><a href="/index.php/atlantic-canada/">Atlantic</a></h4>
                    <p><a href="/index.php/newfoundland/">Newfoundland and Labrador</a></p> 
                    <p><a href="/index.php/nova-scotia/">Nova Scotia</a>: <a href="/halifax/">Halifax</a></p>  
                    <p><a href="/index.php/new-brunswick/">New Brunswick</a></p> 
                    <p><a href="/index.php/prince-edward-island/">Prince Edward Island</a></p> 
                </li>
                <li>
                    <a href="/index.php/the-west/"><img src="http://www.where.ca/images/region-guide-west.jpg" alt="Image depicting Western Canada"></a>
                    <h4><a href="/index.php/the-west/">The West</a></h4>
                    <p><a href="/index.php/british-columbia/">British Columbia</a>: <a href="/vancouver/">Vancouver</a>, <a href="/victoria/">Victoria</a>, <a href="/whistler/">Whistler</a></p> 
                    <p><a href="/canadianrockies/">The Canadian Rockies</a>: <a href="/index.php/category/the-west/canadianrockies/banff/">Banff, Canmore & Area</a>, <a href="/index.php/category/the-west/canadianrockies/jasper/">Jasper & Area</a></p>     
                </li>    
                <li>
                    <a href="/index.php/the-prairies/"><img src="http://www.where.ca/images/region-guide-prairies.jpg" alt="Image depicting the Prairies in Canada"></a>
                    <h4><a href="/index.php/the-prairies/">The Prairies</a></h4>
                    <p><a href="/index.php/alberta/">Alberta</a>: <a href="/calgary/">Calgary</a>, <a href="/edmonton/">Edmonton</a></p> 
                    <p><a href="/index.php/saskatchewan/">Saskatchewan</a></p>     
                    <p><a href="/index.php/manitoba/">Manitoba</a>: <a href="/winnipeg/">Winnipeg</a></p>       
                </li>
                <li class="last-item">
                    <a href="/index.php/central-canada/"><img src="http://www.where.ca/images/region-guide-central.jpg" alt="Image depicting Central Canada"></a>
                    <h4><a href="/index.php/central-canada/">Central</a></h4>
                    <p><a href="/index.php/ontario/">Ontario</a>: <a href="/muskoka/">Muskoka/Parry Sound</a>, <a href="/ottawa/">Ottawa</a>, <a href="/toronto/">Toronto</a></p> 
                    <p><a href="/index.php/quebec/">Quebec</a></p>                  
                </li>
            </ul>
        </div>    
        
        <!--div id="location-stories">
            <h3>Travel stories from across Canada</h3>
                <?php
                //global $post;
                //$curr_datetime = time();
                $myposts = get_posts('numberposts=20');
                foreach($myposts as $post) :
                $post_datetime = get_the_time('U');
                ?> 
        
        <div class="story-item">
                <span class="story-thumb"><a href="<?php the_permalink(); ?>" class="photo"><?php $post_thumb =			get_the_post_thumbnail($post->ID)?><?php echo($post_thumb); ?></a></span>		
                <h4 class="story-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> (<?php the_category(', '); ?>)</h4>
        </div>
                <?php endforeach; ?>					
        </div-->	

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
