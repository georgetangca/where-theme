<div id="sidebar">

<div id="bigbox-ad">
	<img src="http://www.where.ca/travel/wp-content/themes/wheretravel-2009/images/advertisement-text.gif" class="ad-text"/>
	<!-- WH_BB_Upper -->
	<div id='div-gpt-ad-1344539030881-1'>
		<script type='text/javascript'>
		googletag.cmd.push(function() { googletag.display('div-gpt-ad-1344539030881-1'); });
		</script>
	</div>
</div>

<div class="select-destination">
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


<div id="current-mag">
<h4><a title="Contests" href="http://www.where.ca/contests/">Current contests</a></h4>
    <?php simple_feed_list('http://feeds.feedburner.com/WH-contest-feed?format=xml','limit=20&more=no'); ?>
</div>


<div id="facebook-box" style="margin:22px 0;">
<iframe src="http://www.facebook.com/plugins/activity.php?site=where.ca&amp;width=300&amp;height=300&amp;header=false&amp;colorscheme=light&amp;font&amp;border_color&amp;recommendations=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:300px;" allowTransparency="true"></iframe>
</div>

<div class="divider">
<img class="ad-text" src="http://media.torontolife.com/img/special-messages.gif" />

<!--from openx website ivocation code -->
<script type='text/javascript'><!--// <![CDATA[
    /* [id15] sidebar_1 */
    OA_show(15);
// ]]> --></script><noscript><a target='_blank' href='http://ads.stjosephmedia.com/www/delivery/ck.php?n=1f13060'><img border='0' src='http://ads.stjosephmedia.com/www/delivery/avw.php?zoneid=15&amp;n=1f13060' /></a></noscript>
<br>
<!--The Toronto Life ad should only appear on categories 3,4,5,21,3968 -->
<!--The Vancouver Tourism ad should only appear on categories 974,2987,19,741,742 -->
<script type='text/javascript'><!--// <![CDATA[
    /* [id26] sidebar_2 */
    OA_show(26);
// ]]> --></script><noscript><a target='_blank' href='http://ads.stjosephmedia.com/www/delivery/ck.php?n=1c69e6d'><img border='0' src='http://ads.stjosephmedia.com/www/delivery/avw.php?zoneid=26&amp;n=1c69e6d' /></a></noscript>

<?php
global $post;
$categories = get_the_category($post->ID);
$category_id = get_cat_id($categories[0]->cat_name);
$category_id_nice = $categories[0]->category_nicename;

echo('<!-- $category_id = '.$category_id.' -->');
echo('<!-- $category_id_nice = '.$category_id_nice.' -->');
echo('<!-- self = '.$_SERVER['PHP_SELF'].' -->');

$cats = array('3','4','5','21','3968');
$cats2 = array('974','2987','19','741','742');

if (in_array($category_id, $cats) && $_SERVER['PHP_SELF'] != '/index.php' ) 
  { ?>
<a href="http://www.where.ca/index.php/todo/"><img src="http://media.torontolife.com/img/TOdo/TOdo_MB.gif" title="To Do" alt="To DO" style="margin:5px 0 10px 0;" /></a>
<?php } ?>


<?php 
if (in_array($category_id, $cats2) && $_SERVER['PHP_SELF'] != '/index.php' ) 
  { ?>
<a href="http://www.vancouvertourismawards.com" target="_blank"><img src="http://www.where.ca/images/vancouvertourism-band.gif" /></a>
  <?php } ?>

</div>

<div class="divider">
<img class="ad-text" src="http://www.where.ca/wp-content/themes/wheretravel-2009/images/advertisement-text.gif" />
	<!-- WH_BB_Lower -->
	<div id='div-gpt-ad-1344539030881-0' style='width:300px; height:250px;'>
	<script type='text/javascript'>
	googletag.cmd.push(function() { googletag.display('div-gpt-ad-1344539030881-0'); });
	</script>
</div>
</div>

