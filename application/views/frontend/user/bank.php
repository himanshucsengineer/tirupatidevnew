<title>Tirupati insurance- User bank details</title>








<?php 
if(!isset($_SESSION["referid"]))
{
echo "<script>window.location.href='/insurance/';</script>";
}
else
{
  $earning=$_SESSION["ref_count"];
  $click=$_SESSION["earn"];
  $bank_acc=$_SESSION["bank_acc"];
  $ifsc=$_SESSION["ifsc"];
  $acc_name=$_SESSION["acc_name"];
}
?>
<style>
    .bank{
        width:100%;
    height:auto;
    padding-top:2rem;
    padding-bottom:2rem;
    background-color:#fdfdfd;
    }
    .bank h3{
        width:100%;
    height:auto;
    font-weight:400;
    color: rgb( 239, 69, 84 );
    font-family: "Roboto";
    }
    .bank .style1{
    border-top:2px solid #cdcdcd;
}
.table{
        background-color:white;
        color:#212529;
        font-family: "Roboto";
        margin-bottom:2rem;
    }
    .bank h5{
    width:100%;
    height:auto;
    font-weight:400;
    color: rgb( 127, 127, 127 );
    font-family: "Roboto";
}
.bank input[type=text], input[type=email], input[type=number]{
    width:100%;
    height:auto;
    padding-top:.5rem;
    padding-bottom:.5rem;
    padding-left:1rem;
    margin-bottom:1rem;
    border:1px solid #cdcdcd;
    outline:none;
}

.bank button{
    width:8rem;
    height:auto;
    padding-top:.5rem;
    padding-bottom:.5rem;
    border:none;
    outline:none;
    color:white;
    border-radius:none !important;
    background-color:rgb( 239, 69, 84 );
    transition:.5s;
}
.bank  button:hover{
    
    
    background-color:rgb( 95, 96, 96 );
}
.bank .butt{
    width:8rem;
    height:auto;
    padding-top:.5rem;
    padding-bottom:.5rem;
    border:none;
    outline:none;
    color:white;
    border-radius:0px !important;
    background-color:rgb( 239, 69, 84 );
    transition:.5s;
}
.bank .butt:hover{
    
    
    background-color:rgb( 95, 96, 96 );
}
</style>
<div class="bank">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                
                
            </div>
            <div class="col-md-10">
                <div class="container">
                    <h3>Bank Details</h3>
                    <hr class="style1">
                     <table class="table table-bordered">
                    <thead>
                        <tr>
                           
                            <th>Account number</th>
                           
                            <th>Ifsc code</th>
                            
                            <th>Account holder name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                            <td><?php echo $bank_acc;?></td>
                            <td><?php echo $ifsc;?></td>
                            <td><?php echo $acc_name;?></td>
                        </tr>
                        
                        
                       
                    </tbody>
                </table>
                
                <h3>Add Bank</h3>
                <hr class="style1">
                <form action="../login/update_bank" method="Post">
                    <?php 
                if($this->session->flashdata('dashboard_error'))
                {
                  echo '<p class="text-success">'.$this->session->flashdata('dashboard_error').'</p>';
                }
                ?>
                <div class="row">
                    
                    <div class="col-md-3">
                        <h5>Account number:*</h5>
                    </div>
                    <div class="col-md-6">
                        <input type="number" name="bank_acc" id="acnum" placeholder="Enter account number">
                    
                    </div>   
                    <div class="col-md-3">
                    
                    </div> 
                </div>
                <div class="row">
                    
                    <div class="col-md-3">
                        <h5>Confirm Account number:*</h5>
                    </div>
                    <div class="col-md-6">
                        <input type="number" name="cbank_acc" id="acnumc" placeholder="Confirm account number">
                    
                    </div>   
                    <div class="col-md-3">
                    
                    </div> 
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <h5>IFSC code:*</h5>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="ifsc" id="ifsc" placeholder="Enter Ifsc code">
                    
                    </div>   
                    <div class="col-md-3">
                    
                    </div> 
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <h5>Account Holder Name:*</h5>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="acc_name" id="achname" placeholder="Enter account holder Name">
                    
                    </div>   
                    <div class="col-md-3">
                    
                    </div> 
                </div>
                <div class="row">
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-6">
                    <input type="submit"name="formSubmit" class="butt" value="Add Bank">
                    
                    
                </div>  
                <div class="col-md-3">
                   
                </div> 
            </div>
            </form>
            </div>
                  
            </div>    
        </div>    
    </div>
</div>    