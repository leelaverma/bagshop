<?php
include "header.php";
include "../admin/connection.php";
?>
<html>
<head>
        <title>classy carry</title>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/bootstrap-grid.min.css" rel="stylesheet"/>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link href="index.css"rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        
    </br>
 
    <!-- <div class="container fluid"></br> -->
 <div class="row">
</br>
</br><div class="col-md-12">
            <h5 class="hd">Home/Contact us</h5>
        </div>
    </div></br>
    <div class="row">
        <div class="col-md-9">
            <h5 class="head2">CONTACT US</h5>
        </div>
        <div class="col-md-3">
            <h5 class="head2">COLLECTIONS</h5>
        </div>
    </div></br>

    <div class="row">
        <div class="col-md-9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.817035531949!2d74.95375757535183!3d30.2137690748387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391732a37a147d93%3A0xef480ed6ce926c!2sAjit%20Rd%2C%20Bathinda%2C%20Punjab%20151001!5e0!3m2!1sen!2sin!4v1720419638838!5m2!1sen!2sin" width="1115" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-3">
            <ul class="navbar-nav">
                        <li class="text">Baguettes(8)</li></br>
                        <li class="text">Beads(8)</li></br>
                        <li class="text">Bowling(18)</li></br>
                        <li class="text">Clutches(8)</li></br>
                        <li class="text">Evening(8)</li></br>
                        <li class="text">Fabric(8)</li></br>
            </ul>
        </div>
    </div></br><br>


    
    <?php
     if(isset($_POST['sendbtn']))
     {
        $name=mysqli_real_escape_string($con,$_POST['name']);
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $phonenumber=mysqli_real_escape_string($con,$_POST['phonenumber']);
        $message=mysqli_real_escape_string($con,$_POST['message']);
        $query="insert into contact(name,email,phonenumber,message) values('$name','$email','$phonenumber','$message')";
        if(mysqli_query($con,$query))
        {
            echo"<script>alert('your msg is sent')</script>";
        }
        else
        {
            echo mysqli_error($con);

        }


     }
    ?>

    <div class="row">
        <div class="col-md-7">
            <form action="#" method="post"> 
                
                <input type="text"placeholder=" enter your name"class="form-control" name="name"/></br>
               
                <input type="e-mail"placeholder=" enter your e-mail"class="form-control" name="email"/></br>
                
                <input type="number"placeholder=" enter your phone number"class="form-control" name="phonenumber"/></br>
               
                <textarea type="text" placeholder=" enter your message" class="form-control" row="7" name="message"></textarea></br>
                <button class="btn border-dark" name="sendbtn">submit</button>
        </div>
            </form>
           <div class="col-md-2"></div>
        
        <div class="col-md-3">
            <h5 class="head2">PRODUCT TYPES</h5>
            <ul class="navbar-nav">
                        <li class="text">Shell shape</li></br> 
                        <li class="text">backpack</li></br> 
                        <li class="text">big</li></br> 
                        <li class="text">Small</li></br> 
                        <li class="text">Suitcase</li> 
                    </ul></br></br>
                    <h5 class="head2">BEST SELLERS</h5></br>
                    <img src="img/an_exquisite_beaded_evening_bag_vintage-inspired_cluth_1_medium.png" class="imagelogo9"/></br></br>
                    <h5 class="text1">AN EXQUISITE BEADED EVENING BAG</h5>
                    <h5>₹20,000.00</h5>
                </br></br>
                <img src="img/artisanstreets_carpet_bag_1_medium.png" class="imagelogo9"/></br></br>
                <h5 class="text1">ARTISANSTREETS CARPET BAG</h5>
                <h5>₹35,000.00/h5>
                </br></br>
                <img src="img/artisanstreets_wildlife_tapestry_carpet_bag_1_medium copy.png" class="imagelogo9"/></br></br>
                <h5 class="text1">ARTISANSTREETS CARPET BAG</h5>
                <h5>₹9,000.00</h5>
        </div>
    </div></br>
    
<hr></hr>
</br>
  <?php
include "footer.php";
?>
</body>
<html>
