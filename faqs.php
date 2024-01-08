<!doctype html>
<html lang="en">
    
<?php require_once 'include/head.php';?>
<?php require_once 'include/nav.php';?>



<head>
    <style>
        .minime{
            font-family:Poppins,sans-serif;
            
        }
        
        
        .panel-body {
            margin: 18px 0px;
        }
        #accordion a {
          display: block;
          padding: 10px 15px;
          border-bottom: 1px solid #b42b2b;
          text-decoration: none;
          color: black;
        }
        #accordion .panel-heading a.collapsed:hover,
        #accordion .panel-heading a.collapsed:focus {
          background-color: #dc143c;
          color: white;
          transition: all 0.2s ease-in;
        }
        #accordion .panel-heading a.collapsed:hover::before,
        #accordion .panel-heading a.collapsed:focus::before {
          color: white;
        }
        #accordion .panel-heading {
          padding: 0;
          border-radius: 0px;
          text-align: center;
        }
        #accordion .panel-heading a:not(.collapsed) {
          color: white;
          background-color: #dc143c;
          transition: all 0.2s ease-in;
        }

        /* Add Indicator fontawesome icon to the left */
        #accordion .panel-heading .accordion-toggle::before {
          font-family: 'FontAwesome';
          content: '\f00d';
          float: left;
          color: white;
          font-weight: lighter;
          transform: rotate(0deg);
          transition: all 0.2s ease-in;
        }
        #accordion .panel-heading .accordion-toggle.collapsed::before {
          color: #444;
          transform: rotate(-135deg);
          transition: all 0.2s ease-in;
            }


    </style>
</head>

<body class="light-vz">
    
    <div class="theme-layout">
       
        <section class="banner-section" id="home" data-scroll-index="0">
            <div class="banner-carousel">
                <div class="banner-slide">
                    <div class="container">
                        <h2 class="bn-hd wow fadeInDown" data-wow-duration="100ms" style="font-family: 'Roboto', sans-serif; font-style: normal; font-weight: 700;"><span>Conference</span></h2>
                        <h1 class="ben-head wow " data-wow-duration="300ms" style="font-family: 'Roboto', sans-serif; font-style: normal; font-weight: 700;">Frequently Asked Questions</h1>
                    </div>
                </div><!--banner-slide end-->
            </div><!--banner-carousel end-->
            

        </section><!--banner-section end-->




<div class="d-none d-lg-block">
 <section class="faqs-sec sec-padding">
    <div class="container">
        <div class="sec-title">
            <h3 class="wow " data-wow-duration="500ms">General FAQS </h3>
            
        </div><!--sec-title end-->
        <div class="faqs-sec-details wow " data-wow-duration="300ms">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="nav nav-tabs wow " data-wow-delay=".2s" id="myTab6" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="ques-tab1" data-toggle="tab" href="#ques1" role="tab" aria-controls="ques1" aria-selected="true">How much are the Summit fees?</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" id="ques-tab3" data-toggle="tab" href="#ques3" role="tab" aria-controls="ques3" aria-selected="false"> Who can register for the Summit?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ques-tab4" data-toggle="tab" href="#ques4" role="tab" aria-controls="ques4" aria-selected="false"> What is  CARISCA?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ques-tab5" data-toggle="tab" href="#ques5" role="tab" aria-controls="ques5" aria-selected="false"> What is the recommended attire for the CARISCA Summit?</a>
                        </li>
                        
                    </ul><!--tabs-list end-->
                </div>
                <div class="col-lg-6">
                    <div class="tab-content" id="myTabContent6">
                        <div class="tab-pane fade show active" id="ques1" role="tabpanel" aria-labelledby="ques-tab1">
                            <div class="ques-details d-none d-lg-block">
                                <p>Your registration fees are covered, courtesy of CARISCA. In-person attendees will need to fund their own transportation and lodging.</p>
                            </div><!--ques-details end-->
                        </div>
                       
                        <div class="tab-pane fade" id="ques3" role="tabpanel" aria-labelledby="ques-tab3">
                            <div class="ques-details" style="position: absolute; bottom: 75px; max-width:95%">
                                <p>We invite researchers, students, practitioners and policymakers worldwide who wish to learn about and contribute to discourse on supply chain management in Africa to partake in the Summit.</p>
                            </div><!--ques-details end-->
                        </div>
                        <div class="tab-pane fade" id="ques4" role="tabpanel" aria-labelledby="ques-tab4">
                            <div class="ques-details" style="position: absolute; bottom: 40px;">
                                To learn more about CARISCA, kindly visit; <a href="https://carisca.knust.edu.gh" target="blank" style="display: contents; color: #404141;">carisca.knust.edu.gh</a>
                            </div><!--ques-details end-->
                        </div>
                        <div class="tab-pane fade" id="ques5" role="tabpanel" aria-labelledby="ques-tab5">
                            <div class="ques-details " style="position: absolute; bottom: 0px; max-width:95%">
                               We recommend the  business casual attire at the summit.
                            </div><!--ques-details end-->
                           
                        </div>
                    </div><!--tab-content end-->
                </div>
            </div>
        </div><!-- faqs-sec-details end-->
    </div>
