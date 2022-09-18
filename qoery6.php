


<?php

$con = mysqli_connect("localhost", "root", "", "test");


function getIp(){
    $ip =$_SERVER['REMOTE_ADDR'];
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip =$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    return $ip;
}
$con = mysqli_connect("localhost", "root", "", "test");


function cart(){
    global $con;
    if(isset($_GET['add_cart'])){
       $ip = getIp();
       $pro_id = (int)$_GET['add_cart'];
       $get_cart = "select * from card where ip_add = '$ip' AND  p_id = '$pro_id'";
       $run_cart = mysqli_query($con, $get_cart);
          if(mysqli_num_rows($run_cart) > 0){
            echo '<script> alert("تم اضافة المنتج مسبقا في سلة المشتريات");</script>';

          }
        else {
                     $insert_cart ="insert into card(p_id,ip_add) values('$pro_id' , '$ip')";
                     $run_i_cart = mysqli_query($con, $insert_cart);
                            if(isset($run_i_cart)){
                                echo 
                                  '<meta http-equiv="refresh" content="0.1; url=\'show.php\'"/>';

                                
                            }

        }

    }


}









function get_cat3(){
    global $con;
    $get_cat3 ="select * from alasnaf";
    $run_pro = mysqli_query($con , $get_cat3);
       while ($row_pro = mysqli_fetch_array($run_pro)){

                     echo '  
                     
                                                     <div class="imglist2 p1">
                                                         
                                                         <div class="slied">
                                                                  <ul>
                                                                            <li>
                                                                               <a href="imgee/'.$row_pro['p_img'].'" data-lightbox="lbl"><img src="imgee/'.$row_pro['p_img'].'" alt="" class="img1"></a>
                                                                            </li>

                                                                            <li>
                                                                            <a href="imgee/'.$row_pro['p_img2'].'" data-lightbox="lbl"><img src="imgee/'.$row_pro['p_img2'].'" alt="" class="img2"></a>
                                                                         </li>

                                                                         <li>
                                                                         <a href="imgee/'.$row_pro['p_img3'].'" data-lightbox="lbl"><img src="imgee/'.$row_pro['p_img3'].'" alt="" class="img3"></a>
                                                                      </li>
                                                                  </ul>
                                                                  <br/>
                                                             </div>
                                                             <a href="show6.php?cat='.$row_pro['id'].'" class="assn"><h2 class='.$row_pro['id'].'>'.$row_pro['name'].'</h2></a>
                                                             <br/>
                                                         <a class="ashob" href="show6.php?cat='.$row_pro['id'].'"> <input class="shob" type="submit" name="order" value="مشاهدة" placeholder="مشاهدة"></a>
                                                         <br></br>
                                                      </div>      
                                                                                                     
                                            ';
 

         }
} 








$con = mysqli_connect("localhost", "root", "", "test");





function get_cat2(){
    global $con;
    if(!isset($_GET['cat'])){
        $get_cat2 ="select * from myitm3";
        $run_pro = mysqli_query($con , $get_cat2);
           while ($row_pro = mysqli_fetch_array($run_pro)){
    
                         echo '
                                            
                         
                                        
                                              <div class="imglist p1 ">
                                                    <h1 class="title">'.$row_pro['p_titele'].'</h1>
                                                    <br/>
                                                    <div class="divimg1">
                                                    <img src="imgee/'.$row_pro['p_img'].'" alt="">
                                                    </div>
                                                    <br/>
                                                     <span class="spant" tabindex="0">$'.$row_pro['p_pric'].'</span>
                                                     <a class="ashob" href="show2.php?id='.$row_pro['p_id'].'"> <input class="shob" type="submit" name="order" value="شراء الأن" placeholder="شراء"></a>

                                                     <a class="ashob2" href="show.php?add_cart='.$row_pro['p_id'].'"> <i class="order fab fa-shopify"></i></a>

                                                     <br/>
                                                     <a class="mzeda" href="show2.php"><h2 class="mzed m2">تفاصيل المنتج</h2></a>
                                                        <div class="mmzz">
                                                            <p>'.$row_pro['p_disc'].'<i class="fa fa-check"></i>
                                                            </p>
    
                                                            <i class="mzed2  fa fa-chevron-up"></i>
                                                        </div>
                                              </div>
    
    
                                             
                         
                         ';
    
                         
             }
    }
}

