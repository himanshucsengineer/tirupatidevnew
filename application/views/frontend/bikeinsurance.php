<?php
if(isset($_GET["id"]))
{
   $refer_id=$_GET["id"];
   setcookie('referid',$_GET["id"],time() + (86400 * 30), "/");
}
else if(isset($_COOKIE['referid'])){
    $refer_id=$_COOKIE['referid'];
}
else
{
   $refer_id="No Refer Id Present";
}
?>
<h2 class="main_heading">Now Buying Bike Insurance is Much Simpleir</h2>
<div class="container car">
    <div class="">
        <div class="box_sh ">
            <div class="row">
                <div class="col-lg-4 col-xs-12 " style="padding:0px;">
                <img src="<?= base_url();?>assest/img/bike.jpg" >
                    <div class="to">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class=" small">
                                <img src="<?= base_url();?>assest/img/save-money.png">
                                <div style="margin-top : 7px">
                                    <h6>Save Upto 80%*</h6>
                                    <p>Lowest Bike Premiums</p>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class=" small">
                                <img src="<?= base_url();?>assest/img/life-insurance.png" >
                                <div style="margin-top : 7px">
                                    <h6>20+ Insurers</h6>
                                    <p>To Choose From</p>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class=" small">
                                <img src="<?= base_url();?>assest/img/family (1).svg">
                                <div style="margin-top : 7px">
                                    <h6>10 Thousand+</h6>
                                    <p>Vehicles Insured</p>
                                </div>
                                </div>
                            </div>
                        </div>    
                    </div>    
                </div>
                <div class="col-lg-8 col-xs-12 " style="padding:0px; background-color:white;">
                    <ul class="nav " role="tablist">
                        <li class="nav-item">
                            <a class=" active" data-toggle="tab" href="#renew">Renew Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="" data-toggle="tab" href="#new">New Bike</a>
                        </li>
                    </ul>
                    <hr style="border-width: 2px; margin-top: 0px;">
                    <div class="tab-content" >
                        <div id="renew" class="container tab-pane active">
                            <?php echo form_open(base_url( 'frontend/bikeinsurance/renewbikeDetails'), array('id'=>'bikeform','method'=>'POST'));?>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group date">
                                        <label class="adults" for="usrg">Registration Number</label>
                                        <input type="text"  id="usrg" name="reg" placeholder="Enter Registration Number">
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label class="adults" for="compg ">Manufacturer</label>
                                        <input list="compsg" onclick="clear_model();"  class="lis"   id="compg" name="compa" placeholder="Enter Manufacturer">
                                        <datalist id="compsg" >
                                        

                                            <?php
                                                foreach($company as $companies){

                                                echo "<option value='".$companies['brand_name']."'>";
                                                }
                                            ?>
                                        </datalist>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label class="adults" for="modalsg">Modal</label>
                                        <input list="modalg" onclick="clear_variant();" class="lis" id="modalsg" name="moda" placeholder="Enter Modal">
                                        <datalist  id="modalg" >
                                        </datalist>
                                    </div>
                                </div>    
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label class="adults" for="typeg">Fuel type</label>
                                        <input list="typesg"  class="lis"   id="typeg" name="fultype" placeholder="Enter Fuel Type">
                                        <datalist   id="typesg">
                                        <option value="Petrol">
                                            <option value="Diesel">
                                            <option value="Electric">
                                            <option value="CNG/LPG Externally Fitted">
                                        </datalist>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label class="adults" for="varig">Varient</label>
                                        <input list="mg" class="lis" id="varig" name="varnt" placeholder="Enter Varient">
                                        <datalist  id="mg" >
                                        </datalist>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label class="adults" for="regyrssg">Registration year</label>
                                                <input list="regyrg"  class="lis"   id="regyrssg" name="regisyr" placeholder="Select Year">
                                                <datalist   id="regyrg" >
                                                    
                                                    <?php for($i=1990; $i<=date("Y"); $i++ ) { ?>
                                                        <option  value="<?php echo $i; ?>">
                                                    <?php } ?>
                                                    
                                                </datalist>
            
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label class="adults" for="pexpie">Select Policy Expire</label>
                                        <input type="text" name="pexre" id="my_date_picker"  placeholder="DD-MM-YYYY" class="lis" readonly required />
                                        <!--input type="text"  id="my_date_picker" placeholder="DD-MM-YYYY" name="policy_expire" class="lis" readonly required-->
                                    </div>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label class="adults" for="ptypesg">Select Previous Policy Type</label>
                                        <input list="ptypeg"  class="lis"   id="ptypesg" name="pptype" placeholder="Enter Policy Type">
                                        <datalist  id="ptypeg" >
                                            <option value="w">
                                            <option value="r">
                                            <option value="a">
                                        </datalist>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label class="adults" for="inuri">Select Previous Insurer</label>
                                        <input class="lis" list="pinsuri" id="inuri"  name="piur" placeholder="Select Insurer">
                                        <datalist   id="pinsuri" >
                                        <option value="ACKO">
                                            <option value="Bajaj Allianz">
                                            <option value="Bharti-Axa">
                                            <option value="Cholamandalam">   
                                            <option value="Digit">  
                                            <option value="Edelweiss">  
                                            <option value="Future Generali">  
                                            <option value="HDFC ERGO">  
                                            <option value="ICICI Lombard">   
                                            <option value="IFFCO Tokio">  
                                            <option value="Kotak Mahindra">  
                                            <option value="L &amp; T">  
                                            <option value="Liberty">  
                                            <option value="MAGMA">  
                                            <option value="National Insurance">  
                                            <option value="NAVI">  
                                            <option value="New India">  
                                            <option value="Oriental">  
                                            <option value="Raheja QBE General">
                                            <option value="Reliance">
                                            <option value="Royal Sundaram">
                                            <option value="SBI General">
                                            <option value="Shriram General Insurance">
                                            <option value="Tata AIG">
                                            <option value="United India">
                                            <option value="Universal Sompo">
                                        </datalist>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group date">
                                                <label class="adults" for="regyrs">Email</label>
                                                <input  type="text" class="lis"  name="mail" placeholder="Email">
                                    </div>
                                </div>   
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label class="adults" for="pexpire">Contact no.</label>
                                        <input type="text" class="lis" placeholder="Contact no." name="mob">

                                    </div>
                                </div> 
                            </div>   
                            
                            
                            
                            

                            <div class="text-center">
                                <button name="formSubmit">Get Qoute</button>
                            </div>
                            <?php echo form_close(); ?>
                            
                        </div>
                        <div id="new" class="container tab-pane fade">
                            <?php echo form_open(base_url( 'frontend/bikeinsurance/newBike'), array('id'=>'newbikefrm','method'=>'POST'));?>
                            <input  type="hidden" name="referid" value="<?php echo $refer_id; ?>"/>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group date">
                                    <label class="adults" >Registration</label>
                                                <input  type="text" class="lis"  name="reg" placeholder="Enter Registration">
  
  
                                                
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group date">
                                    <label class="adults" for="compsi">Manufacturer</label>
                                                <input list="compniesi"  class="lis"   id="compsi" name="compa" placeholder="Enter Manufacturer">
                                                <datalist id="compniesi">
                                                <?php
                            foreach($company as $companies){

                            echo "<option value='".$companies['brand_name']."'>";
                            }
                            ?> 
                                                </datalist>
                                    </div>
                                </div>    
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group date">
                                    <label class="adults" for="modalsi">Modal</label>
                                        <input list="modlsi"  class="lis"   id="modalsi" name="moda" placeholder="Enter Modal">
                                        <datalist    id="modlsi" >
                                          
                                            
                                        </datalist>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group date">
                                    <label class="adults" for="typesi">Fuel type</label>
                                        <input list="typsi"  class="lis"   id="typesi" name="fultype" placeholder="Enter Fuel Type">
                                        <datalist   id="typsi" >
                                            <option value="Petrol">
                                            <option value="Diesel">
                                            <option value="Electric">
                                            <option value="CNG/LPG Externally Fitted">
                                        </datalist>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group date">
                                    <label class="adults" for="varii">Varient</label>
                                        <input list="variis"  class="lis"   id="varii" name="varnt" placeholder="Enter Varient">
                                        <datalist   id="variis" >
                                          
                                        </datalist>
            
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group date">
                                    <label class="adults" for="regyrsi">Registration year</label>
                                                <input list="regyri"  class="lis"   id="regyrsi" name="regisyr" placeholder="Select Year">
                                                <datalist  id="regyri">
                                                    
                                                    <?php for($i=1990; $i<=date("Y"); $i++ ) { ?>
                                                        <option  value="<?php echo $i; ?>">
                                                    <?php } ?>
                                                    
                                                    </datalist>
                                    </div>
                                </div>
                            </div>    
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group date">
                                                <label class="adults" for="regyrs">Email</label>
                                                <input  type="text" class="lis"  name="mail" placeholder="Email">
                                    </div>
                                </div>   
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label class="adults" for="pexpire">Contact no.</label>
                                        <input type="text" class="lis" placeholder="Contact no." name="mob">

                                    </div>
                                </div> 
                            </div>   
                            
                            
                            
                            <div class="text-center">
                                <button name="">Get Qoute</button>
                            </div>  
                            <?php echo form_close(); ?>
                        
                        </div>

                    </div>
                    
                </div>

            </div>    

        </div>

    </div>


