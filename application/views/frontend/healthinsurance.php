<head>
<meta name = "description" content ="Tirupati Insurance is one of finest insurance agency in Hisar, Haryana, our proffesional approach towards our clients helps us to win multiple awards for best Insurance agency in Hisar, Haryana ">
   <meta name = "keywords" content = "health insurance in hisar, Health Insurance in Haryana" >
   <meta name = "robots" content =" index, follow" >
   <title>Health Insurance Agency in Hisar, Haryana</title>

</head>

<style>
    .numm{
        width:1.8rem !important;
        padding:2px;
        text-align:center;
        border:none !important;
        outline:none;
        
    }
    .inc{
        width:40%;
        height:auto;
        float:right;
        margin-top:-3.1rem;
    }
    .rrr{
        width:60%;
        float:left;
        background-color:white;
    }
    .bu-num{
        background-color:transparent;
        margin-bottom:.5rem;
        color:rgb( 239, 69, 84 );
        font-size:35px;
        
    }
</style>
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
<h2 class="main_heading">Now Buying Health Insurance is Much Simpleir</h2>
<div class="container health_main">
  <div class="">
  <div class="box_sh ">
    <div class="row">
      <div class="col-lg-4 col-xs-12 " style="padding:0px;">
      <img src="<?php echo base_url();?>assest/img/health-insurance-top-up.jpg" >
        <div class="to">
        <div class="row">
                                      <div class="col-md-12 col-12">
                                        <div class=" small">
                                          <img src="<?php echo base_url();?>assest/img/save-money.png">
                                          <div style="margin-top : 7px">
                                            <h6>Save Upto 80%*</h6>
                                            <p>Lowest Premiums</p>
                                        </div>
                                        </div>
                                      </div>
                                      <div class="col-md-12 col-12" >
                                        <div class=" small">
                                        <img src="<?php echo base_url();?>assest/img/life-insurance.png" >
                                        <div style="margin-top : 7px">
                                        <h6>20+ Insurers</h6>
                                        <p>To Choose From</p>
                                        </div>
                                      </div>
                                      </div>
                                      <div class="col-md-12 col-12" >
                                        <div class=" small">
                                        <img src="<?php echo base_url();?>assest/img/family (1).svg">
                                        <div style="margin-top : 7px">
                                        <h6>10 Thousand+</h6>
                                        <p>Famlies Insured</p>
                                        </div>
                                     </div>
                                      </div>
                                      
                                    </div>
        </div>
      </div>  
      <div class="col-lg-8 col-xs-12"style="padding:0px;"  >
      <?php echo form_open(base_url( 'frontend/healthinsurance/healthData'), array('id'=>'healthform','method'=>'POST'));?>
      
      <input  type="hidden" name="referid" value="<?php echo $refer_id; ?>"/>
        <div class="card">
          <div class="card-header">
            <h3 >Personal Details</h3>
            <hr class="style1 ">
          </div>
          <div class="card-body">
            <div class="form-group">
              <div class="row">

                <div class="col-md-6">
                    
                    
                    
                    
                    
                  <div class="date">
                    <label class="adults" for="usr">Adults</label>
                     <input type="number" min="0"  oninput="getNo()" id="usrVal" name="anum" placeholder="No. of Adults ">
                                                           
                  </div>
                  <div id="firstperson" style="display:none" class="form-group date"> 
                    <label class="adults" for="usr">Adults 1 DOB</label>
                    
                    <input type="text" name="fdob" id="date" placeholder="DD/MM/YYYY" class=" lis" />
                    <!--span class="error" style="display: none">Invalid Date. Only dd/MM/yyyy format allowed.</span-->
                  </div>
                  <div id="secondperson" style="display:none" class="form-group date">
                    <label class="adults" for="usr">Adults 2 DOB</label>
                    <input type="text" name="sdob" id="date_one" placeholder="DD/MM/YYYY" class=" lis" />
                    <!--span class="error" style="display: none">Invalid Date. Only dd/MM/yyyy format allowed.</span-->
                   
                    <!--input type="text"  id="my_date_picker2" placeholder="DD-MM-YYYY" name="sdob" class="lis"  required-->
                    
                  </div>
                </div>
                 
                 
                <div class="col-md-6">
                
                  <div class="date">
                    <label class="adults" for="usr">Kids</label>
                    <input type="number" oninput="getkid()" min="1" max="2" id="usrkid" name="knum" placeholder="No. of Kids(3months - 20 years)">
                  </div>
                  
                </div>  
              </div>
              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group date">
                    <label class="adults" for="usr">Mobile number</label>
                    <input type="text" id="numb" name="mob" placeholder="Enter Mobile number">
                  </div>
                </div> 
                <div class="col-md-6">
                  <div class="form-group date">
                    <label class="adults" for="usr">Email</label>
                    <input type="email"  id="usr" name="mail" placeholder="Enter email">
                  </div>
                </div> 

              </div>



              
              <div class="chck">
                <input type="checkbox" value="none" id="checkbox_1" name="contact1"/>
                <label for="checkbox_1" class="checkbox"><span class="chk">I agree to the Term and Conditon</span></label>
                <input type="checkbox" value="none" id="checkbox_2" name="contact2"/>
                <label for="checkbox_2" class="checkbox"><span class="chk">I want t get my Qoutes and policy details on <i class="fa fa-whatsapp" ></i><span> whatsapp</label>
                </br>
                <div class="text-center ">
                  <button>Get Qoute</button> 
                </div> 
                    <?php echo form_close(); ?>

              </div>                  
            </div>  
          </div>  
        </div>
      </div>  
    </div>
    </div>
  </div>  
