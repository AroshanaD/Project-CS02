<?php
class Inventory_manage extends Models
{
    public function __construct()
    {
    }

    public function view_vendors()
    {
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "SELECT * FROM vendor WHERE deleted=0";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function view_stock()
    {
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "SELECT * FROM stock WHERE quantity > 0 and expire_date > CURDATE()";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function search_medicine($name)
    {
        $connect = new Database;
        $pdo = $connect->connect();

        if ($name != null) {
            $name = $name . '%';
        } else {
            $name = '';
        }

        $query = "SELECT * FROM stock WHERE drug_name LIKE ? AND deleted=0";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$name]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function search_vendor($name)
    {
        $connect = new Database;
        $pdo = $connect->connect();

        if ($name != null) {
            $name = $name . '%';
        } else {
            $name = '';
        }

        $query = "SELECT * FROM vendor WHERE name LIKE ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$name]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function get_lastid()
    {
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "SELECT grn_id FROM medicine_grn ORDER BY grn_id DESC LIMIT 1";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function get_last_salesid()
    {
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "SELECT sales_id FROM medicine_sales ORDER BY sales_id DESC LIMIT 1";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    /*public function add_grn($vendor, $no_items, $grn_value, $receiver_cat, $receiver_id, $note)
    {
        $connect = new Database();
        $pdo = $connect->connect();

        if ($receiver_cat == 'pharmacist') {
            $query = "INSERT INTO `medicine_grn`(vendor_id,no_of_items,gr_value,received_pharmacist,note) VALUES(?,?,?,?,?)";
        } elseif ($receiver_cat == 'supervisor') {
            $query = "INSERT INTO `medicine_grn`(vendor_id,no_of_items,gr_value,received_supervisor,note) VALUES(?,?,?,?,?)";
        }
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$vendor, $no_items, $grn_value, $receiver_id, $note]);
        return $status;
    }

    public function add_medicine($grn_id, $medicine)
    {
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "INSERT INTO `stock`
                (grn_id, br_id, drug_name, unitary_value, unitary_unit, unitary_price, selling_price, quantity, manufacturer, manufacture_date, expire_date, note) 
                VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([
            $grn_id, $medicine[0], $medicine[1], $medicine[2], $medicine[3], $medicine[4], $medicine[5],
            $medicine[6], $medicine[7], $medicine[8], $medicine[9], $medicine[10],
        ]);
        return $status;
    }*/

    public function add_stock($vendor, $no_items, $grn_value, $receiver_cat, $receiver_id, $note, $medicine_list)
    {
        try {
            $connect = new Database();
            $pdo = $connect->connect();

            $pdo->beginTransaction();

            $query = "SET foreign_key_checks = 0";
            $stmt = $pdo->prepare($query);
            $stmt->execute();

            if ($receiver_cat == 'pharmacist') {
                $query = "INSERT INTO `medicine_grn`(vendor_id,no_of_items,gr_value,received_pharmacist,note) VALUES(?,?,?,?,?)";
            } elseif ($receiver_cat == 'supervisor') {
                $query = "INSERT INTO `medicine_grn`(vendor_id,no_of_items,gr_value,received_supervisor,note) VALUES(?,?,?,?,?)";
            }
            $stmt = $pdo->prepare($query);
            $stmt->execute([$vendor, $no_items, $grn_value, $receiver_id, $note]);

            $grn_id = $this->get_lastid()['grn_id'] + 1;

            foreach ($medicine_list as $medicine) {
                $query = "INSERT INTO `stock`
                (grn_id, br_id, drug_name, unitary_value, unitary_unit, unitary_price, selling_price, quantity, manufacturer, manufacture_date, expire_date, note) 
                VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
                $stmt = $pdo->prepare($query);
                $status = $stmt->execute([
                    $grn_id, $medicine[0], $medicine[1], $medicine[2], $medicine[3], $medicine[4], $medicine[5],
                    $medicine[6], $medicine[7], $medicine[8], $medicine[9], $medicine[10],
                ]);
            }

            $query = "SET foreign_key_checks = 1";
            $stmt = $pdo->prepare($query);
            $stmt->execute();

            $pdo->commit();
            return TRUE;

        } catch (PDOException $e) {
            $pdo->rollBack();
            return FALSE;
        }
    }

    /*public function add_bill_details($id, $name, $age, $receptionist_id, $no_items, $cost, $note)
    {
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "INSERT INTO `medicine_sales`(customer_id, customer_name, customer_age, pharmacist_id, no_items, total_cost, note) VALUES(?,?,?,?,?,?,?)";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$id, $name, $age, $receptionist_id, $no_items, $cost, $note]);
        return $status;
    }


    public function add_bill_list($sales_id, $medicine)
    {
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "INSERT INTO `medicine_sales_list`
                (sales_id, br_id, drug_name, quantity, cost, note) 
                VALUES(?,?,?,?,?,?)";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([
            $sales_id, $medicine[0], $medicine[1], $medicine[2], $medicine[3], $medicine[4]
        ]);
        return $status;
    }*/

    public function add_bill($id, $name, $age, $receptionist_id, $no_items, $cost, $medicine_list)
    {
        try {
            $connect = new Database();
            $pdo = $connect->connect();

            $pdo->beginTransaction();

            $query = "SET foreign_key_checks = 0";
            $stmt = $pdo->prepare($query);
            $stmt->execute();

            $query = "INSERT INTO `medicine_sales`(customer_id, customer_name, customer_age, pharmacist_id, no_items, total_cost) VALUES(?,?,?,?,?,?)";
            $stmt = $pdo->prepare($query);
            $status = $stmt->execute([$id, $name, $age, $receptionist_id, $no_items, $cost]);

            $sales_id = $this->get_last_salesid()['sales_id'] + 1;

            foreach ($medicine_list as $medicine) {
                $query = "INSERT INTO `medicine_sales_list`
                (sales_id, br_id, drug_name, quantity, cost, note) 
                VALUES(?,?,?,?,?,?)";
                $stmt = $pdo->prepare($query);
                $status = $stmt->execute([
                    $sales_id, $medicine[0], $medicine[1], $medicine[2], $medicine[3], $medicine[4]
                ]);
            }

            $query = "SET foreign_key_checks = 1";
            $stmt = $pdo->prepare($query);
            $stmt->execute();

            $pdo->commit();

            return TRUE;
        } catch (PDOException $e) {
            $pdo->rollBack();
            return FALSE;
        }
    }

    public function add_vendor($name, $address, $contact, $email)
    {
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "INSERT INTO `vendor`(name,address,contact_no,email) VALUES(?,?,?,?)";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$name, $address, $contact, $email]);
        return $status;
    }

    public function displayVendor($id)
    {
        $connect = new Database();
        $pdo = $connect->connect();
        $query = "SELECT * FROM vendor WHERE id=? AND deleted=0";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update_vendor($id, $address, $contact, $email)
    {
        $connect = new Database();
        $pdo = $connect->connect();
        $query = "UPDATE vendor SET address=?, contact_no=?, email=? WHERE id=?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$address, $contact, $email, $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function remove_stock_item($br_id)
    {
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "UPDATE stock SET deleted=1 WHERE br_id=?";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$br_id]);

        if ($status == TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function delete_vendor($id)
    {
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "UPDATE vendor SET deleted=1 WHERE id=?";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$id]);

        if ($status == TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