</div>  



<section class="imp">
    <div class="container">
        <h2>Importance of Bike Insurance</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>

    </div>    

</section>

<section class="why_Health">
  <div class="container">
    <h2>Why Bike Insurance from Tirupati Insurance ?</h2>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="point">
                    <img src="<?= base_url();?>assest/img/discount.png">
            
                    <h4>80% discounts</h4>
                    <hr class="style1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>  
        
                </div>
                <div class="point">
                    <img src="<?= base_url();?>assest/img/faster-icon-png-0.png">
                    <h4>UNBIASED EXPERT ADVISE</h4>
                    <hr class="style1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>  
        
                </div>
          
            </div>
            <div class="col-md-6 col-12">
                <div class="point">
                    <img src="<?= base_url();?>assest/img/PngItem_690697.png">
            
                    <h4>EXPRESS CLAIMS SERVICES</h4>
                    <hr class="style1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>  
        
                </div>
                <div class="point">
                    <img src="<?= base_url();?>assest/img/264-2640852_simple-wordpress-job-level-1-support-icon.png">
                    <h4>24*7 CUSTOMER SUPPORT</h4>
                    <hr class="style1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>  
        
                </div>
          
            </div>
        </div>
        
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
      
        <!-- Modal Header -->
     
        <!-- Modal body -->
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <span id="validation" class="form_errors"></span>
                    </div>
        
     
      </div>
    </div>
  </div>
        
        
        
    
        
    </div>  
  </section> 


  <div class="h_box">
          <section class="accordion-section clearfix mt-3 faq" aria-label="Question Accordions">
            <div class="container">
            
                <h2>Frequently Asked  </h2>
                <p class="co">Common Questions</p>
                <div class="container qes">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
                      <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                          What sort of businesses do your work with?
                        </a>
                      </h3>
                    </div>
                    <div class="container">
                      <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
                        <div class="panel-body px-3 mb-4">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
        
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
                      <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                          What services does Tirupati Insurance Provide?
                        </a>
                      </h3>
                    </div>
                    <div class="container">
                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                      <div class="panel-body px-3 mb-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                      </div>
                    </div>
                    </div>
                  </div>
                  
                  <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
                      <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                          What locations do you service and what are your hours of operation?
                        </a>
                      </h3>
                    </div>
                    <div class="container">
                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                      <div class="panel-body px-3 mb-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                      </div>
                    </div>
                    </div>
                  </div>
                  
                  <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
                      <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                          What competitive advantage does Tirupati Insurance offer it's clients ?
                        </a>
                      </h3>
                    </div>
                    <div class="container">
                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                      <div class="panel-body px-3 mb-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <!-- Modal body -->
                  <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <span id="validation" class="form_errors"></span>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal" id="myModal1">
              <div class="modal-dialog">
                <div class="modal-content">
                <h6 class='text-success text-center'>OOPS!! You can select upto 3 adults</h6>
                  <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <span id="validation" class="form_errors"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal" id="myModal2">
              <div class="modal-dialog">
                <div class="modal-content">
                <h6 class='text-success text-center'>OOPS!! Please select adult first</h6>
                  <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <span id="validation" class="form_errors"></span>
                  </div>
                </div>
              </div>
            </div>
