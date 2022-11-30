<?php

$tasks_string = file_get_contents('tasks.json');
$tasks_array = json_decode($tasks_string);

header('Content-Type: application/json');
echo json_encode($tasks_array);
