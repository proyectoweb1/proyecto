<?php 
class User_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function authenticate($username, $password)
    {
        // convierto el password a MD5 para comparar
        $password = MD5($password);

        $this->db->where('nombreusuario', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('usuario');
        if ($query->num_rows() > 0 ){
            return $query->row();
        } else {
            return null;
        }
    }

    function get_user($username) {
        $this->db->where('nombreusuario', $username);
        $query = $this->db->get('usuario');
        return $query->row();
    }

    function get_user_by_username($username) {
        return $this->get_user($username);
    }

    function get_user_by_id($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        return $query->row();
    }


    function get_all() {
        $query = $this->db->get('users');
        return $query->result();
    }

}

?>