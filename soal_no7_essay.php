<?php
 
$camera = file_get_contents('data.json');
 
$decoded_json = json_decode($camera, true);
 
echo $decoded_json['waktu'];

 
echo $decoded_json['lokasi'];
 
echo $decoded_json['kamera'];

echo $decoded_json['object'];

echo $decoded_json['up'];
echo $decoded_json['down'];

echo $decoded_json['stay'];
?>