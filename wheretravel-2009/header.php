<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<meta content="width=1024px;" name="viewport">
<title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="/2009common/where_2010.css" type="text/css" />

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script><!--sticky footer-->

<!-- Generated by OpenX 2.8.8 -->
<script type='text/javascript' src='http://ads.stjosephmedia.com/www/delivery/spcjs.php?id=3&amp;block=1'></script>

<!-- DFP ad tags -->
<?php
$section = 'section';
$section = get_the_category();
$section = $section[0]->cat_name;
$tag = 'tag';
$posttags = get_the_tags();
$count=0;
	if ($posttags) { foreach($posttags as $tag0) { $count++; if (1 == $count) { $tag = $tag0->name;}}}
$slug = 'slug';
$slug = $post->post_name;
$ishome='no';
	if ( is_home() ) { $ishome = 'yes'; $slug = 'slug'; $tag = 'tag'; $section = 'section';}
$issingle='no';
	if ( is_single() ) { $issingle = 'yes';}
	if ( is_page() ) { $issingle = 'yes'; $section = 'section';}
?>

<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>

<script type='text/javascript'>
googletag.cmd.push(function() {
googletag.pubads().setTargeting('section-WH', '<?php echo sanitize_title_with_dashes($section); ?>');
googletag.pubads().setTargeting('tag', '<?php echo sanitize_title_with_dashes($tag); ?>');
googletag.pubads().setTargeting('slug', '<?php echo $slug; ?>');
googletag.pubads().setTargeting('ishome', '<?php echo $ishome; ?>');
googletag.pubads().setTargeting('issingle', '<?php echo $issingle; ?>');
googletag.defineSlot('/9527589/WH_BB_Lower', [300, 250], 'div-gpt-ad-1344539030881-0').addService(googletag.pubads());
googletag.defineSlot('/9527589/WH_BB_Upper', [300, 250], 'div-gpt-ad-1344539030881-1').addService(googletag.pubads());
googletag.defineSlot('/9527589/WH_Leaderboard', [728, 90], 'div-gpt-ad-1344539030881-2').addService(googletag.pubads());
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>

<script type="text/javascript">

var today=new Date();

function show_diff(yr,mon,day){
    var target=new Date(yr,mon,day);
    if (today.getTime()<=target.getTime()) {
        //Set 1 day in milliseconds
        var one_day=1000*60*60*24;
        //Calculate difference btw the two dates, and convert to days
        document.write(Math.ceil((target.getTime()-today.getTime())/(one_day))+
        " day");
    } else {
        //do something else
    }
}
</script>

<!--Start navigation drop-down fix for IE-->	
<script type="text/javascript"><!--//--><![CDATA[//><!--
sfHover = function() {
	var sfEls = document.getElementById("main-nav").getElementsByTagName("LI");
	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);
//--><!]]></script>
<!--End navigation drop-down fix for IE-->

<script src="http://mint.where.ca/?js" type="text/javascript"></script>

<?php wp_head(); ?>

</head>
<!--[if IE 7]>
   <body class="IE7">
<![endif]-->
<!--[if gt IE 7]>
   <body class="IE">
<![endif]-->
<!--[if !IE]>>
   <body>
<![endif]-->

<!--Start div#sticky-footer-IE if using pop-up footer-->

<div id="top-header">
    <div class="container">
        <div class="leaderboard">
            <img src="http://www.where.ca/images/advertisement-text-horiz.gif"  alt="The item beside this text is an advertisement" class="ad-indicator-horiz">
			<!-- WH_Leaderboard -->
			<div id='div-gpt-ad-1344539030881-2' style="width:728px;float:right;">
			<script type='text/javascript'>
			googletag.cmd.push(function() { googletag.display('div-gpt-ad-1344539030881-2'); });
			</script>
			</div>
        </div>
                  
        <?php include 'weather.php'; ?>
            
    </div>
</div>

<div id="header">
    <div class="container">       
        <h1><a href="/">Where</a></h1>
        
        <ul id="main-nav">
            <li class="drop-down-indicator"><a href="/">DESTINATIONS</a>
                <ul class="drop-down region">
					<li><a href="/the-west/alberta/calgary/">Calgary &raquo;</a></li>
					<li><a href="/canadianrockies/">Canadian Rockies &raquo;</a></li>
					<li><a href="/the-west/alberta/edmonton/">Edmonton &raquo;</a></li>
					<li><a href="/atlantic-canada/nova-scotia/halifax/">Halifax &raquo;</a></li>
					<li><a href="/central-canada/ontario/muskoka/">Muskoka &raquo;</a></li>
					<li><a href="/central-canada/ontario/ottawa/">Ottawa &raquo;</a></li>
					<li><a href="/central-canada/ontario/toronto/">Toronto &raquo;</a></li>
					<li><a href="/west-coast/british-columbia/vancouver/">Vancouver &raquo;</a></li>
					<li><a href="/west-coast/british-columbia/victoria/">Victoria &raquo;</a></li>
					<li><a href="/west-coast/british-columbia/whistler/">Whistler &raquo;</a></li>
					<li class="last-item"><a href="/the-prairies/manitoba/winnipeg/">Winnipeg &raquo;</a></li>   
                </ul>
            </li>
            <li><a href="/index.php/category/blog/">BLOG</a> //</li>
            <li><a href="/magazine/">MAGAZINE</a> //</li>
            <li><a href="/newsletter/">NEWSLETTER</a> //</li>
            <li><a href="/contests/">CONTESTS</a></li>
        </ul>

        <div id="social">
            <a class="fb-icon" href="http://www.facebook.com/wherecanada">Facebook</a>        
            <a class="twitter-icon" href="/index.php/where-twitter">Twitter</a>
            <a class="last-item rss-icon" href="/index.php/where-rss-feeds/">RSS</a>
        </div>
        
        <div id="search">
            <form action="<?php bloginfo('home'); ?>" method="get" name="form1" id="searchForm">
                <input class="text" name="s" onfocus="if(this.value=='SEARCH')this.value=''" onblur="if(this.value=='')this.value='SEARCH'" value="SEARCH" id="search_box" placeholder="SEARCH" type="search">
                <input type="submit" id="searchsubmit" name="Search" value="">
                <input id="dup_filter" type="hidden" name="filter" value="1"/>
            </form>
        </div>

    </div><!--end #header .container-->
</div><!--end #header-->

<div id="page"><!--start #page-->
