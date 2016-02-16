<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Endofday extends CI_Controller {

    function __construct()
	{
		parent::__construct();
        $this->load->model('eod_model');
        $this->load->library('form_validation');
        $this->load->helper('date');
        
        
	}
	public function index()
	{
		redirect('Endofday/login');
	}
    
    public function registration()
	{
        $data['position']=$this->eod_model->get_position();
        
        
        $this->form_validation->set_rules('name','name', 'trim|required|min_length[3]|is_unique[e_reg.e_username]');
        $this->form_validation->set_rules('sample-radio','Gender', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('position','position', 'trim|required|callback_check_select');
        $this->form_validation->set_rules('email','email', 'trim|required|valid_email|is_unique[e_reg.e_email]');
        $this->form_validation->set_rules('password','password', 'trim|required|matches[cnf_password]');
        $this->form_validation->set_rules('cnf_password','name', 'trim|required|min_length[3]');
		
        if ($this->form_validation->run() == FALSE)
        {
		     $this->load->view('eod/registration-view', $data); 
		}
        else
        {
            $this->eod_model->registration();
            $this->eod_model->reg_events();
            redirect('');
            
        }
	}
    public function dashboard()
	{
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['id'] = $session_data['id'];
            $data['project']=$this->eod_model->get_project();
            
            
            $this->form_validation->set_rules('date', 'date', 'trim|required');
            $this->form_validation->set_rules('module', 'module', 'trim|required');
            $this->form_validation->set_rules('msg', 'Message', 'trim|required');
            $this->form_validation->set_rules('working', 'working', 'trim|required|callback_check_select');
            $this->form_validation->set_rules('project', 'project', 'trim|required|callback_check_select');
            $this->form_validation->set_rules('status', 'status', 'trim|callback_check_select');
 
            if($this->form_validation->run() == FALSE)
            {
                $data['status']=$this->eod_model->get_status();
                $data['user_wrk']=$this->eod_model->report($data['id']);
                $data['notify']=$this->eod_model->user_notification($data['id']);
                if($this->input->post('working')=="Leave")
                {
                    $data_1=$this->eod_model->get_position_id($data['id']);               
                    $this->eod_model->work($data['id'],$data_1);
                    redirect('Endofday/dashboard', 'refresh');  
                }
                else
                {
                    $this->load->view('eod/dashboard-view', $data);
                }
            }
            else
            {
                
                $data_1=$this->eod_model->get_position_id($data['id']);               
                $this->eod_model->work($data['id'],$data_1);
                redirect('Endofday/dashboard', 'refresh');
            }
        }
        else
        {
            redirect('', 'refresh');
        }
	}
    
    public function login()
    {
        $data['signin']="User ";
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
 
        if($this->form_validation->run() == FALSE)
        {
     //Field validation failed.  User redirected to login page
            $this->load->view('eod/login-view',$data);
        }
        else
        {
     //Go to private area
            redirect('Endofday/dashboard', 'refresh');
        }
    }
    
    function check_database($password)
    {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');
 
        //query the database
           $result = $this->eod_model->login($username, $password);

           if($result)
           {
             $sess_array = array();
             foreach($result as $row)
             {
               $sess_array = array(
                 'id' => $row->e_id,
                 'username' => $row->e_username,
               );
               $this->session->set_userdata('logged_in', $sess_array);
             }
             return TRUE;
           }
       else
       {
         $this->form_validation->set_message('check_database', 'Invalid username or password');
         return false;
       }
     }
    
    
     function check_select($check)
    {
        if($check=="0")
        {
           $this->form_validation->set_message('check_select', 'Select the value');
            return FALSE; 
        }
       else
        {
            return TRUE;
        }
     }
    function logout()
     {
       $this->session->unset_userdata('logged_in');
       session_destroy();
       redirect('', 'refresh');
     }
    
        

}
