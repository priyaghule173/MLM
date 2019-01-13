<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Payment </title>

  <?php $this->load->view("admin/commoncss"); ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php $this->load->view("admin/sidebar.php"); ?>
            <!-- /menu footer buttons -->
         

        <!-- top navigation -->
        <?php $this->load->view("admin/navbar.php"); ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Payment Status</h3>
              </div>

             
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    
                    
                     
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-12">



                           <div class="col-md-12 col-sm-12 col-xs-12">
                             <div class="x_panel">
                  <div class="x_title" align="center">
                   

                     <button class="btn btn-success" id="selectall">Select All</button>
                   <button class="btn btn-success" id="approvealltopup">Approve Topup</button>
                    <button class="btn btn-success" id="approveallproduct">Approve Product Payement</button>
                    <button class="btn btn-success" id="approveallpayment">Approve Both</button>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
                    <table id="datatable"  class="table table-striped table-bordered datatable-buttons bulk_action">
                      <thead>
                       
                        <tr>
                          <th><input type="checkbox" id="check-all" class="flat"></th>
                          <th>id</th>
                          <th>Name</th>
                          <th>Member Code</th>
                          <th>Sponsor ID</th>
                          <th>Product Payment Status</th>
                         
                          <th>Topup Payment Status</th>
                          
                         
                          <th>Actions</th>
                         
                        </tr>
                      
                      </thead>


                      <tbody>
                         <?php foreach($unpaiddata as $d) {?>
                        <tr>
                          <td>
                            <input type="checkbox" id="check-item" class="flat">
                          </td>
                           <td ><?php echo $d['id']; ?></td>
                          <td name="first_name[]"><?php echo $d['first_name']." ".$d['last_name']; ?></td>
                          <td ><?php echo $d['member_code']; ?></td>
                          <td><?php echo $d['sponsor_id']; ?></td>

                            <td><?php if ($d['product_payment_status']=="unpaid"){ ?>
                              <button class="btn btn-success btn-xs"  onclick="openProductModal('<?php echo $d['member_code']; ?>')">Approve Product payment</button>


                              <!-- modal start -->

                           <div class="modal fade" id="myproductpayment" role="dialog">
                              <div class="modal-dialog modal-sm">
                                 <div class="modal-content">
                                   <div class="modal-header">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                   <h4 class="modal-title">Are You Sure?</h4>
                                  </div>
                                 <div class="modal-body">

                                    <input type="hidden" name="productinput" id="productinput">
                             <button class="btn btn-success " onclick="approveproductpayment(<?php echo $d['id'];  ?>,'<?php echo $d['member_code'] ?>',2)">Yes</button>
                             <button type="button" class="btn btn-danger " data-dismiss="modal">No</button>
                             </div>
 </div>
    </div>
  </div>
</div>
<!-- modal ends -->

                          <?php }else{ echo "paid" ?>

                          <?php } ?></td>


                          
                          
                          <td><?php if ($d['user_payment_status']=="unpaid"){ ?>
                              <button class="btn btn-success btn-xs"   onclick="openTopupModal('<?php echo $d['member_code']; ?>')">Approve topup payment</button>

                              <!-- modal start -->

                           <div class="modal fade" id="mytopuppayment" role="dialog">
                              <div class="modal-dialog modal-sm">
                                 <div class="modal-content">
                                   <div class="modal-header">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                   <h4 class="modal-title">Are You Sure?</h4>
                                  </div>
                                 <div class="modal-body">
                                   <input type="hidden" name="topupinput" id="topupinput">
                             <button class="btn btn-success " onclick="approvetopuppayment(<?php echo $d['id'];  ?>,'<?php echo $d['member_code'] ?>',1)">Yes</button>
                             <button type="button" class="btn btn-danger " data-dismiss="modal">No</button>
                             </div>
 </div>
    </div>
  </div>
</div>
<!-- modal ends -->


                          <?php }else{ echo "paid" ?>

                          



                          <?php } ?></td>


                        
                         
                         
                          <td><?php if ($d['user_payment_status']=="unpaid" && $d['user_payment_status']=="unpaid" ){ ?>
                            <button  class="btn btn-success btn-xs" onclick="openModal('<?php echo $d['member_code']; ?>')" id="approve">Approve Both
                            </button>


                              <!-- modal start -->

                           <div class="modal fade" id="fullpayment" role="dialog">
                              <div class="modal-dialog modal-sm">
                                 <div class="modal-content">
                                   <div class="modal-header">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                   <h4 class="modal-title">Are You Sure?</h4>
                                  </div>
                                 <div class="modal-body">
                                  <input type="hidden" name="hi" id="hi">
                             <button class="btn btn-success " onclick="approvepayment(<?php echo $d['id'];  ?>,'<?php echo $d['member_code'] ?>',6)">Yes</button>
                             <button type="button" class="btn btn-danger " data-dismiss="modal">No</button>
                             </div>
 </div>
    </div>
  </div>
</div>
<!-- modal ends -->

                          <?php } else { ?>
                            <button  class="btn btn-success btn-xs"  disabled>Approve Both</button>

                          <?php } ?>
                          
                          
                        </tr>
                      <?php }?> 
                      </tbody>
                    </table>

                  </div>
                  
                </div>
              </div>
                          </div>

                          <!-- Topup  -->
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">

                                           



                           
                          </div>
                         
                        </div>
                      </div>

                    </div>
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

   <?php $this->load->view("admin/commonjs"); ?>
   <script type="text/javascript">
   
 $("tr").addClass("selected");
 

function openModal($member_code)
{
  //alert($member_code);

  $("#hi").val($member_code);
  $('#fullpayment').modal({
    show: 'true'
}); 
}


function openProductModal($member_code)
{
  //alert($member_code);

  $("#productinput").val($member_code);
  $('#myproductpayment').modal({
    show: 'true'
}); 
}

function openTopupModal($member_code)
{
  //alert($member_code);

  $("#topupinput").val($member_code);
  $('#mytopuppayment').modal({
    show: 'true'
}); 
}




//approve payment

 function onApprove()
      {
        location.reload();
      }
     
    

     function onError(xhr,status,error)
     {
      console.log(xhr);
      console.log(status);
      console.log(error);
     }


 function approvepayment($id,$member_code,$payment_type_id){
 

  $member=document.getElementById('hi').value;
  
        var base_url="<?php echo base_url('approvepayment'); ?>"+"/"+$id+"/"+$member+"/"+$payment_type_id;
          //alert(base_url);              
       var request=
       {
         url : base_url,
         type :'POST',
         success : onApprove,
         headers :{ Accept : 'application/json'},
         error : onError
       };

        $.ajax(request);
      };
//end approve payment

//topup payment 
  function approvetopuppayment($id,$member_code,$payment_type_id){

       $member=document.getElementById('topupinput').value;
  
        var base_url="<?php echo base_url('approvetopuppayment'); ?>"+"/"+$id+"/"+$member+"/"+$payment_type_id;
       var request=
       {
         url : base_url,
         type :'POST',
         success : onApprove,
         headers :{ Accept : 'application/json'},
         error : onError
       };

        $.ajax(request);
      };
//end topup
//start product
function approveproductpayment($id,$member_code,$payment_type_id){

       $member=document.getElementById('productinput').value;
  
        var base_url="<?php echo base_url('approveproductpayment'); ?>"+"/"+$id+"/"+$member+"/"+$payment_type_id;
       var request=
       {
         url : base_url,
         type :'POST',
         success : onApprove,
         headers :{ Accept : 'application/json'},
         error : onError
       };

        $.ajax(request);
      };
//end product'

 
      


   </script>
  </body>
</html>