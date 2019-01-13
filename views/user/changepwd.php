<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>Change Password </title>
    <?php $this->load->view("user/commoncss"); ?>
  </head>
  <!-- body -->
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
        <div class="clearfix">  
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                 <?php echo $this->session->tempdata('message1');?>
                  <h2>Change Password</h2>

                  <ul class="nav navbar-right panel_toolbox">
                    <li>
                      <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
              </div>
              <div class="x_content">
                    <br />
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url('changepwd/'); ?>">
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="old-pwd">Enter Old Password<span class="required">*</span>
                    </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="old-pwd" name="oldpwd" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="new-pwd">Enter New Password<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="new-pwd" name="newpwd" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="confirm-pwd">Confirm New Password<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="password" id="confirm-pwd" name="confirmpwd" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      <button class="btn btn-primary" type="reset">Reset</button>
                      <input type="submit" class="btn btn-success" value="Submit">
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
      
 <?php $this->load->view("user/commonjs"); ?>
	
  </body>
</html>