</section>
 </div>
           
<!-- Script -->


<script type='text/javascript'>
    // baseURL variable
     $(document).ready(function(){

        $("#compg").on('input', function (){
            var comp = $(this).val();
            // AJAX request
            
            $.ajax({
                url:'<?=base_url()?>/frontend/bikeinsurance/getbikeCompany',
                method: 'post',
                data: {comp},
                success: function(response){
                    $('#modalg').find('option').remove();
                    $('#mg').find('option').remove();
                    $('#modalsg').val('');
                    $('#varig').val('');
                    console.log(response);
                    response = $.parseJSON(response);
                    $.each(response, function (i,v)
                    {
                        $("#modalg").append("<option value='"+v.model_name+"'></option>");   
                    }); 
                }
            });
        });
        $("#modalsg").on('input', function (){
            var comp = $(this).val();
            $.ajax({
                url:'<?=base_url()?>/frontend/bikeinsurance/getbikeModel',
                method: 'post',
                data: {comp: comp},
                success: function(response){
                    $('#mg').find('option').remove();
                    $('#varig').val('');
                    console.log(response);
                    response = $.parseJSON(response);
                    $.each(response, function (i,v)
                    {
                        $("#mg").append("<option value='"+v.variant_name+"'></option>");   
                    });
                }
            });
        });
    
        });
        
