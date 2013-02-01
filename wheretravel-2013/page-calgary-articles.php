<?php
  get_header(); 
?>
<input type="hidden" id="region_name" value="calgary" />
<?php
  $_GET['article_cat'] = '16';
  get_template_part( 'page', 'show-articles' );
?>