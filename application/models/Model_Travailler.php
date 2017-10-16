<?php

class Model_Travailler extends CI_Model{
    function getNombresHeures(){
           $sql = $this->db->query("SELECT * FROM travailler ");
        return $sql->result(); 
    }
}