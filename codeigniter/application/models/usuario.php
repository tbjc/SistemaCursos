<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Model {
	function ObtenerUsuario($usuario){
		$this->db->from('usuario');
		$this->db->where('user',$usuario);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return null;
		}
		
	}
}
