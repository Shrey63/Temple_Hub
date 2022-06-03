<script type="text/javascript" src="calculation.js">
</script>
<?php
  include('conn.php');
  
  ?>  




<!----register------>
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color:black;font-weight:900;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" id="exampleModalLabel1">REGISTER</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post" class="p-3">
                        <div class="form-group">
                            <label for="recipient-name" style="color:darkslategrey;font-size: 20px;font-weight:500" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name="Name" id="recipient-rname"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" style="color:darkslategrey;font-size: 20px;font-weight:500" class="col-form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Enter Email"  name="Email" id="recipient-email"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password1" style="color:darkslategrey;font-size: 20px;font-weight:500" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Enter Password " minlength="6" name="Password" id="password1"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password2" style="color:darkslategrey;font-size: 20px;font-weight:500" class="col-form-label">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Re-enter Password " minlength="6" name="Confirm_Password" id="password2"
                                required="">
                        </div>
                        <div class="sub-w3l">
                            <div class="sub-w3layouts_hub">
                                <input type="checkbox" id="brand2" value="" required>
                                <label for="brand2" class="mb-3 text-white">
                                    <span></span>I Accept to the Terms & Conditions</label>
                            </div>
                        </div>
                        <div class="right-w3l">
                            <input type="submit" name="register_button"  style="  background: rgb(242,159,3);font-size: 20px;font-weight:500" class="form-control bg-theme1" value="Register">
                            <!-- to do link it with login section id  -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!----register------>


    <!-- login -->
    
    <!-- login  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="color:black;font-weight:700;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" id="exampleModalLabel">LOGIN</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post" class="p-3">
                        <div class="form-group">
                            <label for="recipient-name" style="color:darkslategrey;font-size: 20px;font-weight:500" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder="Enter Username" name="Name" id="recipient-name"
                                required="true">
                        </div>
                        <div class="form-group">
                            <label for="password" style="color:darkslategrey;font-size: 20px;font-weight:500" class="col-form-label">Password</label>
                            <input type="password" class="form-control" minlength="6" placeholder="Enter Password"  name="Password" id="password"
                            required="">
                        </div>

                        
                            
                            
                            <label for="havan" style="color:darkslategrey;font-size: 20px;font-weight:500" class="col-form-label">Abhishek</label>
                            <div class=row>
                            
                            
                                <div class=col-lg-6>
                                    
                                    <input type="checkbox" id="havan1" value="Mahimna" name="hav[]" onclick="amt_cal()">
                                    <label for="brand1" class="text-white" >
                                    <span></span>Mahimna-₹501</label><br>
                                    <input type="checkbox" id="havan2" value="Dugdhabhishek" name="hav[]" onclick="amt_cal()">
                                    <label for="brand1" class="text-white" >
                                    <span></span>Dugdhabhishek-₹2100</label><br>
                                    <input type="checkbox" id="havan3" value="Rudra" name="hav[]" onclick="amt_cal()">
                                    <label for="brand1" class="text-white" >
                                    <span></span>Rudra-₹1100</label> <br>
                                  
                                </div>
                                <div class=col-lg-6> 

                                <input type="checkbox" id="havan4" value="Laghurudra" name="hav[]" onclick="amt_cal()">
                                    <label for="brand1" class="text-white" >
                                    <span></span>Laghurudra-₹11000</label><br>
                                    <input type="checkbox" id="havan5" value="Maharudra" name="hav[]" onclick="amt_cal()">
                                    <label for="brand1" class="text-white" >
                                    <span></span>Maharudra-₹51000</label><br>
                                    <input type="checkbox" id="havan6" value="Aatirudra" name="hav[]" onclick="amt_cal()">
                                    <label for="brand1" class="text-white" >
                                    <span></span>Aatirudra-₹100000</label> <br>
                                </div> 
                            </div> 

                            <!-- havan -->
                            <label for="additional" style="color:darkslategrey;font-size: 20px;font-weight:500" class="col-form-label">Samagri</label>
                            <div class=row>
                            
                            
                                <div class=col-lg-6>
                                    
                                    <input type="checkbox" id="extra1" value="108 Akhanda Akshada" name="lang[]" onclick="amt_cal()">
                                    <label for="brand1" class="text-white" >
                                    <span></span>108 Akshada-₹51</label><br>
                                    <input type="checkbox" id="extra2" value="11 Belfal" name="lang[]" onclick="amt_cal()">
                                    <label for="brand1" class="text-white" >
                                    <span></span>11 Belfal-₹101</label><br>
                                    <input type="checkbox" id="extra3" value="Sampurnpuja" name="lang[]" onclick="amt_cal()">
                                    <label for="brand1" class="text-white" >
                                    <span></span>Sampurnpuja-₹301</label> <br>
                                  
                                </div>
                                <div class=col-lg-6> 

                                <input type="checkbox" id="extra4" value="108 Belpatra" name="lang[]" onclick="amt_cal()">
                                    <label for="brand1" class="text-white" >
                                    <span></span>108 Belpatra-₹501</label><br>
                                    <input type="checkbox" id="extra5" value="1008 Belpatra" name="lang[]" onclick="amt_cal()">
                                    <label for="brand1" class="text-white" >
                                    <span></span>1008 Belpatra-₹1501</label><br>
                                    <input type="checkbox" id="extra6" value="1.25lakh Belpatra" name="lang[]" onclick="amt_cal()">
                                    <label for="brand1" class="text-white" >
                                    <span></span>1.25M Belpatra-₹7001 </label> <br>
                                </div> 
                            </div> 
                            <!-- extra -->
                            <label for="charity" style="color:darkslategrey;font-size: 20px;font-weight:500" class="col-form-label">Charity</label><br>
                            <!-- <input type="number" class="form-control" placeholder="Enter Amount" name="charity" id="charity"
                                ><br> -->
                                <div class="form-group">
                                <input type="text" id="charity" name="Charity" class="form-control"onchange="amt_cal()">
                                </div>

                                <!-- charity -->
                                <div class="form-group">
                                <label for="date" style="color:darkslategrey;font-size: 20px;font-weight:500" class="col-form-label">Date</label>
                                <input type="date" class="form-control" name="Date" required>
                                </div>
                                <div class="form-group">
                                <label for="price" style="color:darkslategrey;font-size: 20px;font-weight:500" class="col-form-label">Total Amount</label>
                                
                                    
                                <!-- <input input::-webkit-outer-spin-button, input::-webkit-inner-spin-button { -webkit-appearance: none; margin: 0; }type="number" 
                                class="form-control" placeholder="" name="price" id="price"
                                required=""> -->
                                <input type="text" id="price"class="form-control" name="Price">
