<?php 
 
class M_userpost extends CI_Model{
	function tampil_data(){
		$this->db->select('*');
    $this->db->from('post');
        $query = $this->db->get();
      return $result = $query->result();
	}
 
	function input_data($data,$table){
		$this->db->insert($data,$table);
	}

	public function uploadImage($id,$lokasi)
    {
      $config['upload_path']          = "./uploads/$lokasi/";
      $config['allowed_types']        = 'gif|jpg|jpeg|png';
      $config['file_name']            = $id;
      $config['overwrite']		      	= true;
      $config['max_size']             = 5024; // 5MB
      // $config['max_width']            = 1024;
      // $config['max_height']           = 768;

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('userfile')) {
        return $this->upload->data("file_name");
      }

      return "default.jpg";
    }

    public function getAll($table)
    {
        $res=$this->db->get($table); // Kode ini berfungsi untuk memilih tabel yang akan ditampilkan
        return $res->result_array(); // Kode ini digunakan untuk mengembalikan hasil operasi $res menjadi sebuah array
    }

//this for get user from database
    public function get_post($key,$val)
    {
      $query = $this->db->get_where('post',array($key=>$val ));
      if (!empty($query->row_array())) {
        return $query->row_array();
      }
      return false;
    }

}

