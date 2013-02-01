<?php 
// error_reporting(E_ALL);
// ini_set('display_errors', '1');

 global $wh_theme_2012; 
 $region_basic_arr = $wh_theme_2012->get_page_region_basic();
  if($region_basic_arr === false){
      exit();
  } 
  $region_cat  =  $region_basic_arr['region_id'];
  global $wh_theme_2012;
  $wh_theme_2012->set_page_inicator('page_region');
  
  global $WH_THEME_CONFIG;
  $region_slug = $region_basic_arr['region_name'];
  if($region_slug == 'canadian rockies'){
       $region_slug = 'canadianrockies';  
  }
  $province_slug = $WH_THEME_CONFIG['region_province_name_slug_mapping'][$region_slug];
                     
?>

<div id="left-sidebar">
    <div id="menu_bar">
    <?php 
        include(ABSPATH.NEW_LISTING_FOLDER.'/'.'listing_load.php'); 
        $controler = new Listing_Controler(SIDEBAR_WIDGET_ONLY,$province_slug);
        $controler->show_listing_sidebar_widget();

     ?>      

       
    </div>
    <div id="second-bar">
         <?php  show_sidebar_recommendedlist($region_cat); ?>
     </div>
  
</div>
