<?php
	$listing_url = "http://directory.stjosephmedia.com/sjmService/lookup/get-listing-cat-list.php?format=json&lookupID=".$listing_cat_id."";
    
    $buf = getJsonStream($listing_url,80);
    
	$lines = explode("\n", $buf);
	$json = $lines[count($lines)-1];	
	
	//var_dump($buf);
	
	$jason_arr = json_decode($json, true);
	
   
	
	$cat1 = $jason_arr[2]["categories"];
	
	for($i = 0; $i < sizeof($cat1); ++$i)
	{
    echo('<li><a href="/listings/#/?category='.$cat1[$i]["id"].'">'.$cat1[$i]["title"].'</a></li>');
	}
	
	
	
	//var_dump($cat1);
    
    //Function to get the lines from the JSON array url webservice
    function getJsonStream($url,$port)
          {
                $query = $url; 
                $url = parse_url($query);
                $host = $url["host"];
                $path = $url["path"] . "?" . $url["query"];
                $timeout = 1;
                $streambuffer = '';
                $fp = fsockopen ($host, $port, $errno, $errstr, $timeout);
              
                if ($fp) 
                {
                    fputs ($fp, "GET $path HTTP/1.0\nHost: " . $host . "\n\n");
                    while (!feof($fp)) {
                        $streambuffer .= fgets($fp, 128);
                        }
                    fclose($fp);
                    unset($fp); 
                } else {
               $streambuffer = 'Website content not found';
                }
                return $streambuffer;
        }


?> 
