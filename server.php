<?php 
$string_content = file_get_contents("data.json");
// var_dump($string_content);

$array_dischi = json_decode($string_content, true);
// var_dump($array_dischi);

$response = [
    "result" => $array_dischi
];

header('Content-Type: application/json');
echo json_encode($response);
?>