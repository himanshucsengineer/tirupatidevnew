<?php
if(!isset($_SESSION["referid"]))
{
    $button=' <li   class="  nav-item">
    <a  data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();" class="nav-link">
    Login/Signup
    </a>  
  </li> ';
}
else{
  $button='<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  '.$_SESSION["name"].'
  </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    <a class="dropdown-item" href="'.base_url().'frontend/user/dashboard">Dashboard</a>
    <a class="dropdown-item" href="'.base_url().'frontend/logout">Log Out</a>
  </div>
</li>   '; 
}
?>
<?php
if(!isset($_SESSION["referid"]))
{
    $button=' <li   class="  nav-item">
    <a  data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();" class="nav-link">
    Login/Signup
    </a>  
  </li> ';
}
else{
  $button2='<div class="mmm">
  <a class="custom-logo-link mm" href="#" rel="home""   >Hey, 
  '.$_SESSION["name"].'
  </a>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  </div>
  '; 
}
?>
<style>


  .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0px;
  background-color: white;
  overflow-x: hidden;
  transition: 0.3s;
  padding-top: 60px;
}

.sidenav a {
  padding: 0px 0px 0px 2px;
  text-decoration: none;
  font-size: 20px;
  color: rgb( 134, 134, 134 );
  display: block;
 
  transition: .2s;
}



.sidenav .closebtn {
  position: relative;
    margin-top:-3rem;
  float:right;
  font-size: 36px;
  

}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}



  

.buu{
    background-color:transparent;
    color:rgb( 239, 69, 84 );
    font-size: 2rem;
    outline:none !important;
    border:none !important;
    margin-right:.5rem;
}
 .linkk{
    width:100%;
    height:auto;
   padding-top:1rem;
   padding-bottom:1rem;
    border-top:1px solid #cdcdcd;
    border-bottom:1px solid #cdcdcd;
    border-left:none;
    border-right:none;
    outline:none !important;
    text-align:left !important;
    padding-left:2rem;
    background-color:white;
    transition:.5s;
}
.linkk:hover{
    
    background-color: rgb( 243, 242, 250 );
    border-left:2px solid  rgb( 239, 69, 84 );
}

.flex {
  display: flex;
  
}
.linkk a:hover{
    color: rgb( 239, 69, 84 );
}
.clo{
    color:rgb( 239, 69, 84 ) !important;
    background-color:white;
    outline:none !important;
    border:none !important;
    margin-left:2rem;
    font-size:2rem;
}
.sha{
    box-shadow: 0px 0px 10px 4px rgba( 0, 0, 0 , 0.2);
    z-index:+1;
}
.use{
    color:rgb( 95, 96, 96 );
    font-size:25px !important;
    text-decoration:none !important;
    transition:.5s;
    margin-top:-.5rem;
    margin-left:1rem;
}
.mm{
    color:rgb( 95, 96, 96 );
    font-size:24px;
    text-decoration:none !important;
    transition:.5s;
    margin-top:-.5rem;
     margin-left:1rem;
}
.use:hover{
    color:rgb( 95, 96, 96 ) !important;
    
}
.loo{
    display:none;
}
.rer{
    display:none;
}
.rrr{
    display:block;
}
.mmm{
    display:none;
    margin-top:-3rem;
    padding-bottom:1rem;
    padding-top:.9rem;
}
.de{
    display:block;
    margin-top:-3rem;
    padding-bottom:1rem;
    padding-top:.9rem;
    
}
@media only screen and (max-width: 600px) {
  .loo{
    display:block;
}
.rer{
    display:block;
}
.rrr{
    display:none;
}
.mmm{
    display:block;
}
.de{
    display:none;
}
}
</style>


<body>




