<?php

$api_uri = 'http://api.openweathermap.org/data/2.5/weather?zip=1822,nl&appid=8e09fcd5e8ecd36618655024a031e852';

$verify = curl_init();
curl_setopt($verify, CURLOPT_URL, $api_uri);
curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);

echo $connection = curl_exec($verify);
echo '<br><br>';
$connection = json_decode($connection, true);
var_dump($connection);
echo '<br><br>';
$celcius = ($connection["main"]["temp"] - 273.15 ) * 1.000000;
echo '<img src="images/weather_icons/'. $connection["weather"][""]["icon"] .'.png" alt="Weather_icon" height="42" width="42">' .round($celcius, 0) . '°c';