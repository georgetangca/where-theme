<?php
/*
 Template Name: whereTODO
 */

?>
<?php get_header(); ?>

<div id="content2">
	
<link rel="stylesheet" href="http://media.torontolife.com/todo/todo.css" type="text/css" />

<script type="text/javascript" src="http://media.torontolife.com/todo/expand.js"></script>

<script type="text/javascript">

<!--//-->< ![CDATA[//><!--
$(function() {
    // --- first section initially expanded:
	$(".expand").toggler();
    //$(".expand").toggler({initShow: "div.collapse:first"});
});
//-->< !]]>

</script>

<div id="todo_head" style="margin-bottom:40px;">
  <img src="http://media.torontolife.com/img/TOdo/TOdo_header_noSponsor.gif" border="0" usemap="#todo_sponsor" />
  <map name="todo_sponsor" id="todo_sponsor">
    <area shape="rect" coords="469,4,598,25" href="" target="_blank" alt="sponsor link" />
    <area shape="rect" coords="460,46,598,65" href="http://www.torontolife.com/TOdo_sales/" alt="Add Your Event" />
  </map>
</div>
<!--start Reds Bistro-->
<div class="todo_container">
  <img src="http://media.torontolife.com/img/TOdo/reds-banner.jpg" width="600px" height="100px" />
  <p style="margin-top: 5px; margin-bottom: 10px;" class="expand">Details</p>
  <div class="collapse">
    <img class="product" src="http://media.torontolife.com/img/TOdo/reds-260x260-V5.jpg" width="260px" height="260px" />
    <div class="info"><p><strong>Introducing the new REDS WINE TAVERN</strong><br/><br/>
September 2012<br/>JOIN US AT OUR JOB FAIRS<br/>August 7th, 13th, 20th<br/>9am - 11am &amp; 2:30pm - 4:30pm<br/><br/>
WE'RE LOOKING FOR<br/>
Servers, Hosts, Bartenders, Server Assistants, Line and Prep Cooks<br/>
Be a part of the new Reds Wine Tavern team, and redefine Toronto's diningexperience.<br/><br/>
<strong><a style="color:#000;" href="http://www.redswinetavern.com" target="_blank">Click here for more info &raquo;</a></strong></p>
    </div>
    <img src="http://media.torontolife.com/hotdeals/images/underline.gif" width="600px" height="20px" />
  </div>
</div>
<!--end Reds Bistro-->
<!--start canadian stage-->
<div class="todo_container">
  <img src="http://media.torontolife.com/img/TOdo/Toronto_Life_Expanding Banner1.jpg" width="600px" height="100px" />
  <p style="margin-top: 5px; margin-bottom: 10px;" class="expand">Details</p>
  <div class="collapse">
    <img class="product" src="http://media.torontolife.com/img/TOdo/Toronto_Life_Expanding Banner2.jpg" width="260px" height="260px" />
    <div class="info"><p><strong>See Shakespeare in High Park</strong><br/>
"3.5 out of 4 stars" <em>– The Globe and Mail</em><br/>
"summer magic" <em>– NOW Magazine</em><br/><br/>
Enjoy A Midsummer Night's Dream performed under the stars in the High Park Amphitheatre. All performances are Pay-What-You-Can and picnic-friendly!<br/><br/>
Jun 26 – Sep 2, 2012<br/>
Tues – Sun at 8pm<br/>
Gate opens at 6pm
<br/><br/>
<strong><a style="color:#000;" href="https://www.canadianstage.com/Online/default.asp?doWork::WScontent::load
Article=Load&BOparam::WScontent::loadArticle::article_id=BF12C351-C313-4
108-84E4-2D29FED9864D&sessionlanguage=" target="_blank">Click here for more info &raquo;</a></strong></p>
    </div>
    <img src="http://media.torontolife.com/hotdeals/images/underline.gif" width="600px" height="20px" />
  </div>
</div>
<!--end canadian stage-->
<!--start Shaw Festival-->
<div class="todo_container">
  <img src="http://media.torontolife.com/img/TOdo/shaw600x100v2.jpg" width="600px" height="100px" />
  <p style="margin-top: 5px; margin-bottom: 10px;" class="expand">Details</p>
  <div class="collapse">
    <img class="product" src="http://media.torontolife.com/img/TOdo/shaw260x260.jpg" width="260px" height="260px" />
    <div class="info"><p><strong>Great theatre in the heart of Niagara wine country.</strong><br/>
JACKIE MAXWELL, ARTISTIC DIRECTOR<br/><br/>
April 10 – October 28 ǀ Niagara-on-the-Lake<br/>
11 plays on four stages including the Tony Award-winning musical RAGTIME, the hit romantic comedy HIS GIRL FRIDAY, Noël Coward’s hilarious PRESENT LAUGHTER and Bernard Shaw’s <em>The Millionairess</em>.<br/>
Overnight packages available.
<br/><br/>
Julia Course as Daphne Stillington and Steven Sutcliffe as Garry Essendine in <em>Present Laughter</em><br/>
Nicole Underhay as Hildy Johnson and Benedict Campbell as Walter Burns in <em>His Girl Friday</em><br/>
<strong>David Cooper Photography<strong/><br/><br/>
<strong><a style="color:#000;" href="http://www.shawfest.com/" target="_blank">Click here for more info &raquo;</a></strong></p>
    </div>
    <img src="http://media.torontolife.com/hotdeals/images/underline.gif" width="600px" height="20px" />
  </div>
</div>
<!--end Shaw Festival-->
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>