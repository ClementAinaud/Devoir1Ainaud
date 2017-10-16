<?php

class Model_Employes extends CI_Model{
    function getLesEmployes($numE){
           
        
         $sql = $this->db->select('prenomE,date,temps')->from('employe,travailer')->where('codeE=numE');
         $sql = $this->db->get();
        $data = array();
        foreach ($sql->result() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }
    } 
