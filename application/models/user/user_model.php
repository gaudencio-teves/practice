<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model{

    private $table;

    function __construct()
    {
        parent::__construct();
        $this->table = 'patient';
    }

    function login($username = null, $password = null){
        if($username != null && $password != null){
            $this->db->where('email_add =', $username);
            $this->db->where('password =', $password);
            $result = $this->db->get($this->table);
            if ($result->num_rows > 0) {
                //return $result->result_array();
                return $result->row_array();
            } else {
                return false;
            }
        }
        else{
            return false;
        }
    }
}
?>