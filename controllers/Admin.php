<?php
 class Admin extends CI_Controller
 {
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model("usermodel");
 		$this->load->model("adminmodel");
 	}

 	public function index()
 	{
		if($this->session->userdata('logged_in'))
 		{
 		redirect("viewusers");
 		}
 		else
 		{
 			redirect('login');
 		}
 	}

 	public function adduser()
 	{
			if($this->session->userdata('logged_in'))
			{
 			$this->load->view("admin/adduser");
 			}
 			else
 			{
 				redirect('login');
 			}
 	}

 	public function viewusers()
 	{

 		if($this->session->userdata('logged_in'))
 		{

 			$this->load->library('pagination');
 			$config=[

 				'base_url' => base_url('admin/viewusers'),
 				'per_page' => 2,
 				'total_rows' => $this->adminmodel->getunpaid(),
 				'uri_segment'=> 3,
 			];
 			$this->pagination->initialize($config);

 		// 	echo "1==>".$this->uri->segment(1);
   //  echo " 2==>".$this->uri->segment(2);
   //  echo " 3==>".$this->uri->segment(3);
   //  echo " 4==>".$this->uri->segment(4);
   // echo $this->adminmodel->getunpaid();
     
     if($this->uri->segment (3)=="")
     {
     	$segment=0;
     }
     else
     {
     	$segment = $this->uri->segment (3);
     }

$offset=0;
 		   $q['data']=$this->adminmodel->getunpaid1($config['per_page'], $segment);

 		   $this->load->view("admin/viewusers",$q);
 		}
 		else
 		{
 			redirect('login');
 		}
 	}

 	public function packages()
 	{
 		if($this->session->userdata('logged_in'))
 		{
 		$data['package']=$this->usermodel->getpackages();	
			$this->load->view("admin/packages",$data);
		}
		else
		{
			redirect('login');
		}
 	}

 	public function rewardsbyadmin()
	{		if($this->session->userdata('logged_in'))
			{	
			$data['rewards']=$this->usermodel->getrewards();	
			$this->load->view("admin/rewardsbyadmin",$data);
			}
			else
			{
				redirect('login');
			}
	}

	public function levelwiseusers()
 	{
 		if($this->session->userdata('logged_in'))
 		{
 		  $q['data']=$this->adminmodel->getpayableusers();

 		  $this->load->view("admin/levelwiseusers",$q);
 		}
 		else
 		{
 			redirect('login');
 		}
 	}

 	public function datewiseusers($fromdate,$todate)
 	{
 		// echo $fromdate ."<br>";
 		// echo $todate;


 		$q=$this->adminmodel->datewiseusers($fromdate,$todate);
 		return $this->output
		    ->set_content_type('application/json')
		    ->set_status_header(200)
		    ->set_output(json_encode($q));
 		
 	}


 	public function approvepayment($id,$member_code,$payment_type_id)
 	{

 		$q=$this->adminmodel->approvepayment($id,$member_code,$payment_type_id);
 		if($q)
 		{
 			$query=$this->adminmodel->updateparent($member_code,$payment_type_id);

 		}
 	}

 	public function approvetopuppayment($id,$member_code,$payment_type_id)
 	{
 		$q=$this->adminmodel->approvetopuppayment($id,$member_code,$payment_type_id);
 		if($q)
 		{
 			redirect("payment");
 		}
 	}

 	public function approveproductpayment($id,$member_code,$payment_type_id)
 	{
 		$q=$this->adminmodel->approveproductpayment($id,$member_code,$payment_type_id);
 		if($q)
 		{
 			redirect("payment");
 		}
 	}

 	public function payment()
 	{
 		$unpaid["unpaiddata"]=$this->adminmodel->getunpaid();
 		

 		//pretty_print($r["paid"]);

 		$this->load->view("Admin/payment",$unpaid);
 	}

 	public function disableuser($id)
 	{
 		$q=$this->adminmodel->disableuser($id);

 		if($q)
 		{
 			redirect("viewusers");
 		}

 	}

 	public function viewmemberdirects($member_id)
 	{

 		$q['data']=$this->adminmodel->viewmemberdirects($member_id);

 		$this->load->view("admin/memberdirects",$q);

 	}

 	public function sendpayout()
 	{
 		$q['data']=$this->adminmodel->sendpayout();
 		$this->load->view("admin/sendpayout",$q);
 	}

 	public function sendcommission()
 	{
 		$q['data']=$this->adminmodel->sendcommission();
 		$this->load->view("admin/sendcommission",$q);
 	}

 	public function sendrewards()
 	{
 		$q['data']=$this->adminmodel->sendrewards();
 		$this->load->view("admin/sendrewards",$q);
 	}

 	public function sendpayoutamount($id,$member_code)
 	{
 		$q=$this->adminmodel->sendpayoutamount($id,$member_code);
 	}

 	public function reports()
 	{
 		$q['data']=$this->adminmodel->reports();
 		$u['topup']=$this->adminmodel->reportstopup();
 		$v['product']=$this->adminmodel->reportsproduct();
 		$w['payout']=$this->adminmodel->reportspayout();
 		$x['commission']=$this->adminmodel->reportscommission();
 		$y['both']=$this->adminmodel->reportsboth();
 		//pretty_print($q);exit;
 		$r['amount']=$this->adminmodel->getreportamount();
       
        $totalProfit= $r['amount'][0]['income']- $r['amount'][0]['payout'];
        $t['totalProfit']=$totalProfit;

 		$s=array_merge($q,$r,$t,$u,$v,$w,$x,$y);
 		 //pretty_print($s);exit;
 		$this->load->view("admin/reports",$s);
 	}

 	public function sendcomamount($id,$member_code)
 	{
 		$q=$this->adminmodel->sendcomamount($id,$member_code);
 	}


	
 }
 

?>