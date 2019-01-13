<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Commission</title>

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
                <h3>Payment Status </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  
                </div>
              </div>
            </div>

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
                      
                      
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Status:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>All</option>
                            <option>Paid</option>
                            <option>Unpaid</option>
                            
                          </select>
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


            <div class="clearfix"></div>
           <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Commission</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Sr.No.</th>
                          <th>Date</th>
                          <th>Total Amount</th>
                          
                          <th>Bonus</th>
                          <th>Net</th>
                          <th>Status</th>
                          <th>Details</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          
                          <td>$320,800</td>
                          <td>$320,800</td>
                          <td>$320,800</td>
                          <td><button class="btn btn-default">Details</button></td>
                        </tr>
                        <tr>
                          <td>apurva Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                         
                          <td>$320,800</td>
                          <td>$320,800</td>
                           <td>$320,800</td>
                          <td><button class="btn btn-default">Details</button></td>
                        </tr>
                        
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
    <!-- Initialize datetimepicker -->
<script>
   $('#myDatepicker').datetimepicker({
        format: 'DD/MM/YYYY'
    });
     $('#myDatepicker1').datetimepicker({
       format: 'DD/MM/YYYY'
     });
</script>    

  </body>
</html>