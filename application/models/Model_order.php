<?php 
 
class Model_order extends CI_Model{
	function tampil_data(){
		return $this->db->get('ordered');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}