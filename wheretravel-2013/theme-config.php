<?php
/**
 * @package WordPress
 */
if(!defined('NEW_LISTING_FOLDER')) {
   define('NEW_LISTING_FOLDER','listings'); 
}

if(!defined('SJM_SERVICE_FOLDER')) {
   define('SJM_SERVICE_FOLDER','sjmServiceTemp'); 
}

if(!defined('THEME_IMAGE_ROOT_FOLDER')) {
   define('THEME_IMAGE_ROOT_FOLDER', get_stylesheet_directory_uri()); 
}

$serverName = $_SERVER['SERVER_NAME'];
$serverNameArray = explode(".", $serverName);
if ($serverNameArray[0] == "stage") {
    $SJM_globalEnvironment = "stage.directory.stjosephmedia.com";   
} else if($serverNameArray[0] =="localhost"){
    //just for current testing 
     $SJM_globalEnvironment = "service.stjosephmedia.com";
} else {
    $SJM_globalEnvironment = "directory.stjosephmedia.com";    
}

if(!defined('THEME_SERVICE_URL')){
   define('THEME_SERVICE_URL', 'http://'.$SJM_globalEnvironment.'/'.SJM_SERVICE_FOLDER); 
}


global $WH_THEME_CONFIG;
$WH_THEME_CONFIG = array(
     'region_id_slug_name_mapping' =>  array(
        '3473' => 'calgary'
        ,'4063' => 'canadianrockies' //banf
        ,'3492' => 'edmonton'
        ,'4630' => 'halifax'
        ,'3522' => 'muskoka'
        ,'3479' => 'ottawa'
        ,'3489'  => 'toronto'
        ,'3486' => 'vancouver'
        ,'4650' => 'victoria'
        ,'3509' => 'whistler'
        ,'3995' => 'winnipeg'
      ),
    
    'region_id_province_name_mapping' =>  array(
        '3489' => 'ontario' //toronto
        ,'3486' =>'british columbia' //vancouver
        ,'3473' =>'alberta' //calgary
        ,'3492'=> 'alberta' //edmonton
        ,'4630' => 'nova scotia'//halifax
        ,'3522' => 'ontario' //muskoka
        ,'3479' => 'ontario' //ottawa
        ,'4650' => 'british columbia' //victoria
        ,'3509' => 'british columbia' //whister
         ,'3995' =>'manitoba' //winnipeg
        ,'4063' =>'' //rockies 
      ),
    
    'region_province_name_slug_mapping' => array(
        'toronto' => 'ontario' //toronto
        ,'vancouver' =>'british-columbia' //vancouver
        ,'calgary' =>'alberta' //calgary
        ,'edmonton'=> 'alberta' //edmonton
        ,'halifax' => 'nova-scotia'//halifax
        ,'muskoka' => 'ontario' //muskoka
        ,'ottawa' => 'ontario' //ottawa
        ,'victoria' => 'british-columbia' //victoria
        ,'whistler' => 'british-columbia' //whister
        ,'winnipeg' =>'manitoba' //winnipeg
        ,'canadianrockies' =>'' //rockies   
    ),
    
    'region_to_from_link_mapping' => array(
        'toronto' => 'toronto-airport-transit-pearson-airport-island-airport' //toronto
        ,'vancouver' =>'getting-to-and-from-vancouver-international-airport-yvr' //vancouver
        ,'calgary' =>'getting-to-and-from-calgary-international-airport-yyc' //calgary
        ,'edmonton'=> 'getting-to-and-from-edmonton-international-airport' //edmonton
        ,'halifax' => 'this-page-is-coming-soon'//halifax
        ,'muskoka' => 'this-page-is-coming-soon' //muskoka
        ,'ottawa' => 'getting-to-and-from-ottawa-international-airport' //ottawa
        ,'victoria' => 'this-page-is-coming-soon' //victoria
        ,'whistler' => 'this-page-is-coming-soon' //whister
        ,'winnipeg' =>'winnipeg-airport' //winnipeg
        ,'canadianrockies' =>'getting-to-and-from-the-canadian-rockies-and-nearby-airports' //rockies   
    ),
    
    'region_transport_link_mapping' => array(
        'calgary'=>'calgary-transit-guide-getting-around-cowtown'
        ,'edmonton'=>'edmonton-transit-guide-getting-around-the-city-of-champions'
        ,'toronto'=>'toronto-transit-guide'
        ,'ottawa'=>'ottawa-transit-guide-getting-around-canadas-capital'
        ,'vancouver'=>'vancouver-transit-guide-getting-around-vancity'
        ,'halifax' => 'this-page-is-coming-soon'//halifax
        ,'muskoka' => 'this-page-is-coming-soon' //muskoka
        ,'victoria' => 'this-page-is-coming-soon' //victoria
        ,'whistler' => 'this-page-is-coming-soon' //whister
        ,'winnipeg' =>'winnipeg-transit' //winnipeg
        ,'canadianrockies' =>'canadian-rockies-transit' //rockies        
    )
    
    
    ,'pillar_page_ghost_word' => array( //winnipeg
        'where to eat'=>'RESTAURANTS' //Restaurants
        ,'where to shop'=>'SHOPPING' //Shopping
        ,'where to go' =>'ENTERTAINMENT' //Entertainment   ENTERTAINMENT & NIGHTLIFE
        ,'what to see' =>'ATTRACTIONS'//Attractions
        ,'where to stay' =>'HOTELS' //Accommodations       
     ),
    
     'region_centra_point_mapping' => array(
            'toronto'  =>array(
               'slug' =>'sheraton-centre-toronto-wh' //'Toronto'  //
              ,'latitude'=>'43.651300'
              ,'longitude'=>'-79.383480'
              ,'title'=>'Sheraton Centre Toronto'
              ,'address'=>'123 Queen Street West,Toronto,M5H 2M9'
              ,'cattitle'=>'Hotel' 
              ,'catslug'=>'hotel'
              ,'catlevel1slug'=>'accommodations'
              ,'zindex'=> 1
             )
                
                
            ,'vancouver' =>array(
              'slug' => 'kirin-mandarin-restaurant-57' //'Vancouver'
              ,'latitude'=>'49.260612'
              ,'longitude'=>'-123.116277'
              ,'title'=>'Kirin Restaurant'
              ,'address'=>'201 - 555 W. 12th Ave.,Vancouver'
              ,'cattitle'=>'Chinese' 
              ,'catslug'=>'chinese'
              ,'catlevel1slug'=>'dining'
              ,'zindex'=> 1
             )
           
            ,'calgary' => array(
               'slug' => 'glenbow-museum-80' //'Calgary'
               ,'latitude'=>'51.044000'
               ,'longitude'=>'-114.060000'
               ,'title'=>'Glenbow Museum'
              ,'address'=>'130 - 9 Ave SE,Calgary'
              ,'cattitle'=>'Museums' 
              ,'catslug'=>'museums'
              ,'catlevel1slug'=>'art-galleries-museums'
              ,'zindex'=> 1  
             )  
                
            ,'edmonton' => array(
               'slug' =>'baccarat-casino-wh'//Edmonton'
               ,'latitude'=>'53.546530'
               ,'longitude'=>'-113.493404'
              ,'title'=>'Baccarat Casino'
              ,'address'=>'Baccarat Casino,Edmonton'
              ,'cattitle'=>'Casinos' 
              ,'catslug'=>'casinos'
              ,'catlevel1slug'=>'entertainment'
              ,'zindex'=> 1
             )  
                
            ,'winnipeg' => array(
               'slug' => 'the-manitoba-museum-wh' //Winnipeg
               ,'latitude'=>'49.900510'
               ,'longitude'=>'-97.136350'
              ,'title'=>'The Manitoba Museum'
              ,'address'=>'190 Rupert Ave,Winnipeg,R3B 0N2'
              ,'cattitle'=>'Museums' 
              ,'catslug'=>'museums'
              ,'catlevel1slug'=>'art-galleries-museums'
              ,'zindex'=> 1
             )  
                
            ,'halifax' =>array(
              'slug' => 'halifax-city-hall-wh' //'Halifax'
               ,'latitude'=>'44.648074'
               ,'longitude'=>'-63.575300'
              ,'title'=>'Halifax City Hall'
              ,'address'=>'1841 Argyle St.,Halifax'
              ,'cattitle'=>'Historic Sites' 
              ,'catslug'=>'historic-sites'
              ,'catlevel1slug'=>'activities-tours'
              ,'zindex'=> 1
             )  
                
                
            ,'muskoka' => array(
              'slug' => 'walkers-point-marina-wh'//Muskoka'
              ,'latitude'=>'44.778375'
              ,'longitude'=>'-79.356243'
              ,'title'=>'Walkers Point Marina'
              ,'address'=>'1035 Marina Rd.,Gravenhurst'
              ,'cattitle'=>'Marinas' 
              ,'catslug'=>'marinas'
              ,'catlevel1slug'=>'marinas'
              ,'zindex'=> 1
             )   
                
            ,'ottawa' =>array(
              'slug' =>'ottawa-city-hall-wh' //'Ottawa'
              ,'latitude'=>'45.421262'
               ,'longitude'=>'-75.692206'
              ,'title'=>'Ottawa City Hall'
              ,'address'=>'110 Laurier Ave. W.,Ottawa'
              ,'cattitle'=>'Historic Sites' 
              ,'catslug'=>'historic-sites'
              ,'catlevel1slug'=>'attractions'
              ,'zindex'=> 1
             )  
                
            ,'victoria' =>array(
              'slug' => 'eugene-17' //'Victoria'  
              ,'latitude'=>'48.425918'
               ,'longitude'=>'-123.366534'
               ,'title'=>'Eugene’s'
              ,'address'=>'3-3960 Shellbourne Ave,Victoria'
              ,'cattitle'=>'Greek' 
              ,'catslug'=>'greek'
              ,'catlevel1slug'=>'dining'
              ,'zindex'=> 1
             )  
                
            ,'whistler' =>array(
               'slug' => 'delta-whistler-village-suites-70'//'Whistler'
               ,'latitude'=>'50.116970'
              ,'longitude'=>'-122.956700'
              ,'title'=>'Delta Whistler Village Suites'
              ,'address'=>'4308 Main Street,Whistler'
              ,'cattitle'=>'Whistler' 
              ,'catslug'=>'whistler'
              ,'catlevel1slug'=>'accommodations'
             ,'zindex'=> 1
             )
           
           ,'canadianrockies' =>array( 
            /*   
               'slug' => 'ok-gift-shop-36'//'banf'
               ,'latitude'=>'51.177023'
              ,'longitude'=>'-115.570925'
              ,'title'=>'Ok Gift Shop'
              ,'address'=>'209 Banff Ave,Banff'
              ,'cattitle'=>'Gifts & Souvenirs' 
              ,'catslug'=>'gifts-souvenirs'
              ,'catlevel1slug'=>'shopping'
             ,'zindex'=> 1
            */   
             'slug' => 'kicking-horse-mountain-resort-near-golden--73'//'banf'
             ,'latitude'=>'51.301787'
              ,'longitude'=>'-116.973387'
              ,'title'=>'Kicking Horse Mountain Resort (near Golden)'
              ,'address'=>'1500 Kicking Horse Tr'
              ,'cattitle'=>'Sightseeing Lifts' 
              ,'catslug'=>'sightseeing-lifts-golden'
              ,'catlevel1slug'=>'activities-tours'
             ,'zindex'=> 1 
               
             )
       ),
    
    'region_event_id_name_mapping' =>  array(
        'calgary'=>'21'
        ,'muskoka'=>'113'
        ,'toronto'=>'51'
        ,'vancouver'=>'70'
       // ,'victoria'=>'128'
        ,'whistler'=>'138'
        ,'ottawa' =>'122'
        ,'canadian rockies'=>'177'
      )
    
   , 'international_guide' =>
        '
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/ga/atlanta/">Atlanta</a></li>
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/co/aspen/">Aspen</a></li>
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/ma/boston/">Boston</a></li>
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/il/chicago/">Chicago</a></li>
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/tx/dallas/">Dallas</a></li>
        <li class="hom"><a title="Hawaiian Islands" href="http://www.wheretraveler.com/classic/us/ha/hawaiian-islands/">Hawaiian Islands</a></li>
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/sc/hilton-head/">Hilton Head</a></li>
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/tx/houston/">Houston</a></li>
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/fl/key-west/">Key West</a></li>
        <li class="hom"><a href="http://www.wheretraveler.com/classic/intl/pl/krakow/">Krakow</a></li>
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/nv/las-vegas/">Las Vegas</a></li>
        <li class="hom"><a href="http://www.wheretraveler.com/classic/intl/uk/london/">London</a></li>
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/ca/los-angeles/">Los Angeles</a></li>
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/tn/memphis/">Memphis</a></li>
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/fl/miami/">Miami</a></li>
        <li class="hom"><a href="http://www.wheretraveler.com/classic/intl/it/milan/">Milan</a></li>
        <li class="hom"><a href="http://www.wheretraveler.com/classic/intl/ru/moscow/">Moscow</a></li>
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/tn/nashville/">Nashville</a></li>
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/ny/new-york-city/">New York</a></li>
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/az/northern-arizona/">Northern Arizona</a></li>
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/fl/orlando/">Orlando</a></li>        
        <li class="hom"><a href="http://www.wheretraveler.com/classic/intl/fr/paris/">Paris</a></li>
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/pa/philadelphia/">Philadelphia</a></li>
        <li class="hom"><a title="Where in Portland, Oregon" href="http://www.wheretraveler.com/classic/us/or/portland/">Portland</a></li>

        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/az/phoenix/">Phoenix</a></li>
        <li class="hom"><a href="http://www.wheretraveler.com/classic/intl/cz/prague/">Prague</a></li>

        <li class="hom"><a href="http://www.wheretraveler.com/classic/intl/it/rome/">Rome</a></li>


        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/ca/san-diego/">San Diego</a></li>

        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/ca/san-francisco/">San Francisco Bay Area</a></li>
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/ga/savannah/">Savannah</a></li>

        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/az/phoenix/">Scottsdale</a></li>
        <li class="hom"><a href="http://www.wheretraveler.com/classic/us/wa/seattle/">Seattle</a></li>
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/fl/southwest-florida/">Southwest Florida</a></li>
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/wa/tacoma/">Tacoma</a></li>
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/fl/tallahassee/">Tallahassee</a></li>
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/fl/tampa/">Tampa Bay</a></li>
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/az/tucson/">Tucson</a></li>
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/mn/twin-cities/">Twin Cities</a></li>
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/va/northern-virginia/">Virginia</a></li>
        <li class="hom"><a title="" href="http://www.wheretraveler.com/classic/us/dc/washington-dc/">Washington, D.C.</a></li>
        <li class="hom"><a href="http://www.wheretraveler.com/classic/intl/hu/budapest/">Budapest</a></li>
        <li class="hom"><a href="http://www.wheretraveler.com/classic/intl/ru/st-petersburg/">St. Petersburg</a></li>
        <li class="hom"><a href="http://www.wheretraveler.com/classic/intl/sg/singapore/">Singapore</a></li>
        '
,'side_bar_show'=>array(
       'page_home' => array(
          'bigbox-ad'   =>'1'
         ,'select-destination-id'=>'0'
         ,'current-list-map'=>'0'
         , 'current-mag'=>'1'
         , 'deals'=>'1'
         , 'secondbox-ad'=>'1'
         , 'weather-box-id'=>'0'
         , 'currency_convertor'=>'0'
         , 'topstories-box'=>'1'
         , 'facebook-box'=>'1'
         , 'twitter-box'=>'1'
       )
      ,'page_region'=> array(
         'bigbox-ad'   =>'1'
         ,'select-destination-id'=>'1'
         ,'current-list-map'=>'0'
         , 'current-mag'=>'1'
         , 'deals'=>'1'
         , 'secondbox-ad'=>'1'
         , 'weather-box-id'=>'1'
         , 'currency_convertor'=>'1'
         , 'topstories-box'=>'1'
         , 'facebook-box'=>'1'
         , 'twitter-box'=>'1'
      )
      ,'page_detail' => array(
        'bigbox-ad'   =>'1'
         ,'select-destination-id'=>'1'
         ,'current-list-map'=>'1'
         ,'rsb-events-calendar'=>'0'
         , 'current-mag'=>'1'
         , 'deals'=>'1'
         , 'secondbox-ad'=>'1'
         , 'weather-box-id'=>'0'
         , 'currency_convertor'=>'0'
         , 'topstories-box'=>'1'
         , 'facebook-box'=>'1'
         , 'twitter-box'=>'1'  
      )
      ,'page_listing' => array(
         'bigbox-ad'   =>'1'
         ,'select-destination-id'=>'1'
         ,'current-list-map'=>'1'
         ,'rsb-events-calendar'=>'1'
         , 'current-mag'=>'0'
         , 'deals'=>'0'
         , 'secondbox-ad'=>'1'
         , 'weather-box-id'=>'0'
         , 'currency_convertor'=>'0'
         , 'topstories-box'=>'1'
         , 'facebook-box'=>'1'
         , 'twitter-box'=>'1'  
      )
    ,'page_listing_detail' => array(
         'bigbox-ad'   =>'1'
         ,'select-destination-id'=>'0'
         ,'current-list-map'=>'0'
         , 'current-mag'=>'1'
         , 'deals'=>'1'
         , 'secondbox-ad'=>'1'
         , 'weather-box-id'=>'0'
         , 'currency_convertor'=>'1'
         , 'topstories-box'=>'1'
         , 'facebook-box'=>'1'
         , 'twitter-box'=>'1'  
      ) 
    
      ,'page_deal' => array(
         'bigbox-ad'   =>'1'
         ,'select-destination-id'=>'0'
         ,'current-list-map'=>'0'
         , 'current-mag'=>'1'
         , 'deals'=>'0'
         , 'secondbox-ad'=>'1'
         , 'weather-box-id'=>'0'
         , 'currency_convertor'=>'0'
         , 'topstories-box'=>'1'
         , 'facebook-box'=>'1'
         , 'twitter-box'=>'1'  
      )
    
     ,'page_default' => array(
         'bigbox-ad'   =>'1'
         ,'select-destination-id'=>'0'
         ,'current-list-map'=>'0'
         , 'current-mag'=>'1'
         , 'deals'=>'1'
         , 'secondbox-ad'=>'1'
         , 'weather-box-id'=>'0'
         , 'currency_convertor'=>'1'
         , 'topstories-box'=>'1'
         , 'facebook-box'=>'1'
         , 'twitter-box'=>'1'  
      )           
    )
    ,'image_credit_links'=>array(
      'home'=>'Photo credits: Rockies by <a href="http://www.flickr.com/photos/xoque/7771674900/">xoque</a> Edmonton by <a href="http://www.flickr.com/photos/sarunas_b/2987366371/">Sarunas Burdulis</a> Halifax by <a href="http://www.flickr.com/photos/48722974@N07/5494812044/">eutrophication&hypoxia</a> Ottawa by <a href="http://www.flickr.com/photos/gord99/7246405452/in/pool-wherecanada">Gord KcKenna</a> Toronto by Doug Brown/Tourism Toronto Vancouver by <a href="http://www.flickr.com/photos/juliusreque/5308038540/in/pool-1079001@N20/">[travelfox]</a> Victoria by <a href="http://www.flickr.com/photos/stewart/232281190/">Stewart</a> Whistler by Mike Crane/Tourism Whistler Winnipeg by <a href="http://www.flickr.com/photos/ajbatac/7138894971/">AJ Batac</a>'
      ,'toronto'=>'Photo credits: bed by <a href="http://www.flickr.com/photos/comfortsuitesdenvertech/4108578596/in/photostream/">Comfort Suites Denver Tech Center Hotel</a> martini by <a href="http://www.flickr.com/photos/preppybyday/5076909064/>TheCulinaryGeek</a> pizza by <a href="http://www.flickr.com/photos/23081017@N03/3382078836/in/photostream/">mdr13it</a> shirts <a href="http://www.flickr.com/photos/spcummings/3800305515/in/photostream/">S. Cummings</a> CN Tower by <a href="http://www.flickr.com/photos/bribri/497338779/">BriYYZ</a>'
      ,'calgary'=>'Photo credits: bed by <a href="http://www.flickr.com/photos/comfortsuitesdenvertech/4108578596/in/photostream/">Comfort Suites Denver Tech Center Hotel</a> martini by <a href="http://www.flickr.com/photos/preppybyday/5076909064/>TheCulinaryGeek</a> pizza by <a href="http://www.flickr.com/photos/23081017@N03/3382078836/in/photostream/">mdr13it</a> shirts <a href="http://www.flickr.com/photos/spcummings/3800305515/in/photostream/">S. Cummings</a> tower <a href="http://www.flickr.com/photos/hisgett/8033515499/">ahisgett</a>'
      ,'canadianrockies'=>'Photo credits: bed by <a href="http://www.flickr.com/photos/comfortsuitesdenvertech/4108578596/in/photostream/">Comfort Suites Denver Tech Center Hotel</a> martini by <a href="http://www.flickr.com/photos/preppybyday/5076909064/>TheCulinaryGeek</a> pizza by <a href="http://www.flickr.com/photos/23081017@N03/3382078836/in/photostream/">mdr13it</a> shirts <a href="http://www.flickr.com/photos/spcummings/3800305515/in/photostream/">S. Cummings</a> Jasper park by <a href="http://www.flickr.com/photos/hbarrison/2873538417/">HBarrison</a>'
      ,'edmonton'=>'Photo credits: bed by <a href="http://www.flickr.com/photos/comfortsuitesdenvertech/4108578596/in/photostream/">Comfort Suites Denver Tech Center Hotel</a> martini by <a href="http://www.flickr.com/photos/preppybyday/5076909064/>TheCulinaryGeek</a> pizza by <a href="http://www.flickr.com/photos/23081017@N03/3382078836/in/photostream/">mdr13it</a> shirts <a href="http://www.flickr.com/photos/spcummings/3800305515/in/photostream/">S. Cummings</a> Legislature Building <a href="http://www.flickr.com/photos/cogdog/4729491072/">cogdogblog</a>'
      ,'halifax'=>'Photo credits: bed by <a href="http://www.flickr.com/photos/comfortsuitesdenvertech/4108578596/in/photostream/">Comfort Suites Denver Tech Center Hotel</a> martini by <a href="http://www.flickr.com/photos/preppybyday/5076909064/>TheCulinaryGeek</a> pizza by <a href="http://www.flickr.com/photos/23081017@N03/3382078836/in/photostream/">mdr13it</a> shirts <a href="http://www.flickr.com/photos/spcummings/3800305515/in/photostream/">S. Cummings</a> town clock by <a href="http://www.flickr.com/photos/kitonlove/3609859570/">cphoffman42</a>'  
      ,'muskoka'=>'Photo credits: bed by <a href="http://www.flickr.com/photos/comfortsuitesdenvertech/4108578596/in/photostream/">Comfort Suites Denver Tech Center Hotel</a> martini by <a href="http://www.flickr.com/photos/preppybyday/5076909064/>TheCulinaryGeek</a> pizza by <a href="http://www.flickr.com/photos/23081017@N03/3382078836/in/photostream/">mdr13it</a> shirts <a href="http://www.flickr.com/photos/spcummings/3800305515/in/photostream/">S. Cummings</a> poster <a href="http://www.flickr.com/photos/monado/2959319569/in/photostream/">Monado</a>'
      ,'ottawa'=>'Photo credits: bed by <a href="http://www.flickr.com/photos/comfortsuitesdenvertech/4108578596/in/photostream/">Comfort Suites Denver Tech Center Hotel</a> martini by <a href="http://www.flickr.com/photos/preppybyday/5076909064/>TheCulinaryGeek</a> pizza by <a href="http://www.flickr.com/photos/23081017@N03/3382078836/in/photostream/">mdr13it</a> shirts <a href="http://www.flickr.com/photos/spcummings/3800305515/in/photostream/">S. Cummings</a> Parliament Hill <a href="http://www.flickr.com/photos/asw909/5767524499/">asw909</a>'
      ,'vancouver'=>'Photo credits: bed by <a href="http://www.flickr.com/photos/comfortsuitesdenvertech/4108578596/in/photostream/">Comfort Suites Denver Tech Center Hotel</a> martini by <a href="http://www.flickr.com/photos/preppybyday/5076909064/>TheCulinaryGeek</a> pizza by <a href="http://www.flickr.com/photos/23081017@N03/3382078836/in/photostream/">mdr13it</a> shirts <a href="http://www.flickr.com/photos/spcummings/3800305515/in/photostream/">S. Cummings</a> Science World by <a href="http://www.flickr.com/photos/john_whitworth_photography/3857269008/">John Whitworth Photography</a>'  
      ,'victoria'=>'Photo credits: bed by <a href="http://www.flickr.com/photos/comfortsuitesdenvertech/4108578596/in/photostream/">Comfort Suites Denver Tech Center Hotel</a> martini by <a href="http://www.flickr.com/photos/preppybyday/5076909064/>TheCulinaryGeek</a> pizza by <a href="http://www.flickr.com/photos/23081017@N03/3382078836/in/photostream/">mdr13it</a> shirts <a href="http://www.flickr.com/photos/spcummings/3800305515/in/photostream/">S. Cummings</a> Craigbarroch Castle by <a href="http://www.flickr.com/photos/tracy_olson/458512203/">Tracy O</a>'  
      ,'whistler'=>'Photo credits: bed by <a href="http://www.flickr.com/photos/comfortsuitesdenvertech/4108578596/in/photostream/">Comfort Suites Denver Tech Center Hotel</a> martini by <a href="http://www.flickr.com/photos/preppybyday/5076909064/>TheCulinaryGeek</a> pizza by <a href="http://www.flickr.com/photos/23081017@N03/3382078836/in/photostream/">mdr13it</a> shirts <a href="http://www.flickr.com/photos/spcummings/3800305515/in/photostream/">S. Cummings</a> gondola by <a href="http://www.flickr.com/photos/tgillin/4599268763/">Tim in Sydney</a>'
      ,'winnipeg'=>'Photo credits: bed by <a href="http://www.flickr.com/photos/comfortsuitesdenvertech/4108578596/in/photostream/">Comfort Suites Denver Tech Center Hotel</a> martini by <a href="http://www.flickr.com/photos/preppybyday/5076909064/>TheCulinaryGeek</a> pizza by <a href="http://www.flickr.com/photos/23081017@N03/3382078836/in/photostream/">mdr13it</a> shirts <a href="http://www.flickr.com/photos/spcummings/3800305515/in/photostream/">S. Cummings</a> Golden Boy by <a href="http://www.flickr.com/photos/ajbatac/6886624250/">AJ Batac</a>'
    )
);