<header class="header-area bg-white meu sha">

      <div class="navbar-area ">

          <div class="container">

              <div class="row">

                  <div class="col-lg-12">

                      <nav class="navbar navbar-expand-lg">
                          
                         <div class="wal_nav_list_right">
                            <button class="buu" onclick="openNav()">&#9776;</button>
                        </div>
                        <div id="mySidenav" class="sidenav">
                            <div class="de">
                                <a class="custom-logo-link use" rel="home" href="<?php echo base_url();?>">User Dashboard</a>
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            </div>
                            <?php echo $button2; ?>

                            
                            <a href="<?php echo base_url()?>frontend/user/dashboard">  <button class="linkk"><img src="<?php echo base_url();?>assest/img/user.svg" style="width:15px; height:15px; margin-top:-.2rem; margin-right:.5rem;">Account Details</button></a>
                            <a href="<?php echo base_url()?>frontend/user/wallet">  <button class="linkk"><img src="<?php echo base_url();?>assest/img/wallet.svg" style="width:15px; height:15px; margin-top:-.2rem; margin-right:.5rem;">Wallet</button></a>
                            <a href="<?php echo base_url()?>frontend/user/bank"> <button class="linkk"><img src="<?php echo base_url();?>assest/img/museum.svg" style="width:15px; height:15px; margin-top:-.2rem; margin-right:.5rem;">Bank Details</button></a>
                            <a href="<?php echo base_url()?>frontend/user/referrel"> <button class="linkk"><img src="<?php echo base_url();?>assest/img/refer5.svg" style="width:15px; height:15px; margin-top:-.2rem; margin-right:.5rem;">My Policy</button></a>
                            <a href="<?php echo base_url(); ?>frontend/user/transfer"><button class="linkk"><img src="<?php echo base_url();?>assest/img/museum.svg" style="width:15px; height:15px; margin-top:-.2rem; margin-right:.5rem;">Transfer Amount</button></a>
                            <a href="<?php echo base_url(); ?>refer-earn"> <button class="linkk rer"><img src="<?php echo base_url();?>assest/img/refer5.svg" style="width:15px; height:15px; margin-top:-.2rem; margin-right:.5rem;">Refer and Earn</button></a>
                            <a href="<?php echo base_url(); ?>frontend/logout"> <button class="linkk loo"><img src="<?php echo base_url();?>assest/img/logout.svg" style="width:15px; height:15px; margin-top:-.2rem; margin-right:.5rem;">Logout</button></a>
                        </div> 
                          
                          
                          
                          
                        
                          
                        <!--div id="bs-canvas-left" class="bs-canvas bs-canvas-anim bs-canvas-left position-fixed bg-white sha" style="display:block; height:100%">
                            <header class="bs-canvas-header  " style="padding:13px;">
                                        <div class="de">
                                        <a class="custom-logo-link use" rel="home" href="<?php echo base_url();?>">User Dashboard</a>
                                        <button type="button" class="bs-canvas-close clo" aria-label="Close"><span aria-hidden="true" >&times;</span></button>
                                        </div>
                                        <?php echo $button2; ?>
                                
                           
                                
                            
                            </header>
                            <div class="bs-canvas-content ">
                                
                                  
                                
                            </div>
                        </div-->

                          <div class="logo">
                          <a class="custom-logo-link " rel="home" href="<?php echo base_url();?>"><img width="133" height="55" src="<?php echo base_url(); ?>assest/img/logo.jpg" alt="Tirupati insurance" class="custom-logo" ></a>
                             
                                  <a class="navbar-brand"  href="#" rel="home">

                                        

                                  </a>

                                  
                          </div>

                          

                          



                          <div id="navbarSupportedContent" class="collapse navbar-collapse sub-menu-bar rrr">
                            <ul id="nav" class="navbar-nav ml-auto ">
                            
                              
                              
                              
                              
                             
                              
                              
                              
                              <li   class="  nav-item">
                              
                                <a title="Contact Us" href="<?php echo base_url(); ?>refer-earn" class="nav-link" style="color:rgb( 239, 69, 84 ); ">
                                Refer & Earn
                                </a>
                                 
                              </li>
                              <li   class="  nav-item m-1 brk " >
                                |
                              </li>
                      <?php echo $button; ?>
                           
                            </ul>
                          </div>
                          
                        




                      </nav> <!-- navbar -->

                  </div>

              </div> <!-- row -->

          </div> <!-- container -->

      </div> <!-- navbar area -->

  </header>
  
  
  
  <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "270px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
  </script>  