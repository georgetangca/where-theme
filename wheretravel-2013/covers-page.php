<?php
/**
 * Template Name: Covers Template
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header();

$page = $_GET['page'];
?>
	<div id="content2_new" class="main_for_twoc">
	<div>
	<h2>Current magazine issues</h2>
<p><em>Where</em> magazine provides timely, local information on the hottest and most essential shopping, dining, cultural attractions and entertainment.</p>
<p>Be sure to obtain your copy of <em>Where</em> upon your arrival in your hotel room, ask your concierge or ask at your guest services desk. <em>Where</em> is also available at resorts, golf courses and marinas, or at any visitor information centre in your region.</p>
<p>You can download and read most of our current issues of <em>Where</em> as <strong>digital editions</strong> by clicking the covers below.</p>

	</div> 
	<div  style="margin-top:20px;">
		<?php query_posts(array('post_type'=>'cover','order' => 'ASC')); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div style="width:120px;height:200px;float:left;display:inline;margin-left:10px;">
		
		
		<a href="/cover/<?php $key="cover-link"; echo get_post_meta($post->ID, $key, true); ?>"> <h6> <?php the_title(); ?> </h6> </a>
			<div>
		
			
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
		
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		
		
			</div>
		<?php endwhile; endif; ?>
	
	</div>
	
<div style="width:140px;height:200px;float:left;display:inline;margin-left:10px;">
<a href="/winnipeg"> <h6> Winnipeg </h6> </a>
<div>
<a href="http://www.myvirtualpaper.com/doc/fanfare-magazine-group-demo/where_winnipeg_july_aug2012/2012062601/"><img src="http://www.where.ca/wp-content/uploads/2011/08/Where-july-aug-2012-cover.jpg" alt="Where Winnipeg Jul/Aug 2012" title="Where Winnipeg Jul/Aug 2012" width="101" height="135" class="alignnone size-full wp-image-63780" /> 
</a>
</div>
</div>

	</div>
<script type="text/javascript">
$(document).ready(function() {
   $("#start_journey ul li img").click(function(){
       if ($("#region_select").val()=='') {
           alert('Please choose your destination.');
       } else {
           var link_url="";
           if ($(this).attr("alt")=='transport') {
               link_url='/toronto-transportation-toronto-transit';
           } else if($(this).attr("alt")=='tofrom') {
               link_url='/toronto-airport-transit-pearson-airport-island-airport';
           }else {
               link_url='/regions/?'+$("#region_select").val()+'#'+$(this).attr("alt");
           }
           window.location.href=link_url;
       }
   });
});
</script>

<?php get_sidebar(); ?>

<?php get_footer(); ?>