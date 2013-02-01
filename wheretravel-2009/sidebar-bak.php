<div id="sidebar">

<!---
<script language=JavaScript>

OAS_AD('x05');
//
</script>
--->

<div id="bigbox-ad">
<img src="http://www.where.ca/travel/wp-content/themes/wheretravel-2009/images/advertisement-text.gif" class="ad-text"/>
<script LANGUAGE="JavaScript1.1" type="text/javascript">
<!--
document.write('<scr'+'ipt LANGUAGE="JavaScript1.1" type="text/javascript" SRC="http://oascentral.where.ca/RealMedia/ads/adstream_jx.ads/'+WHERE_AD_PAGE+'/1'+OAS_rns+'@'+WHERE_AD_POS+'!x05' + WHERE_AD_QUERY + '"></scr'+'ipt>');
// -->
</script>
</div>

<div class="select-destination">
    <h4><img src="http://www.where.ca/images/arrow-wht.png" alt="arrow graphic"> Stay, Dine, Do</h4>
    <p>Find a hotel, restaurant or attraction.</p>
    <ul>
    <li class="drop-down-indicator">Choose your destination <img src="http://www.where.ca/images/b_arrowDownBlack.png" alt="drop-down indicator">
        <ul class="drop-down">
            <li><a href="/calgary/jump_guide.cfm">Calgary</a></li>
            <li><a href="/canadianrockies/jump_guide.cfm">Canadian Rockies</a></li>
            <li><a href="/edmonton/jump_guide.cfm">Edmonton</a></li>
            <li><a href="/halifax/jump_guide.cfm">Halifax</a></li>
            <li><a href="/muskoka/jump_guide.cfm">Muskoka</a></li>
            <li><a href="/ottawa/jump_guide.cfm">Ottawa</a></li>
            <li><a href="/toronto/jump_guide.cfm">Toronto</a></li>
            <li><a href="/vancouver/jump_guide.cfm">Vancouver</a></li>
            <li><a href="/victoria/jump_guide.cfm">Victoria</a></li>
            <li><a href="/whistler/jump_guide.cfm">Whistler</a></li>
            <li><a href="/winnipeg/jump_guide.cfm">Winnipeg</a>
            <li class="last-item"><a href="/alaskayukon/jump_guide.cfm">Alaska &amp; Yukon</a></li>   
        </ul>
    </li>  
    </ul>
</div>


<div id="current-mag">
<h4>Current contests</h4>

        <ul>
            <?php simple_feed_list('http://www.where.ca/contests/contests_rss.cfm','limit=20'); ?>
        </ul>	

</div>

<div id="facebook-box" style="margin:22px 0;">
<iframe src="http://www.facebook.com/plugins/activity.php?site=where.ca&amp;width=300&amp;height=300&amp;header=false&amp;colorscheme=light&amp;font&amp;border_color&amp;recommendations=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:300px;" allowTransparency="true"></iframe>
</div>

<div class="divider">
<img class="ad-text" src="http://media.torontolife.com/img/special-messages.gif" />


<a href="http://www.where.ca/index.php/canada/2010/12/14/best-new-restaurants-of-2010/">
    <img src="http://www.where.ca/images/best-restos-2010-btn2.jpg" alt="Canada's Best Restaurants of 2010. Click to read the list">
</a>

<!--The Toronto Life ad should only appear on categories 3,4,5,21,3968 -->
<!--The Vancouver Tourism ad should only appear on categories 974,2987,19,741,742 -->

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

<!---
<script language=JavaScript>

OAS_AD('x13');
//
</script>
--->

<div class="divider">
<img class="ad-text" src="http://www.where.ca/travel/wp-content/themes/wheretravel-2009/images/advertisement-text.gif" /><script LANGUAGE="JavaScript1.1" type="text/javascript">
<!--
document.write('<scr'+'ipt LANGUAGE="JavaScript1.1" type="text/javascript" SRC="http://oascentral.where.ca/RealMedia/ads/adstream_jx.ads/'+WHERE_AD_PAGE+'/1'+OAS_rns+'@'+WHERE_AD_POS+'!x13' + WHERE_AD_QUERY +  '"></scr'+'ipt>');
// -->
</script>
</div>

<div id="recentcomments" class="dsq-widget" style="margin:22px 0;line-height:17px;">
<h4 class="dsq-widget-title">Recent Comments</h4>
<script type="text/javascript" src="http://wherecanada.disqus.com/recent_comments_widget.js?num_items=5&hide_avatars=1&avatar_size=32&excerpt_length=100"></script>
</div>

</div>

