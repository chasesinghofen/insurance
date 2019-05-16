<?php



if ($_POST["submit"]) {



      

     if (!$_POST['name']) {



       $error="<br />Please enter your name";



     }

      

     if (!$_POST['email']) {



       $error.="<br />Please enter your email address";



     }

     

      

      if (!$_POST['phone']) {

     

      $error.="<br /> Please enter your phone number";

     

     }



      if (!$_POST['message']) {



       $error.="<br />Please enter a message";



     }

      

     if ($_POST['email']!="" AND !filter_var($_POST['email'],

FILTER_VALIDATE_EMAIL)) {

      

     $error.="<br />Please enter a valid email address";



     }

      

     if ($error) {



 $result='<div class="alert alert-danger"><strong>There were error(s)

in your form:</strong>'.$error.'</div>';



     } else {



if (mail("info@youremail.com", "Contact Message from Insurance Broker Website", 
  /* ---- Email where you want to recieve the contact messages ---- */
 

"Name: ".$_POST['name']."

Phone: ".$_POST['phone']." 

Email: ".$_POST['email']."

Message: ".$_POST['message'])) {

$result='<div class="alert alert-success"> <strong> Thank

you!</strong> We\'ll get back to you shortly.</div>';

} else {

$result='<div class="alert alert-danger">Sorry, there was

an error sending your message. Please try again later.</div>';

}

}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1" name="viewport">
 
  <meta content="" name="description">
  <!-- Meta Description -->

  <title>Contact Us</title>

    <!-- CSS Stylesheets -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/contact-page-styling.css" />
  <link rel="stylesheet" type="text/css" href="css/navbar.css" />

  <!--Font Styles -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

  <!--Favicon -->
  <link href="images/insurance-broker-favicon.jpg" rel="icon">

</head>

<body data-spy="scroll" data-target=".navbar-collapse">

  <div class="container-fluid" id="banner">

    <div class="top-banner">

    <div class="contacting-number">

          <p align="right" class="contactnumber">202-555-0122</p>

          <p align="right" class="top-quote"><a href="https://insurancebrokerwebsite.com/get-a-free-quote.php">GET A FREE QUOTE</a></p>  

      </div><!--contacting-number-->


      <div class="row" id="logo-top">

        <div align="center" class="col-md-6 col-md-offset-3">

          <a href="https://insurancebrokerwebsite.com">

            <img alt="insurance-broker-logo" class="img-responsive logo" src="images/insurance-broker-logo.png"></a>
              
              <p align="center" class="tagline">You Are Not Just A Number...</p>

        </div><!--end of col-md-6-->

      </div><!--end of logo-top-->

    </div><!--top-banner-->

  </div><!--end of banner-->

  <nav class="navbar navbar-default navbar-static-top" id="topnavbar" role="navigation">

    <div class="navbar-header">

      <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">

        <span class="sr-only">Toggle navigation</span> 
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
           <span class="icon-bar"></span>

      </button>

    </div>

    <div align="center" class="collapse navbar-collapse">

          <ul class="nav navbar-nav">

              <li><a href="https://insurancebrokerwebsite.com/car-insurance.php">CAR INSURANCE</a></li>

              <li><a href="https://insurancebrokerwebsite.com/home-insurance.php">HOME INSURANCE</a></li>

              <li><a href="https://insurancebrokerwebsite.com/combined-insurance.php">COMBINED INSURANCE</a></li>

              <li><a href="https://insurancebrokerwebsite.com/blog.html">BLOG</a></li>

              <li><a href="https://insurancebrokerwebsite.com/contact.php">CONTACT US</a></li>

              <li><a class="highlighted" href="https://insurancebrokerwebsite.com/get-a-free-broker.php"><span style="color:#46556D">GET A FREE BROKER</span></a></li>

      </ul>

    </div>

  </nav><!--- /.nav-->


  <div class="contact-banner">

    <div class="row">

      <div class="col-md-4 col-md-offset-4">

          <h3 align="center">CONTACT US</h3>

                <br /><br /><br /><br /><br /><br /><br />

              <p align="center" id="result"> <?php echo $result; ?></p>

      </div><!--- /.col-md-->
  
    </div><!--- /.row-->

  </div><!--- /.contact-banner-->


<div class="contactusform">

  <div class="row">

    <div class="col-md-1"></div>

        <div class="col-md-5 contact-details"><br />

            <div class="contact-info">

                <p class="contact-heading">CONTACT</p><br />

                  <p class="info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut hendrerit nibh. Fusce eget ex eleifend, mattis nulla eu, gravida mi. Suspendisse convallis vel libero eget feugiat.</p><br /><br />

                  <p class="info">

                  <strong><u>OFFICE TEL</u>:</strong> +1-202-555-0168<br /><br />

                  <strong><u>EMAIL</u>:</strong> info@insurancebroker.com</p> <br /><br /><br /><hr>


            </div><!--- /.contact-info-->

        </div><!--- /.contact-details-->


        <div class="col-md-6 emailForm" align="center">


                <h4 align="center"> If you have any questions, please fill in the form and we will get back to you asap.</h4>


          <form method="post">

                <div class="form-group">

                    <label for="name">Name:</label>

                        <input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo $_POST['name']; ?>" />

                </div>

                <div class="form-group">

                    <label for="email">Email:</label>

                        <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email']; ?>" />

                </div>

                <div class="form-group">

                  <label for="phone">Contact Number:</label>

                      <input type="tel" name="phone" class="form-control" placeholder="Your Phone" value="<?php echo $_POST['phone']; ?>" />

                </div>

                <div class="form-group">

                    <label for="message">Message:</label>

                        <textarea class="form-control" id="message" name="message"><?php echo $_POST['message']; ?> </textarea>

                </div><br /><br />


                <p align="center" ><input type="submit" name="submit" class="btn btn-success btn-lg" value="Send Message" /></p><br />


          </form>

        </div><!--- /.emailForm-->

  </div><!--- /.row-->

</div><!--- /.contactusform-->


  <div align="center" id="footer">

    <a href="https://insurancebrokerwebsite.com/about.html">ABOUT US</a>

    <a href="https://insurancebrokerwebsite.com/insurance-faq.html">FAQ</a> 

    <a href="https://insurancebrokerwebsite.com/insurance-resources.html">RESOURCES</a> 

    <a href="https://insurancebrokerwebsite.com/car-insurance.php">CAR INSURANCE</a> 

    <a href="https://insurancebrokerwebsite.com/home-insurance.php">HOME INSURANCE</a> 

    <a href="https://insurancebrokerwebsite.com/combined-insurance.php">COMBINED INSURANCE</a> 

    <a href="https://insurancebrokerwebsite.com/contact.php" rel="nofollow">CONTACT US</a>

  </div><!--end of footer-->


        <p align="center" class="trading"><br>Trading Hours: Mon-Thu (08:00-16:30), Fridays (08:00-16:00) &nbsp;|&nbsp; After Hours: +1-202-555-0168</p>


        <div align="center" class="social-links">

            <!--LINKED IN SOCIAL ICON-->
          <a href="https://www.linkedin.com/BROKERS-LINKED-IN-ACCOUNT/"><svg height="35" viewbox="0 0 24 24" width="35">
          <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" fill="#615F61"></path></svg></a> 

            <!--FACEBOOK SOCIAL ICON-->
          <a href="https://www.facebook.com/BROKERS-FACEBOOK-ACCOUNT/" target="_blank"><svg style="width:35px; height:35px" viewbox="0 0 24 24"><path d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z" fill="#615F61"></path></svg></a>

      </div><!--end social-link-->


  <div align="center" class="policy-links">
    
    <a href="https://insurancebrokerwebsite.com/privacy-policy.html" rel="nofollow">Privacy Policy</a>

    <a href="https://insurancebrokerwebsite.com/terms-and-conditions.html" rel="nofollow">Terms &amp; Conditions</a>

  </div><!--end policy links-->

  <p align="center" class="text-muted copyright">&copy; InsuranceBroker.com 2017</p>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
  </script> 
  <!-- Include all compiled plugins (below), or include individual files as needed -->

   <script src="js/bootstrap.min.js">
  </script> 
  
  
   <!--FIXED NAVBAR SCRIPT-->
  <script>
  $('#topnavbar').affix({
     offset: {
         top: $('#banner').height()
     }   
  }); 
  </script>


</body>

</html>