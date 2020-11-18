<style>
.b {
  visibility: hidden;
}
    .refer_admin{
        width:100%;
        height:auto;
        padding:2rem;
    }
    .refer_admin .card{
        width:94%;
        height:auto;
        border:none;
        background-color:white;
        box-shadow: 0px 0px 10px 2px rgba( 0, 0, 0 , 0.2);
    }
    .refer_admin .card .card-header{
        background-color:white;
        margin-left:1rem;
        padding-top:1rem;
        color:rgb( 95, 96, 96 );
        font-weight:600;
    }
    .refer_admin .card .card-body{
        padding:2rem;
    }
    .refer_admin .card .card-body .top{
        width:65%;
    }
    .refer_admin .card .card-body .right{
        width:45%;
        float:left;
    }
    .refer_admin .card .card-body .left{
        width:45%;
        float:right;
    }
    .refer_admin .card .card-body input[type=text], input[type=number], input[type=email]{
       width:100%;
       height:auto;
       padding-top:.5rem;
       padding-bottom:.5rem;
       outline:none;
       padding-left:1rem;
       border:none;
       border-bottom:1px solid #cdcdcd;
    }
    .refer_admin .card .card-body .labe{
        color:#cdcdcd;
        margin-top:2rem;
        font-weight:400;
    }
    .refer_admin .card .card-body .but{
        float:right;
        margin-top:10rem;
    }
    .refer_admin .card .card-body .but button{
        width:30rem;
        border:none;
        outline:none;
        height:auto;
        padding-top:.5rem;
        padding-bottom:.5rem;
        color:white;
        background-color: rgb( 239, 69, 84 );
        margin-right:1rem;
        margin-bottom:2rem;
        font-size:16px;
        transition:.5s;
    }
    .refer_admin .card .card-body .but button:hover{
        
        background-color: rgb( 95, 96, 96 );
       
    }
   .hrr .style1 {

border-top: 5px solid rgb( 239, 69, 84 );
width:120px;
margin-top:0px;
float:left;
margin-left:2rem;

}


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

<div class="container">
  <?php 
    if($this->session->flashdata('admin_error'))
    {
      echo '<p class="text-success">'.$this->session->flashdata('admin_error').'</p>';
    }
  ?>
  
  <form action="refer/insert_data" method="post" id="referform">
    <div class="refer_admin">
        
        
        
        
        <div class="card">
            <div class="card-header">
                <h4>Invoice Details</h4>
                
            </div>
            <div class="hrr">
            <hr class=style1>
            </div>
            <div class="card-body">
                <div class="top">
                    
                        <label style="color:#cdcdcd; font-weight:400;">Refer id</label></br>
                        <input type="text" list="refer" name="refer_id"  placeholder="Enter Refer id">
                        <datalist id="refer">
                            <?php  foreach($fetch_email as $value){ ?>
                            <option value="<?php echo $value['referid']; ?>">
                            <?php } ?>
                        </datalist>
                     
                </div>    
                
                    <div class="right">
                        
                        
                        <input class="b" type="number" name="invonum" value="<?php  foreach($fetch_refer as $value){ $i= $value['invoice_no'];  }$i= $i+1; echo $i;?>" readonly>
                        
                        <label class="labe">Reference Name</label></br>
                        <input type="text" name="rrname" placeholder="Enter Reference Name">
                        
                        <label class="labe">Name</label></br>
                        <input type="text" name="rname" placeholder="Enter Name">
                        <label class="labe">Mobile Number</label></br>
                        <input type="number" name="mob" placeholder="Enter Mobile Number">
                        
                        <label class="labe">Product Type</label></br>
                        <input type="text" name="p_type" placeholder="Enter Product Type">
                        <label class="labe">vehicel name</label></br>
                        <input type="text" name="v_name" placeholder="Enter vehicel name">
                        <label class="labe">Registration Date</label></br>
                        
                        <input type="text" name="r_date" id="date" placeholder="DD/MM/YYYY" class=" lis" />
                        
                        <label class="labe">Total Premium</label></br>
                        <input type="text" name="tp" placeholder="Enter Total Premium">
                        <label class="labe">Money Earned</label></br>
                        <input type="number" name="money"  placeholder="Enter Money Earned">
                        <label class="labe">Gross Premium</label></br>
                        <input type="number" name="g_pre"  placeholder="Enter Gross Premium">
                        <label class="labe">Discount</label></br>
                        <input type="text" name="Disct"  placeholder="Enter Discount">
                    </div>    
                    <div class="left">
                       
                        <input class="b" type="text" name="is_date" value="<?php

