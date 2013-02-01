<?php global $wh_theme_2012,$WH_THEME_CONFIG; 
   $page_indicator = $wh_theme_2012->get_page_inicator();
   $region_basic_arr = $wh_theme_2012->get_page_region_basic();         
?>
<div id="sidebar">
   <?php if($WH_THEME_CONFIG['side_bar_show'][$page_indicator]['bigbox-ad']){ ?>
    <div id="bigbox-ad" class="ad-box">
            <!--<img src="http://www.where.ca/travel/wp-content/themes/wheretravel-2009/images/advertisement-text.gif" class="ad-text"/>-->
            <!-- WH_BB_Upper -->
            <div id='div-gpt-ad-1351624106561-0'>
                <script type='text/javascript'>
                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1351624106561-0'); });
                </script>
            </div>
    </div>
   <?php  } ?>
    
    <?php if($WH_THEME_CONFIG['side_bar_show'][$page_indicator]['select-destination-id']){ ?>
    <div id="select-destination-id" class="select-destination">
        <h4><img src="http://www.where.ca/images/arrow-wht.png" alt="arrow graphic"> Stay, Dine, Do</h4>
        <p>Find a hotel, restaurant or attraction.</p>
        <ul>
        <li class="drop-down-indicator">Choose your destination <img src="http://www.where.ca/images/b_arrowDownBlack.png" alt="drop-down indicator">
            <ul class="drop-down">
                <li><a href="/calgary/">Calgary</a></li>
                <li><a href="/canadianrockies/">Canadian Rockies</a></li>
                <li><a href="/edmonton/">Edmonton</a></li>
                <li><a href="/halifax/">Halifax</a></li>
                <li><a href="/muskoka/">Muskoka</a></li>
                <li><a href="/ottawa/">Ottawa</a></li>
                <li><a href="/toronto/">Toronto</a></li>
                <li><a href="/vancouver/">Vancouver</a></li>
                <li><a href="/victoria/">Victoria</a></li>
                <li><a href="/whistler/">Whistler</a></li>
                <li class="last-item"><a href="/winnipeg/">Winnipeg</a></li>
            </ul>
        </li>  
        </ul>
    </div>
    <?php } ?>
    
    <?php if($WH_THEME_CONFIG['side_bar_show'][$page_indicator]['current-list-map']){ ?>
    <div id="current-list-map">
    <h1>Map of Search Results</h1><div id="cl-map"></div>
    </div>
    <?php } ?>
     <?php if($WH_THEME_CONFIG['side_bar_show'][$page_indicator]['rsb-events-calendar']){ ?>
         <?php if(!empty($region_basic_arr['event_id'])){ ?>
         <div id="rsb-events-calendar">
            <h1>Events Calendar</h1><div id="events-calendar"></div><div id="date_pick"><p>Click a date above or select a range below</p><p><span>From</span><input id="sdate" type="text" size="18"></p><p><span>To</span><input id="edate" type="text" size="18"><input id="date1" type="hidden"><input id="date2" type="hidden"><input id="date_event_range" type="button"></p></div>
        </div>
        <?php } ?>
    <?php }?>
    <?php if($WH_THEME_CONFIG['side_bar_show'][$page_indicator]['current-mag']){ ?>
    <div id="current-mag" class="sidebar-feed">
    <h4><a title="Contests" href="/contests/">Current contests</a></h4>
        <?php simple_feed_list('http://feeds.feedburner.com/WH-contest-feed?format=xml','limit=20&more=no'); ?>
    <a href="/contests/" class="more-link">MORE</a>
    </div>
    <?php } ?>
    
    <?php if($WH_THEME_CONFIG['side_bar_show'][$page_indicator]['deals']){ ?>
    <div id="deals" class="sidebar-feed">
    <h4><a title="Contests" href="/deals/">Deals</a></h4>
        <?php $wh_theme_2012->show_latest_active_deals_links(); ?>
    <a href="/deals/" class="more-link">MORE</a>
    </div>
    <?php } ?>

    <?php if($WH_THEME_CONFIG['side_bar_show'][$page_indicator]['secondbox-ad']){ ?>
    <div id="secondbox-ad" class="ad-box">
            <div id="div-gpt-ad-1344539030881-0">
            <script type="text/javascript">
            googletag.cmd.push(function() { googletag.display('div-gpt-ad-1344539030881-0'); });
            </script>
            </div>
    </div>
    <?php } ?>
    
    <?php
         $socialbox_arr=array(
             'vancouver'=>array('twitter'=>'wherevancouver', 'facebook'=>'wherevancouver'),
             'whistler'=>array('twitter'=>'wherewhistler'),
             'victoria'=>array('twitter'=>'wherevictoria'),
             'canadianrockies'=>array('twitter'=>'whererockies'),
             'calgary'=>array('twitter'=>'wherecalgary', 'facebook'=>'wherecalgarymag'),
             'edmonton'=>array('twitter'=>'whereedmonton'),
             'winnipeg'=>array('twitter'=>'wherewinnipeg', 'facebook'=>'pages/WHERE-Winnipeg-Magazine/120111428033285'),
             'toronto'=>array('twitter'=>'wheretoronto', 'facebook'=>'WhereToronto'),
             'muskoka'=>array('twitter'=>'wheremuskoka'),
             'ottawa'=>array('twitter'=>'whereottawa', 'facebook'=>'where.ottawa'),
             'halifax'=>array('twitter'=>'Where_Halifax')
         );
         if(isset($region_basic_arr['region_name'])){
            $region_name   =  $region_basic_arr['region_name'];
         }
         if(isset($region_basic_arr['province_name'])){
            $province_name =  $region_basic_arr['province_name'];
         }
         if ($region_name!='') {
        ?>
    
    <?php if($WH_THEME_CONFIG['side_bar_show'][$page_indicator]['weather-box-id']){ ?>
    <div id="weather-box-id" class="weather-box"><a name="weather"></a>
        <h1>Current Weather</h1>
        <?php
           $wh_city_name = $region_name;
           $wh_province_name = $province_name;
           if($region_name=='canadianrockies'){
              // $wh_city_name = 'vancouver';
              // $wh_province_name = 'british columbia';
               $wh_city_name = 'Banff';
               $wh_province_name = 'Alberta';               
           } 
           echo do_shortcode('[forecast location="'.$wh_city_name.','. $wh_province_name.'" caption="" measurement=\'C\' todaylabel="Today" datelabel="%%weekday%%" highlow=\'%%high%%°/%%low%%°\' numdays="5" iconset="Incredible" cache="true" width="100%"]'); 
        ?>
    </div>
    <?php } ?>
    <?php }?>
    
    <?php if($WH_THEME_CONFIG['side_bar_show'][$page_indicator]['currency_convertor']){ ?>
    <div id="currency_convertor"><a name="currency"></a>
    <h1>Currency Converter</h1>
    <script src="http://fx-rate.net/wp_converter.php?size=medium&layout=vertical&amount=100&tcolor=666666&default_pair=USD/CAD" type="text/javascript"></script>
    </div>
    <?php } ?>
    
    <?php if($WH_THEME_CONFIG['side_bar_show'][$page_indicator]['topstories-box']){ ?>
    <div id="topstories-box" class="sidebar-box">
    <h1>Top Stories</h1>
    <ul id="ts-tabs">
      <li class="current">Most Popular</li>
      <li>Most Recent</li>
    </ul>

    <div class="ts-details">
      <div>
        <?php 
            echo do_shortcode("[wpp range='all' post_type='post' stats_views=1 order_by='views']"); 
        ?>
      </div>
      <div style="display:none;">
        <?php 
           $wh_theme_2012->show_recent_posts_link(); 
        ?> 

      </div>
    </div>
    </div> 
    <?php } ?>

    <?php if($WH_THEME_CONFIG['side_bar_show'][$page_indicator]['facebook-box']){ ?>
    <div id="facebook-box" class="sidebar-box">
        
    <?php
      
     $face_book_site = ($socialbox_arr[strtolower($region_name)]['facebook'])?'where.ca&amp;name='.$socialbox_arr[strtolower($region_name)]['facebook']:'where.ca';
      
      
      $facebook_city_name = $region_name;
      if(empty($region_name)){
         $facebook_city_name = 'canada'; 
      } elseif($region_name=='canadianrockies'){
         $facebook_city_name = 'rockies';
      } 
   ?>
    <h1>Where <?php echo ucfirst($facebook_city_name);?> on Facebook</h1>
    
    <iframe src="http://www.facebook.com/plugins/activity.php?site=<?php echo $face_book_site;?>&amp;width=350&amp;height=300&amp;header=false&amp;colorscheme=light&amp;font&amp;border_color&amp;max_age=30&amp;recommendations=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:350px; height:300px;" allowTransparency="true"></iframe>
    </div>
    <?php } ?>
   
    <?php if($WH_THEME_CONFIG['side_bar_show'][$page_indicator]['twitter-box']){ ?>
    <div id="twitter-box" class="sidebar-box">
     <?php // echo do_shortcode('[twitter-widget avatar="mini" username="'.(($socialbox_arr[strtolower($region_name)]['twitter'])?$socialbox_arr[strtolower($region_name)]['twitter']:'wherecanada').'" items="5"]'); 
        $username = (($socialbox_arr[strtolower($region_name)]['twitter'])?$socialbox_arr[strtolower($region_name)]['twitter']:'wherecanada');
       $twitter_city_name = $region_name;
      if(empty($region_name)){
         $twitter_city_name = 'canada'; 
      } elseif($region_name=='canadianrockies'){
         $twitter_city_name = 'rockies';
      } 
     ?>
     <h1>Where <?php echo  ucfirst($twitter_city_name);?> on Twitter</h1>
     <section id="twitter-box">	
            <script src="http://widgets.twimg.com/j/2/widget.js"></script>
            <script>
            new TWTR.Widget({
              version: 2,
              type: 'search',
              search: ''+'<?php echo $username; ?>',
              interval: 6000,
              subject: '',
              width: '100%',
              height: 320,
              theme: {
                shell: {
                  background: '#EDEFF4',
                  color: '#333333'
                },
                tweets: {
                  background: '#FFFFFF',
                  color: '#252525',
                  links: '#9E0B0F'
                }
              },
              features: {
                scrollbar: true,
                loop: false,
                live: true,
                hashtags: true,
                timestamp: true,
                avatars: true,
                toptweets: true,
                behavior: 'all'
              }
            }).render().start();
            </script>
        </section> 
    
    
    </div>
   <?php } ?>  
</div>
<script type="text/javascript">
  $(document).ready(function(){
     $("#ts-tabs li").click(function(){
        if (!$(this).hasClass('current')) {
          $("#ts-tabs li").removeClass('current');
          $(this).addClass('current');
          var ind=$("#ts-tabs li").index($(this));
          $(".ts-details div").css('display','none');
          $(".ts-details div").eq(ind).fadeIn("slow");
        }
     });
  });
</script>
