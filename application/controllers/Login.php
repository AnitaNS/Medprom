    <?php 
    defined('BASEPATH') OR exit('No direct script access allowed');  
    class Login extends CI_Controller{
    function __Construct(){  
    parent::__Construct();  
    $this->load->helper(array('form', 'url'));  
    $this->load->library(array('session', 'form_validation', 'email'));   
    $this->load->database();  
    $this->load->model('Login_model');  
    }  
    public function index()  
    {  
    $this->load->view('login');  
    }  
    public function login()
    {
    $this->load->view('login');
    }

    public function check_login()
    {
    $email = $_POST['email'];
    $pass = hash('md5', $_POST['password']);

    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');

    if($this->form_validation->run() == FALSE)
    {
        $this->load->view('login');
    }
    else
    {
        $res = $this->Login_model->check_user($email , $pass);
        if(!empty($res))
        {
            if($res[0]['status'] == '1')
            {
                $data['user'] = $res[0]['fname'];
                $this->setSession($res[0]['id'],$res[0]['fname']);
                //$this->load->view('profile', $data);
                redirect(base_url().'A_aftr');
            }
            else
            {
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Verify your email address first to login...</div>');
                redirect(base_url().'login/login');
            }
        }
        else
        {
            $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">email/password not found</div>');
            redirect(base_url().'login/login');
        }
    }
    }

    function setSession($userId,$userName) {

    $userSession = array('userId'=>$userId,
       'userName'=>$userName,
       'loggedIn'=>TRUE );
    $this->session->set_userdata($userSession);
    }

    function logout(){
    $this->session->sess_destroy();
    redirect(base_url().'W_web', 'refresh');
    }
    }
