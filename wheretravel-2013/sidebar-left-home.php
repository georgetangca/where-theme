<div id="left-sidebar">
    <div id="hmenu_bar">
        <div id="start_journey">
            <p class="journey_title">Start Your Journey</p>
            <select id="region_name">
                <option value="" >Choose Your Destination</option>
                <?php 
                 global $wh_theme_2012;
                 $region_id_name_mapping = $wh_theme_2012->get_data_from_config_list('region_id_slug_name_mapping');
                
                 foreach($region_id_name_mapping as $k=>$v){
                     $name = $v;
                     if($name =='canadianrockies') {
                         $name = 'canadian rockies';  
                     }
                ?>   
                <option value="<?php echo strtolower($v); ?>" ><?php echo strtoupper($name); ?></option>
                <?php     
                 }
                ?>
                
            </select>    
            <ul>
             <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pic1.png" alt="eat" class="journey_left" /><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pic2.png" alt="shop" class="journey_right" /></li>
             <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pic3.png" alt="see" class="journey_left" /> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pic4.png" alt="go" class="journey_right" /></li>
             <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pic5.png" alt="stay" class="journey_left" /> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pic6.png" alt="daytrip" class="journey_right" /></li>
             <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pic7.png" alt="show_map" class="journey_left" /> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pic8.png" alt="calendar" class="journey_right" /></li>
             <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pic9.png" alt="transport" class="journey_left" /><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pic10.png" alt="weather" class="journey_right" /></li>
             <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pic11.png" alt="currency" class="journey_left" /> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pic12.png" alt="tofrom" class="journey_right" /></li>
            </ul>    
        </div>   
    </div>   
    <div id="addition_manu">
     <div class="boc_item">
      <p class="best-of-canada">Best of<br />CANADA</p>
     <?php $wh_theme_2012->show_wp_post_title_link(NULL, 'best-of-canada'); ?>
     </div>
    </div>
   
    <div id="reader_photo">
        <a id="reader_photo_title" href="http://www.flickr.com/groups/wherecanada/" target="_blank">Reader Photo Gallery</a>
        <div id="reader_photo_link">
           <ul class="flickr-feed">
             <?php get_flickrRSS();?>
           </ul>
         Share the best photos  from your<br>travels in Canada in the<br>
         <a href="http://www.flickr.com/groups/wherecanada/" target="_blank">Where Canada Flickr Pool</a>
        </div>   
    </div>    
    
    <div id="international_guide">
           <p id="intl_guide_title">International <span class="xieti">where</span> Guides</p>
            <ul id="guidelinks2">
                <?php 
                  $international_guide = $wh_theme_2012->get_data_from_config_list('international_guide');
                  
                  echo $international_guide;
                  ?>
            </ul>
    </div>
    
    
    
    
</div>