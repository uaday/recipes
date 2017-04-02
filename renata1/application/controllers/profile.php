<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('usermodel');
    }

    public function index()
    {
       $data['admin_name']=$this->session->userdata('admin_name');
       $data['admin_id']=$this->session->userdata('admin_id');
       if($data['admin_id']!=null)
       {
           $this->load->view('view_home',$data);
       }
       else
       {
           redirect('http://localhost/renata/login/index');
       }

    }
    public function add_doc()
    {
       $data['admin_name']=$this->session->userdata('admin_name');
       $data['admin_id']=$this->session->userdata('admin_id');
       if($data['admin_id']!=null)
       {
           $this->load->view('view_home',$data);
           $this->load->view('view_add_doc');
       }
       else
       {
           redirect('http://localhost/renata/login/index');
       }

    }
    public function manage_cat()
    {
        if($this->session->userdata('error')!=null)
        {
            $data['message']=$this->session->userdata('error');
        }
        else
        {
            $data['message']='';
        }
        $data['cats'] = $this->categorymodel->getAll();
       $data['admin_name']=$this->session->userdata('admin_name');
       $data['admin_id']=$this->session->userdata('admin_id');
       if($data['admin_id']!=null)
       {
           $this->load->view('view_home',$data);
           $this->load->view('view_manage_category',$data);
       }
       else
       {
           redirect('http://localhost/renata/login/index');
       }

    }
    public function add_man()
    {

       $data['admin_name']=$this->session->userdata('admin_name');
       $data['admin_id']=$this->session->userdata('admin_id');
       if($data['admin_id']!=null)
       {
           $this->load->view('view_home',$data);
           $this->load->view('view_add_manufacture');
       }
       else
       {
           redirect('http://localhost/renata/login/index');
       }

    }
    public function manage_man()
    {
        if($this->session->userdata('error')!=null)
        {
            $data['message']=$this->session->userdata('error');
        }
        else
        {
            $data['message']='';
        }
        $data['mans'] = $this->manufacturemodel->getAll();
       $data['admin_name']=$this->session->userdata('admin_name');
       $data['admin_id']=$this->session->userdata('admin_id');
       if($data['admin_id']!=null)
       {
           $this->load->view('view_home',$data);
           $this->load->view('view_manage_manufacture',$data);
       }
       else
       {
           redirect('http://localhost/renata/login/index');
       }

    }
    public function add_pro()
    {
       $data['cats']=$this->categorymodel->getAll();
       $data['mans']=$this->manufacturemodel->getAll();
       $data['admin_name']=$this->session->userdata('admin_name');
       $data['admin_id']=$this->session->userdata('admin_id');
       if($data['admin_id']!=null)
       {
           $this->load->view('view_home',$data);
           $this->load->view('view_add_product',$data);
       }
       else
       {
           redirect('http://localhost/renata/login/index');
       }

    }
    public function manage_pro()
    {
        if($this->session->userdata('error')!=null)
        {
            $data['message']=$this->session->userdata('error');
        }
        else
        {
            $data['message']='';
        }
        $data['pros'] = $this->productmodel->getAll();
        $data['admin_name']=$this->session->userdata('admin_name');
        $data['admin_id']=$this->session->userdata('admin_id');
        if($data['admin_id']!=null)
        {
            $this->load->view('view_home',$data);
            $this->load->view('view_manage_product',$data);
        }
        else
        {
            redirect('http://localhost/renata/login/index');
        }

    }
    public function logout()
    {
        $data=array('login'=>'','admin_name'=>'','admin_id'=>'','admin_role'=>'');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
        redirect('http://localhost/renata/login/index');
    }
}