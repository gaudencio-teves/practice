<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
    }
	public function index(){
        $photo_active = array(
            'photo_active' => $this->photo->get_active_from_service()
        );
        //var_dump($this->photo->get_active());
		/*$this->load->view('user/header');
        $this->load->view('user/carousel');
        $this->load->view('user/main', $photo_active);
        $this->load->view('user/footer');
        */

        $this->load->view('user/home', $photo_active);
	}
	public function welcome_message(){
		echo $this->input->post('alala');
	}
}