<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
get_header();
//where_theme_2012::print_search_scripts();
?>
<?php
global $wordpress_region_catslug_mapping,$wh_theme_2012;
$url = $_SERVER['REQUEST_URI'];
$url_split_arr = explode("/", $url);

if(in_array('blog', $url_split_arr)) {
?>
  <input type="hidden" id="blog_indicator" value="1" />
<?php    
} else {
   foreach($wordpress_region_catslug_mapping as $val) {
       if(in_array($val, $url_split_arr)){
          $wh_theme_2012->set_page_region_infor_by_name($val); 
           if($val == 'canadianrockies'){
             $val = 'canadian rockies'; 
          }
          
         ?>
          <input type="hidden" id="region_name" value="<?php echo $val;?>" />
         <?php             
         break;    
       }
   }  
} 

?>
<?php get_sidebar('left-post-detail'); ?>

<?php  
  global $wh_theme_2012;   
  $wh_theme_2012->set_page_inicator('page_detail');
?>
	<div id="content2_new">
 
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
             <div <?php post_class() ?> id="post-<?php the_ID(); ?>">

            <div class="metadata">		   
                <span class="post-date"><?php the_time('F jS, Y') ?> <?php edit_post_link('<strong>Edit post</strong>', ' | ', ''); ?></span>
            </div>
            <div class="breadcrumbs">
                <?php
                if(function_exists('bcn_display'))
                {
                        bcn_display();
                }
                ?>
            </div>


	
			<h1><?php the_title(); ?></h1>
			

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p class="pagination">Pages: <span class="page-numbers">', 'after' => '</span></p>', 'next_or_number' => 'number')); ?>
				
                        </div>

            <div class="further-reading">
                <img alt="arrow graphic" src="/images/green-arrow.png" class="arrow-graphic"><h4>OUR FULL <?php the_category(' ') ?> COVERAGE</h4>
                <div class="tags">
                    <?php the_tags('', ', ', ''); ?>
                </div>

           <div class="user-interaction">		   
                <span class="sharethis"><?php if (function_exists('sharethis_button')) { sharethis_button(); } ?> </span>
                <p><a href="#comments">Comment on this article</a></p>
            </div>


            
                <!--START related posts thumbnails-->	
                <div class="related-posts">
                    <h5>Related Posts</h5>
                    <?php get_related_posts_thumbnails(); ?>
                </div>
                <!--END related posts thumbnails-->
	        </div>
	        
			<div class="navigation">
				<p class="previous"><?php previous_post_link('%link', '&laquo; Older posts', TRUE); ?></p>
				<p class="next"><?php next_post_link('%link', 'Newer posts &raquo;', TRUE); ?></p>
			</div>
		</div>
		<a name="comments"></a>
		<div id="post-comments"><?php comments_template(); ?></div>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div>

<?php 
  $region_basic_arr = $wh_theme_2012->get_page_region_basic();
  $region_cat  =  $region_basic_arr['region_id'];
  $_GET['type'] = $region_cat;
  $page_array = array('type'=>$region_cat);  
  wp_localize_script('listingsearch', 'search_page', $page_array);   

?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
