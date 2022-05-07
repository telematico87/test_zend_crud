<?php


namespace User\Model;


use Zend\Db\TableGateway\TableGatewayInterface;

class UserTable {

    protected $tableGateway;

    function __construct(TableGatewayInterface $tableGateway){
        $this->tableGateway =$tableGateway;
    }

    public function  fetchAll(){
        return $this->tableGateway->select();
    } 
    public function saveData($user){
        $data = [
            'dni'=>$user->getDni(),
            'name'=>$user->getName(),
            'gender'=>$user->getGender(),
            'age'=>$user->getAge(),
            'status'=>$user->getStatus()
        ];
        if($user->getId()){
            $this->tableGateway->update($data, [
                'id' =>$user->getId()
            ]);
        }else{
            $this->tableGateway ->insert($data);
        }

    }
    public function saveDataPhone($id,$type_phone,$phone){

      
        $data =$this->tableGateway->select([
            'id'=>$id
        ]);

        $data=$data->current();
      
        $phone_=$data->getPhone();

        $phones = explode ( ',', $phone_ );

        array_push($phones, $phone);

        $phones = array_filter($phones);

        $final_phone=implode( ',', $phones );

        $data_final=  [
            'phone'=>$final_phone,
            'type_phone'=>$type_phone,
    
        ];

        $data = [
         
            'type_phone'=>$type_phone,
            'phone'=>$final_phone,
        ];

        $this->tableGateway->update($data, [
            'id' =>$id
        ]);


    }
    public function login($user){
  
        $data =$this->tableGateway->select([
            'name_user'=>$user->getNameUser(),
            'password'=>$user->getPassword()
        ]);
        return $data->current();
    }
    
    public function getUser($id){
        $data =$this->tableGateway->select([
            'id'=>$id
        ]);
      
        return $data->current();
    }


}

?>