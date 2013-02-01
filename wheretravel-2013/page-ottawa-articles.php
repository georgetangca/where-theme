<?php
  get_header(); 
?>
<input type="hidden" id="region_name" value="ottawa" />
<?php
  $_GET['article_cat'] = '21';
  include('page-show-articles.php');          
?>