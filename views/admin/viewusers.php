<!DOCTYPE html>
<html lang="en">
  <head>
<style>
.center {
    text-align: center;
}

<style>
.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
}
</style>
  
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
              <div class="x_panel">
                  <!-- <div class="x_title"> -->
                  <!--   <h2>Search</h2> -->
                   
                    <!-- <div class="clearfix"></div> -->
                  <!-- </div> -->
                  <div class="x_content">
                   <!-- <div class="form-group">
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">From Date:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="form-group">
                               <div class='input-group date ' id='myDatepicker'>
                                  <input type='text' class="form-control" id='fromdate' />
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
                                  <input type='text' class="form-control" id='todate' />
                                  <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                                  </span>
                               </div>
                           </div>
                        </div>
                      </div>

                      <div class="from_group pull-right">
                        <button class="btn btn-success" id="submit">Submit</button>
                      </div>
                    </div> -->
                  <!-- </div> -->
                <!-- </div> -->

              
              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Users </h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>

                    <table  id="datatable" class="table table-striped table-bordered">
                      <thead>
                       
                        <tr>
                          <th>id</th>
                          <th>Name</th>
                          <th>Member Code</th>
                          <th>Sponsor ID</th>
                          <th>Mobile Number</th>
                          <th>Topup Payment Status</th>
                          <th>Product Payment Status</th>
                         
                          <th>Actions</th>
                         
                        </tr>
                      
                      </thead>


                      <tbody>
                         <?php foreach($data as $d) {?>
                        <tr>
                           <td ><?php echo $d['id']; ?></td>
                          <td name="first_name[]"><?php echo $d['first_name']." ".$d['last_name']; ?></td>
                          <td ><?php echo $d['member_code']; ?></td>
                          <td><?php echo $d['sponsor_id']; ?></td>
                          <td><?php echo $d['mob_no']; ?></td>
                          <td><?php echo $d['user_payment_status']; ?></td>
                          <td><?php echo $d['product_payment_status']; ?></td>
                         
                          <td>
                            <a href="<?php echo base_url('viewmemberdirects')."/".$d['member_code'] ?>">
                           <button class="btn btn-info btn-xs" >View Member Directs</button>
                           </a>

                          <button class="btn btn-danger btn-xs" onclick="disableuser(<?php echo $d['id']; ?>)">Disable User</button></td>
                          
                        </tr>
                      <?php }?> 
                      </tbody>
                    </table>
                    <div class="center">
                   <div class="pagination">
                    <?= $this->pagination->create_links(); ?>
                  
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

<script>
   $('#myDatepicker').datetimepicker({
        format: 'YYYY-MM-DD'
       
    });
     $('#myDatepicker1').datetimepicker({
       format: 'YYYY-MM-DD'
       
     });

     function onDataReceived(data,status,xhr)
     {
     
      // console.log(data[0].id);
        var table = $('#datatable-buttons').DataTable();
      $('#datatable-buttons').empty();

      }

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


     $(document).ready(function(){
      
      $("#submit").click(function(){
       
        var fromdate=$("#fromdate").val();
        var todate=$("#todate").val();
        var base_url="<?php echo base_url('datewiseusers'); ?>";
       var request=
       {
         url : base_url+"/"+fromdate+"/"+todate,
         type :'GET',
         success : onDataReceived,
         headers :{ Accept : 'application/json'},
         error : onError
       };

        $.ajax(request);
      });

     




     
     });

      function disableuser($id){

        var base_url="<?php echo base_url('disableuser'); ?>";
       var request=
       {
         url : base_url+"/"+$id,
         type :'POST',
         success : onApprove,
         headers :{ Accept : 'application/json'},
         error : onError
       };

        $.ajax(request);
      };


if ( $.fn.dataTable.isDataTable( '#datatable' ) ) {
    table = $('#datatable').DataTable();
}
else {
    table = $('#datatable').DataTable( {
        paging: false
    } );
}

</script>  

  </body>
</html>