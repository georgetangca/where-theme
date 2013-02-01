<?php
  get_header(); 
?>
<input type="hidden" id="region_name" value="whistler" />
<?php
  $_GET['article_cat'] = '742';
  include('page-show-articles.php');          
?>