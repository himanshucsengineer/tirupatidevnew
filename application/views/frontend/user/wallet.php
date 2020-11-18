<title>Tirupati insurance- User Wallet</title>






<style>
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
    .wallet{
        width:100%;
        height:100%;
        padding-top:1rem;
        padding-bottom:2rem;
        background-color:#fdfdfd;
    }
    .wallet .card{
        width:105%;
        height:auto;
        background-color:#007bff;
       margin-bottom:1rem;
       border:none;
       border-radius:none !important;
       padding-top:2rem;
       padding-bottom:2rem;
    }
    .wallet .card p{
        width:100%;
        height:auto;
        color:white;
        text-align:center;
        
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
    
    
    @media only screen and (max-width: 600px){
  .wallet .card{
        width:100%;
        
    }
}
}
</style>
<?php  foreach($fetch_refer as $value){
            $total += $value['money'] ; 
           }
           
           foreach($fetch_wimoney as $mone){
               if($mone['account_status'] == true){
            $tota += $mone['amount']; 
            $pend = $total - $tota;
            $_SESSION["amou"] = $tota;
               }else{
                   $tota=$_SESSION["amou"];
                   
               }
               
           }
           
           
           
           ?>
<div class="wallet">
    <div class="container">
        <div class="row">
        <div class="col-md-2">
            
        </div>
        <div class="col-md-10">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-4 ">
                        
                        <div class="card">
                        <p><?php   echo $total ;?></p>
                        <p>Referral point</p>
                        </div>
                    </div>
                    <div class="col-md-4 " style="margin-left:0px;">
                        <div class="card">
                        <p><?php  echo $tota ;?></p>
                        <p>Withdrowed point</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                        <p><?php echo $pend; ?></p>
                        <p>Pending point</p>
                        </div>
                    </div>    
                </div>
                <form method="post" action="<?php echo base_url();?>frontend/user/wallet/export">
                <a href-"export"><button class="buuuuu"><i class="fa fa-download" aria-hidden="true"></i> Export to csv</button>
                <h3>Referral History</h3>
                <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>date</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Insurance type</th>
                            <th>Total Premium</th>
                            <th>Premium paid</th>
                            <th>money Earned</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  foreach($fetch_refer as $value){ ?>
    <tr>
      <td><?php echo $value['date']; ?></td>
      <td><?php echo $value['ref_date']; ?></td>
      <td><?php echo $value['email']; ?></td>
      <td><?php echo $value['number']; ?></td>
      <td><?php echo $value['insurance_type']; ?></td>
      <td><?php echo $value['total_premium']; ?></td>
      <td><?php echo $value['premium_paid']; ?></td>
      <td><?php echo $value['money']; ?></td>
    
      
    </tr>
    <?php } ?>
                        
                       
                    </tbody>
                </table>
                </div>
                </form>
            </div>    
        </div>    
    </div>
    </div>
</div>    