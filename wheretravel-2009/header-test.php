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

<link rel="stylesheet" href="http://www.where.ca/2009common/where_2010.css" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script><!--sticky footer-->

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>

<script language="JavaScript" type="text/javascript">
<!--
var WHERE_AD_PAGE = 'where.ca/travel';
var WHERE_AD_POS = 'x02,x03,x05,x13';
var OAS_rns = new String (Math.random()).substring(2, 11);
//-->
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

</head>
<body>
<!--Start div#sticky-footer-IE if using pop-up footer-->



<div id="page">

<div class="leaderboard">
<img src="http://www.where.ca/travel/wp-content/themes/wheretravel-2009/images/advertisement-text.gif" class="ad-text"/>
<div style="width:728px; margin: 0 auto;">
	<!---
	<script language=JavaScript>
	OAS_AD('x03');
	</script>
	--->
	
	<script LANGUAGE="JavaScript1.1" type="text/javascript">
	<!--
	document.write('<scr'+'ipt LANGUAGE="JavaScript1.1" type="text/javascript" SRC="http://oascentral.where.ca/RealMedia/ads/adstream_jx.ads/'+WHERE_AD_PAGE+'/1'+OAS_rns+'@'+WHERE_AD_POS+'!x03"></scr'+'ipt>');
	// -->
	</script>
</div>
</div>

<div id="header">
    <div id="social"><p><em>TEST HEADER</em></p><a href="http://twitter.com/wherecanada/" target="_blank"><img src="http://www.where.ca/2009common/twitter.gif" alt="Follow Where on Twitter" /></a><a href="http://www.where.ca/travel/index.php/feed/" target="_blank"><img src="http://www.where.ca/2009common/rss.gif" alt="Follow Where through RSS" /></a></div>
    <ul id="main-nav">
        <li class="drop-down-indicator"><a href="http://www.where.ca/">DESTINATIONS</a>
            <ul class="drop-down region">
                <li><a href="/index.php/the-north/">The North</a>
                    <ul class="drop-down province">
                        <li><a href="/index.php/northwest-territories/">Northwest Territories</a></li>  
                        <li><a href="/index.php/yukon/">The Yukon</a></li> 
                        <li class="last-item"><a href="/index.php/nunavut/">Nunavut</a></li> 
                    </ul> 
                </li>    
                <li><a href="/index.php/the-west/">The West</a>
                    <ul class="drop-down province">
                        <li><a href="/index.php/british-columbia/">British Columbia</a>
                            <ul class="drop-down city">
                                <li><a href="/vancouver/">Vancouver</a></li>  
                                <li><a href="/victoria/">Victoria</a></li>
                                <li class="last-item"><a href="/whistler/">Whistler</a></li>
                            </ul>
                        </li>    
                        <li class="last-item"><a href="/canadianrockies/">The Canadian Rockies</a>
                            <ul class="drop-down city">
                                <li><a href="/index.php/category/the-west/canadianrockies/banff/">Banff</a></li>  
                                <li class="last-item"><a href="/index.php/category/the-west/canadianrockies/jasper/">Jasper</a></li>
                            </ul>  
                        </li>    
                    </ul> 
                </li>    
                <li><a href="/index.php/the-prairies/">The Prairies</a>
                    <ul class="drop-down province">
                        <li><a href="/index.php/alberta/">Alberta</a>
                            <ul class="drop-down city">
                                <li><a href="/calgary/">Calgary</a></li>  
                                <li class="last-item"><a href="/edmonton/">Edmonton</a></li>
                            </ul>  
                        </li> 
                        <li><a href="/index.php/saskatchewan/">Saskatchewan</a></li> 
                        <li class="last-item"><a href="/index.php/manitoba/">Manitoba</a>
                            <ul class="drop-down city">
                                <li class="last-item"><a href="/winnipeg/">Winnipeg</a></li>  
                            </ul>  
                        </li>                         
                    </ul>
                </li>    
                <li><a href="/index.php/central-canada/">Central Canada</a> 
                    <ul class="drop-down province">
                        <li><a href="/index.php/ontario/">Ontario</a>
                            <ul class="drop-down city">
                                <li><a href="/mississauga/">Mississauga</a></li>  
                                <li><a href="/muskoka/">Muskoka</a></li>
                                <li><a href="/ottawa/">Ottawa</a></li>
                                <li class="last-item"><a href="/toronto/">Toronto</a></li>                                
                            </ul>    
                        </li>    
                        <li class="last-item"><a href="/index.php/quebec/">Quebec</a></li>                        
                    </ul> 
                </li>    
                <li class="last-item"><a href="/index.php/atlantic-canada/">Atlantic Canada</a>   
                    <ul class="drop-down province">
                        <li><a href="/index.php/newfoundland/">Newfoundland and Labrador</a></li>
                        <li><a href="/index.php/nova-scotia/">Nova Scotia</a>
                            <ul class="drop-down city">
                                <li class="last-item"><a href="/halifax/">Halifax</a></li>                                
                            </ul>       
                        </li>    
                        <li><a href="/index.php/new-brunswick/">New Brunswick</a></li>
                        <li class="last-item"><a href="/index.php/prince-edward-island/">Prince Edward Island</a></li>                               
                    </ul>
                </li>    
            </ul>
        </li>
        <li><a href="http://www.where.ca/travel/">INSPIRATION</a> // </li>
        <li><a href="http://www.where.ca/magazine/">MAGAZINE</a> // </li>
        <li><a href="http://www.where.ca/newsletter/">NEWSLETTER</a> // </li>
        <li><a href="http://www.where.ca/contests/">CONTESTS</a></li>
    </ul>
    <div id="logo">
    <a href="http://www.where.ca/"><img src="http://www.where.ca/2009common/wherelogo.gif" alt="where logo" /></a>
    </div>
</div>

<div id="search">
    <form action="http://www.where.ca/search/search_results.cfm" method="post" name="form1" id="searchForm">
    <input class="text" name="search_str" onfocus="if(this.value=='Search travel in Canada')this.value=''" onblur="if(this.value=='')this.value='Search all of Where'" value="Search travel in Canada" id="search_box" placeholder="Where Search" autosave="Where" results="5" type="search">
    <input name="Search" value="GO" type="submit" id="searchsubmit">
    <input id="dup_filter" type="hidden" name="filter" value="1"/>
    </form>
</div>


            <!--ul class="drop-down level3">
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
                <li><a href="/winnipeg/">Winnipeg</a>
                <li class="last-item"><a href="/alaskayukon/">Alaska &amp; Yukon</a></li>            
            </ul-->