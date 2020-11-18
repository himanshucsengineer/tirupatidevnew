<head>
<meta name = "title" content ="Car Insurance In Hisar - Campare Rate from 20+ Companies">
<meta name = "description" content ="if you are looking for Car Insurance agent in Hisar then You are at right Place, Now camapare rate from 20+ comapnies ">
   <meta name = "keywords" content = "Car Insurance in Hisar, Car Insurance agent in Hisar" >
   <meta name = "robots" content =" index, follow" >
   <title>Car Insurance</title>

</head>




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
<h2 class="main_heading">Now Buying Car Insurance is Much Simpleir</h2>

<div class="container car">
    <div class="">
        <div class="box_sh">
            <div class="row">
                <div class="col-lg-4 col-xs-12 " style="padding:0px;">
                <img src="<?= base_url();?>assest/img/car.jpg">
                    <div class="to">
                        <div class="row">
                            <div class="col-md-12 col-12">  
                                <div class=" small">
                                    <img src="<?= base_url();?>assest/img/save-money.png">
                                    <div style="margin-top : 7px">
                                    <h6>Save Upto 80%*</h6>
                                    <p>Lowest car Premiums</p>
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
                            <a class="" data-toggle="tab" href="#new">New Car</a>
                        </li>
                    </ul>
                    <hr style="border-width: 2px; margin-top: 0px;">
                    <div class="tab-content" >
                        <div id="renew" class="container tab-pane active">
                            <?php echo form_open(base_url( 'frontend/carinsurance/renewDetails'), array('id'=>'carform','method'=>'POST'));?>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group date" style="border-bottom:1px solid #cdcdcd !important;">
                                        <label class="adults" for="usr">Registration Number</label>
                                        <input type="text"  id="usr" name="registraion" placeholder="Enter Registration Number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label class="adults" for="comp ">Manufacturer</label>
                                        <input list="comps"  onclick="clear_model()" class="lis"   id="company_name" name="company" placeholder="Enter Manufacturer">
                                        <datalist id="comps" >
                                        

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
                                        <label class="adults" for="modal">Modal</label>
                                        <input list="modalss" onclick="clear_variant();" class="lis" id="modal_list" name="modl" placeholder="Enter Modal">
                                        <datalist  id="modalss" >
                                           
                                        </datalist>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label class="adults" for="type">Fuel type</label>
                                        <input list="types"  class="lis"   id="type" name="fuel_type" placeholder="Enter Fuel Type">
                                        <datalist   id="types">
                                            <option value="Petrol">
                                            <option value="Diesel">
                                            <option value="Electric">
                                            <option value="CNG/LPG Externally Fitted">
                                        </datalist>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label class="adults" for="vari">Varient</label>
                                        <input list="mvarient" class="lis" id="vari" name="vari" placeholder="Enter Varient">
                                        <datalist  id="mvarient" >
                                        </datalist>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group date">
                                                <label class="adults" for="regyrss">Registration year</label>
                                                <input list="regyr"  class="lis"   id="regyrss" name="regyr" placeholder="Select Year">
                                                <datalist   id="regyr" >
                                                    
                                                    <?php for($i=1990; $i<=date("Y"); $i++ ) { ?>
                                                        <option  value="<?php echo $i; ?>">
                                                    <?php } ?>
                                                    
                                                </datalist>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label class="adults" for="pexpire">Select Policy Expire</label>
                                        
                                        <input type="text" name="policy_expire" id="date"  placeholder="DD/MM/YYYY" class="date-format lis" />
                                        <!--input type="text"  id="my_date_picker" placeholder="DD-MM-YYYY" name="policy_expire" class="lis" readonly required-->

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label class="adults" for="ptypes">Select Previous Policy Type</label>
                                        <input list="ptype"  class="lis"   id="" name="ptypes" placeholder="Enter Policy Type">
                                        <datalist  id="ptype" >
                                            <option value="Third Party">
                                                
                                            </option>
                                        </datalist>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <label class="adults" for="inur">Select Previous Insurer</label>
                                        <input class="lis" list="pinsur" name="pinsur" id="inur" placeholder="Select Insurer">
                                        <datalist id="pinsur" >
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
                            <?php echo form_open(base_url( 'frontend/carinsurance/newCar'), array('id'=>'newfrm','method'=>'POST'));?>
                            <input  type="hidden" name="referid" value="<?php echo $refer_id; ?>"/>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        
                                    <label class="adults" >Registration</label>
                                               <input type="text"  id="usr" name="registraion" placeholder="Enter Registration">
  
  
                                                
                                    </div>
                                </div>   
                                <div class="col-md-6">
                                    <div class="form-group date">
                                    <label class="adults" for="comps">Manufacturer</label>
                                                <input list="compnies"  class="lis"   id="new_company" name="company" placeholder="Enter Manufacturer">
                                                <datalist id="compnies">
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
                                    <label class="adults" for="modals">Modal</label>
                                        <input list="modls"  class="lis" id="new_model" name="model" placeholder="Enter Model">
                                        <datalist    id="modls" >
                                
                                            
                                        </datalist>
                                    </div>
                                </div>   
                                <div class="col-md-6">
                                    <div class="form-group date">
                                    <label class="adults" for="types">Fuel type</label>
                                        <input list="typs"  class="lis"  name="fuel_type" placeholder="Enter Fuel Type">
                                        <datalist   id="typs" >
                                            <option selected disabled value="Select" >
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
                                    <label class="adults" for="vari">Varient</label>
                                        <input list="new_varis"  class="lis"  id="new_vali"  name="vari" placeholder="Enter Varient">
                                        <datalist   id="new_varis" >
                                            
                                        </datalist>  
                                    </div>
                                </div>   
                                <div class="col-md-6">
                                    <div class="form-group date">
                                    <label class="adults" for="regyrs">Registration year</label>
                                                <input list="regyr"  class="lis"  name="regyr" placeholder="Select Year">
                                                <datalist  id="regyr">
                                                    
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
                <h2>Importance of Car Insurance</h2>
                <p>In this era owning a car has became necessity and it is not a luxury anymore. Everyone wants to own a car. With increasing numbers of motor vehicles on road, accidents have increased with alarming numbers. In India around 5 lakh accidents are reported annually with almost 1.5 lakh deaths in road accidents, which itself shows that having car insurance guards you and your vehicle from uncertainties.
