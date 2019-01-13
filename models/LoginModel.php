<?php
class LoginModel extends CI_Model
{
	public function userlogin()
	{
		$post_data=$this->input->post();
		$uname=$this->input->post("uname");
		$pwd=$this->input->post("pwd");
		$sql="SELECT * FROM users where member_code='$uname'";
		$query=$this->db->query($sql);

        $sql1="SELECT * FROM users where sponsor_id='$uname'";
        $query1=$this->db->query($sql1);
		$pass_flag = 0;

        $my_direct="mydirect".count($query1->result_array());


			foreach ($query->result() as $row)
			{
				$pass_flag = $row->pass_flag;
				$password = $row->password;
			}

		 	if ($query -> num_rows() == 1) 
        	{
        		$v=verify_password($pwd, $password);
        		if($pass_flag == 1 &&  $v == 1)
				{
					return $pass_flag;
				}
				else if($pass_flag == 0 &&  $v == 1)
			   {

				foreach ($query->result() as $rows) 
            	{
                //add all data to session
                	$newdata = array(
                	'id'=> $rows-> id,
                    'member_code' => $rows -> member_code,
                    'first_name' => $rows -> first_name,
                    'last_name' => $rows -> last_name,
                    'sponsor_id'=>$rows-> sponsor_id,
                    'gender'=>$rows-> gender,
                     'dob' => $rows -> dob,
                    'city' => $rows -> city,
                    'state' => $rows -> state,
                    'mob_no'=>$rows-> mob_no,
                    'email'=>$rows-> email,
                    'pan_no'=>$rows-> pan_no,
                     'pin_code' => $rows -> pin_code,
                    'nominee_name' => $rows -> nominee_name,
                    'relationship' => $rows -> relationship,
                    'payee_name'=>$rows-> payee_name,
                    'user_payment_status'=> $rows-> user_payment_status ,
                    
                    'bank_name'=>$rows-> bank_name,
                    'account_no'=>$rows-> account_no,
                    'branch_name'=>$rows-> branch_name,
                    'ifsc_code'=>$rows-> ifsc_code,
                    'user_type_id' => $rows-> user_type_id,
                    'logged_in' => TRUE,
                    'created_on'=>$rows-> created_on
                );
           	 	}

               


            $this -> session -> set_userdata($newdata);
            $this -> session ->set_userdata($my_direct);
            return 2;
        	}

     
        		else
        		{
        	 	return 0;
        		}
        }		
       
        		else
        		{

        		}
		
	}

	public function forgotpwd()
	{
		$email=$this->input->post('email');
		 $this->db->select('email');
        $this->db->from('users'); 
        $this->db->where('email', $email); 
        $query=$this->db->get();
        $query->row_array();
        if ($query->num_rows()>0)
		{
			$passwordplain = "";

        	$passwordplain  = mt_rand(1000000000, mt_getrandmax());
        	echo $passwordplain;
        	$hashedpassword=password_hash($passwordplain,PASSWORD_DEFAULT);
        	$data = array('password' =>$hashedpassword,'pass_flag'=>1);
	        $query = $this->db->where('email', $email);
	        $this->db->update('users', $data);
	        return $this->db->affected_rows() == 1 ? true : false ;
		}

        else
        {
            echo "<script>";
            echo "alert('Invalid Email!')";
            //redirect("Login");
            echo "</script>";

            //redirect("Login");
        }
 	}

 	public function resetpwdmodel($uname, $usersData)
    {

        $this->db->where('member_code', $uname);
        //$this->db->where('isDeleted', 0);
        $this->db->update('users', $usersData);
        
        return $this->db->affected_rows()==1 ? true :false;
    }

    public function changepwd()
    {
    	$post_data=$this->input->post();
    	$this->db->select('password');
					$this -> db -> from('users');
					$this->db->where(array('member_code' => $this->session->userdata("member_code")));
					$this -> db -> limit(1);
					$query = $this -> db -> get();
					$r=$query->result_array();

					$v=password_verify($post_data["oldpwd"],$r[0]["password"]);

		if($v)
		{			

    		if($post_data['newpwd']==$post_data['confirmpwd'])
    		{
				$hashed_password=password_hash($post_data['newpwd'],PASSWORD_DEFAULT);
				$email=$this->session->userdata("email");
	  			$this->db->set('password', $hashed_password);
				$this->db->set('pass_flag', '0');
				$this->db-> where('email', $email);
	 			$result=$this->db->update('users');
				return $result;
			}

			else
			{
				return 2;
			}
    	}
    	else
    	{
    		return 0;
    	}


	

}


}

?>