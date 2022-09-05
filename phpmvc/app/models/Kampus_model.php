<?php 

class Kampus_model {
    private $table = 'kampus';
    private $db;
    public function __construct() 
    {
        $this->db = new Database;
    }
    public function getAllKampus() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getKampusById($id){
        $this->db->query('SELECT * FROM ' . $this->table . '  WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    
}