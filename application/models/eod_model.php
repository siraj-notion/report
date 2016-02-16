<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class eod_model extends CI_Model
{
   
    private $r_name = 'e_reg';
    private $w_name = 'e_work';
    private $admin_name = 'e_admin';
   
     public function __construct()
    {
        $this->load->database();
         $this->load->library('session');
         $this->load->helper('file');
    }
    
    public function get_position()
    {
        $query = $this->db->get('e_position');
        return $query->result_array();
    }
    public function get_project()
    {
        $query = $this->db->get('e_proj');
        return $query->result_array();
    }
    
     public function get_status()
    {
        $query = $this->db->get('status');
        return $query->result_array();
    }
     public function admin_user_name()
    {
        $query = $this->db->get('e_reg');
        return $query->result_array();
    }
    
    public function registration()
    {
        $this->db->set('e_username', $this->input->post('name'));
        $this->db->set('e_gender', $this->input->post('sample-radio'));
        $this->db->set('e_position', $this->input->post('position'));
        $this->db->set('e_email', $this->input->post('email'));
        $this->db->set('e_password', $this->input->post('password'));
        $this->db->set('e_created',date('Y-m-d H:i:s'));
        return $this->db->insert($this->r_name);
    }
    
     function login($username, $password)
    {
        $this -> db -> select('e_id, e_username,e_password');
        $this -> db -> from($this->r_name);
        $this -> db -> where('e_username', $username);
        $this -> db -> where('e_password', $password);
        $this -> db -> limit(1);
 
        $query = $this -> db -> get();
 
        if($query -> num_rows() == 1)
        {
            $this->db->set('e_last_login',date('Y-m-d H:i:s'));
            $this->db->where('e_username', $username);
            $this->db->update($this->r_name);
            
            return $query->result();
            
            
        }
        else
        {
            return false;
        }
    }
    
    function admin_login($username, $password)
    {
        $this -> db -> select('e_id, e_username,e_password');
        $this -> db -> from($this->admin_name);
        $this -> db -> where('e_username', $username);
        $this -> db -> where('e_password', $password);
        $this -> db -> limit(1);
 
        $query = $this -> db -> get();
 
        if($query -> num_rows() == 1)
        {
            $this->db->set('e_last_login',date('Y-m-d H:i:s'));
            $this->db->where('e_username', $username);
            $this->db->update($this->admin_name);
            
            return $query->result();
            
            
        }
        else
        {
            return false;
        }
    }
    
    function work($id,$pos)
    {
        $proj_s= $this->input->post('project');
        $status_s= $this->input->post('status');
        $module_s=$this->input->post('module');
        $details_s=$this->input->post('msg');
        if($proj_s==NULL)
        {
            $proj_s="-1";
            $status_s=4;
            $details_s="";
            $module_s="";
        }
        $this->db->set('u_id',$id);
        $this->db->set('u_position',$pos);
        $this->db->set('w_date', $this->input->post('date'));
        $this->db->set('w_working', $this->input->post('working'));
        $this->db->set('w_proj',$proj_s);
        $this->db->set('w_module',$module_s);
        $this->db->set('w_status', $status_s);
        $this->db->set('w_details',$details_s);
        $this->db->set('w_date_created',date('Y-m-d H:i:s'));
        $this->db->set('w_date_modified',date('Y-m-d H:i:s'));
        $this->db->set('flag',1);
        $this->db->set('sys_flag',1);
        
        $this->db->where('sys_date',date('Y-m-d'));
        $this->db->where('u_id',$id);
        return $this->db->update($this->w_name);
    }
    function get_position_id($id)
    {
        $this->db->where('e_id', $id);
        $query = $this->db->get($this->r_name);
        $row = $query->row_array();

        if (isset($row))
        {
            $pos=$row['e_position'];
            
        }
        
        return $pos;
    }
     
    function report($user_id)
    {
        $query = $this->db->query('SELECT e_work.w_id, e_work.u_id, e_work.w_date, e_work.w_working, e_work.w_proj, e_work.w_module, e_work.w_status, e_work.w_details, e_work.w_date_created, e_work.w_date_modified, e_proj.e_proj_name,status.s_name FROM e_work LEFT JOIN e_proj ON e_work.w_proj=e_proj.e_id INNER JOIN status ON e_work.w_status=status.s_id where e_work.u_id='.$user_id.' ORDER BY e_work.w_id DESC');

        return $query->result_array();
        
    }
    function admin_report()
    {
        $query = $this->db->query('SELECT 
e_work.w_id, e_work.u_id, e_work.w_date, e_work.w_working, e_work.w_proj, e_work.w_module, 
e_work.w_status, e_work.w_details, e_work.w_date_created, e_work.w_date_modified, 
e_proj.e_proj_name,status.s_name ,e_reg.e_username
FROM e_work 
LEFT JOIN e_proj ON e_work.w_proj=e_proj.e_id 
INNER JOIN status ON e_work.w_status=status.s_id 
INNER JOIN e_reg ON e_work.u_id=e_reg.e_id
ORDER BY e_work.w_id DESC');
        
        
        
        return $query->result_array();
        
    }
    
    function get_project_search($position,$username,$project,$status,$from,$to)
    {
        if($project=="0")
            $project=" IS NOT NULL";
        else
            $project="=".$project."";
        
        
        if($position=="0")
            $position=" IS NOT NULL";
        else
            $position="=".$position."";
        
         if($username=="0")
            $username=" IS NOT NULL";
        else
            $username="=".$username."";
        
        
        if($status=="0")
            $status=" IS NOT NULL";
        else
            $status="=".$status."";
        
        if($from=="")
            $from=" IS NOT NULL";
        else
            {
                $bad_date =$from;
                $better_date = nice_date($bad_date, 'Y-m-d');
                $from=">='".$better_date."'";
            }
            
        
        if($to=="")
            $to=" IS NOT NULL";
        else
            {
                $bad_date_1 =$to;
                $better_date_1 = nice_date($bad_date_1, 'Y-m-d');
                $to="<='".$better_date_1."'";
            }
        
        $query = $this->db->query('SELECT e_work.w_id, e_work.u_id, e_work.w_date, 
e_work.w_working, e_work.w_proj, e_work.w_module,
 e_work.w_status, e_work.w_details, e_work.w_date_created,
 e_work.w_date_modified, e_proj.e_proj_name,status.s_name ,
 e_reg.e_username,e_position.p_name 
 FROM e_work 
 LEFT JOIN e_proj ON e_work.w_proj=e_proj.e_id 
 INNER JOIN status ON e_work.w_status=status.s_id 
 INNER JOIN e_reg ON e_work.u_id=e_reg.e_id 
 INNER JOIN e_position ON e_work.u_position=e_position.p_id 
 where e_work.w_proj'.$project.' AND
 e_work.w_status'.$status.' AND
 e_work.u_position'.$position.' AND
 e_work.u_id'.$username.' AND 
 e_work.w_date_created'.$from.' AND 
 e_work.w_date_created'.$to.' 
 ORDER BY e_work.w_id DESC');
        
            return $query->result_array();
    }
    
    
    function get_project_export($position,$username,$project,$status,$from,$to)
    {
        if($project=="0")
            $project=" IS NOT NULL";
        else
            $project="=".$project."";
        
        
        if($position=="0")
            $position=" IS NOT NULL";
        else
            $position="=".$position."";
        
         if($username=="0")
            $username=" IS NOT NULL";
        else
            $username="=".$username."";
        
        
        if($status=="0")
            $status=" IS NOT NULL";
        else
            $status="=".$status."";
        
        if($from=="")
            $from=" IS NOT NULL";
        else
            {
                $bad_date =$from;
                $better_date = nice_date($bad_date, 'Y-m-d');
                $from=">='".$better_date."'";
            }
            
        
        if($to=="")
            $to=" IS NOT NULL";
        else
            {
                $bad_date_1 =$to;
                $better_date_1 = nice_date($bad_date_1, 'Y-m-d');
                $to="<='".$better_date_1."'";
            }
        
        $query = $this->db->query('SELECT e_reg.e_username as Name,
 e_work.w_date as Date,
 e_position.p_name as Position,
 e_work.w_working as Working,
 e_proj.e_proj_name as ProjectName,
 e_work.w_module as Module,
 status.s_name as Status,
 e_work.w_details as Description,
 e_work.w_date_created as Created,
 e_work.w_date_modified as Modified
 FROM e_work 
 LEFT JOIN e_proj ON e_work.w_proj=e_proj.e_id 
 INNER JOIN status ON e_work.w_status=status.s_id 
 INNER JOIN e_reg ON e_work.u_id=e_reg.e_id 
 INNER JOIN e_position ON e_work.u_position=e_position.p_id 
 where e_work.w_proj'.$project.' AND
 e_work.w_status'.$status.' AND
 e_work.u_position'.$position.' AND
 e_work.u_id'.$username.' AND 
 e_work.w_date_created'.$from.' AND 
 e_work.w_date_created'.$to.' 
 ORDER BY e_work.w_id DESC');
       
            $write_w=$this->dbutil->csv_from_result($query);
            
        return $write_w;
        
    }
    
    function reg_events()
    {
        $test="";
        $test_2="";
        if($this->db->query("DROP EVENT `e_schl`"))
        {
            
        }
        $query = $this->db->query("SELECT * FROM `e_reg`");
        
        foreach ($query->result_array() as $row)
        {
                $test .= "(NULL, '".$row['e_id']."', '".$row['e_position']."', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0','0', now()),";
            
        }
       $test=rtrim($test, ",");
       $query_1="CREATE DEFINER=`root`@`localhost` EVENT `e_schl` ON SCHEDULE EVERY 1 DAY STARTS '2016-02-15 00:00:00.000000' ON COMPLETION PRESERVE ENABLE DO INSERT INTO `eod_db`.`e_work` (`w_id`, `u_id`, `u_position`, `w_date`, `w_working`, `w_proj`, `w_module`, `w_status`, `w_details`, `w_date_created`, `w_date_modified`, `flag`,`sys_flag`, `sys_date`) VALUES" . $test;    
        $this->db->query($query_1);

    }
    function not_sent()
    {
        $query = $this->db->query("SELECT e_reg.e_username as name,count(u_id) as days,e_reg.e_gender as gender FROM `e_work` INNER JOIN e_reg ON e_work.u_id=e_reg.e_id WHERE w_status IS NULL OR w_status IN (1,2,3) AND `flag`=0 AND `sys_flag`=1 GROUP BY u_id");
                
        return $query->result_array();
    }
    
    function user_notification($user_id)
    {
        $query = $this->db->query("SELECT u_id,e_reg.e_username as name,e_reg.e_gender as gender,sys_date as date,w_status as status FROM `e_work` INNER JOIN e_reg ON e_work.u_id=e_reg.e_id WHERE u_id=".$user_id." AND flag=0 AND sys_flag=1");
        return $query->result_array();
    }
}
  