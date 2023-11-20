
<?php

// Setze die Zeitzone
date_default_timezone_set("Europe/Vienna");

// Rufe die Wetterdaten ab
$url = "https://api.openweathermap.org/data/2.5/weather?q=Wien&appid=YOUR_API_KEY";
$weatherData = file_get_contents($url);

$weatherData = json_decode(file_get_contents($url));

// Gib die Wetterdaten aus
$datum = date("d.m.Y", $weatherData->dt);
$uhrzeit = date("H:i", $weatherData->dt);
$temperatur = $weatherData->main->temp;
$luftfeuchtigkeit = $weatherData->main->humidity;
$windgeschwindigkeit = $weatherData->wind->speed;

echo "Datum: $datum\n";
echo "Uhrzeit: $uhrzeit\n";
echo "Temperatur: $temperatur °C\n";
echo "Luftfeuchtigkeit: $luftfeuchtigkeit %\n";
echo "Windgeschwindigkeit: $windgeschwindigkeit km/h\n";

?>