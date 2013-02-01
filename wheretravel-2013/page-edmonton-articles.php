<?php
  get_header(); 
?>
<input type="hidden" id="region_name" value="edmonton" />
<?php
  $_GET['article_cat'] = '20';
  get_template_part( 'page', 'show-articles' );          
?>