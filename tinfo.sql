CREATE DATABASE tinfo;
USE tinfo;

CREATE TABLE career (
    career_id INT(11) AUTO_INCREMENT,
    career varchar(255),
    degree varchar(255),
    dollar varchar(255),
    points varchar(255),
	PRIMARY KEY(career_id)
);

INSERT INTO `career` (`career_id`, `career`, `degree`, `dollar`, `points`) VALUES(0, 'Account Manager','Bachelors','$80,000','Highly Liked');