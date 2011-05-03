<?php
class User_m extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->library('session');
    }
    function is_logged_in(){
        
        if($this->session->userdata('usr_id')){
            return true;
        }
            return false;
    }

    function get_user_id(){
        return $this->session->userdata('usr_id');
    }
    
    function get_username(){
        return $this->session->userdata('usr_unm');
    }

    function get_last_ten_entries()
    {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }

    function ajx_login(){
        if($this->__login())
            return true;
        else {
            return false;
        }
    }

    function __login(){
        $this->db->where('usr',$this->input->post('l_unm'));
        $this->db->where('pwd',md5($this->input->post('l_pwd')));
        $q = $this->db->get('usr');
        if($q->num_rows == 0){
            return true;
        }else
            return false;
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
