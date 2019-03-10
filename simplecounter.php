<?php

$file = "var.json";
$json = json_decode(file_get_contents($file), true);
$json++;
file_put_contents($file, json_encode($json));
echo $json;