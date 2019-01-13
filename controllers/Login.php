<?php
/**
* 
*/
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("loginmodel");
	}
	public function index()
	{
		if(!$this->session->userdata('logged_in'))
		{
		$this->load->view("public/loginview");
		}
		else
		{
			$user_type= $this->session->userdata('user_type_id');
				if($user_type == 1 )
				{
					redirect('Admin');
				}
				else if($user_type == 2)
				{
					redirect('User');

				}
		}
	}
	public function userlogin()
	{
		$q=$this->loginmodel->userlogin();

		if($q == 1)
			{
				$uname = $this->input->post('uname');
				$data= array('temp_uname' => $uname );
				
				$this->load->view('public/resetpwd',$data);
				
			}

		else if($q==2)
		{
			$user_type= $this->session->userdata('user_type_id');
				if($user_type == 1 )
				{
					redirect('Admin');
				}
				else if($user_type == 2)
				{
					redirect('User');

				}
		}	
			
			else  // incorrect username or password
			{
				$msg="Invalid username or password";
				$data['msg']=failure_alert($msg);
				$tempdata = array('status' => true, 'message' => $data['msg']);
				$this->session->set_tempdata($tempdata, NULL,5);
				$this->session->unset_tempdata($tempdata);
				redirect('login');
				
			}


		
	}

	public function forgotpwd()
	{
		$q=$this->loginmodel->forgotpwd();

		
		
	}

		public function resetpwd($uname)
    {
    	//echo $uname;
    	$newPassword = password_hash($this->input->post('newpwd'),PASSWORD_DEFAULT);
    	$usersData = array('password'=>$newPassword, 'pass_flag'=>0); 

    	//print_r($usersData) ;

        $result = $this->loginmodel->resetpwdmodel($uname, $usersData);

       
               if($result) { 
                	$msg= 'Password Updated Successfully!';
			        $data['msg']=success_alert($msg);
			        echo $data['msg'];
			        $tempdata = array('status' => true, 'message' => $data['msg']);
			        $this->session->set_tempdata($tempdata, NULL,5);
			        $this->session->unset_tempdata($tempdata);
			        redirect('login','refresh');
                }
                else { 
                    $msg="Please Enter A Valid Password";
			        $data['msg']=failure_alert($msg);
			        $tempdata = array('status' => false, 'message' => $data['msg']);
			        $this->session->set_tempdata($tempdata, NULL,5);
			        $this->session->unset_tempdata($tempdata);
			        redirect('login','refresh');
                } 
     }

      public function changepwd()
    {
    	$query = $this->loginmodel->changepwd();

    	
    	if($query==1)
    	{

    		$msg1= 'Password Changed Successfully!';
			        $data['msg1']=success_alert($msg1);
			        
			        $tempdata = array('status' => true, 'message1' => $data['msg1']);
			        $this->session->set_tempdata($tempdata, NULL,5);
			        $this->session->unset_tempdata($tempdata);
			        redirect('changepwdform/');
    	}
    	if($query==0)
    	{
    		 $msg1="Incorrect Old Password!";
			        $data['msg1']=failure_alert($msg1);
			        $tempdata = array('status' => false, 'message1' => $data['msg1']);
			        $this->session->set_tempdata($tempdata, NULL,5);
			        $this->session->unset_tempdata($tempdata);
			        redirect('changepwdform/');
    	}

    	else if($query==2)
    	{
    		 $msg1="Password Do Not Match!";
			        $data['msg1']=failure_alert($msg1);
			        $tempdata = array('status' => false, 'message1' => $data['msg1']);
			        $this->session->set_tempdata($tempdata, NULL,5);
			        $this->session->unset_tempdata($tempdata);
			        redirect('changepwdform/');
    	}

     }



}
?>