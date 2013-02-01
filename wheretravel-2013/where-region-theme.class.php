<?php
class where_region_theme extends where_theme_2012 {
   private $region_wp_category, $region_day_trip_cat_obj;
   protected $region_name;
   protected $region_id;
   protected $region_event_id;
   
   
   
   public function __construct($region_name,$region_cat_id) {
      global $WH_THEME_CONFIG;
      parent::__construct();
      $this->region_wp_slug = $this->region_name = strtolower($region_name);
      if($region_name == 'canadianrockies'){
         $this->region_name = 'canadian rockies'; 
      }
      
      $this->region_id = $region_cat_id;
     
      $event_name_id_mapping  = $WH_THEME_CONFIG['region_event_id_name_mapping'];
      if(array_key_exists($this->region_name,$event_name_id_mapping)) {
          $this->region_event_id = $event_name_id_mapping[$this->region_name]; 
      }else {
         $this->region_event_id = null; 
      }
      
      
      
      
     if(taxonomy_exists('simple_link_category')) { //get the cateory information from simple_link_category 
          $args = array(
              'search'=>$this->region_name   
              ,'parent'=>'0'
              ,'hide_empty' =>'0'           
           );
          $root_term_arr = get_terms('simple_link_category', $args);
         
           if(count($root_term_arr)> 1){
              _e('Cateogory setup wrong, can\'t be more than 2 same region category on the root level');
              return;
           }

           $args = array(
               'parent'=>$root_term_arr[0]->term_id
              ,'hide_empty' =>'0'           
           );
           $child_term_arr = get_terms('simple_link_category', $args);
           
           foreach($child_term_arr as $obj){
               if(strpos(strtolower($obj->name),'trip')!==false){ //get day_trip
                   $this->region_day_trip_cat_obj = $obj;
               } else {
                    $child_main_cat[] = $obj;
               }               
           }
           
           //order the block category 
           global $region_where_elements_in_order;       
           foreach($region_where_elements_in_order as $title){
               foreach($child_main_cat as $obj){
                   if(strpos(strtolower($obj->name),$title) !== false){
                       $child_main_cat_order[] = $obj;
                   }
               }
           }
 
           $this->region_wp_category =  array(
              'term_id'   => $root_term_arr[0]->term_id
             ,'slug'      => $root_term_arr[0]->slug
             ,'children'  =>  $child_main_cat_order              
           );
           
           
     }
       
   }
   
   public function __destruct() {
      
   }
   
   public function get_region_name(){
       return $this->region_name;
   }
   
   public function get_region_id(){
       return $this->region_id;
   }
   
   public function get_region_event_id(){
     return $this->region_event_id;
   }
   
   public function get_region_wp_cat_slug(){
     return $this->region_wp_slug;
   }
   
   public function get_region_wp_cat_id(){
     return $this->region_id;
   }
   
   
   public function form_pillar_page_where_element_name($name_indicator){
       $name_indicator = strtolower($name_indicator);
       if(strpos($name_indicator,'eat') !==false){
           $element_add ="eat";
       } elseif(strpos($name_indicator,'shop') !==false){
           $element_add ="shop";
       }  elseif(strpos($name_indicator,'go') !==false){
           $element_add ="go";
       }  elseif(strpos($name_indicator,'stay') !==false){
           $element_add ="stay";
       }  elseif(strpos($name_indicator,'see') !==false){
           $element_add ="see";
       }  elseif(strpos($name_indicator,'trips') !==false){
           $element_add ="trips";
       }
       
       $element_name = '';
       if(isset($element_add) and $element_add !='see' ){
            $element_name = 'where to'.' '.$element_add;
       }elseif($element_add =='see'){
           $element_name = 'what to see';
       }
       
       return $element_name;       
   }
   