</div>


        <section class="imp">
            <div class="container">
                <h2>Importance of Health Insurance</h2>
                <p>Daily routine has taken a fast pace in our lives. We want our food to be ready within minutes, we take elevator even when we have to climb only one floor in the office, sleep is like a guest to our lives, tight deadlines, unbalanced lifestyle etc. With all these habits, we are becoming stressed, lethargic and physically unfit. So to overcome these uncertain situations in a common man’s life, we at Tirupati insurance insures you that at the time of your need we will assist you like our own family and help you to overcome every hurdle coming in the way of your health by providing you the below services. </P>
<p> Cashless Hosptialization | Health Card | Fast Riembursement | Easy Monthly and daily installement with zero Interest</p>
        
            </div>    

        </section>

        <section class="why_Health">
          <div class="container">
            <h2>Why Health Insurance from Tirupati Insurance ?</h2>
              <div class="row">
                <div class="col-md-6 col-12">
                  <div class="lft">
                    <div class="point">
                      <img src="<?php echo base_url();?>assest/img/discount.svg">
                    
                      <h4>80% discounts</h4>
                      <hr class="style1">
                      <p>We provide insurance deals with upto 80% discount, we analyze the needs of the customers and provide them with best market deals.</p>  
                
                    </div>
    
                    <div class="point">
                      <img src="<?php echo base_url();?>assest/img/faster.svg">
                      <h4>UNBIASED EXPERT ADVISE</h4>
                      <hr class="style1">
                      <p>We make sure that our customers avail all the services they are entitled to. We help them in assisting to clear their claims and receive services in the least time with our expertise.</p>  
                
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-12 ">
                  <div class="rgt ">
                    <div class="point">
                      <img src="<?php echo base_url();?>assest/img/express.svg" >
                      <h4>EXPRESS CLAIMS SERVICES</h4>
                      <hr class="style1">
                  <p>We treat our customers as our family hence we do not sell the policies for mere commissions, we give our expert advice after thorough study and comparison of customer’s needs.</p>  
                
                    </div>
                    <div class="point">
                      <img src="<?php echo base_url();?>assest/img/support.svg">
                      <h4>24*7 CUSTOMER SUPPORT</h4>
                      <hr class="style1">
                  <p>We believe in complete commitment towards best services for our customers. Therefore we are available 24*7 for providing solution for all the queries.</p>  
                
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
                           Can I buy more than one health insurance plan?
                        </a>
                      </h3>
                    </div>
                    <div class="container">
                      <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
                        <div class="panel-body  mb-2">
                          <p>Yes, you are free to buy any other plans according to your medical needs  </p>
        
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
                      <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                          Can I pay my health insurance premium in installment?
                        </a>
                      </h3>
                    </div>
                    <div class="container">
                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                      <div class="panel-body  mb-2">
                        <p>Yes This is Biggest benefit of buying health insurance from Tirupati Insurance. After collabrating with Tirupati society, Tirupati Insurance not only allowed you to pay premium monthly but you can pay daily too </p>
                      </div>
                    </div>
                    </div>
                  </div>
                  
                  <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
                      <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                          Types of Health Insurance plans I can Buy?
                        </a>
                      </h3>
                    </div>
                    <div class="container">
                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                      <div class="panel-body  mb-2">
                        <p>.Health Insurance Plan, Family Floater Health Insurance, Personal Accident Health insurance, Senior Citizen Health Insurance, Group Health Insurance, Maternity Health insurance, Critical Health Insurance</p>
                      </div>
                    </div>
                    </div>
                  </div>
                  
                  <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
                      <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                          Does Health Insurance Covers starts from Day one?
                        </a>
                      </h3>
                    </div>
                    <div class="container">
                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                      <div class="panel-body  mb-2">
                        <p>NO, its depends on Policy even some policy cover Pre-existing diseases</p>
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
 
 <script>
    $("#healthform").submit(function(event){
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
        $("#healthform").trigger("reset");
	});
});
</script>
 
 
          <script>
          
          function getNo(){
          var i =  document.getElementById('usrVal').value;
            if(i==1){
              document.getElementById('firstperson').style.display = 'block';
              document.getElementById('secondperson').style.display = 'none';
              document.getElementById('usrkid').max = 2;
            }
            else if(i==2){
              document.getElementById('firstperson').style.display = 'block';
              document.getElementById('secondperson').style.display = 'block';
              document.getElementById('usrkid').max = 3;
            }
            else if(i>2){
              $('#myModal1').modal('show');
              document.getElementById('usrVal').value = 2;
            }
          
          }
          function getkid(){
            var i =  document.getElementById('usrVal').value;
            var j= document.getElementById('usrkid').value;
            if(i<1){
              $('#myModal2').modal('show');
              document.getElementById('usrkid').value = '';
            }
            if(j>3)
            {
              $('#myModal1').modal('show');
              document.getElementById('usrkid').value = '';
            }
          }
          </script>
          
          
          
          
          
          
          
          
          
          
         <script type="text/javascript">
        var date = document.getElementById('date');
        
        var date_one = document.getElementById('date_one');

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

date_one.addEventListener('input', function(e) {
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

date_one.addEventListener('blur', function(e) {
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
                     </div> 