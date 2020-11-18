<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>Invoice</title>
    
        <style>
            body{
                width: 100%;
                height: auto;
                border: 1px solid #cdcdcd;
                
            }
            .top{
                width: 100%;
                height: auto;
            }
          .top .top-ryt{
                width: 70%;
                height: auto;
                float: right;
                background-color: rgb( 239, 69, 84 );
                
            }
            .top .top-ryt-left{
                width: 50%;
                height: auto;
                float: left;
                color: white;
                background-color: rgb( 239, 69, 84 );
               
              
               
            }
            .top .top-ryt-left p{
                margin-bottom:-20px;
                margin-left: 2rem;
                margin-right: 1rem;
               
              
               
            }
            .top .top-ryt-ryt{
                width: 50%;
                height: auto;
                float: right;
                color: white;
                background-color: rgb( 239, 69, 84 );
            }
            .top .top-ryt-ryt p{
                margin-bottom:-20px;
                margin-left: 2rem;
                margin-right: 1rem;
            }
         .top .top-lft{
                width: 30%;
                height: auto;
                float:left;
                background-color: transparent;
            }
            
            .comm h4{
                width: 100%;
                height: auto;
                margin-top:7rem;
               
                margin-left: 1rem;
                margin-right: 1rem;
                background-color: black;
                color: white;
                padding-top: .5rem;
                padding-bottom: .5rem;
                padding-left: 1rem;
                font-size: 20px;
                font-weight: 500;
            }
            .invo{
                margin-top:-2rem;
            }
            .invo .left{
                width: 50%;
                float: left;
                margin-left: 2rem;
            }
            .invo .ryt{
                width: 50%;
                float: right;
            }
            
           .bot{
               width: 100%;
               height: 20px;
               background-color: rgb( 239, 69, 84 );
               bottom: 0px;
           }
        </style>
    </head>



<body>
   <?php foreach($fetch_refer as $row){ ?>
        
            <div class="top">
                <div class="top-lft">

                </div>
                <div class="top-ryt">
                    <div class="top-ryt-left">
                    <p >www.tirupatiinsurance.com</p>



                        <p >info@tirupatiinsurance.com</p>
                        <p style="margin-bottom: 1.95rem;">8950000000</p>
                    </div>
                    <div class="top-ryt-ryt">
                        <p>Rajmahal Complex,</p>
                        <p >Opp-PLA Petrol</p>
                        <p >Pump, Delhi Road,</p>
                        <p style="margin-bottom: 1rem;">Hisar-125001</p>
                    </div>
                </div>
            </div>

            <div class="comm">
                <h4>Invoice Details</h4>
            </div>

            <div class="invo">
                <div class="left">
                    <h4>Invoice Number <span style="margin-left: .5rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">0000</span></h4>
                    <h4>Reference Name <span style="margin-left: .2rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">Himanshu Goyal</span></h4>
                </div>
                <div class="ryt">
                <h4>Date Of issue <span style="margin-left: 1.3rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">20/11/20</span></h4>
                <h4>Policy Number <span style="margin-left: .5rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">0000/000000/000000</span></h4>
                </div>
            </div>
            <div class="comm">
                <h4>Billing Details</h4>
            </div>
            <div class="invo">
                <div class="left">
                    <h4>Name <span style="margin-left: .4rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;"><?php echo $value['email'] ;?></span></h4>
                    <h4>Email <span style="margin-left: .2rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">HimanshuGoyal1011@gmail.com</span></h4>
                </div>
                <div class="ryt">
                <h4>Mobile Number <span style="margin-left: .5rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">0000000000</span></h4>
                <h4>Company <span style="margin-left: 3.2rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">ICICIC</span></h4>
                </div>
            </div>

            <div class="comm">
                <h4>Product Details</h4>
            </div>
            <div class="invo" >
                <div class="left">
                    <h4 style="color:rgb( 239, 69, 84 );">Product Type <span style="margin-left: 2rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">NON moter</span></h4>
                    <h4 style="color:rgb( 239, 69, 84 );">Vehicle Name  <span style="margin-left: 2rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">N/A</span></h4>
                    <h4 style="color:rgb( 239, 69, 84 ); " >Registration Date <span style="margin-left: .4rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">00/00/0000</span></h4>
                </div>
                <div class="ryt">
                <h4 style="color:rgb( 239, 69, 84 );">Sub class <span style="margin-left: 3rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">Marin</span></h4>
                <h4 style="color:rgb( 239, 69, 84 );">Registration no.<span style="margin-left: .5rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">N/A</span></h4>
                <h4 style="color:rgb( 239, 69, 84 );">Due Date <span style="margin-left: 3.2rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">00/00/0000</span></h4>
                </div>
            </div>
            <div class="comm">
                <h4 style="padding-top: -1rem;">Payment Details</h4>
            </div>
            <div class="invo">
                
            <div class="llff" style="margin-left:14rem;">
            <h4 >Payment Mode <span style="margin-left: 1rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">Credit Card</span></h4>
            </div>
                <div class="ryt">
                <h4 style="color:rgb( 239, 69, 84 );">Net Premiuum <span style="margin-left: 1.5rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">0000</span></h4>
                <h4 style="color:rgb( 239, 69, 84 );">Gross Premiuum <span style="margin-left: .5rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">N/A</span></h4>
                <h4 style="color:rgb( 239, 69, 84 );">Discount <span style="margin-left: 4rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">0000</span></h4>
                <h4 style="color:rgb( 239, 69, 84 );">Premium Paid<span style="margin-left: 1.8rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">0000</span></h4>
                </div>
            </div>


          <?php } ?> 
</body>
</html>