echo   date("d/m/Y");
?>" readonly>
                        <label class="labe">Policy Number</label></br>
                        <input type="number" name="policy_number" placeholder="Enter Policy NUmber">
                        
                        <label class="labe">Email Address</label></br>
                        
                        
                        <input type="email" list="email" name="mail"  placeholder="Enter Email">
                        <datalist id="email">
                            <?php  foreach($fetch_email as $value){ ?>
                            <option value="<?php echo $value['email']; ?>">
                            <?php } ?>
                        </datalist>
                        <label class="labe">Company Name</label></br>
                        <input type="text" name="c_name" placeholder="Enter Company Name">
                        
                        <label class="labe">Sub Class</label></br>
                        <input type="text" name="s_class" placeholder="Enter Sub Class">
                        <label class="labe">Registration No.</label></br>
                        <input type="number" name="r_no" placeholder="Enter Registration No.">
                        <label class="labe">due Date</label></br>
                   
                        <input type="text" name="d_date" id="date_one" placeholder="DD/MM/YYYY" class=" lis" />
                        
                        <label class="labe">Insurance Type</label></br>
                        <input type="text" name="itype" placeholder="Enter Insurance Type">
                        <label class="labe">Premium Paid</label></br>
                        <input type="text" name="pp" placeholder="Enter Premium Paid">
                        <label class="labe">Payment Method</label></br>
                        <input type="text" name="paym" placeholder="Enter Payment Method">
                    </div>        
                 <div class="but">
                <button type="submit"name="formSubmit">Generate Invoice & Save Pdf</button>
                
                </form>
               
                
                
                </div>
            </div>    
        </div>
    </div>  
  
  

  
  
  
  
  
  
  
<!--form action="refer/insert_data" method="post">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Refer Id</label>
    <input list="refer" name="refer_id" placeholder="Refer ID" class="form-control">
    <datalist id="refer">
     <?php  foreach($fetch_refer as $value){ ?>
    <option value="<?php echo $value['referid']; ?>">
    <?php } ?>
    </datalist>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Money Earned</label>
    <input type="text" name="money" class="form-control" id="exampleFormControlInput1" placeholder="Money Earned">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Referance Name</label>
    <input type="text" name="rname" class="form-control" id="exampleFormControlInput1" placeholder="Referance Name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Insurance Type</label>
    <input type="text" name="itype" class="form-control" id="exampleFormControlInput1" placeholder="Insurance Type">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Policy Type</label>
    <input type="text" name="ptype" class="form-control" id="exampleFormControlInput1" placeholder="Policy Type">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Total Premium</label>
    <input type="text" name="tpremium" class="form-control" id="exampleFormControlInput1" placeholder="Total Premium">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Premium Paid</label>
    <input type="text" name="ppaid" class="form-control" id="exampleFormControlInput1" placeholder="Premium Paid">
  </div>
    <button type="submit"name="formSubmit" class="btn btn-primary">Submit</button>
</form>
</div-->


<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
<!--START Page-Title -->
             <div class="row">
                <div class="col-sm-12">
                <div class="col-md-8">
                   <h4 class="page-title">Invoice Data</h4><hr>

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
      
      
      
      
      
      
      
<form method="post" action="<?php echo base_url();?>admin/refer/export">
    
    
    
    
    
    
    
<div class="row" style="margin-bottom:1rem;">
            <div class=col-md-2>
                <a href-"export"><button class="buu"><i class="fa fa-download" aria-hidden="true"></i> Export to csv</button>
                
            </div>
            <div class="col-md-10">
                
            </div>    
        </div > 


        <div class="row">
          <div class="col-md-12">

            <div class="card-box table-responsive">
             
              <table id="lowinventory" data-order='[[ 0, "desc" ]]'  style="width:100%" class="table table-striped table-bordered table_shop_custom display">
                <thead>
                <tr>
                    <th>Refer id</th>
                    <th>Invoice Number </th>
                    <th>Date of issue</th>
                    <th>Referance Name</th>
                    <th>Policy Number</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile number</th>
                    <th>Company</th>
                    <th>Product Type</th>
                    <th>Sub Class</th>
                    <th>Vhichel Name.</th>
                    <th>Registration No.</th>
                    <th>Regsitration Date</th>
                    <th>Due Date</th>
                    <th>Insurance type</th>
                    <th>Total premium</th>
                    <th>Premium paid</th>
                    <th>Earned Money</th>
                    <th>Gross Premium</th>
                    <th>Payment Method</th>
                    <th>Discount</th>
                    <th>Action</th>
                </tr>

                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
          </div>
        </div>
</form>

      </div>
    </div>
  </div>
<!--Delete-->

   <!--Delete-->

    <div id="deletePurchaseModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <?php echo form_open(base_url('admin/refer/deletecardetail'), array('method'=>'post'));?>
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
    <h4 class="modal-title">Delete Course</h4>
    </div>
    <div class="modal-body">
    <div class="row">
    <div class="col-md-12">
    <input type="hidden" class="deletesliderId" name="deletesliderId"/>
    <h4><b>Do you really want to Delete this Course ?</b></h4>
    </div>
    </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
    <input type="submit" class="btn btn-info" name="deleteslider" value="Delete">
    </div>
    </div>
    <?php echo form_close(); ?>
    </div>
    </div>



<script>
  $(document).ready(function() {
    $('#lowinventory').DataTable( {
        "ajax": "<?php echo base_url(); ?>admin/refer/addinventory_api"
    } );


    $(document).on('click','.delete_sliders',function(){

     $('.deletesliderId').val($(this).attr('data-id'));
        $('#deletePurchaseModal').modal('show');

    });

});

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
