<?php
$data = json_decode(file_get_contents("php://input"), true);
$ip = $_SERVER['REMOTE_ADDR'];
$lat = $data['lat'] ?? 'Unknown';
$lon = $data['lon'] ?? 'Unknown';
$accuracy = $data['accuracy'] ?? 'Unknown';
$battery = isset($data['battery']) ? $data['battery'] . "%" : 'Not Available';
$charging = isset($data['charging']) ? ($data['charging'] ? 'Yes' : 'No') : 'Not Available';

$log_file = "logs/location_log.txt";
$log_entry = date("Y-m-d H:i:s") . " | IP: $ip | Lat: $lat | Lon: $lon | Accuracy: $accuracy | Battery: $battery | Charging: $charging\n";
file_put_contents($log_file, $log_entry, FILE_APPEND);

echo json_encode(["status" => "success", "message" => "Location & battery recorded."]);
?>
