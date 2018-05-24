<?php

class Menu extends Model{

    public function getMenu(){
        $dados = array();
        $sql = "SELECT `name`, `url`, `class` FROM `menu`;";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $dados = $sql->fetchAll();
        }
        return $dados;
    }
}