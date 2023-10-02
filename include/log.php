<?php

$data = file_get_contents("../data.json");
$dataArr = json_decode($data, true);

print_r($dataArr);