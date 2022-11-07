<?php
$ch = curl_init();
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$params = array(
    "SchrankAuf"=>"2022-10-30 00:00:00",
    "SchrankZu"=>"2022-10-30 00:01:19",
    "SchrankOffenDauer"=>"100",
);
curl_setopt($ch,CURLOPT_URL,"https://arduino-watcher.epizy.com/http/insertData.php");
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($params));
$result = curl_exec($ch);
//result will contain the response