<?php
 class AdminModel extends CI_Model
 {
 	public function getdata()
 	{	
 			$this->db->where("user_type_id",2);		
 		$q=$this->db->get("users");



 		return $q->result_array();
 	}

 	public function datewiseusers($fromdate,$todate)

 	{
 		$from=date_format(date_create($fromdate),"Y-m-d H:i:s");
 		$to=date_format(date_create($todate),"Y-m-d H:i:s");
 		$sql="SELECT * from users where created_on between '$from' and '$to' ";
 		$q=$this->db->query($sql);
 		return $q->result_array();
 	}

 	public function approvepayment($id,$member_code,$payment_type_id)
 	{
 		$sql="UPDATE users SET user_payment_status='paid',product_payment_status='paid' where member_code='$member_code'";
 		$q=$this->db->query($sql);
 		
 		return $q;
 	}

 	public function updateparent($member_code,$payment_type_id)
 	{
 		//echo $id;
 		$sql4="SELECT topup from package where stage=(select stage from users where member_code='$member_code')";
// 		echo $sql4; 

 		$q4=$this->db->query($sql4);
 		foreach ($q4->result() as $row)
			{
				$topup = $row->topup;				
			}
			$topup=$topup;
			//echo $topup;

			//$topup=$topup+500;
			$product=500;

 		$admin_id=$this->session->userdata("member_code");
 		$sql3="INSERT INTO payment_records(user_id,admin_id,payment_id,in_payment,out_payment) VALUES('$member_code','$admin_id',1,$topup,0),('$member_code','$admin_id',2,$product,0)";
 		//$this->db->query($sql3);
 		
 		
 			$query =$this->db->query($sql3);

 			return $query;
 	}

 	public function approvetopuppayment($id,$member_code,$payment_type_id)
 	{
 		$sql1="SELECT product_payment_status from users where member_code='$member_code'";
 		$query1=$this->db->query($sql1);
 		foreach ($query1->result() as $row)
			{
				$product_payment_status = $row->product_payment_status;				
			}



 		$sql="UPDATE users SET user_payment_status='paid' where member_code='$member_code'";

 		//echo $id;
 		$sql4="SELECT topup from package where stage=(select stage from users where member_code='$member_code')";

 		$q4=$this->db->query($sql4);
 		foreach ($q4->result() as $row)
			{
				$topup = $row->topup;				
			}

			$topup=$topup;

 		$admin_id=$this->session->userdata("member_code");
 		$sql3="INSERT INTO payment_records(user_id,admin_id,payment_id,in_payment,out_payment) VALUES('$member_code','$admin_id',$payment_type_id,$topup,0)";
 		$this->db->query($sql3);


 		$q=$this->db->query($sql);

 		
 			return $q;
 		


 	}

 	public function approveproductpayment($id,$member_code,$payment_type_id)
 	{
 		$sql1="SELECT user_payment_status from users where member_code='$member_code'";
 		$query1=$this->db->query($sql1);
 		foreach ($query1->result() as $row)
			{
				$topup_payment_status = $row->user_payment_status;				
			}



 		$sql="UPDATE users SET product_payment_status='paid' where member_code='$member_code'";


 			$sql4="SELECT topup from package where stage=(select stage from users where member_code='$member_code')";

 		$q4=$this->db->query($sql4);
 		foreach ($q4->result() as $row)
			{
				$topup = $row->topup;				
			}

			$topup=$topup;

 		$admin_id=$this->session->userdata("member_code");
 		$sql3="INSERT INTO payment_records(user_id,admin_id,payment_id,in_payment,out_payment) VALUES('$member_code','$admin_id',$payment_type_id,$topup,0)";
 		$this->db->query($sql3);
 		$q=$this->db->query($sql); 		
 			return $q;

 	}
 	public function getunpaid1($limit,$offset=0)
 	{
 		//$offset = ($offset - 1) * $per_page;

 		$sql="SELECT * FROM users where user_type_id=2 limit $offset,$limit";
 		echo $sql;
 		$q=$this->db->query($sql);
 		return $q->result_array();
 	}


 	public function getunpaid()
 	{
 		//$this->load->library('pagina')

 		$sql="SELECT * FROM users where user_type_id=2";
 		$q=$this->db->query($sql);

 		$count=$q->num_rows();
 		//echo $count;
 		return $count;
 	}

 	

 	public function disableuser($id)
 	{
 		$sql=" DELETE FROM users where id=$id ";
 		$q=$this->db->query($sql);
 		return $q;
 	}

 	public function viewmemberdirects($member_id)
 	{
 		$sql="SELECT * FROM users where sponsor_id='$member_id' ";
 		$q=$this->db->query($sql);
 		return $q->result_array();
 	}

 	public function getpayableusers()
 	{
 		$sql="SELECT * FROM users where user_payment_status='paid' AND product_payment_status='paid' ";
 		$q=$this->db->query($sql);
 		return $q->result_array();
 	}

 	public function sendpayout()
 	{
 		$sql="SELECT * FROM users where  payout_status='yes' ";
 		$q=$this->db->query($sql);
 		return $q->result_array();
 	}

 	public function sendcommission()
 	{
 		$sql="SELECT * FROM users where user_payment_status='paid' AND product_payment_status='paid'AND commission_payment_status='unpaid'";
 		$q=$this->db->query($sql);
 		return $q->result_array();
 	}

 	public function sendrewards()
 	{
 		$sql="SELECT * FROM users where user_payment_status='paid' AND product_payment_status='paid' AND member_direct_count >=1";
 		$q=$this->db->query($sql);
 		return $q->result_array();
 	}

 	public function sendpayoutamount($id,$member_code)
 	{

 			$sql4="SELECT payout from package where stage=(select stage from users where member_code='$member_code')-1";

 		$q4=$this->db->query($sql4);
 		foreach ($q4->result() as $row)
			{
				$payout = $row->payout;				
			}

			$payout=$payout;

			$payoutaftertax= $payout- ($payout*15/100);


			$sql="UPDATE users SET payout_status='no' where member_code='$member_code'";
			$this->db->query($sql);
 		$admin_id=$this->session->userdata("member_code");
 		$sql3="INSERT INTO payment_records(user_id,admin_id,payment_id,in_payment,out_payment) VALUES('$member_code','$admin_id',3,0,$payoutaftertax)";
 		$this->db->query($sql3);

 	}


 	public function reports()
 	{
 		$sql="SELECT *, 
P.payment_id, U.first_name,U.last_name,U.stage 
FROM payment_records Pr 
JOIN  users U ON Pr.user_id = U.member_code 
JOIN payment_type P ON P.payment_id = Pr.payment_id
";
 		$q=$this->db->query($sql);
 		//echo $q; exit;
 		return $q->result_array();
 	}

public function reportstopup()
 	{
 		$sql="SELECT *, 
P.payment_id, U.first_name,U.last_name 
FROM payment_records Pr 
JOIN  users U ON Pr.user_id = U.member_code 
JOIN payment_type P ON P.payment_id = Pr.payment_id
 WHERE P.payment_id=1";
 		$q=$this->db->query($sql);
 		//echo $q; exit;
 		return $q->result_array();
 	}

public function reportsproduct()
 	{
 		$sql="SELECT *, 
P.payment_id, U.first_name,U.last_name 
FROM payment_records Pr 
JOIN  users U ON Pr.user_id = U.member_code 
JOIN payment_type P ON P.payment_id = Pr.payment_id
 WHERE P.payment_id=2";
 		$q=$this->db->query($sql);
 		//echo $q; exit;
 		return $q->result_array();
 	}

 	public function reportspayout()
 	{

 		$sql="SELECT *, 
P.payment_id, U.first_name,U.last_name ,U.stage
FROM payment_records Pr 
JOIN  users U ON Pr.user_id = U.member_code 
JOIN payment_type P ON P.payment_id = Pr.payment_id
 WHERE P.payment_id=3";
 		$q=$this->db->query($sql);
 		//echo $q; exit;
 		return $q->result_array();
 	}

 	public function reportscommission()
 	{
 		$sql="SELECT *, 
P.payment_id, U.first_name,U.last_name 
FROM payment_records Pr 
JOIN  users U ON Pr.user_id = U.member_code 
JOIN payment_type P ON P.payment_id = Pr.payment_id
 WHERE P.payment_id=4";
 		$q=$this->db->query($sql);
 		//echo $q; exit;
 		return $q->result_array();
 	}

 	public function reportsboth()
 	{
 		$sql="SELECT *, 
P.payment_id, U.first_name,U.last_name 
FROM payment_records Pr 
JOIN  users U ON Pr.user_id = U.member_code 
JOIN payment_type P ON P.payment_id = Pr.payment_id
 WHERE P.payment_id=6";
 		$q=$this->db->query($sql);
 		//echo $q; exit;
 		return $q->result_array();
 	}



 	public function getreportamount()
 	{
 
 		$sql="SELECT SUM(in_payment) as income, SUM(out_payment) as payout from payment_records";
 		$q=$this->db->query($sql);
 		return $q->result_array();
 	}


 	public function sendcomamount($id,$member_code)
 	{
 		$admin_id=$this->session->userdata("member_code");
 		

 		$sql3="SELECT commission from users where member_code='$member_code'";

 		echo $sql3;
 		$query3=$this->db->query($sql3);
 		foreach($query3->result() as $row)
 		{
 			$commission=$row->commission;
 		}
 		//echo $commission;
 		$commission=$commission; 

 		$sql2="INSERT into payment_records(user_id,admin_id,payment_id,in_payment,out_payment) values ('$member_code','$admin_id',4,0,$commission)";


 		$this->db->query($sql2);

 		$sql="UPDATE users SET commission_payment_status='paid' ,commission=0 where member_code='$member_code'";

 		//echo $sql; exit();
 		$this->db->query($sql);
 		//return $q;
 	}
 } 
?>