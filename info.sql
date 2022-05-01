CREATE DATABASE info;
USE info;

CREATE TABLE consumer (
	consumer_id INT(11) AUTO_INCREMENT,
	first_name VARCHAR (255),
	last_name VARCHAR (255),
	email VARCHAR (255),
	phone VARCHAR (255),
    PRIMARY KEY(consumer_id)
);



INSERT INTO `consumer` (`consumer_id`, `first_name`, `last_name`, `phone`, `email`) VALUES(0, 'Kayla','Lares','3219782329','kayla.lares@yahoo.com');
