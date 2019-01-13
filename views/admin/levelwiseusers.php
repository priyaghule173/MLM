<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>View Users</title>

   <?php $this->load->view("admin/commoncss"); ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
           <?php $this->load->view("admin/sidebar"); ?>
          </div>
        

        <!-- top navigation -->
        <?php $this->load->view("admin/navbar"); ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Send Payouts or Rewards</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Users </h2>
                    <div align="right">
                    <label> Select Level</label>
                    <select>
                      <option> Level 1 </option>
                       <option> Level 2 </option>
                       <option> Level 3 </option>
                       <option> Level 4 </option>
                       <option> Level 5 </option>
                       <option> Level 6 </option>
                       <option> Level 7 </option>
                       <option> Level 8 </option>
                       <option> Level 9 </option>
                       <option> Level 10 </option>
                    </select>
                    </div>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                       
                        <tr>
                          <th>Name</th>
                          <th>Member Code</th>
                          <!-- <th>Sponsor ID</th> -->
                         
                          <!-- <th>Member Count</th> -->
                          <th>Actions</th>
                         
                        </tr>
                      
                      </thead>


                      <tbody>
                         <?php foreach($data as $d) {?>
                        <tr>
                          <td><?php echo $d['first_name']." ".$d['last_name']; ?></td>
                          <td><?php echo $d['member_code']; ?></td>
                          <!-- <td><?php echo $d['sponsor_id']; ?></td> -->
                         
                          <!-- <td><?php echo $d['user_payment_status']; ?></td> -->
                          <!-- <td><?php echo $d['product_payment_status']; ?></td> -->
                          <!-- <td>Member Count</td> -->
                          <td><button class="btn btn-success btn-xs">Send Payout</button>
                            <button class="btn btn-success btn-xs">Send Commission</button>
                            <button class="btn btn-info btn-xs">Send Reward</button>
                          </td>
                        </tr>
                      <?php }?> 
                      </tbody>
                    </table>
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

  </body>
</html>