Having car insurance safeguards your vehicle for all the damages that can occur on road. It reduces your liability towards your vehicle by ensuring that damages are covered in claims.
Another importance of car insurance is that it is compulsory to have your car insured if you want to drive in India. 
We at tirupati insurance ensures that you have least liability towards your vehicle by insuring it and giving best deals in the market, and make you more financially stable than ever.</p>

            </div>    

        </section>

        <section class="why_Health">
          <div class="container">
            <h2>Why Car Insurance from Tirupati Insurance ?</h2>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="point">
                            <img src="<?= base_url();?>assest/img/discount.png">
                    
                            <h4>80% discounts</h4>
                            <hr class="style1">
                            <p>We provide insurance deals with upto 80% discount, we analyze the needs of the customers and provide them with best market deals.</p>  
                
                        </div>
                        <div class="point">
                            <img src="<?= base_url();?>assest/img/faster-icon-png-0.png">
                            <h4>UNBIASED EXPERT ADVISE</h4>
                            <hr class="style1">
                            <p>We make sure that our customers avail all the services they are entitled to. We help them in assisting to clear their claims and receive services in the least time with our expertise.</p>  
                
                        </div>
                  
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="point">
                            <img src="<?= base_url();?>assest/img/PngItem_690697.png">
                    
                            <h4>EXPRESS CLAIMS SERVICES</h4>
                            <hr class="style1">
                            <p>We treat our customers as our family hence we do not sell the policies for mere commissions, we give our expert advice after thorough study and comparison of customer’s needs.</p>  
                
                        </div>
                        <div class="point">
                            <img src="<?= base_url();?>assest/img/264-2640852_simple-wordpress-job-level-1-support-icon.png">
                            <h4>24*7 CUSTOMER SUPPORT</h4>
                            <hr class="style1">
                            <p>We believe in complete commitment towards best services for our customers. Therefore we are available 24*7 for providing solution for all the queries.</p>  
                
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
                
