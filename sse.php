<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

$data=array();
if (($handle = fopen("data.txt", "r")) !== FALSE) {
    while (($line = fgetcsv($handle, 1000, ";",'"')) !== FALSE) {        
    	$data[]=$line;
    }
    fclose($handle);
}

echo "retry: 2000\n\n";
echo "data: ".json_encode((object) $data)."\n\n";
flush();
?>