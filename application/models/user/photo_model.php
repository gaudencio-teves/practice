<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class photo_model extends CI_Model{

    private $table;

    function __construct()
    {
        parent::__construct();
        $this->table = 'photo';
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

    function get_photo_from_id_and_from($from_id, $service){
        $this->db->where('status =', 'active');
        $this->db->where('from =', 'service');
        $this->db->where('from_id =', $from_id);
        $result = $this->db->get($this->table);
        if ($result->num_rows > 0) {
            return $result->result_array();
        } else {
            return null;
        }
    }
}
?>