</section><!--faqs-sec end--->  

<section class="faqs-sec sec-padding">
    <div class="container">
        <div class="sec-title">
            <h3 class="wow " data-wow-duration="500ms">Registration FAQS </h3>
            
        </div><!--sec-title end-->
        <div class="faqs-sec-details wow " data-wow-duration="300ms">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="nav nav-tabs wow " data-wow-delay=".2s" id="myTab6" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="ques-tab11" data-toggle="tab" href="#ques11" role="tab" aria-controls="ques11" aria-selected="true">How do I register for the CARISCA ANNUAL Summit?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ques-tab12" data-toggle="tab" href="#ques12" role="tab" aria-controls="ques12" aria-selected="false"> How do I confirm that I have successfully registered?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ques-tab13" data-toggle="tab" href="#ques13" role="tab" aria-controls="ques13" aria-selected="false"> Can I get a Certificate of participation for this Summit?</a>
                        </li>                        
                    </ul><!--tabs-list end-->
                </div>
                <div class="col-lg-6">
                    <div class="tab-content" id="myTabContent6">
                        <div class="tab-pane fade show active" id="ques11" role="tabpanel" aria-labelledby="ques-tab11">
                            <div class="ques-details">
                                <p>
                                    Kindly visit the <a href="https://carisca.knust.edu.gh/summit2023/registration.php" target="blank">registrationn page</a> to register.
                                </p>
                            </div><!--ques-details end-->
                        </div>
                        <div class="tab-pane fade" id="ques12" role="tabpanel" aria-labelledby="ques-tab12">
                            <div class="ques-details" style="position: absolute; bottom: 40px; max-width:95%">
                                <p>Once your registration is finalized, you will receive a confirmation email indicating that you are officially registered.</p>
                            </div><!--ques-details end-->
                        </div>
                        <div class="tab-pane fade" id="ques13" role="tabpanel" aria-labelledby="ques-tab13">
                            <div class="ques-details" style="position: absolute; bottom: 0px; max-width:95%">
                                <p>All in-person perticipants will be given certificates at the end of the Summit. Virtual participants may reach out to the Summit Helpdesk via summit2023@carisca.knust.edu.gh for digital certificates.</p>
                            </div><!--ques-details end-->
                        </div>
                    </div><!--tab-content end-->
                </div>
            </div>
        </div><!-- faqs-sec-details end-->
    </div>
</section><!--faqs-sec end-->  



<section class="faqs-sec sec-padding">
    <div class="container">
        <div class="sec-title">
            <h3 class="wow " data-wow-duration="500ms">Host City FAQS </h3>
            
        </div><!--sec-title end-->
        <div class="faqs-sec-details wow " data-wow-duration="300ms">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="nav nav-tabs wow " data-wow-delay=".2s" id="myTab6" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="ques-tab21" data-toggle="tab" href="#ques21" role="tab" aria-controls="ques1" aria-selected="true">How do I get to the Summit Host City</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ques-tab22" data-toggle="tab" href="#ques22" role="tab" aria-controls="ques2" aria-selected="false"> How do I get around town?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ques-tab23" data-toggle="tab" href="#ques23" role="tab" aria-controls="ques3" aria-selected="false"> Where should I go to enjoy the city?</a>
                        </li>
                        
                    </ul><!--tabs-list end-->
                </div>
                <div class="col-lg-6">
                    <div class="tab-content" id="myTabContent6">
                        <div class="tab-pane fade show active" id="ques21" role="tabpanel" aria-labelledby="ques-tab21">
                            <div class="ques-details">
                                <p>Kindly visit our <a href="travel.php"> travel tips</a> page.</p>
                            </div><!--ques-details end-->
                        </div>
                        <div class="tab-pane fade" id="ques22" role="tabpanel" aria-labelledby="ques-tab22">
                            <div class="ques-details" style=" top: 10px; max-width:95%">
                                <p>
                                We suggest a ride-sharing app such as Uber or Bolt to get around in Accra.</p>
                            </div><!--ques-details end-->
                        </div>
                        <div class="tab-pane fade" id="ques23" role="tabpanel" aria-labelledby="ques-tab23">
                            <div class="ques-details" style="position: absolute; bottom: 0px; max-width:95%">
                                <p>Accra has quite a number of places for recreational activities and relaxation. You may <a href="https://visitghana.com/" style="display: contents; color: blue;">visit here </a> to know more.</p>
                            </div><!--ques-details end-->
                        </div>
                    </div><!--tab-content end-->
                </div>
            </div>
        </div><!-- faqs-sec-details end-->
    </div>
