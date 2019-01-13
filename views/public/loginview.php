<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>


   <?php $this->load->view("user/commoncss"); ?>
  </head>

  <body class="login">
    
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="<?php echo base_url('userlogin/'); ?>">
              <h1>Login Form</h1>
              <?php echo $this->session->tempdata('message');?>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" name="uname" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="pwd" />
              </div>
              <div>
                <input type="submit" value="Submit" class="btn btn-default submit" />
                <a class="reset_pass" href="#signup">Forgot password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-exchange"></i> Paisa Paid</h1>
                  
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="post" action="<?php echo base_url('forgotpwd'); ?>">
              <h1>Forgot Password?</h1>
              
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" name="email" />
              </div>
              
              <div>
                <input type="submit" value="Submit" class="btn btn-default submit" />
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-exchange"></i>Paisa Paid</h1>
                 
                  <?php $this->load->view("user/commonjs"); ?>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>

  </body>

</html>