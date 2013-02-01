<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

</div><!--end #page div-->

<div id="footer">
        <div id="footer-content">
            <div class="container">
                <p style="color:#888; padding:0 0 4px 18px;">Do you have great photos from your travels in Canada that you'd like to share with us? Submit them to the <a href="http://www.flickr.com/groups/wherecanada/" title="Where Canada Flickr pool" target="_blank">Where Canada Flickr pool</a> and they'll show up here.</p>
                
                <ul class="flickr-feed">
                    <?php get_flickrRSS();?>
                </ul>    
                
                <div class="col destinations">
                    <h6>Top 12 Travel Destinations</h6>
                    <ul class="stylized col1">
                        <li><span class="number">1</span><a href="/toronto/">Toronto</a></li>      
                        <li><span class="number">2</span><a href="/calgary/">Calgary</a></li>
                        <li><span class="number">3</span><a href="/winnipeg/">Winnipeg</a></li>
                        <li><span class="number">4</span><a href="/halifax/">Halifax</a></li>
                        <li><span class="number">5</span><a href="/edmonton/">Edmonton</a></li>
                        <li><span class="number">6</span><a href="/vancouver/">Vancouver</a></li>
                    </ul>    
                    <ul class="stylized col2">
                        <li><span class="number">7</span><a href="/canadianrockies/">Canadian Rockies</a></li>
                        <li><span class="number">8</span><a href="/ottawa/">Ottawa</a></li>
                        <li><span class="number">9</span><a href="/victoria/">Victoria</a></li> 
                        <li><span class="number">10</span><a href="/muskoka/">Muskoka</a></li>
                        <li><span class="number">11</span><a href="/whistler/">Whistler</a></li>
                        <li><span class="number">12</span><a href="/index.php/yukon/">Alaska & Yukon</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h6>5 Great Things<br /> to Read Right Now</h6>
                    <ol>   
                        <?php
                        global $post;
                        $myposts = get_posts('numberposts=5&category=449'); 
                        foreach($myposts as $post) :
                        $post_datetime = get_the_time('U');
                        ?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php endforeach; ?> 
                    </ol>
                </div>
                <div class="col tools">
                    <h6>Where Tools</h6>
                    <ul>
                        <li><a href="http://www.where.ca/newsletter/">Newsletter sign-up</a></li>
                        <li><a href="http://www.where.ca/index.php/weather-forecast/">Current weather</a></li>
                        <li><a href="http://www.where.ca/magazine/">The magazine</a></li>
                        <li><a href="http://www.where.ca/index.php/contact/">Contact us</a></li>
                        <li><a href="http://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q=canada&sll=56.130366,-106.346771&sspn=176.522854,30.234375&g=canada&ie=UTF8&hq=&hnear=Canada&t=h&ll=59.085739,-91.40625&spn=36.017346,127.265625&z=4" target="_blank">Map of Canada</a></li>
                    </ul>    
                </div>
            </div>
        </div>
            
        <!--googleoff: all --> 	
        <div id="footer-ads">        
            <div class="ads banner wide container">
                
            <a href="http://www.kqzyfj.com/click-3228116-10398717" target="_blank" onmouseover="window.status='http://www.newyorkpass.com';return true;" onmouseout="window.status=' ';return true;">
            <img src="http://www.ftjcfx.com/image-3228116-10398717" width="125" height="125" alt="One Card. One Price. Endless Fun!" border="0"/></a>
             
            <a href="http://www.tkqlhce.com/click-3228116-10660230" target="_blank" onmouseover="window.status='http://www.Medicus.com';return true;" onmouseout="window.status=' ';return true;">
            <img src="http://www.lduhtrp.net/image-3228116-10660230" width="125" height="125" alt="The Medicus Dual Hinged 5 Iron" border="0"/></a>
             
            <a href="http://www.anrdoezrs.net/click-3228116-10515011" target="_blank" onmouseover="window.status='http://www.expedia.com';return true;" onmouseout="window.status=' ';return true;">
            <img src="http://www.tqlkg.com/image-3228116-10515011" width="125" height="125" alt="Expedia.com" border="0"/></a>
             
            <a href="http://www.tkqlhce.com/click-3228116-10563546" target="_blank" onmouseover="window.status='http://www.avis.com';return true;" onmouseout="window.status=' ';return true;">
            <img src="http://www.lduhtrp.net/image-3228116-10563546" width="125" height="125" alt="Click here for the lowest rates at Avis.com" border="0"/></a>
            
            <a href="http://www.dpbolvw.net/click-3228116-10549078" target="_blank" onmouseover="window.status='http://www.planetshoes.com';return true;" onmouseout="window.status=' ';return true;">
            <img src="http://www.ftjcfx.com/image-3228116-10549078" width="127" height="127" alt="Buy Shoes Online Recieve Free Shipping" border="0"/></a>
            
            </div>
        </div>
    <!--googleon: all --> 
    
            <div id="footer-text">
            <div class="container">
                <a href="http://www.where.ca/index.php/about/">About Where</a><a href="http://www.where.ca/index.php/contact/">Contact Where</a><a href="http://www.where.ca/index.php/privacy-policy/">Privacy Statement</a><span id="copyright">&copy; Copyright 2011. All Rights reserved. Reproduction in whole or in part strictly prohibited.<br />WHERE Canada is a registered trademark of <a href="http://www.stjoseph.com">St. Joseph Media Inc.</a></span>
            </div>
        </div>    

