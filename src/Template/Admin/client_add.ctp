

<!-- header section ends here -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>-->
    </section>
<!-- Left side column. contains the logo and sidebar -->

 

    <section class="content">
            <div class="box box-primary">
             <!-- <form action="" name="myForm"  method="post" enctype = "multipart/form-data" onsubmit="return(validate());"> -->
                   <div class="box-header with-border">
              <h3 class="box-title text-center" style="margin-left: 10px;">Add Client</h3>
            </div> 
      <div class="row">
          <?php $flash_message = $this->Flash->render() ?>
    <?php if (!empty(@$flash_message)) { ?>
    <div class="col-md-10 col-sm-12 col-xs-12">
    <div class="alert alert-success alert-dismissible" style="text-align:center;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Record has been  successfully inserted.</h4>
               </div>
              </div>
       
       
    <?php } ?>
          
          
         
           <?= $this->Form->create('Clientmasters', array('url' => array('controller' => 'Admin', 'action' => 'clientAdd'), 'enctype' => 'multipart/form-data', 'id' => 'add_user')); ?>
          
        
	    
        <!-- left column -->
       <div class="col-md-12 " >
        <div class="col-md-5 col-xs-12 col-sm-5">
          <!-- general form elements -->
      
            <br> 
          <div class="form-group" style="padding-top:10px;">
                  <label for="client_type">Client Type</label>
                <div class="form-group">
               
                  <select class="form-control" id="client_type" name="client_type">
                      <option value="-1">Choose an option</option>
                    <option value="External">External</option>
                    <option value="Internal">Internal</option>
                   
                  </select>
                <span class="error_label" id="check_client_type"></span>
                </div>
                </div>
            
			  <div class="form-group">
                  <label for="client_name">Client Name</label>
		
                    <input type="text" id="client_name"  name="client_name" class="form-control"  placeholder="">
                <span class="error_label" id="check_client_name"></span>
                          </div>
				<div class="form-group" style="padding-top:50px;">
                  <label for="industry_name">Industry Name</label>
                  <input type="text" id="industry_name" name="industry_name" class="form-control" placeholder="">
                  <span class="error_label" id="check_industry_name"></span>
                </div>
				<div class="form-group">
                  <label for="bu">Business unit</label>
                  <input type="text" name="bu"  class="form-control" id="bu" placeholder="">
                  <span class="error_label" id="check_bu"></span>
                </div>
                <div class="form-group">
                  <label for="email_id">Email address</label>
                  <input type="email" name="email_id" class="form-control" id="email_id" placeholder="">
                  <span class="error_label" id="check_email_id"></span>
                </div>
            <div class="form-group">
                  <label for="phone">Company Phone No.</label>
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="">
                  <span class="error_label" id="check_phone"></span>
                </div>
             <div class="form-group">
                  <label for="fax">Fax</label>
                  <input type="text" name= "fax" class="form-control" id="fax" placeholder="">
                  <span class="error_label" id="check_fax"></span>
                </div>
                <div class="form-group">
                  <label for="client_code">Client code</label>
                  <input type="text" name="client_code" class="form-control" id="client_code" placeholder="">
                  <span class="error_label" id="check_client_code"></span>
                </div>
            
            <div class="form-group">
                  <label for="cp_name">Contact person name</label>
                  <input type="text" name="cp_name" class="form-control" id="cp_name" placeholder="">
                  <span class="error_label" id="check_cp_name"></span>
                </div>
                <div class="form-group">
                  <label for="cp_mobile">Contact person mobile</label>
                  <input type="text" name="cp_mobile" class="form-control" id="cp_mobile" placeholder="">
                  <span class="error_label" id="check_cp_mobile"></span>
                </div>
               <div class="form-group">
                  <label for="cp_email_id">Contact person email</label>
                  <input type="email" name="cp_email_id" class="form-control" id="cp_email_id" placeholder="">
                  <span class="error_label" id="check_cp_email_id"></span>
                </div>
                        
				
            <div class="form-group">
                  <label for="description">Description</label>
                  <textarea   name="description" class="form-control" id="description" placeholder=""></textarea>
                  <span class="error_label" id="check_description"></span>
                </div>
            
            <div class="form-group">
                  <label for="status">Status</label>
                <div class="form-group">
                
                  <select class="form-control" name="status" id="status">
                     
                    <option value="1">Active</option>
                    <option value="2">Inactive</option>
                   
                  </select>
                    <span class="error_label" id="check_status"></span>
                </div>
                </div>
            
             
          
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-5 col-xs-12 col-sm-5">
                     <div class="box-header with-border">
                        </div>
                    
             <div class="box-body">
                   
                 
                 <div class="form-group">
                  <label for="website">Website Url</label>
                  <input type="text" name="website" class="form-control" id="website" placeholder="">
                  <span class="error_label" id="check_website"></span>
                </div>
                <div class="form-group">
                <label>Services Need</label>
                <select class="form-control select2" id="service_needed" multiple="multiple" name="service_needed[]"  data-placeholder="Select a State" style="width: 100%;">
                  <?php echo $service_lists; ?>
                  <?php// foreach ($service_lists as  $value) { ?>
                    <!-- <option value="<?php echo $value['id'] ?>"><?php echo $value['product_name'] ?></option> -->
                 <?php // } ?> 
                </select>
                <span class="error_label" id="check_user_type"></span>
              </div> 
			 
                 
			  <div class="form-group">
                  <label for="address1">Company Address</label>
                  <input type="text" name="address1" class="form-control" id="address1" placeholder="">
                  <span class="error_label" id="check_address1"></span>
                </div>
                 
                 <div class="form-group">
                  <label for="address2">Company Address2</label>
                  <input type="text" name="address2" class="form-control" id="address2" placeholder="">
                  <span class="error_label" id="check_address2"></span>
                </div>
				
			<div class="form-group">
                <label>City</label>
                <input type="text" name="city" class="form-control" id="city" placeholder="">
                <span class="error_label" id="check_city"></span>
              </div>	
                 <div class="form-group">
                <label>State</label>
                <input name="state" type="text" class="form-control" id="state" placeholder="">
                <span class="error_label" id="check_state"></span>
              </div>	
                  <div class="form-group">
                <label>Country</label>
                <input name= "country" type="text" class="form-control" id="country" placeholder="">
                <span class="error_label" id="check_country"></span>
              </div>	
                 <div class="form-group">
                <label>Zip</label>
                <input name="zip" type="text" class="form-control" id="zip" placeholder="">
                <span class="error_label" id="check_zip"></span>
              </div>	
                <div class="form-group">
                  <label for="created_by">Created by</label>
                  <input name="created_by" type="text" class="form-control" id="created_by" placeholder="">
                  <span class="error_label" id="check_created_by"></span>
                </div>
				
             <div class="form-group">
                  <label for="activation_date">Activation date</label>
                  <input  name="activation_date" type="date" class="form-control" id="activation_date" placeholder="">
                  <span class="error_label" id="check_activation_date"></span>
                </div>
                  <div class="form-group">
                  <label for="deactivation_date">Deactivation date</label>
                  <input name="deactivation_date" type="date" class="form-control" id="deactivation_date" placeholder="">
                  <span class="error_label" id="check_deactivation_date"></span>
                </div>
                 
                 <div class="form-group">
                  <label for="logo">Company Logo</label>
                  <input name="logo" type="file" id="logo">
                  <span class="error_label" id="check_logo"></span>
      
                </div>
                 
          </div>
    
      </div>
        <div class="col-md-12">
        <div class="box-footer text-center">
                <button type="submit" name="submit" id="myForm" class="btn btn-primary" >Submit</button>
              </div>
            </div>
         
          </div>
                
       <?= $this->Form->end();?>
	 </div>
                  </div>
      <!-- /.row -->
    </section>
   
  </div>
  <!-- /.content-wrapper -->
   
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
 
