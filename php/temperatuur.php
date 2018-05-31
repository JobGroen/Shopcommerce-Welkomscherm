<?php

$api_uri = 'http://api.openweathermap.org/data/2.5/weather?zip=1011,nl&appid=8e09fcd5e8ecd36618655024a031e852';

$verify = curl_init();
curl_setopt($verify, CURLOPT_URL, $api_uri);
curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);

$connection = curl_exec($verify);

$connection = json_decode($connection, true);

if ($connection["cod"] != 429) {
  $celcius = ($connection["main"]["temp"] - 273.15 ) * 1.000000;
  echo '<img class="weather-icon" src="images/weather_icons/'. $connection["weather"][0]["icon"] .'.png">' .round($celcius, 0) . '°c';
} else {
  echo '<img class="weather-icon" src="images/weather_icons/02d.png">-°c';
}
