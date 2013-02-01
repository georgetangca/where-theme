/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery(document).ready(function() {
    
   function get_province_name(crn){
        $province = '';
        if (crn != '' && crn != null) {
          jQuery.each(region_province_slug_mapping, function (key, value) { //look for selected sort option in list
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
   if (jQuery("#region_name").length > 0){
      crn=jQuery("#region_name").val().toLowerCase();
      var crn_name = crn;
      if(crn == 'canadian rockies'){
         crn = 'canadianrockies'; //very specially for canadian rockies , for  
      }
  }
   
   
   
    if (jQuery(".search_title_city").length>0) {
        if (crn != '' && crn != null) { //already set the region name
            jQuery("#page_region_city_name").attr('src', theme_url_home.url+'/images/'+crn+'.png');
            jQuery("#page_region_city_name").css('cursor','pointer').click(function(){ //click the map
             
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
                 jQuery("#headerimge_area").addClass('rockies_padding_more');
             }
                    
             jQuery("#headerimge_area").show();
             
        } else if (jQuery("#blog_indicator").length>0) { //belong to web blog
            jQuery(".search_title_city").text('whereblog').css('cursor','pointer').click(function(){
                window.location.href='/blog/';
             });
        } else if (jQuery("#deal_indicator").length>0) { //belong to web blog
            jQuery(".search_title_city").text('deals').css('cursor','pointer').click(function(){
                window.location.href='/deals/';
             });
        } else {
            jQuery("#page_contents_header_div").remove();
        }
    } 
    
    
    
    if (crn != '' && crn != null) {
       jQuery("#region-"+crn).addClass('current');
    }

    //for home page left rail
  if (jQuery("#start_journey").length>0) {
  jQuery("#region_name").change(function(){
       crn=jQuery(this).val();
       jQuery("#main-nav li.region-indicator span").removeClass('current');
       if (crn != '' && crn != null) {
        jQuery("#region-"+crn).addClass('current');
       }
   });

  jQuery("#start_journey ul li img").click(function(){
       if (crn == '' || crn == null) { //here need to change as header below 
           alert('Please choose your destination.');
       } else {
           var url='';
           if (jQuery(this).attr("alt")=='tofrom') {
            jQuery.each(region_to_from_link_mapping, function (key, value) { //look for selected sort option in list
                if (key == crn) {
                   url = '/'+value+'/';
                   return 0;
                }
            });
               
           }else if (jQuery(this).attr("alt")=='transport') {
            jQuery.each(region_transport_link_mapping, function (key, value) { //look for selected sort option in list
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
               
               url= $province_url+crn+'/#'+jQuery(this).attr("alt");
           }
           window.location.href=url;
       }
   });
  }

 /*for process page header navigation bar */ 
  if (jQuery("#page_contents_header").length>0) {
  jQuery("#page_contents_header ul li img").click(function(){
       if (crn == '' || crn == null) {
           alert('Please choose your destination.');
       } else {
           var url='';
           if ($(this).attr("alt")=='tofrom') {
             jQuery.each(region_to_from_link_mapping, function (key, value) { //look for selected sort option in list
                if (key == crn) {
                   url = '/'+value+'/';
                   return 0;
                }
            });
               
           }else if ($(this).attr("alt")=='transport') {
             jQuery.each(region_transport_link_mapping, function (key, value) { //look for selected sort option in list
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
               
               url = $province_url+crn+'/#'+jQuery(this).attr("alt");
               
               
               if(jQuery(this).attr("alt")=='map'){
                  jQuery('#map').css("display","block");
               }  
            
           }
        
         window.location.href= url;
        
        
       }
    });   
  }
  
   if (jQuery("#pillar_page_indicator").length > 0 ) { //if it is pillar page 
        
        //only the region name exists ,prepare for showing the map overlay
        jQuery.each(region_centra_point_mapping, function (key, value) { //look for selected sort option in list
                if (key == crn) {
                    central_point = value;
                   return 0;
                }
         });
       
       
       if (!(jQuery.isEmptyObject(central_point))) {
            service_points.push(central_point);
            showMap(service_points, 0);
            
            var $stringData = '<h3>What\'s Nearby</h3><ul>';
            for (var key in catid_mapping) {
                 $stringData += '<li class="nearbys" tag="'+key+'"><span value="'+catid_mapping[key]['color']+'">&nbsp;</span>'+catid_mapping[key]['title']+'</li>';
            }
           // $stringData += '<li><img src="http://'+globalMapMarker+'" alt="" /> <strong>= Regional Centre</strong></li>';
            $stringData += '</ul>';
            jQuery('.mapnearby').html($stringData);
          }
          jQuery('.maplist').css('position', 'relative');
          jQuery('.mapnearby').css("display","block");

       
      /* $(".map img[rel]").overlay(); */
       jQuery('#map').css("display","block");
       var curl=$(location).attr('href');
       var urlvars=curl.split("#");
       if (urlvars[urlvars.length-1]=='map' || urlvars[urlvars.length-1]=='show_map') {
            /*   $("#map").overlay({load:true}); */
             jQuery('#map').css("display","block");
            
            
       }
   } //only on pillar page end 
   
   jQuery("#map a.close").click(function(){
        jQuery('#map').css("display","none");     
   });
 
});