<?php if (!is_front_page()) {?>
<div class="divider">
<link rel="stylesheet" type="text/css" href="http://static.flightnetwork.com/aff/CJ/Widgets/300250/css/style.css"/>
<link rel="stylesheet" type="text/css" href="http://static.flightnetwork.com/aff/CJ/Widgets/css/fn.all.css"/>
<div class="widgets_warapper">
  <form id="SearchFare" name="SearchFare" action="http://www.kqzyfj.com/interactive" method="get" onsubmit="return Validate();" target="_blank"> 
<input type = "hidden" name="client_ref" id="client_ref" value="CJU"/>
 <!--		<input type = "hidden" name="trip_type" id="trip_type" value="1"/>  -->
	<input type = "hidden" name="cls" id="cls" value="0"/>
<!--	<input type="hidden" value="" id="gateway_ret" name="gateway_ret"/>
    <input type="hidden" value="" id="gateway_dep" name="gateway_dep"/> -->
     <input type="hidden" value="USD" id="currency" name="currency"/> 
	<div class="main_bg">
    	<div id="top">
        	<div><input type="radio" id="trip_type" name="trip_type" value="1" onclick="validateReturn()" class="radio" checked="checked">
        	     <span>Return</span>
        	</div>
            <div><input type="radio" id="trip_type" name="trip_type" value="0" onclick="validateOneway()" class="radio">
                 <span>Oneway</span>
            </div>
        </div>
        <div class="widgets_form">
        	<div class="widgets_left">
            	<label>From :</label>
                <div class="input_style_01">
                        <input name="gateway_departure" id="gateway_departure"  class="textbox" autocomplete="off" value="City Name" title="Please enter the departure city or 3-letter airport code" type="text" onblur="if (value== '') {value='City Name'}" onfocus="if (value == 'City Name') {value=''}">
                	<div class="autocomplete" id="d_hint1"></div>
		            <input type = "hidden" name="gateway_dep" id="gateway_dep" value=""/>
                </div>
            </div>
            <div class="widgets_right">
            	<label>To :</label>
                <div class="input_style_01">
                        <input name="gateway_return"  id="gateway_return" autocomplete="off" value="City Name" title="Please enter the return city or 3-letter airport code" type="text" onblur="if (value== '') {value='City Name'}" onfocus="if (value == 'City Name') {value=''}">
                	<div class="autocomplete" id="r_hint1"></div>
		            <input type = "hidden" name="gateway_ret" id="gateway_ret" value=""/>
                </div>
            </div>
            <div class="widgets_left">
            	<label>Departure Date :</label>
                <div class="input_style_02">
                	<input id="depart_date" name="depart_date" value="mm/dd/yyyy" class="dates"  type="text">
                </div>
            </div>
            <div class="widgets_right">
            	<label>Return Date :</label>
                <div class="input_style_02">
                	<input id="return_date" name="return_date" value="mm/dd/yyyy" class="dates"  type="text">
                </div>
            </div>
            <div class="bottom_row">
                <div class="drop_down">
                  <label> Adults</label>
                  <div class="drop_down_field">
                    <select id="adult" name="adult"  class="pax">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                    </select>
                  </div>
                </div>
                <div class="drop_down">
                  <label> Child</label>
                  <div class="drop_down_field">
                    <select id="child" name="child"  class="pax">
                      <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                    </select>
                  </div>
                </div>
                <div class="drop_down">
                  <label> Infant</label>
                  <div class="drop_down_field">
                    <select id="infant" name="infant"  class="pax">
                      <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                    </select>
                  </div>
                </div>
                <input class="search_btn" type="image" src="http://static.flightnetwork.com/aff/CJ/Widgets/300250/images/search_btn.gif" name="" />
              </div>
        </div>
    </div>
</div>
   <input type="hidden" value="USD" id="currency" name="currency"/> 
 <input type="hidden" name="aid" value="10845000"/>
<input type="hidden" name="pid" value="3228116"/>
<input type="hidden" name="url" value="http://www.flightnetwork.com/flights/search?client_ref=CJU&amp;currency=USD"/>
<input type="hidden" name="utm_medium" value="affiliate"/>
<input type="hidden" name="utm_source" value="CJ"/>
</form> 
<!--<script type="text/javascript" src='http://static.flightnetwork.com/aff/CJ/Widgets/js/jquery-1.3.2.min.js'></script> -->
<script type="text/javascript" src="http://static.flightnetwork.com/aff/CJ/Widgets/js/ui.core.js"></script>
<script type="text/javascript" src="http://static.flightnetwork.com/aff/CJ/Widgets/js/ui.datepicker.js"></script>
<script type="text/javascript" src="http://static.flightnetwork.com/aff/CJ/Widgets/js/loaddata.js"></script>
<script type='text/javascript' src='http://static.flightnetwork.com/aff/CJ/Widgets/js/autocomplete/jquery.bgiframe.min.js'></script>
<script type='text/javascript' src='http://static.flightnetwork.com/aff/CJ/Widgets/js/autocomplete/jquery.autocomplete.js'></script>
<script type="text/javascript" src="http://static.flightnetwork.com/aff/CJ/Widgets/300250/js/300250widjq.js"></script>
</div>
<?php } else { ?>
<div style="text-align: center;">
<a href="http://www.jdoqocy.com/click-3228116-10798642" target="_blank">
<img src="http://www.awltovhc.com/image-3228116-10798642" width="120" height="600" alt="Flightnetwork.com -Specializing in Cheap Flights F" border="0"/></a>
</div>
<?php } ?>
</div>

