<?php
class where_theme_2012 {
    private $page_indicator='page_home';
    protected $home_url,$region_name,$region_id,$event_id,$province_name;
    
    public function __construct() {
        $this->home_url = home_url();
        add_action('wp_loaded',  array($this, 'register_necessary_part'));
        add_action('wp_print_scripts',  array($this,'print_start_journey_script'));
        add_action('wp_print_styles', array($this,'print_styles'));
        add_filter('excerpt_more', array($this,'custom_excerpt_more'));
        add_filter('excerpt_length', array($this,'custom_excerpt_length'));
    }
    
    public function __destruct() {
        
    }
    
    //print most_posts
    public function show_recent_posts_link($limit=10) {
        $args = array( 
            'numberposts' => $limit,
            'post_status' =>'publish'
            );
        $recent_posts = wp_get_recent_posts( $args );
        foreach( $recent_posts as $recent ){
                echo '<p><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </p> ';
        }                
    }

    public function set_page_inicator($indicator='page_home'){
        $this->page_indicator = $indicator;
    }
    
    public function get_page_inicator(){
       return $this->page_indicator;          
    }
     
    public function get_cur_page_region_name(){
        
        
    }
    
    function get_request_wp_posts($cat_slug=NULL, $tag_name=NULL, $limit=5){
       //$args = 'category_name='.$cat.'&posts_per_page=5';
       $args = array (
          'category_name' =>$cat_slug 
          ,'tag' =>$tag_name
          ,'orderby' => 'date'
          ,'order' => 'DESC'
          ,'posts_per_page'=>$limit
       );
       $the_query = new WP_Query( $args );
       return $the_query;
     }
     
     function get_request_wp_posts_title_link($cat_slug=NULL, $tag_name=NULL, $limit=5){
        $the_query = self::get_request_wp_posts($cat_slug, $tag_name, $limit);
        $title_link_arr  =  array();
        while ( $the_query->have_posts() ) : $the_query->the_post();
             $arr_tmp = array();
             $arr_tmp['title'] =  get_the_title();
             $arr_tmp['link']  = get_permalink();
             $title_link_arr[] = $arr_tmp;
        endwhile; 
        
        return $title_link_arr;
         
     }
   

     function show_wp_post_title_link($cat,$tag=NULL, $posts_per_page=10){
       $the_query = self::get_request_wp_posts($cat,$tag,$posts_per_page);
       ?>
        <ul class="post_link">
       <?php
       // The Loop
        while ( $the_query->have_posts() ) : $the_query->the_post();
             ?>   
                <li>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </li>
       <?php         
        endwhile;
       ?>
        <li class="read-more"><a href="/tag/best-of-canada/">MORE BEST OF CANADA STORIES<span class="more_arrow"></span></a></li>  
        </ul>
       <?php
       // Reset Post Data
        wp_reset_postdata();
      }
    

     public function show_wp_post_block($cat,$tag=NULL, $posts_per_page=5){
       $the_query = self::get_request_wp_posts($cat,$tag,$posts_per_page);
       ?>
        <ul class="post_block">
       <?php
       // The Loop
        while ( $the_query->have_posts() ) : $the_query->the_post();
             ?>   
                 <li class="story-item">
                        <a href="<?php the_permalink(); ?>" class="story-thumb photo"><?php $post_thumb =	get_the_post_thumbnail($post->ID)?><?php echo($post_thumb); ?></a>
                        <h5><?php the_category(', '); ?></h5>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <h1><a href="<?php the_permalink(); ?>"><?php the_excerpt();?></a></h1>
                 </li>
       <?php         
        endwhile;
       ?>
        </ul>
       <?php
       // Reset Post Data
        wp_reset_postdata();
      }
    


