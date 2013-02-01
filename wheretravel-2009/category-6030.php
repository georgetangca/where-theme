<?php get_header(); ?>

<img id="location-photo" src="http://www.where.ca/titleimages/h11_central.jpg" />

<div id="content2" class="region-page">
	<div class="breadcrumbs">
        <?php
        if(function_exists('bcn_display'))
        { bcn_display(); }
        ?>
	</div>
	
	<h2 id="location-title"><?php single_cat_title(); ?></h2>
    <div class="region-info">
        <img id="location-map" src="http://www.where.ca/titleimages/map11r_central.gif" />
        <h3>Top Destinations</h3>
        <ul class="stylized">
        <li><span class="number">1</span><a href="http://www.where.ca/toronto/">Toronto</a></li>
        <li><span class="number">2</span><a href="http://www.where.ca/ottawa/">Ottawa</a></li>
        <li><span class="number">3</span><a href="http://www.where.ca/index.php/category/central-canada/ontario/muskoka/">Muskoka/Parry Sound</a></li>
        </ul>
    </div>
	<p>Geographically speaking, <a href="http://www.where.ca/index.php/quebec">Quebec</a> and <a href="http://www.where.ca/index.php/ontario">Ontario</a>, the two provinces that constitute Central Canada, are entirely east of the longitudinal centre of the country, which lies near <a href="http://www.where.ca/winnipeg">Winnipeg</a>. But as the two largest provinces in Canada, accounting for more than half of its population and of its GDP, they are ideologically central.</p>
	<p>You could spend a lifetime in Central Canada’s culturally exciting cities, shopping till you drop in Montreal, <em>parlez-ing français</em> in Quebec City, nosing around <a href="http://www.where.ca/ottawa/">Ottawa</a>’s historic Byward Market, and, in <a href="http://www.where.ca/toronto/">Toronto</a>, attending a different play, sporting event, or music performance every night. But if you did, you’d miss out on the beautiful and varied landscapes of lakes, forests, valleys, hills, rivers, and streams, and on the charms of the small towns and unique attractions like Niagara Falls, the Stratford Shakespeare Festival, the Niagara wine region, the Laurentians, and Quebec’s Route Verte biking trails.</p>
	<p>Both provinces experience four distinct seasons. Summers are warm and the calendar packed with outdoor events and festivals. In fall, the foliage explodes in shades of red and orange and wineries are in full swing. When temperatures drop, the cities compensate with festivals, while the ski hills and trails draw snow bunnies. Spring is maple-sugaring season and ushers in a general joie de vivre as residents shake off the cold.</p>

    <div class="region-guide">  
        <h3><img alt="arrow graphic" src="http://www.where.ca/images/arrow-blk.png"> The Guide</h3>
        <ul>
            <li>
                <a href="http://www.where.ca/index.php/ontario/"><img src="http://www.where.ca/titleimages/h11_ontario_198.jpg" alt="Image of Ontario"></a>
                <h4><a href="http://www.where.ca/index.php/ontario/">Ontario</a></h4>            
            </li> 
            <li>
                <a href="http://www.where.ca/index.php/quebec/"><img src="http://www.where.ca/titleimages/h11_quebec_198.jpg" alt="Image of Quebec"></a>
                <h4><a href="http://www.where.ca/index.php/quebec/">Quebec</a></h4>
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
