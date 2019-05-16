<?php



if ($_POST["submit"]) {



      

      

     if (!$_POST['name']) {



       $error="<br />Please enter your name";



     }

      

     if (!$_POST['email']) {



       $error.="<br />Please enter your email address";



     }

     

      

     if ($_POST['email']!="" AND !filter_var($_POST['email'],

FILTER_VALIDATE_EMAIL)) {

      

     $error.="<br />Please enter a valid email address";



     }

     

      

     if ($error) {



 $result='<div class="alert alert-danger"><strong>There were error(s)

in your form:</strong>'.$error.'</div>';



     } else {



 if (mail("info@youremail.com", "Combined Insurance Full Form Submission", 
    /* ---- Email where you want to recieve the contact messages ---- */
 

"Name: ".$_POST['name']." 

Email: ".$_POST['email']." 

Title: ".$_POST['title']." 

ID Number: ".$_POST['idnumber']."

Marital Status: ".$_POST['marital-status']." 

Employment Status: ".$_POST['employment-status']." 

Work Phone: ".$_POST['workphone']." 

Cell Number: ".$_POST['cellphone']." 

Home Address: ".$_POST['home-address']." 

Risk Address: ".$_POST['risk-address']." 

Insured age: ".$_POST['insured-age']."

House Description: ".$_POST['house-description']."

Is this a holiday home: ".$_POST['holiday-home']." 

Is theft cover included: ".$_POST['theft-cover']." 

Type of Cover: ".$_POST['cover-type']." 

Is the home near open fields?: ".$_POST['fields']." 

Are you a pensioner: ".$_POST['pensioner']." 

Is the roof thatched: ".$_POST['thatch']." 

Is the home in secured complex?: ".$_POST['secure-complex']." 

Does the home have an alarm: ".$_POST['alarm']." 

Armed response?: ".$_POST['armed-response']."

Going away in next 30 days: ".$_POST['going-away']."

Non-standard construction: ".$_POST['construction']."

Burglar bars: ".$_POST['burglar-bars']."

Security Gates: ".$_POST['security-gates']."

Previous Insurance: ".$_POST['previous-insurance']."

Previous Insurance Companies: ".$_POST['company']."

Home Insurance Claims: ".$_POST['house-claim']."

Home Insurance Claim Years: ".$_POST['house-claim-years']."

Year: ".$_POST['caryear']."

Car Make: ".$_POST['make']."

Car Model: ".$_POST['model']."

Car Value: ".$_POST['car-value']."

Is Car insured currently: ".$_POST['current-insurance']."

Name of Driver: ".$_POST['driver']."

Birth date of Driver: ".$_POST['dob']."

Radio insured amount: ".$_POST['amount']."

Insurance type: ".$_POST['insurance-type']."

Vehicle use: ".$_POST['vehicle-use']."

Address where vehicle is kept overnight: ".$_POST['car-address']."

Type of parking: ".$_POST['parking']."

Driver’s License code: ".$_POST['license-code']."

Date license issued: ".$_POST['license-date']."

Tracking device installed: ".$_POST['tracking-device']."

Immobiliser fitted: ".$_POST['immobiliser']."

Rebuilt/customised vehicle: ".$_POST['customised']."

Driver is: ".$_POST['driver-option']."

Vehicle accessories: ".$_POST['accessories']."

Car Insurance claimed: ".$_POST['car-claim']."

Years passed since insurance claimed: ".$_POST['car-claim-years']."

List of claims/losses: ".$_POST['claim-list'])) {

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


                   <title>Home Insurance Form</title>


      <!-- CSS Stylesheets -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/get-quote-style.css" />
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

  </nav><!--end nav-->




  <div class="questionnaire">

      <h2>COMBINED INSURANCE</h2>

        <p align="center">(2 Minute Questionnaire Form)<br />
        Contact us for any questions: +1-202-555-0168</p>

  </div><!--- /.questionnaire-->


  <div id="contact-form"> 

    <div class="row">

      <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> <br />
      

          <!--Form Success Message will display here-->
            <strong> <?php echo $result; ?> </strong>

          <form method="post"><br />

            <div class="form-group center-block">

                <label class="form-question">Full Name:</label>

                    <input type="text" name="name" class="form-control" required value="<?php echo $_POST['name']; ?>" />

            </div><!--- /full name-->

            <div class="form-group center-block">

              <label class="form-question">Title</label>

                  <select align="center" name="title" class="form-control form-group" value="<?php echo $_POST['title']; ?>">

                    <option disabled selected><strong>Select</strong></option>

                      <option>Mr</option>
                      <option>Mrs</option>
                      <option>Miss</option>
                      <option>Ms</option>

                  </select>

            </div><!--- /title-->

            <div class="form-group center-block">

              <label class="form-question">ID Number:</label>

                <input type="text" class="form-control" name="idnumber" value="<?php echo $_POST['idnumber']; ?>" />

            </div><!--end Id Number-->


            <div class="form-group center-block">

              <label class="form-question">Marital Status</label>

                <select align="center" name="marital-status" class="form-control form-group" value="<?php echo $_POST['marital-status']; ?>">

                    <option disabled selected><strong>Select</strong></option>

                        <option>Married</option>
                        <option>Single</option>

                </select>

            </div>


            <div class="form-group center-block">

              <label class="form-question">Employment Status</label>

                <select align="center" name="employment-status" class="form-control form-group" value="<?php echo $_POST['employment-status']; ?>">

                    <option disabled selected><strong>Select</strong></option>

                        <option>Employed</option>
                        <option>Unemployed</option>


                </select>

            </div>


            <div class="form-group center-block">

              <label class="form-question">Email Address:</label>

                <input type="email" name="email" required class="form-control"  value="<?php echo $_POST['email']; ?>" />

            </div>


            <div class="form-group center-block">

              <label class="form-question">Work Telephone:</label>

                <input type="tel" name="workphone" class="form-control" value="<?php echo $_POST['workphone']; ?>" />

            </div>

            <div class="form-group center-block">

              <label class="form-question">Cell Number:</label>

                <input type="tel" name="cellphone" class="form-control" value="<?php echo $_POST['cellphone']; ?>" />

            </div>

            <div class="form-group center-block">

              <label class="form-question">Home Address:</label>

                <textarea class="form-control" name="home-address"><?php echo $_POST['home-address']; ?> </textarea><br />

            </div>



           <div class="form-group center-block">

              <label class="form-question">Risk Home Address:</label>

                <textarea class="form-control" name="risk-address"> <?php echo $_POST['risk-address']; ?> </textarea><br /> 
            </div>

            <div class="form-group center-block">

              <label class="form-question">Insured Age:</label>

                <input type="text" class="form-control" name="insured-age" value="<?php echo $_POST['insured-age']; ?>">

            </div>


            <div class="form-group center-block">

              <label class="form-question">House Description:</label>

                <select align="center" name="house-description" class="form-control form-group" value="<?php echo $_POST['house-description']; ?>" />

                  <option disabled selected><strong>Select</strong></option>

                        <option>Apartment</option>
                        <option>House</option>
                        <option>Town House</option>

                </select>

            </div>

            <div class="form-group center-block">

              <label class="form-question">Area Situated</label>

                <select align="center" name="area" class="form-control form-group" value="<?php echo $_POST['area']; ?>">

                    <option disabled selected><strong>Select</strong></option>

                        <option>Residential</option>
                        <option>Other</option>

                </select>

            </div>

            <div class="form-group center-block">

              <label class="form-question">Is this a holiday home?</label>

                <select align="center" name="holiday-home" class="form-control form-group" value="<?php echo $_POST['holiday-home']; ?>" /> 

                    <option disabled selected><strong>Select</strong></option>

                        <option>Yes</option>
                        <option>No</option>

                </select>

            </div>


            <div class="form-group center-block">

              <label class="form-question">Is theft cover included?</label>

                <select align="center" name="theft-cover" class="form-control form-group" value="<?php echo $_POST['theft-cover']; ?>"> 

                    <option disabled selected><strong>Select</strong></option>

                        <option>Yes</option>
                        <option>No</option>


                </select>

            </div>


            <div class="form-group center-block">

              <label class="form-question">Type of cover</label>

                <select align="center" name="area" class="form-control form-group" value="<?php echo $_POST['area']; ?>" /> 

                    <option disabled selected><strong>Select</strong></option>

                        <option>Household</option>
                        <option>Home</option>
                        <option>Household &amp; Home</option>

                </select>

            </div>

            <div class="form-group center-block">

              <label class="form-question">Is the home near open fields?</label>

                <select align="center" name="fields" class="form-control form-group" value="<?php echo $_POST['fields']; ?>"> 

                    <option disabled selected><strong>Select</strong></option>

                        <option>Yes</option>
                        <option>No</option>


                </select>

            </div>


            <div class="form-group center-block">

              <label class="form-question">Are you a pensioner?</label>

                <select align="center" name="pensioner" class="form-control form-group" value="<?php echo $_POST['pensioner']; ?>" /> 

                    <option disabled selected><strong>Select</strong></option>

                        <option>Yes</option>
                        <option>No</option>

                </select>

            </div>

            <div class="form-group center-block">

              <label class="form-question">Is the roof thatched?</label>

                <select align="center" name="thatch" class="form-control form-group" value="<?php echo $_POST['thatch']; ?>"> 

                    <option disabled selected><strong>Select</strong></option>

                        <option>Yes</option>
                        <option>No</option>


                  </select>

            </div>



                  <div class="form-group center-block">

                    <label class="form-question">Is the home in secured complex? </label>

                      <select align="center" name="secure-complex" class="form-control form-group" value="<?php echo $_POST['secure-complex']; ?>" >

                          <option disabled selected><strong>Select</strong></option>

                              <option>Yes</option>
                              <option>No</option>

                      </select>

                  </div>



                  <div class="form-group center-block">

                    <label class="form-question">Does the home have an alarm?</label>

                        <select align="center" name="alarm" class="form-control form-group" value="<?php echo $_POST['alarm']; ?>" > 

                            <option disabled selected><strong>Select</strong></option>

                                <option>Yes</option>
                                <option>No</option>


                        </select>

                  </div>


                  <div class="form-group center-block">

                      <label class="form-question">If “Yes to the above, is the alarm linked to armed response?</label>

                          <select align="center" name="armed-response" class="form-control form-group" value="<?php echo $_POST['armed-response']; ?>"> 


                              <option disabled selected><strong>Select</strong></option>

                                  <option>Yes</option>
                                  <option>No</option>           

                          </select>

                  </div>


                  <div class="form-group center-block">

                      <label class="form-question">Going away in next 30 days?</label>

                        <select align="center" name="armed-response" class="form-control form-group" value="<?php echo $_POST['armed-response']; ?>"> 


                            <option disabled selected><strong>Select</strong></option>

                                <option>Yes</option>
                                <option>No</option>

                        </select>

                  </div>


                  <div class="form-group center-block">

                      <label class="form-question">Non-standard construction?</label>

                        <select align="center" name="construction" class="form-control form-group" value="<?php echo $_POST['construction']; ?>">

                            <option disabled selected><strong>Select</strong></option>

                                <option>Yes</option>
                                <option>No</option>

                        </select>

                  </div>


                  <div class="form-group center-block">

                      <label class="form-question">Burglar bars on opening windows?</label>

                        <select align="center" name="burglar-bars" class="form-control form-group" value="<?php echo $_POST['burglar-bars']; ?>"> 

                            <option disabled selected><strong>Select</strong></option>

                                <option>Yes</option>
                                <option>No</option>

                        </select>

                  </div>


                  <div class="form-group center-block">

                      <label class="form-question">Security gates on external doors?</label>

                        <select align="center" name="security-gates" class="form-control form-group" value="<?php echo $_POST['security-gates']; ?>">

                            <option disabled selected><strong>Select</strong></option>

                                <option>Yes</option>
                                <option>No</option>

                        </select>

                  </div>



                  <div class="form-group center-block">

                      <label class="form-question">Have you previously had Insurance?</label>

                        <select align="center" name="previous-insurance" class="form-control form-group" value="<?php echo $_POST['previous-insurance']; ?>"> 


                            <option disabled selected><strong>Select</strong></option>

                                  <option>Yes</option>
                                  <option>No</option>

                       </select>


                  </div>



                  <div class="form-group center-block">

                      <label class="form-question">If Yes, with which companies?</label>

                        <input type="text" class="form-control" name="company" value="<?php echo $_POST['company']; ?>">

                  </div>

                  <div class="form-group center-block">

                      <label class="form-question">Have you ever claimed from insurance?</label>

                        <select align="center" name="house-claim" class="form-control form-group" value="<?php echo $_POST['house-claim']; ?>"> 

                            <option disabled selected><strong>Select</strong></option>

                                <option>Yes</option>
                                <option>No</option>
                        
                        </select>

                </div>

                <div class="form-group center-block">

                    <label class="form-question">If Yes, how many years have passed since you have submitted a claim?</label>

                        <input type="text" class="form-control" name="house-claim-years" value="<?php echo $_POST['house-claim-years']; ?>">


                </div> <!--end claimed-years-->


                <div class="form-group center-block">

                    <label class="form-question">Car Year:</label>

                        <input type="text" class="form-control" name="caryear" value="<?php echo $_POST['caryear']; ?>">


                </div><!--end year-->


                <div class="form-group center-block">

                    <label class="form-question">Car Make:</label>

                        <input type="text" class="form-control" name="make" value="<?php echo $_POST['make']; ?>">

                
                </div><!--end car make-->



                <div class="form-group center-block">

                    <label class="form-question">Car Model:</label>

                        <input type="text" class="form-control" name="model" value="<?php echo $_POST['make']; ?>">

                </div><!--end car model-->


                <div class="form-group center-block">

                    <label class="form-question">Car's Value:</label>

                        <div class="input-group">

                            <div class="input-group-addon"><strong>R</strong></div>

                            <input type="text" class="form-control" name="car-value" value="<?php echo $_POST['car-value']; ?>">

                        </div>

                </div><!--end car value--><br />


                <div class="form-group center-block">

                    <label class="form-question">Is vehicle insured currently?</label>

                      <select align="center" name="current-insurance" class="form-control form-group" value="<?php echo $_POST['current-insurance']; ?>"> 

                            <option disabled selected><strong>Select</strong></option>

                              <option>Yes</option>
                              <option>No</option>

                      </select>

                  </div><!--end current-insurance-->



                  <div class="form-group center-block">

                      <label class="form-question">Name of Driver:</label>

                        <input type="text" class="form-control" name="driver" value="<?php echo $_POST['driver']; ?>">

                  </div><!--end driver-->

                  <div class="form-group center-block">

                      <label class="form-question">Birth date of Driver:</label>

                          <input type="text" class="form-control" name="dob" value="<?php echo $_POST['dob']; ?>">

                  </div><!--end dob-->



                  <div class="form-group center-block">

                      <label class="form-question">Radio insured amount (if applicable)</label>

                          <div class="input-group">

                            <div class="input-group-addon"><strong>R</strong></div>

                            <input type="text" class="form-control" name="amount" value="<?php echo $_POST['amount']; ?>">

                          </div>

                  </div><!--end car value--><br />



                  <div class="form-group center-block">


                      <label class="form-question">Insurance type</label>

                        <select align="center" name="insurance-type" class="form-control form-group" value="<?php echo $_POST['insurance-type']; ?>" /> 


                              <option disabled selected><strong>Select</strong></option>

                                    <option>Comprehensive</option>
                                    <option>Third Party</option>

                        </select>

                  </div><!--end insurance-type-->


                  <div class="form-group center-block">

                      <label class="form-question">Vehicle use</label>

                          <select align="center" name="vehicle-use" class="form-control form-group" value="<?php echo $_POST['vehicle-use']; ?>" /> 

                              <option disabled selected><strong>Select</strong></option>

                                    <option>Private</option>
                                    <option>Business</option>
                       

                          </select>

                  </div><!--end vehicle-use-->



                  <div class="form-group center-block">

                      <label class="form-question">Address where vehicle is kept overnight</label>

                        <textarea class="form-control" name="car-address"><?php echo $_POST['car-address']; ?> </textarea>

                  </div><!--end car-address-->


                  <div class="form-group center-block">

                      <label class="form-question">Type of parking</label>

                          <select align="center" name="parking" class="form-control form-group" value="<?php echo $_POST['parking']; ?>"> 

                              <option disabled selected><strong>Select</strong></option>

                                  <option>Garage</option>
                                  <option>Behind Locked Gate(s)</option>
                                  <option>Carport</option>

                          </select>

                  </div><!--end parking-->


                  <div class="form-group center-block">

                      <label class="form-question">Driver’s License code:</label>

                          <input type="text" class="form-control" name="license-code" value="<?php echo $_POST['license-code']; ?>">

                  </div><!--end license-code-->



                  <div class="form-group center-block">

                      <label class="form-question">Date license issued:</label>

                          <input type="text" class="form-control" name="license-date" value="<?php echo $_POST['license-date']; ?>">

                  </div><!--end license-date-->



                  <div class="form-group center-block">

                      <label class="form-question">Tracking device installed:</label>

                          <input type="text" class="form-control" name="tracking-device" value="<?php echo $_POST['tracking-device']; ?>">

                  </div><!--end tracking-device-->


                  <div class="form-group center-block">

                      <label class="form-question">Immobiliser fitted:</label>

                          <input type="text" class="form-control" name="immobiliser" value="<?php echo $_POST['immobiliser']; ?>">

                  </div><!--end immobiliser-->


                  <div class="form-group center-block">

                      <label class="form-question">Rebuilt/customised vehicle?</label>

                        <select align="center" name="customised" class="form-control form-group" value="<?php echo $_POST['customised']; ?>"> 

                              <option disabled selected><strong>Select</strong></option>

                                    <option>Yes</option>
                                    <option>No</option>

                        </select>

                  </div><!--end customised-->


                  <div class="form-group center-block">

                      <label class="form-question">The Driver is</label>

                        <select align="center" name="driver-option" class="form-control form-group" value="<?php echo $_POST['driver-option']; ?>">

                            <option disabled selected><strong>Select</strong></option>

                                <option>policy holder</option>
                                <option>spouse</option>
                      
                        </select>

                  </div><!--end driver-option-->


                  <div class="form-group center-block">


                      <label class="form-question">If there are vehicle accessories, please specify</label>

                        <input type="text" class="form-control" value="<?php echo $_POST['accessories']; ?>">

                  </div> <!--end accessories-->


                  <div class="form-group center-block">

                      <label class="form-question">Have you ever claimed from insurance?</label>

                        <select align="center" name="car-claim" class="form-control form-group" value="<?php echo $_POST['car-claim']; ?>" > 

                            <option disabled selected><strong>Select</strong></option>

                                <option>Yes</option>
                                <option>No</option>


                        </select>

                  </div><!--end car-claim-->



                  <div class="form-group center-block">

                      <label class="form-question">If “Yes” to the above, how many years have passed since you have submitted a claim?</label>

                          <input type="text" class="form-control" name="car-claim-years" value="<?php echo $_POST['car-claim-years']; ?>">

                  </div> <!--end car-claim-years-->


                  <div class="form-group center-block">

                      <label class="form-question">If applicable, please list claims/losses and values for the past 5 years</label>

                          <textarea class="form-control" name="claim-list"><?php echo $_POST['claim-list']; ?> </textarea><br /> 

                  </div><!--end claim-list-->


                      <p align="center" ><input type="submit" name="submit" class="btn btn-success btn-lg insurance-form" value="SUBMIT FORM" /> </p><br /><br /><br /><br />


            </form><!--- /form-->

          </div><!--- /.col-md-->

      </div><!--- /.row-->

  </div><!--- /#contact-form-->


<br /><br /><br /><br /><br /><br />


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