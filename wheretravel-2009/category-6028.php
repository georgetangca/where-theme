<?php get_header(); ?>

<img id="location-photo" src="http://www.where.ca/titleimages/h11_west.jpg" />

<div id="content2" class="region-page">
	<div class="breadcrumbs">
        <?php
        if(function_exists('bcn_display'))
        { bcn_display(); }
        ?>
	</div>
	
	<h2 id="location-title"><?php single_cat_title(); ?></h2>
    <div class="region-info">
        <img id="location-map" src="http://www.where.ca/titleimages/map11r_west.gif" />
        <h3>Top Destinations</h3>
        <ul class="stylized">
        <li><span class="number">1</span><a href="http://www.where.ca/calgary/">Calgary</a></li>
        <li><span class="number">2</span><a href="http://www.where.ca/edmonton/">Edmonton</a></li>
            <li><span class="number">3</span><a href="http://www.where.ca/canadianrockies/">Canadian Rockies</a></li>
        </ul>
    </div>

	<p>Few destinations rival the <a href="http://www.where.ca/canadianrockies/">Rockies</a> for sheer beauty. Angular, snowcapped peaks rise thousands of meters above sapphire lakes, pine forests, meadows, and glaciers. The Rocky Mountains cover portions of <a href="http://www.where.ca/index.php/alberta">Alberta</a> and <a href="http://www.where.ca/index.php/british-columbia">British Columbia</a>, but they’re far from the provinces’ only terrain. Alberta is largely prairies, and BC is permeated by several other mountain ranges, interior plateaus, and low-lying coastal areas. So poignant and prominent are the 65-million-year-old Rockies along the BC–Alberta border, however, that they’ve become a symbol for all of Canada west of <a href="http://www.where.ca/calgary/">Calgary</a>.</p>
	<p>Nature is the main event everywhere you go in the West: nearly every car on the road is mounted with skis, a kayak, or bikes (or all three). Some of North America’s first, best, and most-visited national parks are here, including <a href="http://www.where.ca/index.php/category/the-west/canadianrockies/jasper/">Jasper</a> and <a href="http://www.where.ca/index.php/category/the-west/canadianrockies/banff/">Banff</a> and the country’s largest national park: the northern Wood Buffalo Park, a natural habitat for the threatened bison. Within these parks are thousands of kilometers of trails for hiking, biking, and cross-country skiing, and thousands of rivers for canoeing, kayaking, and rafting. The skiing and snowboarding in western Canada is epic, a fact widely advertised during the 1988 and 2010 Winter Olympics in <a href="http://www.where.ca/calgary/">Calgary</a> and <a href="http://www.where.ca/vancouver/">Vancouver</a>/<a href="http://www.where.ca/whistler/">Whistler</a>. But you can enjoy yourself without breaking a sweat: Those mountain views are just as gorgeous from a luxurious hot springs spa, while touring wineries or golfing, or from a table for two at the newest trend-setting restaurant in Calgary or a resort town. And just a few hours north is <a href="http://www.where.ca/edmonton/">Edmonton</a>, Alberta’s oil-boom-era capital, which has a lively arts scene and the distinction of being the northernmost city of a million-plus on the continent</p>

    <div class="region-guide">  
        <h3><img alt="arrow graphic" src="http://www.where.ca/images/arrow-blk.png"> The Guide</h3>
        <ul>
            <li>
                <a href="http://www.where.ca/canadianrockies/"><img src="http://www.where.ca/titleimages/h11_rockies_198.jpg" alt="Image of the Canadian Rockies"></a>
                <h4><a href="http://www.where.ca/canadianrockies/">Canadian Rockies</a></h4>
            </li>          
            <li>
                <a href="http://www.where.ca/index.php/alberta/"><img src="http://www.where.ca/titleimages/h11_alberta_198.jpg" alt="Image of Alberta"></a>
                <h4><a href="http://www.where.ca/index.php/alberta/">Alberta</a></h4>
            </li>
        </ul>
    </div>  

    <div id="location-stories">
        <h3>Travel stories about <?php single_cat_title(); ?></h3>
            <?php
            //global $post;
            //$curr_datetime = time();
            $myposts = get_posts('numberposts=6&category=11,13,16,20');
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
                <li><a href="http://www.where.ca/index.php/category/the-west/canadianrockies/banff/">Banff, Canmore & Area</a></li>
                <li><a href="http://www.where.ca/index.php/category/the-west/canadianrockies/jasper/">Jasper & Area</a></li>
            </ul>    
        </div>      
    </div>	
</div>	
				
<?php get_sidebar(); ?>
<?php get_footer(); ?>
