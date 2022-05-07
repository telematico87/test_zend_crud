<?php
namespace User\Form;
use Zend\Form\Element;
use Zend\Form\Form;

class UserForm extends Form{

    function __construct($name = null){
        parent::__construct('user');
        $this->setAttribute('method','POST');

        $this->add([
            'name'=>'id',
            'type'=>'hidden'
            
        ]);

        $this->add([
            'name'=>'dni',
            'type'=>'text',
            'required' => true, 
        ]);

        $this->add([
            'name'=>'phone',
            'type'=>'text',
            'required' => true, 
        ]);

        $this->add([
            'type' => Element\Select::class,
            'name' => 'type_phone',
            'required' => true, 
            'options' => [
                'value_options' => [
                    'celular' => 'Celular',
                    'fijo' => 'Fijo'
                ],
            ],
        ]);

        
        $this->add([
            'name'=>'name',
            'type'=>'text',
            'required' => true
        ]);


        
        $this->add([
            'type' => Element\Select::class,
            'name' => 'gender',
            'required' => true, 
            'options' => [
                'value_options' => [
                    'M' => 'Masculino',
                    'F' => 'Femenino'
                ],
            ],
        ]);


        $this->add([
            'name'=>'age',
            'type'=>'text',
            'required' => true, 
        ]);

        $this->add([
            'name'=>'submit',
            'type'=>'submit',
            'attributes' =>[
                'value'=> 'Guardar',
                'id' =>'buttonSave'
                 ]
        ]);

        $this->add([
            'name'=>'name_user',
            'type'=>'text'
        ]);

        $this->add([
            'name'=>'password',
            'type'=>'text'
        ]);

        $this->add([
            'name'=>'submit_login',
            'type'=>'submit',
            'attributes' =>[
                'value'=> 'Entrar',
                'id' =>'buttonLogin'
                 ]
        ]);

        $this->add([
            'name'=>'back',
            'type'=>'submit',
            'attributes' =>[
                'value'=> 'Cancelar',
                'id' =>'buttonback',
                'href'=>'googo'
                 ]
        ]);

    }


}