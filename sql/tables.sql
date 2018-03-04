CREATE TABLE criminals (
  criminal_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  last_name VARCHAR(15),
  first_name VARCHAR(15),
  phone VARCHAR(12)
);

CREATE TABLE address (
  address_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  criminal_id INT NOT NULL,
  street VARCHAR(30),
  town VARCHAR(25),
  state VARCHAR(2),
  zip INT, 
  CONSTRAINT addressFKcriminals
    FOREIGN KEY (criminal_id) REFERENCES criminals(criminal_id)
);

INSERT INTO criminals (last_name, first_name, phone)
VALUES ('Thompson', 'Nucky', '503-555-1234');

INSERT INTO address (criminal_id, street, town, state, zip)
VALUES (1, '42 Boardwalk Blvd', 'Atlantic City', 'NJ', 00001);