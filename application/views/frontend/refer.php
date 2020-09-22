
<style>
    .step{
  width: 100%;
  height: auto;
  padding-top: 2rem;
  padding-bottom: 2rem;
}
.step h3{
    text-align: center;
    font-weight: 400;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

}
.step .flex {
  display: flex;
  flex-wrap: nowrap;
    margin-top: 3rem;
}
.step .flex i{
  font-size: 50px;
  margin-bottom: 1rem;
}
.step .flex p{
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  text-align: center;
}
.step .style1 {

border-top: 2px solid grey;
margin-top: 30px;

}
.log_refer{
    width: 100%;
    height: auto;
    padding-top: 3rem;
    padding-bottom: 3rem;
    background-color: rgba(237, 237, 237);
}
.log_refer h3{
    font-weight: 400;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color: grey;
}
.log_refer a{
    text-decoration: none;
    transition: .5s;
}
.log_refer a:hover{
    color: rgb( 95, 96, 96 );
}

a.disabled {
  pointer-events: none;
  cursor: default;
}
</style>
<?php
if(!isset($_SESSION["referid"]))
{
    $button='<input type="submit" name="formSubmit" onclick="openLoginModal();" value="Genrate Link" class="bu" />';
}
else
{
    $button='<input class="lis" type="text" id="copy" value="'.base_url().'?id='.$_SESSION["referid"].'"size="40" aria-invalid="false" placeholder=" " disabled></br>
    <input type="submit" id="copied" value="Copy Link" class="bu"  />';
}
?>


<?php
if(!isset($_SESSION["referid"]))
{
    $a='<h3><span style="color: rgb( 239, 69, 84 );"><a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log in</a></span> to view referral bonus received.</h3>';
}
else
{
    $a='<h3> You Will receive your referral bonus when your friends confirm their booking with us. Keep inviting!</h3>';
}
?>

<?php
if(!isset($_SESSION["referid"]))
{
    $wha='<a class="fa fa-whatsapp disabled"></a>';
    $fb='<a class="fa fa-facebook disabled"></a>';
    $twi='<a class="fa fa-twitter disabled"></a>';
}
else
{
    $wha='<a href="https://api.whatsapp.com/send?text=Hi! I tried Tirupati insurance, here are my thoughts so far. Good experience center, wide range of products. If you want to try them, you can register at '.base_url().'?id='.$_SESSION["referid"].'  they will call you back and take it forward." class="fa fa-whatsapp" data-action="share/whatsapp/share" target="_blank"></a>';
    $fb='<a href="https://www.facebook.com/sharer.php?text=[ Hi! I tried Tirupati insurance, here are my thoughts so far. Good experience center, wide range of products. If you want to try them, you can register at '.base_url().'?id='.$_SESSION["referid"].'  they will call you back and take it forward.  ]" class="fa fa-facebook" data-action="share/facebook/share" target="_blank"></a>';
    $twi='<a href="http://twitter.com/share?text=[Hi! I tried Tirupati insurance, here are my thoughts so far. Good experience center, wide range of products. If you want to try them, you can register at '.base_url().'?id='.$_SESSION["referid"].'  they will call you back and take it forward.]&url=[https://tirupatiinsurance.com/]" class="fa fa-twitter" data-action="share/twitter/share" target="_blank"></a>';
}
?>
        <div class="refer-top" style="background-image: url(<?php echo base_url();?>assest/img/refer.jpg)">
            
            <div class="overlay2">
                <div class="container" >
                    <h2>Good Friends Share!</h2>
                    <p>Refer your friend to us and Earn Upto 50,000 per month</p>
                </div>
                <div class="refer-form">
                <div class="container refer">
                    <div class="row">
                          
                        <div class="col-lg-6 col-xs-12" style="padding-right: 20px;">
                            <h5>If you have someone particular in mind...</h5>
                            <div class="group-form">
                                <div class="screen-reader-response" aria-live="polite"></div>
                                <form action="#" method="post" >
                                    <input class="lis" type="text" name="name" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Your Friend's Name " required></br>
                                    <input class="lis" type="email" name="email" value="" size="40"  placeholder="Your Friend's Mail" required></br>
                                    <input class="lis" type="tel" name="tel-331" value="" size="40" aria-invalid="false" placeholder="Your Friend's Phone Number" required></br>
                                    
                                    <input class="lis" type="text" name="city" value="" size="40" aria-invalid="false" placeholder="Enter City" required></br>
                                    <input class="lis" type="tel" name="text-677" value="" size="40" aria-invalid="false" placeholder="Your Phone" required></br>
                                    <input type="submit" value="Send Invite" class="bu"  />
                                </form>    
                            </div>
                        </div>
                   
                            
                     
                        <div class="col-lg-6 col-xs-12">
                            
                            <h5>Generate your referral link:</h5>
                            <div class="group-form">
                                <?php echo $button; ?>
                            </div>
                            <h6 style="margin-top:30px; color:rgb( 190, 190, 190 );">And Shared Via:</h6>
                            <div class="text-center">
                            <?php echo $fb; ?>
                                <?php echo $wha; ?>
                                <?php echo $twi; ?>
                            </div>
                        </div>  
                    </div>    
                </div>
                </div>
            </div>
        </div>
        <div class="step">
        <div class="container">
            <h3>in 3 Easy Steps</h3>
            
            <div class="flex justify-content-center">
                <div class="col-md-2">
                    
                    <center><i class="fa fa-users" aria-hidden="true"></i></center>
                    <p>Refer Your Friends</p>
                       
                </div>
                <div class="col-md-2">
                    
                        <hr class="style1">
                    
                </div>
                <div class="col-md-2">
                    
                    <center><i class="fa fa-shield" aria-hidden="true"></i></center>
                        <p>They Insured with Us</p>
                        
                    
                </div>
                <div class="col-md-2">
                    
                        <hr class="style1">
                    
                </div>
                <div class="col-md-2">
                    
                    <center><i class="fa fa-inr" aria-hidden="true"></i></center>
                        <p>We Pay You</p>
                    
                </div>
                

            </div>
            
        </div>
    </div>
    <div class="log_refer">
        <div class="container">
        <?php echo $a; ?>
        </div>
    </div>

    <div class="h_box">
          <section class="bg-white accordion-section clearfix mt-3 faq" aria-label="Question Accordions">
            <div class="container">
            
                <h2 style="text-align: center; font-weight:400;">Frequently Asked  </h2>
                
                <div class="container qes">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3 " style="border-bottom: 1px solid grey; border-radius:0px;" role="tab" id="heading0">
                      <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                          When am i eligible for getting the referral bouns?
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
                    <div class="panel-heading p-3 mb-3" style="border-bottom: 1px solid grey; border-radius:0px;" role="tab" id="heading1">
                      <h3 class="panel-title">
                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            How will i get my referral bouns?
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
        $( '#copied' ).click( function()
 {
    var copyText = document.getElementById("copy");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
 });
    </script>