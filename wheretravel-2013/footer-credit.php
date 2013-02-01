<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

</div><!--end #page div-->
<div id="footer">
         <div id="footer-text">
            <div class="container">
                <a href="/about/">About Where</a><a href="/contact/">Contact Where</a><a href="/privacy-policy/">Privacy Statement</a><span id="copyright">&copy; Copyright 2012. All Rights reserved. Reproduction in whole or in part strictly prohibited.<br />WHERE Canada is a registered trademark of <a href="http://www.stjoseph.com">St. Joseph Media Inc.</a></span>
            </div>
         </div>
         <div id="footer-credit">
             <div class="container">
             <?php 
                global $wh_theme_2012,$WH_THEME_CONFIG;
                $region_name  = $wh_theme_2012->get_page_region_name();
                echo $WH_THEME_CONFIG['image_credit_links'][strtolower($region_name)];?> 
             </div>
         </div>   
</div>
    
<?php wp_footer(); ?>
<!-- Begin comScore Tag -->
<script type="text/javascript">
document.write("<img id='img1' height='1' width='1'>");
document.getElementById("img1").src=(("https:" == document.location.protocol) ? "https://" : "http://")+"beacon.securestudies.com/scripts/beacon.dll?C1=2&C2=6035671&C3=&C4="+escape(window.location.href.indexOf("?")>0 ? window.location.href.substring(0, window.location.href.indexOf("?")) : window.location.href)+"&C5=&C6=&C7=" + escape(window.location.href) + "&C8=" + escape(document.title) + "&C9=" + escape(document.referrer) + "&rn=" + Math.floor(Math.random()*99999999);
</script>
<!-- End comScore Tag -->

<!--End div#sticky-footer-IE if using pop-up footer-->
</body>
</html>
