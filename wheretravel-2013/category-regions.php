<?php
  global $wh_theme_2012,$WH_THEME_CONFIG; 
  $wh_theme_2012->set_page_region_infor_by_url();
  
  $region_basic_arr = $wh_theme_2012->get_page_region_basic();
  if($region_basic_arr === false){
      exit();
  }
  $region_name =  $region_basic_arr['region_name'];
  $region_cat  =  $region_basic_arr['region_id'];
  
  global $region_theme;
  $region_theme = new where_region_theme($region_name,$region_cat);
  
  //print_search_scripts(); 
  
?>
<?php
   //error_reporting(E_ALL);
   //ini_set('display_errors', '1');
   get_header();   
   where_theme_2012::print_start_journey_script();
?>

<script type="text/JavaScript" src="http://cdn.jquerytools.org/1.2.7/tiny/jquery.tools.min.js"></script>

<input type="hidden" id="pillar_page_indicator" value="1" />
<input type="hidden" id="region_event_cat" value="<?php echo  $region_theme->get_region_event_id();?>" />
<input type="hidden" id="region_name" value="<?php echo  $region_theme->get_region_name();?>" />


<?php get_sidebar('left-region'); ?>
<?php wp_enqueue_script('event-process'); ?> 
<div id="content2_new">
      <div id="hdeck">
          <?php
              $prom_slide_cat = strtolower($region_name).'-slide';
              if( term_exists($prom_slide_cat)) {
                echo do_shortcode('[promoslider category="'.$prom_slide_cat.'" width="100%", height="350px" ]'); 
              }
          ?>
       </div>
       
        <div id="latest_post">
            <?php $region_theme->show_latest_top_stories();?>
        </div>
    
       
    <?php 
        $cur_region_elements  = $region_theme->get_where_element();
        
        if(count($cur_region_elements) >0 ) {        
        foreach($cur_region_elements as $title=>$v_arr){
            $image_block  = $content_block  = '';
             
            $image_block = '<img class="region_image" src="'.$v_arr['pic_link'].'" >';
            
            foreach($v_arr['items'] as $content_item_arr){
               $content_block.= '<a href="'.$content_item_arr['url'].'">'.$content_item_arr['title'].'</a><br><br>'; 
            }
           $content_block .='<form action="/'.NEW_LISTING_FOLDER.'/'.$region_name.'/'.$region_theme->get_where_element_type($title).'/" method="post" class ="search">';
           $content_block .= '<span class="search_key">Search:</span> <input type="text" name="keywords" class="search_input" placeholder="'.$WH_THEME_CONFIG['pillar_page_ghost_word'][$title].'"  value=""/><input type="submit" class="region_search_submit" value="GO" />';
           $content_block .='</form>';
           
            
           $left_block = $right_block = '';
            if (($v_arr['layout']) == PIC_ON_RIGHT){
                $left_block  = $content_block;
                $right_block = $image_block;
                
            } else {
                $left_block  = $image_block;
                $right_block = $content_block;
            }
    ?>

     <div class="post-block">
            <a name="<?php echo str_replace('what to ','',str_replace('where to ','',strtolower($title))); ?>"></a>
            <?php  
              if($region_theme->get_region_name() =="canadian rockies" and strtolower($title)=="what to see"){
                  $title = "What to See & Do";
              }
            ?>
            <p class='bock-title'><?php echo $title;?> </p>
            <div class="block-left-content">
                <?php echo $left_block; ?>
            </div>
            <div class="block-right-content">
                <?php echo $right_block; ?>
            </div>    
        </div>
    
            
   <?php         
        }
     }
    ?>
       <?php
         $event_id = $region_theme->get_region_event_id();
         if(!empty($event_id)) { //for process some city no event at all
       ?>
        <div class="post-block">
            <a name="calendar"></a>
            <p class='bock-title'>what to do </p>
            <div class="block-calendar">
               <div id="events-calendar"></div>
               <div id="date_pick">
                   <p>Click a date above or select a range below</p>
		<p><span>From</span>
		<input id="sdate" type="text" size="18"></p>
		<p><span>To</span>
		<input id="edate" type="text" size="18"></p>
		<p><span>Or</span>
		<input id="skword" type="text" size="18" placeholder="what to do">
                <input id="date1" type="hidden">
                <input id="date2" type="hidden">
                <input id="date_event_range" type="button"></p>
		</div>
            </div>
            <div class="block-event_picks">
                <p class="event-title"><!--What's on Today-->Upcoming Events</p>
                <?php $region_theme->show_randevent_base_cat(5); ?>
               <p><a href="/events/#/?sdate=<?php echo urlencode(date('m/d/Y'));?>&edate=<?php echo urlencode(date('m/d/Y'));?>&category=<?php echo $region_theme->get_region_event_id(); ?>">See all upcoming events</a></p>
            </div>
        </div>
       <?php } ?>
        
        
    
        <?php 
        $content_block = $region_theme->get_day_trips_elements();
        if(count($content_block)>0) {
        ?>    
        <div class="post-block">
            <a name="daytrip"></a>
            <p class='bock-title'>Day Trips From <?php echo $region_theme->get_region_name();?></p>    
        <?php     
            foreach($content_block as $title=>$content){   
                ?>
                <p><span class="search_key"><?php echo $title;?></span>: <?php echo $content; ?></p>    
                <?php    
            }   
        ?>
        </div>
       <?php } ?> 
        
        <div id="map" class="post-block overlay">
            <p class='bock-title'>Map of <?php  echo $region_theme->get_region_name(); ?></p>
           <!-- <a class="close"></a>-->
         
        <!-- map process define in start_journey.js -->
         <div style="width:550px;margin:0;padding:0;position:relative;">
                <div id="map_canvas_0" class="maplist" style="margin:0;"></div>
                <div id="map_nearby_0" class="mapnearby"></div>
            </div> 
       </div>
      
        
        <div id="reader_photo-block">
        <h1>Reader Photo Gallery</h1>
           Share the best photos  from your travels in Canada in the <a href="http://www.flickr.com/groups/wherecanada/" target="_blank">Where Canada Flickr Pool</a>!
           <ul class="flickr-feed">
             <?php get_flickrRSS();?>
           </ul>
       </div>
    
        
