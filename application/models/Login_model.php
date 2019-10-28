 <?php  
  defined('BASEPATH') OR exit('No direct script access allowed');  
  class Login_model extends CI_Model  
  {

  public function logged_id()
    {
        return $this->session->userdata('id');
    }  
   public function check_user($email,$pass)
  {
    $sql = "SELECT status , id , fname FROM user where email = ? and password = ?";
    $data = $this->db->query($sql, array($email,$pass));
        return ($data->result_array()) ;
  }
  public function get_all_post(){
    $hasil=$this->db->get('post');
    return $hasil->result();
  }

}