<?php

class Model_Employes extends CI_Model{
    function getLesEmployes($numE){
           
        
         $sql = $this->db->select('*')->from('employer as e')->join('travailer as t','t.codeE=e.numE','left')->where('t.codeR',''.$numE.'');
         $sql = $this->db->get();
        $data = array();
        foreach ($sql->result() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }
    } 
