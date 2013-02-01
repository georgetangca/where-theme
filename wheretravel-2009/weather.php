<!--Start weather include-->
<?php
if (is_category('vancouver') || is_single () && in_category('vancouver')) {
    echo ('<div class="weather"><h5><a href="http://www.where.ca/index.php/weather-forecast/"><strong>Vancouver</strong>, British Columbia</a></h5>');
    echo do_shortcode('[forecast location="Vancouver, British Columbia" caption="" measurement=\'C\' todaylabel="Today" datelabel="%%weekday%%" highlow=\'%%high%%°/%%low%%°\' numdays="3" iconset="Incredible" cache="true" width="100%"]');
    echo ('</div>');
}
elseif (is_category('victoria') || is_single () && in_category('victoria')) {
    echo ('<div class="weather"><h5><a href="http://www.where.ca/index.php/weather-forecast/"><strong>Victoria</strong>, British Columbia</a></h5>');
    echo do_shortcode('[forecast location="Victoria, British Columbia" caption="" measurement=\'C\' todaylabel="Today" datelabel="%%weekday%%" highlow=\'%%high%%°/%%low%%°\' numdays="3" iconset="Incredible" cache="true" width="100%"]');
    echo ('</div>');
}
elseif (is_category('whistler') || is_single () && in_category('whistler')) {
    echo ('<div class="weather"><h5><a href="http://www.where.ca/index.php/weather-forecast/"><strong>Whistler</strong>, British Columbia</a></h5>');
    echo do_shortcode('[forecast location="Whistler, British Columbia" caption="" measurement=\'C\' todaylabel="Today" datelabel="%%weekday%%" highlow=\'%%high%%°/%%low%%°\' numdays="3" iconset="Incredible" cache="true" width="100%"]');
    echo ('</div>');
}
elseif (is_category('11') || is_single () && in_category('11')) {
    echo ('<div class="weather"><h5><a href="http://www.where.ca/index.php/weather-forecast/"><strong>Banff, Canmore & Area</strong>, Alberta</a></h5>');
    echo do_shortcode('[forecast location="Banff, Alberta" caption="" measurement=\'C\' todaylabel="Today" datelabel="%%weekday%%" highlow=\'%%high%%°/%%low%%°\' numdays="3" iconset="Incredible" cache="true" width="100%"]');
    echo ('</div>');
}
elseif (is_category('jasper') || is_single () && in_category('jasper')) {
    echo ('<div class="weather"><h5><a href="http://www.where.ca/index.php/weather-forecast/"><strong>Jasper</strong>, Alberta</a></h5>');
    echo do_shortcode('[forecast location="Jasper, Alberta" caption="" measurement=\'C\' todaylabel="Today" datelabel="%%weekday%%" highlow=\'%%high%%°/%%low%%°\' numdays="3" iconset="Incredible" cache="true" width="100%"]');
    echo ('</div>');
}
elseif (is_category('calgary') || is_single () && in_category('calgary')) {
    echo ('<div class="weather"><h5><a href="http://www.where.ca/index.php/weather-forecast/"><strong>Calgary</strong>, Alberta</a></h5>');
    echo do_shortcode('[forecast location="Calgary, Alberta" caption="" measurement=\'C\' todaylabel="Today" datelabel="%%weekday%%" highlow=\'%%high%%°/%%low%%°\' numdays="3" iconset="Incredible" cache="true" width="100%"]');
    echo ('</div>');
}
elseif (is_category('edmonton') || is_single () && in_category('edmonton')) {
    echo ('<div class="weather"><h5><a href="http://www.where.ca/index.php/weather-forecast/"><strong>Edmonton</strong>, Alberta</a></h5>');
    echo do_shortcode('[forecast location="Edmonton, Alberta" caption="" measurement=\'C\' todaylabel="Today" datelabel="%%weekday%%" highlow=\'%%high%%°/%%low%%°\' numdays="3" iconset="Incredible" cache="true" width="100%"]');
    echo ('</div>');
}
elseif (is_category('winnipeg') || is_single () && in_category('winnipeg')) {
    echo ('<div class="weather"><h5><a href="http://www.where.ca/index.php/weather-forecast/"><strong>Winnipeg</strong>, Manitoba</a></h5>');
    echo do_shortcode('[forecast location="Winnipeg, Manitoba" caption="" measurement=\'C\' todaylabel="Today" datelabel="%%weekday%%" highlow=\'%%high%%°/%%low%%°\' numdays="3" iconset="Incredible" cache="true" width="100%"]');
    echo ('</div>');
}
elseif (is_category('muskoka') || is_single () && in_category('muskoka')) {
    echo ('<div class="weather"><h5><a href="http://www.where.ca/index.php/weather-forecast/"><strong>Muskoka</strong>, Ontario</a></h5>');
    echo do_shortcode('[forecast location="Muskoka, Ontario" caption="" measurement=\'C\' todaylabel="Today" datelabel="%%weekday%%" highlow=\'%%high%%°/%%low%%°\' numdays="3" iconset="Incredible" cache="true" width="100%"]');
    echo ('</div>');
}
elseif (is_category('ottawa') || is_single () && in_category('ottawa')) {
    echo ('<div class="weather"><h5><a href="http://www.where.ca/index.php/weather-forecast/"><strong>Ottawa</strong>, Ontario</a></h5>');
    echo do_shortcode('[forecast location="Ottawa, Ontario" caption="" measurement=\'C\' todaylabel="Today" datelabel="%%weekday%%" highlow=\'%%high%%°/%%low%%°\' numdays="3" iconset="Incredible" cache="true" width="100%"]');
    echo ('</div>');
}
elseif (is_category('toronto') || is_single () && in_category('toronto')) {
    echo ('<div class="weather"><h5><a href="http://www.where.ca/index.php/weather-forecast/"><strong>Toronto</strong>, Ontario</a></h5>');
    echo do_shortcode('[forecast location="Toronto, Ontario" caption="" measurement=\'C\' todaylabel="Today" datelabel="%%weekday%%" highlow=\'%%high%%°/%%low%%°\' numdays="3" iconset="Incredible" cache="true" width="100%"]');
    echo ('</div>');
}
elseif (is_category('halifax') || is_single () && in_category('halifax')) {
    echo ('<div class="weather"><h5><a href="http://www.where.ca/index.php/weather-forecast/"><strong>Halifax</strong>, Nova Scotia</a></h5>');
    echo do_shortcode('[forecast location="Halifax, Nova Scotia" caption="" measurement=\'C\' todaylabel="Today" datelabel="%%weekday%%" highlow=\'%%high%%°/%%low%%°\' numdays="3" iconset="Incredible" cache="true" width="100%"]');
    echo ('</div>');
}
else {
    echo ('<div class="weather"><a href="http://www.where.ca/index.php/weather-forecast/"><img src="http://www.where.ca/images/weather-graphic.png" alt="Get your five-day weather" title="Get your five-day weather"></a></div>');
}
?>
<!--End weather include-->