    function register_necessary_part(){
        /*
        wp_register_style('listingsearch_CSS', site_url().'/'.NEW_LISTING_FOLDER.'/lib/css/style.css');
        wp_register_style('jquery_CSS', site_url().'/'.NEW_LISTING_FOLDER.'/js/css/flick/jquery-ui-1.8.16.custom.css');
              
              
        wp_register_script('jquery-1.4.min',  site_url().'/'.NEW_LISTING_FOLDER.'/js/jquery-1.4.min.js'); 
        wp_register_script('jquery-ui-1.8.16',  site_url().'/'.NEW_LISTING_FOLDER.'/js/jquery-ui-1.8.16.custom.min.js'); 
        wp_register_script('jquery-ui-1.8.21',  site_url().'/'.NEW_LISTING_FOLDER.'/js/jquery-ui-1.8.21.custom.min.js'); 
        
        wp_register_script('jquery-address',  site_url().'/'.NEW_LISTING_FOLDER.'/js/jquery.address-1.2.2.min.js'); 
        wp_register_script('deserialize',  site_url().'/'.NEW_LISTING_FOLDER.'/js/deserialize.js'); 
        wp_register_script('jquery-jsonp2',  site_url().'/'.NEW_LISTING_FOLDER.'/js/jquery.jsonp-2.1.4.min.js'); 
        wp_register_script('googlemap',  'https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places');
        wp_register_script('jquery-cookie',  site_url().'/'.NEW_LISTING_FOLDER.'/js/jquery-cookie.js');

        wp_register_script('listingsearch',  site_url().'/'.NEW_LISTING_FOLDER.'/js/listing_search.js'); 
        wp_register_script('sidebar-build',  site_url().'/'.NEW_LISTING_FOLDER.'/lib/js/side_bar.js'); 
        wp_register_script('nearby',  site_url().'/'.NEW_LISTING_FOLDER.'/lib/js/nearby.js');
        */
        //for wordpress header
        wp_register_script('start-journey',get_stylesheet_directory_uri().'/js/start-journey.js');
        
        //for event 
        wp_register_script('event-process',  get_stylesheet_directory_uri().'/js/event-process.js'); 

     }
    
     
     //add_action('wp_print_scripts', 'print_search_scripts');

     
     public function print_jquery_related_scripts() {
           wp_enqueue_script('jquery-1.4.min');
           wp_enqueue_script('jquery-ui-1.8.16');
           wp_enqueue_script('jquery-address');
           wp_enqueue_script('jquery-jsonp2');
           wp_enqueue_script('deserialize');
           wp_enqueue_script('googlemap');
     }
     
     public function print_styles(){
            wp_enqueue_style('listingsearch_CSS');
            wp_enqueue_style('jquery_CSS');
         }
       
       public function print_start_journey_script(){  
         wp_enqueue_script('start-journey');
         global $WH_THEME_CONFIG;
         wp_localize_script('start-journey', 'region_province_slug_mapping', $WH_THEME_CONFIG['region_province_name_slug_mapping']);
         wp_localize_script('start-journey', 'region_to_from_link_mapping', $WH_THEME_CONFIG['region_to_from_link_mapping']); 
         wp_localize_script('start-journey', 'region_transport_link_mapping', $WH_THEME_CONFIG['region_transport_link_mapping']); 
         wp_localize_script('start-journey', 'region_centra_point_mapping', $WH_THEME_CONFIG['region_centra_point_mapping']); 
         wp_localize_script('start-journey', 'theme_url_home', array('url'=>get_stylesheet_directory_uri(),'base'=>home_url())); 
       }

        public function get_search_listing_link( $current_page=1, $num_per_page=10){
            $service_call = THEME_SERVICE_URL."/where/searchlistingsext/";
            $sq = get_search_query();
            $service_call .= "?kws=".$sq;
            if(isset($current_page)){
                 $offset = (intval($current_page)-1)*intval($num_per_page);
                 $service_call .="&limit=".$offset.",".$num_per_page;
            } else {
                 $service_call .="&limit=".$num_per_page;
            }
            $lst_tmp_str = file_get_contents($service_call);
            $lst_arr = json_decode($lst_tmp_str);
          
            return $lst_arr[0];
       }
       