$con = mysqli_connect("localhost", "root", "", "test");

function get_pro_cat(){
     global $con;
     if(isset($_GET['id'])){
                    $cat=(int) $_GET['id'];
                 
                    $get_pro_cat= "select * from myitm3 where p_catogrt = '$cat' ";

                    $run_pro_cat= mysqli_query($con , $get_pro_cat);

                    if(mysqli_num_rows($run_pro_cat) > 0) {
                              while ($row_pro_cat = mysqli_fetch_array($run_pro_cat)) {
                                  echo '
                                        
                                                  
                                          
                                           <div class="imglist p1" id='.$row_pro_cat['p_id'].'>
                                                 <h1 class="title">'.$row_pro_cat['p_titele'].'</h1>
                                                 <br/>
                                                 <div class="divimg1">
                                                 <img src="imgee/'.$row_pro_cat['p_img'].'" alt="">
                                                 </div>
                                                 <br/>
                                                  <span class="spant" tabindex="0" >$'.$row_pro_cat['p_pric'].'</span>
                                                  <a class="ashob" href="show2.php?id='.$row_pro_cat['p_id'].'"> <input class="shob" type="submit" name="order" value="شراء الأن" placeholder="شراء"></a>
                                                  <a class="ashob2" href="show.php?idd='.$row_pro_cat['p_id'].'"> <i class="order fab fa-shopify"></i></a>

                                                  </br>
                                                  <a class="mzeda" href="show.php"><h2 class="mzed m2">تفاصيل المنتج</h2></a>
                                                     <div class="mmzz">
                                                         <p>'.$row_pro_cat['p_disc'].'<i class="fa fa-check"></i>
                                                         </p>

                                                         <i class="mzed2  fa fa-chevron-up"></i>
                                                     </div>
                                           </div> 
                                           ';


                                 }
                     

                         }
        
       
                         else{
                            echo '<div class="error">لا توجد منتجات</div>';
                           }       

         }
                                                            



}                                                            



