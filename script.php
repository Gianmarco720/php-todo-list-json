<?php

// prendo il file json e la trasformo in stringa
$tasks_string = file_get_contents('tasks.json');

// trasformo il file json in un array di PHP
$tasks_array = json_decode($tasks_string);

header('Content-Type: application/json');
echo json_encode($tasks_array);
