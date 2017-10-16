<?php
class Model_Rayon extends CI_Controller
{
    
    public function GetAllRayon($numSecteur){
      $sql = $this->db->select('*')->from('rayon')->where('numSecteur',$numSecteur);
        $sql = $this->db->get();
        foreach ($sql->result() as $row)
        {
            $data[] = $row;
        }
        return $data;  
      
    }
}