<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<div id="content2">
	
	
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


			<h6><?php the_category(' ') ?></h6>
			<h1><?php the_title(); ?></h1>
			

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p class="pagination">Pages: <span class="page-numbers">', 'after' => '</span></p>', 'next_or_number' => 'number')); ?>
				
</div>
            
           <div class="user-interaction">		   
                <span class="sharethis"><?php if (function_exists('sharethis_button')) { sharethis_button(); } ?> </span>
            </div>


            <div class="further-reading">
                <img alt="arrow graphic" src="http://www.where.ca/images/arrow-blk.png" class="arrow-graphic"><h4>OUR FULL <?php the_category(' ') ?> COVERAGE</h4>
                <div class="tags">
                    <?php the_tags('', ', ', ''); ?>
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
		
		<div id="post-comments"><?php comments_template(); ?></div>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