</section><!--faqs-sec end-->  


<section class="faqs-sec sec-padding">
    <div class="container">
        <div class="sec-title">
            <h3 class="wow " data-wow-duration="500ms">Travel Info FAQS </h3>
            
        </div><!--sec-title end-->
        <div class="faqs-sec-details wow " data-wow-duration="300ms">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="nav nav-tabs wow " data-wow-delay=".2s" id="myTab6" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="ques-tab31" data-toggle="tab" href="#ques31" role="tab" aria-controls="ques31" aria-selected="true">Can I get an invitation letter to acquire a VISA in order to attend the event?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ques-tab32" data-toggle="tab" href="#ques33" role="tab" aria-controls="ques33" aria-selected="false"> Is there a direct International Flight to the Summit City?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ques-tab34" data-toggle="tab" href="#ques34" role="tab" aria-controls="ques34" aria-selected="false"> Who can I get in touch with when I need help?</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" id="ques-tab35" data-toggle="tab" href="#ques35" role="tab" aria-controls="ques35" aria-selected="false"> What weather should I expect during the Summit?</a>
                        </li>
                        
                    </ul><!--tabs-list end-->
                </div>
                <div class="col-lg-6">
                    <div class="tab-content" id="myTabContent6">
                        <div class="tab-pane fade show active" id="ques31" role="tabpanel" aria-labelledby="ques-tab31">
                            <div class="ques-details">
                                <p>
                                    Absolutely! Contact us at <a href="mailto:summit2023@carisca.knust.edu.gh">summit2023@carisca.knust.edu.gh</a> 
                                </p>
                            </div><!--ques-details end-->
                        </div>
                        
                        <div class="tab-pane fade" id="ques33" role="tabpanel" aria-labelledby="ques-tab33">
                            <div class="ques-details" style="top: 50px; max-width:95%s">
                                <p>Kindly visit our <a href="travel.php">travel tips </a>page.</p>
                            </div><!--ques-details end-->
                        </div>
                        <div class="tab-pane fade" id="ques34" role="tabpanel" aria-labelledby="ques-tab34">
                            <div class="ques-details" style="position: absolute; bottom: 40px; max-width:95%">
                                <p>
                                    For further information and enquiries, you may reach out to us via <a href="mailto:summit2023@carisca.knust.edu.gh">: summit2023@carisca.knust.edu.gh</a>.
                                    <br> 
                                    <br> 
                                    You may also call either of the following numbers:
                                    <br><br>
                                    Tel: <a href="tel:+233-244-692-953">+233-244-692-953</a> //  <a href="tel:+233-246-407-820">+233-246-407-820</a>   
                                </p>
                            
                            </div><!--ques-details end-->
                        </div>
                        <div class="tab-pane fade" id="ques35" role="tabpanel" aria-labelledby="ques-tab35">
                            <div class="ques-details" style="position: absolute; bottom: 0px; max-width:95%">
                                <p>
                                    Weather forecasts for the month of June indicate that there may be showers during the Summit. It is therefore advised that you bring an umbrella or purchase one on arrival.
                                </p>
                            </div><!--ques-details end-->
                        </div>
                    </div><!--tab-content end-->
                </div>
            </div>
        </div><!-- faqs-sec-details end-->
    </div>
</section><!--faqs-sec end-->  

</div>


