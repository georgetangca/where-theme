<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<div id="content2">

	<div class="breadcrumbs">
	<?php
	if(function_exists('bcn_display'))
	{
		bcn_display();
	}
	?>
	</div>
          <?php if (have_posts()) : ?>
 	 	<h2 class="pagetitle"><?php single_cat_title(); ?></h2>
		<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>" >
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<!--small><?php the_time('l, F jS, Y') ?></small-->

				<div class="entry">
					<?php the_content() ?>
				</div>

			</div>

		<?php endwhile; ?>

			<div class="navigation"><!-- works the opposite way of previous post/next post on single.php-->
				<p class="previous"><?php next_posts_link('&laquo; Older posts'); ?></p>
				<p class="next"><?php previous_posts_link('Newer posts &raquo;'); ?></p>
			</div>


	<?php else :
		printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		get_search_form();
	endif;
?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
