<?php
class User_m extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->library('session');
    }
    function is_logged_in(){
        return $this->session->userdata('logged_in');
    }

    function get_user_id(){
        return $this->session->userdata('usr_id');
    }
    
    function get_username(){
        return $this->session->userdata('usr_unm');
    }

    /**
     *
     * @return String que contiene la vista de usuario logeado o no
     */

    function ajax_login(){
        if($this->__login()){
            $data['usr'] = $this->session->userdata('usr_unm');
            $data['usr_id'] = $this->session->userdata('usr_id');
            $r = $this->load->view('modular/sess_t');
            return $r;
        }
        else{
            $r = $this->load->view('modular/sess_f');
            return $r;
        }
    }

    function __login(){
        $this->db->where('usr',$this->input->post('l_unm'));
        $this->db->where('pwd',md5($this->input->post('l_pwd')));
        $q = $this->db->get('usr');
        if($q->num_rows == 1){
            $this->db->select('id,');
            $this->db->where('usr',$this->input->post('l_unm'));
            $uid = $this->db->get('usr');
            $newdata = array(
                   'usr_id'     => $uid,
                   'usr_unm'   => $this->input->post('l_unm'),
                   'logged_in'  => TRUE
               );
            $this->session->set_userdata($newdata);
            return true;
        }
        else
            return false;
    }

    function __isUsernameFree($rd){
        $this->db->where('usr',$rd['username']);
        $this->db->where('pwd',md5($rd['password']));
        $q = $this->db->get('usr');
        if($q->num_rows == 1)
            return true;
        else
            return false;
    }

    function __create($rd){

    }


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

    

}

?>