       public function init_page_title(){
            if($this->page_indicator == 'page_listing_detail'){
                $url = trim($_SERVER['REQUEST_URI'],'/');
                $url_split = explode('/',$url);
                if(count($url_split)>0){
                    $listing_friendly_url =  $url_split[count($url_split)-1]; //get the last friendly_url string 
                    $service_call = THEME_SERVICE_URL."/where/searchlistingsext/?slug=".$listing_friendly_url;
                    $lst_tmp_str = file_get_contents($service_call);
                    $lst_arr = json_decode($lst_tmp_str);
                    if(isset($lst_arr[0])){
                        $listing_infor = $lst_arr[0]->listings[0];
                        $init_title = $listing_infor->title.' | '.$listing_infor->cat1title.' | '.$listing_infor->parcat1title.' | '.$listing_infor->grandparcat1title.' | ';
                    } else {
                        $init_title = wp_title('|', false, 'right');
                    } 
                }
            } else if($this->page_indicator == 'page_listing'){
               $init_title = "Search Results | ";
            }
            
            if(empty($init_title)){
                $init_title = wp_title('|', false, 'right');
            }
            
            return $init_title;
     }
       
    

     public function custom_excerpt_length($length){
        return 20;
     }
    
     
    public function custom_excerpt_more($more){
        global $post;
        return str_replace('[...]', '<a href="'.get_permalink($post->ID).'">...read more...</a>', $more);
    }
   
    
    public function set_page_region_infor_by_id($region_id) {
          global $WH_THEME_CONFIG;
          if(array_key_exists($region_id,$WH_THEME_CONFIG['region_id_slug_name_mapping'])) {
              $this->region_name   = $WH_THEME_CONFIG['region_id_slug_name_mapping'][$region_id];
              $this->province_name = $WH_THEME_CONFIG['region_id_province_name_mapping'][$region_id];
              $this->region_id = $region_id;  
              $this->event_id = $WH_THEME_CONFIG['region_event_id_name_mapping'][$this->region_name];
          } 
    }
    
    
    public function set_page_region_infor_by_name($region_name) {
          global $WH_THEME_CONFIG;
          $city_name_id_mapping  = array_flip($WH_THEME_CONFIG['region_id_slug_name_mapping']);
          if(array_key_exists(strtolower($region_name),$city_name_id_mapping)) {
              $region_id = $city_name_id_mapping[strtolower($region_name)];
              $this->region_name   =  $WH_THEME_CONFIG['region_id_slug_name_mapping'][$region_id];
              $this->province_name = $WH_THEME_CONFIG['region_id_province_name_mapping'][$region_id];
              $this->region_id = $region_id;  
              $this->event_id = $WH_THEME_CONFIG['region_event_id_name_mapping'][$this->region_name];    
          } 
    }
    
    public function set_page_region_infor_by_event_id($event_id) {
          global $WH_THEME_CONFIG;
          $region_name = array_search($event_id,$WH_THEME_CONFIG['region_event_id_name_mapping']);
          if($region_name !== false){
             $this->set_page_region_infor_by_name($region_name);
          }
    }
    
    
    public function set_page_region_infor_by_url() {
         global $WH_THEME_CONFIG;
          $params = $_GET; //check the url from sidebar of detail page like http://stage.where.ca/category/regions/?muskoka
          $city_name_id_mapping  = array_flip($WH_THEME_CONFIG['region_id_slug_name_mapping']);
          foreach($params as $k=>$v){
              if(array_key_exists($k,$city_name_id_mapping)) {
                  $cur_page_base_id = $city_name_id_mapping[$k]; 
                  break;
              }      
          }

          if(isset($cur_page_base_id)){
              $this->region_name   = $WH_THEME_CONFIG['region_id_slug_name_mapping'][$cur_page_base_id];
              $this->province_name = $WH_THEME_CONFIG['region_id_province_name_mapping'][$cur_page_base_id];
              $this->region_id = $cur_page_base_id; 
              $this->event_id = $WH_THEME_CONFIG['region_event_id_name_mapping'][$this->region_name];
    
          }
    }
    
    public function get_region_province_name($region_id){
        global $WH_THEME_CONFIG;
        if(isset($WH_THEME_CONFIG['region_id_province_name_mapping'][$region_id])){
            return $WH_THEME_CONFIG['region_id_province_name_mapping'][$region_id];
        }       
    }
    
    
    public function get_page_region_name(){
        if(empty($this->region_id)) {
            return 'home';
        } else {
            return $this->region_name;                  
        }         
    }
    
