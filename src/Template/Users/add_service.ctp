<!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Service Manager
        <!--<small>Preview</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <!--<li><a href="#">Forms</a></li>-->
        <li class="active">Service Manager</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Add Service</h3>

<!--          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>-->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
              <?= $this->Form->create(null, ['url' => false]); ?>
            <div class="col-md-3">
              <div class="form-group">
                <label>Business Unit </label>
                <select class="form-control select2" onchange="getClientInfo(this);" style="width: 100%;">
                  <option selected="selected">- Select -</option>
                  <?php 
                  if(!empty($result)):
                     foreach($result as $client): 
                  ?>
                  <option value="<?= $client['id'] ?>"><?= $client['bu_name']?></option>
                  <?php
                  endforeach;
                  endif;
                  ?>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <!-- /.form-group -->
              <div class="form-group">
                <label>Industry Name</label>
                
                 <select class="form-control select2" id="industry_name" onchange="clientname(this);"  style="width: 100%;">
                  <option selected="selected">- Select -</option>
                
                  </select>
                
              
              </div>
              <!-- /.form-group -->
            </div>
            <div class="col-md-3">  
              <!-- /.form-group -->
              <div class="form-group">
                <label>Client Name</label>
                 <select class="form-control select2" name="client_name" id="client_name"   style="width: 100%;">
                  <option selected="selected">- Select -</option>
                
                  </select>
                
              </div>
              <!-- /.form-group -->
            </div>
            <div class="col-md-3">  
              <!-- /.form-group -->
              <div class="form-group">
                <label>Status</label>
                 <select class="form-control select2" name="client_name" id="client_name"   style="width: 100%;">
                  <option selected="selected">- Select -</option>
                
                  </select>
                
              </div>
              <!-- /.form-group -->
            </div>  
              <?= $this->Form->end(); ?>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      <div class="row" id="row_1">
        <div class="col-md-12">

            <div class="box box-danger" id="product_details" style="display:none;">
<!--            <div class="box-header">
              <h3 class="box-title">Input masks</h3>
            </div>-->
            <div class="box-body">
          <!-- row -->
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label>Product Name</label>
                <select class="form-control select2" onchange="getProductCode();" id="productName_1" style="width: 100%;">
                  <option selected="selected">- Select -</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <!-- /.form-group -->
              <div class="form-group">
                <label>Product Code</label>
                <input class="form-control" id="productCode_1" type="text" name="product_code[]">
              </div>
              <!-- /.form-group -->
            </div>
            <div class="col-md-3">  
              <!-- /.form-group -->
              <div class="form-group">
                <label>Service Type</label>
                <select class="form-control select2" name="service_type[]" style="width: 100%;">
                  <option selected="selected">- Select -</option>
                  <option value="1">Paid</option>
                  <option value="0">Trail</option>
                </select>
              </div>
              <!-- /.form-group -->
            </div>
            <div class="col-md-3">  
              <!-- /.form-group -->
              <div class="form-group">
                <label>Activation Date</label>
                <input class="form-control datepick" id="activation_date_1" type="text" name="activation_date[]">
              </div>
              <!-- /.form-group -->
            </div>
            <div class="col-md-3">  
              <!-- /.form-group -->
              <div class="form-group">
                <label>Deactivation Date</label>
                <input class="form-control datepick" id="deactivation_date_1" type="text" name="deactivation_date[]">
              </div>
              <!-- /.form-group -->
            </div> 
            <div class="col-md-3">  
              <!-- /.form-group -->
              <div class="form-group">
                <label>No. Of Employees</label>
                <select class="form-control select2" name="no_of_employes[]" style="width: 100%;">
                  <option value="" selected="selected">- Select -</option>
                  <option value="0 - 10">0 - 10</option>
                  <option value="11 - 15">11 - 15</option>
                  <option value="16 - 20">16 - 20</option>
                  <option value="21 - 25">21 - 25</option>
                  <option value="26 - 50">26 - 50</option>
                  <option value="51 - 75">51 - 75</option>
                  <option value="76 - 100">76 - 100</option>
                  <option value="101 - 150">101 - 150</option>
                  <option value="151 - 200">151 - 200</option>
                  <option value="201 - 250">201 - 250</option>
                  <option value="251 - 300">251 - 300</option>
                  <option value="301 - 350">301 - 350</option>
                  <option value="351 - 400">351 - 400</option>
                  <option value="401 - 450">401 - 450</option>
                  <option value="451 - 500">451 - 500</option>
                  <option value="501 - 600">501 - 600</option>
                  <option value="601 - 700">601 - 700</option>
                  <option value="701 - 800">701 - 800</option>
                  <option value="801 - 900">801 - 900</option>
                  <option value="901 - 1000">901 - 1,000</option>
                  <option value="1,001 - 1,500">1,001 - 1,500</option>
                  <option value="1,501 - 2,000">1,501 - 2,000</option>
                  <option value="2,001 - 2,500">2,001 - 2,500</option>
                  <option value="2,501 - 3,000">2,501 - 3,000</option>
                  <option value="3,001 - 3,500">3,001 - 3,500</option>
                  <option value="3,501 - 4,000">3,501 - 4,000</option>
                  <option value="4,001 - 4,500">4,001 - 4,500</option>
                  <option value="4,501 - 5,000">4,501 - 5,000</option>
                  <option value="5,001 - 5,500">5,001 - 5,500</option>
                  <option value="5,501 - 6,000">5,501 - 6,000</option>
                  <option value="6,001 - 6,500">6,001 - 6,500</option>
                  <option value="6,501 - 7,000">6,501 - 7,000</option>
                  <option value="7,001 - 7,500">7,001 - 7,500</option>
                  <option value="7,501 - 8,000">7,501 - 8,000</option>
                  <option value="8,001 - 8,500">8,001 - 8,500</option>
                  <option value="8,501 - 9,000">8,501 - 9,000</option>
                  <option value="9,001 - 9,500">9,001 - 9,500</option>
                  <option value="9,501 - 10,000">9,501 - 10,000</option>
                  <option value="10,000+">10,000 plus</option>
                </select>
              </div>
              <!-- /.form-group -->
            </div> 
            <div class="col-md-3">  
              <!-- /.form-group -->
              <div class="form-group">
                <label>Price</label>
                <input class="form-control" type="text" name="price[]">
              </div>
              <!-- /.form-group -->
            </div>
            <div class="col-md-3" id="btn-control_1" style="margin-top:2.4%;">  
                <div class="col-md-2" style="width: 50%;">  
                    <!-- /.form-group -->
                    <div class="form-group">
                        <button type="button" class="btn btn-block btn-success" onclick="addMoreService(1);">Add More</button>
                    </div>
                    <!-- /.form-group -->
                </div>
                <div class="col-md-2" style="width: 50%;;float:right;">  
                    <!-- /.form-group -->
                    <div class="form-group">
                        <button type="button" class="btn btn-block btn-primary">Add</button>
                    </div>
                    <!-- /.form-group -->
                </div>
            </div>
            <div class="col-md-3" id="remove_btn_1" style="margin-top:2.4%; display:none;">  
                <div class="col-md-2" style="width: 50%;">  
                    <!-- /.form-group -->
                    <div class="form-group">
                        <button type="button" class="btn btn-block btn-danger" onclick="remove(1);">Remove</button>
                    </div>
                    <!-- /.form-group -->
                </div>
            </div>  
          </div>    
          <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (left) -->
      </div>
      <!-- div to append more product details -->
      <div id="more_product" style="display:none;">
          
      </div>
      <!-- div for adding more product ends here -->
      <div class="row" id="row_1">
        <div class="col-md-12">

            <div class="box box-danger" id="product_details" style="">
