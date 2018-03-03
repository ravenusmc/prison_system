<?php
//This file will act as the controller for my midterm PHP project

//Pulling in the databases
require('../model/database.php');
require('../model/criminal_db.php');


//Setting a default action 
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_criminals';
    }
}



switch ($action){

  case 'list_criminals':
    $criminals = get_all_criminals();
    echo $criminals;
    include('criminal_list.php');
    break;
}


?>