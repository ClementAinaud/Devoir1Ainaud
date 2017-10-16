<?php

class Model_Employes extends CI_Model{
    function getLesEmployes(){
           
          $sql = $this->db->select('*')->from('employe');
          $sql = $this->db->get();
        $data = array();
        foreach ($sql->result() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }
    } 
