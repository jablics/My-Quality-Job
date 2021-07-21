<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <!-- Site Metas -->
       <link rel="icon" href="assets/images/icon.png" sizes="35x35" type="image/png">
      <title>Bab altareeq</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Site Icons -->
      <link rel="shortcut icon" href="#" type="assets/image/x-icon" />
      <link rel="apple-touch-icon" href="#" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
      <!-- Pogo Slider CSS -->
      <link rel="stylesheet" href="assets/css/pogo-slider.min.css" />
      <!-- Site CSS -->
      <link rel="stylesheet" href="assets/css/style.css" />
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="assets/css/responsive.css" />
      <!-- Custom CSS -->
      <link rel="stylesheet" href="assets/css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
         </head>
   <body id="services" class="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
     
      <div class="wrapper">
      <nav id="sidebar">
         <div class="menu_section">
             <ul>
               <li><a href="index.html">Home</a></li>
               <li><a href="about.html">About</a></li>
              <li class="dropdown">
                     <a  data-toggle="dropdown" id="demo" href="#">Services</a>
                     <ul class="dropdown-menu" aria-labelledby="demo">
                        <li ><a href="manage.html">Property Management</a></li>
                        <li ><a href="business reg.php">Business Registration</a></li>
                        <li ><a href="ad.html">Business Advertisment</a></li>
                     </ul>
               </li>
               <li><a href="contact.html">Contact us</a></li>
            </ul>
         </div>
      </nav>
      <div id="content">
         <!-- Start header -->
         <header class="top-header">
            <div class="container">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="logo_main">
                        <a href="index.html">
                           <img src="assets/images/logo.png">
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn"><img src="assets/images/menu_icon.png"></button>
                  </div>
               </div>
            </div>
         </header>
         <!-- End header -->

          <div style="margin-top: -50px;">
               <div class="row" >
                  <div class="col-md-12">
                      <img class="img-responsive" src="assets/images/biz.png">
                  </div>
               </div>
         
         </div>

         <!-- section -->
         <div class="section about_section layout_padding">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center">
                           <h2 class="margin-bottom_30"><strong class="small theme_color">Put You Business On The Map</strong></h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <div class="full">
                        <div class="heading_small">
                          <h4>Business Registration</h4>
                        </div>
                       <p>Bab altareeq Marketing Management Company has efficiently and effectively assisted our Clients with 
                        UAE company registration. We advise on registering a company in UAE.<br> 

                       <strong> UAE is a low-tax jurisdiction</strong>
                        Except oil and gas companies and foreign banks
                        businesses are not subject to corporate taxes. All 
                        UAE residents are also exempt from personal income taxes. Capital 
                        gains tax is 0% and the VAT rate is as low as 5%.<br>


                        <strong>100% foreign ownership for free zone companies</strong>
                        Unlike limited liability trading companies that require share
                        holding by UAE nationals, a company incorporated in any of the UAE 
                        free zones can be wholly owned by foreigners.<br>

                        <strong>UAE is the leading trading hub in the Middle East</strong>
                        Due to its strategically favourable location, establishing a company in the UAE enables businesses to easily access the GCC 
                        countries as well as the African, European and Asian markets.</p>
                        <p>Dear esteem customer, kindly print and fill the form in the link bellow to start your registration process. <a href="document/form.pdf" style="color:red; font-size:20px;">Business Registration</a></p>
                      </div>
                     
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <div class="full text_align_center">
                        <img class="img-responsive" src="assets/images/bizreg1.png" alt="#" />   
                      </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end section -->

         <!-- section -->
         <div class="section about_section layout_padding padding_top_0">
            <div class="container">
               <div class="row" style="background-color: #AAAAAA;">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center margin-top_30">
                           <h2><strong class="small">Register Your Business</strong></h2>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-10 offset-lg-1">
                     <div class="full text_align_center">
                         <p style="color: white;">Dear esteem customer, Kindly fill the form bellow to get started on registering your business.</p>

                          <?php if(!empty($statusMsg)){ ?>
                               <p><?php echo $statusMsg; ?></p>
                           <?php } ?>

                         <form class="contact_form_inner margin-bottom_30" action="bus.php" method="post" enctype="multipart/form-data">
                                   
                                    <fieldset >
                                       <div class="field" >
                                          <input type="text" name="name" placeholder="Your name" value="" required />
                                       </div>
                                       <div class="field">
                                          <input type="email" name="email" placeholder="Email" value="" required />
                                       </div>
                                       <div class="field">
                                          <input type="text" name="phone_no" placeholder="Phone number" value="" required />
                                       </div>
                                      
                                       <div class="field float-left">
                                          <p style="color: white;">Please Scan and upload the complited form bellow.
                                             <input type="file" name="file" value="" required/>
                                            
                                       </div>
                                       <div class="field">
                                          <textarea placeholder="Message" name="message" id="message"></textarea>
                                       </div>
                                       <div class="field center">
                                          <button class="margin-top_30" id="submit" name="submit">SEND</button>
                                       </div>
                                    </fieldset>
                                 </form>
                     </div>
                  </div>
               </div>
               
            </div>
         </div>
         <!-- end section -->
        
       
        <!-- Start Footer -->
       <footer class="footer-box">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center white_fonts margin-bottom_30">
                           <h2>Contact us</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  
                  <div class="col-lg-4 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_1">
                        <p>Address<br> <small>Sumuv Hamdam Building, Al Karama Dubai UAE</small></p>
                     </div>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_2">
                       <p>Phone<br><small> +971 435 414 14<br>+971 568 354 966</small></p>
                        <p>Email<br><a href="mailto:info@altareeqmanagement.com"  style="color:white;"><small>info@altareeqmanagement.com</small></a></p>
                        <p><a href="mailto:customeragent@altareeqmanagement.com" style="color:white;"><small>customeragent@altareeqmanagement.com</small></a></p>
                        <p><a href="mailto:jablics24@gmail.com" style="color:white;"><small>jablics24@gmail.com"</small></a></p>
                     </div>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog_last">
                         <p>Social media</p>
                         <p>
                           <ul>
                              <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                         </p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                    
                         
                     </div>
                  </div>
              
               </div>
            </div>
         </footer>
         <!-- End Footer -->
         <div class="footer_bottom">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <p class="crp">© Copyrights 2021 <a href="#" >Bab Altareeq marketing managment company</a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- ALL PLUGINS -->
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <script src="assets/js/jquery.pogo-slider.min.js"></script>
      <script src="assets/js/slider-index.js"></script>
      <script src="assets/js/smoothscroll.js"></script>
      <script src="assets/js/form-validator.min.js"></script>
      <script src="assets/js/contact-form-script.js"></script>
      <script src="assets/js/isotope.min.js"></script>
      <script src="assets/js/images-loded.min.js"></script>
      <script src="assets/js/custom.js"></script>
      <!-- End Google Map -->
      <script>
         $(document).ready(function() {
           $('#sidebarCollapse').on('click', function() {
             $('#sidebar, #content').toggleClass('active');
             $('.collapse.in').toggleClass('in');
             $('a[aria-expanded=true]').attr('aria-expanded', 'false');
           });
         });
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js -->
   </body>
</html>
