<?php
  get_header(); 
?>
<input type="hidden" id="region_name" value="canadianrockies" />

<?php
  $_GET['article_cat'] = '6040';
  include('page-show-articles.php');          
?>