global $home_page_region_part;

global $wordpress_region_cats_mapping;
$wordpress_region_catslug_mapping = array(
     'calgary','edmonton','halifax','muskoka','ottawa','ottawa','canadianrockies','toronto','vancouver','victoria','whistler','winnipeg'
 );
        
$home_page_region_part = array(
    '3473' => array(
        'cat_slug'=>'calgary'
        ,'name' =>'Calgary'
        ,'name_slug' =>'calgary' //wordpress cattegory slug
        ,'pic_link'=>THEME_IMAGE_ROOT_FOLDER.'/images/calgary.jpg'
     )
     ,'4063' => array(
       'cat_slug'=>'banff'    
       ,'name' => 'Canadian Rockies'
       ,'name_slug' =>'canadianrockies'  
       ,'pic_link'=>THEME_IMAGE_ROOT_FOLDER.'/images/Canadian-Rockies.jpg' 
      )
    ,'3492' => array(
        'cat_slug'=>'edmonton'
        ,'name' => 'Edmonton'
        ,'name_slug' =>'edmonton'
        ,'pic_link'=>THEME_IMAGE_ROOT_FOLDER.'/images/Edmonton.jpg'
     )
    
     ,'4630' => array(
       'cat_slug'=>'halifax'  
      ,'name' => 'Halifax'
      ,'name_slug' =>'halifax'
      ,'pic_link'=>THEME_IMAGE_ROOT_FOLDER.'/images/Halifax.jpg'
     )
    
     ,'3522' => array(
       'cat_slug'=>'muskoka'   
       ,'name' => 'Muskoka'
       ,'name_slug' =>'muskoka' 
        ,'pic_link'=>THEME_IMAGE_ROOT_FOLDER.'/images/Muskoka.jpg'
      )
    
     ,'3479' => array(
       'cat_slug'=>'ottawa'    
       ,'name' => 'Ottawa'
       ,'name_slug' =>'ottawa'  
       ,'pic_link'=>THEME_IMAGE_ROOT_FOLDER.'/images/Ottawa.jpg' 
      )
    
    ,'3489'  => array(
       'cat_slug'=>'toronto' 
       ,'name'=> 'Toronto'
       ,'name_slug' =>'toronto'
       ,'pic_link' => THEME_IMAGE_ROOT_FOLDER.'/images/Toronto.jpg' 
      )
    
    ,'3486' => array(
        'cat_slug'=>'vancouver'
        ,'name' =>'Vancouver'
        ,'name_slug' =>'vancouver'
        ,'pic_link'=> THEME_IMAGE_ROOT_FOLDER.'/images/Vancouver.jpg'
     )
    
    ,'4650' => array(
       'cat_slug'=>'victoria'    
       ,'name' => 'Victoria'
       ,'name_slug' =>'victoria'  
       ,'pic_link'=>THEME_IMAGE_ROOT_FOLDER.'/images/Victoria.jpg' 
      )
    
      ,'3509' => array(
       'cat_slug'=>'whistler'    
       ,'name' => 'Whistler'
       ,'name_slug' =>'whistler'  
       ,'pic_link'=>THEME_IMAGE_ROOT_FOLDER.'/images/Whistler.jpg' 
      )   
      
      ,'3995' => array(
       'cat_slug'=>'winnipeg'    
       ,'name' => 'Winnipeg'
       ,'name_slug' =>'winnipeg'  
       ,'pic_link'=>THEME_IMAGE_ROOT_FOLDER.'/images/Winnipeg.jpg' 
      )    
    );

