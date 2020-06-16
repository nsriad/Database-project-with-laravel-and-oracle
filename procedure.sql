DROP procedure IF EXISTS get_question;
 
DELIMITER $$  
CREATE PROCEDURE get_question()  
BEGIN  
SELECT * FROM question;  
END
$$ 