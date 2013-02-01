<?php  
  global $wh_theme_2012;   
  $region_basic_arr = $wh_theme_2012->get_page_region_basic();
  if(isset($region_basic_arr['region_id'])){
      $region_cat  =  $region_basic_arr['region_id'];
      $_GET['type'] = $region_cat;
      $page_array = array('type'=>$region_cat);  
      wp_localize_script('listingsearch', 'search_page', $page_array);    
  }
  
 $wh_theme_2012->set_page_inicator('page_detail');

?>
<div id="left-sidebar">
   <?php if(isset($region_basic_arr['region_id'])){ 
   ?><div id="menu_bar">
         <div id="search_title">
            <p class="search_title_search">Search</p>
            <p class="search_title_city"><?php echo $region_basic_arr['region_name']; ?></p>
          </div>
         <div id="search_title">
               <div id="search_form">
                    <form action="<?php echo site_url().'/'.NEW_LISTING_FOLDER;?>" method="get" id="search1">
                        <input id="keyword" type="text" name="sq" value="" placeholder="NAME OR KEYWORD" /><input type="button" id="search_submit" />
                    </form>

               </div>
            <div class="cat-list">
                <?php  
                  include(ABSPATH.NEW_LISTING_FOLDER.'/'.'listing_load.php'); 
                  wp_enqueue_script('listingsearch');
                  wp_enqueue_script('sidebar-build');
                  $controler = new Listing_Controler(SIDEBAR_WIDGET_COMB,'root');
                  $controler->show_listing_search_sidebar(); 
                ?>      
            </div>
        </div>
      
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