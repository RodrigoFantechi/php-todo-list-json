<?php


$tasks = file_get_contents('tasks.json');
$all_tasks = json_decode($tasks);


if (isset($_POST['task']) && !isset($_POST['indice'])){

    $task = $_POST['task'];
    array_push($all_tasks, $task);
    $json_tasks = json_encode($all_tasks);
    file_put_contents('tasks.json',$json_tasks);

}elseif (isset($_POST['task']) && isset($_POST['indice'])){
    $task = $_POST['task'];
    $index = $_POST['indice'];
   array_splice($all_tasks,$index,1);
    $json_tasks = json_encode($all_tasks);
    file_put_contents('tasks.json',$json_tasks);
}





header('Content-Type: application/json');
echo json_encode($all_tasks);




