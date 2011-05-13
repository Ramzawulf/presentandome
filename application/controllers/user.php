<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
	}

	function index()
	{
            /**
            $this->load->model('user_m','u');
            if($this->u->is_logged_in())
                $u_a = 'modular/sess_t';
            else
                $u_a = 'modular/sess_f';

            $data = array(  'title'         =>  "Título de la página principal",
                            'user_activity' =>  $u_a
                );

            if ($this->u->is_logged_in()) {
                $data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();
		}

            $this->load->view('main_v', $data);
**/
	}

        function a_login(){
            $this->load->model('user_m','u');
            return $this->u->ajax_login();
        }

        function registration(){
            $log = '';
            $reg_data = array(  'name'      =>  $this->input->post('r_nm'),
                                'l_names'   =>  $this->input->post('r_l_n'),
                                'email'     =>  $this->input->post('r_eml'),
                                'username'  =>  $this->input->post('r_usr'),
                                'password'  =>  $this->input->post('r_pwd'));

            $this->load->model('user_m','u');
            //Evalúa si el usuario esta libre.
            if($this->u->__isUsernameFree($reg_data)){
                $log .= 'UN libre ';
                //Evalúa si se realizó exitosamente el registro del usuario.
               if($this->u->__create($reg_data)){
                   //Prepara los datos a presetnar en la página de confirmación.
                   $data=array( 'name' => $reg_data['name'] . $reg_data['l_names'],
                                'email' => $reg_data['email'],
                                'username' => $reg_data['username']);
                   $this->load->view('confirmation_v', $data);
               }
               //Si la creación de usuario falló redirige a la vista de error.
               else{
                   $log .= 'No se registró';
                   $data=array( 'error'                 =>'error/err_user_creation',
                                //'title'                 => 'Error al crear Usuario');
                                'title'                 => $log);
                   $this->load->view('error_v', $data);
               }

            }
            else{
                $data=array('error'=>'error/err_username_na',
                            'title'=> 'Nombre de usuario no disponible');
                $this->load->view('error_v', $data);
            }
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */