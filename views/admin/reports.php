<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard </title>

    <?php $this->load->view("admin/commoncss"); ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
     <!-- sidebar -->
        <?php $this->load->view("admin/sidebar"); ?>  
     <!-- /sidebar -->

        <!-- top navigation -->
               <?php $this->load->view("admin/navbar"); ?> 
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="" >

             <div class="clearfix"></div>
           <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Search</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   <div class="form-group">
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">From Date:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="form-group">
                               <div class='input-group date ' id='myDatepicker'>
                                  <input type='text' class="form-control " />
                                  <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                                  </span>
                               </div>
                           </div>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">To Date:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="form-group">
                               <div class='input-group date ' id='myDatepicker1'>
                                  <input type='text' class="form-control " />
                                  <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                                  </span>
                               </div>
                           </div>
                        </div>
                      </div>
                      

                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         
              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Search</button>
                        </div>
                      </div>

                    </form>
                   </div>
                   
                  </div>
                </div>
              </div>
            
            <div class="row top_tiles" >
              <div class="col-sm-1"></div>
              <div class="animated flipInY col-lg-2 col-md-2 col-sm-6 col-xs-12" >
                <div class="tile-stats">
                  
                  <a href="reports"><div class="count" style="font-size: 16px;">TOTAL PAYMENTS</div>
                 
                  <p><?php echo $amount[0]['income'];  ?></p>
                </div>
              </a>
              </div>
             
              <div class="animated flipInY col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <div class="tile-stats">
                 
                  <a href="#" onclick="displaypayouts();"><div class="count" style="font-size: 16px;">TOTAL PAYOUTS</div></a>
                
                  <p> <?php echo $amount[0]['payout']; ?></p>
                </div>
              </div>
              <div class="animated flipInY col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <div class="tile-stats">
                 
                  <div class="count" style="font-size: 16px;">NET PROFIT</div>
                 
                  <p><?php echo $totalProfit; ?></p>
                </div>
              </div>
             
                
           

<br>




<!-- <div class="col-sm-12" style="background-color: lightblue;" align="center">
  <h2>Single Leg Bonus List</h2>
