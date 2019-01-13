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
                <h3>Commission Detail </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
           <div class="col-md-12 col-sm-12 col-xs-12">
          
              </div>


            <div class="clearfix"></div>
           <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Commission Detail</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          
                          <th>TDS</th>
                          <th>Admin Charges</th>
                        
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td>5%</td>
                          <td>10%</td>
                          
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