<!-- ./wrapper -->
<?= $this->Html->script('jquery.min'); ?>
 <script type="text/javascript">
   $('#myForm').click(function(){
    var valid = true;
if($('#client_name').val()=='')
  {
    $('#client_name').css('border','1px solid red');
    $('#check_client_name').text('Please enter Client Name ');
    $('#check_client_name').addClass('error_label');
    valid = false;
    $('#client_name').focus();
  }
 else
  {
    $('#client_name').css('border','1px solid #cccccc');   
    $('#check_client_name').text('');
   }
   if($('#industry_name').val()=='')
    {
    $('#industry_name').css('border','1px solid red');
    $('#check_industry_name').text('Please enter industry Name ');
    $('#check_industry_name').addClass('error_label');
    valid = false;
    $('#industry_name').focus();
  }
 else
  {
    $('#industry_name').css('border','1px solid #cccccc');   
    $('#check_industry_name').text('');
   }
   
   
   
   if($('#phone').val()=='')
  {
    $('#phone').css('border','1px solid red');
    $('#check_phone').text('Please enter phone ');
    $('#check_phone').addClass('error_label');
    valid = false;
    $('#phone').focus();
  }
 else
  {
    $('#phone').css('border','1px solid #cccccc');   
    $('#check_phone').text('');
   }
   if($('#fax').val()=='')
    {
    $('#fax').css('border','1px solid red');
    $('#check_fax').text('Please enter fax ');
    $('#check_fax').addClass('error_label');
    valid = false;
    $('#fax').focus();
  }
 else
  {
    $('#fax').css('border','1px solid #cccccc');   
    $('#check_fax').text('');
   }
   
   
   if($('#client_code').val()=='')
  {
    $('#client_code').css('border','1px solid red');
    $('#check_client_code').text('Please enter Client Code ');
    $('#check_client_code').addClass('error_label');
    valid = false;
    $('#client_code').focus();
  }
 else
  {
    $('#client_code').css('border','1px solid #cccccc');   
    $('#check_client_code').text('');
   }
   if($('#cp_name').val()=='')
    {
    $('#cp_name').css('border','1px solid red');
    $('#check_cp_name').text('Please enter Contact Person Name ');
    $('#check_cp_name').addClass('error_label');
    valid = false;
    $('#cp_name').focus();
  }
 else
  {
    $('#cp_name').css('border','1px solid #cccccc');   
    $('#check_cp_name').text('');
   }
   
   
   
   if($('#cp_mobile').val()=='')
  {
    $('#cp_mobile').css('border','1px solid red');
    $('#check_cp_mobile').text('Please enter Contact Person mobile ');
    $('#check_cp_mobile').addClass('error_label');
    valid = false;
    $('#cp_mobile').focus();
  }
 else
  {
    $('#cp_mobile').css('border','1px solid #cccccc');   
    $('#check_cp_mobile').text('');
   }
   if($('#description').val()=='')
    {
    $('#description').css('border','1px solid red');
    $('#check_description').text('Please enter Description ');
    $('#check_description').addClass('error_label');
    valid = false;
    $('#description').focus();
  }
 else
  {
    $('#description').css('border','1px solid #cccccc');   
    $('#check_description').text('');
   }
   
  
   if($('#bu').val()=='')
    {
    $('#bu').css('border','1px solid red');
    $('#check_bu').text('Please enter Business Unit ');
    $('#check_bu').addClass('error_label');
    valid = false;
    $('#bu').focus();
  }
 else
  {
    $('#bu').css('border','1px solid #cccccc');   
    $('#check_bu').text('');
   }
   
   
   
   if($('#email_id').val()=='')
  {
    $('#email_id').css('border','1px solid red');
    $('#check_email_id').text('Please enter email Address ');
    $('#check_email_id').addClass('error_label');
    valid = false;
    $('#email_id').focus();
  }
 else
  {
    $('#email_id').css('border','1px solid #cccccc');   
    $('#check_email_id').text('');
   }
   if($('#cp_email_id').val()=='')
    {
    $('#cp_email_id').css('border','1px solid red');
    $('#check_cp_email_id').text('Please enter Contact Person email id ');
    $('#check_cp_email_id').addClass('error_label');
    valid = false;
    $('#cp_email_id').focus();
  }
 else
  {
    $('#cp_email_id').css('border','1px solid #cccccc');   
    $('#check_cp_email_id').text('');
   }
   
   
  
   if($('#website').val()=='')
    {
    $('#website').css('border','1px solid red');
    $('#check_website').text('Please enter Website');
    $('#check_website').addClass('error_label');
    valid = false;
    $('#website').focus();
  }
 else
  {
    $('#website').css('border','1px solid #cccccc');   
    $('#check_website').text('');
   }
   
   
   
   if($('#address1').val()=='')
  {
    $('#address1').css('border','1px solid red');
    $('#check_address1').text('Please enter address1 ');
    $('#check_address1').addClass('error_label');
    valid = false;
    $('#address1').focus();
  }
 else
  {
    $('#address1').css('border','1px solid #cccccc');   
    $('#check_address1').text('');
   }
   if($('#city').val()=='')
    {
    $('#city').css('border','1px solid red');
    $('#check_city').text('Please enter city ');
    $('#check_city').addClass('error_label');
    valid = false;
    $('#city').focus();
  }
 else
  {
    $('#city').css('border','1px solid #cccccc');   
    $('#check_city').text('');
   }
   
   if($('#state').val()=='')
  {
    $('#state').css('border','1px solid red');
    $('#check_state').text('Please enter State ');
    $('#check_state').addClass('error_label');
    valid = false;
    $('#state').focus();
  }
 else
  {
    $('#state').css('border','1px solid #cccccc');   
    $('#check_state').text('');
   }
   if($('#country').val()=='')
    {
    $('#country').css('border','1px solid red');
    $('#check_country').text('Please enter country ');
    $('#check_country').addClass('error_label');
    valid = false;
    $('#country').focus();
  }
 else
  {
    $('#country').css('border','1px solid #cccccc');   
    $('#check_country').text('');
   }
   
   
   
   if($('#zip').val()=='')
  {
    $('#zip').css('border','1px solid red');
    $('#check_zip').text('Please enter Zip ');
    $('#check_zip').addClass('error_label');
    valid = false;
    $('#zip').focus();
  }
 else
  {
    $('#zip').css('border','1px solid #cccccc');   
    $('#check_zip').text('');
   }
   if($('#created_by').val()=='')
    {
    $('#created_by').css('border','1px solid red');
    $('#check_created_by').text('Please enter Created Person Name  ');
    $('#check_created_by').addClass('error_label');
    valid = false;
    $('#created_by').focus();
  }
 else
  {
    $('#created_by').css('border','1px solid #cccccc');   
    $('#check_created_by').text('');
   }
   
   if($('#activation_date').val()=='')
  {
    $('#activation_date').css('border','1px solid red');
    $('#check_activation_date').text('Please enter Activation Date ');
    $('#check_activation_date').addClass('error_label');
    valid = false;
    $('#activation_date').focus();
  }
 else
  {
    $('#activation_date').css('border','1px solid #cccccc');   
    $('#check_activation_date').text('');
   }
   if($('#deactivation_date').val()=='')
    {
    $('#deactivation_date').css('border','1px solid red');
    $('#check_deactivation_date').text('Please enter Deactivation Date');
    $('#check_deactivation_date').addClass('error_label');
    valid = false;
    $('#deactivation_date').focus();
  }
 else
  {
    $('#deactivation_date').css('border','1px solid #cccccc');   
    $('#check_deactivation_date').text('');
   }
   
   
   
   if($('#logo').val()=='')
  {
    $('#logo').css('border','1px solid red');
    $('#check_check_logo').text('Please enter Logo ');
    $('#check_check_logo').addClass('error_label');
    valid = false;
    $('#logo').focus();
  }
 else
  {
    $('#logo').css('border','1px solid #cccccc');   
    $('#check_logo').text('');
   }
  
   
   if($('#service_needed').val()=='')
  {
    $('#service_needed').css('border','1px solid red');
    $('#check_service_needed').text('Please enter Service Needed ');
    $('#check_service_needed').addClass('error_label');
    valid = false;
    $('#service_needed').focus();
  }
 else
  {
    $('#service_needed').css('border','1px solid #cccccc');   
    $('#check_service_needed').text('');
   }
   
   
   if($('#status').val()=='')
  {
    $('#status').css('border','1px solid red');
    $('#check_status').text('Please enter Service Needed ');
    $('#check_status').addClass('error_label');
    valid = false;
    $('#status').focus();
  }
 else
  {
    $('#status').css('border','1px solid #cccccc');   
    $('#check_status').text('');
   }
   
   if(valid == true)
        {

           //dispalyAccusedListing();
        }
        else
        {
            return false;
        }

    });

   </script>

     <style>
         .error_label {
                   color:red;   
         }
        </style>
</body>
</html>
  
  

  