<!--            <div class="box-header">
              <h3 class="box-title">Input masks</h3>
            </div>-->
            <div class="box-body">
          <!-- row -->
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label>Termination fee clause</label>
                <textarea form-control name="feeClause"></textarea>
              </div>
            </div>
            <div class="col-md-3">
              <!-- /.form-group -->
              <div class="form-group">
                <label>Escalation Terms</label>
                <textarea form-control  name="escalationTerms"></textarea>
              </div>
              <!-- /.form-group -->
            </div>
            <div class="col-md-3">  
              <!-- /.form-group -->
              <div class="form-group">
                <label>Company Code</label>
                 <input class="form-control" id="companyCode" type="text" name="companyCode">
              </div>
              <!-- /.form-group -->
            </div>
            <div class="col-md-3">  
              <!-- /.form-group -->
              <div class="form-group">
                <label>Service</label>
                <select class="form-control"  name="service" style="width: 100%;">
                    <option>1256</option>
                    <option>1256</option>
                    <option>1256</option>
                    <option>1256</option>
                </select>
              </div>
              <!-- /.form-group -->
            </div>
            <div class="col-md-3">  
              <!-- /.form-group -->
              <div class="form-group">
                <label>Mode of Payment</label>
                <select class="form-control select2" name="modeOfPayment">
                    <option value="">-Select Payment Mode-</option>
                    <option value="3"> EFT </option>
                    <option value="4"> Bill Pay </option>
                    <option value="7"> Other </option><option value="5"> Cheque </option>
                    <option value="6"> Credit Card </option>  
                </select>
              </div>
              <!-- /.form-group -->
            </div> 
            <div class="col-md-3">  
              <!-- /.form-group -->
              <div class="form-group">
                <label>Billing Frequency</label>
                <select class="form-control " name="billingFrequency" style="width: 100%;">
                   <option value="0" selected="selected">-Select Frequency-</option>
                   <option value="5"> Monthly </option>
                   <option value="12"> Bi Weekly </option><option value="8"> Per Quarter </option>
                   <option value="9"> Half Yearly  </option>
                   <option value="10"> Annual </option>
                   <option value="11"> Weekly </option>
                </select>
              </div>
              <!-- /.form-group -->
            </div> 
            <div class="col-md-3">  
              <!-- /.form-group -->
              <div class="form-group">
                <label>Create date</label>
                <input class="form-control" id="create_date" type="text" name="createDate">
              </div>
              <!-- /.form-group -->
            </div>
            <div class="col-md-3">  
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Expiry date</label>
                    <input class="form-control" id="expiry_date" type="text" name="expiryDate">
                </div>
                <!-- /.form-group -->
            </div>
          </div>    
          <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (left) -->
      </div>
    </section>
    <!-- /.content -->
</div>
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<?= $this->Html->script(['service_manager']); ?>

<script>
////code for activation date picker    
//$(".date").datepicker();
////code for deactivation date picker
//$(".date").datepicker();
//code for create date date picker    
$("#create_date").datepicker();
//code for expiry date picker
$("#expiry_date").datepicker();


</script>