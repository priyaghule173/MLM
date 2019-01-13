<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit Profile </title>

   <?php $this->load->view("user/commoncss"); ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php $this->load->view("user/sidebar"); ?>
         <?php $this->load->view("user/navbar"); ?>
       
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Edit Profile</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Basic Information</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" action="<?php echo base_url('updateprofile/').$this->session->userdata('member_code'); ?>" method="post" novalidate>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="member_name">Member Name: 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="member_name" class="form-control col-md-7 col-xs-12"  name="member_name" value="<?php echo $q->first_name; ?>"  required="required" type="text" disabled>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gender">Gender: 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <p>
                        M:
                        <input type="radio" class="flat" name="gender" id="gender" value="M" checked="<?php echo ($q->gender=='M')?'true':'false' ?>" /> F:
                        <input type="radio" class="flat" name="gender" id="gender" value="F" checked="<?php echo ($q->gender=='F')?'true':'false' ?>" />
                      </p>
                        </div>
                      </div>
                     
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dob">Date of Birth: 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class='input-group date ' id='myDatepicker'>
                                  <input type='text' class="form-control " name="dob"  required="required"  value="<?php echo $q->dob; ?>" placeholder="<?php echo $q->dob; ?>" />
                                  <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                                  </span>
                               </div>
                        </div>
                      </div>

                      <div class="x_title">
                       <h2>Contact Details</h2>
                    
                       <div class="clearfix"></div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">City: 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="city" class="form-control col-md-7 col-xs-12"  name="city"  required="required" type="text" value="<?php echo $q->city; ?>">
                        </div>
                      </div>

                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="state">State: 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="state" class="form-control col-md-7 col-xs-12"  name="state"  required="required" type="text" value="<?php echo $q->state; ?>">
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Mobile Number: 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="number" name="mob_no" required="required"   data-validate-length-range="10,10" value="<?php echo $q->mob_no; ?>" class="form-control col-md-7 col-xs-12" disabled>
                          <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email: 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" value="<?php echo $q->email; ?>" required="required" class="form-control col-md-7 col-xs-12">
                           <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
                        </div>

                       </div>

                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pan_no">Pan Number:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="pan_no" type="text" name="pan_no"  class="form-control col-md-7 col-xs-12" value="<?php echo $q->pan_no; ?>"  required="required" >
                        </div>
                      </div>

                      
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pin_code">Pin Code: 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="pin_code" class="form-control col-md-7 col-xs-12"  name="pin_code" value="<?php echo $q->pin_code; ?>"  required="required" type="text">
                        </div>
                      </div>


                     <!--  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Confirm Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email2" name="confirm_email" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> --> 
                     
  

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="address" required="required" name="address" class="form-control col-md-7 col-xs-12" placeholder="<?php echo $q->address; ?>"></textarea>
                        </div>
                      </div>

                     

                      <div class="x_title">
                       <h2>Nominee Details</h2>
                    
                       <div class="clearfix"></div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nominee_name">Nominee Name:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nominee_name" class="optional form-control col-md-7 col-xs-12"  name="nominee_name" value="<?php echo $q->nominee_name; ?>"   type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="relationship">Relationship:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="relationship" class="optional form-control col-md-7 col-xs-12"  name="relationship" value="<?php echo $q->relationship; ?>"   type="text">
                        </div>
                      </div>

                      <div class="x_title">
                       <h2>Bank Details</h2>
                    
                       <div class="clearfix"></div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="payee_name">Payee Name:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="payee_name" class=" form-control col-md-7 col-xs-12"  name="payee_name"  required="required" value="<?php echo $q->payee_name; ?>"   type="text" disabled>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bank_name">Bank Name:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="bank_name" class=" form-control col-md-7 col-xs-12"  name="bank_name"  required="required" value="<?php echo $q->bank_name; ?>"   type="text" disabled>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="account_no">Account Number:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="account_no" class=" form-control col-md-7 col-xs-12"  name="account_no"  required="required" value="<?php echo $q->account_no; ?>"   type="text" disabled>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="branch_name">Branch Name:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="branch_name" class=" form-control col-md-7 col-xs-12"  name="branch_name"  required="required" value="<?php echo $q->branch_name; ?>"   type="text" disabled>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ifsc_code">IFSC Code:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ifsc_code" class=" form-control col-md-7 col-xs-12"  name="ifsc_code"  required="required" value="<?php echo $q->ifsc_code; ?>"   type="text" disabled>
                        </div>
                      </div>


                       
                      

                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          
                          <button id="send" type="submit" class="btn btn-success">Update</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div> 
<!-- x_panel 1 ends  -->


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

    <!-- jQuery -->

   <?php $this->load->view("user/commonjs"); ?>
    <!-- Initialize datetimepicker -->
<script>
   $('#myDatepicker').datetimepicker({
        format: 'YYYY-MM-DD'
    });
     
</script> 
  
  </body>
</html>