    public function get_page_region_basic() {
       if(empty($this->region_id)) {
            return false;
        } else {
            return  array(
                  'region_name'=>$this->region_name
                  ,'region_id' =>$this->region_id
                  ,'province_name'=>$this->province_name
                  ,'event_id'=>$this->event_id                    
              );
        }         
    }
    
    
    public function get_supported_region_id_lists(){
        global $WH_THEME_CONFIG;
        $region_ids_supported = array_keys($WH_THEME_CONFIG['region_id_slug_name_mapping']);
        return $region_ids_supported;
    }

    public function get_data_from_config_list($name=''){
      //here need to process accordingly  
        global $WH_THEME_CONFIG;
        if(empty($name)) return false;
        
        if($name =='home_page_region_part'){
           global $home_page_region_part;
           return $home_page_region_part;
           
        } elseif(array_key_exists($name, $WH_THEME_CONFIG)){
            return $WH_THEME_CONFIG[$name];
        } else return false;

    }
    
     
    function getListingURL($slug, $catlevel1slug, $catslug, $listtype='listings') {
        $listingSlug = "/__CAT_SLUG__/__CAT_LEVEL1_SLUG__/__SLUG__/";

        if($catslug != null && $catslug != "") {
            $listingSlug = str_replace("__CAT_SLUG__", $catslug, $listingSlug);
        } else {
            $listingSlug = str_replace("__CAT_SLUG__/", "", $listingSlug);
        }

        if($catlevel1slug != null && $catlevel1slug != "") {
            $listingSlug = str_replace("__CAT_LEVEL1_SLUG__", $catlevel1slug, $listingSlug);
        } else {
           $listingSlug = str_replace("__CAT_LEVEL1_SLUG__/","", $listingSlug);
        }

        $listingSlug = str_replace("__SLUG__", $slug, $listingSlug);
        $listingSlug = home_url()."/".$listtype.$listingSlug;

        return $listingSlug;
    }
    
   function cut_paragraph($paragraph, $limit=30) {
      $count =  substr_count($paragraph," ");
      $textfield = strtok($paragraph, " "); 
      $words = 0;
      while ($textfield) { 
        $text .= " $textfield"; 
        $words++; 
        if ($words >= $limit) {
          if($count > $words){
             $text .= " ...(more)"; 
          }   
          break; 
        }
        $textfield = strtok(" "); 
      } 
      return ltrim($text); 
   } 
   
