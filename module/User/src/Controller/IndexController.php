<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace User\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    protected $table;

    public function __construct($table){
        $this->table=$table;
    }
    public function indexAction()
    {   
        $form =new \User\Form\UserForm;
       
        return new ViewModel([
            'form' =>$form
        ]);
    }

    public function listAction(){
      
        $users=$this->table->fetchAll();
        
        return new ViewModel([
            'users' =>$users
        ]);
    }

    public function loginAction(){

        $form =new \User\Form\UserForm;
        $request =  $this->getRequest();

        $user = new \User\Model\User();

        $name_user=$request ->getPost('name_user');
        $password=$request ->getPost('password');

      
        if($name_user!='' && $password!=''){
      
        $user->exchangeArrayLogin($name_user, $password);
        
        $user_result=$this->table->login($user);

        if($user_result!=null){
       
            return $this->redirect()->toRoute('home1',
            [ 'controller' =>'index',
            'action' =>'list'
     
            ]);
        }else{

        
            return $this->redirect()->toRoute('home',
            [ 'controller' =>'home',
            'action' =>'index'
     
            ]);   
        }

        }else{
    
            return $this->redirect()->toRoute('home',
            [ 'controller' =>'home',
            'action' =>'index'
     
            ]);   
        }
      
    }

    public function phoneAction(){

        $id =(int)$this->params()->fromRoute('id',0);
        if($id ==0){
            exit('error');
        }

        try{

            $user=$this->table->getUser($id);
       
            $phones=$user->getPhone();
            $phones = explode ( ',', $phones );
            return new ViewModel([
                'phones' =>$phones
            ]);     

        }catch(Exception $e){
            exit("Error");
        }

    }


    public function addphoneAction(){
        $form =new \User\Form\UserForm;
        $request =  $this->getRequest();
        $id =(int)$this->params()->fromRoute('id',0);
        if($id ==0){
            exit('error');
        }

        if(!$request->isPost()){
            return new ViewModel([
                'form' =>$form,
                'id' =>$id
            ]);
        }

        $user = new \User\Model\User();
        $phone=$request ->getPost('phone');
        $type_phone=$request ->getPost('type_phone');
   
        $this->table->saveDataPhone($id,$type_phone,$phone);

       return $this->redirect()->toRoute('home1',
       [ 'controller' =>'home1',
       'action' =>'phone'

       ]);
    }


    public function addAction(){
        $form =new \User\Form\UserForm;
        $request =  $this->getRequest();
        if(!$request->isPost()){
            return new ViewModel([
                'form' =>$form
            ]);
        }

        $user = new \User\Model\User();
        $form->setData($request ->getPost());
    

        $data=[
            'id' =>$request->getPost('id'),
            'name' =>$request->getPost('name'),
            'gender' =>$request->getPost('gender'),
            'age' =>$request->getPost('age'),
            'dni' =>$request->getPost('dni')
        ];
        
        $user->exchangeArray($data);
        $this->table->saveData($user);

       return $this->redirect()->toRoute('home1',
       [ 'controller' =>'home1',
       'action' =>'add'

       ]);
    }

    public function editAction(){

        $id =(int)$this->params()->fromRoute('id',0);
        if($id ==0){
            exit('error');
        }

        try{

            $user =$this->table->getUser($id);


        }catch(Exception $e){
            exit("Error");
        }
        $form=new \User\Form\UserForm;

        $form->bind($user);
        $request =  $this->getRequest();
        if(!$request->isPost()){
            return new ViewModel([
                'form' =>$form,
                'id' =>$id
            ]);
        }
        $form->seData($request->getPost());
        if(!$form->isValid()){
            exit('Error');
        }

        $this->table->saveData($user);
        return $this->redirect()->toRoute('home1',
        [ 'controller' =>'edit',
        'action' =>'edit',
        'id'=>$id
 
        ]);
    }
}
