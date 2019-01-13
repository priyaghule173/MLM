<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

 <?php echo $this->session->tempdata('message');?>
   <?php $this->load->view("user/commoncss"); ?>
  </head>

  <body class="login">
   
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="<?php echo base_url('resetpwd/').$temp_uname ?>" method="POST">
              <h1>Reset Password</h1>
              <div>
                <input type="password" class="form-control" placeholder="Enter New Password" required="" name="newpwd" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Confirm Password" required="" name="confirmpwd" />
              </div>
              <div>
                <input type="submit" value="Submit" class="btn btn-default submit"/>
                
              </div>

              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
  <script>
    var allowsubmit = false;
    $(function(){
      //on keypress 
      $('#confpass').change(function(e){
        //get values 
        var pass = $('#pass').val();
        var confpass = $(this).val();
        
        //check the strings
        if(pass == confpass){
          //if both are same remove the error and allow to submit
          $('.error').text('');
          allowsubmit = true;
        }else{
          //if not matching show error and not allow to submit
          $('.error').text('Password not matching');
          allowsubmit = false;
        }
      });
      
      //jquery form submit
      $('#form').submit(function(){
      
        var pass = $('#pass').val();
        var confpass = $('#confpass').val();

        //just to make sure once again during submit
        //if both are true then only allow submit
        if(pass == confpass){
          allowsubmit = true;
        }
        if(allowsubmit){
          return true;
        }else{
          return false;
        }
      });
    });


    $(document).ready(function() {
  $("#password2").keyup(validate);
});


function validate() {
  var password1 = $("#password1").val();
  var password2 = $("#password2").val();

    
 
    if(password1 == password2) {
       $("#validate-status").text("");        
    }
    else {
        $("#validate-status").text("Passwords Do Not Match!");  
    }
    
}
  </script>

</html>