<div id="whiteback" style="width:100%;background-color:#fff;">
    <div id="sjm-network-footer">
        <style>
        <!--
            html #sjm-network-footer, html #sjm-network-footer a, html #sjm-network-footer h5, html #sjm-network-footer ul, html #sjm-network-footer ul li, html #sjm-network-footer h6, html #sjm-network-footer p {margin:0; padding:0; text-decoration:none; font-style:none; text-transform:none; border:none; text-align:center; font-family:"Helvetica Neue", sans-serif; line-height:100%; vertical-align:baseline;}
            
            html #sjm-network-footer {width:960px; clear:both; margin:0 auto; padding:20px 0 0; display:table;}
            
            html #sjm-network-footer a {color:#325998;}
            html #sjm-network-footer a:hover {text-decoration:underline;}
            
            html #sjm-network-footer h5 { font-weight:bold; font-size:18px; margin:0 0 20px 0; display:block;} 
            
            html #sjm-network-footer ul {margin:0; padding:0;}
            html #sjm-network-footer ul li {list-style:inside none; float:left; width:180px; height:220px; margin-right:15px;}
            html #sjm-network-footer ul li.last-item {margin:0;}
            
            html #sjm-network-footer ul li h6 a {display:block; text-indent:-9999em; height:87px; background:url(http://media.torontolife.com/graphics/sjm-network-footer-logos.png) 0 -9px no-repeat;}
            
            html #sjm-network-footer ul li p {padding:10px;}
            html #sjm-network-footer ul li p a {font-size:14px; line-height:1.4;}           
        -->
        </style>
        
        <h5>The latest from across the St. Joseph Media network</h5>
        <ul>
            <li>
                <h6><a href="http://www.torontolife.com" target="_blank">Toronto Life</a></h6>
                <p><?php simple_feed_list('http://feeds.feedburner.com/TLTheWire','limit=1'); ?></p>
            </li>
            <li>
                <h6><a href="http://www.torontoist.com" target="_blank" style="background-position:-195px -9px;">Torontoist</a></h6>
                <p><?php simple_feed_list('http://feeds2.feedburner.com/Torontoist','limit=1'); ?></p>
            </li>
            <li>
                <h6><a href="http://www.ottawamagazine.com" target="_blank" style="background-position:-390px -9px;">Ottawa Magazine</a></h6>
                <p><?php simple_feed_list('http://feeds.feedburner.com/OttawaMagazine','limit=1'); ?></p>
            </li>            
            <li>
                <h6><a href="http://www.fashionmagazine.com" target="_blank" style="background-position:-585px -9px;">Fashion Magazine</a></h6>
                <p><?php simple_feed_list('http://feeds.feedburner.com/fashionmagmainfeed','limit=1'); ?></p>
            </li> 
            <li class="last-item">
                <h6><a href="http://www.quillandquire.com" target="_blank" style="background-position:-780px -9px;">Quill &amp; Quire</a></h6>
                <p><?php simple_feed_list('http://feeds.feedburner.com/quillblogrss','limit=1'); ?></p>
            </li>
            
            <li>
                <h6><a href="http://www.canadianfamily.ca" target="_blank" style="background-position:0 -112px;">Canadian Family</a></h6>
                <p><?php simple_feed_list('http://feeds.feedburner.com/Cfmainfeed','limit=1'); ?></p>
            </li>
            <li>
                <h6><a href="http://www.20minutesupperclub.com" target="_blank" style="background-position:-195px -112px;">20 Minute Supper Club</a></h6>
                <p><?php simple_feed_list('http://feeds.feedburner.com/20MSCmainfeed','limit=1'); ?></p>
            </li>
            <li>
                <h6><a href="http://www.where.ca" target="_blank" style="background-position:-390px -112px;">Where Canada</a></h6>
                <p><?php simple_feed_list('http://feeds.feedburner.com/WhereMainFeed','limit=1'); ?></p>
            </li>            
            <li>
                <h6><a href="http://www.weddingbells.ca" target="_blank" style="background-position:-585px -112px;">Weddingbells</a></h6>
                <p><?php simple_feed_list('http://feeds.feedburner.com/Wbmainfeed','limit=1'); ?></p>
            </li> 
            <li class="last-item">
                <h6><a href="http://www.mariagequebec.com" target="_blank" style="background-position:-780px -112px;">Mariage Quebec</a></h6>
                <p><a href="http://www.mariagequebec.com/articles/slideshow/film-noir/">Film noir: Osez le noir et blanc avec les robes et accessoires du moment</a></p>
            </li>            
        </ul>
    
    
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
