
DROP DATABASE IF EXISTS myLeads;
CREATE DATABASE myLeads;
use myLeads;

CREATE TABLE  user (
 user_id INT AUTO_INCREMENT PRIMARY KEY,
 username VARCHAR( 50 ),
 email VARCHAR( 100 ),
 password CHAR( 64 ),
 first_name VARCHAR( 20 ),
 last_name VARCHAR( 20 ),
 remember_token VARCHAR(255),
 created_at DATETIME,
 updated_at DATETIME
);


CREATE TABLE  task (
task_id INT AUTO_INCREMENT PRIMARY KEY,
lead_id INT( 11 ),
status_id INT ( 11 ), 
comment VARCHAR( 255 ),
due_date DATETIME,
datetime_added DATETIME,
last_modified Timestamp
);


CREATE TABLE  lead (
lead_id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT,
status_id INT,
type VARCHAR( 255 ),
first_name VARCHAR( 20 ),
 last_name VARCHAR( 255 ),
 email VARCHAR( 100 ),
 phone VARCHAR(255),
 address VARCHAR( 255 ),
 notes text,
 credit_score int,
 appointment DATETIME,
 datetime_added Timestamp
 );


CREATE TABLE  comment (
comment_id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT,
comment text,
datetime_added Timestamp
);

CREATE TABLE  status (
status_id INT AUTO_INCREMENT PRIMARY KEY,
status VARCHAR( 255 ),
datetime_added Timestamp
);


-- CREATE TABLE  address (
--  address_id INT AUTO_INCREMENT PRIMARY KEY,
--  address1 VARCHAR(255),
--  address2 VARCHAR(255),
--  city VARCHAR( 255 ),
--  state VARCHAR( 255 ),
--  zip INT
--  );













