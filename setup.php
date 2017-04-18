<?php
require "config/constants.php";
require "functions/database.php";

connectDb();

$sql = "CREATE DATABASE IF NOT EXISTS 'Ihap'";

$sql .= ' CREATE TABLE IF NOT EXISTS `mod_reminder_entries` 
  ( 
   `id`          INT(10) NOT NULL auto_increment, 
   `user_id`     INT(10) NOT NULL, 
   `entry_name`  VARCHAR(255) NOT NULL, 
   `entry_value` INT(10) NOT NULL, 
   PRIMARY KEY (`id`), 
   FOREIGN KEY (`user_id`) REFERENCES tblclients (`id`) 
 ); 

 CREATE TABLE IF NOT EXISTS `second_table` 
  ( 
   `user_id`     INT(10) NOT NULL, 
   `fieldstotal` INT(10) NOT NULL, 
   FOREIGN KEY (`user_id`) REFERENCES tblclients (`id`) 
  ); ';

  mysql_query($sql);
?>
