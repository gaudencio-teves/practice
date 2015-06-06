<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct(){
        parent::__construct();
        // Your own constructor code
        $this->load->model('user/photo_model','photo');
        $this->load->model('user/user_model');
        $this->load->library('encrypt');
    }
    public function index(){
        $photo_active = array(
            'photo_active' => $this->photo->get_active_from_service()
        );
        //var_dump($this->photo->get_active());
        $this->load->view('user/header');
        $this->load->view('user/carousel');
        $this->load->view('user/main', $photo_active);
        $this->load->view('user/footer');
    }
    public function welcome_message(){
        echo $this->input->post('alala');
    }

    public function login(){
        $username = $this->input->post('username');
        $password = $this->encrypt->sha1($this->input->post('passsword'));
        //var_dump($password);exit;
        $result['result'] = $this->user_model->login($username, $password);
        if($result && is_array($result)){
            $this->session->set_userdata($result);
            //var_dump($this->session->userdata('result'));exit;
            redirect(base_url());
        }
        else{
            redirect(base_url()."?message=0");
        }
    }

    public function logout(){
        $this->session->sess_destroy('result');
        redirect(base_url());
    }
}