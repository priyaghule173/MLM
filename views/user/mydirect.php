<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Direct</title>
<?php $this->load->view("user/commoncss"); ?>
  
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
    <!-- sidebar -->
    <?php $this->load->view("user/sidebar.php"); ?>
    <!-- /sidebar -->
        <!-- top navigation -->
         <?php $this->load->view("user/navbar.php"); ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>My Direct </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder=" Search Member Code ">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Downline Information</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          
                          <th>Member Name</th>
                          <th>Member Code</th>
                          <th>Contact Number</th>
                          <th>Reg. Date</th>
                          <th>Activation Date</th>
                          <th>Status</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php foreach($result as $r){?>
                        <tr>
                          
                          <td><?php echo $r['first_name']; ?></td>
                          <td><?php echo $r['member_code']; ?></td>
                          <td><?php echo $r['mob_no']; ?></td>
                          <td><?php echo $r['created_on']; ?></td>
                          <td><?php echo $r['created_on']; ?></td>
                          <td>Payement Status</td>
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