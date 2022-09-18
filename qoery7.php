

<?php

$con = mysqli_connect("localhost", "root", "", "test");
function momez(){
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else{
        $page =1;
    }
    global $con;
   
    $num_per_page = 06;
    $start_from = ($page-1)*06;
    $get_cat3 ="SELECT * from myitm05 LIMIT $start_from,$num_per_page";
   
    $result =mysqli_query($con,$get_cat3);

       
             while($row=mysqli_fetch_assoc($result)){

             
                     echo '  
                     
                                               

                                            <div class="col-sm-4">
                                               
                                                    <div class="product-image-wrapper">
                                                        <div class="single-products">
                                                                <div class="productinfo text-center">
                                                                    <div class="img-productinfo"><img src="imgee/'.$row['p_img'].'" alt="" /></div>
                                                                    <h2>'.$row['p_pric'].'&#36;</h2>
                                                                    <p>'.$row['p_name'].'</p>
                                                                    
                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                </div>
                                                                <div class="product-overlay">
                                                                    <div class="overlay-content">
                                                                        <h2>'.$row['p_pric'].'&#36;</h2>
                                                                        <p>'.$row['p_name'].'</p>
                                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="choose">
                                                            <ul class="nav nav-pills nav-justified">
                                                                <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                                                <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                
                                            </div>
                                                   
                                                                                                     
                                            ';
             
 

         }


$pr_query = "SELECT * from myitm05";
$pr_result = mysqli_query($con,$pr_query);
$total_recordd = mysqli_num_rows($pr_result);
$total_page = ceil($total_recordd/$num_per_page);
if($page>1){
    echo "<a href='index.php?page=".($page-1)."' class='page-back'>Previous</a>";
}
for($i=1;$i<$total_page;$i++){
    echo "<a href='index.php?page=".$i."' class='page-itms'>$i</a>";
}
if($i>$page){
    echo "<a href='index.php?page=".($page+1)."' class='page-next'>Next</a>";
}
}


?>