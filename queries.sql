CREATE DATABASE php_base_mvc;

USE php_base_mvc;


CREATE TABLE IF NOT EXISTS `php_base_mvc`.`user` (
     `id` INT NOT NULL AUTO_INCREMENT , 
     `first_name` VARCHAR(255) NOT NULL ,
     `last_name` VARCHAR(255) NOT NULL ,
     `email` VARCHAR(255) NOT NULL ,
     `password` VARCHAR(255) NOT NULL ,
     `facebook_id` VARCHAR(255) NULL ,
     `google_id` VARCHAR(255) NULL ,
     `photo_url` VARCHAR(255) NULL ,
     `forget` VARCHAR(255) NULL ,
     `created_at` TIMESTAMP NULL,
     `updated_at` TIMESTAMP NULL,
      PRIMARY KEY (`id`)
      );