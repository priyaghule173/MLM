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
                <h3> All Users</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Packages </h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Stage</th>
                          <th>Count</th>
                          <th>Topup</th>
                          <th>Payout</th>
                          <!-- <th>Action</th> -->
                         
                        </tr>
                      </thead>


                      <tbody>

                        <?php foreach($package as $result){ ?>
                       
                        <tr>
                          <td><?php echo $result["stage"]; ?></td>
                          <td><?php echo $result["count"]; ?></td>
                          <td><?php echo $result["topup"]; ?></td>
                          <td><?php echo $result["payout"]; ?></td>
                          <!-- <td>
                            <a href="">
                              <button class="btn btn-info" name="edit">Edit
                              </button>
                            </a>
                             <a href="">
                              <button class="btn btn-danger" name="edit">Delete
                              </button>
                             </a></td> -->
                          
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
        var table = $('#myTable').DataTable();
 
          $('#datatable-buttons').on( 'click', 'tr', function () {
          var id = table.row( this ).id();
 
          alert( 'Clicked row id '+id );
} );
      </script>

  </body>
</html>