<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('loginmodel');
    }

    public function index()
    {
        if ($this->session->userdata('admin_id') != null) {
            redirect('http://localhost/renata/profile/index');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            if ($this->form_validation->run('userlogin_check')) {
                $result = $this->loginmodel->lcheck($email, $password);
                if ($result) {
                    if($result[0]->status==1)
                    {
                        $sess_data = array('login' => true, 'admin_name' => $result[0]->admin_name, 'admin_id' => $result[0]->admin_id,'admin_role'=>$result[0]->tbl_admin_role_role_id);
                        $this->session->set_userdata($sess_data);
                        //redirect('profile/index');
                        $data['message'] = '';
                        $this->load->view('view_home',$data);
                    }
                    else
                    {
                        $data['message'] = 'Your account is Deactivated!!!';
                        $this->load->view('view_login', $data);
                    }
                } else {
                    $data['message'] = 'Invalid User Name/Password!!!';
                    $this->load->view('view_login', $data);
                }
            } else {
                $data['message'] = '';
                $this->load->view('view_login', $data);
            }
        }
    }
}