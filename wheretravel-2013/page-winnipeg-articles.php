<?php
  get_header(); 
?>
<input type="hidden" id="region_name" value="winnipeg" />
<?php
  $_GET['article_cat'] = '18';
  include('page-show-articles.php');          
?>