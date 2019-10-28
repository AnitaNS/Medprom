<?php 
 
class M_konfirm extends CI_Model{
	function tampil_data(){
		return $this->db->get('konfirm');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}