global $region_where_elements;

if(!defined('PIC_ON_RIGHT')){
    define('PIC_ON_RIGHT',1);
}

if(!defined('PIC_ON_LEFT')){
    define('PIC_ON_LEFT',0); 
}

global $region_where_elements_type_mapping;

$region_where_elements_type_mapping =  array(
    '3473' => array( //calgary
        'where to eat'=>'restaurants'//'3497' //Restaurants
        ,'where to shop'=>'shopping' //'5473' //Shopping
        ,'where to go' =>'activities-sports' // '3877' //Activities & Sports
        ,'what to see' =>'attractions' // '5867'//Attractions
        ,'where to stay' =>'accommodations' // '3541' //Accommodations
       )
    ,'3492' => array( //edmonton
         'where to eat'=>'restaurants' // '3533' //Restaurants
        ,'where to shop'=>'shopping' //'5497' //Shopping
        ,'where to go' =>'nightlife' // '4002' //Nightlife
        ,'what to see' =>'attractions' //'4013'//Attractions
        ,'where to stay' =>'accommodations' //'3687' //Accommodations
     )
    
     ,'4630' => array( //halifax
        'where to eat'=>'restaurants' // '4639' //Restaurants
        ,'where to shop'=>'shopping' //'4663' //Shopping
        ,'where to go' =>'recreation' // '4631' //Recreation
        ,'what to see' =>'attractions' //'4677'//Attractions
        ,'where to stay' =>'accommodations' //'4761' //Accommodations
     )
    
     ,'3522' => array( //muskoka
        'where to eat'=>'restaurants' // '3523' //Restaurants
        ,'where to shop'=>'shopping' //'3529' //Shopping
        ,'where to go' =>'recreation' // '3952' //Recreation
        ,'what to see' =>'attractions' //'3707'//Attractions
        ,'where to stay' =>'accommodations' //'4179' //Accommodations
      )
    
     ,'3479' => array(//ottawa
        'where to eat'=>'restaurants' // '3482' //Restaurants
        ,'where to shop'=>'shopping' //'3742' //Shopping
        ,'where to go' => 'entertainment' // '3480' //Entertainment
        ,'what to see' =>'attractions' //'3514'//Attractions
        ,'where to stay' =>'accommodations' //'3677' //Accommodations
      )
    
     ,'4063' => array(// Rockies  banff
        'where to eat'=>'banff/restaurants' // '5003' //Restaurants
        ,'where to shop'=>'banff/shopping' //'4734' //Shopping
        ,'where to go' =>'banff/entertainment' //'4644' //Entertainment
        ,'what to see' =>'banff/attractions' // '4064'//Attractions
        ,'where to stay' =>'banff/accommodations'// '4253' //Accommodations
      )
    
    ,'3489'  => array( //toronto
        'where to eat'=>'restaurants' // '3516' //Restaurants
        ,'where to shop'=>'shopping' //'3490' //Shopping
        ,'where to go' =>'entertainment' //'3519' //Entertainment
        ,'what to see' =>'attractions' // '3646'//Attractions
        ,'where to stay' =>'accommodations' //'3976' //Accommodations
      )
    
    ,'3486' => array( //vancouver
       'where to eat'=>'restaurants'  // '3535' //Restaurants
        ,'where to shop'=>'shopping'// '3512' //Shopping
        ,'where to go' =>'entertainment' //'3937' //Entertainment
        ,'what to see' =>'tours-leisure-activities'// '3591'//Tours & Leisure Activities
        ,'where to stay' =>'accommodations' // '3567' //Accommodations
     )
    
    ,'4650' => array( //victoria
       'where to eat'=>'restaurants' // '4651' //Restaurants
        ,'where to shop'=>'shopping' // '4660' //Shopping
        ,'where to go' =>'entertainment' //'4745' //Entertainment
        ,'what to see' =>'getting-around' // '4671'//Getting Around
        ,'where to stay' =>'accommodations'  //'4655' //Accommodations
      )
    
      ,'3509' => array( //whistler
       'where to eat'=>'restaurants' // '3510' //Restaurants
        ,'where to shop'=>'shopping' // '3624' //Shopping
        ,'where to go' =>'entertainment' // '3757' //Entertainment
        ,'what to see' =>'art-galleries-museums' //'3612'//Art, Galleries & Museums
        ,'where to stay' =>'accommodations' //'3569' //Accommodations
      )   
      
      ,'3995' => array( //winnipeg
        'where to eat'=>'restaurants' //'4244' //Restaurants
        ,'where to shop'=>'shopping' // '3996' //Shopping
        ,'where to go' =>'entertainment' // '4344' //Entertainment
        ,'what to see' =>'attractions' // '4280'//Attractions
        ,'where to stay' =>'accommodations' //'4306' //Accommodations        ,'what to do'=>''   //
      )
    
);

global $region_where_elements_in_order;
$region_where_elements_in_order = array(
    'eat','shop','go','stay','see'    
);

?>
