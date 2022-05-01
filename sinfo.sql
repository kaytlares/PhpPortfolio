CREATE DATABASE sinfo;
USE sinfo;

CREATE TABLE school (
    school_id INT(11) AUTO_INCREMENT,
    class varchar(255),
    code varchar(255),
    teacher varchar(255),
    courseName varchar(255),
    uni varchar(255),
    week varchar(255),
	PRIMARY KEY(school_id)
);

INSERT INTO `school` (`school_id`, `class`, `code`, `teacher`) VALUES(0, 'DIG','3134','Rotor');