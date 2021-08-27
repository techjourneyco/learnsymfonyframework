CREATE TABLE `techjourney`.`task` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NULL,
  `content` TEXT NULL,
  `duedate` DATE NULL,
  PRIMARY KEY (`id`));