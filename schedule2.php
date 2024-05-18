<!doctype html>
<html lang="en">
<?php require_once 'include/head.php';?>
<style>
    .font-weight-bold {
  font-weight: 500;
}

.b-none {
  border-bottom: none !important;
}

a .active{
    color: ##dc143c !important;
}

</style>
<body class="light-vz">
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div><!--preloader end-->
    <div class="theme-layout">
        <?php require_once 'include/header.php';?>
        <?php require_once 'include/nav.php';?>
       
        <section class="banner-section" id="home" data-scroll-index="0">
            <div class="banner-carousel">
                <div class="banner-slide">
                    <div class="container">
                        <h2 class="bn-hd wow fadeInDown" data-wow-duration="100ms" style="font-family: 'Roboto', sans-serif; font-style: normal; font-weight: 700;"><span>Conference</span></h2>
                        <h1 class="ben-head wow " data-wow-duration="300ms" style="font-family: 'Roboto', sans-serif; font-style: normal; font-weight: 700;">Schedule</h1>
                    </div>
                </div><!--banner-slide end-->
            </div><!--banner-carousel end-->
            

        </section><!--banner-section end-->
        
        <section class="conference-sec" id="schedule" data-scroll-index="2">
            <div class="container">
                <div class="sec-title">
                    
                    <h3 class="wow " data-wow-duration="500ms">Conference Schedule</h3>
                   <!--  <a href="#" title="" class="wow flipInY" data-wow-duration="300ms"><i class="fa fa-print"></i>Download Schedule</a> -->
                </div><!--sec-title end-->
                <div class="conference-tabs-sec wow fadeIn" data-wow-duration="200ms">
                    <div class="conf-tab-list">
                        <ul class="nav nav-tabs wow " data-wow-delay=".2s" id="myTab" role="tablist">
                            <li class="nav-item">
                                
                                <a class="nav-link active" id="confery-tab1" data-toggle="tab" href="#preSummit" role="tab" aria-controls="preSummit" aria-selected="true">
                                    <strong>Pre Summit</strong>
                                    19.06.2023
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="confery-tab2" data-toggle="tab" href="#day1" role="tab" aria-controls="day1" aria-selected="true">
                                    <strong>Day 1</strong>
                                    20.06.2023
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="confery-tab3" data-toggle="tab" href="#day2" role="tab" aria-controls="day2" aria-selected="false">
                                    <strong>Day 2</strong>
                                    21.06.2023
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="confery-tab4" data-toggle="tab" href="#day3" role="tab" aria-controls="day3" aria-selected="false">
                                    <strong>Day 3</strong>
                                    22.06.2023
                                </a>
                            </li>
                            
                        </ul><!--tabs-list end-->
                    </div>
                    <!-- Conference Days Tab Content -->
                    <div class="tab-content">
                        <!-- Pre Conference Tab  -->
                        <div class="tab-pane fade show active" id="preSummit" role="tabpanel" aria-labelledby="pre-summit">
                             <!-- Pre Conference Tab Lists  -->
                            <ul class="nav nav-tabs" id="preConferenceTabList" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active"  data-toggle="tab" href="#pAll" role="tab" aria-controls="Pre-Conference-All-Halls" aria-selected="true">Cedar</a>
                                </li>
                                
                            </ul><!--tabs-list end-->

                            <!-- Pre Conference Tab Content -->
                            <div class="tab-content" id="PreConferenceTabContent">
                                <!-- All Halls  -->
                                <div class="tab-pane fade show active" id="pAll" role="tabpanel" aria-labelledby="Pre-Conference-All-Halls">
                                    <div class="confy-cmpt-details">
                                        <ul>
                                            <li>
                                                <div class="cmpt-details wow " data-wow-duration="300ms">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="b-none cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 08:00 - 09:00am</span>
                                                            <h3>Registration</h3>
                                                        </div>
                                                        
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>
                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 09:00 - 10:30am</span>
                                                            <h3>Roundtable Discussions</h3>
                                                            
                                                        </div>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-user"></i> Prof. Glenn Richey<small>/  Table 1 Facilitator</small></h3>
                                                        </div>

                                                        <p style="margin-top: 20px; margin-bottom: 20px;">
                                                        Pressured Supply Chains: The role of Supply Chain Technology Utilisation by Abdul Samed Muntaka, Seth Boahen
                                                        </p><br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-user"></i> Prof. Dale Rogers<small>/  Table 2 Facilitator</small></h3>
                                                        </div> 
                                                        <p style="margin-top: 20px; margin-bottom: 20px;">
                                                        Supply chain finance and performance; a bibliometric and content analysis by Isaac Apike
                                                        </p> <br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-user"></i> Prof. Adegoke Oke<small>/  Table 3 Facilitator</small></h3>
                                                        </div>
                                                        <p style="margin-top: 20px; margin-bottom: 20px;">
                                                        Supplier relationship management and innovation performance: a moderated-mediation
                                                        analysis of absorptive capacity and supply chain agility by Ishmael Acquah
                                                        </p>
                                                        <br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-user"></i> Prof. Mohan Gopalakrishnan<small>/  Table 4 Facilitator</small></h3>
                                                        </div>
                                                        <p style="margin-top: 20px; margin-bottom: 20px;">
                                                        Indigenous Knowledge Management and Food Security Among Peasant Yam Farmers in Ghana by Ebenezer Osei Jones; Toby Leon Moorsom, Stephen Whitfield and Charles Nyaaba 
                                                        </p>
                                                        <br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-user"></i> Prof. Constantin Blome<small>/  Table 5 Facilitator</small></h3>
                                                        </div>
                                                        <p style="margin-top: 20px; margin-bottom: 20px;">
                                                        How regulatory framework and interfirm governance mechanisms enhance firm performance:
                                                         Structure-conduct-performance perspect by Emmanuel Anin   
                                                        </p>
                                                        <br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-user"></i> Prof. Nat Boso <small>/  Table 6 Facilitator</small></h3>
                                                        </div>
                                                        <p style="margin-top: 20px; margin-bottom: 20px;">
                                                        Impact of Supply Chain Management Practices on Supply Chain Performance: The Mediating Effect of Logistics Management Information Systems. A Case of Ghana's Health Sector by Okyere Anim Barima
                                                        </p>
                                                        <br>

                                                     
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>
                                            
                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 10:45 - 12:30pm</span>
                                                            <h3>Roundtable Discussions</h3>
                                                            
                                                        </div>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-user"></i> Prof. Glenn Richey<small>/  Table 1 Facilitator</small></h3>
                                                        </div>
                                                        <p style="margin-top: 20px; margin-bottom: 20px;">
                                                        Big Data Capabilities towards Resilience: The roles of Supply Chain Visibility and Risk
                                                        Management Strategy Compliance by Enoch Bulley
                                                        </p><br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-user"></i> Prof. Dale Rogers<small>/  Table 2 Facilitator</small></h3>
                                                        </div>
                                                        <p style="margin-top: 20px; margin-bottom: 20px;">
                                                        Supply chain finance and financial performance; the roles of operational resilience, operational disruption, and supply chain disruption orientation by Isaac Akurugu Apike, Kwame Mireku, Muntaka Abdul Samed, Joseph Oscar Akotey , Samuel Asante Gyamerah, and Joseph Akadeagre Agana
                                                        </p> <br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-user"></i> Prof. Adegoke Oke<small>/  Table 3 Facilitator</small></h3>
                                                        </div>
                                                        <p style="margin-top: 20px; margin-bottom: 20px;">
                                                        How does digital transformation of supply chains enhance supply chain performance? the role of supply chain knowledge management capabilities by Benjamin Agyei-Owusu

                                                        </p>
                                                        <br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-user"></i> Prof. Mohan Gopalakrishnan<small>/  Table 4 Facilitator</small></h3>
                                                        </div>
                                                        <p style="margin-top: 20px; margin-bottom: 20px;">
                                                        Cold Chain Logistics Performance, Capabilities and Food Losses; The Perspectives of the Developing Economies by David Antwi 
                                                        </p>
                                                        <br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-user"></i> Prof. Constantin Blome<small>/  Table 5 Facilitator</small></h3>
                                                        </div>
                                                        <p style="margin-top: 20px; margin-bottom: 20px;">
                                                        Antecedent and Influence of Health Logistics Flow on Health Logistics Service Performance and Customer Satsifaction by Mawuli Amedofu 
                                                        </p>
                                                        <br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-user"></i> Prof. Nat Boso <small>/  Table 6 Facilitator</small></h3>
                                                        </div>
                                                        <p style="margin-top: 20px; margin-bottom: 20px;">
                                                        A systematic review of the impact of Supplier Relationship Management on supply prepositioning in humanitarian supply chain management with a focus on methodologies adopted by Priscilla Addo Asamany 
                                                        </p>
                                                        <br>

                                                     
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>
                                            <li>
                                                <div class="cmpt-details wow " data-wow-duration="200ms">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img4.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="b-none cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 12:30 - 1:30pm</span>
                                                            <h3>Networking Lunch</h3>
                                                            
                                                        </div>
                                                        
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>
                                            
                                        </ul>
                                    </div><!--confy-cmpt-details end-->
                                </div>
                            </div>
                        </div>
                        <!-- Day 1 Tab  -->
                        <div class="tab-pane fade" id="day1" role="tabpanel" aria-labelledby="day-1">
                            <!-- Day 1 Tab Lists  -->
                            <ul class="nav nav-tabs" id="day1TabList" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="ccf-tab1" data-toggle="tab" href="#1All" role="tab" aria-controls="Day-1-All-Halls" aria-selected="true">All Halls</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="ccf-tab2" data-toggle="tab" href="#1C" role="tab" aria-controls="Day-1-Cedar" aria-selected="false"> Cedar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="ccf-tab2" data-toggle="tab" href="#1A1" role="tab" aria-controls="Day-1-Afzelia 1" aria-selected="false"> Afzelia 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="ccf-tab2" data-toggle="tab" href="#1A2" role="tab" aria-controls="Day-1-Afzelia 2" aria-selected="false"> Afzelia 2</a>
                                </li>
                            </ul><!--tabs-list end-->

                            <!-- Day 1 Tab Content  -->
                            <div class="tab-content" id="Day1TabContent">
                                <!-- All Halls  -->
                                <div class="tab-pane fade show active" id="1All" role="tabpanel" aria-labelledby="Day-1-All-Halls">
                                    <div class="confy-cmpt-details">
                                        <ul>
                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head b-none ">
                                                            <span><i class="fa fa-clock-o"></i> 08:00 - 9:00am</span>
                                                            <h3>Registration and Coffee</h3>
                                                            
                                                        </div>
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head b-none ">
                                                            <span><i class="fa fa-clock-o"></i> 09:00 - 10:00am</span>
                                                            <h3>Introduction and Keynote </h3> <a href="https://youtu.be/kZdDgEZZu4w" data-lity>Watch Video</a> 
                                                            <p style="margin-top: 10px;"> Introduction</p>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Nathaniel Boso, KNUST         </h3>
                                                        </div>

                                                            <p style="margin-top: 10px;"> Keynote</p>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Daniel McKorley<small>/  CEO at McDan Shipping</small></h3>
                                                        </div>
                                                        </div>
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>


                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head b-none ">
                                                            <span><i class="fa fa-clock-o"></i> 10:15 - 11:15am</span>
                                                            <h3>Parallel Sessions</h3>
                                                            <p style="margin-top: 20px; margin-bottom: 20px;">
                                                        Details of this parallel session are available on the individual room pages. Kindly click on Cedar, Afzelia1 or Afzelia2 atop this schedule to see more.
                                                        </p>
                                                            
                                                        </div>
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head b-none ">
                                                            <span><i class="fa fa-clock-o"></i> 11:45 - 12:45pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            <p style="margin-top: 20px; margin-bottom: 20px;">
                                                        Details of this parallel session are available on the individual room pages. Kindly click on Cedar, Afzelia1 or Afzelia2 atop this schedule to see more.
                                                        </p>
                                                            
                                                        </div>
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head b-none ">
                                                            <span><i class="fa fa-clock-o"></i> 12:45 - 01:45pm</span>
                                                            <h3>Lunch</h3>
                                                            
                                                            <p style="margin-top: 10px;"> Speaker</p>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Tom Maher, Senior VP Global Service Parts, Dell</h3>
                                                        </div>
                                                        </div>
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head b-none ">
                                                            <span><i class="fa fa-clock-o"></i> 01:45 - 02:45pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            <p style="margin-top: 20px; margin-bottom: 20px;">
                                                        Details of this parallel session are available on the individual room pages. Kindly click on Cedar, Afzelia1 or Afzelia2 atop this schedule to see more.
                                                        </p>
                                                            
                                                        </div>
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>


                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head b-none ">
                                                            <span><i class="fa fa-clock-o"></i> 03:00 - 04:00pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            <p style="margin-top: 20px; margin-bottom: 20px;">
                                                        Details of this parallel session are available on the individual room pages. Kindly click on Cedar, Afzelia1 or Afzelia2 atop this schedule to see more.
                                                        </p>
                                                            
                                                        </div>
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 04:15 - 05:15pm</span>
                                                            <h3>Panel Session</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Topic: Publishing in Top Journals in Operations and Supply Chain Management</h3>

                                                        <p style="margin-top: 10px; margin-bottom: 20px;">
                                                        Details of this panel session are available on the individual room pages. Kindly click on Cedar atop this schedule to see more.
                                                        </p>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Adegoke Oke<small> / Session Chair</small></h3>
                                                        </div>
                                                       
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head b-none ">
                                                            <span><i class="fa fa-clock-o"></i> 05:30 - 06:30pm</span>
                                                            <h3>PhD Dissertation Award Presentations </h3>
                                                            
                                                        </div>
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>
                                        </ul>
                                    </div><!--confy-cmpt-details end-->
                                </div>
                                <!-- Cedar  -->
                                <div class="tab-pane fade" id="1C" role="tabpanel" aria-labelledby="Day-1-Cedar">
                                    <div class="confy-cmpt-details">
                                        <ul>
                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 09:00 - 10:00am</span>
                                                            <h3>Introduction and  Keynote</h3> <a href="https://youtu.be/kZdDgEZZu4w" data-lity>Watch Video</a>  
                                                            
                                                        </div>
                                                        <p style="margin-top: 10px;">Welcome</p>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i>  Prof. Charles Marfo<small> Provost of the College of Humanities and Social Sciences, KNUST</small></h3>
                                                        </div>
                                                        
                                                        <br>
                                                        <p style="margin-top: 10px;">Introduction to Summit</p>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Prof. Nathaniel Boso<small>/  Dean,  School of Business, KNUST</small></h3>
                                                        </div>

                                                        <p style="margin-top: 10px;"> Keynote</p>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Daniel McKorley<small>/  Founder and Executive Chairman,  McDan Group of Companies</small></h3>
                                                        </div>
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 10:15 - 11:15am</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Sectoral Supply Chains</h3>
                                                        
                                                        <br>
                                                        <p>
                                                            Paper 1: Antecedents of Sustainable Maize Supply Chain Financing for Achieving Food Security in Resource Constrained Developing Economies. A Complex Adaptive Systems Theory Perspective.
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Abdul Samed Muntaka, Dorcas Nuertey, Isaac Apike, David Antwi (All from KNUST)
                                                        </i>
                                                      
                                                      
                                                        
                                                       
                                                        <br><br>
                                                        <p>
                                                            Paper 2: Seafarers Fatigue at Sea: Impact on Productivity in Maritime Transport. A study of Apapa Port, Lagos 
                                                                                                               
                                                        </p>
                                                      
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                       Abdulsobur Hassan (Lagos State University), Ibrahim Forson Abdulazeez (Lagos State University) 
                                                       </i>
                                                        <br><br>
                                                        <p>
                                                            Paper 3: Examining the Impact of Naira Redesign Policy on Retail Supply Chain in Nigeria: Case Study of Selected Retail Markets in Lagos
                                                      
                                                        </p>
                                                        
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Adetoyese Oguntimehin, Abdul-Azeez Ibraheem Forson, Alawa Segun John, Asenime Charles (All from Lagos State University)
                                                       </i>

                                                       <br><br>
                                                       
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Abdul Samed Muntaka<small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 11:45 - 12:45pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Sectoral Supply Chains</h3>
                                                        <br>
                                                        <p>
                                                        Paper 1: Pooled demand management in Ethiopian Public Hospital Supply Chains: Practices and Issues
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Biniam Tufa (Ministry of Health, Ethiopia)
                                                        </i>
                                                        
                                                        <br><br>
                                                        <p>
                                                        Paper 2: An Action Research Approach to exploring the impact of Electronic Logistics Management Information System (eLMIS) on the Pharmaceutical Supply Chain of Rwanda 
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Darius Uzabakiriho (Ministry of Health, Rwanda) 
                                                        </i>
                                                        <br><br>
                                                        <p>
                                                        Paper 3: Procurement Institutions and Essential Drug Supply in Low and Middle-Income Countries
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Lucy Xiaolu Wang (University of Massachusetts Amherst), Nahim Bin Zahur (Queen's University), Canada
                                                        </i>
                                                        <br><br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Abdul Samed Muntaka <small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 01:45 - 02:45pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Sectoral Supply Chains</h3><br>
                                                        <p>
                                                        Paper 1: Managing the Supply Chain Disruption of Essential Commodities Supply in Health care systems during Emergency. A Study of Lagos State, Nigeria
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Kenneth Ibiama (Federal Polytechnic of Oil and Gas, Nigeria), Victoria Adonye Ibiama (Gold Stable Limited), Nwankwoala Smart Chimaeze (Federal Polytechnic of Oil and Gas, Nigeria)
                                                        </i>
                                                        <br><br>
                                                        <p>
                                                        Paper 2: Role of Supply Chain Capabilities in Food Loss Reduction Along Cereal Supply Chains in Ghana 
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Leticia Antwi, Robert Aidoo, Fred Nimoh, Camillus Wongnaa Abawiera, Isaac Apike, Priscilla Agyemang (All from KNUST) Richard Bannor (University of Energy and Natural Resources)
                                                        </i>
                                                        <br> <br>
                                                        <p>
                                                        Paper 3: (When) Does Firm Resilience Benefit the Well-Being of Vulnerable Supply Chain Actors? Evidence from Women Entrepreneurs
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Dominic Essuman, Nathaniel Boso, Henry Ataburo, Priscilla Addo Asamany, Felicity Asiedu-Appiah (All from KNUST)
                                                        </i>
                                                        <br><br>
                                                        
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Leticia Antwi<small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 03:00 - 04:00pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold"> General Supply Chains</h3><br>
                                                        <p>
                                                        Paper 1: In Search of Operational Resilience: How and When Improvisation Matters


                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Dominic Essuman, Henry Ataburo, Listowel Owusu Appiah, Nathaniel Boso (All from KNUST), Emmanuel Kwabena Anin (Kumasi Technical University)
                                                        </i>
                                                        <br><br>
                                                        <p>
                                                        Paper 2: Big Data Capability and Supply Chain Resilience: The mediating effects of Supply Chain Visibility and Risk Management Strategy

                                                        </p> 
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Enoch Bulley, Francis Andoh - Baidoo, David Asamoah, Kwame Owusu Kwateng, John Serbe Marfo (All from KNUST)
                                                        </i><br><br>
                                                        <p>
                                                        Paper 3: The Impact of Supply Chain Integration on the Operational Performance of the Electricity Company of Ghana
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Esther Ntumy Lartey (Wisconsin International University College), Charles Edem Gidi, Godwin Ettornam
                                                        </i>
                                                        <br><br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Dominic Essuman <small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 04:15 - 05:15pm</span>
                                                            <h3>Panel Session</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Topic: Publishing in Top Journals in Operations and Supply Chain Management</h3><br>
                                                        <p>
                                                        Professor Wendy Tate, Co-Editor in Chief, Journal of Supply Chain Management. University of Tennessee, USA
                                                        </p><br>
                                                        <p>
                                                        Professor Constantin Blome, Co-Editor in Chief, International Journal of Operations and Production Management. Lancaster University Leipzig 
                                                        </p> <br>
                                                        <p>
                                                         Glenn Ritchie,Co-Editor in Chief, Journal of Business Logistics
                                                        </p>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-user"></i> Professor Adegoke Oke<small>/  Moderator</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            
                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 17:30 - 18:30</span>
                                                            <h3>PhD Dissertation Award Presentations </h3>
                                                        </div>
                                                        <br>
                                                        <p>
                                                        Assessing Cold Chain Logistics Performance, Capabilities and Food Losses      
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        David Antwi 
                                                        </i>
                                                        <br><br>
                                                        <p>
                                                        Supply Chain Leadership and Sustainability  
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Ishmael Acquah
                                                        </i>
                                                        <br><br>
                                                        <p>
                                                        Supply Chain Finance Adoption: Towards a Readiness Assessment Framework    
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Yasmine Elhenawy
                                                        </i>
                                                        <br><br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-user"></i> Dr. Samuel Fosso-Wamba  <small>/ Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>
                                        </ul>
                                    </div><!--confy-cmpt-details end-->
                                </div>
                                <!-- Afzelia 1  -->
                                <div class="tab-pane fade" id="1A1" role="tabpanel" aria-labelledby="Day-1-Afzelia-1">
                                   <div class="confy-cmpt-details">
                                        <ul>
                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 10:15 - 11:15am</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">General Supply Chains</h3>
                                                        <br>
                                                        <p>
                                                        Paper 1: Supply Chain Finance Mechanisms and Supply Chain Performance of Manufacturing Firms in Nairobi, Kenya                                                         </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Clinton Wanjohi, Jonathan Annan, Diana Ominde (all from Strathmore Business School)                                                        </i>
                                                      
                                                      
                                                        
                                                       
                                                        <br><br>
                                                        <p>
                                                            Paper 2: Service Quality as a Determinant for Passengers’ Satisfaction in Lagos State Focusing on Cowry Card

                                                                                                               
                                                        </p>
                                                      
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Ayobami Elegunde, Okunbanjo Olajide (All from Lagos State University)
                                                       </i>
                                                        <br><br>
                                                        <p>
                                                            Paper 3: Building Robust Supply Chains through Digitalization. The Role of IT-Enabled Dynamic Capabilities
                                                      
                                                        </p>
                                                        
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Caleb Kumi (KNUST), Francis Andoh-Baidoo (University of Texas Rio Grande Valley), David Asamoah, Emmanuel Quansah,  John Serbe Marfo (KNUST)
                                                       </i>

                                                       <br><br>
                                                       
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Caleb Kumi <small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 11:45 - 12:45pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">General Supply Chains</h3>
                                                        <br>
                                                        <p>
                                                        "Election Logistics in Nigeria and its Impact on Voter's Turnout 
"                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Abdulsobur Hassan, Abdulazeez Ibraheem Forson, Dada Oreoluwa Victoria (all from Lagos State University)                                                        </i>
                                                        
                                                        <br><br>
                                                        <p>
                                                        Paper 2: Strategies For Supply Chain Robustness: Lessons Learned From The Covid-19 Pandemic 
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Danie Nel (University of Pretoria)
                                                        </i>
                                                        <br><br>
                                                        <p>
                                                        Paper 3: Trade Logistics Performance of Landlocked Countries: Ethiopia in Focus
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Daniel Gelagay (Arsi University), Belay Lemesa (Arsi University) 
                                                        </i>
                                                        <br><br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Listowel Appiah <small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 01:45 - 02:45pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">General Supply Chains</h3><br>
                                                        <p>
                                                        Paper 1: Sustainable Supply Chain Management Practices and Sustainable Performance in the Ghana Manufacturing Industry: The Role of Dynamic Capabilities

                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Evelyn Asuah (University of Professional Studies), Daniel Agyapong (University of Cape Coast)
                                                        </i>
                                                        <br><br>
                                                        <p>
                                                        Paper 2: Developing Operational Resilience to Navigate Transportation Disruptions: The Role and Boundaries of Efficiency Priority
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Henry Ataburo (KNUST), Getrude Effah Ampong (KNUST), Dominic Essuman (University of Sheffield, Sheffield)
                                                        </i>
                                                        <br> <br>
                                                        <p>
                                                        Paper 3: Supply Chain Finance and Performance; The Mediating Role of Operational Resilience
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Isaac Apike (KNUST), Kwame Mireku, Abdul Samed Muntaka, Joseph Oscar Arkotey, Samuel Asante Gyamera, Leticia Adwoa Anima Antwi, Priscilla Agyemang
                                                        </i>
                                                        <br><br>
                                                        
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Henry Ataburo<small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 03:00 - 04:00pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">The Logistics Managers Index Session</h3><br>
                                                        <p>
                                                        The Logistics Managers Index


                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Dale Rogers (Arizona State University), Emmanuel Quansah (KNUST), Nat Boso (KNUST), Zac Rogers (Colorado State University),  Ron Lembke (University of Nevada, Reno) 
                                                        </i>
                                                        <br><br>
                                                        <p>
                                                        Ghana LMI Q2 2023 Sneak Peak
                                                        </p> 
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Emmanuel Quansah, Nat Boso,  Abdul Muntaka (KNUST)
                                                        </i><br><br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Abdul Muntaka  <small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>
                                        </ul>
                                    </div><!--confy-cmpt-details end-->
                                </div>
                                <!-- Afzelia 2  -->
                                <div class="tab-pane fade" id="1A2" role="tabpanel" aria-labelledby="Day-1-Afzelia-2">
                                    <div class="confy-cmpt-details">
                                    <ul>
                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 10:15 - 11:15am</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Africa's Supply Chains and the Future of Work</h3>
                                                        <br>
                                                        <p>
                                                          Paper 1: Do Cognitive Tests Predict the Ability to Self-Learn?

                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Abhilash Mishra (Equitech Futures, University of Chicago), Andrew Kimani, Clinton Manoti, Essosolim Apollinaire (All from Equitech Futures)
                                                        </i>
                                                      
                                                      
                                                        
                                                       
                                                        <br><br>
                                                        <p>
                                                         Paper 2: Defining Skills Needs for Supply Chain Employability

                                                                                                               
                                                        </p>
                                                      
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Adebayo Adekola (UNICEF), Clinton de Souza, Eugene Coeztee, Shelby Kemper, Arnold Handal, Addis Demissie
                                                       </i>
                                                        <br><br>
                                                        <p>
                                                        Paper 3: Effect of Freight Intensity on Firm Performance: The Mediating Role of Operational Capability
                                                      
                                                        </p>
                                                        
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Bonaventure Dery, Abdul S. Muntaka,,  Matilda Owusu-Bio (All from KNUST)
                                                       </i>

                                                       <br><br>
                                                       
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i>John Serbe Marfo <small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 11:45 - 12:45pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Africa's Supply Chains and the Future of Work </h3>
                                                        <br>
                                                        <p>
                                                        Paper 1: Exploring Driver-Manager Relationships: A Generic Qualitative Study of South African Truck Drivers
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Kelvinne Mocke, Mildred Masego (All from University of Pretoria) 
                                                        </i>
                                                        
                                                        <br><br>
                                                        <p>
                                                        Paper 2: Food Supply Chains, Street Food and Employment in Mombasa County, Kenya

                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Mary Kibune (St. Paul's University) 
                                                        </i>
                                                        <br><br>
                                                        <p>
                                                        Paper 3: The Bright and Dark side of International Academic Partnerships in Low- and Middle-Income Countries
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Mohammad Moshtari (Tampere University) 
                                                        </i>
                                                        <br><br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Kelvinne Mocke <small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 01:45 - 02:45pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Emerging Issues in Global Supply Chains </h3><br>
                                                        <p>
                                                        Paper 1: Improving Medical Oxygen Supply of the Ghana Health Service during the COVID-19 Pandemic


                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Ebo Hammond, Kafui Gebe, Robert Suapim (All from Ghana Health Service) 
                                                        </i>
                                                        <br><br>
                                                        <p>
                                                        Paper 2: A Resource Orchestration Perspective of the Link Between Environmental Orientation and Green Purchasing: Empirical Evidence from an Emerging Economy 
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Emmanuel Anin (Kumasi Technical University), Henry Ataburo (KNUST), Getrude Effah Ampong (KNUST), Nana Dwomoh Osei Bempah (Conventry University)
                                                        </i>
                                                        <br> <br>
                                                        <p>
                                                        Paper 3: Impact of Supply Chain Management Practices on Operational Performance of Obuasi Goldfields During the COVID-19 Era
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Esther Lartey (Wisconsin International University College), Charles Edem Gidi, Mavis Offei 
                                                        </i>
                                                        <br><br>
                                                        
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Emmanuel Anin<small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 03:00 - 04:00pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Emerging Issues in Global Supply Chains </h3><br>
                                                        <p>
                                                        Paper 1: An Exploration of Social Sustainability Interventions and Paradoxical Tensions  in Sustainable Warehousing: An Emerging Market Perspective

                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Assilah Agigi (University of Pretoria), Hanista Kitching, Luke Kruger, Anzelle Meyer 
                                                        </i>
                                                        <br><br>
                                                        <p>
                                                        Paper 2: How Does Digital Transformation of Supply Chains Enhance Supply Chain Performance? The Role of Supply Chain Knowledge Management Capabilities 
                                                        </p> 
                                                        <br><br>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Benjamin Agyei-Owusu, David Asamoah, Dr. Emmanuel Quansah (All from KNUST), Francis Andoh-Baidoo (University of Texas Rio Grande Valley), 
                                                        </i><br><br>

                                                        <p>
                                                        Paper 3: The Internal and External Predictive Factors of Humanitarian Logistics Performance: The Case of Ethiopian Public Health Emergency Management 
                                                        </p> 
                                                        <br><br>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Biniam Tufa (Ministry of Health)
                                                        </i><br><br>

                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Assilah Agigi  <small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>
                                        </ul>
                                    </div><!--confy-cmpt-details end-->
                                </div>
                            </div>
                        </div>
                        <!-- Day 2 Tab  -->
                        <div class="tab-pane fade" id="day2" role="tabpanel" aria-labelledby="day-2">
                            <!-- Day 2 Tab Lists  -->
                            <ul class="nav nav-tabs" id="day2TabList" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="cf-tabb1" data-toggle="tab" href="#2All" role="tab" aria-controls="ccconfy1" aria-selected="true">All Halls</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="cf-tabb1" data-toggle="tab" href="#2C" role="tab" aria-controls="ccconfy1" aria-selected="true">Cedar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="cf-tabb1" data-toggle="tab" href="#2A1" role="tab" aria-controls="ccconfy1" aria-selected="true">Afzelia 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="cf-tabb1" data-toggle="tab" href="#2A2" role="tab" aria-controls="ccconfy1" aria-selected="true">Afzelia 2</a>
                                </li>
                            </ul><!--tabs-list end-->

                            <!-- Day 2 Tab Content  -->
                            <div class="tab-content" id="Day2TabContent">
                                <!-- All Halls  -->
                                <div class="tab-pane fade show active" id="2All" role="tabpanel" aria-labelledby="Day-2-All-Halls">
                                    <div class="confy-cmpt-details">
                                        <ul>
                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head b-none ">
                                                            <span><i class="fa fa-clock-o"></i> 08:00 - 9:00am</span>
                                                            <h3>Registration and Coffee</h3>
                                                            
                                                        </div>
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head b-none ">
                                                            <span><i class="fa fa-clock-o"></i> 09:00 - 10:00am</span>
                                                            <h3>Welcome and Keynotes</h3> <a href="https://youtu.be/zl5cnWGISf8" data-lity>Watch Video</a> 
                                                            <p style="margin-top: 10px;">Keynotes</p>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Gayani de Alwis<small>/   Global Chairperson, Women in Logistics & Transport</small></h3>
                                                        </div>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Dr. Hau Lee<small>/  Thoma Professor of Operations, Information and Technology at the Stanford Graduate School of Business      </small></h3>
                                                        </div>
                                                        </div>
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>


                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head b-none ">
                                                            <span><i class="fa fa-clock-o"></i> 10:15 - 11:15am</span>
                                                            <h3>Parallel Sessions</h3>
                                                            <p style="margin-top: 20px; margin-bottom: 20px;">
                                                        Details of this parallel session are available on the individual room pages. Kindly click on Cedar, Afzelia1 or Afzelia2 atop this schedule to see more.
                                                        </p>
                                                            
                                                        </div>
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head b-none ">
                                                            <span><i class="fa fa-clock-o"></i> 11:45 - 12:45pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            <p style="margin-top: 20px; margin-bottom: 20px;">
                                                        Details of this parallel session are available on the individual room pages. Kindly click on Cedar, Afzelia1 or Afzelia2 atop this schedule to see more.
                                                        </p>
                                                            
                                                        </div>
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head b-none ">
                                                            <span><i class="fa fa-clock-o"></i> 12:45 - 01:45pm</span>
                                                            <h3>Lunch</h3>
                                                            <p style="margin-top: 20px; margin-bottom: 20px;">
                                                            Speaker: Patrick Afari, General Manager, Supply Chain and General Services, MTN Ghana                                                        </p>
                                                            
                                                        </div>
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head b-none ">
                                                            <span><i class="fa fa-clock-o"></i> 01:45 - 02:45pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            <p style="margin-top: 20px; margin-bottom: 20px;">
                                                        Details of this parallel session are available on the individual room pages. Kindly click on Cedar, Afzelia1 or Afzelia2 atop this schedule to see more.
                                                        </p>
                                                            
                                                        </div>
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>


                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head b-none ">
                                                            <span><i class="fa fa-clock-o"></i> 03:00 - 04:00pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            <p style="margin-top: 20px; margin-bottom: 20px;">
                                                        Details of this parallel session are available on the individual room pages. Kindly click on Cedar, Afzelia1 or Afzelia2 atop this schedule to see more.
                                                        </p>
                                                            
                                                        </div>
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 04:15 - 05:15pm</span>
                                                            <h3>Panel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Panel 1: Local Manufacturing of Medicines in Africa for Achieving Universal Health Coverage; Leveraging Research to Leapfrog Progress in Nigeria </h3><br>
                                                        <h3 class="font-weight-bold">Panel 2: The Impact of the Ghana Integrated Logistics Management Information System (GhiLMIS) on Healthcare Delivery</h3>

                                                        <p style="margin-bottom: 10px;">
                                                        More details of this panel session are available on the individual room pages. Kindly click on Cedar or Afzelia1 atop this schedule to see more.
                                                        </p> <br><br>

                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Moderators:<br> <strong>Azuka Okeke</strong>, Chief Executive Officer at Africa Resource Center for Excellence in Supply Chain Management <br><br>
                                                            <strong>John Serbe Marfo </strong>, Lecturer, Department of Supply Chain and Information Systems at the KNUST School of Business
                                                        </h3>
                                                        </div>
                                                        
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head b-none ">
                                                            <span><i class="fa fa-clock-o"></i> 6:45pm</span>
                                                            <h3>Conference Dinner </h3>
                                                            
                                                        </div>
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>
                                        </ul>
                                    </div><!--confy-cmpt-details end-->
                                </div>

                                 <!-- Cedar  -->
                                 <div class="tab-pane fade" id="2C" role="tabpanel" aria-labelledby="Day-2-Cedar">
                                    <div class="confy-cmpt-details">
                                        <ul>
                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 09:00 - 10:00am</span>
                                                            <h3>Welcome and  Keynotes</h3> <a href="https://youtu.be/zl5cnWGISf8" data-lity>Watch Video</a> 
                                                            
                                                        </div>
                                                
                                                        <p style="margin-top: 10px;">Keynotes</p>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Gayani de Alwis<small>/   Global Chairperson, Women in Logistics & Transport</small></h3>
                                                        </div>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Dr. Hau Lee<small>/  Thoma Professor of Operations, Information and Technology at the Stanford Graduate School of Business      </small></h3>
                                                        </div>
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 10:15 - 11:15am</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Practitioner and Policy Discourse on African Supply Chains
                                                           </h3>
                                                        <br>
                                                        <p>
                                                            Paper 1:  Just In Time Logistics Management of International Road Cargo Delivery: Lagos – Ghana Road experience
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Abiola Fagbenro, Ibraheem Forson Abdul-Azeez,  Ugochukwu Thadus Nwakowu,  Oshikomaiya Christy Kemi, Olaikitan Oreoluwa,  Akinmolayan Grace Funke (All from Lagos State University)
                                                        </i>
                                                 
                                                        <br><br>
                                                        <p>
                                                            Paper 2: African Continental Free Trade Area – The role of Logistics in Leveraging the Potential of Regional Value Chains
                                                                                                               
                                                        </p>
                                                      
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Benjamin Nitsche (Berlin University of Technology), Henry Kofi Mensah (KNUST)
                                                       </i>
                                                        <br><br>
                                                        <p>
                                                            Paper 3: The African Research Cluster on Logistics and Supply Chain (ARCLoS) – Opportunities for Cross-Country Research Exchange and Cooperation
                                                      
                                                        </p>
                                                        
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Benjamin Nitsche (Berlin University of Technology) 
                                                       </i>

                                                       <br><br>
                                                       
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Benjamin Nitsche<small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 11:45 - 12:45pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Practitioner and Policy Discourse on African Supply Chains
                                                          </h3>
                                                        <br>
                                                        <p>
                                                        Paper 1: Supply Chain AI Realized Future (SCARF): Patient-Centric Healthcare
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Dale Rogers (Arizona State University), Emmanuel Quansah (KNUST), Nat Boso (KNUST), Abdul Samed Muntaka (KNUST), Mani Janikiram (Intel), Emmanuel Mfum-Mensah (KNUST), Pasty Asamoah (KNUST), Daniel Zopke (KNUST), Sadicka Gyanwah Sessah (KNUST), Giuliana Walker (Chemonics International), Jamey, Butcher (Chemonics International) 
                                                        </i>
                                                        
                                                        <br><br>
                                                        <p>
                                                        Paper 2: Cold Chain Logistics Performance, Capabilities and Food Losses 
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        David Antwi (KNUST), Robert Aidoo, John Frimpong Manso, James Osei Mensah and Seth Nkrumah
                                                        </i>
                                                        <br><br>
                                                        <p>
                                                        Paper 3: Online National Warehouse Stock Status Dashboard Utilization to Optimize Health Supply Chain Service Delivery in Uganda
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Shamin Nakadi (USAID), Miti Joel, Linacy Nampa, Denis Okidi, Henry Komakech, Sandra Magona, Henry Oundo, Kisembo Julius, Daniel Mawerere, Martin Oteba, Martha Ajulong, Morries Seru, Eric Lugada
                                                        </i>
                                                        <br><br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Abdul Samed Muntaka <small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 01:45 - 02:45pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Gender Panel</h3><br>
                                                        <p>
                                                        Empowering Women for Inclusive Growth and Sustainability
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Panelists: Izin Akioya, CEO, Voice Inc and Co-founder at Supply Chain Africa Pamela Awuor Steele, Director for Pamela Steele Associates (PSA), Gayani de Alwis, Global Chairperson, Women in Logistics & Transport Azuka Okeke, CEO, Africa Resource Center for Excellence in Supply Chain Management
                                                         Hajia Maria Adamu-Zibo, Managing Director, Federated Commodities, Ghana.
                                                        </i>
                                                        <br><br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-user"></i> Matilda Kokui Owusu-Bio<small>/  Moderator</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 03:00 - 04:00pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Practitioner and Policy Discourse on African Supply Chains</h3><br>
                                                        <p>
                                                        Paper 1: Assessment of the Availability and Management of Commodities for Hypertensive Disorders in Pregnancy (HDP) in Ghana’s public sector

                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Deogratius Kimera (Chemonics GHSC-PSM Ghana), Damaris Forson (GHSC-PSM, Ghana), Emmanuel Menyah (GHSC-PSM, Ghana), Abdul-Fatahi Adam (GHSC-PSM, Ghana), Frank Opare (GHSC-PSM, Ghana), Mary Ann Tanlongo (GHSC-PSM, Ghana), Rebecca Bronheim (GHSC-PSM, Headquarters, U.S.A), Siobhan Vega (GHSC-PSM, Headquarters, U.S.A), Tamah Kamlem (GHSC-PSM, Headquarters, U.S.A), Brittany Stollar (GHSC-PSM, Headquarters, U.S.A), Charlotte Stein (GHSC-PSM, Headquarters, U.S.A.), Kofi Issah (Ghana Health Service), Claudette Diogo (Ghana Health Service) 
                                                        </i>
                                                        <br><br>
                                                        <p>
                                                        Paper 2: An Enabling Methodology for Achieving Logistics and Supply Chain Efficiency in Africa

                                                        </p> 
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Ekomenzoge Metuge (Projex British Investment Group) 
                                                        </i><br><br>
                                                        <p>
                                                        Paper 3: Supply Chain Assessment of Maternal, Newborn and Child Health Commodities in Ghana’s Private Sector: Findings from a Mixed-Method Assessment 
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Emmanuel Menyah (GHSC-PSM), Daniel Owusu-Afranie (GHSC-PSM, Ghana), Damaris Forson (GHSC-PSM, Ghana), Deogratius Kimera (GHSC-PSM, Ghana), Abdul-Fatahi Adam (GHSC-PSM, Ghana), Siobhan Vega (GHSC-PSM, Headquarters, U.S.A.), Michael Cohen (GHSC-PSM Headquarters, U.S.A.), Claudette Diogo (Ghana Health Service)
                                                        </i>
                                                        <br><br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Deogratius Kimera <small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 04:15 - 05:15pm</span>
                                                            <h3>Panel Session</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Topic: Local Manufacturing of Medicines in Africa for Achieving Universal Health Coverage; Leveraging Research to Leapfrog Progress in Nigeria </h3><br>
                                                        <p>
                                                        Mr Frank Muonemeh, Executive Secretary/CEO Pharmaceutical Group of Manufacturers (PMGMAN), Nigeria
                                                        </p><br>
                                                        <p>
                                                       Pharm Abdul-Aziz Mohammed, Executive Secretary/CEO of Yobe State Drugs and Medical Consumables  Management Agency (YODMA), Nigeria
                                                        </p> <br>
                                                        <p>
                                                        Mr Raphael  Ajayi, Head Supply Chain, Fidson Healthcare PLC
                                                        </p> <br>
                                                        <p>
                                                        Dr Ibraheem Forson Abdul Azeez, School of Transport and Logistics, Lagos State University, Nigeria
                                                        </p> <br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-user"></i> Azuka Okeke, CEO of Africa Resource Center for Excellence in Supply Chain Management (ARC_ESM)<small>/  Moderator</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 6:45pm</span>
                                                            <h3>Conference Dinner </h3>
                                                        </div>
                                                        <br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Hon. Kwaku Agyeman-Manu, Minister of Health for Ghana <small>/ Speaker</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>
                                        </ul>
                                    </div><!--confy-cmpt-details end-->
                                 </div>

                                 <!-- Afzelia 1  -->
                                 <div class="tab-pane fade" id="2A1" role="tabpanel" aria-labelledby="Day-2-Afzelia-1">
                                    <div class="confy-cmpt-details">
                                        <ul>
                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 10:15 - 11:15am</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">General Supply Chains</h3>
                                                        <p>
                                                            Paper 1: Organizational Culture Fit and Supply Chain Integration: Does Trust and Commitment Matter in The Grocery Industry?
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Isaac Effah, Yahaya Yusif (All from University of Central Lancashire)
                                                        </i>
                                                      
                                                        <br><br>
                                                        <p>
                                                            Paper 2: Supplier Relationship Management and Innovation Performance: A Moderated Mediation Analysis of Absorptive Capacity and Supply Chain Agility  
                                                                                                               
                                                        </p>
                                                      
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Ishmael Acquah, Caleb Amankwaa Kumi, Joseph Akyeh, Priscilla Agyemang (All from KNUST)
                                                       </i>
                                                        <br><br>
                                                        <p>
                                                            Paper 3: Linking Healthcare Provider Responses to Patient Satisfaction: An Integration of Dynamic Capability, and Systems Complexity Perspectives
                                                      
                                                        </p>
                                                        
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Jacob Kuutuome (KNUST)
                                                       </i>

                                                       <br><br>
                                                       
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Jacob Kuutuome<small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 11:45 - 12:45pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">General Supply Chains</h3>
                                                        <br>
                                                        <p>
                                                        Paper 1: The Roles Of Buffering and Bridging Strategies in Building Resilient Supply Chains: Disaggregated and Contingency Perspectives
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        James Aditchere (KNUST), Nathaniel Boso (KNUST),  Dominic Essuman (University of Sheffield), Henry Ataburo (KNUST)
                                                        </i>
                                                        
                                                        <br><br>
                                                        <p>
                                                        Paper 2: Examining Capacity Constraints and Interventions to Reduce Post-Harvest Losses in Cassava Supply Chain                                                         </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        John Frimpong, Jacob Kuutuome, Issah Ofori (All from KNUST)
                                                        </i>
                                                        <br><br>
                                                        <p>
                                                        Paper 3:Assessing Agricultural Insurance Demand-Side and Supply-Side Barriers Affecting Food Sustainability in Nigeria 
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Kehinde Abiodun, Sunday Stephen Ajemunigbohun (both from Lagos State University)                                                        </i>
                                                        <br><br>

                                                        <p>
                                                        Paper 4: Effect of Inventory Management Techniques on Supply Chain Performance: A Case of Kenya Medical Supplies Authority (KEMSA)                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;"></i>
                                                        Lenah Ngugi (Kenya Medical Supplies Authority)                                                         <br><br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> John Frimpong  <small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 01:45 - 02:45pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold"> General Supply Chains</h3><br>
                                                        <p>
                                                        Paper 1: Cold Chain Logistics Management For Local Fish Production in Lagos: Epe Fish Market
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Olaitan Oladipo, Asenime Charles, Fagbenro Abiola (All from Lagos State University) 

                                                        </i>
                                                        <br><br>
                                                        <p>
                                                        Paper 2: Relationships between Central Procurement Management Practices and Supply Chain Performance of Public Sector; An Empirical Study
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Olawale Hammed, Oloyede Raheeml, Oyelami Shadiat Oyeshola (All from Lagos State University)
                                                        </i>
                                                        <br> <br>
                                                        <p>
                                                        Paper 3: Contract as a Strategic Option for Reducing Supplier Opportunism in Public Sector Procurement: Analysis of Contingency Factors 
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Richard Glavee-Geo (Norwegian University of Science and Technology), Rebecca Glavee-Geo, Renger Kanani (University of Dar es salaam), Umar Burki (South-Eastern Norway), Arnt Buvik (Molde University)
                                                        </i>
                                                        <br><br>
                                                        
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> John Manso Frimpong <small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 03:00 - 04:00pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Emerging Issues in Global Supply Chains </h3><br>
                                                        <p>
                                                        Paper 1: IDigital Transformation of Supply Chain Networks Into Ecosystems: An Integrative Capabilities Perspective

                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Evans Amoah, David Asamoah, Kwame Owusu Kwateng, John Serbe Marfo (All from KNUST), Prof. Francis Andoh-Baidoo (Texas State University Rio Grande)
                                                        </i>
                                                        <br><br>
                                                        <p>
                                                        Paper 2:  The Mediating Effect of Operational Resilience in the Relationship Between Digitalisation and Sustainable Performance of FMCG Firms in Nairobi County

                                                        </p> 
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Georginah Wambua (Strathmore University), Jonathan Annan (Strathmore University)
                                                        </i><br><br>
                                                        <p>
                                                        Paper 3: Global Value Chains, Job Creation, and Job Destruction among Manufacturing Firms in South Africa
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Gideon Ndubuisi (Delft University), Solomon Owusu (Oxford Martin School University of Oxford)
                                                        </i>
                                                        <br><br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Evans Amoah <small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 04:15 - 05:15pm</span>
                                                            <h3>Panel Session</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">The Impact of the Ghana Integrated Logistics Management Information System (GhiLMIS) on Healthcare Delivery</h3><br>
                                                        <p>
                                                        Mrs Araba Kudiabor, Director for the Supplies, Stores and Drug Management Division, GHS
                                                        </p><br>
                                                        <p>
                                                        Bernard Asamany Deputy Director Logistics, SSDM, GHS  
                                                        </p><br>
                                                        <p>
                                                        Catherine Amah; Head of LMU/SSDM, GHS 
                                                        </p><br>
                                                        <p>
                                                        Adolf Antwi; Subject Matter Expert S4D 
                                                        </p><br>
                                                        <p>
                                                        Deogratius Kimera, Country Director at Chemonics International 
                                                        </p><br>
                                                        <p>
                                                        Bismark Tabi Amponsah, Ashanti RMS, GHS
                                                        </p> <br>
                                                        <p>
                                                        Nana Frema Boateng, Sunyani Municipal Hospital
                                                        </p>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-user"></i> John Serbe Marfo <small>/  Moderator</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            
                                            
                                        </ul>
                                    </div><!--confy-cmpt-details end-->
                                </div>
                                 <!-- Afzelia 2  -->
                                 <div class="tab-pane fade" id="2A2" role="tabpanel" aria-labelledby="Day-2-Afzelia-2">
                                     <div class="confy-cmpt-details">
                                        <ul>
                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 10:15 - 11:15am</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Emerging Issues in Global Supply Chains </h3>
                                                        <br>
                                                        <p>
                                                            Paper 1: Evaluation of Digital Readiness of Manufacturing companies in Nigeria: An Exploratory Analysis
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Ike Ehie (Kansas State University) Ejem A. Ejem (Federal University of Technology)
                                                        </i>
                                                       
                                                        <br><br>
                                                        <p>
                                                            Paper 2: Leveraging Resilient and Sustainable Capabilities to Enhance Strategic Performance Under Varying Conditions of Competitive Priorities
                                                                                                               
                                                        </p>
                                                      
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Henry Ataburo (KNUST), Dominic Essuman (The University of Sheffield); Nathaniel Boso (KNUST) 
                                                       </i>
                                                        <br><br>
                                                        <p>
                                                            Paper 3: Decoupling Strategy, SME Environmental Performance, and the Boundary Condition Roles of Environmental Pressures: Evidence from Ghana
                                                      
                                                        </p>
                                                        
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        William Afloe  (KNUST)
                                                       </i>

                                                       <br><br>
                                                       
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Ike Ehie <small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 11:45 - 12:45pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Emerging Issues in Global Supply Chains</h3>
                                                        <br>
                                                        <p>
                                                        Paper 1: When Does it Pay to Invest in Green Process Innovations in Low-Resource Contexts?
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Listowel Appiah (KNUST), Cosmos Benjamin Osei (KNUST), Dominic Essuman (Sheffield University), Jonathan Annan (Strathmore University), Nathaniel Boso (KNUST)
                                                        </i>
                                                        
                                                        <br><br>
                                                        <p>
                                                        Paper 2: Developing Economy SMEs’ Deployment of Digital Transforming Resources: Does Top Executive Global Orientation Matter?
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Louisa Bosu (KNUST), Emmanuel Kwabena Anin (KNUST), Dominic Essuman (The University of Sheffield) 
                                                        </i>
                                                        <br><br>
                                                        <p>
                                                        Paper 3: Industrial Symbiosis As a Leverage Against Climate Coloniality for Smallholder Farmers?
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Maxime Bouillon (Windesheim University of Applied Sciences)
                                                        </i>
                                                        <br><br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Listowel Appiah <small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 01:45 - 02:45pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Emerging Issues in Global Supply Chains </h3><br>
                                                        <p>
                                                        Paper 1:A Qualitative Study of the Perception of Transport Users in the Development and Implementation of Mobility-as-a-Service (MaaS)
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Ogochukwu Ugboma (Lagos State University) 
                                                        </i>
                                                        <br><br>
                                                        <p>
                                                        Paper 2: A Digital Twin Approach to Supply Chains Optimization: A Quantum Zero Effect Perspective

                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Pasty Asamoah, John Serbe Marfo, Abdul Samed Muntaka, Matilda Kokui Owusu-Bio, John Frimpong Manso (All from KNUST)
                                                        </i>
                                                        <br> <br>
                                                        <p>
                                                        Paper 3: Digital Transformation And Operational Performance: The Role of Innovative Capabilities
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Peter Darko (KNUST)
                                                        </i>
                                                        <br><br>
                                                        
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Pasty Asamoah<small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 03:00 - 04:00pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Emerging Issues in Global Supply Chains</h3><br>
                                                        <p>
                                                        Paper 1: A Dual Commodity Supply Chain Finance Among Cash Constrained-Farmers: The case of Cotton and Corn in Benin


                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Rachad Bani Samari (The American University in Cairo), Sherwat Elwan Ibrahim (The American University in Cairo (AUC)
                                                        </i>
                                                        <br><br>
                                                        <p>
                                                        Paper 2: Bulk Aid Shipment to Africa - A Legal Perspective 

                                                        </p> 
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Rachael Eben (University of Buea) 
                                                        </i><br><br>
                                                        <p>
                                                        Paper 3: The Influence of Sepcial Groups' Financial Support on the Supply of Goods to Governmental Organizations in Tabora Region, Tanzania
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Richard Nkunda (Tanzania Public Service College) 
                                                        </i>
                                                        <br><br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i>Rachael Eben <small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>                                       

                                            
                                            
                                        </ul>
                                     </div><!--confy-cmpt-details end-->
                                    
                                </div>
                            </div>
                        </div>

                         <!-- Day 3 Tab  -->
                         <div class="tab-pane fade" id="day3" role="tabpanel" aria-labelledby="confery-tab4">
                            <ul class="nav nav-tabs" id="day3TabList" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#3All" role="tab" aria-controls="coonfy3" aria-selected="false"> All Halls </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#3C" role="tab" aria-controls="coonfy3" aria-selected="false"> Cedar </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#3A1" role="tab" aria-controls="coonfy3" aria-selected="false"> Afzelia 1 </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#3A2" role="tab" aria-controls="coonfy3" aria-selected="false"> Afzelia 2 </a>
                                </li>
                            </ul><!--tabs-list end-->
                            <div class="tab-content" id="Day3TabContent">
                                   <!-- All Halls -->
                                <div class="tab-pane fade show active" id="3All" role="tabpanel" aria-labelledby="Day-3-All-Halls">
                                <div class="confy-cmpt-details">
                                        <ul>
                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head b-none ">
                                                            <span><i class="fa fa-clock-o"></i> 08:00 - 9:00am</span>
                                                            <h3>Registration and Coffee</h3>
                                                            
                                                        </div>
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 09:00 - 10:00am</span>
                                                            <h3>Welcome and  Keynote</h3> <a href="https://youtu.be/x9WN2vU63ik" data-lity>Watch Video</a> 
                                                            
                                                        </div>
                                                        <p style="margin-top: 10px;"> Keynote</p>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Lebogang Letsoalo<small>/  Founder and CEO, Sincpoint </small></h3>
                                                        </div>
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>


                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head b-none ">
                                                            <span><i class="fa fa-clock-o"></i> 10:15 - 11:15am</span>
                                                            <h3>Parallel Sessions</h3>
                                                            <p style="margin-top: 20px; margin-bottom: 20px;">
                                                        Details of this parallel session are available on the individual room pages. Kindly click on Cedar, Afzelia1 or Afzelia2 atop this schedule to see more.
                                                        </p>
                                                            
                                                        </div>
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head b-none ">
                                                            <span><i class="fa fa-clock-o"></i> 11:45 - 12:45pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            <p style="margin-top: 20px; margin-bottom: 20px;">
                                                        Details of this parallel session are available on the individual room pages. Kindly click on Cedar, Afzelia1 or Afzelia2 atop this schedule to see more.
                                                        </p>
                                                            
                                                        </div>
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head b-none ">
                                                            <span><i class="fa fa-clock-o"></i> 12:45pm - 1:45pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            <p style="margin-top: 20px; margin-bottom: 20px;">
                                                        Details of this parallel session are available on the individual room pages. Kindly click on Cedar, Afzelia1 or Afzelia2 atop this schedule to see more.
                                                        </p>
                                                            
                                                        </div>
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                             <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 1:45pm - 2:45pm</span>
                                                            <h3>Lunch & Close of Conference</h3>
                                                            
                                                        </div>
                                                       
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i>  Jeanne de Crepy,  <small>/ Project Manager, Supply Chain, United Nations World Food Programme</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                        </ul>
                                    </div><!--confy-cmpt-details end-->
                                    
                                </div>
                                     <!-- Cedar  -->
                                <div class="tab-pane fade" id="3C" role="tabpanel" aria-labelledby="Day-3-Cedar">
                                <div class="confy-cmpt-details">
                                        <ul>
                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 09:00 - 10:00am</span>
                                                            <h3>Welcome and  Keynote</h3> <a href="https://youtu.be/x9WN2vU63ik" data-lity>Watch Video</a> 
                                                            
                                                        </div>

                                                        <p style="margin-top: 10px;">Keynote</p>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Lebogang Letsoalo<small>/  Founder and CEO, Sincpoint </small></h3>
                                                        </div>
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 10:15 - 11:15am</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">General Sessions - Literature Review
                                                           </h3>
                                                        <br>
                                                        <p>
                                                            Paper 1:  Exploring the Evolution of Supply Chain Research in BRICS Economies: A Comparative Study Utilizing Cluster Analysis
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Maicom Brandao (Federal University of Sao Carlos), Moacir Godinho-Filho (EM Normandie Business School and Federal University of Sao Carlos) 
                                                        </i>
                                                 
                                                        <br><br>
                                                        <p>
                                                            Paper 2: From Logistics to Resilience: Enhancing Supply Chains in Humanitarian and Disaster Response in the Lake Chad Region
                                                                                                               
                                                        </p>
                                                      
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Obasesam Okoi (University of St Thomas) 
                                                       </i>
                                                        <br><br>
                                                        <p>
                                                            Paper 3: Supply Chain Integration (SCI) and Performance in the Manufacturing Sector in Emerging & Developing Economies (EDEs): A Systematic Review & Research Agenda
                                                        </p>
                                                        
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Goitom Baisa, Ben Matellini, Ian Jenkinson, and Chia-Hsun Chang (All from Liverpool John Moores University) 
 
                                                       </i>

                                                       <br><br>
                                                       
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Priscilla Addo Asamany<small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 11:45 - 12:45pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">General Sessions - Literature Review
                                                          </h3>
                                                        <br>
                                                        <p>
                                                        Paper 1: Learnings from COVID-19 Pandemic to Better Prepare for the Next Pandemic: Focus on Skills for Equitable Access to Products 
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Adebayo Adekola (UNICEF) 
                                                        </i>
                                                        
                                                        <br><br>
                                                        <p>
                                                        Paper 2: How Future Proof is the Definitions of Supply Chain Finance (SCF)? 
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Jan Jansen (Hogeschool van Arnhem Nijmegen)
                                                        </i>
                                                        <br><br>
                                                        <p>
                                                        Paper 3: Supply Chain Finance and Performance; a Bibliometric and Content Analysis
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Isaac Apike, Kwame Mireku, Joseph Akadeagre Agana, Abdul Samed Muntaka, Samuel Asante Gyamera, Joseph Oscar Akortey (All from KNUST)
                                                        </i>
                                                        <br><br>
                                                        <p>
                                                       Paper 4: Impact of the Russia-Ukraine War on the Food Supply Chain in Africa
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Joseph Tinarwo (Great Zimbabwe University), Suresh Chandra Babu
                                                        </i>
                                                        <br><br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Isaac Apike  <small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 12:45 - 01:45pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Invited Session: Research Translation: Examples from the CARISCA Innovations Lab</h3><br>
                                                        <p style="font-weight: 600;">
                                                        Team Arepo 
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        (Machele Alhassan Ahmed, Tawfiq Abubakar, Toufiq Musah- presenter and team lead)
                                                        </i>
                                                        <br><br>

                                                        <p style="font-weight: 600;">
                                                        Team Well-fed 
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        (Yaa Dufie Yamoah-presenter and team lead, Theresah Serwaa Frimpong Prince Opoku Adusei) 
                                                        </i>
                                                        <br><br>

                                                        <p style="font-weight: 600;">
                                                        Team Signals  
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Samuel Kum-presenter, Agyemang Duah Collins, Eugene Amoah-team lead
                                                        </i>
                                                        <br><br>

                                                        <p style="font-weight: 600;">
                                                        Team Cleeve 
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Obed Oppong Gyamfi, Boafo Emmanuel-team lead, Tetteh Christabel Naa Komley Benjamina Boampensem-presenter
                                                        </i>
                                                        <br><br>
                                                        <p style="font-weight: 600;">
                                                        Team Gigglet    
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Joshua Addai Amoah-team lead and presenter , Andrews Osei Agyemang, Maame Dentu
                                                        </i>
                                                        <br><br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-user"></i>  John Serbe Marfo <small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            
                                        </ul>
                                    </div><!--confy-cmpt-details end-->
                                </div>
                                     <!-- Afzelia 1  -->
                                <div class="tab-pane fade" id="3A1" role="tabpanel" aria-labelledby="Day-3-Afzelia-1">
                                    <div class="confy-cmpt-details">
                                        <ul>
                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 10:15 - 11:15am</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Sectoral Supply Chains
                                                           </h3>
                                                        <br>
                                                        <p>
                                                            Paper 1:  Developing a Medicine Access Index (MAI) of Pharmaceutical Companies in Ghana - A pilot study

                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Priscilla Mante, Nana Ofori Adomako (All from KNUST)    
                                                        </i>
                                                 
                                                        <br><br>
                                                        <p>
                                                            Paper 2: Logistics Performance in Healthcare Facilities: The Role of Firm's Orientations
                                                                                                               
                                                        </p>
                                                      
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Sheila Namagembe (Makerere University), Beatrice Nyakaishiki, Mbago Musa, Nazziwa Hajarah,Nabiira Nantongo
                                                       </i>
                                                        <br><br>
                                                        <p>
                                                            Paper 3:Burnout of Traffic Managers and Its Effect on Road Safety: Evidence From Lagos State Traffic Management Authority, Lagos State, Nigeria 
                                                        </p>
                                                        
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Olayinka Sholesi, Ibraheem Abdul-Azeez (All from Lagos State University) 
 
                                                       </i>

                                                       <br><br>
                                                       
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Priscilla Mante<small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 11:45 - 12:45pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Practitioner and Policy Discourse on African Supply Chains
                                                          </h3>
                                                        <br>
                                                        <p>
                                                        Paper 1: The Role of Private Sector Health Tech Channels in Transforming Access in Africa’s Health Supply Chain
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Remi Adeseun, Oladunni Lawal, Yomi Kazeem (All from Salient Advisory)
                                                        </i>
                                                        
                                                        <br><br>
                                                        <p>
                                                        Paper 2: Online National Warehouse Stock Status Dashboard Utilization to Optimize Health Supply Chain Service Delivery in Uganda
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Shamim Nakade, Miti Joel, Linacy Nampa, Denis Okidi, Henry Komakech, Sandra Magona, Henry Oundo, Kisembo Julius, Daniel Mawerere, Martin Oteba, Martha Ajulong, Morries Seru, Eric Lugada (All from USAID/Uganda)
                                                        </i>
                                                        <br><br>
                                                        <p>
                                                        Paper 3: Green Entrepreneurial Orientation, Institutional resources and Organizational Performance: A resource orchestration approach 
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Okyere Anim Barima, (KNUST)
                                                        </i>
                                                        <br><br>
                                                        
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Matilda Owusu-Bio <small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>


                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 12:45pm - 1:45pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Sectoral Supply Chains & Theme Track: Africa's Supply Chains and the Future of Work 
                                                          </h3>
                                                        <br>
                                                        <p>
                                                        Simulation Modeling of Resilience in Healthcare Processes: Systematic Literature Review 
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Yusta Simwita (University of Dar es Salaam)
                                                        </i>
                                                        
                                                        <br><br>
                                                        <p>
                                                        Quantum Leap: An Assessment of Future Employability Skills Needed by Supply Chain Departments of Manufacturing Firms                                                         </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Rasheed Azeez (Lagos State University), Mariam Enitan Lawrence (Lagos State University)                          
                                                        </i>
                                                        <br><br>

                                                        <p>
                                                        E-Procurement Adoption in Lagos State Public Sector: Analysis of the Extent of Usage and Critical Success Factors 
                                                    </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Fatai Yakeen, Biliaminu Oluwole Olusesi (both from Lagos State University)                          
                                                        </i>
                                                        <br><br>

                                                        <p>
                                                        How and when does environmental orientation influence performance? Examination of green supply chain management practices and institutional pressure.                            </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Ahmed Agyapong, Sam Yaw Akomea (both from KNUST)                          
                                                        </i>
                                                        <br><br>
                                                        
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> Richard Boso  <small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>


                                           
                                        </ul>
                                    </div><!--confy-cmpt-details end-->
                                </div>
                                     <!-- Afzelia 2  -->
                                <div class="tab-pane fade" id="3A2" role="tabpanel" aria-labelledby="Day-3-Afzelia-2">
                                     <div class="confy-cmpt-details">
                                     <ul>
                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 10:15 - 11:15am</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Practitioner and Policy Discourse on African Supply Chains
                                                           </h3>
                                                        <br>
                                                        <p>
                                                            Paper 1:  Online National Warehouse Stock Status Dashboard Utilization to Optimize Health Supply Chain Service Delivery in Uganda

                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Eric Lugada (USAID/Uganda)    
                                                        </i>
                                                 
                                                        <br><br>
                                                        <p>
                                                            Paper 2: The Role of Supply Chain Capabilities on Vaccine Supply Chain Resilience; the Moderating Effects of Structural Complexity
                                                                                                               
                                                        </p>
                                                      
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Gladness Salema, Yusta Simwita (All from University of Dar es Salaam)
                                                       </i>
                                                        <br><br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i> William Afloe<small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>

                                            <li>
                                                <div class="cmpt-details">
                                                    <div class="cmp-img">
                                                        <img src="images/resources/c-img1.jpg" alt="">
                                                    </div><!--cmp-img end-->
                                                    <div class="cmp-info">
                                                        <div class="cmp-head">
                                                            <span><i class="fa fa-clock-o"></i> 11:45 - 12:45pm</span>
                                                            <h3>Parallel Sessions</h3>
                                                            
                                                        </div>
                                                        <h3 class="font-weight-bold">Sectoral Supply Chains
                                                          </h3>
                                                        <br>
                                                        <p>
                                                        Paper 1: Assessing Agricultural Value Chain Risks for Sustainable Food Supply in Nigeria: Leveraging on Agricultural Insurance
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Sunday Ajemunigbohun, Ibraheem Forson Abdul-Azeez, Kehinde Emmanuel Abiodun (All from Lagos State University)   
                                                        </i>
                                                        
                                                        <br><br>
                                                        <p>
                                                        Paper 2: Logistics Performance in Healthcare Facilities: The Role of Firm's Orientations
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Sheila Namagembe (Makerere University Business School), Beatrice Nyakaishiki, Mbago Musa, Nazziwa Hajarah,Nabiira Nantongo
                                                        </i>
                                                        <br><br>
                                                        <p>
                                                        Paper 3:  Social-Ecological Resources Configuration and Disaster Responsiveness: when does coopetition matter?
                                                        </p>
                                                        <i style="font-size: 12px; font-style: italic; margin-top: 5px; margin-bottom: 5px;">
                                                        Priscilla Addo Asamany, KNUST
                                                        </i>
                                                        <br><br>
                                                        <div class="us-details">
                                                            <h3><i class="fa fa-microphone"></i>Priscilla Mante<small>/  Session Chair</small></h3>
                                                        </div><!--us-details end-->
                                                    </div><!--cmp-info end-->
                                                </div><!--cmpt-details end-->
                                            </li>
                                        </ul>
                                    </div><!--confy-cmpt-details end-->
                                </div>
                            </div>
                        </div>
 
                    </div>
                </div><!--conference-tabs-sec end-->
            </div>
            </div>
        </section><!--conference-sec end-->

        <?php require_once 'include/footer.php';?>        
    </div>
                 
    <?php require_once 'include/scripts.php';?>

</body>

</html>