</div> 
                                

                                
                                
                                <!-- total amt  -->

                        <div class="right-w3l">
                            <input type="submit" name="submit_button" style="  background: rgb(242,159,3);font-size: 20px;font-weight:500" class="form-control bg-theme1" value="PAY NOW">
                        </div>
                        <div class="row sub-w3l my-3">
                            <div class="col sub-w3layouts_hub">
                                <input type="checkbox" id="brand1" value=""required>
                                <label for="brand1" class="text-white" >
                                    <span></span>Remember me?</label>
                            </div>
                            <!-- <div class="col forgot-w3l text-sm-right">
                                <a href="#" class="text-white">Forgot Password?</a>
                            </div>-->
                        </div> 
                        <p class="text-center dont-do text-white">Don't have an account?
                            <a  data-toggle="modal" data-target="#exampleModal1"style="color:black; font-weight:500;" data-dismiss="modal" > 
                                 Register Now</a>

                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //login -->


    <!--registration check  -->
<?php
include('conn.php');
if(isset($_POST['register_button']))
{
    extract($_POST);
    //$lang=implode(',',$_POST['lang']);

    echo $asd="insert into registration_table(user_name,email_id,pass)
                 value('$Name','$Email','$Password')";
    $add=mysqli_query($connect,$asd)or die (mysqli_error($connect));
    if($asd)
    {
        echo "<script>;";
        echo "window.alert('data inserted sucessfully!!');";
        echo 'window.location.href="index.php";';
        echo "</script>;";
    }
    else
    {   echo "<script>;";
        echo "window.alert('error occured in insertion!!');";
        echo 'window.location.href="index.php";';
        echo "</script>;";
    }


}
?>



<!-- login check -->
 <?php
include('conn.php');
 if (isset($_POST['submit_button']))
 {
     $log=0;
     $log2=0;
     extract($_POST);
     $username=mysqli_real_escape_string($connect,$_POST['Name']);

     $password=mysqli_real_escape_string($connect,$_POST['Password']);
     echo $check="select * from registration_table where  user_name='$username' and pass='$password'";
    // shreya's logic
    echo $check2="select * from registration_table where  user_name='$username' or pass='$password'";
    $log2=mysqli_query($connect,$check2)
     or die(mysqli_error($connect));
    // shreya's logic


     $log=mysqli_query($connect,$check)
     or die(mysqli_error($connect));
     if(mysqli_num_rows($log)>0)
     {
         $fetch=mysqli_fetch_array($log);

         $_SESSION['username']=$fetch['user_name'];
         $_SESSION['password']=$fetch['pass'];

       
         extract($_POST);
         $h=implode(',',$_POST['hav']);
         $e=implode(',',$_POST['lang']);
         
     
         echo $ins="insert into donation_table(user_name,password,havan,samagri,charity,date,price)
                      value('$Name','$Password','$h','$e','$Charity','$Date','$Price')";
                     
         $add=mysqli_query($connect,$ins)or die (mysqli_error($connect));
     
         if($ins)
         {
             echo "<script>;";
             echo "window.alert('you are ready to pay!!');";
             echo 'window.location.href="pay.php";';
             echo "</script>;";
         }
        
     }
     else
     if(mysqli_num_rows($log2)>0)
     {
        echo"<script>;";
        echo "window.alert('your username or password is incorrect!!');";
        echo 'window.location.href="somnath.php";';
        echo"</script>;";
     }
     else
     {
         echo"<script>;";
         echo "window.alert('unregistered user!!');";
         echo 'window.location.href="somnath.php";';
         echo"</script>;";
     }
       
        

 }


?>
