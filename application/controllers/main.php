<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
	}

	function index()
	{
            $this->load->model('user_m', 'u');
            if($this->u->is_logged_in())
                $u_a = 'modular/sess_t';
            else
                $u_a = 'modular/sess_f';

            $data = array(  'title'         =>  "Título de la página principal",
                            'user_activity' =>  $u_a
                );

            if ($this->u->is_logged_in()) {
                $data['user_id']	= $this->u->get_user_id();
		$data['username']	= $this->u->get_username();
		}

            $this->load->view('main_v', $data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */