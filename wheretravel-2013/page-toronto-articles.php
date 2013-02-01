<?php
  get_header(); 
?>
<input type="hidden" id="region_name" value="toronto" />
<?php
  $_GET['article_cat'] = '3';
  include('page-show-articles.php');          
?>