<?php
class Config extends Model{

    public function getConfig(){

        $dados = array();
        $sql = "SELECT * FROM config;";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            foreach($sql->fetchAll() as $c){
                $dados[$c['name']] = $c['value'];
            }
        }
        return $dados;
    }
}