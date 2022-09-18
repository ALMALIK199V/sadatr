<?php
$con = mysqli_connect("localhost", "root", "", "test");

function add_drive(){
    global $con;
    $get_cat3 ="select * from myitm1";
    $run_pro = mysqli_query($con , $get_cat3);
       while ($row_pro = mysqli_fetch_array($run_pro)){

                     echo '  
                     
                                               
                     
                                                     <div class="'.$row_pro['p_class'].' item">
                                                           <div class="col-sm-6">
                                                               <h1><span>SADA</span>-TRADIND<i style="font-size: 18px;color:#4a8f3c;">الفرقدين</i></h1>
                                                               <h2>'.$row_pro['p_name'].'</h2>
                                                               <p>'.$row_pro['p_dis'].'</p>
                                                               <button type="button" class="btn btn-default get">Get it now</button>
                                                           </div>
                                                           <div class="col-sm-6 drive-img">
                                                               <img src="imgee/'.$row_pro['p_img'].'" class="girl img-responsive" alt="" />
                                                         
                                                            </div>
                                                      </div>

                                                      


                                            ';     
 

         }
} 



?>