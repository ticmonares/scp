<?php
class Main extends Controller{
    function __construct(){
        parent::__construct();
        //echo " entramos a la clase main";
    }
    
    function render(){
        $this->view->render('main/index');
    }
}
?>