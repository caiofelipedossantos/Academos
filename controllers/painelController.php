<?php
class painelController extends controller{
    public function _construct(){
        parent::__construct();
    }

    public function index($url){
        $dados = array();
        $this->loadTemplate('pagina',$dados);
    }
}