   public function get_region_count_info($cat_ids_str){
        if(empty($cat_ids_str)) return ;
        $arr_region_count = array();
        $service_call = THEME_SERVICE_URL."/where/listingscount/?r=subcats&pcatids=".$cat_ids_str;
        $lst_tmp_str = file_get_contents($service_call);
        $lst_arr = json_decode($lst_tmp_str, true);
        
        foreach($lst_arr as $id => $region_result_arr){
             if(is_array($region_result_arr) and count($region_result_arr)>0) {
                 $arr_tmp = array();
                 foreach($region_result_arr as $single_cat_arr){
                     if(is_array($single_cat_arr) and count($single_cat_arr)>0){
                         $item_name = trim(strtolower($single_cat_arr['name'])); 
                         if($item_name == "restaurants" or $item_name=="shopping"  or $item_name=="accommodations"){
                            $arr_tmp[$item_name]['id'] = $single_cat_arr['id']; 
                            $arr_tmp[$item_name]['count'] = $single_cat_arr['count'];
                         }
                        
                   }
                }
                $arr_region_count[$id] = $arr_tmp;
             }
        }
        return $arr_region_count;
    }

function show_destination_guide(){
 ?>
      <ul class="region_block">
         <?php
             $cat_ids_arr = self::get_supported_region_id_lists();
             $cat_ids_str = implode(',', $cat_ids_arr);
             $region_count = self::get_region_count_info($cat_ids_str);
         ?>
                 
          <?php 
            $region_list = self::get_data_from_config_list('home_page_region_part');
            if(!is_array($region_list) or count($region_list)==0) exit;
            foreach($region_list as $region_cat_id => $region_info) {
                $restaurant_cnt = $shop_cnt = $hotel_cnt = null;
                if(isset($region_count[$region_cat_id]['restaurants'])){
                    $restaurant_cnt = $region_count[$region_cat_id]['restaurants']['count'];
                    $restaurant_id = $region_count[$region_cat_id]['restaurants']['id'];
                    
                }
                if(isset($region_count[$region_cat_id]['shopping'])){
                   $shop_cnt = $region_count[$region_cat_id]['shopping']['count']; 
                   $shop_id = $region_count[$region_cat_id]['shopping']['id']; 
                   
                }
                if(isset($region_count[$region_cat_id]['accommodations'])){
                   $hotel_cnt =  $region_count[$region_cat_id]['accommodations']['count'];
                   $hotel_id =  $region_count[$region_cat_id]['accommodations']['id'];
                }
                
               $province_slug =  implode("-", explode(" ",strtolower(self::get_region_province_name($region_cat_id))));
                        
               /*candian rockies need to prcess specially */   
                
          ?>
	        <li class="region_item">
                    <a href="<?php echo $province_sulg; ?>/<?php echo $region_info['name_slug']; ?>/"><img class="region_image" src="<?php echo $region_info['pic_link'];?>" ></a>
                    <h1><a class="region_title" href="<?php echo $province_slug; ?>/<?php echo $region_info['name_slug']; ?>/"><?php echo  $region_info['name']; ?></a>
                      
                   <span><a href="<?php echo '/'.NEW_LISTING_FOLDER.'/'.$region_info['name_slug'].($region_info['name_slug']=='canadianrockies'?'/banff':'').'/restaurants/'; ?>"><label><?php echo $restaurant_cnt;?></label> restaurants </a> 
                       | <a href="<?php echo '/'.NEW_LISTING_FOLDER.'/'.$region_info['name_slug'].($region_info['name_slug']=='canadianrockies'?'/banff':'').'/shopping/'; ?>"> <label><?php echo $shop_cnt;?></label> shops </a>
                       | <a href="<?php echo '/'.NEW_LISTING_FOLDER.'/'.$region_info['name_slug'].($region_info['name_slug']=='canadianrockies'?'/banff':'').'/accommodations/'; ?>"><label><?php echo $hotel_cnt;?></label> hotels </a></span></h1>
                
                    <ul class="sub_part_items">
                      <?php
                        $latest_posts = array();
                        $latest_posts = self::get_request_wp_posts_title_link($region_info['cat_slug'], null,3);
                        
                        if(count($latest_posts)>0) {
                            foreach($latest_posts as $post_info) {
                      ?>  
                       <li class="sub_item"><a href="<?php echo $post_info['link']; ?>" ><?php echo $post_info['title']; ?></a></li>
                      <?php }
                        } 
                      ?>
                        <li class="read-more"><a href="<?php echo site_url().'/'.$region_info['name_slug'].'-articles/'; ?>"><?php echo 'More '.$region_info['name'].' Stories'; ?> <span class="more_arrow" /></a></li>  
	   
                    </ul>    
                </li>
             
           <?php
            } 
           ?>
            </ul>
<?php        
}
     
 function show_latest_active_deals_links($listing_slug=null, $listing_catids=null,$limit=5){
    $deals_service_url = THEME_SERVICE_URL."/deals/toplistings/?sort=enddate&order=ASC&limit=".$limit;
    $tmp  =  file_get_contents($deals_service_url);
    $deals_list_arr = json_decode($tmp, true);
    
   if(!is_array($deals_list_arr) or count($deals_list_arr)==0)return;
   
  ?>  
    <ul class="feed_list">
   <?php 
    foreach($deals_list_arr as $val) {
      $listing_detail_url =  $this->getListingURL($val['friendly_url'], $val['cat1_slug'], $val['parcat1_slug'],'deals');   
   ?>
       <li class="feed_list">
           <a class="feed_list" target="_blank" href="<?php echo $listing_detail_url;?>"><?php echo $val['title']; ?></a>
       </li>    
   <?php         
    }
   ?> 
    </ul>
 <?php    
  }

}//end of class