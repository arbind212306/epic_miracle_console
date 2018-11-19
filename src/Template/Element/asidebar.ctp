<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
<!--      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>-->
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
		 <li class="<?php if($value == 1) echo"active";?>">
          <a href="<?php echo $this->Url->build(['controller'=>'Users','action'=>'dashboard']) ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                      </a>
                      
        </li>
        <li class="<?php if($value == 2) echo"active";?>">
          <a href="<?php echo $this->Url->build(['controller'=>'Admin','action'=>'viewClients']) ?>">
            <i class="fa fa-dashboard"></i> <span>Manage Client</span>
            
          </a>
                         
        
        </li>
        <li class="<?php if($value == 3) echo"active";?>">
          <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'manageContract']) ?>">
            <i class="fa fa-files-o"></i>
            <span>Contract</span>
                    </a>
             </li>
          <!--<ul class="treeview-menu">
            <li><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'addService']) ?>"><i class="fa fa-circle-o"></i> Add </a></li>
            <li><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'manageContract']) ?>"><i class="fa fa-circle-o"></i> View </a></li>
          </ul> -->
       
        <li class="treeview  <?php if(($value == 4) || ($value == 5) || ($value == 6)) echo"active";?>">
          <a href="#">
            <i class="fa fa-users"></i> <span>Masters </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=" <?php if($value == 4) echo"active";?>"><a href="<?= $this->Url->build(['controller' => 'Admin', 'action' => 'view-db']) ?>"><i class="fa fa-circle-o"></i> Database Configuration</a></li>
            <li class=" <?php if($value == 5) echo"active";?>"><a href="<?= $this->Url->build(['controller' => 'BusinessUnit', 'action' => 'manageBusinessUnit']) ?>"><i class="fa fa-circle-o"></i> Business Unit </a></li>
            <li class=" <?php if($value == 6) echo"active";?>"><a href="<?= $this->Url->build(['controller' => 'Industry', 'action' => 'manageIndustry']) ?>"><i class="fa fa-circle-o"></i> Industry </a></li>
            
            
            
         </ul>
        </li>
        
        
        
        <li class="">
          <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'login']) ?>">
            <i class="fa fa-database"></i> <span>Client Login</span>
           
          </a>
         
        </li>
        
        
        
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
