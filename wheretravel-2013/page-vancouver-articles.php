<?php
  get_header(); 
?>
<input type="hidden" id="region_name" value="vancouver" />
<?php
  $_GET['article_cat'] = '19';
  include('page-show-articles.php');          
?>