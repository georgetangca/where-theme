<?php
  get_header(); 
?>
<input type="hidden" id="region_name" value="muskoka" />
<?php
  $_GET['article_cat'] = '5';
  include('page-show-articles.php');          
?>