<?php
$conn=mysqli_connect('localhost','root','','contact_db') or die('connection failed');
if(isset($_POST['submit'])){
   $name=mysqli_real_escape_string($conn, $_POST['name']);
   $email=mysqli_real_escape_string($conn, $_POST['email']);
   $number= $_POST['number'];
   $date= $_POST['date'];

   $insert=mysqli_query($conn,"INSERT INTO `contact`(name,email,number,appointement_date) VALUES('$name','$email','$number','$date')")or die('query failed');
   if($insert){
    $message[]='appointement made successfully';
   }
   else{
    $message[]='appointement failes';
   }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smile Dental</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="Usmile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    <!--Header-->    
    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="#home" class="logo"><span>Smile</span>Dental</a>
                <nav class="nav">
                    <div class="nav-bar">                    
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#services">Services</a>
                    <a href="#reviews">Reviews</a>
                    <a href="#contact">Contact</a>
                    </div>

                    <div class="btnn">
                        <button class="link-btn"><a href="#contact">Make Appointement</a></button>
                    </div>
                    <div id="menu-btn" class="fas fa-bars"></div>
                </nav>
                
            </div>
        </div>

    </header>
    <!--Home-->
    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>Creating Bright Smiles and Happy Patients</h3>
                    <p>Unbeatable Quality and Affordability: Your Top Choice for Exceptional Dental Care at the Best Prices.</p>
                    <div class="Appointement-class"><a href="#contact" class="link-btn btnn">Make Appointement</a></div>
                    
                </div>
            </div>

        </div>
    </section>
    <!--About-->
    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="image col-md-6">
                    <img src="images/about-img1.png" class="w-100 mb-5 mb-md-0">
                </div>
                <div class="content col-md-6">
                    <span>About Us</span>
                    <h3>True Health For your Family</h3>
                    <p>Trust in our commitment to excellence as we strive to enhance your 
                        satisfaction and deliver the highest standard of dental care
                        With a focus on aesthetics, functionality, and patient comfort, our goal is to create 
                        a welcoming and soothing environment during your dental visits.</p>
                    <a href="#contact" class="link-btn">Make Appointement</a>    
                </div>
            </div>
        </div>
    </section>
    <!--Services-->
    <section class="services" id="services">
        <h1 class="heading">Our Services</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/icon-1.svg" alt="">
                <h3>Alignement Specialist</h3>
                <p>
Our Alignment Specialist service is dedicated to helping you achieve a perfectly aligned and harmonious smile.  </p>     
            </div>
            <div class="box">
                <img src="images/icon-2.svg" alt="">
                <h3>Cosmetic Dental</h3>
                <p>Our Cosmetic Dental service is designed to enhance the beauty and aesthetics of your smile. 
                     </p>     
            </div>
            <div class="box">
                <img src="images/icon-3.svg" alt="">
                <h3>Oral Hygiene Experts</h3>
                <p>Our Oral Hygiene Experts provide comprehensive care to ensure your oral health is in optimal condition</p>     
            </div>
            <div class="box">
                <img src="images/icon-4.svg" alt="">
                <h3>Root Canal Specialist</h3>
                <p>Our Root Canal Specialist service is dedicated to saving and restoring your natural teeth. Led by our experienced endodontists</p>     
            </div>
            <div class="box">
                <img src="images/icon-5.svg" alt="">
                <h3>Live Dental Advisory</h3>
                <p>Our Live Dental Advisory service offers real-time professional guidance and support from our expert dentists.</p>     
            </div>
            <div class="box">
                <img src="images/icon-6.svg" alt="">
                <h3>Cavity Inspection</h3>
                <p>Our Cavity Inspection service provides thorough to detect and assess cavities in your teeth.</p>     
            </div>
        </div>
    </section>
    <section class="process">
        <h1 class="heading">Work Process</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/process1.png" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p>From teeth whitening and veneers to smile makeovers, our skilled cosmetic dentists utilize the latest techniques and materials to create stunning results. </p>
            </div>
            <div class="box">
                <img src="images/process3.png" alt="">
                <h3>Dental implants</h3>
                <p>Our Dental Implants service offers a permanent solution for missing teeth, restoring both function and aesthetics to your smile</p>
            </div>
            <div class="box">
                <img src="images/process2.png" alt="">
                <h3>Pediatric Dentistry</h3>
                <p>Our Pediatric Dentistry service is dedicated to providing specialized dental care for children in a friendly and welcoming environment. </p>
            </div>
        </div>
    </section>
    <!--Reviews-->
    <section class="reviews" id="reviews">
        <h1 class="heading">Satisfied Clients</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/pic-1.png" alt="">
                <p>"My implant feels and looks completely natural, and I couldn't be happier with the results. Highly recommended!"</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3> - Liam G</h3>
                <span>Satisfied Client</span>
            </div>
            <div class="box">
                <img src="images/pic-2.png" alt="">
                <p>"The entire process was seamless, and the team made me feel comfortable throughout.
                Thank you to everyone at the clinic!"</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>- Lisa S.</h3>
                <span>Satisfied Client</span>
            </div>
            <div class="box">
                <img src="images/pic-3.png" alt="">
                <p>"I can't express how grateful I am to Smile Dental for the outstanding dental implant treatment I received. 
                I highly recommend their services!"
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>- John M</h3>
                <span>Satisfied Client</span>
            </div>
        </div>
    </section>
    <!--Contact-->
    <section class="contact" id="contact">
        <h1 class="heading">Make Appointement</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <?php
            if(isset($message)){
                foreach($message as $message){
                    echo '<p class="message">' .$message. '</p>';
                }
            }
            ?>
            
            <span>Your Name:</span>
            <input type="text" name='name' placeholder="Enter your name" class="box">
            <span>Your Email:</span>
            <input type="email" name='email' placeholder="Enter your email" class="box">
            <span>Your Number:</span>
            <input type="number" name='number' placeholder="Enter your number" class="box">
            <span>Appointement Date:</span>
            <input type="datetime-local" name='date' class="box">
            <input type="submit" value="Make Appointement" class="link-btn" name="submit">
        </form>
    </section>
    <!--footer-->
    <section class="footer">
        <div class="box-container container">
            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>Phone Number</h3>
                <p>+123-456-789</p>
                <p>+111-222-3333</p>
            </div>
            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Our Adress</h3>
                <p>Agdal Rabat,Morocco</p>
            </div>
            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>Openning Hours</h3>
                <p>7:00 to 16:00</p>
            </div>
            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>Email Adress</h3>
                <p>elouafifatima@gmail.com</p>
                <p>elouafifatima@etu.uae.ac.ma</p>
            </div>
        </div>
        <div class="credit">
            &copy; Copyright 2023 <a href="#home" class="foot">Smile Dental</a><br>
            by <span>Fatima Elouafi</span>

        </div>
    </section>






    <script src="USmile.js"></script>
</body>
</html>