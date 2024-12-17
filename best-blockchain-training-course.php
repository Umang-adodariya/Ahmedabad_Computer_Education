<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ahmedabad Computer Education</title>
    <meta name="author" content="themeholy">
    <meta name="description" content="Ahmedabad Computer Education">
    <meta name="keywords" content="blockchain training, blockchain certification courses, blockchain course ahmedabad, blockchain for business training, blockchain certificate course, blockchain training near me, blockchain development course, best blockchain course in india, blockchain course for beginners, learn blockchain programming">
    <meta name="robots" content="INDEX,FOLLOW">
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
        .footer-widget.widget_nav_menu a.info-box_link.rem-bullet {
            padding-left: 0px;
        }

        .footer-widget.widget_nav_menu a.info-box_link.rem-bullet:before {
            display: none;
        }

        .map-sec.map-new-frame .map iframe {
            height: 250px;
            width: 100%;
            -webkit-filter: grayscale(100);
            filter: grayscale(100);
            border-radius: 14px;
        }

        .scroll-top {
            bottom: 95px;
            right: 37px;
        }

        .map-sec {
            height: 250px;
        }

        .th-header {
            z-index: 4;
        }

        .tab-box-fix-cont .course-curriculam,
        .tab-box-fix-cont .course-description,
        .tab-box-fix-cont .course-instructor,
        .tab-box-fix-cont .course-Reviews {
            max-height: 820px;
            overflow-y: auto;
        }

        .cust-page-box h2.course-title {
            font-size: 44px;
            margin-bottom: 0px;
            color: #fff;
        }

        @media (max-width:768px) {
            .th-widget-about.mob-th-widget-about {
                text-align: center;
            }

            .th-widget-about.mob-th-widget-about .info-box-wrap {
                justify-content: center;
            }

            .cust-page-box h2.course-title {
                font-size: 18px;
                margin-bottom: 0px;
                color: #fff;
            }

            .tab-box-fix-cont .course-curriculam,
            .tab-box-fix-cont .course-description,
            .tab-box-fix-cont .course-instructor,
            .tab-box-fix-cont .course-Reviews {
                max-height: 100%;
            }
        }

        @media (min-width:430px) {
            .course-title .main-title-box-d-block {
                display: block;
            }

            h2.course-main-title.main-title-box-d-block {
                display: none;
            }
        }

        @media (max-width:430px) {
            .cust-page-box h2.course-title {
                display: none;
            }

            h2.course-main-title.main-title-box-d-block {
                display: block;
                padding: 16px 16px 0 16px;
                font-size: 26px;
                text-align: center;
                margin-bottom: 0px;
            }
        }



        ::-webkit-scrollbar {
            width: 10px;
            height: 10px;
            border-radius: 20px;
        }

        ::-webkit-scrollbar-track {
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

        .cust-menu-box.menu-top .menu-top-left .header-link {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .cust-menu-box .header-link .city-text {
            font-size: 20px;
        }

        .cust-menu-box a.header-link {
            font-size: 20px;
        }

        @media (min-width:1366px) and (max-width:1899px) {
            .cust-page-box h2.course-title {
                width: 920px;
            }
        }

        @media (max-width:1024px) {
            .cust-page-box h2.course-title {
                max-width: 510px;
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
        .tab-box-fix-cont li {
            text-align: justify;
        }
    </style>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FWLQ3C');
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZDR3DPRCX5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-ZDR3DPRCX5');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FWLQ3C"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!--==============================
         Header Area
         ==============================-->
    <header class="th-header header-layout5 cust-page-box">
        <div class="top-area" data-bg-src="assets/img/update1/bg/header_bg_1.png">
            <div class="cust-menu-box menu-top">
                <div class="container">
                    <div class="row align-items-center justify-content-center justify-content-sm-between">
                        <div class="col-auto d-none d-sm-block menu-top-left">
                            <a class="header-link" href="tel:93-2728-7700">
                                <!-- <svg id="Layer_1" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"
                              data-name="Layer 1">
                              <g stroke="#FFFFFF" stroke-miterlimit="10" stroke-width="2">
                                 <path d="m29.93 83.29v-19.07a8.94 8.94 0 0 0 -17.88 0v19.07z" fill="none" />
                                 <path
                                    d="m26 83.29v-11.57a5.28 5.28 0 0 0 -5-5.42 5.27 5.27 0 0 0 -5.07 5.42v11.57z"
                                    fill="none" />
                                 <path d="m12.75 60.9h16.48" fill="none" />
                                 <path d="m20.75 50.71v4.41" fill="none" />
                                 <path d="m26.83 40.84h15.72" fill="none" />
                                 <path d="m29.93 35.34h9.88v47.95h-9.88z" fill="none" />
                                 <path d="m29.05 24.46h11.38" fill="#fff" />
                                 <path d="m35.18 16.71v3.26" fill="#fff" />
                                 <path d="m18.63 58.16v1.75" fill="#fff" />
                                 <path d="m23.23 58.16v1.75" fill="#fff" />
                                 <g fill="none">
                                    <path d="m37.68 35.34v-13a2.5 2.5 0 1 0 -5 0v13z" />
                                    <path d="m29.93 49.5h9.87" />
                                    <path d="m39.8 54.25-9.87 5.06" />
                                    <path d="m39.8 64.45-9.87 5.06" />
                                    <path d="m39.8 74.65-9.87 5.06" />
                                    <path d="m70.07 83.29v-19.07a8.94 8.94 0 0 1 17.88 0v19.07z" />
                                    <path d="m74 83.29v-11.57a5.09 5.09 0 1 1 10.15 0v11.57z" />
                                    <path d="m87.25 60.9h-16.48" />
                                    <path d="m79.25 50.71v4.41" />
                                    <path d="m73.18 40.84h-15.73" />
                                    <path d="m60.2 35.34h9.88v47.95h-9.88z" />
                                 </g>
                                 <path d="m70.95 24.46h-11.37" fill="#fff" />
                                 <path d="m64.83 16.71v3.26" fill="#fff" />
                                 <path d="m81.37 58.16v1.75" fill="#fff" />
                                 <path d="m76.77 58.16v1.75" fill="#fff" />
                                 <path d="m62.33 35.34v-13a2.5 2.5 0 0 1 5 0v13z" fill="none" />
                                 <path d="m70.08 49.5h-9.88" fill="none" />
                                 <path d="m70.07 54.25-9.87 5.06" fill="none" />
                                 <path d="m70.07 64.45-9.87 5.06" fill="none" />
                                 <path d="m70.07 74.65-9.87 5.06" fill="none" />
                                 <path d="m60.18 83.29v-30.85a10.19 10.19 0 0 0 -20.38 0v30.85z" fill="none" />
                                 <path d="m39.87 51.25h20.23" fill="none" />
                                 <path d="m49.99 39.09v3.16" fill="none" />
                                 <path d="m53.47 83.09v-21.22a3.71 3.71 0 0 0 -7.42 0v21.22z" fill="none" />
                              </g>
                           </svg> -->
                                <img src="assets/img/home-course-details/badgeone.png" alt="badgeone" class="badgeone">
                                <span class="city-text">Talk to Career Consultant :</span>95-868-777-00
                            </a>
                        </div>
                        <div class="col-auto">
                            <div class="th-social top-header-ad-flex">
                                <a target="_blank" href="https://www.facebook.com/ahmedabadcomputereducation"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://www.linkedin.com/company/ahmedabadcomputereducation/"><i class="fab fa-linkedin"></i></a>
                                <a target="_blank" href="https://www.instagram.com/ahmedabad_computer_education/"><i class="fab fa-instagram"></i></a>
                                <a target="_blank" href="https://wa.me/+919586877700"><i class="fab fa-whatsapp" target="_blank"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            <div class="col-auto">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-auto">
                                        <h2 class="course-title main-title-box-d-block">Blockchain Training Certificate Course</h2>
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
        <h2 class="course-main-title main-title-box-d-block">Blockchain Training Certificate Course</h2>
    </div>
    <?php if (isset($_SESSION['flash_message'])): ?>
        <!-- Success message popup -->
        <div class="popup-sent-msg">
            <div class="popup-inner-msg">
                <p><?php echo htmlspecialchars($_SESSION['flash_message']); ?></p>
            </div>
        </div>
        <?php
        // Unset the flash message so it won't show again on refresh
        unset($_SESSION['flash_message']);
        ?>
    <?php endif; ?>
    <!-- sent sucess msg popup -->
    <section class="space-top space-extra2-bottom tab-box-fix-cont">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-lg-8">
                    <div class="course-single">
                        <!-- <div class="course-single-top">
                            <h2 class="course-title">Blockchain Training Certificate Course</h2>
                        </div> -->
                        <div class="course-single-bottom">
                            <ul class="nav course-tab" id="courseTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="curriculam-tab" data-bs-toggle="tab" href="#curriculam" role="tab" aria-controls="curriculam" aria-selected="false"><i class="fa-regular fa-book"></i>Curriculam</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="description-tab" data-bs-toggle="tab" href="#Coursedescription" role="tab" aria-controls="Coursedescription" aria-selected="true"><i class="fa-regular fa-bookmark"></i>Overview</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="instructor-tab" data-bs-toggle="tab" href="#instructor" role="tab" aria-controls="instructor" aria-selected="false"><i class="fa-regular fa-user"></i>Instructor</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false"><i class="fa-regular fa-star-sharp"></i>Reviews</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="productTabContent">
                                <div class="tab-pane fade show active" id="curriculam" role="tabpanel" aria-labelledby="curriculam-tab">
                                    <div class="course-curriculam">
                                        <h5 class="h5">Course Content</h5>
                                        <div class="course-con-acc-sec">
                                            <div class="accordion cus-accordion" id="accordionExample">
                                                <div class="accordion-item course-acc-item">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button course-acc-button" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            BLOCKCHAIN
                                                        </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse course-acc-collapse collapse show"
                                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body course-acc-body">
                                                            <div class="checklist mb-1">
                                                                <ul class="course-acc-ul">
                                                                    <li class="course-acc-li">INTRODUCTION OF BLOCKCHAIN</li>
                                                                    <li class="course-acc-li">INTRODUCTION OF CRYPTOCURRENCY (BITCOIN)</li>
                                                                    <li class="course-acc-li">INTRODUCTION SHA256</li>
                                                                    <li class="course-acc-li">NODES</li>
                                                                    <li class="course-acc-li">ISOLATION</li>
                                                                    <li class="course-acc-li">NETWORK SHARING</li>
                                                                    <li class="course-acc-li">INTRODUCTION OF ETHEREUM</li>
                                                                    <li class="course-acc-li">ETHEREUM VS BITCOIN</li>
                                                                    <li class="course-acc-li">IMMUTABLE LEDGER</li>
                                                                    <li class="course-acc-li">P2P NETWORK</li>
                                                                    <li class="course-acc-li">MINING CONSENSUS PROTOCOL</li>
                                                                    <li class="course-acc-li">INTRODUCTION OF WALLET</li>
                                                                    <li class="course-acc-li">INTRODUCTION DECENTRALISE</li>
                                                                    <li class="course-acc-li">DECENTRALISE VS CENTRALISE</li>
                                                                    <li class="course-acc-li">INTRODUCTION OF SOLIDITY</li>
                                                                    <li class="course-acc-li">INTRODUCTION OF SMART CONTRACT</li>
                                                                    <li class="course-acc-li">INTRODUCTION OF REMIX</li>
                                                                    <li class="course-acc-li">CREATE SIMPLE SMART CONTRACT</li>
                                                                    <li class="course-acc-li">DEPLOY A SMART CONTRACT ON REMIX ID</li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item course-acc-item">
                                                    <h2 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button course-acc-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            SOLIDITY
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTwo" class="accordion-collapse course-acc-collapse collapse" aria-labelledby="headingTwo"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body course-acc-body">
                                                            <div class="checklist mb-1">
                                                                <ul class="course-acc-ul">
                                                                    <li class="course-acc-li">CREATE TOKEN GENERATION SMART CONTRACT(ERC20 AND BEP20) IN VS CODE</li>
                                                                    <li class="course-acc-li">INTRODUCTION OF TRUFFLE AND HARDHAT FRAMEWORK</li>
                                                                    <li class="course-acc-li">DEPLOY SMART CONTRACT WITH TRUFFLE</li>
                                                                    <li class="course-acc-li">DEPLOY SMART CONTRACT WITH HARDHAT</li>
                                                                    <li class="course-acc-li">BASIC INTRODUCTION OF REACT.JS</li>
                                                                    <li class="course-acc-li">BASIC INTRODUCTION OF NODE.JS</li>
                                                                    <li class="course-acc-li">INTRODUCTION OF GANACHE</li>
                                                                    <li class="course-acc-li">INTRODUCTION OF ICO</li>
                                                                    <li class="course-acc-li">INTRODUCTION OF SCAN (ETHEREUM,BINANCE,POLYGON,CARDANO,SOLANA)</li>
                                                                    <li class="course-acc-li">OVERVIEW OF NFTS</li>
                                                                    <li class="course-acc-li">CREATE MINT SMART CONTRACT (BASE ON ERC721AND ERC1155)</li>
                                                                    <li class="course-acc-li">CREATE AUCTION SMART CONTRACT</li>
                                                                    <li class="course-acc-li">CREATE FRACTION SMART CONTRACT</li>
                                                                    <li class="course-acc-li">CREATE MARKETPLACE SMART CONTRACT</li>
                                                                    <li class="course-acc-li">INTRODUCTION OF WEB3</li>
                                                                    <li class="course-acc-li">CREATE VESTING SMART CONTRACT</li>
                                                                    <li class="course-acc-li">INTRODUCTION OF METAVERSE</li>
                                                                    <li class="course-acc-li">INTRODUCTION OF SOLANA</li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item course-acc-item">
                                                    <h2 class="accordion-header" id="headingThree">
                                                        <button class="accordion-button course-acc-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            RUST
                                                        </button>
                                                    </h2>
                                                    <div id="collapseThree" class="accordion-collapse course-acc-collapse collapse"
                                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body course-acc-body">
                                                            <div class="checklist mb-1">
                                                                <ul class="course-acc-ul">
                                                                    <li class="course-acc-li">MUTABILITY</li>
                                                                    <li class="course-acc-li">FUNCTIONS, CONTROL FLOW</li>
                                                                    <li class="course-acc-li">OWNERSHIP</li>
                                                                    <li class="course-acc-li">STRUCTS</li>
                                                                    <li class="course-acc-li">ENUMS</li>
                                                                    <li class="course-acc-li">PATTERN MATCHING</li>
                                                                    <li class="course-acc-li">VECTORS</li>
                                                                    <li class="course-acc-li">ERROR HANDLING</li>
                                                                    <li class="course-acc-li">GENERIC TYPES</li>
                                                                    <li class="course-acc-li">TRAITS</li>
                                                                    <li class="course-acc-li">LIFETIMES</li>
                                                                    <li class="course-acc-li">HASHMAP</li>
                                                                    <li class="course-acc-li">RESULT DATATYPE</li>
                                                                    <li class="course-acc-li">OPTION</li>
                                                                    <li class="course-acc-li">INTRODUCTION TO ANCHOR FRAMEWORK</li>
                                                                    <li class="course-acc-li">PROGRAMMING MODEL</li>
                                                                    <li class="course-acc-li">HELLO WORLD</li>
                                                                    <li class="course-acc-li">ACCOUNTS</li>
                                                                    <li class="course-acc-li">CROSS PROGRAM INVOCATION</li>
                                                                    <li class="course-acc-li">CUSTOM ACCOUNT DATA</li>
                                                                    <li class="course-acc-li">PROGRAM DERIVED ADDRESSES</li>
                                                                    <li class="course-acc-li">CREATING A CRYPTO COIN ON SOLANA</li>
                                                                    <li class="course-acc-li">TRANSFER SOL ONE ACCOUNT TO ANOTHER USING ANCHOR</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Coursedescription" role="tabpanel" aria-labelledby="description-tab">
                                    <div class="course-description">
                                        <h5 class="h5">Blockchain course highlights</h5>
                                        <p>If you are planning for an advanced career portfolio with a strong technical foothold, opting for our blockchain certification course will be the most rational decision. Although blockchain was primarily introduced to record transactions and store details about cryptocurrencies, it has now found extensive use across multiple industries. The unique features of blockchain, especially its decentralized performance, make it suitable for several purposes that otherwise couldn’t be achieved by a conventional database system.</p>
                                        <p>Our blockchain course for beginners comprises topics related to blockchain development, studying the existing blockchains, decentralization, security, and immutability of data, and the underlying technical infrastructure. Additionally, we also provide sessions on advanced topics like data mining, layer 1 and layer 2 blockchains, and many more, so that students can gain comprehensive knowledge about the same. At Ahmedabad Computer Education, we aim to make our students future-ready so that they can begin their careers as proficient and skilled blockchain developers. </p>
                                        <h5 class="h5 mt-40">What is blockchain and why is it used?</h5>
                                        <p>The use of blockchain technology became more prominent in 2009 when Bitcoin was introduced to the market as the first cryptocurrency. In textbook terms, it is a shared database where information of different types is stored but in the form of blocks linked together with cryptographic programs. There is no central authority controlling the blockchain and its operations. On the contrary, the authority is distributed amongst multiple systems on the blockchain network, known as nodes. </p>
                                        <p>They authenticate every data to be stored on the blockchain ledger, access the stored records, and perform all other functions. One of the major differences between blockchain and any other conventional shared database is that the information stored on the former is immutable, meaning it cannot be modified further once added to the ledger in the form of blocks. Strong cryptographic scripts are deployed to the network to protect the data and make them immutable.</p>
                                        <p>While blockchain can be used for multiple uses, the most common application is as a transaction ledger. Our blockchain training in Indore will help students understand the practical applications of this decentralized shared database in different industries. For instance, it is often used in the finance industry to record transactions involving multiple users in a decentralized network. Similarly, it can be used in the supply chain industry to store records of products, straight from their point of origin to the final dispatch point.</p>
                                        <h5 class="h5 mt-40">What are the key features of blockchain that students learn?</h5>
                                        <p>Our blockchain course in Ahmedabad is curated in a way that students can learn the primary features of this shared database with ease. It will not only help them to master the technology but also work on real-time projects with ease. Below are some of the major features that we discuss in our classes for blockchain training.</p>
                                        <div class="checklist mb-1">
                                            <ul class="course-acc-ul">
                                                <li class="course-acc-li">Decentralization: Blockchain is a decentralized ledger technology, meaning its control or authority is distributed amongst multiple users and not with a single entity. Hence, everyone must agree to any change in the state of data or the addition of a new block of data to the existing ledger.</li>
                                                <li class="course-acc-li">Immutability: Once data is mined and added to the blockchain ledger, it becomes immutable. Our experts will further explain the use of cryptographic algorithms to make data blocks immutable and prevent any further modification of the same.</li>
                                                <li class="course-acc-li">Enhanced security: In our blockchain course for beginners, we include lectures and an in-depth understanding of the security and encryption protocols associated with this decentralized ledger. Additionally, we also shed light on different consensus protocols adopted for working on the ledger, like Proof of Stakes and Proof of Work. </li>
                                                <li class="course-acc-li">Smart contract development and deployment: With us, students can learn the development of automated execution programs known as smart contracts that are deployed on the blockchain. These are sets of rules and conditions to automatically trigger an operation on the blockchain, like the completion of a monetary transfer or updating the records of a product in the supply chain ledger. </li>
                                                <li class="course-acc-li">Data mining: Our experts will also help students understand the concepts associated with data mining since it is required to develop a blockchain and add the data blocks to the existing ledger. For this, we will provide live training sessions on hashing, cryptographic encryption, and other computational logic relevant to data mining. </li>
                                            </ul>
                                        </div>
                                        <h5 class="h5 mt-40">Why take a blockchain developer course?</h5>
                                        <p>Wondering why opt for our blockchain training in Indore?</p>
                                        <p>If yes, let us present you with a brief overview of the advantages you will gain with our training course on blockchain technology, the new revolutionary concept in the IT industry. </p>
                                        <h5 class="h6 mt-40">Versatile development approaches</h5>
                                        <p>Blockchains can be developed in numerous ways, depending on the custom solutions necessary for a business. Our academic experts will provide you with detailed insights into the practical approaches suitable for developing the blockchain having custom features. Additionally, we will also help students implement feasible logic that can adhere to the time complexity protocols and help them develop a more efficient and secured blockchain. </p>
                                        <h5 class="h6 mt-40">Functional and programming overview</h5>
                                        <p>Being the best blockchain institute Ahmedabad, we will help students understand both the functional and logical parts of the blockchain. For instance, we will train them to use different programming languages needed to develop a blockchain Python, JavaScript, Java, and Rust. Additionally, we will also give training on different frameworks used to develop the blockchain network along with smart contracts for existing blockchains like Ethereum and Binance Coin.</p>
                                        <h5 class="h6 mt-40">Easy learning curve</h5>
                                        <p>At Ahmedabad Computer Education, we ensure our blockchain training course has a flatter learning curve. In other words, we will help break down the topic's complexity and provide a one-to-one discussion to help students resolve their queries regarding blockchain development, underlying architecture, consensus protocols, smart contracts, and data encryption. Plus, our live training sessions will give them a first-hand experience of implementing blockchain in real-time scenarios. </p>
                                        <h5 class="h5 mt-40">Best job roles for blockchain developers</h5>
                                        <p>With our blockchain certification course, students can apply for multifarious job roles once they graduate. Also, expert professionals who wish to establish their careers in this field can benefit a lot from our certification course. Since blockchain is used in different ways across multiple industries, there are numerous options for job roles in the market.</p>
                                        <div class="checklist mb-1">
                                            <ul class="course-acc-ul">
                                                <li class="course-acc-li">Blockchain developer: As the name implies, blockchain developers are concerned with developing a secondary blockchain on a primary one, blockchain-based applications like wallets and marketplaces, smart contracts, and user-authentication systems. Their average salary ranges somewhere between INR 7 to INR 9 lakhs annually.</li>
                                                <li class="course-acc-li">Blockchain solution architect: A blockchain solution architect will be responsible for providing tailored solutions to their clients by understanding the business needs, analyzing the existing technical infrastructure, and deducing the feasibility of the solution. Such a professional can get a job with an average salary of INR 11 lakhs annually.</li>
                                                <li class="course-acc-li">Blockchain project manager: Managing the entire blockchain development project and streamlining the deliveries through agile methods will be the major responsibilities of a blockchain project manager. The person needs to be acquainted with both the technicalities of blockchain development along with other project management tools. The average salary of the professional will be somewhere between INR 13 lakhs to INR 18 lakhs depending on the expertise.</li>
                                                <li class="course-acc-li">Blockchain UX designer: Another most common and high-in-demand job role that you can look for is blockchain UX designer. You will be concerned with developing a feature-rich and interactive user interface for blockchain-based applications using front-end programming languages and service-based APIs. The average salary of a blockchain UX designer is somewhat between INR 14 lakhs to INR 16 lakhs.</li>
                                            </ul>
                                        </div>
                                        <h5 class="h5 mt-40" id="faqs">How Ahmedabad Computer Education can help build a flourishing career?</h5>
                                        <p>Being the best blockchain institute Ahmedabad, we will help you learn the primary concepts of blockchain technology along with the underlying technical infrastructure. Our experts will provide detailed insights into topics like decentralization, data mining, cryptographic encryption, layer 1 and layer 2 blockchain, smart contracts, and many more such matters. With us, you will be able to enhance your technical proficiency in various programming languages and technologies used in developing and deploying the blockchain. </p>
                                        <h5 class="h5 mt-40">FAQs</h5>
                                        <p>With our digital marketing course with placement, you will be able to work across multiple industries. If you are concerned about career opportunities, below we have mentioned a few industries that are actively hiring trained and skilled digital marketers. </p>
                                        <h6 class="h6 mt-40">How the blockchain developer course will help me?</h6>
                                        <p>With the blockchain course for beginners, you will be able to master the concepts of this decentralized shared database, including data mining, cryptography, smart contract development, and many more. </p>
                                        <h6 class="h6 mt-40">What is the average salary of a blockchain developer?</h6>
                                        <p>The average salary of a blockchain developer will depend upon the expertise and the technical skills you have. For freshers, the standard salary slab ranges between INR 7 lakhs to INR 10 lakhs per annum.</p>
                                        <h6 class="h6 mt-40">How do I register for the blockchain developer course?</h6>
                                        <p>If you want to enroll yourself in our blockchain certification course, visit our website and fill in the form with all the necessary details. Our experts will get back to you at the earliest with any other details to be filled in for registration.</p>
                                        <h6 class="h6 mt-40">Can I complete the blockchain developer course after my graduation?</h6>
                                        <p>Yes, you can enroll yourself in our blockchain training program after completing your graduation.</p>
                                        <h6 class="h6 mt-40">What programming languages do I need to know for blockchain development?</h6>
                                        <p>Python, Rust, Java, and JavaScript are the most common programming languages used to develop blockchain, smart contracts, data mining models, and other related components.</p>
                                        <h6 class="h6 mt-40">Why blockchain developers are high in demand?</h6>
                                        <p>Blockchain is a revolutionary technology that not only offers end-to-end data transparency and immutability but also comes with a distributed control system. That’s why it has found its application across multiple industries, creating a high demand for skilled blockchain developers.</p>
                                        <h6 class="h6 mt-40">Will you give live project training on blockchain development?</h6>
                                        <p>With Ahmedabad Computer Education, you will get the live training for our blockchain course with placement to understand the real-life implementation of the technology.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                                    <div class="course-instructor">
                                        <div class="course-author-box">
                                            <!-- <div class="auhtor-img">
                                                <img src="assets/img/instructor/ankit-patel.jpg" alt="Author Image">
                                            </div> -->
                                            <div class="auhtor-img without-author-sec">
                                                <img src="assets/img/loaderIc.png" alt="Author Image" class="default-ic">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="author-name"><a class="text-inherit" href="ankit-patel-Instructor.php">Ankit Patel</a></h3>
                                                <p class="author-text">Ankit Patel is a skilled blockchain and full-stack developer with a passion for building innovative solutions. With over 3 years of experience, Ankit has a proven track record of delivering cutting-edge projects, from smart contracts to decentralized applications.</p>
                                                <div class="author-meta">
                                                    <a><i class="fal fa-file-video"></i>1 Course</a>
                                                    <span><i class="fal fa-users"></i>95+ Students</span>
                                                </div>
                                                <div class="th-social">
                                                    <a href="https://www.facebook.com/ahmedabadcomputereducation" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="https://www.youtube.com/channel/UC-B4hidXXVOrr644iMJrj5g" target="_blank"><i class="fab fa-youtube"></i></a>
                                                    <a href="https://www.linkedin.com/company/ahmedabadcomputereducation/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                    <a href="https://www.instagram.com/ahmedabad_computer_education/" target="_blank"><i class="fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                    <div class="course-Reviews">
                                        <div class="th-comments-wrap ">
                                            <ul class="comment-list">
                                                <li class="review th-comment-item">
                                                    <div class="th-post-comment">
                                                        <div class="comment-avater">
                                                            <img src="assets/img/review/uttam.png" alt="Comment Author">
                                                        </div>
                                                        <div class="comment-content">
                                                            <h4 class="name">Uttam Shingala</h4>
                                                            <span class="commented-on"><i class="fal fa-calendar-alt"></i>22 April, 2022</span>
                                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                                                <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                            </div>
                                                            <p class="text">Getting training from Ahmedabad Computer Education was always on my mind. And finally when I got there for training, with each passing day, I could see my bright future approaching.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="review th-comment-item">
                                                    <div class="th-post-comment">
                                                        <div class="comment-avater">
                                                            <img src="assets/img/review/120-neha.jpg" alt="Comment Author">
                                                        </div>
                                                        <div class="comment-content">
                                                            <h4 class="name">Neha Punetha</h4>
                                                            <span class="commented-on"><i class="fal fa-calendar-alt"></i>26 May, 2023</span>
                                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                                                <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                            </div>
                                                            <p class="text">The education that the teachers at Ahmedabad Computer education provide is the best I could find in Ahmedabad. On the other hand, the study material and courses cover all the important topics you require a skill set for in the corporate world.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="review th-comment-item">
                                                    <div class="th-post-comment">
                                                        <div class="comment-avater">
                                                            <img src="assets/img/review/120-kenil.jpg" alt="Comment Author">
                                                        </div>
                                                        <div class="comment-content">
                                                            <h4 class="name">Kenil Shah</h4>
                                                            <span class="commented-on"><i class="fal fa-calendar-alt"></i>25 Aug, 2024</span>
                                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                                                <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                            </div>
                                                            <p class="text">The opportunities, honestly, are endless after completing courses in Ahmedabad computer education. ACE is a great place to study, learning from very good and well-trained professors. All the teachers are very amazing and supportive.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> <!-- Comment Form -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4">
                    <aside class="sidebar-area position-relative">
                        <aside class="sidebar-area position-relative">
                            <!-- register sidebar -->
                            <img src="assets/img/home-course-details/badgetwo.png" alt="badgetwo" class="badgetwo">
                            <?php include('registerSidebar.php'); ?>





                            <div class="widget widget_info  ">
                                <div class="th-video">
                                    <img src="assets/img/courses/corses-main/blockchain-2.jpg" alt="video">
                                    <a class="play-btn popup-video" data-bs-toggle="modal" data-bs-target="#videoModal"><i
                                            class="fas fa-play"></i></a>
                                </div>
                                <!-- <h3 class="widget_title">Course Information</h3>
                            <div class="info-list">
                                <ul>
                                    <li>
                                        <i class="fa-light fa-file"></i>
                                        <strong>Modules: </strong>
                                        <span>3</span>
                                    </li>
                                 
                                    <li>
                                        <i class="fa-light fa-puzzle-piece"></i>
                                        <strong>Exams: </strong>
                                        <span>04</span>
                                    </li>
                                </ul>
                            </div> -->
                            </div>
                        </aside>
                </div>
            </div>
        </div>
    </section>


    <!--==============================
About Area  
==============================-->
    <div class="space-bottom about-sec bg-bottom-right" data-bg-src="assets/img/update1/bg/about_bg_1.jpg"
        id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 mb-40 mb-xl-0">
                    <div class="img-box7 tilt-active">
                        <img class="w-100" src="assets/img/home/home01.jpg" alt="About">
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-8 align-self-end">
                    <div class="about-content2">
                        <div class="title-area mb-40">
                            <span class="sub-title">More About Ahmedabad Computer Education</span>
                            <h2 class="fs-40 fw-medium mt-n2">Launch Your IT Career with the Best Training Institute in Ahmedabad & Indore
                            </h2>
                        </div>
                        <p class="mt-n2 mb-30 mb-xl-5">Looking to break into the exciting world of IT? ACE, a leading IT training institute in Ahmedabad and Indore, can help you achieve your goals. We offer a comprehensive range of IT courses designed to equip you with the skills and knowledge needed to thrive in today's dynamic tech landscape.
                        </p>
                        <div class="counter-grid-wrap">
                            <div class="counter-grid">
                                <div class="counter-grid_icon">
                                    <img src="assets/img/update1/icon/candidate_placed.svg" alt="icon">
                                </div>
                                <div class="counter-grid_content">
                                    <h3 class="counter-grid_number"><span class="counter-number">90</span>+</h3>
                                    <span class="counter-grid_text">Industry Experts</span>
                                </div>
                            </div>
                            <div class="counter-grid">
                                <div class="counter-grid_icon">
                                    <img src="assets/img/update1/icon/company.svg" alt="icon">
                                </div>
                                <div class="counter-grid_content">
                                    <h3 class="counter-grid_number"><span class="counter-number">100</span>+</h3>
                                    <span class="counter-grid_text">MoU Signed</span>
                                </div>
                            </div>
                            <div class="counter-grid">
                                <div class="counter-grid_icon">
                                    <img src="assets/img/update1/icon/candidate_trained.svg" alt="icon">
                                </div>
                                <div class="counter-grid_content">
                                    <h3 class="counter-grid_number"><span class="counter-number">5000</span>+</h3>
                                    <span class="counter-grid_text">Students Certified</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--==============================
Cta Area  
==============================-->
    <section class="space position-relative mb-5" id="placement">
        <div class="bg-img" data-bg-src="assets/img/update1/bg/off.jpg">
            <img src="assets/img/update1/bg/bg_overlay_3.png" alt="overlay">
        </div>
        <div class="container z-index-common">
            <div class="row align-items-center justify-content-center justify-lg-content-between">
                <div class="col mb-40 mb-lg-0 text-center text-lg-start">
                    <h3 class="fw-medium text-white mt-n2">Get 1 Week Demo Session. For First 20 Registrations.</h3>
                    <p class="text-white mb-n2">We're confident that we can help you launch a successful and rewarding career in the IT field.</p>
                </div>
                <div class="col-lg-auto text-center text-lg-start">
                    <a href="course.php" class="th-btn style8 d-xxl-inline-block openRegisterModal" data-bs-toggle="modal"
                        data-bs-target="#registerModal">Inquire Now<i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>


    <!--==============================
Servce Area  
==============================-->

    <div class="bg-smoke web-design-smoke work-com-logo-sec" data-pos-for=".footer-wrapper" data-sec-pos="bottom-half">
        <div class="container th-container3 z-index-common">
            <div class="title-area text-center">
                <!-- <span class="sub-title"><i class="fal fa-book me-2"></i> Related Courses</span> -->
                <h2 class="sec-title">Our Students Are Placed In Top Companies</h2>
            </div>
            <div class="row gx-10 th-carousel" data-slide-show="6" data-lg-slide-show="5" data-md-slide-show="4"
                data-sm-slide-show="3" data-xs-slide-show="2">
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/arth-i-soft.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/iTechnotion.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/adit.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/harmis.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/ethos.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/azilen.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/hitech.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/radix.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/n4n.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/moon.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/ifour.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/spec.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/ispark.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/hyperlink.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/technobrain.png" alt="Instagram">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Register Modal -->
    <?php include('registerModal.php'); ?>

    <!--video Modal -->
    <div class="modal fade video-modal load-modal course-video-modal" id="videoModal" tabindex="-1"
        aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="load-modal-wrapper position-relative">
                    <button class="closeButton sideMenuCls btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="far fa-times"></i></button>
                    <!-- <iframe src="https://www.youtube.com/embed/KULof8R45WA?autoplay=1&mute=1&rel=0&start=0"
         title="YouTube video player" frameborder="0"
         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
         referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
     </iframe> -->
                    <video autoplay muted controls class="courses-video-main">
                        <source src="./assets/video/ahm_video.mp4" type="video/mp4">
                    </video>


                    </iframe>

                </div>
            </div>
        </div>
    </div>


    <div class="modal fade load-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="load-modal-wrapper position-relative">
                    <button class="closeButton sideMenuCls btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="far fa-times"></i></button>
                    <div class="modal-grid row">
                        <div class="col-12 col-md-6">
                            <div class="modal-slider-sec">
                                <div class="blog-img th-carousel" data-overlay="black" data-opacity="5"
                                    data-arrows="true" data-slide-show="1" data-fade="true">
                                    <a href="blog-details.php"><img src="assets/img/course/400x450/teachers1.jpg"
                                            alt=""></a>
                                    <a href="blog-details.php"><img src="assets/img/course/400x450/teachers2.jpg"
                                            alt=""></a>
                                    <a href="blog-details.php"><img src="assets/img/course/400x450/teachers1.jpg"
                                            alt=""></a>
                                    <a href="blog-details.php"><img src="assets/img/course/400x450/teachers2.jpg"
                                            alt=""></a>
                                    <a href="blog-details.php"><img src="assets/img/course/400x450/teachers1.jpg"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="modal-form-sec">
                                <div class="contact-form-wrap load-modal-form" data-bg-src="assets/img/bg/contact_bg_1.png">
                                    <span class="sub-title">Contact With Us!</span>
                                    <h2 class="border-title">Get in Touch</h2>
                                    <form action="mail.php" method="POST" class="contact-form ajax-contact" id="get-in-touch-form">
                                        <div class="row get-up-contact-custom">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="hidden" name="form" value="get_in_touch">

                                                    <input type="text" class="form-control style-white" name="name"
                                                        id="name" placeholder="Your Name*" required>
                                                    <i class="fal fa-user"></i>
                                                </div>
                                                <div class="load_name_error" id="load_name_error" style="color: red;"></div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="number" class="form-control style-white" name="number"
                                                        id="number" placeholder="Contact Number*" required>
                                                    <i class="fal fa-phone"></i>
                                                </div>
                                                <div class="load_number_error" id="load_number_error" style="color: red;"></div>
                                            </div>
                                            <div class="col-12">
                                                <div class="captcha-container">
                                                    <div class="input-refresh-btn mb-10">
                                                        <div id="captcha" class="captcha"></div>
                                                        <button id="refreshBtn" class="captcha-ref-btn"><i
                                                                class="fal fa-refresh"></i></button>
                                                    </div>
                                                    <div class="input-refresh-btn">
                                                    <input type="text" id="userInput"
                                                        class="form-control style-white userInput"
                                                        placeholder="Enter Captcha*" />
                                                    </div>
                                                    <div class="load_captcha_error" id="load_captcha_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                            <div class="form-btn col-12 mt-10">
                                                <button class="th-btn " type="submit" value="2">Send Message<i
                                                        class="fas fa-long-arrow-right ms-2"></i></button>
                                            </div>
                                        </div>
                                        <p class="form-messages mb-0 mt-3"></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--********************************
			Code End  Here 
	******************************** -->


    <div id="scrollButtons" class="hidden">
                                <a id="whatsappButton" class="whatsapp-button" href="https://wa.me/+919327287700?text=Inquiry%20for%20Blockchain%20Course%0AI%20am%20interested%20in%20a%20Blockchain%20course" target="_blank">
                                    <img src="assets/img/home-course-details/whatsapp.svg" alt="whatsapp">
                                </a>
                        </div>

    <div id="scrollButtonsinquirey" class="hidden">
        <a id="inquiryButton" class="inquiry-button" href="tel:93-2728-7700" target="_blank">
            <img src="assets/img/home-course-details/equiry.svg" alt="equiry">
        </a>
    </div>

  <a  class="whatsapp-sticky" href="https://wa.me/+919327287700?text=Inquiry%20for%20Blockchain%20Course%0AI%20am%20interested%20in%20a%20Blockchain%20course" target="_blank">
                        <div class="sticky-bottom-note-important">
                            <div class="inner-sticky-contain">
                                <p class="inner-job-title">
                                100% Job Assistance | Try Free Demo Class<br>
                                For More Inquiry Connect Now!
                                </p>
                            </div>
                        </div>
            </a>


    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>




    <!--==============================
         Footer Area
         ==============================-->
    <footer class="footer-wrapper footer-layout5" id="footer">
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-4">
                        <div class="widget footer-widget">
                            <div class="th-widget-about mob-th-widget-about">
                                <div class="about-logo">
                                    <a href="#"><img src="assets/img/footer-ace-2.png" alt="Edura"></a>
                                    <!-- <a href="#"><img src="assets/img/footer-logo.png" alt="Edura"></a> -->
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
                    <!-- <div class="col-lg-6 text-end d-none d-lg-block">
                     <div class="footer-links">
                         <ul>
                             <li><a href="about.php">Privacy Policy</a></li>
                             <li><a href="about.php">Terms of Use</a></li>
                         </ul>
                     </div>
                     </div> -->
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
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Slick Slider -->
    <script src="assets/js/slick.min.js"></script>
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
        //  $(document).ready(function () {
        //     if (!document.cookie.includes("modalShown=true")) {
        //          $('#exampleModal').modal('show');
        //          alert("hello");
        //          document.cookie = "modalShown=true; max-age=" + 24 *60 *60 + "; path=/";
        //          }
        //      });


        $(document).ready(function() {
            if (!document.cookie.includes("modalShown=true")) {
                setTimeout(() => {
                    $('#exampleModal').modal('show');
                    document.cookie = "modalShown=true; max-age=" + 24 * 60 * 60 + "; path=/";
                }, 5000);
            }
        });

        $(document).ready(function() {
            // Initially set the buttons visible
            $('#scrollButtons').show();

            // Monitor the scroll event
            $(window).scroll(function() {
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

        $(document).ready(function() {
            // Initially set the buttons visible
            $('#scrollButtonsinquirey').show();

            // Monitor the scroll event
            $(window).scroll(function() {
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


        if ($('.scroll-top').length > 0) {

            var scrollTopbtn = document.querySelector('.scroll-top');
            var progressPath = document.querySelector('.scroll-top path');
            var pathLength = progressPath.getTotalLength();
            progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
            progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
            progressPath.style.strokeDashoffset = pathLength;
            progressPath.getBoundingClientRect();
            progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
            var updateProgress = function() {
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
                    jQuery(scrollTopbtn).addClass('show landing-show');
                } else {
                    jQuery(scrollTopbtn).removeClass('show landing-show');
                }
            });
            jQuery(scrollTopbtn).on('click', function(event) {
                event.preventDefault();
                jQuery('html, body').animate({
                    scrollTop: 0
                }, duration);
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