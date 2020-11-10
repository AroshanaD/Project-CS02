<?php
    class autofill_sche{
            public function __construct(){

            }

            public function get_sche(){
                $dsn = "mysql:host=localhost;dbname=hospital;charset=utf8mb4";
                $user = 'root';
                $pass = '';
                $options = [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ];
                try {
                    $pdo = new PDO($dsn, $user, $pass, $options);
                } catch (\PDOException $e) {
                    throw new \PDOException($e->getMessage(), (int)$e->getCode());
                }

                $specialization = $_POST['specialization'];

                $query = "SELECT doctor.f_name, doctor.l_name, schedule.date, schedule.time FROM schedule INNER JOIN (doctor INNER JOIN specialization ON doctor.specialization_id = specialization.id) ON schedule.doctor_id = doctor.id WHERE specialization.name = '$specialization' ORDER BY schedule.time";
                $stmt = $pdo->prepare($query);
                $stmt->execute();

                $result = $stmt->fetchAll();
                header('Content-Type: application/json');
                echo json_encode($result);
            }
            
        }

    $instance = new autofill_sche;
    $instance->get_sche();

?>