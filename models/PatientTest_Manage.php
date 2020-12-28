<?php
class PatientTest_Manage extends Models
{
    public function __construct()
    {
    }

    public function view()
    {
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "SELECT * FROM lab_test WHERE availability = 0 ORDER BY id DESC";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function get_lastid()
    {
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "SELECT id FROM lab_test ORDER BY id DESC LIMIT 1";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    /*public function add_labtest($name, $gender, $age, $contact, $cost, $id, $lab_id)
    {
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "INSERT INTO `lab_test`(patient_name,patient_gender,patient_age,patient_contact,cost,patient_id,lab_id) VALUES(?,?,?,?,?,?,?)";
        $stmt = $pdo->prepare($query);
        $result = $stmt->execute([$name, $gender, $age, $contact, $cost, $id, $lab_id]);
        return $result;
    }

    public function add_testis($lab_test, $test)
    {
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "INSERT INTO `test_is`(labtest_id,test_id) VALUES(?,?)";
        $stmt = $pdo->prepare($query);
        $result = $stmt->execute([$lab_test, $test]);
        return $result;
    }*/

    public function add_patient_test($name, $gender, $age, $contact, $cost, $id, $lab_id, $test_list)
    {
        try {
            $connect = new Database();
            $pdo = $connect->connect();

            $pdo->beginTransaction();

            $query = "SET foreign_key_checks = 0";
            $stmt = $pdo->prepare($query);
            $stmt->execute();

            $query = "INSERT INTO `lab_test`(patient_name,patient_gender,patient_age,patient_contact,cost,patient_id,lab_id) VALUES(?,?,?,?,?,?,?)";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$name, $gender, $age, $contact, $cost, $id, $lab_id]);

            $lab_test = $this->get_lastid()['id'] + 1;

            foreach ($test_list as $test) {
                $query = "INSERT INTO `test_is`(labtest_id,test_id) VALUES(?,?)";
                $stmt = $pdo->prepare($query);
                $stmt->execute([$lab_test, $test]);
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

    public function search($id, $name, $date, $availability)
    {
        $connect = new Database;
        $pdo = $connect->connect();

        if ($name != null) {
            $name = $name . '%';
        } else {
            $name = '%';
        }

        if ($availability != 2) {
            $query = "SELECT * FROM lab_test WHERE (id = ? OR patient_name LIKE ?  OR date = ?) AND availability = ? ORDER BY date DESC";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$id, $name, $date, $availability]);
        } else {
            $query = "SELECT * FROM lab_test WHERE id = ? OR patient_name LIKE ?  OR date = ? ORDER BY date DESC";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$id, $name, $date]);
        }
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function displayById($id)
    {
        $connect = new Database();
        $pdo = $connect->connect();
        $query = "SELECT * FROM lab_test WHERE id=?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function get_tests($id)
    {
        $connect = new Database();
        $pdo = $connect->connect();
        $query = "SELECT * FROM test_is INNER JOIN test ON test_is.test_id = test.id WHERE test_is.labtest_id=?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update($id, $availability)
    {
        $connect = new Database();
        $pdo = $connect->connect();
        $query = "UPDATE lab_test SET availability=? WHERE id=?";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$availability, $id]);
        return $status;
    }
}
