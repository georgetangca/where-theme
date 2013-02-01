/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function($) {
    
   function get_province_name(crn){
        $province = '';
        if (crn != '' && crn != null) {
          $.each(region_province_slug_mapping, function (key, value) { //look for selected sort option in list
                if (key == crn) {
                   $province = value;
                   return 0;
                }
           });
        }
        return $province;
   }
   
   //for header start journey
       var crn= null;
       if ($("#region_name").length > 0){
          crn=$("#region_name").val().toLowerCase();
          var crn_name = crn;
          if(crn == 'canadian rockies'){
             crn = 'canadianrockies'; //very specially for canadian rockies , for  
          }
      }
   
   
   
    if ($(".search_title_city").length>0) {
        if (crn != '' && crn != null) { //already set the region name
            $("#page_region_city_name").attr('src', theme_url_home.url+'/images/'+crn+'.png');
            
            $("#page_region_city_name").css('cursor','pointer').click(function(){ //click the map
             
           /*  $(".search_title_city").text(crn_name).css('cursor','pointer').click(function(){*/
                $province =  get_province_name(crn); 
                var $province_url = '/'+$province; 
                if($province != '') {
                  $province_url +='/'; 
                }
                var url = $province_url+crn+'/';
                window.location.href= url ;
             });
             if(crn == 'canadianrockies') {
                 $("#headerimge_area").addClass('rockies_padding_more');
             }
                    
             $("#headerimge_area").show();
             
        } else if ($("#blog_indicator").length>0) { //belong to web blog
            $(".search_title_city").text('whereblog').css('cursor','pointer').click(function(){
                window.location.href='/blog/';
             });
        } else if ($("#deal_indicator").length>0) { //belong to web blog
            $(".search_title_city").text('deals').css('cursor','pointer').click(function(){
                window.location.href='/deals/';
             });
        } else {
            $("#page_contents_header_div").remove();
        }
    } 
    
    
    
    if (crn != '' && crn != null) {
       $("#region-"+crn).addClass('current');
    }

 //for home page left rail BEGIN
    
  if ($("#start_journey").length>0) {
  $("#region_name").change(function(){
       crn=$(this).val();
       $("#main-nav li.region-indicator span").removeClass('current');
       if (crn != '' && crn != null) {
        $("#region-"+crn).addClass('current');
       }
   });

  $("#start_journey ul li img").click(function(){
       if (crn == '' || crn == null) { //here need to change as header below 
           alert('Please choose your destination.');
       } else {
           var url='';
           if ($(this).attr("alt")=='tofrom') {
            $.each(region_to_from_link_mapping, function (key, value) { //look for selected sort option in list
                if (key == crn) {
                   url = '/'+value+'/';
                   return 0;
                }
            });
               
           }else if ($(this).attr("alt")=='transport') {
            $.each(region_transport_link_mapping, function (key, value) { //look for selected sort option in list
                if (key == crn) {
                   url = '/'+value+'/';
                   return 0;
                }
            });
           } else {
               $province =  get_province_name(crn); 
               var $province_url = '/'+$province; 
               if($province != '') {
                  $province_url +='/'; 
               }
               
               url= $province_url+crn+'/#'+$(this).attr("alt");
           }
           window.location.href=url;
       }
   });
  }

 /*for process page header navigation bar */ 
  if ($("#page_contents_header").length>0) {
  $("#page_contents_header ul li img").click(function(){
       if (crn == '' || crn == null) {
           alert('Please choose your destination.');
       } else {
           var url='';
           if ($(this).attr("alt")=='tofrom') {
             $.each(region_to_from_link_mapping, function (key, value) { //look for selected sort option in list
                if (key == crn) {
                   url = '/'+value+'/';
                   return 0;
                }
            });
               
           }else if ($(this).attr("alt")=='transport') {
             $.each(region_transport_link_mapping, function (key, value) { //look for selected sort option in list
                if (key == crn) {
                   url = '/'+value+'/';
                   return 0;
                }
            });
           } else {
               var $province =  get_province_name(crn);
               var $province_url = '/'+$province; 
               if($province != '') {
                  $province_url +='/'; 
               } 
               
               url = $province_url+crn+'/#'+$(this).attr("alt");
               
               
               if($(this).attr("alt")=='map'){
                  $('#map').css("display","block");
               }  
            
           }
        
         window.location.href= url;
        
        
       }
    });   
  }
  
  //End of home page
 
})(jQuery);