</div> -->
<div class="col-sm-12 col-xs-12">
                <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>USER </th>
                          <th>ADMIN </th>
                          <th>Sponsor</th>
                          <th id="paymenttitle">PAYMENT TYPE</th>
                          <th>IN PAYMENT</th>
                          <th>TDS</th>
                          <th>ADMIN</th>
                           <th>ACTUAL PAYMENT</th>
                          <th>CREATED DATE</th>
                         
                        </tr>
                      </thead>


                      <tbody>

                        <?php foreach($data as $result){ ?>
                       
                        <tr class="payin">
                          <td><?php echo $result["first_name"]." ".  $result["last_name"]."(".$result["user_id"].")"; ?></td>
                          <td><?php echo $result["admin_id"]; ?></td>
                          <td><?php echo $result["sponsor_id"]; ?></td>
                          <td><?php echo $result["payment_type"]; ?></td>
                          <td><?php echo $result["in_payment"]; ?></td>
                          <?php if($result["payment_type"]=="payout"){ ?>
                          <td><?php $a=($result["out_payment"]*100)/85;
                          echo ($a-($a*5/100));   ?></td>
                          <td><?php echo ($a-($a*10/100));    ?></td>
                        <?php } else { ?>
                            <td>-</td>
                          <td>-</td>
                        <?php }?>
                          <td><?php echo $result["out_payment"]; ?></td>
                          <td><?php echo $result["created_date"]; ?></td>
                          
                          
                        </tr>
                        <tr style="display: none;" class="payout">
                          <td><?php echo $result["first_name"]." ".  $result["last_name"]."(".$result["user_id"].")"; ?></td>
                          <td><?php echo $result["admin_id"]; ?></td>
                          <td><?php echo $result["sponsor_id"]; ?></td>
                          <td><?php echo $result["payment_type"]; ?></td>
                          <td></td>
                          <td>tds</td>
                          <td>admin</td>
                           <td><?php echo $result["out_payment"]; ?></td>
                          <td><?php echo $result["created_date"]; ?></td>
                          
                        </tr>  
                        

                       <?php } ?>
                      
                        <tr>
                        <th>Total Payment: <?php echo $amount[0]['income'];  ?></th>
                        <th>Total Payout: <?php echo $amount[0]['payout'];  ?></th>
                        <td>Net Income:<?php echo $totalProfit; ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                          
                        </tr>
                      </tbody>

                    </table>
                     <h3 id="totalincome">Total Income: <?php echo $amount[0]['income'];  ?></h3>
                        <h3 id="totalpayout" style="display: none;">Total Payout: <?php echo $amount[0]['payout'];  ?></h3>


            </div>


             <div class="col-md-12">

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Product</a>
                          </li>
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Topup</a>
                          </li>
                         
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Payout</a>
                          </li>
                           <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Commission</a>
                          </li>

                         
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                            
                            <div class="col-sm-12 col-xs-12">
                <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>USER </th>
                          <th>ADMIN </th>
                          <th>Sponsor</th>
                          <th id="paymenttitle">PAYMENT TYPE</th>
                          <th>PAYMENT</th>
                          <th>CREATED DATE</th>
                         
                        </tr>
                      </thead>


                      <tbody>

                        <?php foreach($topup as $result){ ?>
                       
                        <tr >
                          <td><?php echo $result["first_name"]." ".  $result["last_name"]."(".$result["user_id"].")"; ?></td>
                          <td><?php echo $result["admin_id"]; ?></td>
                          <td><?php echo $result["sponsor_id"]; ?></td>
                          <td><?php echo $result["payment_type"]; ?></td>
                          <td><?php echo $result["in_payment"]; ?></td>
                          <td><?php echo $result["created_date"]; ?></td>
                          
                          
                        </tr>
                      <!--   <tr  >
                          <td><?php echo $result["first_name"]." ".  $result["last_name"]."(".$result["user_id"].")"; ?></td>
                          <td><?php echo $result["admin_id"]; ?></td>
                          <td><?php echo $result["sponsor_id"]; ?></td>
                          <td><?php echo $result["payment_type"]; ?></td>
                           <td><?php echo $result["out_payment"]; ?></td>
                          <td><?php echo $result["created_date"]; ?></td>
                          
                          
                        </tr> -->

                       <?php } ?>
                      
                        
                      </tbody>

                    </table>
                     


            </div>


                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                       <div class="col-sm-12 col-xs-12">
                <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>USER </th>
                          <th>ADMIN </th>
                          <th>Sponsor</th>
                          <th id="paymenttitle">PAYMENT TYPE</th>
                          <th>PAYMENT</th>
                          <th>CREATED DATE</th>
                         
                        </tr>
                      </thead>


                      <tbody>

                        <?php foreach($product as $result){ ?>
                       
                        <tr >
                          <td><?php echo $result["first_name"]." ".  $result["last_name"]."(".$result["user_id"].")"; ?></td>
                          <td><?php echo $result["admin_id"]; ?></td>
                          <td><?php echo $result["sponsor_id"]; ?></td>
                          <td><?php echo $result["payment_type"]; ?></td>
                          <td><?php echo $result["in_payment"]; ?></td>
                          <td><?php echo $result["created_date"]; ?></td>
                          
                          
                        </tr>
                        <!-- <tr  >
                          <td><?php echo $result["first_name"]." ".  $result["last_name"]."(".$result["user_id"].")"; ?></td>
                          <td><?php echo $result["admin_id"]; ?></td>
                          <td><?php echo $result["sponsor_id"]; ?></td>
                          <td><?php echo $result["payment_type"]; ?></td>
                           <td><?php echo $result["out_payment"]; ?></td>
                          <td><?php echo $result["created_date"]; ?></td>
                          
                          
                        </tr> -->

                       <?php } ?>
                      
                        
                      </tbody>

                    </table>
                    


            </div>
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                       <div class="col-sm-12 col-xs-12">
                <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>USER </th>
                          <th>ADMIN </th>
                          <th>Sponsor</th>
                          <th id="paymenttitle">PAYMENT TYPE</th>
                          <th>PAYMENT</th>
                          <th>CREATED DATE</th>
                         
                        </tr>
                      </thead>


                      <tbody>

                        <?php foreach($payout as $result){ ?>
                       
                       <!--  <tr >
                          <td><?php echo $result["first_name"]." ".  $result["last_name"]."(".$result["user_id"].")"; ?></td>
                          <td><?php echo $result["admin_id"]; ?></td>
                          <td><?php echo $result["sponsor_id"]; ?></td>
                          <td><?php echo $result["payment_type"]; ?></td>
                          <td><?php echo $result["in_payment"]; ?></td>
                          <td><?php echo $result["created_date"]; ?></td>
                          
                          
                        </tr> -->
                        <tr >
                          <td><?php echo $result["first_name"]." ".  $result["last_name"]."(".$result["user_id"].")"; ?></td>
                          <td><?php echo $result["admin_id"]; ?></td>
                          <td><?php echo $result["sponsor_id"]; ?></td>
                          <td><?php echo $result["payment_type"]; ?></td>
                           <td><?php echo $result["out_payment"]; ?></td>
                          <td><?php echo $result["created_date"]; ?></td>
                          
                          
                        </tr>

                       <?php } ?>
                      
                        
                      </tbody>

                    </table>
                    


            </div>
                          </div>

                           <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                                        <div class="col-sm-12 col-xs-12">
                <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>USER </th>
                          <th>ADMIN </th>
                          <th>Sponsor</th>
                          <th id="paymenttitle">PAYMENT TYPE</th>
                          <th>PAYMENT</th>
                          <th>CREATED DATE</th>
                         
                        </tr>
                      </thead>


                      <tbody>

                        <?php foreach($commission as $result){ ?>
                       
                       <!--  <tr >
                          <td><?php echo $result["first_name"]." ".  $result["last_name"]."(".$result["user_id"].")"; ?></td>
                          <td><?php echo $result["admin_id"]; ?></td>
                          <td><?php echo $result["sponsor_id"]; ?></td>
                          <td><?php echo $result["payment_type"]; ?></td>
                          <td><?php echo $result["in_payment"]; ?></td>
                          <td><?php echo $result["created_date"]; ?></td>
                          
                          
                        </tr> -->
                        <tr >
                          <td><?php echo $result["first_name"]." ".  $result["last_name"]."(".$result["user_id"].")"; ?></td>
                          <td><?php echo $result["admin_id"]; ?></td>
                          <td><?php echo $result["sponsor_id"]; ?></td>
                          <td><?php echo $result["payment_type"]; ?></td>
                           <td><?php echo $result["out_payment"]; ?></td>
                          <td><?php echo $result["created_date"]; ?></td>
                          
                          
                        </tr>

                       <?php } ?>
                      
                        
                      </tbody>

                    </table>
                   


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
     function displaypayouts()
     {
      $("#totalincome").hide();
      $(".payin").hide();
       $(".payout").show();
       $("#totalpayout").show();
       $("#paymenttitle").val("OUT PAYMENT");
       //location.reload();
     }

       $('#myDatepicker').datetimepicker({
        format: 'DD/MM/YYYY'
    });
     $('#myDatepicker1').datetimepicker({
       format: 'DD/MM/YYYY'
     });
   </script>
  </body>
</html>