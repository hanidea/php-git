<?php
    //1
    $member['username']='james';
    $member['password']='pass';
    $do = $_REQUEST['do'];
    //2
    $members['1']['username']='david张';
    $members['1']['password']='szpass';
    $members['2']['username']='王炸';
    $members['2']['password']='wzpass';
    $members['third']['members']['username']="我是第三个用户名";
    //3
    class addressClass{
        public $address=array();
        public function setAddress($array){
            $this->address=$array;
        }
        public function getAddress(){
            return $this->address;
        }

    }
    $addressObj = new addressClass();
    $addressObj->setAddress($members);
    switch ($do) {
        case "first":
            echo json_encode($member);
            break;
    
        case "second":
            echo json_encode($members);
            break;
    
        case "third":
            echo json_encode($addressObj);
            break;
    }

    ?>