function asnaf_itm(){
    global $con;
    $get_cat3 ="select * from alasnaf";
    $run_pro = mysqli_query($con , $get_cat3);
       while ($row_pro = mysqli_fetch_array($run_pro)){

                     echo '  
                     
                                               

                                                             <a href="show6.php?id='.$row_pro['id'].'" class="asit" id="asnaf-itm" target="_blank"><h2 class='.$row_pro['id'].'>'.$row_pro['name'].'</h2></a>

                                                   
                                                                                                     
                                            ';
 

         }
 } 

 function itms_discaond(){
    global $con;
    $p_id = @$_POST['p_id'];
    $get_cat3 ="select * from myitm3";
    $run_pro = mysqli_query($con , $get_cat3);
       while ($row_pro = mysqli_fetch_array($run_pro)){

                     echo '  
                     
                                    <form method="POST" id="'.$row_pro['p_titele'].'">
                              
                                            <div class="itms">  
                                                      <div class="titlee-id"><i  class="fa '.$row_pro['p_yahoo'].'" aria-hidden="true"></i><input readonly name="p_id"  value="'.$row_pro['p_id'].'"></input></div>
                                                      <div class="titlee-name"><input readonly maxlength=0 value="'.$row_pro['p_titele'].'" name="p_name" class="label-h2-1"></input></div>
                                                      <div class="img-itms"><img  src="imgee/'.$row_pro['p_img'].'"  alt=""></div>
                                                      <input class="input-img-hide" name="p_img" value="'.$row_pro['p_img'].'"></input>
                                                      <div class="litlee-do">  
                                                          <p id="p4">عدد جملة</p>                 
                                                          <p id="p3">سعر جملة</p>
                                                          <p id="p2">سعر مفرد</p>
                                                          <p id="p1">العدد</p>
                                                      </div>
                                                  
                                                      <div class="litlee-do2">  
                                                          <p id="p4"><input readonly name="p_aded2" value="'.$row_pro['p_aded2'].' "></input></p>                   
                                                          <p id="p3"><input readonly name="p_pric2" value="'.$row_pro['p_pric2'].'&#36; "></input></p>
                                                          <p id="p2"><input readonly name="p_pric" value="'.$row_pro['p_pric'].'"></input></p>
                                                          <p id="p1"><input readonly name="p_aded" value="'.$row_pro['p_aded'].'"></input></p>
                                                      </div>
                                            <button type="button" id="'.$row_pro['p_id'].'" name="add-mohtara">اضافة مختارة</button>                                                                                                                                                                                                                                                                                                  
                                                      <button type="button" name="momez" onclick="momez0();" id="'.$row_pro['p_id'].'">اضافة مميزة</button>

                                                      <button type="button" class="button4" id="button4" >اضافة خصم</button>
                                                          <div class="add-ed1">
                                                             <div class="add-ed11">
                                                                   <input type="text" class="ed-dic"  name="p_dis"  placeholder="الخصم %">
                                                                   <input readonly type="text" class="ed-dic2" name="ed_dic2" value="السعر الحالي المفرد " placeholder="">
                                                                   <input type="text" class="ed-dic5" name="up_pric" value="'.$row_pro['p_pric'].'&#36" placeholder="">
                                                                   <input readonly type="text" class="ed-dic3" name="ed_dic3" value="  السعر الحالي الجملة" placeholder="">
                                                                   <input type="text" class="ed-dic6" name="up_pric2" value="'.$row_pro['p_pric2'].'&#36" placeholder="السعر الجديد الجملة">
                                                                   <input readonly type="text" class="ed-dic4" name="ed_dic4" value=" عدد الجملة الحالي""  placeholder="">
                                                                   <input readonly type="text" class="p_yahoo" name="p_yahoo" value="fa-star"  placeholder="">
                                                                   <input type="text" class="ed-dic7" name="up_aded2" value="'.$row_pro['p_aded2'].'" placeholder="   ">
                                                             </div>
                                                              
                                                             <button type="button" name="ex-add" class="ex-add">رجوع</button>
                                                              <button name="done-add" class="done-add">تم</button>
                            
                                    </form>             </div>
                                    <form method="POST">
                                                    <input readonly name="p_id"  value="'.$row_pro['p_id'].'"></input>
                                                      <button type="button"  class="button1 button11" id="button1">تعديل</button>
                                                               <div class="add-ed2">
                                                               
                                                                  <input type="text" class="ed-dic"   name="up_name"  value="'.$row_pro['p_titele'].'" placeholder=":    الاسم"><i id="i1">الاسم</i>
                                                                  <input type="text" class="ed-dic"   name="up_img"   value="'.$row_pro['p_img'].'"     placeholder=":    الصورة"><i id="i2">الصورة</i>
                                                                  <input  type="text" class="ed-dic3" name="up_aded"  value="'.$row_pro['p_aded'].'"   placeholder=":  العددالحالي "><i id="i3">العدد</i>
                                                                  <input type="text" class="ed-dic2"  name="up_pric"  value="'.$row_pro['p_pric'].'&#36;"   placeholder=":  السعر الحالي المفرد"><i id="i4">السعر</i>
                                                                  <input  type="text" class="ed-dic3" name="up_pric2" value="'.$row_pro['p_pric2'].'&#36;" placeholder=":  السعر الحالي الجملة"><i id="i5">السعر جملة</i>
                                                                  <input  type="text" class="ed-dic4" name="up_aded2" value="'.$row_pro['p_aded2'].'" placeholder=":  العدد الحالي الجملة"><i id="i6">العدد جملة</i>
                                                                  <button type="button" name="ex-add" class="ex-add2">رجوع</button>
                                                                  <button type="button" name="update" id="update" class="done-add2">تم</button>
                                                                </div>
                                                                       



                                        </form>    
   
      
                                    
                                  </div>
               
                                        ';
 

         }
 } 





















