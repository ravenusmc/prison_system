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

  //This function will get info on individual prisoner. 
  function get_sole_prisoner($criminal_id){
    global $db;
    $query = 'SELECT * FROM criminals
        WHERE criminal_id = :criminal_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':criminal_id', $criminal_id);
    $statement->execute();
    $sole_prisoner = $statement->fetch();
    $statement->closeCursor();
    return $sole_prisoner; 
  }

  //This function adds a prisoner to the database
  function add_prisoner($first_name, $last_name, $phone) {
    global $db;
    $query = 'INSERT INTO criminals
                  (first_name, last_name, phone)
                VALUES
                  (:first_name, :last_name, :phone)';
      $statement = $db->prepare($query);
      $statement->bindValue(':first_name', $first_name);
      $statement->bindValue(':last_name', $last_name);
      $statement->bindValue(':phone', $phone);
      $statement->execute();
      $statement->closeCursor();
  }

  //This function deletes a prisoner from the db
  function delete_prisoner($criminal_id){
    global $db;
    $query = 'DELETE FROM criminals 
              WHERE criminal_id = :criminal_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':criminal_id', $criminal_id);
    $statement->execute();
    $statement->closeCursor();
  }

  //This function deletes a prisoners address from database. 
  function delete_address($criminal_id){
    global $db;
    $query = 'DELETE FROM address 
              WHERE criminal_id = :criminal_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':criminal_id', $criminal_id);
    $statement->execute();
    $statement->closeCursor();
  }

?>