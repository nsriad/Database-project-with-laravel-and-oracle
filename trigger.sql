DROP TRIGGER if EXISTS NameCheck ;

DELIMITER $$
CREATE TRIGGER NameCheck BEFORE UPDATE ON users
FOR EACH ROW 
SET NEW.user_name=ucfirst(NEW.user_name),
NEW.dept=ucall(NEW.dept),
NEW.email=LOWER(NEW.email);
$$

DROP TRIGGER if EXISTS NameCheck ;

DELIMITER $$
CREATE TRIGGER NameCheck_insert BEFORE INSERT ON users
FOR EACH ROW 
SET NEW.user_name=ucfirst(NEW.user_name),
NEW.dept=ucall(NEW.dept),
NEW.email=LOWER(NEW.email);
$$