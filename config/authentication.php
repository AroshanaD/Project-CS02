<?php

    class authentication{

        public static $user_controllers = array('Main'=>'Any','Autofill'=>'Any','User'=>'Any','Doctor_Schedule'=>'Any', 
        'Register'=>'Any', 'Appointment'=>array('patient','receptionist'),
        'Doctors'=>array('supervisor'), 'Inventory'=>array('pharmacist','supervisor'), 'Statistics'=>array('doctor','supervisor','lab_technician','pharmacist'),
        'Labtest'=>array('lab_technician'), 'Schedules'=>array('supervisor'), 'Staff'=>array('supervisor'), 
        'PatientTest'=>array('lab_technician','patient'), 'Patient_Appointment'=>array('receptionist','doctor','patient'),
        'Reports'=>array('supervisor','pharmacist','lab_technician','doctor')
        );

        public function __construct(){
            
        }

        public static function authenticate($controller){
            $access = self::$user_controllers[$controller];
            if($access == 'Any'){
                return 'accept';
            }
            else{
                if($_SESSION){
                    if(in_array($_SESSION['user_cat'],$access)){
                        return 'accept';
                    }
                    else{
                        return 'access denied';
                    }
                }
                else{
                    return 'declined';
                }
            }
        }
    }