CREATE TABLE photos{

    file_id int PRIMARY KEY AUTO_INCREMENT,
    file_name char(255) NOT NULL,
    file_contents MEDIUMBLOB NOT NULL,

}ENGINE=InnoDB;