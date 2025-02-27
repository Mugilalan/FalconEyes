/* camera.php - Captures and saves images from webcam */
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $imageData = $_POST['image'] ?? '';
    if (!empty($imageData)) {
        $filteredData = substr($imageData, strpos($imageData, ",")+1);
        $unencodedData = base64_decode($filteredData);
        $fileName = "logs/cam_" . time() . ".png";
        file_put_contents($fileName, $unencodedData);
        echo json_encode(["status" => "success", "message" => "Image saved."]);
    }
    exit();
}
?>