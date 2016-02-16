<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    function __construct()
	{
		parent::__construct();
        $this->load->model('eod_model');
        $this->load->library('form_validation');
        $this->load->helper('date');
        $this->load->dbutil();
        $this->load->helper('download');
        
	}
	public function index()
	{
		redirect('admin/admin_login');
	}
    
    public function admin_login()
    {
        $data['signin']="Admin ";
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database_admin');
 
        if($this->form_validation->run() == FALSE)
        {
     //Field validation failed.  User redirected to login page
            $this->load->view('eod/login-view',$data);
        }
        else
        {
     //Go to private area
            redirect('admin/dashboard', 'refresh');
        }
    }
    
    public function dashboard()
	{
        if($this->session->userdata('logged_admin'))
        {
            $session_data = $this->session->userdata('logged_admin');
            $data['username'] = $session_data['username_admin'];
            $data['id'] = $session_data['id_admin'];
            $data['position']=$this->eod_model->get_position();
            
            $data['not_sent']=$this->eod_model->not_sent();
            $data['user_wrk']=$this->eod_model->admin_report();
            $data['user_name']=$this->eod_model->admin_user_name();
            $data['project']=$this->eod_model->get_project();
            $data['status']=$this->eod_model->get_status();
            
            if($this->input->post('sub')=="Generate")
            {
                $position=$this->input->post('position');
                $username=$this->input->post('username');
                $project=$this->input->post('project');
                $status=$this->input->post('status');
                $from=$this->input->post('from');
                $to=$this->input->post('to');
               $data['user_wrk']=$this->eod_model->get_project_search($position,$username,$project,$status,$from,$to);
               $this->load->view('admin/dashboard-admin', $data); 
            }
            else if($this->input->post('sub')=="Export to CSV")
            {
                $position=$this->input->post('position');
                $username=$this->input->post('username');
                $project=$this->input->post('project');
                $status=$this->input->post('status');
                $from=$this->input->post('from');
                $to=$this->input->post('to');
                $download=$this->eod_model->get_project_export($position,$username,$project,$status,$from,$to);
                $name_d = 'EOD-Status-Report.csv';
                force_download($name_d, $download);
                $this->load->view('admin/dashboard-admin', $data);
                
            }else
            {
                $this->load->view('admin/dashboard-admin', $data);
            }
            
            
            
        }
        else
        {
            redirect('', 'refresh');
        }
	}
    
    
    
    
    
    function check_database_admin($password)
    {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');
 
        //query the database
           $result = $this->eod_model->admin_login($username, $password);

           if($result)
           {
             $sess_array = array();
             foreach($result as $row)
             {
               $sess_array = array(
                 'id_admin' => $row->e_id,
                 'username_admin' => $row->e_username
               );
               $this->session->set_userdata('logged_admin', $sess_array);
             }
             return TRUE;
           }
       else
       {
         $this->form_validation->set_message('check_database_admin', 'Invalid username or password');
         return false;
       }
     }
    
    function logout_admin()
     {
       $this->session->unset_userdata('logged_admin');
       session_destroy();
       redirect('admin/admin_login', 'refresh');
     }
    
}