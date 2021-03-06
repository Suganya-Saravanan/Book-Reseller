<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Book Reseller</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="style.css" rel="stylesheet">

  </head>
<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <!--<a href="#intro"  class="scrollto"><img src="img/logo.png" alt="" title=""></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#speakers">Books For Sale</a></li>
          <li><a href="#login">Login</a></li>
          <li><a href="#signup">SignUp</a></li>
          <li><a href="#contact">Comments</a>
        </ul>
      </nav>
    </div>
  </header>

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0"><span>Books Reseller</span></h1>
     <a href="#about" class="about-btn scrollto">About The Books Reseller</a>
    </div>
  </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>About The Books Reseller</h2>
            <p>Books reseller application is where the used books can be reselled.It has only communication between the customer and buyer.Customer have to upload a book picture with valuable price and author name.</p>
          </div>
          <div class="col-lg-3">
            <h3>CUSTOMER</h3>
            <p>Customer has to upload a book with a picture</p>
          </div>
          <div class="col-lg-3">
            <h3>BUYER</h3>
            <p>Buyer has to give request to the customer</p>
          </div>
        </div>
      </div>
    </section>

    <!--==========================
      Gallery Section
    ============================-->
    <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Books Out For Sale</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/books/im1.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3>Database management system</h3>
                <p>Fundamentals of database management system</p>
                 </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/books/im2.jpg" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3>Novels</h3>
                <p>Novelss</p>
               
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/books/im3.jpg" alt="Speaker 3" class="img-fluid">
              <div class="details">
                <h3>Cole Emmerich</h3>
                <p>Fugiat laborum et</p>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/books/im4.jpg" alt="Speaker 3" class="img-fluid">
              <div class="details">
                <h3>Cole Emmerich</h3>
                <p>Fugiat laborum et</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/books/im5.jpg" alt="Speaker 5" class="img-fluid">
              <div class="details">
                <h3>Alejandrin Littel</h3>
                <p>Qui molestiae natus</p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/books/im6.jpg" alt="Speaker 3" class="img-fluid">
              <div class="details">
                <h3>Cole Emmerich</h3>
                <p>Fugiat laborum et</p>
              </div>
            </div>
          </div>
          
           </div>
      </div>
<?php
 $Con = mysqli_connect("localhost","root","");
          mysqli_select_db($Con,"book reseller");
          $getImage =mysqli_query($Con, "SELECT Image FROM post");
          $path=mysqli_fetch_assoc($getImage);
          ?>
          <img src="<?php echo 'uploads/'.path['Image'];?>"/>
    </section>

    <!--==========================
      Login Section
    ============================-->
    <section id="login" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header"><br>
          <h2>Login</h2>
        </div>
          <form class="row login_form" action="Acc.php" method="post" id="contactForm" >
          <div class="col-md-12 form-group">
            <h4>Email</h4>
			<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
          </div>
          <div class="col-md-12 form-group">
                  <h4>Password</h4>

            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div>
           <div class="col-md-12 form-group">
            <button type="submit" value="submit"  class="btn submit_btn">Login</button>             
            
          </div>
          
        </form>
      
    </div>
   
    </section>
   

    <!--==========================
      SignUp Section
    ============================-->
    <section id="signup" class="wow fadeInUp">

      <div class="container ">

        <div class="section-header"><br>
          <h2>Sign UP</h2>
        </div>
  
       <!--<span> <h4>Create an Account</h4></span>-->
        <form class="row login_form" action="" method="post" id="contactForm" name="form" >
          <div class="col-md-12 form-group">
		   <h4>Name</h4>
			<input type="name" class="form-control" id="name" name="name" placeholder="Enter Name" pattern="[A-Za-z]{,}" required>
          </div>
          
		  <div class="col-md-12 form-group">
		  <h4>Contact Number</h4>
			<input type="phone" class="form-control" id="Contact" name="Contt" placeholder="Enter Contact Number" pattern="[7-9]{1}[0-9]{9}" required>
          </div>
		  <div class="col-md-12 form-group">
          <h4>Email</h4>
		
			<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
          </div>
		  
		  
          <div class="col-md-12 form-group">
		  <h4>Password</h4>
            <input type="password" title="Password must contains atleast 6 characters including upper case lower case and numbers" class="form-control" id="password" name="password" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" 
            onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : '');
            if(this.checkValidity()) form.pass.pattern=RegExp.escape(this.value);"
            required>
          </div>
		  
          <div class="col-md-12 form-group">
		  <h4>Confirm password</h4>
            <input type="password" title="Enter the same password as above" class="form-control" id="password" name="pass" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" 
             onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : '');"
             required>
          </div>

          <div class="col-md-12 form-group">
            <button type="submit" value="submit" name="submit" class="btn submit_btn">Sign up</button>&nbsp;&nbsp;&nbsp;
            
          </div>
        </form>
          </div>
          <?php
          $Con = mysqli_connect("localhost","root","");
          mysqli_select_db($Con,"book reseller");
          $NameP=$EmailP='';
          $ContactP=$PwdP='';

          if (isset($_POST["submit"])) {
            $NameP = $_POST['name'];
            $ContactP=$_POST['Contt'];
            $EmailP=$_POST['email'];
            $PwdP = $_POST['password'];
            $PwdP1=$_POST['pass'];
            $check="SELECT Email from `user` where  `Email`='$EmailP' ";
            $selection = mysqli_query( $Con, $check );
           if(mysqli_num_rows($selection)>=1)
           
           {?>
            <script>
                alert( "Email Id already exist!");
                </script>      <?php     }
           else
            {
   
            $sql = "INSERT INTO `user`(`Name`,`Email`,`Contact`,`Pwd`) VALUES ('$NameP','$EmailP','$ContactP','$PwdP') ";
            $result = mysqli_query($Con, $sql);
            if($result){?>
              <script>
                alert("Thanks for registering");
              </script>
              <?php }

           else{?>
            <script>
                   alert( "Registration Failed");
                 </script>

                 <?php
                 }
              }
            }
   mysqli_close($Con);
        ?>
  </section>
 
<!--==========================
      Contact Section
    ============================-->
    
   <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Comment Us</h2>
          
        </div>
 <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="emaill" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button name="sub" type="submit">Send Message</button></div>
          </form>
        </div>
        
      </div>
    </section><!-- #contact -->

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Priyanga S  &  Suganya S<br>
              Dr Mahalingam College of engg & tech<br>
              Pollachi<br>
              <strong>Website : </strong> mcet.in<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

      <div class="credits">
        Designed by Priyanga S  Suganya S
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>

</html>
