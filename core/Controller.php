<?php 
class Controller  extends Application
{
    protected $_contoller, $_action;
    public $view;
    public function __construct($contoller, $action) {
        parent::__construct();
        $this->_contoller = $contoller;
        $this->_action = $action;
        $view = new View();
    }

}
