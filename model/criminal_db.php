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

  //This function adds an address to the database
  function add_address($criminal_id, $street, $town, $state, $zip) {
    global $db;
    $query = 'INSERT INTO address
                  (criminal_id, street, town, state, zip)
                VALUES
                  (:criminal_id, :street, :town, :state, :zip)';
      $statement = $db->prepare($query);
      $statement->bindValue(':criminal_id', $criminal_id);
      $statement->bindValue(':street', $street);
      $statement->bindValue(':town', $town);
      $statement->bindValue(':state', $state);
      $statement->bindValue(':zip', $zip);
      $statement->execute();
      $statement->closeCursor();
  }

  //This function will add an officer to the database
  function add_officer($f_name, $l_name, $badge) {
    global $db;
    $query = 'INSERT INTO officers
                  (last, first, badge_number)
                VALUES
                  (:last, :first, :badge_number)';
    $statement = $db->prepare($query);
    $statement->bindValue(':last', $l_name);
    $statement->bindValue(':first', $f_name);
    $statement->bindValue(':badge_number', $badge);
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