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


//Switch statment to determine which page to go to. 
switch ($action) {

    //This case will bring the user to the page that shows all of the prisoners
    case 'list_criminals':
        $criminals = get_all_criminals();
        include('criminal_list.php');
        break;
    //This route will take the user to the page showing all information about the prisoner
    case 'see_prisoner':
        $criminal_id = filter_input(INPUT_POST, 'criminal_id', 
            FILTER_VALIDATE_INT);

        //Getting information on sole prisoner 
        $prisoner_info = get_sole_prisoner($criminal_id);

        //Getting address information about prisoner 
        $prisoner_address = get_address($criminal_id);


        include('prisoner_info.php');
        break;
    //This case will take the user to the add prisoner form
    case 'add_prisoner_form':
        include('add_prisoner.php');
        break;
    //Adding a prisoner to the database
    case 'add_prisoner':

        //Getting the user input
        $first_name = filter_input(INPUT_POST, 'first_name');
        $last_name = filter_input(INPUT_POST, 'last_name');
        $phone = filter_input(INPUT_POST, 'phone');

        add_prisoner($first_name, $last_name, $phone);

        header('Location: .?action=list_criminals');
        break;
    //This will take the user to the add address form 
    case 'add_address_form':
        $criminal_id = filter_input(INPUT_POST, 'criminal_id', 
            FILTER_VALIDATE_INT);
        include('add_address.php');
        break;
    case 'add_address':

        //Getting the prisoner id to add into the address form. 
        $criminal_id = filter_input(INPUT_POST, 'criminal_id', 
            FILTER_VALIDATE_INT);

        //Getting the user input
        $street  = filter_input(INPUT_POST, 'street');
        $town = filter_input(INPUT_POST, 'town');
        $state = filter_input(INPUT_POST, 'state');
        $zip = filter_input(INPUT_POST, 'zip');

        add_address($criminal_id, $street, $town, $state, $zip);

        header('Location: .?action=list_criminals');
        break;
    //This action will take the user to the add_officer_form
    case 'add_officer_form':
        $criminal_id = filter_input(INPUT_POST, 'criminal_id', 
            FILTER_VALIDATE_INT);
        include('add_officer.php');
        break;
    //This action will submit the officer information to the database. 
    case 'add_officer':
    
        //Getting the user input
        $f_name  = filter_input(INPUT_POST, 'f_name');
        $l_name = filter_input(INPUT_POST, 'l_name');
        $badge = filter_input(INPUT_POST, 'badge');

        //Adding the officer to the database
        add_officer($f_name, $l_name, $badge);

        header('Location: .?action=list_criminals');
        break;
    //This method will allow the user to add a crime to the database
    case 'add_crime_form':
        $criminal_id = filter_input(INPUT_POST, 'criminal_id', 
            FILTER_VALIDATE_INT);
        include('add_crime.php');
        break;
    //This case will show the address of the prisoner
    case 'address_list':
        //Getting the input from what the user selects
        $criminal_id = filter_input(INPUT_POST, 'criminal_id', 
            FILTER_VALIDATE_INT);
        //Getting the address info from the database
        $address = get_address($criminal_id);
        //Getting the prisoner info from the database
        $sole_prisoner = get_sole_prisoner($criminal_id);
        //Sending the user to the correct page
        include('address.php');
        break;
    //This case will delete a prisoner 
    case 'delete_criminal':

        //Getting the criminal id when the user pushes the delete key.
        $criminal_id = filter_input(INPUT_POST, 'criminal_id', 
            FILTER_VALIDATE_INT);

        #Calling the delete address function to delete the prisoner's address. 
        delete_address($criminal_id);

        #Calling the delete prisoner function to delete a prisoner.
        delete_prisoner($criminal_id);
        
        //Redirecting the site back to the list students page.
        header('Location: .?action=list_criminals');
        break;
}

?>