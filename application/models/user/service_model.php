<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class service_model extends CI_Model{

    private $table;

    function __construct()
    {
        parent::__construct();
        $this->table = 'service';
    }

    function get_all()
    {
        $result = $this->db->get($this->table);
        if ($result->num_rows > 0) {
            return $result->result_array();
        } else {
            return false;
        }
    }

    function get_active()
    {
        $this->db->where('status =', 'active');
        $result = $this->db->get($this->table);
        if ($result->num_rows > 0) {
            return $result->result_array();
        } else {
            return false;
        }
    }
    function get_active_from_service()
    {
        $this->db->where('status =', 'active');
        $this->db->where('from =', 'service');
        $result = $this->db->get($this->table);
        if ($result->num_rows > 0) {
            return $result->result_array();
        } else {
            return false;
        }
    }
}
?>