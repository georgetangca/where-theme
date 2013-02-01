<?php
/**
 * Template Name: sample newsletter
 *
 * A custom page template for Videos.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 */
get_header(); ?>

<style>
<!--
/* Begin Meyer CSS Reset v1.0 */
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td {margin: 0; padding: 0; border: 0; outline: 0; vertical-align: baseline; background: transparent;}
body {line-height: 1;}
ol, ul {list-style: none;}
blockquote, q {quotes: none;}
blockquote:before, blockquote:after, q:before, q:after {content: &#8217;&#8217;; content: none;}
:focus {outline: 0;}
ins {text-decoration: none;}
del {text-decoration: line-through;}
/* End Meyer CSS Reset v1.0 */

body {font-size: 13px; font-family: Arial,sans-serif; color: #000; text-align: center; line-height: 154%; letter-spacing: 0.02em; -webkit-text-size-adjust:none; background-color:#fff;}

table, td, tr, img {border:none; margin:0; vertical-align:top; text-align:left;}

table#wrapper {margin:13px 0; background-color:#fff; border: 1px solid #888;}
table#primary_content {margin-top:13px; background-color:#fff;}

div#headerlogo {display:block; padding: 0px 0 0 2px;}

span.where {font-size:84px; letter-spacing:-0.06em;}

span.mail {color:#0097d6; font-size:84px; letter-spacing:-0.06em; padding-left:2px; padding-right:8px;}

p.headDate {display:inline; font-size:20px;}

p{ margin-bottom:0px !important;}

/*Headers*/
#header h1 {display:inline !important; font-size:90px !important; letter-spacing:-0.06em !important;}
span.mail {color:#0097d6 !important; font-size:90px !important; letter-spacing:-0.06em !important; padding-left:0; padding-right:8px!important;}
h2 {font-size:20px !important; margin-bottom:2px !important;}
h3 {font-size:17px !important;}
h4 {font-size:13px !important;}
h5 {font-size:13px !important;}

/*Links*/
a:link, a:active, a:visited  {color:#0097d6; text-decoration:none; font-weight:bold;}
a:hover {text-decoration:underline;}
h6 a:link, h6 a:active, h6 a:visited {text-transform:uppercase; font-weight:bold; color:#000;}
#contests p a:link, #contests p a:active, #contests p a:visited, #txt_ads a:link, #txt_ads a:active, #txt_ads a:visited  {color:#000; font-weight:normal; text-transform:none;}
p.img_credit a {color:#999; font-size:10px; font-weight:normal; text-decoration:none;}
p.img_credit a:hover {text-decoration:underline;}

/*Content styles*/
p {padding-bottom: 13px;}

.intro {border-bottom:1px dotted #000; margin-bottom:20px;}

.item {margin-bottom:20px;}
.specials {background:#ddd; padding:13px; margin-bottom:20px;}
.specials p {padding-bottom:8px;}

.twitter {padding:10px; border: 1px solid #0097d6; margin-top:13px; width:288px;}
.block {padding-top:13px; overflow:hidden; height:100px; height: auto!important; min-height:100px;}
.block p {padding-bottom:0;}

#hdr_logo {background:#fff; padding: 5px 300px 5px 0; margin-top:-2px;}

td.articles img {border:4px solid #000; float:left; margin:2px 13px 6px 0;}

td.articles#feature_article p.img_credit {margin-top:10px; color:#0097d6; font-size:10px;}
div p.img_credit {margin-top:10px; color:#999; font-size:10px;}
td.articles img#feature {padding: 0 10px 5px 0;}
td.articles#feature_article {padding-right:20px; width:50%;}
td#big_box {padding-left:20px; width:310px;}

.ad_links {font-size:11px; color:#000; line-height:18px;}
.ad_links p {margin:0 5px 0 0; padding-left:10px;}

#footer_links {text-transform:uppercase;}
#footer_links ul {margin-top:5px;}
#footer_links ul li {list-style-type:none; display:inline; margin-left:36px;}

#more_TL p, #st_joseph p {padding-bottom:10px; font-size:12px;}

/*Ad styles*/
.ad_bkg {background:#ddd; padding:5px; margin-top:5px;}
.promo_bkg {padding:5px; margin-top:5px;}
.btn_ad {padding-right:10px;}
#txt_ads p {padding-bottom:10px; font-size:11px;}
-->
</style>
<div id="content2">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
