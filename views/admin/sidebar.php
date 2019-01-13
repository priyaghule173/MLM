
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url('/admin/'); ?>" class="site_title"><i class="fa fa-exchange"></i> <span>Paisa Paid</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
               
              </div>
              <div class="profile_info">
                <span></span>
                <h2> Welcome,&nbsp <?php echo $this->session->userdata("first_name")." ".$this->session->userdata("last_name"); ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Main Navigation</h3>
                <ul class="nav side-menu">
                 <!--  <li><a href="<?php echo base_url('adduser'); ?>"><i class="fa fa-home"></i> Add User </a> </li> -->
                    <li><a href="<?php echo base_url('viewusers'); ?>"><i class="fa fa-home"></i>View Users </a> </li>
                  <li><a href="<?php echo base_url('packages'); ?>"><i class="fa fa-home"></i>Packages </a> </li>  

                 <li><a href="<?php echo base_url('rewardsbyadmin'); ?>"><i class="fa fa-home"></i> Rewards </a>
                   
                  </li>

                  <li><a href="<?php echo base_url('payment'); ?>"><i class="fa fa-home"></i> Payment </a>
                   
                  </li>


                  <li><a><i class="fa fa-bar-chart-o"></i>Send Payouts<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
                      <li><a href="<?php echo base_url('sendpayout'); ?>"> Payouts</a></li>
                       <li><a href="<?php echo base_url('sendcommission'); ?>"> Commission</a></li>

                       <li><a href="<?php echo base_url('sendrewards'); ?>"> Rewards</a></li>                     
                    </ul>
                  </li>





                  <li><a href="<?php echo base_url('reports'); ?>"><i class="fa fa-home"></i> Reports </a>
                   
                  </li>

                  
                   
                  </li>
                 
                 <!--  <li><a><i class="fa fa-bar-chart-o"></i>Charges<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
                      <li><a href="<?php echo base_url('commissiondetail'); ?>">TDS & Admin</a></li>
                     
                    </ul>
                  </li>
                   
                  </li>
                  <li><a><i class="fa fa-table"></i> Change Password <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('changepwdform'); ?>">Login Password</a></li>
                      
                    </ul>
                  </li> -->
                  
                  

                   

                  

                  <!-- <li><a><i class="fa fa-bar-chart-o"></i>Pin <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('/greenpintransfer/'); ?>">Green Pin Transfer</a></li>
                      <li><a href="<?php echo base_url('/pinreport/'); ?>">Pin Report</a></li>
                       <li><a href="<?php echo base_url('/transferedpinlist/'); ?>">Transfered Pin List</a></li>
                    </ul>
                  </li> -->
                   <li><a href="<?php echo base_url('signout');?>"><i class="fa fa-sign-out" ></i>Logout</a>
                   </li>
                </ul>
              </div>
             
            </div>

            
          </div>
        </div>