<script>
function clear_model(){
var select =document.getElementById("modalss");
var length = select.options.length;
for (i = length-1; i >= 0; i--) {
  select.options[i].remove();
}
}
function clear_variant(){
var select =document.getElementById("mvarient");
var length = select.options.length;
for (i = length-1; i >= 0; i--) {
  select.options[i].remove();
}
}
</script>                
                
            
                
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
                          What is Zero depreciation cover or bumber to bumber coverage?
                        </a>
                      </h3>
                    </div>
                    <div class="container">
                      <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
                        <div class="panel-body px-3 mb-4">
                          <p>In Zero Depreciation coverage even your vehicle is completely damaged, then you don't need to pay any charges and will be eligible for complete claim </p>
        
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
                      <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                          What will hapeen When you sale Your Car?
                        </a>
                      </h3>
                    </div>
                    <div class="container">
                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                      <div class="panel-body px-3 mb-4">
                        <p>You may cancel the policy or policy can be transferred to the new owner by passing an endorsement .</p>
                      </div>
                    </div>
                    </div>
                  </div>
                  
                  <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
                      <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                          Why third party insurance is not enough?
                        </a>
                      </h3>
                    </div>
                    <div class="container">
                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                      <div class="panel-body px-3 mb-4">
                        <p>Third Party insurance covers only other vehicle or property on road its not cover personal accident or damage to your vehicle. But comprehensive insurance covers any damage to you and your vehicle.</p>
                      </div>
                    </div>
                    </div>
                  </div>
                  
                  <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
                      <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                          Factors that helps in deciding your Policy Premium
                        </a>
                      </h3>
                    </div>
                    <div class="container">
                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                      <div class="panel-body px-3 mb-4">
                        <p>1. IDV(insured Declared value).</p>
                        <p>2. The age of car</p>
                        <p>3. City of Registration</p>
                        <p>4. Cubic capacity of car engine</p>
                        <p>5. Previous claim. </p>

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

        $("#company_name").on('input', function (){
            var comp = $(this).val();
            // AJAX request
            $.ajax({
                url:'<?=base_url()?>/frontend/carinsurance/getCompany',
                method: 'post',
                data: {comp},
                success: function(response){
                    $('#modalss').find('option').remove();
                    $('#mvarient').find('option').remove();
                    $('#modal_list').val('');
                    $('#vari').val('');
                    console.log(response);
                    response = $.parseJSON(response);
                    $.each(response, function (i,v)
                    {
                        $("#modalss").append("<option value='"+v.model_name+"'></option>");   
                    }); 
                }
            });
        });
        $("#modal_list").on('input', function (){
            var comp = $(this).val();
            $.ajax({
                url:'<?=base_url()?>/frontend/carinsurance/getModel',
                method: 'post',
                data: {comp: comp},
                success: function(response){
                    console.log(response);
                    $('#mvarient').find('option').remove();
                    $('#vari').val('');
                    response = $.parseJSON(response);
                    $.each(response, function (i,v)
                    {
                        $("#mvarient").append("<option value='"+v.variant_name+"'></option>");   
                    });
                }
            });
        });
    
        });
        
</script>
<script type='text/javascript'>
    // baseURL variable
     $(document).ready(function(){

        $("#new_company").on('input', function (){
            var comp = $(this).val();
            // AJAX request
            $.ajax({
                url:'<?=base_url()?>/frontend/carinsurance/getCompany',
                method: 'post',
                data: {comp: comp},
                success: function(response){
                    $('#modls').find('option').remove();
                    $('#new_varis').find('option').remove();
                    $('#new_model').val('');
                    $('#new_vali').val('');
                    console.log(response);
                    
                    response = $.parseJSON(response);
                    $.each(response, function (i,v)
                    {
                        $("#modls").append("<option value='"+v.model_name+"'></option>");   
                    });
                }
            });
        });
        $("#new_model").on('input', function (){
            var comp = $(this).val();
            $.ajax({
                url:'<?=base_url()?>/frontend/carinsurance/getModel',
                method: 'post',
                data: {comp: comp},
                success: function(response){
                    console.log(response);
                    $('#new_varis').find('option').remove();
                    $('#new_vali').val('');
                    response = $.parseJSON(response);
                    $.each(response, function (i,v)
                    {
                        $("#new_varis").append("<option value='"+v.variant_name+"'></option>");   
                    });
                }
            });
        });
    
        });
        
</script>

<script>
    $("#carform,#newfrm").submit(function(event){
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
        $("#carform,#newfrm").trigger("reset");
	});
});
</script>


<script type="text/javascript">
        var date = document.getElementById('date');

function checkValue(str, max) {
  if (str.charAt(0) !== '0' || str == '00') {
    var num = parseInt(str);
    if (isNaN(num) || num <= 0 || num > max) num = 1;
    str = num > parseInt(max.toString().charAt(0)) && num.toString().length == 1 ? '0' + num : num.toString();
  };
  return str;
};

date.addEventListener('input', function(e) {
  this.type = 'text';
  var input = this.value;
  if (/\D\/$/.test(input)) input = input.substr(0, input.length - 3);
  var values = input.split('/').map(function(v) {
    return v.replace(/\D/g, '')
  });
  if (values[0]) values[0] = checkValue(values[0], 31);
  if (values[1]) values[1] = checkValue(values[1], 12);
  var output = values.map(function(v, i) {
    return v.length == 2 && i < 2 ? v + ' / ' : v;
  });
  this.value = output.join('').substr(0, 14);
});

date.addEventListener('blur', function(e) {
  this.type = 'text';
  var input = this.value;
  var values = input.split('/').map(function(v, i) {
    return v.replace(/\D/g, '')
  });
  var output = '';
  
  if (values.length == 3) {
    var year = values[2].length !== 4 ? parseInt(values[2]) + 2000 : parseInt(values[2]);
    var month = parseInt(values[0]) - 1;
    var day = parseInt(values[1]);
    var d = new Date(year, month, day);
    if (!isNaN(d)) {
      document.getElementById('result').innerText = d.toString();
      var dates = [d.getMonth() + 1, d.getDate(), d.getFullYear()];
      output = dates.map(function(v) {
        v = v.toString();
        return v.length == 1 ? '0' + v : v;
      }).join(' / ');
    };
  };
  this.value = output;
});
    </script>
