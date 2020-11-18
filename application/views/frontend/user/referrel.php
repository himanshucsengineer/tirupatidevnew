<title>Tirupati insurance- User Refereel History</title>





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

    .wallet{
        width:100%;
        height:100%;
        padding-top:1rem;
        padding-bottom:2rem;
        background-color:#fdfdfd;
    }
    
    .wallet h3{
        width:100%;
    height:auto;
    font-weight:400;
    margin-top:1rem;
    color: rgb( 127, 127, 127 );
    font-family: "Roboto";
    }
    .table{
        background-color:white;
        color:#212529;
        font-family: "Roboto";
    }
    
    
   


.buuuuu{
    width:8rem;
    color:white !important;
    background-color:rgb( 239, 69, 84 ) !important;
    border:none;
    outline:none !important;
    padding-top:.5rem;
    padding-bottom:.5rem;
    font-size:14px;
 
    
}
</style>

<div class="wallet">
    <div class="container">
        
         
        <div class="row">
        <div class="col-md-2">
            
        </div>
        <div class="col-md-10">
            <div class="container">
                <form method="post" action="<?php echo base_url();?>frontend/user/referrel/export">
                <a href-"export"><button class="buuuuu"><i class="fa fa-download" aria-hidden="true"></i> Export to csv</button>
                <h3>My Policy</h3> 
                
                
                
                <div class="table-responsive">
                
                
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Policy Number</th>
                            <th>Company</th>
                            <th>Product Type</th>
                            <th>Sub Class</th>
                            <th>Vhichel Name</th>
                            <th>Registration No.</th>
                            <th>Registration Date</th>
                            <th>Due Date</th>
                            <th>Insurance Type</th>
                            <th>Total Premium</th>
                            <th>Premium Paid</th>
                            <th>Gross Premium</th>
                            <th>Payment Method</th>
                            <th>Discount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  foreach($fetch_mypolicy as $value){ ?>
    <tr>
      <td><?php echo $value['date']; ?></td>
      <td><?php echo $value['reference']; ?></td>
      <td><?php echo $value['email']; ?></td>
      <td><?php echo $value['number']; ?></td>
      
      <td><?php echo $value['poli_no']; ?></td>
      <td><?php echo $value['company']; ?></td>
      <td><?php echo $value['pro_type']; ?></td>
      <td><?php echo $value['sub_clas']; ?></td>
      
      <td><?php echo $value['Vhichel_name']; ?></td>
      <td><?php echo $value['registration_no']; ?></td>
      <td><?php echo $value['registration_date']; ?></td>
      <td><?php echo $value['due_date']; ?></td>
      
      <td><?php echo $value['insurance_type']; ?></td>
      <td><?php echo $value['total_premium']; ?></td>
      <td><?php echo $value['premium_paid']; ?></td>
      <td><?php echo $value['gross']; ?></td>
      
      <td><?php echo $value['payment_meth']; ?></td>
      <td><?php echo $value['discount']; ?></td>
    
      
    </tr>
    <?php } ?>
                       
                    </tbody>
                </table>
                </div>
            </div>    
        </div>    
    </div>
    </form>
    </div>
</div>    