<?php
require_once 'config.php';
config(__DIR__ . '/.env');
require_once 'db_connection.php';

// Pagination setup
$limit = 10; // Number of records per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Current page number
$offset = ($page - 1) * $limit; // Offset calculation

// Fetch total records
$total_sql = "SELECT COUNT(*) as total FROM inquire";
$total_result = $conn->query($total_sql);
$total_row = $total_result->fetch_assoc();
$total_records = $total_row['total'];
$total_pages = ceil($total_records / $limit); // Calculate total pages

// Fetch paginated inquiries
$sql = "SELECT name, email, contact_no, type, course_link FROM inquire LIMIT $limit OFFSET $offset";
$inquires = $conn->query($sql);
$serialNumber = $offset + 1;
?>
<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Ahmedabad Computer Education</title>
      <meta name="author" content="themeholy">
      <meta name="description" content="Ahmedabad Computer Education">
      <meta name="keywords" content="python certification course, python full stack developer course, best python certification course, best python certification near me, python courses with certificate, python course for beginners, python training and certification, python coding training institute, learn python basics and advanced">
      <meta name="robots" content="INDEX,FOLLOW">
      <meta name="google-site-verification" content="5Wrx8p5sslP13-K6Uq1bjwiJ2kNnbwtSsyfPzxdsrlc" />
      <!-- Mobile Specific Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" type="image/png" href="assets/img/favicons/favicon.png">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="theme-color" content="#ffffff">
      <!--==============================
         Google Fonts
         ============================== -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link
         href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&family=Jost:wght@300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700&display=swap"
         rel="stylesheet">
      <!--==============================
         All CSS File
         ============================== -->
      <!-- Bootstrap -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <!-- Fontawesome Icon -->
      <link rel="stylesheet" href="assets/css/fontawesome.min.css">
      <!-- Magnific Popup -->
      <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
      <!-- Slick Slider -->
      <link rel="stylesheet" href="assets/css/slick.min.css">
      <!-- Nice Select -->
      <link rel="stylesheet" href="assets/css/nice-select.min.css">
      <!-- Theme Custom CSS -->
      <link rel="stylesheet" href="assets/css/style.css">
      <!-- responsive Custom CSS -->
      <link rel="stylesheet" href="assets/css/responsive.css">
      <style>
         .video-small-best{
            padding: 20px 30px !important
        }
        .video-small-best .th-video img{
            height: 150px;   
        }
         .footer-widget.widget_nav_menu a.info-box_link.rem-bullet{
         padding-left:0px;
         }
         .footer-widget.widget_nav_menu a.info-box_link.rem-bullet:before{
         display:none;        
         }
         .map-sec.map-new-frame .map iframe{
            height: 250px;
            width: 100%;
            -webkit-filter: grayscale(100);
            filter: grayscale(100);
            border-radius: 14px;
         }
         .th-header{
            z-index: 4;
         }
         .map-sec{
            height: 250px;
         }
         .cust-page-box h2.course-title{
                font-size:44px;
                margin-bottom:0px;
                color:#fff;
            }
            .tab-box-fix-cont .course-curriculam, .tab-box-fix-cont .course-description,
         .tab-box-fix-cont .course-instructor, .tab-box-fix-cont .course-Reviews
         {max-height:820px;
            overflow-y: auto;}
                @media (max-width:768px) {
                .th-widget-about.mob-th-widget-about{
                    text-align:center;
                }
                .th-widget-about.mob-th-widget-about .info-box-wrap{
                    justify-content:center;
                }
                .cust-page-box h2.course-title{
                font-size:18px;
                margin-bottom:0px;
                color:#fff;
            }
            .tab-box-fix-cont .course-curriculam, .tab-box-fix-cont .course-description,
         .tab-box-fix-cont .course-instructor, .tab-box-fix-cont .course-Reviews
         {
                max-height:100%;
            }
            }
            @media (min-width:430px) {
                .course-title .main-title-box-d-block{
                    display:block;
                }
                h2.course-main-title.main-title-box-d-block {
                    display: none;
                }
            }
            @media (max-width:430px) {
                .cust-page-box h2.course-title{display:none;}
                h2.course-main-title.main-title-box-d-block {
                    display: block;
                    padding:16px 16px 0 16px;
                    font-size:26px;
                    text-align:center;
                    margin-bottom:0px;
                }
            }
            ::-webkit-scrollbar{
  width: 10px;
  height: 10px;
  border-radius: 20px;
}

