<?php 
 
class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('peserta');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}