<div class="minime d-block d-lg-none" style="MARGIN-TOP: 229px;    font-family: Poppins,sans-serif;">
    <section>
        <div class="sec-title">
            <h3 class="wow " data-wow-duration="500ms" style="margin: 21px 56px;">General FAQS </h3>
            <br>
            <br>
            
        </div><!--sec-title end-->
        <div class="container" style="max-width:90%;margin-top: 3em;">
          <div id="accordion" class="panel-group">
            <div class="panel" style="border-radius: 0; border: 0;  margin-top: 0px;">
              <div class="panel-heading">
              <p class="panel-title">
                <a href="#mques1" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">How much are the Summit fees? </a>
                </p>
              </div>
              <div id="mques1" class="panel-collapse collapse in">
              <div class="panel-body">
                  <p>Your registration fees are covered, courtesy of CARISCA. In-person attendees will need to fund their own transportation and lodging.</p>
                </div>
              </div>
            </div>
            
            <div class="panel" style="border-radius: 0; border: 0;  margin-top: 0px;">
              <div class="panel-heading">
              <p class="panel-title">
                <a href="#mques3" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion">Who can register for the Summit?</a>
                </p>
              </div>
              <div id="mques3" class="panel-collapse collapse">
              <div class="panel-body">
                  <p>We invite researchers, students, practitioners and policymakers worldwide who wish to learn about and contribute to discourse on supply chain management in Africa to partake in the Summit.</p>
                </div>
              </div>
            </div>
            <div class="panel" style="border-radius: 0; border: 0;  margin-top: 0px;">
              <div class="panel-heading">
              <p class="panel-title">
                <a href="#mques4" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion">What is CARISCA?</a>
                </p>
              </div>
              <div id="mques4" class="panel-collapse collapse">
              <div class="panel-body">
                  <p>To learn more about CARISCA, kindly visit; <a href="https://carisca.knust.edu.gh" target="blank">carisca.knust.edu.gh.</a></p>
                </div>
              </div>
            </div>
            <div class="panel" style="border-radius: 0; border: 0;  margin-top: 0px;">
              <div class="panel-heading">
              <p class="panel-title">
                <a href="#mques5" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion"> What is the recommended attire for the CARISCA Summit?</a>
                </p>
              </div>
              <div id="mques5" class="panel-collapse collapse">
              <div class="panel-body">
                  <p>  We recommend the  business casual attire at the summit.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
            <br>
            <br>
            
   <div class="sec-title">
            <h3 class="wow " data-wow-duration="500ms" style="margin: 21px 56px;">Registration FAQS </h3>
            <br>
            <br>
            
            
        </div><!--sec-title end-->
        <div class="container" style="max-width:90%;margin-top: 3em;">
          <div id="accordion" class="panel-group">
            <div class="panel" style="border-radius: 0; border: 0;  margin-top: 0px;">
              <div class="panel-heading">
              <p class="panel-title">
                <a href="#mques11" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion">How do I register fo the CARISCA ANNUAL Summit? </a>
                </p>
              </div>
              <div id="mques11" class="panel-collapse collapse">
              <div class="panel-body">
                  <p>Kindly visit the <a href="registration.php" style="display: contents; color: #404141;"> Registration page </a> to register</p>
                </div>
              </div>
            </div>
            <div class="panel" style="border-radius: 0; border: 0;  margin-top: 0px;">
              <div class="panel-heading">
              <p class="panel-title">
                <a href="#mques12" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion">How do I confirm that I have successfully registered?</a>
                </p>
              </div>
              <div id="mques12" class="panel-collapse collapse">
              <div class="panel-body">
                  <p>Once your registration is finalized, you will receive a confirmation email indicating that you are officially registered.</p>
                </div>
              </div>
            </div>
            <div class="panel" style="border-radius: 0; border: 0;  margin-top: 0px;">
              <div class="panel-heading">
              <p class="panel-title">
                <a href="#mques13" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion">Can I get a Certificate of participation for this Summit?</a>
                </p>
              </div>
              <div id="mques13" class="panel-collapse collapse">
              <div class="panel-body">
                  <p>All in-person perticipants will be given certificates at the end of the Summit. Virtual participants may reach out to the Summit Helpdesk via summit2023@carisca.knust.edu.gh for digital certificates.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
            <br>
            <br>            
   
   <div class="sec-title">
            <h3 class="wow " data-wow-duration="500ms" style="margin: 21px 56px;">Host City FAQS </h3>
            <br>
            <br>
            
            
        </div><!--sec-title end-->
        <div class="container" style="max-width:90%;margin-top: 3em;">
          <div id="accordion" class="panel-group">
            <div class="panel" style="border-radius: 0; border: 0;  margin-top: 0px;">
              <div class="panel-heading">
              <p class="panel-title">
                <a href="#mques21" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion">How do I get to the Summit Host City? </a>
                </p>
              </div>
              <div id="mques21" class="panel-collapse collapse">
              <div class="panel-body">
                  <p>Kindly visit our <a href="travel.php"> travel tips</a> page.</p>
                </div>
              </div>
            </div>
            <div class="panel" style="border-radius: 0; border: 0;  margin-top: 0px;">
              <div class="panel-heading">
              <p class="panel-title">
                <a href="#mques22" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion"> How do I get around town?</a>
                </p>
              </div>
              <div id="mques22" class="panel-collapse collapse">
              <div class="panel-body">
                  <p>We suggest a ride-sharing app such as Uber or Bolt to get around in Accra.</p>
                </div>
              </div>
            </div>
            <div class="panel" style="border-radius: 0; border: 0;  margin-top: 0px;">
              <div class="panel-heading">
              <p class="panel-title">
                <a href="#mques23" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion">Where should I go to enjoy the city?</a>
                </p>
              </div>
              <div id="mques23" class="panel-collapse collapse">
              <div class="panel-body">
                  <p>Accra has quite a number of places for recreational activities and relaxation. You may <a href="https://visitghana.com/" style="display: contents; color: blue;">visit here </a> to know more.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
            <br>
            <br>  
   
   <div class="sec-title">
            <h3 class="wow " data-wow-duration="500ms" style="margin: 21px 56px;">Travel Info Guide </h3>            
        </div><!--sec-title end-->
            <br>
            <br>  
            
        <div class="container" style="max-width:90%;margin-top: 3em;">
          <div id="accordion" class="panel-group">
            <div class="panel" style="border-radius: 0; border: 0;  margin-top: 0px;">
              <div class="panel-heading">
              <p class="panel-title">
                <a href="#mques31" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion">Can I get an invitation letter to acquire a VISA in order to attend the event? </a>
                </p>
              </div>
              <div id="mques31" class="panel-collapse collapse">
              <div class="panel-body">
                  <p>
                        Absolutely! Contact us at <a href="mailto:summit2023@carisca.knust.edu.gh" style="display: contents; color: blue;">summit2023@carisca.knust.edu.gh</a> 
                    </p>
                </div>
              </div>
            </div>
            <div class="panel" style="border-radius: 0; border: 0;  margin-top: 0px;">
              <div class="panel-heading">
              <p class="panel-title">
                <a href="#mques32" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion">Is there a direct International Flight to the Summit City?</a>
                </p>
              </div>
              <div id="mques32" class="panel-collapse collapse">
              <div class="panel-body">
                  <p>Kindly visit our <a href="travel.php">travel tips </a>page.
                  </p>
                </div>
              </div>
            </div>
            <div class="panel" style="border-radius: 0; border: 0;  margin-top: 0px;">
              <div class="panel-heading">
              <p class="panel-title">
                <a href="#mques33" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion"> Who can I get in touch with when I need help?</a>
                </p>
              </div>
              <div id="mques33" class="panel-collapse collapse">
              <div class="panel-body">
                  <p>
                    For further information and enquiries, you may reach out to us via <a href="mailto:summit2023@carisca.knust.edu.gh" style="display: contents; color: blue;">: summit2023@carisca.knust.edu.gh</a>.
                    <br> 
                    <br> 
                    You may also call either of the following numbers:
                    <br><br>
                    Tel: <a href="tel:+233-244-692-953" style="display: contents; color: #404141;">+233-244-692-953</a> //  <a href="tel:+233-246-407-820" style="display: contents; color: #404141;">+233-246-407-820</a>   
                </p>
                </div>
              </div>
            </div>
            <div class="panel" style="border-radius: 0; border: 0;  margin-top: 0px;">
              <div class="panel-heading">
              <p class="panel-title">
                <a href="#mques34" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion">What weather should I expect during the Summit?</a>
                </p>
              </div>
              <div id="mques34" class="panel-collapse collapse">
              <div class="panel-body">
                  <p>
                    Weather forecasts for the month of June indicate that there may be showers during the Summit. It is therefore advised that you bring an umbrella or purchase one on arrival.
                   </p>
                </div>
              </div>
            </div>
            
        </div>

    </section>
</div>
</div>
  

        <?php require_once 'include/footer.php';?>

   
    </div><!--theme-layout end-->


    <?php require_once 'include/scripts.php';?>

</body>

</html>