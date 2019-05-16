<?php



if ($_POST["submit"]) {



      

      if (!$_POST['phone']) {

     

      $error.="<br /> Please enter your phone number";

     

     }



      

     if ($error) {



 $result='<div class="alert alert-danger"><strong>Please check your form and submit again.</strong>'.$error.'</div>';



     } else {



 if (mail("info@youremail.com", " Call back request for Insurance Broker", 
  /* ---- Email where you want to recieve the contact messages ---- */

 

"Phone: ".$_POST['phone'])) {

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

  <title>Insurance Broker</title>

      <!-- CSS Stylesheets -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/navbar.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/testimonials-styling.css" rel="stylesheet" type="text/css">

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


  <div id="display-banner">

    <div class="row">

      <div class="col-md-6 col-md-offset-3">

              <!--Form Success Message will display here-->
         <p align="center" id="result"><strong><?php echo $result; ?> </strong></p><br /><br /><br /><br />


      </div> <!--- /.col-md -->

    </div>  <!--- /.row -->

  </div><!--end display-banner-->


<div class="insurance-option">

    <div class="container">

      <div class="row">

        <div class="col-md-1"></div>

        <div align="center" class="col-md-4 col-sm-6">

          <img alt="already-insured" src="images/already-insured.png">

          <h2>Already Insured?</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dignissim porttitor lectus eu sagittis.</p><br><br>

              <a href="https://insurancebrokerwebsite.com/get-a-free-broker.php"><button class="btn btn-lg center-block" type="submit">Get a Free Broker<span aria-hidden="true" class="glyphicon glyphicon glyphicon-chevron-right"></span></button></a>

        </div><!--- /.col-md-->

        <div class="col-md-2"></div>


        <div align="center" class="col-md-4 col-sm-6">

          <img alt="not-insured" src="images/not-insured.png">

          <h2>Not Insured?</h2>

          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dignissim porttitor lectus eu sagittis.</p><br><br>
          
            <a href="https://insurancebrokerwebsite.com/get-a-free-quote.php"><button class="btn btn-lg center-block" type="submit">Get A Quick Quote <span aria-hidden="true" class="glyphicon glyphicon glyphicon-chevron-right"></span></button></a>

        </div><!--- /.col-md-->


        <div class="col-md-1"></div>

      </div><!--end row-->

    </div><!--end container-->

  </div><!--insurance-option-->



  <div id="insurance-company-features">

    <div class="row">

      <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" id="benefitpoints">

          <p><span aria-hidden="true" class="glyphicon glyphicon-ok"></span>Etiam porttitor, metus eu pharetra euismod, massa nibh interdum odio, sit amet feugiat tortor massa non turpis.</p><br>

          <p><span aria-hidden="true" class="glyphicon glyphicon-ok"></span>Etiam porttitor, metus eu pharetra euismod, massa nibh interdum odio, sit amet feugiat tortor massa non turpis.</p><br>

          <p><span aria-hidden="true" class="glyphicon glyphicon-ok"></span>Etiam porttitor, metus eu pharetra euismod, massa nibh interdum odio, sit amet feugiat tortor massa non turpis.</p><br>

          <p><span aria-hidden="true" class="glyphicon glyphicon-ok"></span>Etiam porttitor, metus eu pharetra euismod, massa nibh interdum odio, sit amet feugiat tortor massa non turpis.</p>

      </div><!--end benefitpoints-->

    </div><!--end row-->

  </div><!--end insurance-company-features-->


<div id="brokerinfo">

    <div class="row">
      
      <div class="col-md-6 col-sm-6 padding-0">

          <img alt="insurance-broker-profile-img" class="img-responsive" src="images/insurance-broker-profile-img.jpg">

      </div><!--end col-md-6-->


      <div class="col-md-6 col-sm-6 side-text">

          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dignissim porttitor lectus eu sagittis.</p><br>

          <p>Maecenas aliquet, lorem nec aliquam pulvinar, justo mauris aliquet sapien, sit amet maximus odio lacus at ex. Etiam porttitor, metus eu pharetra euismod, massa nibh interdum odio, sit amet feugiat tortor massa non turpis.</p><br>

          <p>Read more about us <a href="https://insurancebrokerwebsite.com/about.html"><strong>here</strong></a>.</p>

      </div><!--end col-md-6-->

    </div><!--end row-->


    <div class="row rowtwo">

      <div class="col-md-6 col-sm-6 col-md-push-6 col-sm-push-6 padding-0">

          <img align="center" alt="insurance-side-img" class="img-responsive" src="images/insurance-side-img.jpg">

      </div><!--end of col-md-6-->


      <div class="col-md-6 col-sm-6 col-md-pull-6 col-sm-pull-6 side-text">

          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dignissim porttitor lectus eu sagittis. Maecenas aliquet, lorem nec aliquam pulvinar, justo mauris aliquet sapien, sit amet maximus odio lacus at ex.</p><br>

          <p>Etiam porttitor, metus eu pharetra euismod, massa nibh interdum odio, sit amet feugiat tortor massa non turpis. In ac nulla nisl.</p><br>

          <p><a href="https://insurancebrokerwebsite.com/contact.php" rel="nofollow"><strong>Contact us</strong></a> for any questions you may have. We are here to help.</p>

      </div><!--- /.col-md-6-->

    </div><!--- /.row-->

  </div><!--- /.brokerinfo-->


  <div class="testimonials">

    <h4 align="center">What Our Clients Say</h4>

    <section id="carousel">

      <div class="container">

        <div class="row">

          <div class="col-md-8 col-md-offset-2">

            <div class="quote">

            <div class="carousel slide" data-interval="3000" data-ride="carousel" id="fade-quote-carousel">


              <!-- Carousel indicators -->
              <ol class="carousel-indicators icon-controlers">
                <li data-slide-to="0" data-target="#fade-quote-carousel"></li>
                <li data-slide-to="1" data-target="#fade-quote-carousel"></li>
                <li data-slide-to="2" data-target="#fade-quote-carousel"></li>
              </ol>


              <!-- Carousel items -->
              <div class="carousel-inner quote-div">

                <div class="active item">

                    <blockquote>
                          <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam rhoncus aliquam est, vitae tempus diam rhoncus in. In quis augue risus. Donec sapien odio, venenatis sit amet tempor non, fringilla sed erat. Maecenas accumsan a massa sit amet hendrerit. Aliquam pharetra, erat non sodales feugiat, quam turpis tempus nisl, blandit porta risus diam eget diam.”</p><br><br>

                            <span style="color:#9e9e9e">– Jason Brooks</span>
                    </blockquote>

                </div><!--- /.item-->


                <div class="item">

                  <blockquote>
                        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam rhoncus aliquam est, vitae tempus diam rhoncus in. In quis augue risus. Donec sapien odio, venenatis sit amet tempor non, fringilla sed erat. Maecenas accumsan a massa sit amet hendrerit.”<br><br>

                        <span style="color:#9e9e9e">- Will Jones</span></p>

                  </blockquote>

                </div><!--- /.item-->

                <div class="item">

                  <blockquote>
                        <p>“Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent dapibus, urna et porta posuere, massa felis consectetur arcu, sit amet sodales dui eros et ipsum. Mauris vitae pulvinar nunc, ac placerat nisl. Donec non cursus neque, vitae varius leo. Morbi vitae egestas neque. Cras ex urna, iaculis eleifend dolor vel, porttitor lacinia lacus.”<br><br>

                          <span style="color:#9e9e9e">- Michael Brown</span></p>

                  </blockquote>

                </div> <!--- /.item-->

              </div> <!--- /.quote-div-->
             </div> <!--- /.carousel slide-->
           </div> <!--- /.quote-->
          </div> <!--- /.col-md-->
        </div> <!--- /.row-->
      </div> <!--- /.container-->
    </section> <!--- /.carousel-->
  </div> <!--end of testimonials-->


  <div align="center" class="insurance-companies">

    <div class="container">

      <div class="row">

        <div class="col-md-2 col-sm-4">

            <img alt="client-logo" class="img-responsive" src="images/client-logo.png">

        </div>

        <div class="col-md-2 col-sm-4">

            <img alt="client-logo" class="img-responsive" src="images/client-logo.png">
        </div>

        <div class="col-md-2 col-sm-4">

            <img alt="client-logo" class="img-responsive" src="images/client-logo.png">

        </div>

        <div class="col-md-2 col-sm-4">

            <img alt="client-logo" class="img-responsive" src="images/client-logo.png">

        </div>

        <div class="col-md-2 col-sm-4">

            <img alt="client-logo" class="img-responsive" src="images/client-logo.png">

        </div>

        <div class="col-md-2 col-sm-4">

            <img alt="client-logo" class="img-responsive" src="images/client-logo.png">

        </div>

      </div><!--end row-->

    </div><!--end container-->

  </div><!--end insurance-companies-->


  <div class="insurance-img">
    
  </div><!--end insurance-img-->



  <div class="queries">

    <h4 align="center">Have Any Questions?</h4>

    <div id="contact-form">

      <form method="post">

        <div align="center" class="form-group center-block">

          <input class="form-control" name="phone" placeholder="Add Your Cell Number Here" type="tel" value="<?php echo $_POST['phone']; ?>">

        </div>

        <p><input class="call-back center-block" name="submit" type="submit" value="We'll Call You Back"></p>

      </form>

    </div>

  </div><!--end queries-->


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