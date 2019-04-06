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
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>
        <a href="#intro"  class="scrollto"><img src="img/logo.png" alt="" title=""></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="#">Home</a></li>
          <li><a href="#sell">Sell Book</a></li>
          <li><a href="indexx.php">Sign Out</a></li>
          
        </ul>
      </nav>
    </div>
  </header>

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0"><span>My Account</span></h1>
      <?php
        $EmailP = $_POST["email"];
        $PwdP = $_POST["password"];        
        $Con = mysqli_connect("localhost","root","");
        mysqli_select_db($Con,"book reseller");
        $select = "SELECT * from `user` where  `Email`='$EmailP' and `Pwd`='$PwdP' ";
        $sql = mysqli_query($Con,$select);
        while($row=mysqli_fetch_assoc($sql)){
      ?>
      <a href="#about" class="about-btn scrollto"><?php echo "".$row['Name'].""; ?></a>            
    </div>
  </section>        
  <!--===========================
        Account
    ===========================-->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="contact-address">
            <i class="ion-ios-location-outline"></i>
            <h3>Mail me at</h3>
            <h4 style="color:#f82249"><?php echo "".$row['Email'].""; ?></h4>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-phone">
            <i class="ion-ios-telephone-outline"></i>
            <h3>Phone Number</h3>
            <h4 style="color:#f82249"><?php echo "".$row['Contact'].""; ?></h4>
          </div>
        </div>            
      </div>
      <?php          
        } 
      ?>         
    </div>
  </section>
    <!--==========================
          Sell Section
      ==========================-->
  <section id="sell" class="wow fadeInUp">
    <div class="container ">
      <div class="section-header"><br>
        <h2>Sell My Book</h2>
      </div>
      <form class="row login_form" action="#" method="post" id="contactForm" >
        <div class="col-md-12 form-group">
          <h4>Category</h4>
          <select class="form-control"><option  name="c" selected>Novel</option><option>Competative Books</option><option>School Books</option><option>Story</option><option>Other</option></select>
        </div>
        
        <div class="col-md-12 form-group">
          <h4>Title</h4>
          <input type="name" class="form-control" id="name" name="title" placeholder="Book Title" pattern="[A-Za-z]{,}" required>
        </div>
        <div class="col-md-12 form-group">
          <h4>Author</h4>
          <input type="name" class="form-control" id="name" name="author" placeholder="Author Name" pattern="[A-Za-z]{,}" required>
        </div>
        <div class="col-md-12 form-group">
          <h4>Book Image(Upload from your PC)</h4>
          <input type="file" class="form-control" id="Contact" name="img" placeholder="Upload image" accept="image/*" required>
        </div>
        <div class="col-md-12 form-group">
          <h4>Price</h4>
          <input type="text" class="form-control" id="text" name="price" placeholder="Price in Rs" pattern="[0-9]{1,}">
        </div>
        <div class="col-md-12 form-group">
          <button type="submit" value="submit" name="submit" class="btn submit_btn">Post</button>&nbsp;&nbsp;&nbsp;       
        </div>
      </form>
    </div>
    <?php
      $Bt=$Ba=$Bi=$Bp=$Be='';
      if (isset($_POST["submit"])) {
        $Bt = $_POST['title'];
        $Ba=$_POST['author'];
        $Bi=$_POST['img'];
        $Be=$_POST['c'];
        $Bp = $_POST['price'];
        $sql = "INSERT INTO `post`(`Email_1`,`Title`,`Author`,`Image`,`Cost`) VALUES ('$Be','$Bt','$Ba','$Bi','$Bp') ";
        $result = mysqli_query($Con, $sql);
        if($result){
          echo "Thanks for Registering";
               }
        else{
          echo "Registration Failed";
        }   
      }   
      mysqli_close($Con);
    ?>
  </section>  
    <!--=====================
     JavaScript Libraries 
     =====================-->
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


