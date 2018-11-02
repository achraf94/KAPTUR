<?php

Class Project_model extends CI_Model {
    public function __construct() {
        parent::__construct();

    }


    public function getIssues(){
    $sql = "select * from issues";
    return $this->db->query($sql)->result();
     
    }
    public function getDecision(){
        $sql = "select * from Decisions";
        return $this->db->query($sql)->result();
         
        }
        public function getRisks(){
            $sql = "select * from Risks";
            return $this->db->query($sql)->result();
             
            }
}