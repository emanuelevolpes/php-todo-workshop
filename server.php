<?php

//includere functions.php
require_once(__DIR__.'/functions.php');

//leggere i dati dal file todo-list.json
$database = file_get_contents(__DIR__.'/todo-list.json');

//convertire il file .json (stringa) in array associativo
$todo_list = json_decode($database, true);

//gestione aggiunta todo
if (isset($_POST['add'])){
    //operazione add
    $todo_list = addTodo($todo_list, $_POST);
}

//gestione cancellazione todo
if (isset($_POST['delete'])){
    //operazione delete
    $todo_list = deleteTodo($todo_list, $_POST['delete']);
}

//gestione modifica dati
if (isset($_POST['edit'])){
    //operazione edit
    $todo_list = editTodo($todo_list, $_POST);
}



//restituire dati json
header('Content-Type: application/json');
echo json_encode($todo_list);