function get_pro_serch(){
    global $con;
    if(isset($_GET['interserch'])){
          $serr =$_GET['input-serch'];

          $get_pro_serch ="select * from myitm3 where p_kay like '%$serr%'";
          $run_pro_serch = mysqli_query($con , $get_pro_serch);
                if(mysqli_num_rows($run_pro_serch) > 0){
            
                         while ($row_pro_serch = mysqli_fetch_array($run_pro_serch)){
                                     echo '
                                                                 
                                                                           
                                                                   
                                     <div class="imglist p1">
                                           <h1 class="title">'.$row_pro_serch['p_titele'].'</h1>
                                           <br/>
                                           <div class="divimg1">
                                           <img src="imgee/'.$row_pro_serch['p_img'].'" alt="">
                                           </div>
                                           <br/>
                                            <span class="spant" tabindex="0" >$'.$row_pro_serch['p_pric'].'</span>
                                            
                                            <a class="ashob" href="show2.php?id='.$row_pro_serch['p_id'].'"> <input class="shob" type="submit" name="order" value="شراء الأن" placeholder="شراء"></a>
                                        
                                            <a class="ashob2" href="show.php?add_cart='.$row_pro_serch['p_id'].'"> <i class="order fab fa-shopify"></i></a>

                                                  <br/>
                                                  <a class="mzeda" href="show4.php?more='.$row_pro_serch['p_id'].'"><h2 class="mzed m2">تفاصيل المنتج</h2></a>

                                               <div class="mmzz">
                                                   <p>'.$row_pro_serch['p_disc'].'><i class="fa fa-check"></i>
                                                   </p>
                                 
                                                   <i class="mzed2  fa fa-chevron-up"></i>
                                               </div>
                                     </div> 
                                     ';
                             }
                    }
                                    else{
                                        echo '<div class="not">لا يوجد هذا المنتج نسعى لأضافة ! </div>';

                                            }
     }
}
















function get_cat33(){
    global $con;
    if(!isset($_GET['cat'])){
        $get_cat2 ="select * from myitm4";
        $run_pro = mysqli_query($con , $get_cat2);
           while ($row_pro = mysqli_fetch_array($run_pro)){
    
                         echo '
                                            
                         
                                        
                         <div class="swiper-slide">  
                            <h1>'.$row_pro['p_dis'].' خصم</h1>
                              <div class="divimg"> 
                                   <img src="imgee/'.$row_pro['p_img'].'" alt="">
                               </div>
                           <br/>
                           <a class="ashob" href="show2.php?id='.$row_pro['p_id'].'"> <input class="shobb" type="submit" name="order" value="شراء " placeholder="شراء"></a>

                         </div>   
                                             
                         
                         ';
    
                         
             }
    }
}











function totel(){
    if(isset($_GET['add_cart'])){
       global $con;
       $ip= getIp();
       $get_totel= "select * from card where ip_add = '$ip'";
       $run_totel =mysqli_query($con ,$get_totel);
       $totel_itm=mysqli_num_rows($run_totel );

    }
    else{
        global $con;
        $ip= getIp();
        $get_totel= "select * from card where ip_add= '$ip'";
        $run_totel =mysqli_query($con ,$get_totel);
        $totel_itm=mysqli_num_rows($run_totel);
    }
    echo 
              $totel_itm
    ;
}



































function totel_pric(){
    global $con;
    $ip =getIp();
    $total=0;
    $t_pric="select * from card where ip_add ='$ip'";
    $run_pric=mysqli_query($con ,$t_pric);
    while($row_t_pric=mysqli_fetch_array($run_pric)){
         $pro_id=$row_t_pric['p_id'];
         $pric_pro="select * from myitm3 where p_id ='$pro_id'";
         $run_pric_pro=mysqli_query($con ,$pric_pro);
         while($row_pric_pro=mysqli_fetch_array($run_pric_pro)){
             $pro_price=array($row_pric_pro['p_pric']);
             $values=array_sum($pro_price);
              $total += $values;
         }
    }
    echo $total;
}



