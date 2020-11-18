<?php error_reporting(E_ERROR | E_PARSE);?>
<?php
    $json_string = file_get_contents("http://tirupatiinsurance.com/blog/wp-json/wp/v2/posts?per_page=12&_embed");
    $parsed_json['blog'] = json_decode($json_string);
//     // print_r($parsed_json['blog']);
//     echo count($parsed_json['blog']);
// for($i=0; $i< count($parsed_json['blog']); $i++){
//     echo "<br><br>";
//     echo $parsed_json['blog'][$i]->title->rendered."<br>";
//     echo $parsed_json['blog'][$i]->date."<br>";
//     foreach($parsed_json['blog'][$i]->_embedded->{'wp:term'}[0] as $value){
//         echo $value->name;
//     }
//     echo '<br>'.$parsed_json['blog'][$i]->_embedded->{'wp:featuredmedia'}[0]->media_details->sizes->thumbnail->source_url."<br>";
//     echo $parsed_json['blog'][$i]->link."<br>";
// }
// die;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/extra.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@300;400;500;600;700;800&family=Lato:wght@300;400&display=swap"
        rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Tirupati insurance</title>
</head>

<body>

    <!-- Main -->
    <main>
        
        <!-- Header Section -->
        

        <section class="container my-5">
            <div class="row">
            <?php for($i=0; $i< count($parsed_json['blog']); $i++){ ?>
                <div class="col-md-4">
                <div class="card my-4 border-0" >
                       <a href="<?php echo $parsed_json['blog'][$i]->link ?>"><img style="height:180px" class="w-100" src="<?php echo $parsed_json['blog'][$i]->_embedded->{'wp:featuredmedia'}[0]->media_details->sizes->medium->source_url; ?>" alt="Card image cap"></a>
                        <div class="card-body p-0">
                        <?php  foreach($parsed_json['blog'][$i]->_embedded->{'wp:term'}[0] as $value){ ?>
                        <a href="<?php echo $parsed_json['blog'][$i]->link ?>" class="tags_links mb-4"><?php  echo $value->name; ?></a>
                        <?php } ?>
                       <a href="<?php echo $parsed_json['blog'][$i]->link ?>" class="text-dark"><h3 class="card-title mt-3"><?php echo $parsed_json['blog'][$i]->title->rendered ;?></h3></a> 
                         <p class="card-text date-vlog"><?php echo $parsed_json['blog'][$i]->date ; ?></p>
                        
                       </div>   
                </div> 
             </div>
            <?php } ?>
                  
           </div>
            
        </section>




        <!-- Pagination -->
        <!-- <section class="pagination">
            <div class="container">
                <div class="pagination_main">
                    <div class="pagination_main--left">
                         <div class="left left_move" id="gotoPre1_1">
                                <img src="./icons/left-arr.svg" alt="">
                        </div>
                    </div>
                    <div class="pagination_main--mid">

                        <div class="page_number">
                           <a href=""><span class="page_number-text">1</span></a> 
                        </div>
                        <div class="page_number">
                            <span class="page_number-text">2</span>
                        </div>
                        <div class="page_number">
                            <span class="page_number-text">3</span>
                        </div>
                        <div class="page_number">
                            <span class="page_number-text">4</span>
                        </div>
                            
                    </div>
                    <div class="pagination_main--right">
                        <div class="right right_move" id="gotoNext1_1">
                                <img src="./icons/right-arr.svg" alt="">
                        </div> 
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End Pagination -->

    </main>
  
    </body>
</html>
    

<script>
 $('#vlog-view').hide();
    $(document).ready(function(){
      $("#blog").click(function(){
        $("#blog-view").show(800);
        $("#vlog-view").hide(800);
  });
      });
      $("#vlog").click(function(){
        $("#blog-view").hide(800);
        $("#vlog-view").show(800);
        $( ".resources_post" ).first().show( "fast", function showNext() {
    $( this ).next( ".resources_post" ).show( "fast", showNext );
      });
    });
</script>

<script>
    $('.nav-item').removeClass("nav-active");
    $('#resources').addClass("nav-active");
</script>

<script>
    $('.nav-item').removeClass("nav-active");
    $('#resources').addClass("nav-active");
    function active_blog(){
        $('#vlog').removeClass("res_blog_active");
        $('#blog').addClass("res_blog_active");   
    }
    function active_vlog(){
        $('#blog').removeClass("res_blog_active");
        $('#vlog').addClass("res_blog_active");   
    }
</script>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>