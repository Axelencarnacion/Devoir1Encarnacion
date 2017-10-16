<?php
class Model_Secteur extends CI_Controller{
    
    public function GetAllSecteur(){
        
      $sql = $this->db->get('secteur');
        foreach ($sql->result() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }
}
