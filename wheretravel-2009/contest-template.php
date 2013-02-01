<?php /* Template Name: contest-template
*/ ?>

<?php get_header(); ?>
<?php
    $slug = "";
    $pr = "";	
    if(isset($_GET['slug'])) {
        $slug = $_GET['slug'];
    }

	if(isset($_GET['pr'])) {
        $pr = $_GET['pr'];
    }
?>

<div id="content2">

<iframe src="http://apps.stjosephmedia.com/contest/wh/?slug=<?php echo $slug;?>&pr=<?php echo $pr; ?>" width="620" height="2200" scrolling="no" frameborder="0" onload="scrollTotop()"></iframe>
</div>

 	<div id="sidebar">
        <ul>
        <?php include (TEMPLATEPATH . '/sidebar.php'); ?>
        </ul>
	</div>

<?php get_footer(); ?>

