<!DOCTYPE html>


<html>
    <head>
        
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width">
         <meta name="description" contend="Affordable and professional web design">
         <meta name="keywords" contend="web design, affordable wed design, professional web design">
         <meta name="author" contend="Brad Traversy">
        <title>Register | Welcome</title>
        <link rel="stylesheet" href="./css/style.css">
        
        <link rel="stylesheet" href="<?php echo base_url('assets/css/boostrap.min.css'); ?>"/>
        <script src="<?php echo base_url('assets/js/jquery-3.1.0.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/boostrap.js'); ?>"></script>
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/create.css')?>">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body >
    <!--style="background-image: url('?php echo base_url('assets/image/water.jpg')?>')"-->

        <header>
            <div class="container">
              <div id="branding">
              <!--  <h1><span class="highlight">Sign up</span> </h1> 
              </div>-->
              <!--<nav>
                  <ul>
                      <li class="current ,highlight"><a href="addGround.html">Member sign up</a></li>
                      <li><a href="updateGround.php">Update details</a></li>
                      <li><a href="deleteGround.php">Delete member</a></li>
                  </ul>
              </nav>-->
            </div>       
         </header>

         <section id="showcase">
             <div class="container">
                 <h1 align="center">Online Ground Booking</h1>
                 <!--<p>Enter your ground name , ground location, ground type, price for one day</p>-->
             </div>
         </section>

         <section id="newsletter">
             <div class="container">
                 <h2 align="center">Enter Your details For Register</h2>
                <!-- <form>
                     <input type="email" placeholder="Enter Email...">
                     <button type="submit" class="button_1">Subcribe</button>
                 </form>-->
             </div>
         </section>

         <section id="boxes" style="padding-left:25%;">
             <div class="container"> 
                    <?php echo form_open('create/savedata');?>
                            <div class="box">
                                
                                <h3> Name</h3>
                                
                                   <input type="text" name="name" placeholder="Enter Name">
                                   
                               
                            </div>
                            <div class="box">
                                   
                                   <h3>NIC Number</h3>
                                   
                                       <input type="text" name="nic" placeholder="Enter NIC">
                                       
                                   
                               </div>
                               <div class="box">
                                       
                                       <h3>Address </h3>
                                       
                                           <input type="text" name="address" placeholder="Enter address">
                                           
                                       
                                   </div>
           
                                   <div class="box">
                                       
                                       <h3>Phone number</h3>
                                       
                                           <input type="text" name="phone" placeholder="Enter No">
                                           
                                       
                                   </div> 

                                   <div class="box">
                                       
                                       <h3>Password</h3>
                                       
                                           <input type="password" name="password" placeholder="Enter password">
                                           
                                       
                                   </div> 
                                   
                                   <button type="submit" name="add_details" class="button_2">Add Details</button>
                           <?php echo form_close();?>  

                          <br> <?php echo anchor('display/displaydata','display',['class'=>'btn btn-info']) ?>
             </div>
         </section>

         <footer>
             <h1><center> Online Ground Booking &copy; 2019</center></h1>
         </footer>
    </body>
</html>  