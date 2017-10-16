<?php

class Ctrl_Accueil extends CI_Controller
{
    public function index(){
        $this->load->model('Model_Secteur');
        $data['lesSecteurs'] = $this->Model_Secteur-> getALLSecteur();
        $this->load->view('v_Secteur',$data);
    }
//    public function afficherSecteur()
//    {
//        $idSecteur = $_GET['idSecteur'];
//        $this->load->model('Model_Secteur');
//        $data['lesSecteurs']=$this->Model_Secteur->GetAllSecteur($idSecteur);
//        $this->load->view('v_Secteur',$data);
//    }
    
   public function getLesRayons(){
      $numSecteur = $_GET['numSecteur'];
      $this->load->model('Model_Rayon') ;
      $data['lesRayons'] = $this->Model_Rayon->GetAllRayon($numSecteur);
      $this->load->view('v_Rayon',$data);
    }
    function getLesEmployes()
    {
        $idFormation = $_GET['numEmployer'];
        $this->load->model('Model_Employer');
        $data['lesEmployes']=$this->Model_Employer->getEmployerById($numEmployer);
        $this->load->view('v_Employe',$data);
    }
}