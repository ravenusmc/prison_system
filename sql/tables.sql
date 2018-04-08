--Please note that I added child tables first and then crimes to get this all to work. 

CREATE TABLE crimes (
    crime_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    criminal_id INT NOT NULL,
    crime_committed VARCHAR(30),
    officer_id INT NOT NULL,
    FOREIGN KEY (criminal_id) REFERENCES criminals(criminal_id)
    ON DELETE CASCADE,
    FOREIGN KEY (officer_id) REFERENCES officers(officer_id)
    ON DELETE CASCADE
);


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


CREATE TABLE officers (
    officer_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    last VARCHAR2(15),
    first VARCHAR2(10),
    badge_number int NOT NULL
);


INSERT INTO criminals (last_name, first_name, phone)
VALUES ('Thompson', 'Nucky', '503-555-1234');

INSERT INTO address (criminal_id, street, town, state, zip)
VALUES (1, '42 Boardwalk Blvd', 'Atlantic City', 'NJ', 00001);

drop table address;
drop table criminals;


--Query to get all information about specific individual. 
SELECT cr.last_name, cr.first_name, cr.phone, a.street, a.town, a.state, a.zip,
ce.crime_committed, o.last, o.first, o.badge_number
FROM criminals cr
JOIN address a on a.criminal_id = cr.criminal_id
JOIN crimes ce on ce.criminal_id = cr.criminal_id
JOIN officers o on ce.officer_id = o.officer_id
WHERE cr.criminal_id = 37;

--This query will get information for which criminals have committed which crimes
SELECT c.criminal_id, c.crime_committed, cl.last_name, cl.first_name
FROM crimes c
JOIN criminals cl on cl.criminal_id = c.criminal_id
WHERE c.crime_committed = 'robbery';




































