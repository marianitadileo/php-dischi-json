<?php 
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
    header('Access-Control-Allow-Headers: token, Content-Type');
    header('Access-Control-Max-Age: 1728000');
    header('Content-Length: 0');
    header('Content-Type: text/plain');
    die();
};

$string_content = file_get_contents("data.json");
// var_dump($string_content);

$array_dischi = json_decode($string_content, true);
// var_dump($array_dischi);

$response = [
    "result" => $array_dischi
];

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
echo json_encode($response);
?>