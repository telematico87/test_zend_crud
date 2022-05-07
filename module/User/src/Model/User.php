<?php


namespace User\Model;

class User {


    protected $id;
    protected $name;
    protected $name_user;
    protected $age;
    protected $gender;
    protected $password;
    protected $dni;
    protected $status;
    protected $phone;
    protected $type_phone;

    public function exchangeArray($data){

        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->gender = $data['gender']; 
        $this->age = $data['age']; 
        $this->dni = $data['dni']; 
        $this->phone = $data['phone'];
        $this->type_phone = $data['type_phone'];
        $this->status=1;
    }

    public function exchangeArrayLogin($name_user,$password){
        $this->name_user = $name_user; 
        $this->password = $password; 
    }   


    public function getArrayCopy(){
        return [
            'id' =>$this->id,
            'name' =>$this->name,
            'dni'=>$this->dni,
            'gender'=>$this->gender,
            'age'=>$this->age
        ];
    }

    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }


    public function getNameUser(){
        return $this->name_user;
    }

    public function getGender(){
        return $this->gender;
    }

    public function getAge(){
        return $this->age;
    }
    public function getPassword(){
        return $this->password;
    }

    public function getDni(){
        return $this->dni;
    }
    public function getStatus(){
        return $this->status;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function getTypePhone(){
        return $this->type_phone;
    }


}

?>