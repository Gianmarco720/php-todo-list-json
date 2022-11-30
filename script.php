<?php

// prendo il file json e la trasformo in stringa
$tasks_string = file_get_contents('tasks.json');

// trasformo il file json in un array di PHP
$tasks_array = json_decode($tasks_string);


if (isset($_POST['task'])) {
    $task = $_POST['task'];

    // pusho la nuova task nell'array
    array_push($tasks_array, $task);

    // trasformo l'array PHP in formato json
    $json_tasks = json_encode($tasks_array);

    // con file_put_contents lo scrivo all'interno del file json
    file_put_contents('tasks.json', $json_tasks);

    // trasformo di nuovo il file json in un array leggibile da PHP
    $json_tasks = json_decode($tasks_string);
}

header('Content-Type: application/json');
echo json_encode($tasks_array);
