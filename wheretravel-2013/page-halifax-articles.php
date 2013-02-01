<?php
  get_header(); 
?>
<input type="hidden" id="region_name" value="halifax" />
<?php
  $_GET['article_cat'] = '17';
  get_template_part( 'page', 'show-articles' );    

?>