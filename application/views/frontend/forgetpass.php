<style>
    .pass{
        width:100%;
        height:auto;
        padding-top:2rem;
        padding-bottom:2rem;
    }
    .pass .card{
        width:100%;
        height:auto;
        padding:1rem;
        border:1px solid #fdfdfd;
    }
    .pass .card input[type=email]{
        margin-top:2rem;
    }
    .pass .card .buu{
       width:10rem;
       border-radius:0px !important;
    }
</style>
<div class="pass">
    <div class="container">
        <?php echo $error; ?>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
		<?php echo form_open(base_url( 'frontend/forgetpass/forgot_pass'), array('id'=>'forform','method'=>'POST'));?>
		            <input type="email" name="mail" id="name" placeholder="Enter Your Email ID"/><br /><br />
	               <center> <input type="submit" class="buu" value="Forgot Password" name="forgot_pass"/><br /></center>
                <?php echo form_close(); ?>
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

<script>
    $("#forform").submit(function(event){
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
        $("#forform).trigger("reset");
	});
});
</script>