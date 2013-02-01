<?php
  get_header(); 
?>
<input type="hidden" id="region_name" value="victoria" />
<?php
  $_GET['article_cat'] = '741';
  include('page-show-articles.php');          
?>