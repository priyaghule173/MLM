<?php
/**
* 
*/
class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("usermodel");
	}
	public function index()
	{		
			$data['package']=$this->usermodel->getpackages();
			$q['user']=$this->usermodel->getdata();	

			$p=array_merge($data,$q);
			$r['count']=count($this->usermodel->mydirect()
			);
			 //pretty_print($q['user']);exit;

			$s=array_merge($p,$r);
			
	
			 $this->load->view("user/dashboard",$s);
	}

	public function rewards()
	{		if($this->session->userdata('logged_in'))
		{
			$data['rewards']=$this->usermodel->getrewards();	
			$this->load->view("user/rewards",$data);
		}

		else
		{
			redirect('login');
		}
			
	}


	public function topup()
	{
			if($this->session->userdata('logged_in'))
			{
				$q['data']=$this->usermodel->gettopup();

				$this->load->view("user/topup",$q);
			}

			else
			{
				redirect('login');
			}
		
	}

	public function profile()
	{
		if($this->session->userdata('logged_in'))
		{
		$this->load->view("user/profile");
		}

		else
			{
				redirect('login');
			}
	}

	public function changepwdform()
	{
		if($this->session->userdata('logged_in'))
		{
		$this->load->view("user/changepwd");
		}

		else
		{
			redirect("login");
		}
	}
	public function editprofile()
	{
			if($this->session->userdata('logged_in'))
			{
				$data['q']=$this->usermodel->getdata();
		//pretty_print($data);
		 $this->load->view("user/editprofile",$data);
			}
		

		 else
			{
				redirect('login');
			}
	}

	

	public function mydirect()
	{
		if($this->session->userdata('logged_in'))
			{
			$data["result"]=$this->usermodel->mydirect();

			//pretty_print($data);
			$this->load->view("user/mydirect",$data);
			}

		else
			{
				redirect('login');
			}
	}
	public function levelwiselist()
	{
			if($this->session->userdata('logged_in'))
			{
			$this->load->view("user/levelwiselist");
			}

		else
			{
				redirect('login');
			}
	}
	public function commissionhistory()
	{
			if($this->session->userdata('logged_in'))
			{
			$this->load->view("user/commissionhistory");
			}
		else
			{
				redirect('login');
			}
	}
	public function commissiondetail()
	{	
			if($this->session->userdata('logged_in'))
			{
		$this->load->view("user/commissiondetail");
			}
			else
			{
				redirect('login');
			}
	}
	

	public function insertnewjoin()
	{
		
		$q=$this->usermodel->gettopup();
		//pretty_print($q); exit;
		$sql="SELECT id from Users ORDER BY id desc limit 1";
			$query=$this->db->query($sql);
			$max_id=0;
			
			foreach ($query->result() as $row)
			{
				$max_id = $row->id;
				
			}
			
			$email=$this->input->post("email");
			$max_id+=1001;
			$member_code="PP".$max_id;
			
			$password=1234;
			$data=array(
						"sponsor_id"=>$this->input->post('sponsor_id'),
						"product"=>$this->input->post('product'),
						"member_code"=>$member_code,
						"password"=>password_hash($password,PASSWORD_DEFAULT),

						"first_name"=>$this->input->post('first_name'),
						"last_name"=>$this->input->post('last_name'),
						

						"fathers_name"=>$this->input->post('fathers_name'),
						"email"=>$this->input->post('email'),
						"mob_no"=>$this->input->post('mob_no'),
						"pan_no"=>$this->input->post('pan_no'),
						 "gender"=>$this->input->post('gender'),
						"dob"=>$this->input->post('dob'),
						"state"=>$this->input->post('state'),
						"city"=>$this->input->post('city'),
						"address"=>$this->input->post('address'),
						"pin_code"=>$this->input->post('pin_code'),
						"nominee_name"=>$this->input->post('nominee_name'),
						"relationship"=>$this->input->post('relationship'),
						"relationship"=>$this->input->post('relationship'),
						"payee_name"=>$this->input->post('payee_name'),
						"bank_name"=>$this->input->post('bank_name'),
						"account_no"=>$this->input->post('account_no'),
						"branch_name"=>$this->input->post('branch_name'),
						"ifsc_code"=>$this->input->post('ifsc_code'),
						"is_manager"=>0,
						"user_type_id" => 2,
						"joining_paid_by"=>$this->input->post('joining_paid_by'),
						"joining_account_no"=>$this->input->post('joining_account_no'),
						"transaction_id"=>$this->input->post('transaction_id')


						);

 		// print_r($password);exit();

		$name="apurva";
       	$email="chetan.khairnar@techwonderkinds.com";
       	$phone="9860097305";
       	$description="my description";
		$to =$email;
		$subject = 'Director Registration OTP';
		$message = "
		<html>
		<head>
		<title></title>
		</head>
		<body>
		<p>This email is for Verification</p>
		<h4>User Name: ".$member_code."Password:".$password."</h4>
		
		</body>
		</html>
		";

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
		$headers .= 'From: ' .$email. "\r\n";

		mail($to,$subject,$message,$headers);

		 // $data['password']=$password;

		$member_code=$this->session->userdata("member_code");

		$sql="SELECT user_payment_status,product_payment_status,member_direct_count from users where  member_code='$member_code'";

		$query=$this->db->query($sql);
		foreach($query->result() as $row)
		{
			$user_payment_status= $row->user_payment_status;
			$product_payment_status=$row->product_payment_status;
			$my_direct_count=$row->member_direct_count;
		}



		if($user_payment_status == "paid" && $product_payment_status=="paid")
		{
		
		$q=$this->usermodel->insertnewjoin($data);
		$commission=$this->usermodel->assigncommission();
		$post_data=$this->input->post("sponsor_id");

		//print_r($post_data); exit;
		
		

		

		 if($q) { 

		 			$my_direct_count=$my_direct_count+1;
		 			

		 			//pretty_print($q);exit;

		$sql="UPDATE users SET member_direct_count=$my_direct_count WHERE member_code='$member_code'";
					$this->db->query($sql);

                	$msg= 'Inserted Successfully!';
			        $data['msg']=success_alert($msg);
			        echo $data['msg'];
			        $tempdata = array('status' => true, 'message' => $data['msg']);
			        $this->session->set_tempdata($tempdata, NULL,5);
			        $this->session->unset_tempdata($tempdata);
			        redirect('/profile/','refresh');
                }
                else { 
                    $msg="Error in inserting data!";
			        $data['msg']=failure_alert($msg);
			        $tempdata = array('status' => false, 'message' => $data['msg']);
			        $this->session->set_tempdata($tempdata, NULL,5);
			        $this->session->unset_tempdata($tempdata);
			        redirect('/profile/','refresh');
                } 
            }

            else
            {
           //  	 $msg="Payment is not done!";
			        // $data['msg']=failure_alert($msg);
			        // $tempdata = array('status' => false, 'message' => $data['msg']);
			        // $this->session->set_tempdata($tempdata, NULL,5);
			        // $this->session->unset_tempdata($tempdata);
			        // redirect('/profile/','refresh');

            	echo "<script>";
            	echo "alert('Please do the Payment!!')";
            	echo "</script>";
            	 redirect('/profile/','refresh');
            }
	}

	public function updateprofile($uname)
	{
		
		 $q=$this->usermodel->updateprofile($uname);

		 if($q) { 
                	$msg= 'Inserted Successfully!';
			        $data['msg']=success_alert($msg);
			        echo $data['msg'];
			        $tempdata = array('status' => true, 'message' => $data['msg']);
			        $this->session->set_tempdata($tempdata, NULL,5);
			        $this->session->unset_tempdata($tempdata);
			        redirect('/editprofile/','refresh');
                }
                else { 
                    $msg="Error in inserting data!";
			        $data['msg']=failure_alert($msg);
			        $tempdata = array('status' => false, 'message' => $data['msg']);
			        $this->session->set_tempdata($tempdata, NULL,5);
			        $this->session->unset_tempdata($tempdata);
			        redirect('/editprofile/','refresh');
                }	 
		 
	}

	public function getname($member_code)
	{
		$q=$this->usermodel->getname($member_code);

		return $this->output
		    ->set_content_type('application/json')
		    ->set_status_header(200)
		    ->set_output(json_encode($q));

		
	}

	public function topuppayment()
	{
		$q=$this->usermodel->topuppayment();
		if($q)
		{
			redirect("topup");
		}

	}

	public function topupview()
{
if($this->session->userdata('logged_in'))
{
// 	print_r('hello');exit;
// $q['data']=$this->usermodel->topupview();

$this->load->view("user/topup");
}

else
{
redirect('login');
}

}
}
?>