<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>Topup </title>

   <?php $this->load->view("user/commoncss"); ?>   
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
    <!-- sidebar -->
      <?php $this->load->view('user/sidebar'); ?>
            <!-- /sidebar menu -->
          <!-- top navigation -->
       <?php $this->load->view('user/navbar'); ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
               
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Member Top Up </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url('topuppayment'); ?>">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Member Code:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="member_code" required="required" onkeyup="getname()" name="member_code" value="<?php echo $this->session->userdata('member_code'); ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                    
                      <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Member Name: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" >
                         <p id="member_name"></p>
                        </div>
                      </div> -->
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Package:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="package">
                            <option>Select Package</option>
                           
                            <option><?php
            $post_data=$this->input->post();
$member_code=$this->session->userdata("member_code");
//$member_code=$this->input->post("member_code");
$sql1="SELECT stage from users where member_code='$member_code'";

$q1=$this->db->query($sql1);
foreach($q1->result() as $row)
{
  $stage=$row->stage;
}




$sql="SELECT topup from package where  stage=$stage";

$query=$this->db->query($sql);
foreach($query->result() as $row)
{
echo $row->topup;
}
?>
</option>
                          </select>
                        </div>
                      </div>

                <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Proceed To Pay</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

           
                  </div>
                </div>

                
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <?php $this->load->view("user/commonjs"); ?>

    <script type="text/javascript">


  //alert(document.getElementById("member_code").value);
 


   function onDataReceived(data,status,xhr)
     {
      
      $("#member_name").text(data[0].first_name + " "+ data[0].last_name)
     }

     function onError(xhr,status,error)
     {
      console.log(xhr);
      console.log(status);
      console.log(error);
     }


    
      function getname()
      {
        var member_code=$("#member_code").val();
        var base_url="<?php echo base_url("getname"); ?>";

        var request=
       {
         url : base_url+"/"+member_code,
         type :'GET',
         success : onDataReceived,
         headers :{ Accept : 'application/json'},
         error : onError
       };

         $.ajax(request);

      }

     
    



    </script>
	
  </body>
</html>
