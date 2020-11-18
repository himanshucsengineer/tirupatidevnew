<style type="text/css">
.zoom img{

    transition-duration: 5s;
    margin: 0 auto;
}
a.edit {
    display: none;
}
img {
    vertical-align: middle;
    height: 40px;
    width: auto;
}

.zoom {
    transition: all 1s;
    -ms-transition: all 1s;
    -webkit-transition: all 1s;
    margin-top: 0px;
    padding-top: 0px;

}
.zoom:hover {
    -ms-transform: scale(2); /* IE 9 */
    -webkit-transform: scale(2); /* Safari 3-8 */
    transform: scale(2);
    margin-left: 40px;
}

.text-primary {
    float: left;
}
.btn-group, .btn-group-vertical {
    float: right;
}

.btn {
    color: #4e73df;
}
#lowinventory_filter label{
    color:grey;
    font-size:15px;
}
#lowinventory_filter input[type=search]{
    border: 1px solid grey;
    outline:none;
    padding:5px;
    font-size:15px;
    margin-right:5px;
}
.buu{
    width:15rem;
    color:white !important;
    background-color:rgb( 239, 69, 84 );
    border:none;
    outline:none !important;
    padding-top:1rem;
    padding-bottom:1rem;
    font-size:14px;
    margin-bottom:1rem;
}

</style>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
<!--START Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                <div class="col-md-8">
                   <h4 class="page-title">Account Transfer Request</h4><hr>

                  </div>
                  <div class="col-md-4">
                 </div>

                </div>
            </div>
           <!--END Page-Title -->


      <div class="row">
      <div class="col-sm-12">
      <?php
      if($this->session->flashdata('success'))
      {
      echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>';
      }
      else if($this->session->flashdata('error'))
      {
      echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>';
      }


      ?>
      </div>
      </div>





        <div class="row">
          <div class="col-md-12">
                <?php 
                if($this->session->flashdata('dashboard_error'))
                {
                  echo '<p class="text-success">'.$this->session->flashdata('dashboard_error').'</p>';
                }
                ?>
            <div class="card-box table-responsive">
             
              <table id="lowinventory" data-order='[[ 0, "desc" ]]'  style="width:100%" class="table table-striped table-bordered table_shop_custom display">
                <thead>
                <tr>    
                    <th style="width: 15%">User Id</th>
                    <th>Acount Number</th>
                    <th>Ifsc code</th>
                    <th>Account Name</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Date</th>
                    
                    <th>Choose Action</th>
                    <th>Action</th>

                    </form>
                  </tr>

                </thead>
                <tbody>
                    <?php foreach($history as $value){ ?>
                    <?php $sts=$value['account_status'];?>
                    <form action="banktransfer/update_bank/<?php echo $value['id'] ;?>" method="Post">
                                            <tr>
                                            <td><?php echo $value['email'] ;?></td>
                                            <td><?php echo $value['a_number'] ;?></td>
                                            <td><?php echo $value['a_ifsc'] ;?></td>
                                            <td><?php echo $value['h_name'] ;?></td>
                                            <td><?php echo $value['amount'] ;?></td>
                                            <td><?php echo ($value['account_status'] == false)? "<span class='text-white badge badge-warning'>Not Transfered</span>" : "<span class='text-white badge badge-success'>$sts</span>" ;?></td>
                                            <td><?php echo $value['account_date'] ;?></td>
                                            <td><select  name="action">
  <option value="">Select Action</option>
  <option value="Pending">Pending</option>
  <option value="Transfer">Transfer</option>
  <option value="Decline">Decline</option>
  </select></td>
                                            <td><button class="btn btn-success " >Change Status</button></td>
                                            </tr>
                    </form>
                    <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
<!--Delete-->

   <!--Delete-->




