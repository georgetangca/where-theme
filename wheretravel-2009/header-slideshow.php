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
<!--[if IE]><link rel="stylesheet" href="http://www.where.ca/2009common/where_IE.css" type="text/css" /><![endif]-->

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

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

<script src="http://mint.where.ca/?js" type="text/javascript"></script>

<?php wp_head(); ?>

<style type="text/css">
html { overflow-y:scroll }
html, body { height:100%; margin:0 0 1px; padding:0; }
</style>

</head>
<body class="slideshow">
<div id="page"><!--start #page-->