function totel_pric2(){
    global $con;
    $ip =getIp();
    $total=0;
    $t_pric="select * from card where ip_add ='$ip'";
    $run_pric=mysqli_query($con ,$t_pric);
    while($row_t_pric=mysqli_fetch_array($run_pric)){
         $pro_id=$row_t_pric['p_id'];
         $pric_pro="select * from myitm3 where p_id ='$pro_id'";
         $run_pric_pro=mysqli_query($con ,$pric_pro);
         while($row_pric_pro=mysqli_fetch_array($run_pric_pro)){
             echo'
                                         <div class="imglist p1">
                                                    <div class="delet-home">
                                                          <a href="show5.php?delet='.$row_pric_pro['p_id'].'"><button type="botton" class="del" name="del">X</button></a>
                                                    </div>
                                                         <h1 class="title">'.$row_pric_pro['p_titele'].'</h1>
                                                       
                                                         <br/>
                                                         <img src="imgee/'.$row_pric_pro['p_img'].'" alt="">
                                                         <br/>
                                                        
                                                        
                                                        <span class="spant" tabindex="0" >$'.$row_pric_pro['p_pric'].'</span>
                                                    
                                                       <input class="adedd" type="number" name="aded" value="العدد" placeholder="العدد"></a>
                                                       <input class="adedd" type="submit" name="inter"  placeholder="العدد"></a>
                                                        <br/>
                                                        <a class="ashob" href="show2.php?id='.$row_pric_pro['p_id'].'"> <input class="shobb" type="submit" name="order" value="مشاهدة المزيد" placeholder="شراء"></a>
                             
                                             </div> 
              ';
             

         }

    }
    
}


 ob_start();
function delet(){
    global $con;
   
    if(isset($_GET['delet'])){

        $catr=$_GET['delet'];
        $sql = "delete from card where p_id='$catr'";
          $run_del=mysqli_query($con, $sql);

          if(isset($run_del)){
  
            echo '<meta http-equiv="refresh" content="0.1; url=\'show5.php\'"/>';
              
          }
       
    }

       
}

    
                              

ob_end_flush(); 


function aded(){
    global $con;
    if(isset($_GET['inter'])){
        $qty=$_GET['aded'];
        $update="update card set qty='$qty'";
        $run_up=mysqli_query($con, $update);
        
        if(isset($_GET['adedd'])){
  
            echo '<meta http-equiv="refresh" content="0.1; url=\'show5.php\'"/>';
              
          }
    }
}







function get_pro_serch2(){
    $con2 = mysqli_connect("localhost", "root", "", "test");

    if(isset($_GET['interserchh'])){
          $serr =$_GET['input-serchh'];

          $get_pro_serch ="select * from myitm3 where p_kay like '%$serr%'";
          $run_pro_serch = mysqli_query($con2 , $get_pro_serch);
                if(mysqli_num_rows($run_pro_serch) > 0){
            
                         while ($row_pro_serch = mysqli_fetch_array($run_pro_serch)){
                                     echo '
                                                                 
                                                                           
                                                                   
                                     <div class="imglist p1">
                                           <h1 class="title">'.$row_pro_serch['p_titele'].'</h1>
                                           <br/>
                                           <input class="shobb2" id="shobb" type="submit" name="order" value=" صورة المنتج" placeholder="اظهار  صورة المنتج">


                                           <div class="divimg1">
                                              <img src="imgee/'.$row_pro_serch['p_img'].'" alt="">
                                           </div>
                                           

                                           <br/>
                                            <span class="spant" tabindex="0" >$سعر البيع .....'.$row_pro_serch['p_pric'].'</span>
                                            <span class="spant" tabindex="0" > $سعر الشراء .....'.$row_pro_serch['p_pric2'].'</span>
                                            
                                            <a class="ashob" href="show2.php?id='.$row_pro_serch['p_id'].'"><h1>العدد '.$row_pro_serch['p_class'].'</h1></a>
                                        
                                            <a class="ashob2" href="show.php?add_cart='.$row_pro_serch['p_id'].'"> <i class="order fab fa-shopify"></i></a>

                                                  <br/>
                                                  <h2 class="mzed m2">تفاصيل المنتج</h2>
                                                  <div class="mmzz">
                                                      <p>'.$row_pro_serch['p_disc'].'
                                                      </p>
                                                      <a class="ashob" href="alturk3.php?idd='.$row_pro_serch['p_id'].'"> <input class="shob" type="submit" name="order" value="شراء الأن" placeholder="شراء"></a>

                                                   </div>

                                     </div> 
                                     
                                     ';
                             }
                    }
                                    else{
                                        echo '<div class="not">لا يوجد هذا المنتج نسعى لأضافة ! </div>';

                                            }
     }
}



?>