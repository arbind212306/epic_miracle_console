
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Console</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <?= $this->Html->css('bootstrap.min'); ?>
  <!-- Font Awesome -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- jvectormap -->
  <?= $this->Html->css(['jquery-jvectormap','dataTables.bootstrap.min','ionicons.min']); ?>
  <!-- Theme style -->
  <?= $this->Html->css('AdminLTE.min'); ?>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <?= $this->Html->css('skins/_all-skins.min'); ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- link for custom style of every elements of console -->
  <?= $this->Html->css('custom-style'); ?>
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- link below for using jquery date picker -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
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
            <h3 class="box-title text-center col-md-10" style="">User Login</h3>
            </div> 
      <div class="row">
          <?php $flash_message = $this->Flash->render() ?>
    <?php if (!empty(@$flash_message)) { ?>
    <div class="col-md-10 col-sm-12 col-xs-12">
    <div class="alert alert-success alert-dismissible" style="text-align:center;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Business Unit has been  successfully inserted.</h4>
               </div>
              </div>
       
       
    <?php } ?>
          
       <?= $this->Form->create('',['id'=>'form1']) ?>
        <!-- left column -->
       <div class="col-md-12 " >
            <div class="col-md-3 col-sm-3"></div>
        <div class="col-md-3 col-xs-12 col-sm-5">
          <!-- general form elements -->
      
            <br> 
          <div class="<?php echo @$class; ?>">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close"><?php echo @$close; ?></a>
                   <i class="<?php echo @$iclass; ?>"></i><?php echo @$sucessful; ?>.
                </div>
			  <div class="form-group">
                  <label for="bu_name"></label>
		
                    <input type="text" id="client_id" onkeyup="return service();" name="client_id" class="form-control"  placeholder="Please Enter Client ID">
                <span class="error_label" id="check_client_id"></span>
                          </div>
            <div class="form-group" id="service">
                
            </div>	  
						   
            
            
            
				
        </div>
        <!--/.col (left) -->
       
        <div class="col-md-9">
        <div class="box-footer text-center">
                <button type="button" name="submit" id="myForm" class="btn btn-primary" >Go</button>
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
<?php $service =$this->Url->build(['controller'=>'Users','action'=>'getservice']);?>
 <script type="text/javascript">
  function service(){
  var client_id=$('#client_id').val();
  console.log(client_id);
 $.ajax({
            url: "<?= $service ?>",
            type: 'POST',
            data: {"client_id": client_id},
            beforeSend: function (xhr) {
            xhr.setRequestHeader('x-CSRF-Token', $('[name="_csrfToken"]').val());
        },
            success: function (data) {
                var parsedata1 = JSON.parse(data);
                $("#service").html(parsedata1);
            }
  
  });
  
  
  }
   </script>

     <style>
            .error_label {
            color: #f40929;
            font-size: 14px;
            }

            .success_label {
            color: #2fa01b;
            font-size: 14px;
            }
        </style>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
      
    </div>
    &copy; 2018, <strong>Stratemis</strong> All rights
    reserved.
  </footer>
        </body>
        </html>
  <script type="text/javascript">
    $(document).ready(function(){
     $('#myForm').click(function(){
       if($('#client_id').val()=='')
       {
        // $('#client_id').css('border','1px solid red');
        $('#check_client_id').text('Please enter client id');
        $('#check_client_id').addClass('error_label');
         valid = false
         ;
       }
       else{
        $('#client_id').css('border','1px solid #cccccc');
        $('#check_client_id').text('');
        $('#check_client_id').addClass('success_label');
       
       }
       if(valid == true)
      {
        $('#form1').submit();
      }
       else
       {
         return false;
       }

     });
    });
  </script>