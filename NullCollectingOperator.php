<?php

$data = [
    "action" => "Create"
];

if(isset($data["action"])){
    $action = $data["action"];
}else{
    $action = "nothing";
}

echo $action;


