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

        //This line will get all the data about the prisoner that is on all the tables
        $all_information = get_all_prisoner_information($criminal_id);

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
        $criminals = get_all_criminals();
        include('add_address.php');
        break;
    case 'add_address':

        //Getting the user input
        $street  = filter_input(INPUT_POST, 'street');
        $town = filter_input(INPUT_POST, 'town');
        $state = filter_input(INPUT_POST, 'state');
        $zip = filter_input(INPUT_POST, 'zip');
        $criminal_id  = filter_input(INPUT_POST, 'prisoner');

        add_address($criminal_id, $street, $town, $state, $zip);

        header('Location: .?action=list_criminals');
        break;
    //This action will take the user to the add_officer_form
    case 'add_officer_form':
        // $criminal_id = filter_input(INPUT_POST, 'criminal_id', 
        //     FILTER_VALIDATE_INT);
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
        //Getting a list of all police officers from DB 
        $officers = get_all_officers();

        //Getting a list of all prisoners from DB 
        $criminals = get_all_criminals();

        include('add_crime.php');
        break;
    case 'add_crime':

        //Getting the data from the user input
        $crime  = filter_input(INPUT_POST, 'crime');
        $officer_id = filter_input(INPUT_POST, 'officers');
        $criminal_id = filter_input(INPUT_POST, 'prisoners');

        //Add the information to the crimes database
        add_crime($crime, $officer_id, $criminal_id);

        header('Location: .?action=list_criminals');
        break;
    //This case will show the address of the prisoner
    // case 'address_list':
    //     //Getting the input from what the user selects
    //     $criminal_id = filter_input(INPUT_POST, 'criminal_id', 
    //         FILTER_VALIDATE_INT);
    //     //Getting the address info from the database
    //     $address = get_address($criminal_id);
    //     //Getting the prisoner info from the database
    //     $sole_prisoner = get_sole_prisoner($criminal_id);
    //     //Sending the user to the correct page
    //     include('address.php');
    //     break;
    //This line will take the user to the page that they can see a prisoner by crime 
    case 'by_crime_form':

        //Getting the crimes from the database 
        $crimes = get_crimes();

        //Sending the user to the correct page
        include('by_crime_form.php');
        break;
    //This action will take the user to the page to see what criminals committed 
    //What crime 
    case 'see_prisoner_by_crime':

        //Getting the user input
        $crime = filter_input(INPUT_POST, 'crimes');

        //Getting the criminals who committed those crimes 
        $prisoners = get_criminals_by_crimes($crime);

        include('by_crime.php');
        break;
    //This action will take the user to the page to select which officers arrested which 
    //criminals
    case 'by_officer_form':

        //Getting the officer data from the database. 
        $officers = get_all_officers();

        //Taking the user to the correct page. 
        include('by_officer_form.php');
        break;
    case 'see_officers':

        //Getting the user input
        $officer_id = filter_input(INPUT_POST, 'officers');

        //Getting the prisoner names from the database 
        $criminals = get_criminals_by_officers($officer_id);

        //Taking the user to the correct page. 
        include('see_officers.php');
        break;
    //This action will take the user to the update prisoners page
    case 'update_prisoner_form':

        //Getting all criminals from the DB
        $prisoners = get_all_criminals();

        //Taking the user to the correct page.
        include('update_prisoner_form.php');
        break;
    //This action will take the user to the update prisoners page, once the 
    //the prisoner has been selected. 
    case 'Update_prisoner':

        //Getting the criminal id from the user input
        $criminal_id = filter_input(INPUT_POST, 'prisoners');

        //Getting the data from the database
        $sole_prisoner = get_sole_prisoner($criminal_id);


        include('update_prisoner.php');
        break;
    //This action will update the database based on what the user submitted. 
    case 'update_prisoner_submit':

        //Getting the user input
        $first_name = filter_input(INPUT_POST, 'first_name');
        $last_name = filter_input(INPUT_POST, 'last_name');
        $phone = filter_input(INPUT_POST, 'phone');
        $criminal_id = filter_input(INPUT_POST, 'criminal_id');

        //Use if statements to set the values of firstname, last name and phone
        if (empty($first_name)) {
           $prisoner = get_sole_prisoner($criminal_id);
           $first_name = $prisoner['first_name'];
        }

        if (empty($last_name)) {
            $prisoner = get_sole_prisoner($criminal_id);
            $last_name = $prisoner['last_name'];
        }

        if (empty($phone)) {
            $prisoner = get_sole_prisoner($criminal_id);
            $last_name = $prisoner['phone'];
        }

        //Making he updates to the database. 
        update_prisoner($first_name, $last_name, $phone, $criminal_id);

        header('Location: .?action=list_criminals');
        break;
    //This action will take the user to the page to select a prisoner to 
    //update.
    case 'update_address_form':

        //Getting all criminals from the DB
        $prisoners = get_all_criminals();

        include('update_address_form.php');
        break;
    //This action will take the user to the actual form to update address
    case 'Update_address':

        //Getting the criminal id from the user input
        $criminal_id = filter_input(INPUT_POST, 'prisoners');

        $address = get_address($criminal_id);

        include('update_address_page.php');
        break;
    //This action will handle all the changes to the database once the user submits
    //the form for an updated address. 
    case 'update_address_submit':

        //Getting the user input
        $street = filter_input(INPUT_POST, 'street');
        $town = filter_input(INPUT_POST, 'town');
        $state = filter_input(INPUT_POST, 'state');
        $zip = filter_input(INPUT_POST, 'zip');
        $criminal_id = filter_input(INPUT_POST, 'criminal_id');

        //Use if statements to set the values of firstname, last name and phone
        if (empty($street)) {
           $address = get_address($criminal_id);
           $street = $address['street'];
        }

        if (empty($town)) {
           $address = get_address($criminal_id);
           $town = $address['town'];
        }

        if (empty($state)) {
           $address = get_address($criminal_id);
           $state = $address['state'];
        }

        if (empty($street)) {
           $address = get_address($criminal_id);
           $zip = $address['zip'];
        }

        //Making he updates to the database. 
        update_address($street, $town, $state, $zip, $criminal_id);

        header('Location: .?action=list_criminals');
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