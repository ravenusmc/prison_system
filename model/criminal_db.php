<?php


  //This function will get a query from the database of all the criminals 
  //It will then return that query so that the criminal_list page may 
  //display all of the criminals.
  function get_all_criminals(){
    global $db;
    $query = 'SELECT * FROM criminals
            ORDER BY criminal_id';
    $statement = $db->prepare($query);
    $statement->execute();
    $criminals = $statement->fetchAll();
    $statement->closeCursor();
    return $criminals; 
  }

  //This function will get the adddress of the criminal
  function get_address($criminal_id){
    global $db;
    $query = 'SELECT * FROM address
        WHERE criminal_id = :criminal_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':criminal_id', $criminal_id);
    $statement->execute();
    $address = $statement->fetch();
    $statement->closeCursor();
    return $address;
  }



?>