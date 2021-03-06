<?php

class M_inspectors extends CI_Model {

public $authorityId;
public $sbeId;
public $dateFr;
public $dateTo;

public function __construct()
{
        $this->load->database();
}
public function getAllData()
{       
        $this->db->join('sbe','sbe.Id_sbe = inspectors.SbeId');
        $this->db->join('authority','authority.Id_au = inspectors.AuthorityId');
        $query = $this->db->get("inspectors");

        return $query->result();
}
/*
public function insert_entry()
{
        $this->title    = $_POST['title']; // please read the below note
        $this->content  = $_POST['content'];
        $this->date     = time();

        $this->db->insert('entries', $this);
}

public function update_entry()
{
        $this->title    = $_POST['title'];
        $this->content  = $_POST['content'];
        $this->date     = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
}
*/
}