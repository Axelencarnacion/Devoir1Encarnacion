<?php

class Model_Agents extends CI_Model
{
    public function getEmployerById($numEmployer)
    {
        $sql = $this->db->select('*')->from('employer as e')->join('travailler as t','t.codeE=e.numE','left')->where('t.codeR',''.$numEmployer.'');
        $sql = $this->db->get();
        $data = array();
        foreach ($sql->result() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }
}

