<?php
/**
 * @package WordPress
 * @subpackage Where Travel 2009
 */
get_header(slideshow);
?>
<!-- image.php -->
    <div id="content2">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <div class="header">
            <h1><a href="http://www.where.ca">Where.ca</a></h1>
            <span>&nbsp;</span>              
            <h2><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a></h2> 
        </div>	        
        
        <div class="post" id="post-<?php the_ID(); ?>">
            <!--start slide-->
            <?php 
                $defaults = array( 
                    'post_parent' => $post->post_parent,
                    'post_type' => 'attachment', 
                    'numberposts' => -1,
                    'post_status' => 'any',
                    'post_mime_type' => 'image',
                    'order' => 'ASC',
                    'orderby' => 'menu_order'
                );
                
                $images = array_values(get_children( $defaults ));
                
                if ( empty($images) ) {
                    // no attachments here
                } else {
                    foreach ( $images as $k => $attachment ) {
                        if ( $attachment->ID == $post->ID ) {
                            break;
                        }
                    }
                    $k++;
                    if ( isset($images[$k]) ) {
                        $attatchment_img = '<a href="'.get_attachment_link( $images[$k]->ID ).'">'.wp_get_attachment_image( $post->ID, 'large' ).'</a>';
                    } else {
                        $attatchment_img = '<a href="'.get_attachment_link( $images[0]->ID ).'">'.wp_get_attachment_image( $post->ID, 'large' ).'</a>';
                    }
                }
                ?>
            
                <?php echo($attatchment_img); ?>
            <!--end slide-->                    
            
            <?php echo do_shortcode('[gallery id="'.$post->post_parent.'" columns="6"]'); ?>									
        </div>
                
        <div class="sidebar">
            <div class="gallery-nav">
                <span class="previous"><?php mf_previous_image_link('&lsaquo;&lsaquo; Previous') ?></span>
                
                <?php echo('<span class="slide-count">'.$k.' of '.count($images).'</span>'); ?>
            
                <span class="next"><?php mf_next_image_link('Next &rsaquo;&rsaquo;') ?></span>
            </div>
            
            <div class="slide-info">			
                <span class="title"><?php the_title(); ?></span>
                <span class="caption"><?php the_content (''); // this is the caption text ?></span>
                <span class="description"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); // this is the "PHOTO CREDIT" in the description field ?></span>
            </div>
            
            <div class="social-media">
                <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="FashionCanada">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
                <iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo get_permalink($post->post_parent); ?>&amp;layout=button_count&amp;show_faces=true&amp;width=90&amp;action=like&amp;font=arial&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:90px; height:21px;" allowTransparency="true"></iframe>
            </div>
            
            <div id="back-to-post">				
                <img src="http://www.where.ca/images/arrow-sm-yellow.png" alt="back arrow" />
                <a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment">Back to article</a>				
            </div>

            <?php /*
            global $post;
            $categories = get_the_category($post->post_parent);
            if ($categories[0]->category_parent != 0) {
            $category_id = $categories[0]->category_parent;
            } else {
            $category_id = $categories[0]->cat_ID;
            }
            if ($category_id == 225) {
            echo ('<div class="sponsor-logo"><span>Sponsored by:</span><a href=""><img src="" alt="" /></a></div>');
            }
            */ ?> 
                        
            <div id="bigbox-ad">
                <img src="http://www.where.ca/images/advertisement-text-666.png" class="ad-text"/>
                <script LANGUAGE="JavaScript1.1" type="text/javascript">
                <!--
                document.write('<scr'+'ipt LANGUAGE="JavaScript1.1" type="text/javascript" SRC="http://oascentral.where.ca/RealMedia/ads/adstream_jx.ads/'+WHERE_AD_PAGE+'/1'+OAS_rns+'@'+WHERE_AD_POS+'!x05' + WHERE_AD_QUERY + '"></scr'+'ipt>');
                // -->
                </script>
            </div>
        </div>
                
        <!-- ADD OAS x03 BACK TO HEADER-SLIDESHOW.PHP WHEN UN-COMMENTING THIS POSITION  div id="leaderboard">
            <span class="ad-marker">Advertisement</span>
            <script type="text/javascript">
            jQuery(document).ready(OAS_AD('x03'));
            </script>
        </div-->
            
        <?php endwhile; else: ?>
            <p>Sorry, no attachments matched your criteria.</p>
        <?php endif; ?>     
    
    </div><!--end #content2-->
</div><!--end #page-->

<!-- Begin comScore Tag -->
<script type="text/javascript">
document.write("<img id='img1' height='1' width='1'>");
document.getElementById("img1").src=(("https:" == document.location.protocol) ? "https://" : "http://")+"beacon.securestudies.com/scripts/beacon.dll?C1=2&C2=6035671&C3=&C4="+escape(window.location.href.indexOf("?")>0 ? window.location.href.substring(0, window.location.href.indexOf("?")) : window.location.href)+"&C5=&C6=&C7=" + escape(window.location.href) + "&C8=" + escape(document.title) + "&C9=" + escape(document.referrer) + "&rn=" + Math.floor(Math.random()*99999999);
</script>
<!-- End comScore Tag -->

</body>
</html>					