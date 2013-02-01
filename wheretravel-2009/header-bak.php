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

<?php
global $post;

$categories = get_the_category($post->ID);
$category_id = $categories[0]->cat_name;
$category_id_nice = $categories[0]->category_nicename;

//var_dump($categories);
//echo('<!-- $category_id = '.$category_id.' -->');
//echo('<!-- $category_id_nice = '.$category_id_nice.' -->');

//var_dump($post);

//get page category
$i_cat = single_cat_title("", false);
//echo 'i_cat length:'.strlen(trim($i_cat));

//manage posts category
if(strlen(trim($i_cat))==0){
	$i_cat = $category_id;
	//echo ' I am out:'.$i_cat;
}
// manage first page category (generally gets category of latest post)
$pageURL = $_SERVER["REQUEST_URI"];
$pageURLsub = substr($pageURL,-10); //get last 10 chars to check if it index.php
if(strlen(trim($pageURL ))<3 || strpos($pageURLsub, 'index.php')!==false){
	$i_cat = 'canada';
	//echo ' I am the first page:'.$i_cat;
}

$i_cat = strtolower(str_replace(' ','-',trim($i_cat)));

//$i_cat = strtolower($i_cat);
//$i_cat = str_replace(' ','-',trim($i_cat));

//alaska-&amp;-yukon
if(strpos($i_cat,'&amp')!==false){
  $i_cat = $category_id_nice;
  //echo('<!-- Found &amp = '.$i_cat.' -->');
}

?>

<!-- OAS SETUP begin -->
<script language="JavaScript" type="text/javascript">
<!--
var WHERE_AD_SITE = 'where.ca/';
var WHERE_AD_ZONE = '<?php echo(''.$i_cat.'');?>';
var WHERE_AD_PAGE = 'where.ca/<?php echo(''.$i_cat.'');?>';
var WHERE_AD_QUERY = '';
var WHERE_AD_POS = 'x02,x03,x05,x13';
var OAS_rns = new String (Math.random()).substring(2, 11);

var URL_PATH = window.location.pathname;
    
    if(URL_PATH=='/index.php/todo/') 
    {
    WHERE_AD_QUERY = '?page=/to-do-list'; 
    }



//-->
</script>
<!-- OAS SETUP end -->


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

<!-- New Google Code -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-300475-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
  })();

</script>
<!-- New Google Code End-->

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
            <!--img src="http://www.where.ca/images/advertisement-text-horiz.gif"  alt="The item beside this text is an advertisement" class="ad-indicator-horiz"-->
            <!---
            <script language=JavaScript>
            OAS_AD('x03');
            </script>
            --->
            <script LANGUAGE="JavaScript1.1" type="text/javascript">
            <!--
            document.write('<scr'+'ipt LANGUAGE="JavaScript1.1" type="text/javascript" SRC="http://oascentral.where.ca/RealMedia/ads/adstream_jx.ads/'+WHERE_AD_PAGE+'/1'+OAS_rns+'@'+WHERE_AD_POS+'!x03' + WHERE_AD_QUERY + '"></scr'+'ipt>');
            // -->
            </script>
        </div>
    
                  
        <?php include 'weather.php'; ?>

            
    </div>
</div>

