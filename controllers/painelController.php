<?php
class painelController extends Controller{
    public function _construct(){
        parent::__construct();
    }

    public function index($url){
        $dados = array();
        $this->loadTemplate('pagina',$dados);
    }
}