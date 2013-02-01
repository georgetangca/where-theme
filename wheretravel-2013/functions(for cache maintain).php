<?php
/**
 * @package WordPress new
 */
include( get_stylesheet_directory()."/theme-config.php");
include( get_stylesheet_directory()."/where-theme-2012.class.php");
include( get_stylesheet_directory()."/where-region-theme.class.php");

global $wh_theme_2012;
$wh_theme_2012 =  new where_theme_2012();


//code here for cron job to clean the listing cache file 
function add_my_new_sched($sched) {
    $sched['my_new'] = array('interval' => 7*24*60*60, 'display' => 'Once per week');
    return $sched;
}

add_filter('cron_schedules', 'add_my_new_sched');
wp_schedule_event(time(),'my_new','our_new_cron_hook');
add_action('our_new_cron_hook','execute_cron_jobs');

if(!defined('LISTING_CACHE_FOLDER')){
   define('LISTING_CACHE_FOLDER',ABSPATH.'listings/cache/');     
}

if(!defined('LISTING_CACHE_BACKUP_FOLDER')){
   define('LISTING_CACHE_BACKUP_FOLDER',ABSPATH.'listings/cache/backup'); 
    
}

function execute_cron_jobs(){
    unlink(LISTING_CACHE_BACKUP_FOLDER.'/*'); //remove the old backup file 
    rename(LISTING_CACHE_FOLDER.'/*', LISTING_CACHE_BACKUP_FOLDER.'/'); //move the new cache file to the backup folder       
}

?>