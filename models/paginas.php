<?php

class Paginas extends Model{
    public function getPagina($url){
        $dados = array();

        $sql = $this->db->prepare('SELECT title, body FROM pages WHERE url = :url');
        $sql->bindValue(':url', $url, PDO::PARAM_STR);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch();
        }
        return $dados;
    }
}