</div>
<?php get_sidebar(); ?>
<script type="text/javascript">
  $(document).ready(function($){
//show pillar page map 
   if ($("#pillar_page_indicator").length > 0 ) { //if it is pillar page 
        var crn= null;
       if ($("#region_name").length > 0){
          crn=$("#region_name").val().toLowerCase();
          var crn_name = crn;
          if(crn == 'canadian rockies'){
             crn = 'canadianrockies'; //very specially for canadian rockies , for  
          }
      }
        //only the region name exists ,prepare for showing the map overlay
        $.each(region_centra_point_mapping, function (key, value) { //look for selected sort option in list
                if (key == crn) {
                    central_point = value;
                   return 0;
                }
         });
       
       
       if (!($.isEmptyObject(central_point))) {
            service_points.push(central_point);
            showMap(service_points, 0);
            
            var $stringData = '<h3>What\'s Nearby</h3><ul>';
            for (var key in catid_mapping) {
                 $stringData += '<li class="nearbys" tag="'+key+'"><span value="'+catid_mapping[key]['color']+'">&nbsp;</span>'+catid_mapping[key]['title']+'</li>';
            }
           // $stringData += '<li><img src="http://'+globalMapMarker+'" alt="" /> <strong>= Regional Centre</strong></li>';
            $stringData += '</ul>';
            $('.mapnearby').html($stringData);
          }
          $('.maplist').css('position', 'relative');
          $('.mapnearby').css("display","block");

       
      /* $(".map img[rel]").overlay(); */
       $('#map').css("display","block");
       var curl=$(location).attr('href');
       var urlvars=curl.split("#");
       if (urlvars[urlvars.length-1]=='map' || urlvars[urlvars.length-1]=='show_map') {
            /*   $("#map").overlay({load:true}); */
             $('#map').css("display","block");
            
            
       }
   } //only on pillar page end 
 })(jQuery);     

</script>

<?php get_footer('credit');?>
