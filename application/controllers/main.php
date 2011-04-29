<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}

	function index()
	{
            if($this->tank_auth->is_logged_in())
                $u_a = 'modular/sess_t';
            else
                $u_a = 'modular/sess_f';

            $data = array(  'title'         =>  "Título de la página principal",
                            'user_activity' =>  $u_a
                );

            if ($this->tank_auth->is_logged_in()) {
                $data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();
		}

            $this->load->view('main_v', $data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */