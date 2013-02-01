<?php get_header(); ?>

	<div id="content2">
	<h2 class="pagetitle">Listings Search Results for '<?php the_search_query() ?>'</h2>
	
	<div style="margin-bottom:20px;">
	<?php	
	
        if(isset($_REQUEST['current_page'])){
            $current_page = $_REQUEST['current_page'];
        } else {
            $current_page = 1;
        }
        $num_per_page  = 10;
        $list_arr = where_theme_2012::get_search_listing_link($current_page, $num_per_page);
       
        //echo $total_listings;
        foreach ($list_arr->listings as $listing) {
            $stringData = "";
           
            if ($listing->parcat1slug != "") {
                $listing_cat = $listing->parcat1slug;
            } else {
               $listing_cat = '';
            }
            if ($listing->cat1slug != "") {
                $listing_sub_cat = $listing->cat1slug;
            } else {
                $listing_sub_cat = '';
            }
            
            $url = where_theme_2012::getListingURL($listing->friendlyurl, $listing_sub_cat,$listing_cat,NEW_LISTING_FOLDER); 
            $address = $listing->address;
            if ($listing->address2 != '') {
                if ($address !='') {
                    $address .=', ';
                }
                $address .= $listing->address2;
            }


            if ($listing->phone != "") {
                $phone = "<br /> <span class='phone_toggle'>". $listing->phone ."</span>";
            } else {
                $phone = "";
            }

            $linfo  = $address . " " . $listing->city . $phone;
           
           $stringData .= '<p class="search_title">';
           $stringData .= '<a href="'.$url.'">'.$listing->title.'</a></br>';
           $stringData .= ''.$linfo.'</a></br>';
           
           $stringData .= '</p>';
           
           echo($stringData);          
        }
        
        $total_listings = $list_arr->total_listings;

        echo('<div style="padding:5px;">');
        if($total_listings > 0 && $total_listings < 501 ){
            echo($total_listings.' Results, Pages: '); 
            $total_pages = ceil($total_listings / $num_per_page);

        }
        if($total_listings > 501 ){
            echo('The search returned over 500 Results,<br />Showing Pages: '); 
            $total_pages = 50;
        }


        //echo $total_pages;

        for ($i = 1; $i <= $total_pages; $i++) {
                if($current_page == $i)
                {
            echo ('<a href="/?s='.get_search_query().'&current_page='.$i.'"><strong>'.$i.'</strong></a>  ');
                }else
                {
                echo ('<a href="/?s='.get_search_query().'&current_page='.$i.'">'.$i.'</a>  ');

                }
        }
	?>
	</div>
	
</div>

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results for '<?php the_search_query() ?>' from our Blog</h2>

		<div class="navigation">
				<div class="previous"><?php next_posts_link('&laquo; Previous results') ?></div>
				<div class="next"><?php previous_posts_link('Next results &raquo;') ?></div>
		</div>


		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?>>
			<h2><span class="category_name"><?php the_category(', ') ?>:</span> <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('l, F jS, Y') ?></small>
				
				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="previous"><?php next_posts_link('&laquo; Previous results') ?></div>
			<div class="next"><?php previous_posts_link('Next results &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>