<?php
/**
 * Template Name: newsletter Page
 *
 * A custom page template for Videos.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 */

get_header(); 

$page = $_GET['page'];

?>
<style type="text/css">
#content2 .container1{ width:630px; padding-top:20px; min-height:600px;}
#content2 p{ padding:4px; margin-bottom: 0px !important;}
#content2 label{ display: inline-block; width: 100px; margin-right:5px; font-family: Georgia,Times New Roman,Times,serif; font-size:16px;}
#content2 input{ color:#000000;background:white;  padding:4px; margin:0px; border:1px solid #9AC0CD; width:180px;}
#content2 #button{ width:120px; cursor:pointer; background:#0097D6; color:#ffffff; font-weight:bold; }
</style>

<div id="content2">
<!-- NL Container Start -->
<script language="JavaScript" src="http://stage.directory.stjosephmedia.com:83/nl/scripts/gen_validatorv31.js" type="text/javascript"></script>
<div class="container1">


<div id="news_l" style="width:630px; margin:0px auto;">
<h2 class="widgettitle">Sign up for our newsletter</h2>

<p>
The WHEREmail newsletter is filled with travel tips and hot picks in top Canadian travel destinations from locally based editors and travel experts-plus trip discounts, Q&As, and contests where you can win prizes including vacations, spa getaways, and travel gear. Direct to your e-mail inbox each month!
</p>
<br/>
<div id='contact_form_errorloc'></div>

<form style=" margin-top: 5px; margin-left:0px;" method="POST" name="contact_form" action="<?php echo htmlentities('http://apps.stjosephmedia.com/newsletters/wh/contestinput.php?contestid=WH9PA5'); ?>">

<input type="hidden" name="cid" value='<?php echo htmlentities($cid) ?>'>
<input type="hidden" name="contestid1" value='2222233'>
 <input type="hidden" name="HTTP_HOST" value='<?php echo htmlentities($HTTP_HOST) ?>'>   
<input type="hidden" name="form_location" value='<?php echo("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); ?>'>


<p>
<label for='firstname'>Name</label>
<input type="text" name="firstname" MAXLENGTH=30 value='<?php echo htmlentities($firstname) ?>'>
</p>
<p>
<label for='email'>Email *</label>
<input type="text" name="email" MAXLENGTH=45 value='<?php echo htmlentities($email) ?>'>
</p>

<p>
<label for='city'>City</label>
<input type="text" name="city" MAXLENGTH=30 value='<?php echo htmlentities($city) ?>'>
</p>
    
<p>
<label for='postalcode'>Postal Code</label>
<input type="text" name="postalcode" MAXLENGTH=7 value='<?php echo htmlentities($postalcode) ?>'>
</p>

<p style="padding-left:150px; padding-top:5px; padding-bottom:5px;">
<input type="submit" id="button" value="Subscribe" name='submit'>
</p>

</form>
<br/>
<p><a target="_blank" href="https://sjm1.createsend.com/reports/viewCampaign.aspx?ID=031CB5686F5587F7">See a sample newsletter</a></p>
<p><a href="/privacy-policy/">View our privacy policy</a></p>
<p class="newsletter">For up-to-the-minute updates, follow Where Canada on <a class="twitter" title="Follow Where Canada on Twitter" href="http://twitter.com/wherecanada">Twitter</a> or via <a href="http://www.where.ca/index.php/feed/">RSS</a></p>

</div>
    <?php
	$slug = "";
	if(isset($_GET['slug'])) {
		$slug = trim($_GET['slug']);
	}
	
	if($slug != "") {
		if($slug == "success") {
			echo("<p style=\"padding:5px;\"><strong>Thanks for the submission!</strong></p>");
            
		}
        
	}
?>
</div>
       <script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml for details
var frmvalidator  = new Validator("contact_form");

//remove the following two lines if you like error message box popups
frmvalidator.EnableOnPageErrorDisplaySingleBox();
frmvalidator.EnableMsgsTogether();
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>
<?php if($slug == "success") { ?>
	<style type="text/css">
    #news_l{ display:none; visibility:hidden; }
    </style>

<?php } else { ?>

	<style type="text/css">
    #news_l { 
	
    display:block; visibility:visible;
	}
    </style>

<?php } ?>

<!-- NL Container End -->


        <!-- #page_container -->
</div>

        <?php include (TEMPLATEPATH . '/sidebar.php'); ?>
    
    
   

        
        
<?php get_footer(); ?>
