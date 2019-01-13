<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard </title>

    <?php $this->load->view("user/commoncss"); ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
     <!-- sidebar -->
        <?php $this->load->view("user/sidebar"); ?>  
     <!-- /sidebar -->

        <!-- top navigation -->
               <?php $this->load->view("user/navbar"); ?> 
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="jumbotron col-xs-12 col-sm-12">
              <h2>News Information</h2>
            </div>
            <div class="row top_tiles">
              <div class="col-sm-1"></div>
              <div class="animated flipInY col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  
                  <div class="count" style="font-size: 16px;">CODE</div>
                 
                  <p><?php echo $user->member_code;  ?></p>
                </div>
              </div>
             
              <div class="animated flipInY col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <div class="tile-stats">
                 
                  <div class="count" style="font-size: 16px;">STATUS</div>
                
                  <p> <?php echo $user->user_payment_status; ?></p>
                </div>
              </div>
              <div class="animated flipInY col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <div class="tile-stats">
                 
                  <div class="count" style="font-size: 16px;">ACTIVATION DATE</div>
                 
                  <p><?php echo $user->created_on; ?></p>
                </div>
              </div>
              <div class="animated flipInY col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <div class="tile-stats">
                 
                  <div class="count" style="font-size: 16px;">SPONSOR</div>
                 
                  <p><?php echo $user->sponsor_id; ?></p>
                </div>
              </div>
                <div class="animated flipInY col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <div class="tile-stats">
                 
                  <div class="count" style="font-size: 16px;">My Direct</div>
                
                  <p><?php echo $user->member_direct_count; ?></p>
                </div>
              </div>
           

<br>
<!-- <div class="col-sm-12" style="background-color: lightblue;" align="center">
  <h2>Single Leg Bonus List</h2>
</div> -->
<div class="col-sm-12 col-xs-12">
                <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Stage</th>
                          <th>Count</th>
                          <th>Topup</th>
                          <th>Payout</th>
                         
                        </tr>
                      </thead>


                      <tbody>

                        <?php foreach($package as $result){ ?>
                       
                        <tr>
                          <td><?php echo $result["stage"]; ?></td>
                          <td><?php echo $result["count"]; ?></td>
                          <td><?php echo $result["topup"]; ?></td>
                          <td><?php echo $result["payout"]; ?></td>
                          
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
  </body>
</html>