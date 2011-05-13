<?php
class User_m extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->library('session');
    }
    /**
     *Returns the session variable "logged_in".
     * @return bool
     */
    function is_logged_in()
    {
        return $this->session->userdata('logged_in');
    }
    /**
     *  Returns the session variable "usr_id" or false if it is not defined.
     *  @return mixed
     */
    function get_user_id()
    {
        return $this->session->userdata('usr_id');
    }
    /**
     *  Returns the session variable "usr_unm" or false if it is not defined.
     *  @return mixed
     */
    function get_username()
    {
        return $this->session->userdata('usr_unm');
    }

    /**
     *  Returns sess_t view in case the user is logged in and the sess_f if he is not.
     *  @return string
     */
    function ajax_login()
    {
        //Si el usuario esta loggeado regresas la vista de sess_t con los datos del usuario (variables de sesión).
        if($this->__login()){
            $data['usr'] = $this->get_username();
            $data['usr_id'] = $this->get_user_id();
            $r = $this->load->view('modular/sess_t', $data);
            return $r;
        }
        //Si el usuario no esta loggeado regresas la vista de sess_f.
        else{
            $r = $this->load->view('modular/sess_f');
            return $r;
        }
    }

    /**
     * Creates user session if the information provided is correct.
     * @param string $l_unm, $l_pwd
     * @return bool.
     */
    function __login()
    {
        $this->db->where('usr',$this->input->post('l_unm'));
        $this->db->where('pwd',md5($this->input->post('l_pwd')));
        $q = $this->db->get('usr');
        //Si el número de resultados de el query es 1 (existe el usuario) se crea la sesión del usuario con su id y nombre de usuario.
        if($q->num_rows == 1)
        {
            $this->db->select('id,');
            $this->db->where('usr',$this->input->post('l_unm'));
            $uid = $this->db->get('usr');
            $newdata = array(
                   'usr_id'     => $uid->result(),
                   'usr_unm'   => $this->input->post('l_unm'),
                   'logged_in'  => TRUE
               );
            $this->session->set_userdata($newdata);
            return true;
        }
        else
            return false;
    }
    /**
     *  Evaluates if the Username is free to be used or not.
     *  @param array $rd
     *  @return bool
     */
    function __isUsernameFree($rd)
    {
        $usr = $_POST['r_usr'];
        $this->db->where('usr',$_POST['r_usr']);
        $q = $this->db->get('usr');
        if($q->num_rows != 0)
            return false;
        else
            return true;
    }
    /**
     *  Creates a Username, returns true on registration success.
     *  @param array $rd
     *  @return bool
     */
     function __create($rd)
    {
        $regData = array(   'nam'   => $this->input->post('r_nm'),
                            'l_n'   => $this->input->post('r_l_n'),
                            'eml'   => $this->input->post('r_eml'),
                            'usr'   => $this->input->post('r_usr'),
                            'pwd'   => md5($this->input->post('r_pwd')),
                            'crt'   => $this->input->post(date('d-m-y')));
        if($this->db->insert('usr',$regData))
        {
            return true;
        }
        else
        {
            return  false;
        }
    }
/**
    function get_last_ten_entries()
    {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }

    function insert_entry()
    {
        $this->title   = $_POST['title']; // please read the below note
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('entries', $this);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

    **/

}

?>
