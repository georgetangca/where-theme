<?php  
  global $wh_theme_2012;   
  $region_basic_arr = $wh_theme_2012->get_page_region_basic();
  if(isset($region_basic_arr['region_id'])){
      $region_cat  =  $region_basic_arr['region_id'];
  }
  
 $wh_theme_2012->set_page_inicator('page_detail');
 
 global $WH_THEME_CONFIG;
  $region_slug = $region_basic_arr['region_name'];
  if($region_slug == 'canadian rockies'){
       $region_slug = 'canadianrockies';  
  }
  $province_slug = $WH_THEME_CONFIG['region_province_name_slug_mapping'][$region_slug];

?>
<div id="left-sidebar">
   <?php if(isset($region_basic_arr['region_id'])){ 
   ?><div id="menu_bar">
        <?php  
          include(ABSPATH.NEW_LISTING_FOLDER.'/'.'listing_load.php'); 
          $controler = new Listing_Controler(SIDEBAR_WIDGET_ONLY,$province_slug);
          $controler->show_listing_sidebar_widget(); 
        ?>      
         
    </div>
    <div id="second-bar">
         <?php  show_sidebar_recommendedlist($region_cat); ?>
     </div>
     <?php 
     } else {      
     ?> 
     <div id="addition_manu">
     <div class="boc_item">
      <p class="best-of-canada">Best of<br />CANADA</p>
     <?php $wh_theme_2012->show_wp_post_title_link(NULL, 'best-of-canada'); ?>
     </div>
    </div>
    <?php } ?>
</div>