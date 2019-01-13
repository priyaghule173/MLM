<?php
	class UserModel extends CI_Model
	{
		public function getpackages()
		{
			
			$q=$this->db->get("package");
			return $q->result_array();
		}

		public function getrewards()
		{

			$q=$this->db->get("rewards");
			return $q->result_array();
		}

		public function getdata()
		{
			$uname=$this->session->userdata("member_code");
			$this->db->where("member_code",$uname);
			$q=$this->db->get("users");
			return $q->row();
		}

		public function mydirect()
		{
			$uname=$this->session->userdata("member_code");

			$sql="SELECT * FROM users where sponsor_id='$uname' ";
			
			$q=$this->db->query($sql);
			return $q->result_array();
		}
		public function insertnewjoin($data)
		{
		   $post_data=$this->input->post('member_code');

			$q=$this->db->insert("users",$data);

			
            // $member_code=$member_code+1;

            if($q==1)
            {
            	

            	return $this->db->insert_id();
            }
            else
            {
            	return 0;
            }

			
		}

		public function updateprofile($uname)
		{
			$post_data=$this->input->post();
			$data=array(
						
						"gender"=>$this->input->post('gender'),
						"dob"=>$this->input->post('dob'),
						"city"=>$this->input->post('city'),
						"state"=>$this->input->post('state'),
						
						"email"=>$this->input->post('email'),
						"pan_no"=>$this->input->post('pan_no'),
						"pin_code"=>$this->input->post('pin_code'),
						"address"=>$this->input->post('address'),
						"nominee_name"=>$this->input->post('nominee_name'),
						"relationship"=>$this->input->post('relationship')
						

						);

				$this->db->where('member_code', $uname);
				$q=$this->db->update('users', $data);

				return $q;
		}


		public function getname($member_code)
		{
			$sponsor_id=$this->session->userdata("member_code");

			
			$sql="SELECT first_name,last_name from users WHERE member_code='$member_code' OR sponsor_id='$sponsor_id' ";
			$query=$this->db->query($sql);
			return $query->result_array();
		}

		public function topupview()
{
// $member_code=$this->session->userdata("member_code");



// $sql="SELECT * FROM users where member_code='$member_code'";
// //echo $sql; 
// $query=$this->db->query($sql);
// return $query->result_array();
}

public function gettopup()
{
$member_code=$this->session->userdata("member_code");

$sql="SELECT * FROM users where member_code='$member_code'";
//echo $sql; 
$query=$this->db->query($sql);

foreach($query->result() as $row)
{
//print_r($stage);
$memberstage = $row->stage;
$member_direct_count=$row ->member_direct_count;
}
//stage users


$sql1="SELECT * FROM package where stage=$memberstage+1";
//echo $sql;

$query1=$this->db->query($sql1);

foreach ($query1->result() as $row) {
$stage=$row->stage;
$count=$row->count;
$topup=$row->topup;
$payout=$row->payout;


}

$sql2="SELECT * FROM package where stage=$memberstage";

$query2=$this->db->query($sql2);

foreach ($query2->result() as $row) {
$stagetocomp=$row->stage;
$counttocomp=$row->count;
}

// echo "$member_direct_count";
// echo "$counttocomp"; exit;

if($member_direct_count == $counttocomp)
{


$sql3="UPDATE users SET stage=$stage,member_direct_count=0,user_payment_status='unpaid',topup=$topup ,payout=$payout,payout_status='yes' where member_code='$member_code'";
$query3=$this->db->query($sql3);
return $query3;
}
else
{
	return 0;
}

// $result=$this->db->query($sql);
}

		public function assigncommission()
		{
   		 $member_code=$this->session->userdata("member_code");

   		 $getcom="SELECT * FROM commission";
   		 $com=$this->db->query($getcom);
   		 $a=$com->result_array();
   		 //pretty_print($a[0]['amount']); 
   		 // foreach($com->result_array() as $row)
   		 // {

   		 // }

   		 $b=$a[0]['amount'];
   		 //echo $b;

   		 $sql5="SELECT commission from users where member_code='$member_code'";
   		 $q5=$this->db->query($sql5);
   		 $result5=$q5->result(); 
   		 $val5=$result5[0]->commission + $b;
   		 //echo "val5add".$val5; 
   		

   		 $sql="UPDATE users SET commission=$val5,commission_payment_status='unpaid' where member_code='$member_code'";

   		 $this->db->query($sql);

   		 $sql2="SELECT sponsor_id from users where member_code='$member_code'";
   		 $q2=$this->db->query($sql2);

   		 foreach($q2->result() as $row)
   		 {
   		 	$sponsor_id= $row->sponsor_id;
   		 }

   		 $sponsor_id=$sponsor_id;
   		 $commission=$a[1]['amount'];
   		 $i=1;

   		 while($sponsor_id)
   		 {
   		 	$sql6="SELECT commission from users where member_code='$sponsor_id'";
   		 $q6=$this->db->query($sql6);
   		 $result6=$q6->result(); 
   		 $val6=$result6[0]->commission + $commission;
   		 //echo $val6; 


   		 	$sql3="UPDATE users SET commission=$val6, commission_payment_status='unpaid' where member_code='$sponsor_id'";

   		 	//echo $sql3;
   		 	$this->db->query($sql3);
   		 	$sql4="SELECT sponsor_id from users where member_code='$sponsor_id'";
   		 	$q4=$this->db->query($sql4);

   		 	foreach($q4->result() as $row)
   		 	{
   		 	$sponsor_id= $row->sponsor_id;
   		 	}
   		 	$sponsor_id=$sponsor_id;
   		 	echo $sponsor_id;
   		 	$commission=$a[$i+1]['amount'];

   		 	echo $commission;
   		 	$i=$i+1;
   		 	echo $i;



   		 }
    
		}

		public function topuppayment()
		{
			$post_data=$this->input->post();
			$member_code=$this->input->post("member_code");
			$package=$this->input->post("package");

			$sql="UPDATE users SET topup=$package where member_code='$member_code'";
			$q=$this->db->query($sql);
			return $q;

		}

	}
?>