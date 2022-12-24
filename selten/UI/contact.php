<?php 
$GLOBALS['contact'] = 'active';
include_once ('header.php');
?>
<body>

  <div class="cbanner">
    <h1 class="cheading"></h1>
  </div>
  <div class="container">
  <div class="row contactrow">
              <!-- <div class="col-md-12"> -->
<div class="col-md-4 contact-form">
  
  <h1 class="formhead">Get In Touch</h1>
  <div class="card about-card">
  <form class="cfeild" method = "POST">
  <div class="form-group mt-3">
   
    <input type="text" class="form-control cform" id="exampleInputEmail1" name = "fname" aria-describedby="emailHelp" placeholder="First Name" >
    
  </div>
  <div class="form-group mt-3">
 
    <input type="text" class="form-control cform" id="exampleInputEmail1" name = "lname" aria-describedby="emailHelp" placeholder="Last Name">
   
  </div>
  <div class="form-group mt-3">

    <input type="text" class="form-control cform" id="exampleInputPassword1" name = "email" placeholder="Enter The Email">
  </div>
  <div class="form-group mt-3">
   
   <input type="number" class="form-control cform" id="exampleInputEmail1" name = "phone_number" aria-describedby="emailHelp" placeholder="Phone Number" >
   
 </div>
  <div class="dropdown mt-3 cform">
 
   
  
  <select name="languages" class="c-dropdown">
        <option class="lfs" value="" >Looking For Services</option>
        <option class="ifs" value="crm_services">CRM Services</option>
        <option class="ifs" value="integration_services">Integration Services</option>
        <option class="ifs" value="digital_marketing">Digital Marketing</option>
        <option class="ifs" value="e_commerce">E-Commerce</option>
        <option class="ifs" value="mobile-app-develpment">Mobile App Development</option>
        <option class="ifs" value="website_design">Website Design & Development</option>
      </select>
</div>
  <div class="form-group mt-3">
  <textarea class="form-control cform" id="exampleFormControlTextarea1" name = "message" rows="3" placeholder="Message"></textarea>
    
  </div>
 
  
  <button type="submit" name = "submit" class="btn btn-primary mt-3">Submit</button>
</form>
</div>
</div>
<div class="col-md-8 coladdress">
<h1 class="formhead col2">Contact Us</h1>
  <div class="card about-card">
<div class="caddress ">
<ul class="list-unstyled text-decoration-none">
  <li class="clist"><a href="" class="text-decoration-none ccontact"><i class="fa-solid fa-location-dot mx-2"></i> Office<br>1/354-A, Second Floor, Ramasamy Building, Bharathinagar, Ramanathapuram - 623503</a> </li>
  
  <li class="clist"><a href="" class="text-decoration-none ccontact" ></a><i class="fa-solid fa-phone  mx-2"></i> Call Us <br>+91 9876543212</li>
  <li class="clist"><a href="" class="text-decoration-none ccontact"></a><i class="fa-solid fa-envelope  mx-2"></i>Mail Us<br> social.seltentechnologies@gmail.com</li>
  
</ul>
</div>
  </div>
</div>
</div>




              </div>
            </div>
  </div>
  <div >
<iframe class="cmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15718.965488904296!2d78.80747862797297!3d9.955463020779327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b005b259eac5305%3A0x7a97e8405ad15962!2sDevakottai%2C%20Tamil%20Nadu%20630302!5e0!3m2!1sen!2sin!4v1668607391671!5m2!1sen!2sin"style="border:0; height:300px; width" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
</div>

</body>
<?php 
include_once ('footer.php');
?>
<?php
//db insert query
 include_once('contact.php');
 include 'connect.php';
 if(isset($_POST['submit'])){
    $FirstName = $_POST['fname'];
    $LastName = $_POST['lname'];
    $Email = $_POST['email'];
    $PhoneNumber = $_POST['phone_number'];
    $LookingForServices = $_POST['languages'];
    $Message = $_POST['message'];


    $sql = "INSERT INTO `contact_form`(first_name,last_name,email,phone_number,looking_for_services,message)
            VALUES ('$FirstName','$LastName','$Email','$PhoneNumber','$LookingForServices','$Message')";
    $result = mysqli_query($connection,$sql);
    if($result){
       echo '<script> alert("data inserted in database sucessfully")</script>';
      }else {
       die(mysqli_error($connection,$result));
      }
 }
?>
</html>