::-webkit-scrollbar-track{
  background: rgba(252, 0, 18, 0.1);
  box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
  border-radius: 20px;
}

::-webkit-scrollbar-thumb {
  background-color: var(--theme-color);
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.3) 25%, transparent 20%, transparent 50%, rgba(255, 255, 255, 0.3) 50%, rgba(255, 255, 255, 0.3) 75%, transparent 75%, transparent);
  border-radius: 20px;
}
.cust-menu-box.menu-top .menu-top-left .header-link{
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
}
.cust-menu-box .header-link .city-text{
    font-size:20px;
}
.cust-menu-box a.header-link{
    font-size:20px;
}   
@media (min-width:1366px) and (max-width:1899px) {.cust-page-box h2.course-title{
    width:unset;
}}
@media (max-width:1024px) {
    .cust-page-box h2.course-title{
        max-width:510px;
    }
}
@media (max-width:768px) {
    .cust-menu-box.menu-top .menu-top-left .header-link {
        position: relative;
        flex-wrap: wrap;
        text-align: center;
        justify-content: center;
        left: 0px !important;
        right: 0px;
        margin-right: 0px;
        transform: none;
    }
} 
.tab-box-fix-cont .course-single,
.tab-box-fix-cont li{
    text-align:justify;
}
      </style>
      <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5FWLQ3C');</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SD837VB60D"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SD837VB60D');
</script>
<script>
function gtag_report_conversion(url) {
    var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-16663588657/BH8aCJCTzvgZELHe6Ik-',
      'event_callback': callback
  });
  return false;
}
</script>
</script>




<!-- End Google Tag Manager -->
   </head>
   <body>
 <!-- Google Tag Manager (noscript) -->
 <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FWLQ3C"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

      <header class="th-header header-layout5 cust-page-box">
         <div class="sticky-wrapper">
            <div class="sticky-active">
               <div class="menu-area">
                  <div class="container">
                     <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                           <div class="header-logo">
                              <a href="#"><img src="assets/img/ahm-logo-new.png"
                                 alt="ahmedabad computer education" class="logo-img"></a>
                           </div>
                        </div>
                        <div class="col-auto cal-width-title">
                           <div class="row align-items-center justify-content-between">
                              <div class="col-auto w-100">
                              <div class="flex-auto-badge">
                                    <h2 class="course-title main-title-box-d-block">Inquire List</h2>
                                    
                              </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="logo-shape" data-bg-src=""></div>
               </div>
            </div>
         </div>
      </header>

