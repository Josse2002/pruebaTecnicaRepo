<?php
class printer_model extends CI_Model {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_printers()
    {
        $query = $this->db->query("EXEC get_impresoras");
        return $query->result();
    }
}
   