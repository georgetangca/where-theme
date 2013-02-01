/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
        var region_cat = $('#region_event_cat').val();
        $( "#sdate" ).datepicker({showOn: "button",buttonImage: "/images/calendar.gif", buttonImageOnly: true,dateFormat: 'mm/dd/yy',
                    onSelect: function(selectedDate) {
                    var instance = $(this).data("datepicker");
                    var date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
                    $("#edate").val('');
                    $("#date2").val('');
                    $("#date1").val(selectedDate);
                    $("#edate").datepicker("option", "minDate", date);
                    return false;
                    }
                });
        $( "#edate" ).datepicker({showOn: "button",buttonImage: "/images/calendar.gif", buttonImageOnly: true,dateFormat: 'mm/dd/yy',
                   onSelect: function(selectedDate) {
                    $("#date2").val(selectedDate);
                    return false;
                    }
                });

        $("#events-calendar" ).datepicker({
           dateFormat: 'mm/dd/yy',
           inline: true,
           showOtherMonths: true,
	   selectOtherMonths: true,
           onSelect: function(date) {
                   $("#events-calendar #ui-datepicker-div td").removeClass("highlight");
                   $(this).prevAll("td:not(.ui-datepicker-unselectable)").addClass("highlight");
                   $('#sdate').val('');
                   $('#edate').val('');
                   $("#date1").val(date);
                   $("#date2").val(date);
                   window.location.href = '/events/#/?sdate='+encodeURIComponent(date)+'&edate='+encodeURIComponent(date)+'&keywords='+encodeURIComponent($("#skword").val())+'&category='+region_cat;
           }
         });

         $("#date_event_range").click(function(){
             
             
             window.location.href = '/events/#/?sdate='+encodeURIComponent($("#date1").val())+'&edate='+encodeURIComponent($("#date2").val())+'&keywords='+encodeURIComponent($("#skword").val())+'&category='+region_cat;
         });
   });