<!-- -------------------------------------------- New Content ------------------------------ -->
<div class="course-none">
<h2 class="course-main-title main-title-box-d-block">Inquire List</h2> 
</div> 

   <div class="container mt-5">
      <div class="row">
         <div class="col-12">
            <div class="table-responsive">
               <table class="table table-bordered table-striped">
                  <thead class="thead-dark">
                     <tr>
                        <th>NO.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Type</th>
                        <th>Inquiry From</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php if ($inquires->num_rows > 0): ?>
                        <?php while ($row = $inquires->fetch_assoc()): ?>
                           <tr>
                              <td><?php echo $serialNumber++; ?></td>
                              <td><?php echo htmlspecialchars($row['name']); ?></td>
                              <td><?php echo htmlspecialchars($row['email']); ?></td>
                              <td><?php echo htmlspecialchars($row['contact_no']); ?></td>
                              <td><?php echo htmlspecialchars($row['type']); ?></td>
                              <td>
                                 <a href="<?php echo htmlspecialchars($row['course_link']); ?>" target="_blank" class="btn btn-success">
                                    <i class="fa fa-eye"></i>
                                 </a>
                              </td>
                           </tr>
                        <?php endwhile; ?>
                     <?php else: ?>
                        <tr>
                           <td colspan="5" class="text-center">No inquiries found</td>
                        </tr>
                     <?php endif; ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <!-- Pagination Links -->
            <nav>
               <ul class="pagination justify-content-center">
                  <?php if ($page > 1): ?>
                     <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $page - 1; ?>">Previous</a>
                     </li>
                  <?php endif; ?>
                  <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                     <li class="page-item <?php echo $i == $page ? 'active' : ''; ?>">
                        <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                     </li>
                  <?php endfor; ?>
                  <?php if ($page < $total_pages): ?>
                     <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $page + 1; ?>">Next</a>
                     </li>
                  <?php endif; ?>
               </ul>
            </nav>
         </div>
      </div>
   </div>
    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

      <footer class="footer-wrapper footer-layout5" id="footer">
         <div class="widget-area">
            <div class="container">
               <div class="row justify-content-between">
                  <div class="col-md-4">
                     <div class="widget footer-widget">
                        <div class="th-widget-about mob-th-widget-about">
                           <div class="about-logo">
                              <a href="#"><img src="assets/img/footer-ace-2.png" alt="Edura"></a>
                           </div>
                           <p class="about-text">As the #1 IT Training Institute, We're passionate about empowering youth with the skills to thrive in the dynamic digital landscape.</p>
                           <div class="info-box-wrap mb-20">
                           <div class="info-box_icon">
                              <i class="fas fa-phone"></i>
                           </div>
                           <a href="tel:9586877700" class="info-box_link rem-bullet">9586-877-700</a>
                        </div>
                           <div class="th-social">
                              <h6 class="title text-white">FOLLOW US ON:</h6>
                              <a href="https://www.facebook.com/ahmedabadcomputereducation" target="_blank"><i class="fab fa-facebook-f"></i></a>
                              <a href="https://www.instagram.com/ahmedabad_computer_education/" target="_blank"><i class="fab fa-instagram"></i></a>
                              <a href="https://www.linkedin.com/company/ahmedabadcomputereducation/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                              <a href="https://www.youtube.com/channel/UC-B4hidXXVOrr644iMJrj5g" target="_blank"><i class="fab fa-youtube"></i></a>
                              <a href="https://wa.me/+919586877700"><i class="fab fa-whatsapp" target="_blank"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Ahmedabad Location</h3>
                        <div class="info-box-wrap">
                           <div class="info-box_icon">
                              <i class="fas fa-location-dot"></i>
                           </div>
                           <p class="info-box_text">
                              655, 702/703, Iscon Emporio, Jodhpur Cross Roads, Satellite, Ahmedabad, Gujarat - 380015
                           </p>
                        </div>
                        <div class="map-sec map-new-frame">
                           <div class="map">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.9278387943546!2d72.52190077603652!3d23.02642161618322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84cdcc997db7%3A0x5e5fd6741c5ba20e!2sAhmedabad%20Computer%20Education!5e0!3m2!1sen!2sin!4v1732683961448!5m2!1sen!2sin" width="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                           </div>
                        </div>
                     </div>
                  </div>
               
               <div class="col-md-4">
                  <div class="widget widget_nav_menu footer-widget">
                     <h3 class="widget_title">Indore Location</h3>
                     <div class="info-box-wrap">
                        <div class="info-box_icon">
                           <i class="fas fa-location-dot"></i>
                        </div>
                        <p class="info-box_text">
                           719, Shekhar Central, AB Rd, Manorama Ganj, Indore, Madhya Pradesh - 452018<br>
                        </p>
                     </div>
                     <div class="map-sec map-new-frame">
                        <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14722.374927691972!2d75.86850056425075!3d22.706163021200194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fda9638f76d3%3A0xf46aa7d34cc4b2a6!2sBlockchain%20%26%20Mobile%20App%20Development%20Company%20-%20Virtual%20Height%20IT%20Services%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1732778982909!5m2!1sen!2sin" width="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
         <div class="container">
            <div class="copyright-wrap">
               <div class="row justify-content-between align-items-center">
                  <div class="col-lg-6">
                     <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2024 <a
                        href="https://www.virtualheight.com/">Virtual Height</a>. All Rights Reserved.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="shape-mockup jump d-none d-xl-block" data-top="24%" data-left="4%"><img
            src="assets/img/update1/shape/footer_shape_1.png" alt="shapes"></div>
         <div class="shape-mockup jump-reverse d-none d-xl-block" data-bottom="20%" data-right="4%"><img
            src="assets/img/update1/shape/footer_shape_2.png" alt="shapes"></div>
         <div class="shape-mockup" data-top="0" data-right="0"><img src="assets/img/update1/shape/footer_shape_3.png"
            alt="shapes"></div>
      </footer>
      <!--==============================
         All Js File
         ============================== -->
      <!-- Jquery -->
      <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
      <!-- Slick Slider -->
      <script src="assets/js/slick.min.js"></script>
      <!-- Bootstrap -->
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- Magnific Popup -->
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <!-- Counter Up -->
      <script src="assets/js/jquery.counterup.min.js"></script>
      <!-- Circle Progress -->
      <script src="assets/js/circle-progress.js"></script>
      <!-- Range Slider -->
      <script src="assets/js/jquery-ui.min.js"></script>
      <!-- Isotope Filter -->
      <script src="assets/js/imagesloaded.pkgd.min.js"></script>
      <script src="assets/js/isotope.pkgd.min.js"></script>
      <!-- Tilt JS -->
      <script src="assets/js/tilt.jquery.min.js"></script>
      <!-- Tweenmax JS -->
      <script src="assets/js/tweenmax.min.js"></script>
      <!-- Nice Select JS -->
      <script src="assets/js/nice-select.min.js"></script>
      <!-- Main Js File -->
      <script src="assets/js/main.js"></script>
      <script>

            $(document).ready(function () {
                if (!document.cookie.includes("modalShown=true")) {
                        setTimeout(() => {
                        $('#exampleModal').modal('show');
                        document.cookie = "modalShown=true; max-age=" + 24 * 60 * 60 + "; path=/";
                    }, 5000); 
                }
            });

            $(document).ready(function () {
                // Initially set the buttons visible
                $('#scrollButtons').show();

                // Monitor the scroll event
                $(window).scroll(function () {
                    // Check if the user has scrolled more than 200px
                    if ($(this).scrollTop() > 200) {
                        // Keep buttons visible (or add animations if needed)
                        $('#scrollButtons').fadeIn();
                        
                    } else {
                        // Keep buttons visible but optional fade-out behavior can be removed
                        $('#scrollButtons').fadeIn();
                    }
                });
            });

            $(document).ready(function () {
                // Initially set the buttons visible
                $('#scrollButtonsinquirey').show();

                // Monitor the scroll event
                $(window).scroll(function () {
                    // Check if the user has scrolled more than 200px
                    if ($(this).scrollTop() > 200) {
                        // Keep buttons visible (or add animations if needed)
                        $('#scrollButtonsinquirey').fadeIn();
                        
                    } else {
                        // Keep buttons visible but optional fade-out behavior can be removed
                        $('#scrollButtonsinquirey').fadeIn();
                    }
                });
            });


            if($('.scroll-top').length > 0) {
                
                var scrollTopbtn = document.querySelector('.scroll-top');
                var progressPath = document.querySelector('.scroll-top path');
                var pathLength = progressPath.getTotalLength();
                progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
                progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
                progressPath.style.strokeDashoffset = pathLength;
                progressPath.getBoundingClientRect();
                progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';		
                var updateProgress = function () {
                    var scroll = $(window).scrollTop();
                    var height = $(document).height() - $(window).height();
                    var progress = pathLength - (scroll * pathLength / height);
                    progressPath.style.strokeDashoffset = progress;
                }
                updateProgress();
                $(window).scroll(updateProgress);	
                var offset = 50;
                var duration = 750;
                jQuery(window).on('scroll', function() {
                    if (jQuery(this).scrollTop() > offset) {
                        jQuery(scrollTopbtn).addClass('show');
                    } else {
                        jQuery(scrollTopbtn).removeClass('show');
                    }
                });				
                jQuery(scrollTopbtn).on('click', function(event) {
                    event.preventDefault();
                    jQuery('html, body').animate({scrollTop: 0}, duration);
                    return false;
                })
            }



         $(document).ready(function() {
           // Initially, hide all sub-menus and remove active class
           $('.cus-megamenu-list ul').removeClass('active').hide();
           $('.cus-megamenu-li').removeClass('active');
         
           // Set the first menu item and its corresponding submenu as active
           $('.cus-megamenu-li').first().addClass('active');
           $('.cus-megamenu-list ul').first().addClass('active').slideDown();
         
           // When a menu item is clicked
           $('.cus-megamenu-li').on('click', function() {
             $('.cus-megamenu-li').removeClass('active');
             var index = $(this).index();
             // If the clicked item is already active, close it
             if ($(this).hasClass('active')) {
               // Remove active class from the clicked menu item and hide its submenu
               $(this).removeClass('active');
               $('.cus-megamenu-list ul').eq(index).removeClass('active').slideUp();
             } else {
               // Remove the active class from all items and hide all submenus
               $('.cus-megamenu-li').removeClass('active');
               $('.cus-megamenu-list ul').removeClass('active').slideUp();
         
               // Add active class to the clicked menu item and show the corresponding submenu
               $(this).addClass('active');
               $('.cus-megamenu-list ul').eq(index).addClass('active').slideDown();
             }
           });
         });
         
         
         
         
         
         
             
      </script>
   </body>
</html>