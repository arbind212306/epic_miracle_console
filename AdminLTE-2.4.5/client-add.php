  
 <?php include('header.php');?>
  <?php include('sidebar.php');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

     <!-- Main content -->
    <section class="content">
      <div class="row">
	     <form role="form">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Client</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         
              <div class="box-body">
			  <div class="form-group">
                  <label for="exampleInputEmail1">Company Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Company Owner</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Admin Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Company Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Company Logo</label>
                  <input type="file" id="exampleInputFile">

                  
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          

         
          <!-- /.box -->

          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
           <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           
             <div class="box-body">
			  <div class="form-group">
                  <label for="exampleInputEmail1">Company Address</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Company Phone No.</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Website Url</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                <label>State</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                        style="width: 100%;">
                  <option>Noida</option>
                  <option>Gurgaon</option>
                  <option>Chennei</option>
                 
                </select>
              </div>
			  <div class="form-group">
                <label>Services Need</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                        style="width: 100%;">
                  <option>Onboard</option>
                  <option>Myvoice</option>
                  <option>Spring Board</option>
                 
                </select>
              </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Role</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
				
              <!-- /.box-body -->
              
              <!-- /.box-footer -->
           
          </div>
        </div>
        <!--/.col (right) -->
		  </form>
      </div>
	 
      <!-- /.row -->
    </section>
    <!-- /.content -->

  <!-- /.content-wrapper -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php');?>