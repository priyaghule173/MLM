<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Add User </title>

   <?php $this->load->view("admin/commoncss"); ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php $this->load->view("admin/sidebar"); ?>
         <?php $this->load->view("admin/navbar"); ?>
       
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Join Us</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Placement Detail</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" action="<?php echo base_url('adduserbyadmin/'); ?>" method="post" novalidate>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sponsor_id">Sponsor ID <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="sponsor_id" class="form-control col-md-7 col-xs-12"  name="sponsor_id" placeholder="Sponsor ID" value="<?php echo $this->session->userdata('member_code'); ?>" required="required" type="text" disabled>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="products">Products <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <select class="form-control" name="product" required="required">
                           
                            <option>Joining Package(500)</option>
                           
                          </select>
                        </div>
                      </div>

                      <div class="x_title">
                       <h2>User Information</h2>
                    
                       <div class="clearfix"></div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="first_name" class="form-control col-md-7 col-xs-12"  name="first_name"  required="required" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last_name">Last Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="last_name" class="form-control col-md-7 col-xs-12"  name="last_name"  required="required" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fathers_name">Father's Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="fathers_name" class="form-control col-md-7 col-xs-12"  name="fathers_name"  required="required" type="text">
                        </div>
                      </div>



                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                           <span class=fa" fa-envelope form-control-feedback right" aria-hidden="true"></span>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Mobile Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="number" name="mob_no" required="required"   data-validate-length-range="10,10" class="form-control col-md-7 col-xs-12">
                          <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pan_no">Pan Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="pan_no" type="text" name="pan_no"  class="form-control col-md-7 col-xs-12"  required="required" >
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gender">Gender <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <p>
                        M:
                        <input type="radio" class="flat" name="gender" id="gender" value="M" checked=""  /> F:
                        <input type="radio" class="flat" name="gender" id="gender" value="F" />
                      </p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dob">Date of Birth <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class='input-group date ' id='myDatepicker'>
                                  <input type='text' class="form-control " name="dob"  required="required" />
                                  <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                                  </span>
                               </div>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="state">State <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="state" class="form-control col-md-7 col-xs-12"  name="state"  required="required" type="text">
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">City <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="city" class="form-control col-md-7 col-xs-12"  name="city"  required="required" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="address" required="required" name="address" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pin_code">Pin Code <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="pin_code" class="form-control col-md-7 col-xs-12"  name="pin_code"  required="required" type="text">
                        </div>
                      </div>

                      <div class="x_title">
                       <h2>Nominee Details</h2>
                    
                       <div class="clearfix"></div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nominee_name">Nominee Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nominee_name" class="optional form-control col-md-7 col-xs-12"  name="nominee_name"   type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="relationship">Relationship<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="relationship" class="optional form-control col-md-7 col-xs-12"  name="relationship"   type="text">
                        </div>
                      </div>

                      <div class="x_title">
                       <h2>Bank Details</h2>
                    
                       <div class="clearfix"></div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="payee_name">Payee Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="payee_name" class=" form-control col-md-7 col-xs-12"  name="payee_name"  required="required"   type="text">
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bank_name">Bank Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="bank_name" class=" form-control col-md-7 col-xs-12"  name="bank_name"  required="required"   type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="account_no">Account Number<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="account_no" class=" form-control col-md-7 col-xs-12"  name="account_no"  required="required"   type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="branch_name">Branch Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="branch_name" class=" form-control col-md-7 col-xs-12"  name="branch_name"  required="required"   type="text">
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ifsc_code">IFSC Code<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ifsc_code" class=" form-control col-md-7 col-xs-12"  name="ifsc_code"  required="required"   type="text">
                        </div>
                      </div>


                       <div class="item form-group">
                       
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="checkbox" name="terms" id="" value="ski" data-parsley-mincheck="2" required class="flat" /> Terms & Conditions
                        <br />
                        </div>
                      </div>
                      

                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          
                          <button id="send" type="submit" class="btn btn-success">Proceed To Pay</button>
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

   <?php $this->load->view("admin/commonjs"); ?>
    <!-- Initialize datetimepicker -->
<script>
   $('#myDatepicker').datetimepicker({
        format: 'YYYY-MM-DD'
    });
     
</script> 
  
  </body>
</html>