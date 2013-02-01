<?php /* Template Name: Inspiration */ ?>

<?php get_header(); ?>

	<div id="content2">

	<h2 id="location-title">Inspiration</h2>
	<p>Daily updates from the editors of <em>Where</em> Canada on places to see and things to do across the country.</p>
	
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
		<p><?php the_content(); ?></p>
</div>
		<?php endforeach; ?>					

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
