<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LogIn_model extends CI_model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function validar($username, $password)
    {
        // convierto el password a MD5 para comparar
        $pass = MD5($password);

        $this->db->where('nombreusuario', $username);
        $this->db->where('password', $pass);
        $query = $this->db->get('usuario');
        if ($query->num_rows() > 0 ){
            return $query->row();
        } else {
            return null;
        }
    }
}
?>
