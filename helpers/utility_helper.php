<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
ob_start();
if ( ! function_exists('pretty_print')){
  //success alert
  function pretty_print($data)
  { 
    echo "<pre>";print_r($data);echo "</pre>";
    return $data;
  }
}
if ( ! function_exists('success_alert')){
  //success alert
  function success_alert($msg_text)
  { //echo "success_alert";
      //$data = array(
      $result="<div class='alert alert-success alert-dismissible fade in' role='alert'>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                      </button>
                      <strong>Success!</strong> $msg_text
                  </div>";
      //          );
     //     return $result;
  }
}
if ( ! function_exists('failure_alert')){
  function failure_alert($msg_text)
  { //echo "failure_alert";
    //$data = array(
    $result="<div class='alert alert-danger alert-dismissible fade in' role='alert'>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>×</span>
    </button>
    <strong>Error!</strong> $msg_text.
    </div>";
    //);
    return $result;
  }
}

if(!function_exists('emailConfig'))
{
    function emailConfig()
    {
        $CI->load->library('email');
        $config['protocol'] = PROTOCOL;
        $config['smtp_host'] = SMTP_HOST;
        $config['smtp_port'] = SMTP_PORT;
        $config['mailpath'] = MAIL_PATH;
        $config['charset'] = 'UTF-8';
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        $config['wordwrap'] = TRUE;
    }
}



//verify password
if (! function_exists('verify_password')) {
  function verify_password($password,$hashed_password)
  {
    // If the password inputs matched the hashed password in the database
    // Do something, you know... log them in
    return password_verify($password,$hashed_password);
  }
}

