<?php
class Girl {
    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function getGirls($offset, $no_of_records_per_page){


        // $this->db->query('SELECT * FROM girl ORDER BY id DESC LIMIT :offset, :no_of_records_per_page');
        
        $this->db->query('SELECT * FROM girl LIMIT :offset, :no_of_records_per_page');
        //Bind values
        $this->db->bind(':offset',$offset);
        $this->db->bind(':no_of_records_per_page', $no_of_records_per_page);

        $results = $this->db->resultSet();

        return $results;
    }
}