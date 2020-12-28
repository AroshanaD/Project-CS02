CREATE TRIGGER `deduct_med_quantity` 
AFTER INSERT ON `medicine_sales_list` 
FOR EACH ROW 
BEGIN 
    DECLARE deduct_quantity integer; 
    DECLARE id integer; 
    SET deduct_quantity = new.quantity; 
    SET id = new.br_id; 
    UPDATE stock SET quantity=quantity- deduct_quantity WHERE br_id=id; 
END