</script>
<script type='text/javascript'>
    // baseURL variable
     $(document).ready(function(){

        $("#compsi").on('input', function (){
            var comp = $(this).val();
            // AJAX request
            $.ajax({
                url:'<?=base_url()?>/frontend/bikeinsurance/getbikeCompany',
                method: 'post',
                data: {comp: comp},
                success: function(response){
                    $('#modlsi').find('option').remove();
                    $('#variis').find('option').remove();
                    $('#modalsi').val('');
                    $('#varii').val('');
                    console.log(response);
                    response = $.parseJSON(response);
                    $.each(response, function (i,v)
                    {
                        $("#modlsi").append("<option value='"+v.model_name+"'></option>");   
                    });
                }
            });
        });
        $("#modalsi").on('input', function (){
            var comp = $(this).val();
            $.ajax({
                url:'<?=base_url()?>/frontend/bikeinsurance/getbikeModel',
                method: 'post',
                data: {comp: comp},
                success: function(response){
                    $('#variis').find('option').remove();
                    $('#varii').val('');
                    console.log(response);
                    response = $.parseJSON(response);
                    $.each(response, function (i,v)
                    {
                        $("#variis").append("<option value='"+v.variant_name+"'></option>");   
                    });
                }
            });
        });
    
        });
        
</script>

<script>
    $("#bikeform,#newbikefrm").submit(function(event){
	event.preventDefault();
	var post_url = $(this).attr("action"); 
	var request_method = $(this).attr("method"); 
	var form_data = $(this).serialize(); 
	
	$.ajax({
		url : post_url,
		type: request_method,
		data : form_data,
	}).done(function(response){ //
        console.log(response);
        $('#validation').html(response);
        $('#myModal').modal('show').fadeIn('slow');
        // $("#bikeform,#newbikefrm").trigger("reset");
	});
});
</script>
<script>
function clear_model(){
var select =document.getElementById("modalg");
var length = select.options.length;
for (i = length-1; i >= 0; i--) {
  select.options[i].remove();
}
}
function clear_variant(){
var select =document.getElementById("mg");
var length = select.options.length;
for (i = length-1; i >= 0; i--) {
  select.options[i].remove();
}
}
</script>                