<div id="header">
    <div class="container">       
        <h1><a href="/">Where</a></h1>
        <img src="/images/where_logo75years.png" alt="Celebrating 75 years" id="yrs75">
        
        <ul id="main-nav">
            <li class="drop-down-indicator"><a href="/">DESTINATIONS</a>
                <ul class="drop-down region">
                    <li><a href="/index.php/the-north/">The North &raquo;</a>
                        <ul class="drop-down province">
                            <li><a href="/index.php/northwest-territories/">Northwest Territories</a></li>  
                            <li><a href="/index.php/yukon/">Alaska &amp; Yukon</a></li> 
                            <li class="last-item"><a href="/index.php/nunavut/">Nunavut</a></li> 
                        </ul> 
                    </li>    
                    <li><a href="/index.php/west-coast/">West Coast &raquo;</a>
                        <ul class="drop-down province">                           
                           <li class="last-item"><a href="/index.php/british-columbia/">British Columbia &raquo;</a>
                                <ul class="drop-down city">
                                    <li><a href="/index.php/vancouver/">Vancouver</a></li>  
                                    <li><a href="/index.php/victoria/">Victoria</a></li>
                                    <li class="last-item"><a href="/index.php/whistler/">Whistler</a></li>
                                </ul>
                            </li>
                        </ul>    
                    </li>                      
                    <li><a href="/index.php/the-west/">The West &raquo;</a>
                        <ul class="drop-down province">  
                            <li><a href="/index.php/canadianrockies/">Canadian Rockies &raquo;</a>
                                <ul class="drop-down city">
                                    <li><a href="/index.php/category/the-west/canadianrockies/banff/">Banff, Canmore &amp; Area</a></li>  
                                    <li class="last-item"><a href="/index.php/category/the-west/canadianrockies/jasper/">Jasper &amp; Area</a></li>
                                </ul>  
                            </li>  
                            <li class="last-item"><a href="/index.php/alberta/">Alberta &raquo;</a>
                                <ul class="drop-down city">
                                    <li><a href="/index.php/calgary/">Calgary</a></li>  
                                    <li class="last-item"><a href="/index.php/edmonton/">Edmonton</a></li>
                                </ul>  
                            </li>                             
                        </ul> 
                    </li>    
                    <li><a href="/index.php/the-prairies/">The Prairies &raquo;</a>
                        <ul class="drop-down province">
                            <li><a href="/index.php/saskatchewan/">Saskatchewan</a></li> 
                            <li class="last-item"><a href="/index.php/manitoba/">Manitoba &raquo;</a>
                                <ul class="drop-down city">
                                    <li class="last-item"><a href="/index.php/winnipeg/">Winnipeg</a></li>  
                                </ul>  
                            </li>                         
                        </ul>
                    </li>    
                    <li><a href="/index.php/central-canada/">Central Canada &raquo;</a> 
                        <ul class="drop-down province">
                            <li><a href="/index.php/ontario/">Ontario &raquo;</a>
                                <ul class="drop-down city">
                                    <li><a href="/index.php/muskoka/">Muskoka/Parry Sound</a></li>
                                    <li><a href="/index.php/ottawa/">Ottawa</a></li>
                                    <li class="last-item"><a href="/index.php/toronto/">Toronto</a></li>                                
                                </ul>    
                            </li>    
                            <li class="last-item"><a href="/index.php/quebec/">Quebec</a></li>                        
                        </ul> 
                    </li>    
                    <li class="last-item"><a href="/index.php/atlantic-canada/">Atlantic Canada &raquo;</a>   
                        <ul class="drop-down province">
                            <li><a href="/index.php/newfoundland/">Newfoundland and Labrador</a></li>
                            <li><a href="/index.php/nova-scotia/">Nova Scotia &raquo;</a>
                                <ul class="drop-down city">
                                    <li class="last-item"><a href="/index.php/halifax/">Halifax</a></li>                                
                                </ul>       
                            </li>    
                            <li><a href="/index.php/new-brunswick/">New Brunswick</a></li>
                            <li class="last-item"><a href="/index.php/prince-edward-island/">Prince Edward Island</a></li>                               
                        </ul>
                    </li>    
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
            <form action="http://www.where.ca/search/search_results.cfm" method="post" name="form1" id="searchForm">
                <input class="text" name="search_str" onfocus="if(this.value=='Search travel in Canada')this.value=''" onblur="if(this.value=='')this.value='Search travel in Canada'" value="Search travel in Canada" id="search_box" placeholder="Search travel in Canada" type="search">
                <input type="image" src="http://www.where.ca/images/b_arrowNextYellow.png" id="searchsubmit" name="Search" value="GO">
                <input id="dup_filter" type="hidden" name="filter" value="1"/>
            </form>
        </div>

    </div><!--end #header .container-->
</div><!--end #header-->

<div id="page"><!--start #page-->

