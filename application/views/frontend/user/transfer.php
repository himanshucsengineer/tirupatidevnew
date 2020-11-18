<title>Tirupati insurance- User Dashboard</title>




<?php 
if(!isset($_SESSION["referid"]))
{
echo "<script>window.location.href='/insurance/';</script>";
}
else
{
  $name=$_SESSION["name"];
  $email=$_SESSION["email"];
  $number=$_SESSION["number"];
  $addrs=$_SESSION["addrs"];
  
}
?>
<style>


/* Style the tab */

.dash{
  width: 100%;
  height: auto;
  
}
.tab {
 
 
  background-color:rgb( 44, 44, 44 );
  width: 100%;
  height: auto;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: white;
  padding: 10px 0px 10px 0px;
  width: 100%;
  border: none;
  outline: none;
  text-align: center;
  cursor: pointer;
  transition: 0.2s;
  font-size: 17px;
}
.tabcontent button{
  width: 10rem;
  font-size: 1.1rem;
  padding: 5px;
  margin-top: 1rem;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color:rgb( 239, 69, 84 );
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color:rgb( 239, 69, 84 );
}

/* Style the tab content */
.tabcontent {
  
  
  

  width: 100%;
 
  height: auto;
  background-color: white;
}

.tabcontent .card-header{
  background-color: rgb( 44, 44, 44 );

  color: white;
}
.tabcontent .card-header h4{
  text-transform: uppercase;
  font-weight: lighter;
}
.tabcontent button{
  outline: none;
  border: none;
  color: white;
  background-color: rgb( 239, 69, 84 );
  border-radius: 5px;
  
}
.tabcontent button:hover{

  background-color: rgb( 44, 44, 44 );

  
}
.tabcontent table{
  width: 100%;
}

.tabcontent input[type=text], input[type=email], input[type=number], input[type=password]{
  width: 100%;
        border-top: none;
        padding-left: 15px;
      color: black;
        outline: none;
        border-left: none;
        border-right: none;
        
        text-align: left;
        font-size: 14px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        margin-bottom: 20px;

}
.tabcontent .card {
  width: 100%;
  height: auto;
  margin-bottom: 20px;
}


@media only screen and (max-width: 500px){
  .tabcontent .card {
  
  margin-top: 10px;
}
}

.tabcontent p{
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  font-size: 18px;
  
}


.dashbo{
    width:100%;
    height:auto;
    padding-top:2rem;
    padding-bottom:2rem;
    background-color:#fdfdfd;
}

.dashbo h3{
    width:100%;
    height:auto;
    font-weight:400;
    color: rgb( 239, 69, 84 );
    font-family: "Roboto";
}
.dashbo .style1{
    border-top:2px solid #cdcdcd;
}
.dashbo .cod{
    margin-top:2rem;
}
.dashbo h5{
    width:100%;
    height:auto;
    font-weight:400;
    color: rgb( 127, 127, 127 );
    font-family: "Roboto";
}
.dashbo input[type=text], input[type=email], input[type=number]{
    width:100%;
    height:auto;
    padding-top:.5rem;
    padding-bottom:.5rem;
    padding-left:1rem;
    margin-bottom:1rem;
    border:1px solid #cdcdcd;
    outline:none;
}
.dashbo .ttt{
    width:100%;
    height:auto;
    padding-top:.5rem;
    padding-bottom:.5rem;
    padding-left:1rem;
    margin-bottom:1rem;
    border:1px solid #cdcdcd;
    outline:none !important;
}
.dashbo button{
    
    width:8rem;
    height:auto;
    padding-top:.5rem;
    padding-bottom:.5rem;
    border:none;
    outline:none;
    color:white;
    background-color:rgb( 239, 69, 84 );
    transition:.5s;
}
.dashbo button:hover{
    
    
    background-color:rgb( 95, 96, 96 );
}
.dashbo .butt{
    
    width:8rem;
    height:auto;
    padding-top:.5rem;
    padding-bottom:.5rem;
    border:none;
    outline:none;
    color:white;
    background-color:rgb( 239, 69, 84 );
    transition:.5s;
    border-radius:0px !important;
}
.dashbo .butt:hover{
    
    
    background-color:rgb( 95, 96, 96 );
}
.dashbo .copy{
    
    width:8rem;
    height:auto;
    padding-top:.5rem;
    padding-bottom:.5rem;
    border:none;
    outline:none;
    border-radius:0px !important;
    color:white;
    background-color:rgb( 239, 69, 84 );
    transition:.5s;
}
.dashbo .copy:hover{
    
    
    background-color:rgb( 95, 96, 96 );
}
</style>
<?php
if(!isset($_SESSION["referid"]))
{
    $button='<input type="submit" name="formSubmit" onclick="openLoginModal();" value="Genrate Link" class="bu" />';
}
else
{
    $button='<input class="lis" type="text" id="copy" value="'.base_url().'?id='.$_SESSION["referid"].'"size="40" aria-invalid="false" placeholder=" " readonly></br>
    ';
}
?>
<?php
if(!isset($_SESSION["referid"]))
{
    $button1='<input type="submit" name="formSubmit" onclick="openLoginModal();" value="Genrate Link" class="bu" />';
}
else
{
    $button1=' <input type="submit" id="copied" value="Copy Link" class="copy"  />';
}
?>
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
        
     
<div class="dashbo">
    <div class="container">
    <div class="row">
        <div class="col-md-2">
            
        </div>
        <div class="col-md-10">
            <div class="container">
          
             
            <h3 style="margin-top:2rem;">Transfer to Bank</h3>
            <hr class="style1">
            <?php echo ($this->session->flashdata('response'))? $this->session->flashdata('response') : '' ?>
            <form action="<?php echo base_url();?>frontend/user/transfer/add_bank" method="Post">
                
            <div class="row">
                <div class="col-md-3">
                    <h5>Account Number</h5>
                </div>
                <div class="col-md-6">
                    <input type="number" name="anum" placeholder="Enter Account Number" >
                    
                </div>   
                <div class="col-md-3">
                    
                </div> 
            </div> 
            <div class="row">
                <div class="col-md-3">
                    <h5>IFSC code</h5>
                </div>
                <div class="col-md-6">
                    <input type="text" name="ifsc" placeholder="Enter IFSC Code" >
                    
                </div>  
                <div class="col-md-3">
                   
                </div> 
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h5>Account Holder Name</h5>
                </div>
                <div class="col-md-6">
                    <input type="text" name="hname" placeholder="Enter Account Holder Name">
                    
                </div>  
                <div class="col-md-3">
                    
                </div> 
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h5>Enter Amount</h5>
                </div>
                <div class="col-md-6">
                    <input type="number" name="am" placeholder="Enter Amount">
                    
                </div>  
                <div class="col-md-3">
                    
                </div> 
            </div>
            <div class="row">
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-6">
                    <input type="submit" name="formSubmit" class="butt" value="Transfer">
                    
                </div>  
                <div class="col-md-3">
                   
                </div> 
            </div>
            </form>
        </div> 
        </div>
    </div>    
    </div>
</div >

