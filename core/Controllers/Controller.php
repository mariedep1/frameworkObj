<?php 

namespace Controllers;



abstract class Controller
{
    protected $model;
    protected $modelName;
    protected $user; 
    
    public function __construct()
    {
        $this->model = new $this->modelName();
        $userModel = new \Model\User();
        $this->user = $userModel->getUser(); 
    
    }

   


}