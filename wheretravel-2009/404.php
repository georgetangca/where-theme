<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

<div class="error404" id="content2">

    <h2>404! <span>File not found.</span></h2>
    <h3>Sorry, we couldn't find the page you were looking for.</h3>
    
    <ol id="error-description">
        <li>We are making upgrades to our site and have changed the paths of some of our links.</li>
        <li>You arrived here via a search engine or another website and the link is old and/or broken.</li>
    </ol>
    
    <img src="http://www.where.ca/images/compass-blue.png"  alt="graphic of a compass" id="compass-graphic" />
    
    <div class="suggestions">
        <h3 class="hilight">Try the following</h3>
        <ol>
            <li><img src="http://www.where.ca/images/list-bluecircle-no1.png" alt="number 1">Type your keyword into the SEARCH BOX at the top-right corner of the site and click GO.</li>
            <li><img src="http://www.where.ca/images/list-bluecircle-no2.png" alt="number 2">Select a DESTINATION from the pull-down menu at the top of this page.</li>
            <li><img src="http://www.where.ca/images/list-bluecircle-no3.png" alt="number 3"><a href="mailto:support@where.ca?subject=404 Error Report" style="color:#000;">Submit an error report</a>.</li>    
        </ol>
    </div>
    
    <div class="further-reading">
        <h3>See what's new</h3>
        <ol class="latest-feed">
            <?php
            //global $post;
            //$curr_datetime = time();
            $myposts = get_posts('numberposts=6');
            foreach($myposts as $post) :
            $post_datetime = get_the_time('U');
            ?> 
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 
            <?php endforeach; ?>                    
        </ol>
        
        <div class="suggestions">    
            <h4><a href="http://www.where.ca/contests/">Contests</a></h4>
            <p>Check out our contest section to see what we’ve got in store for our lucky readers! <a href="http://www.where.ca/contests/">Go to our contest section now</a>.</p>
           
            <h4><a href="http://www.where.ca/newsletter/">Newsletter</a></h4>  
            <p><a href="http://www.where.ca/newsletter/">Sign up</a> for our FREE wheremail newsletter and receive the lastest news and travel deals from across the country.</p>
        </div>
    </div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>