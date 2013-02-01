<?php get_header('home'); ?>
<?php get_sidebar('left-home'); ?>

<div id="content2_new">
           <div id="main-features_new">
            <?php 
              echo do_shortcode('[promoslider category="home-slide" width="100%", height="350px" ]'); 
              ?>
           </div>   
      
	
	<div id="latest_post">
            <ul>
                <?php
                $args = array( 
                    'numberposts' => 3, 
                    'category' => 8263, 
                    'orderby' => 'post_date',
                    'order'  => 'DESC',
                    );  //category = "Whereblog"
                $myposts = get_posts( $args );
                foreach($myposts as $post) :
                    $post_datetime = get_the_time('U');
                ?> 
                <li class="block-item">
                    <a href="<?php the_permalink(); ?>" class="story-thumb photo"><?php $post_thumb =	get_the_post_thumbnail($post->ID)?><?php echo($post_thumb); ?></a>
                    <h5><?php the_category(', '); ?></h5>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                </li>
                <?php endforeach; ?>
                
                <li class="read-more"><a href="<?php echo site_url();?>/category/blog/">More Travel Stories<span class="more_arrow" /></a></li>   
            </ul>
        </div>
    
        <div id="top_slide_show">
            <p class="top_slide_show">Top Slideshows</p> 
           <?php  
             // echo do_shortcode('[carousel-slide html_id="wh-slide-show" post_type="post" tag="slide-show" width="100%" max_pictures="8" height="260"  vertical_gap="40" gap="10" visible="3" auto="3" scroll="3" ]');
              echo do_shortcode('[carousel-slide html_id="wh-slide-show" post_type="post" tag="slide-show" frame_width="468" frame_height="170" width="100" height="160"  
                  max_pictures="9" vertical_gap="60"  auto="3" gap="65" visible="3"  scroll="1" wrap="both" ]');
                
           ?> 
        </div>    

	
        <div id="main_region">
             <?php where_theme_2012::show_destination_guide();   ?>
        </div>
        
        
        
</div>

<?php get_sidebar(); ?>

<?php get_footer('credit'); ?>
