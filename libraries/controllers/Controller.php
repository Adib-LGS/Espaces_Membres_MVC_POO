<?php
/**
 * Idée General des Class Controllers
 * La propriété doit etre présente dans les autres Class de Controllers
 * Récuperer le Bon \Models\Name en fonction du Controller
 */

namespace Controllers;

abstract class Controller {
     
    protected $model;
    protected $modelName; //model devient modelName ds le __construct
   
    public function __construct()
    {
        $this->model = new $this->modelName();   /**  new \Models\Subscribe(); */   
    }
}