   public function get_where_element(){
       $block_element_arr = array();
       
       $region_wp_cat_children_arr = $this->region_wp_category['children'];
       
       if(!is_array($region_wp_cat_children_arr) or count($region_wp_cat_children_arr)==0)return;
     
      
       $loop_cnt = 0;
       
       foreach($region_wp_cat_children_arr as $obj) {
           $element_arr = array();
           $element_title = self::form_pillar_page_where_element_name($obj->name);
           if(!empty($element_title)){
                if(method_exists('simple_links','z_taxonomy_image_url')){
                    $term_pic_url = simple_links::z_taxonomy_image_url($obj->term_id);
                }
                $element_arr['pic_link'] = $term_pic_url;
                if($loop_cnt%2){ //odd
                   $element_arr['layout'] = PIC_ON_LEFT; 
                } else { //even 
                   $element_arr['layout'] = PIC_ON_RIGHT;  
                }
                
               if(method_exists('simple_links','get_simple_link_posts')){
                  $cat_slug_arr = array($obj->slug);
                  $post_link_item = simple_links::get_simple_link_posts($cat_slug_arr);
               }
                
               $element_arr['items'] = $post_link_item;
                
               if(count($post_link_item)>0){ //if no link item, then ignore it show_region_day_trips
                   $block_element_arr[$element_title] =  $element_arr;
                   $loop_cnt++; 
               }
              
           }
          
       }
       return $block_element_arr;
       
          /*
       global $region_where_elements; //need to return the value based on the region id 
       return $region_where_elements[$this->region_id]; */
       
   }
   
   public function get_where_element_type($element_name='where to eat'){
       global $region_where_elements_type_mapping; //need to return the value based on the region id 
      
       return $region_where_elements_type_mapping[$this->region_id][$element_name];
       
   }
   
   
  public function show_randevent_base_cat($limit=5){
    $service_call =  THEME_SERVICE_URL."/where/randevents/?limit=".$limit."&catids=".$this->region_event_id;
    $other_tmp  =  file_get_contents($service_call);
    $event_arr = json_decode($other_tmp, true);
    
    foreach($event_arr as $val) {
        $listing_detail_url =  $this->home_url."/events/".$val['friendly_url']."/"; 
    ?>
     <p>
         <a class="event_title" href="<?php echo $listing_detail_url; ?>" target= "_parent" ><?php echo $val['title']; ?></a><br>
         <span class="event_location">Location:</span><?php echo $val['location']; ?></br>
         <a class="event_description" href="<?php echo $listing_detail_url; ?>" target= "_parent" ><?php echo where_theme_2012::cut_paragraph($val['description'],20); ?></a>
     </p>
   <?php    
     }
    }
    
    
   public function get_day_trips_elements(){
        
       if(method_exists('simple_links','get_simple_link_posts')){
          $cat_slug_arr = array($this->region_day_trip_cat_obj->slug);
          $post_link_item = simple_links::get_simple_link_posts($cat_slug_arr);
        }
        
        if(count($post_link_item)==0)return;
        
        foreach($post_link_item as $val){
            $my_id  = $val['id'];
            $my_tag_arr = get_the_terms($my_id,'simple_link_tag');
            if(count($my_tag_arr)>1){
              _e('Tag setup wrong, can\'t have more than 2 tag for the same post');
              return;
            } else {
               $the_tag = array_pop($my_tag_arr);
               if(empty($content_block[$the_tag->name])) {
                    $content_block[$the_tag->name] .= '<a href="'.$val['url'].'">'.$val['title'].'</a>'; 
               } else {
                   if(strpos( strtolower($val['title']),'about') !==false) { //should put about at the first position 
                     $content_block[$the_tag->name] =  '<a href="'.$val['url'].'">'.$val['title'].'</a> | '.$content_block[$the_tag->name];
                   } else{ 
                        $content_block[$the_tag->name] .= ' | <a href="'.$val['url'].'">'.$val['title'].'</a>'; 
                   }
               }
            }
        }
        
        return $content_block;        
        
   } 
   
   function show_latest_top_stories($limit=3){
     $region_name_slug = $region_cat_slug =  self::get_region_wp_cat_slug(); 
     
     $region_name     =  self::get_region_name(); 
     $the_query =  $this->get_request_wp_posts($region_cat_slug, NULL,$limit); 
    ?><ul><?php
     while ( $the_query->have_posts() ) : $the_query->the_post();
          ?><li class="block-item">
                <a href="<?php the_permalink(); ?>" class="story-thumb photo"><?php if ( has_post_thumbnail()) {the_post_thumbnail();} ?></a>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            </li><?php
     endwhile;
     ?>
           <li class="read-more"><a href="<?php echo site_url().'/'.$region_name_slug.'-articles/'; ?>"><span class="more_arrow" /></a><a href="<?php echo site_url().'/'.$region_name_slug.'-articles/'; ?>"><?php echo 'More '.$region_name.' Stories'; ?></a></li>
      </ul><?php  
  }
  
  
  
    
    
} 