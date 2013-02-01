	<div id="content2">

        <div class="breadcrumbs">
       
        </div>
        <?php
        
        $category = isset($_GET['article_cat'])?$_GET['article_cat']:'16';
        
        $limit = get_option('posts_per_page');
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts('showposts=' . $limit .'&posts_per_page='.$limit .'&paged=' . $paged.'&post_type=post&orderby=date&order=DESC&cat='.$category);
        $wp_query->is_archive = true;
        $wp_query->is_home = false;
        global $more;    // Declare global $more (before the loop).
        $more = 0; 
        ?> 
        <?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle"><?php single_cat_title(); ?></h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle"><?php single_tag_title(); ?></h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Author Archive</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Archives</h2>
 	  <?php } ?>


		<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>" >
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<!--small><?php the_time('l, F jS, Y') ?></small-->

				<div class="entry">
              
				<?php 
                                 the_content('Read more...') ?>
				</div>

			</div>

		<?php endwhile; ?>

			<div class="navigation"><!-- works the opposite way of previous post/next post on single.php-->
				<p class="previous"><?php next_posts_link('&laquo; Older posts'); ?></p>
				<p class="next"><?php previous_posts_link('Newer posts &raquo;'); ?></p>
			</div>


	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>No posts found.</h2>");
		}
		get_search_form();

	endif;
        
        
?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
