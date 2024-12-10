<?php include('header.php'); ?>
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-cources.png" data-overlay="title" data-opacity="8">
        <div class="breadcumb-shape" data-bg-src="assets/img/bg/breadcumb_shape_1_1.png">
        </div>
        <div class="shape-mockup breadcumb-shape2 jump d-lg-block d-none" data-right="30px" data-bottom="30px">
            <img src="assets/img/bg/breadcumb_shape_1_2.png" alt="shape">
        </div>
        <div class="shape-mockup breadcumb-shape3 jump-reverse d-lg-block d-none" data-left="50px" data-bottom="80px">
            <img src="assets/img/bg/breadcumb_shape_1_3.png" alt="shape">
        </div>
        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">Courses</h1>
                <!-- <ul class="breadcumb-menu">
                    <li><a href="index.php">Home</a></li>
                    <li>Courses</li>
                </ul> -->
            </div>
        </div>
    </div>
    <!--==============================
Course Area  
==============================-->
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="th-sort-bar">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-auto">
                        <!-- <span class="course-result-count">We found <span class="text-theme">12 courses</span> available for you</span> -->
                    </div>
                    <div class="col-md-auto">
                        <div class="nav" role=tablist>
                            <a href="#" class="active" id="tab-course-grid" data-bs-toggle="tab" data-bs-target="#tab-grid" role="tab" aria-controls="tab-grid" aria-selected="true"><i class="fa-solid fa-grid-2"></i> Grid</a>
                            <a href="#" id="tab-course-list" data-bs-toggle="tab" data-bs-target="#tab-list" role="tab" aria-controls="tab-grid" aria-selected="false"><i class="fas fa-list"></i> List</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade active courses-wrapper show" id="tab-grid" role="tabpanel" aria-labelledby="tab-course-grid">
                    <div class="row gy-4 mb-30">
                        <div class="col-md-6 col-lg-4 col-xxl-3 filter-item cat2 cat1">
                            <div class="course-box2 style2">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/course-blockchain.jpg" alt="course">
                                    
                                </div>
                                <div class="course-content">
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/nikita-karanpuria.jpg" alt="author">
                                            <a href="javascript:void(0)" class="author-name">Nikita Karanpuria</a>
                                        </div>
                                        <!-- <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>
                                            (4.00)
                                        </div> -->
                                    </div>
                                    <h3 class="course-title"><a href="full-stack-blockchain-development-course.php">Full Stack Blockchain Development Course</a></h3>
                                    <div class="course-meta">
                                        <span><i class="fal fa-file"></i>Modules 3</span>
                                        <span><i class="fal fa-user"></i>Students 125+</span>
                                        <span><i class="fal fa-eye"></i>View: 10K</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xxl-3 filter-item cat1 cat3">
                            <div class="course-box2 style2">
                                <div class="course-img">
                                    <img src="assets/img/course/267x230/react.png" alt="course">
                                    
                                </div>
                                <div class="course-content">
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/uvesh.jpg" alt="author">
                                            <a href="uvesh-instructor.php" class="author-name">uvesh Ansari</a>
                                        </div>
                                        <!-- <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>
                                            (4.00)
                                        </div> -->
                                    </div>
                                    <h3 class="course-title"><a href="full-stack-react-development-course.php">Full Stack React Development Course</a></h3>
                                    <div class="course-meta">
                                        <span><i class="fal fa-file"></i>Modules 12</span>
                                        <span><i class="fal fa-user"></i>Students 550+</span>
                                        <span><i class="fal fa-eye"></i>View: 7K</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xxl-3 filter-item cat1 cat4">
                            <div class="course-box2 style2">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/267-angular.jpg" alt="course">
                                    
                                </div>
                                <div class="course-content">
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/vishal-patel.jpg" alt="author">
                                            <a href="vishal-patel-instructor.php" class="author-name">Vishal Patel</a>
                                        </div>
                                        <!-- <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>
                                            (4.00)
                                        </div> -->
                                    </div>
                                    <h3 class="course-title"><a href="full-stack-angular-development-course.php">Full Stack Angular Development Course</a></h3>
                                    <div class="course-meta">
                                        <span><i class="fal fa-file"></i>Modules 5</span>
                                        <span><i class="fal fa-user"></i>Students 250+</span>
                                        <span><i class="fal fa-eye"></i>View: 3K</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xxl-3 filter-item cat1 cat4">
                            <div class="course-box2 style2">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/267-python.jpg" alt="course">
                                    
                                </div>
                                <div class="course-content">
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/nilesh-goud.jpg" alt="author">
                                            <a href="nilesh-goud-instructor.php" class="author-name">Nilesh Goud</a>
                                        </div>
                                        <!-- <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>
                                            (4.00)
                                        </div> -->
                                    </div>
                                    <h3 class="course-title"><a href="full-stack-python-development-course.php">Full Stack Python Development Course
                                    </a></h3>
                                    <div class="course-meta">
                                        <span><i class="fal fa-file"></i>Modules 2</span>
                                        <span><i class="fal fa-user"></i>Students 623+</span>
                                        <span><i class="fal fa-eye"></i>View: 5K</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xxl-3 filter-item cat1 cat4">
                            <div class="course-box2 style2">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/267-laravel.jpg" alt="course">
                                    
                                </div>
                                <div class="course-content">
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/bhargav-limbasiya.jpg" alt="author">
                                            <a href="javascript:void(0)" class="author-name">Bhargav Limbasiya</a>
                                        </div>
                                        <!-- <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>
                                            (4.00)
                                        </div> -->
                                    </div>
                                    <h3 class="course-title"><a href="full-stack-laravel-development-course.php">Full Stack Laravel Development Course
                                    </a></h3>
                                    <div class="course-meta">
                                        <span><i class="fal fa-file"></i>Modules 5</span>
                                        <span><i class="fal fa-user"></i>Students 360+</span>
                                        <span><i class="fal fa-eye"></i>View: 3.3K</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-6 col-lg-4 col-xxl-3 filter-item cat1 cat4">
                            <div class="course-box2 style2">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/267-python.jpg" alt="course">
                                    
                                </div>
                                <div class="course-content">
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/80x80_3.png" alt="author">
                                            <a href="javascript:void(0)" class="author-name">Ankit Patel</a>
                                        </div>
                                    </div>
                                    <h3 class="course-title"><a href="python-details.php">Python Certification Course
                                    </a></h3>
                                    <div class="course-meta">
                                        <span><i class="fal fa-file"></i>Modules 5</span>
                                        <span><i class="fal fa-user"></i>Students 50</span>
                                        <span><i class="fal fa-eye"></i>View: 14K</span>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <div class="col-md-6 col-lg-4 col-xxl-3 filter-item cat2 cat4">
                            <div class="course-box2 style2">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/267-webdesign.jpg" alt="course">
                                    
                                </div>
                                <div class="course-content">
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/instructorDetail/saloni-suthar.jpg" alt="author">
                                            <a href="javascript:void(0)" class="author-name">Saloni Suthar</a>
                                        </div>
                                        <!-- <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>
                                            (4.00)
                                        </div> -->
                                    </div>
                                    <h3 class="course-title"><a href="web-designing-training-cours.php">Web Designing Course 
</a></h3>
                                    <div class="course-meta">
                                        <span><i class="fal fa-file"></i>Modules 8</span>
                                        <span><i class="fal fa-user"></i>Students 650+</span>
                                        <span><i class="fal fa-eye"></i>View: 5.6K</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xxl-3 filter-item cat2 cat4">
                            <div class="course-box2 style2">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/courses-graphic.jpg" alt="course">
                                    
                                </div>
                                <div class="course-content">
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/ram.jpg" alt="author">
                                            <a href="ui-ux-Instructor.php" class="author-name">Ram Gondaliya</a>
                                        </div>
                                        <!-- <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>
                                            (4.00)
                                        </div> -->
                                    </div>
                                    <h3 class="course-title"><a href="graphic-and-ui-ux-design-course.php">Graphic & UI UX Design Course 
                                    </a></h3>
                                    <div class="course-meta">
                                        <span><i class="fal fa-file"></i>Modules 4</span>
                                        <span><i class="fal fa-user"></i>Students 700+</span>
                                        <span><i class="fal fa-eye"></i>View: 7.2K</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xxl-3 filter-item cat3 cat4">
                            <div class="course-box2 style2">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/267-game-development.jpg" alt="course">
                                    
                                </div>
                                <div class="course-content">
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/rajdeep.jpg" alt="author">
                                            <a href="game-Instructor.php" class="author-name">Rajdeep Rathod</a>
                                        </div>
                                        <!-- <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>
                                            (4.00)
                                        </div> -->
                                    </div>
                                    <h3 class="course-title"><a href="game-development-course.php">Game Development Course</a></h3>
                                    <div class="course-meta">
                                        <span><i class="fal fa-file"></i>Modules 11</span>
                                        <span><i class="fal fa-user"></i>Students 130+</span>
                                        <span><i class="fal fa-eye"></i>View: 8.7K</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 col-xxl-3 filter-item cat2 cat4">
                            <div class="course-box2 style2">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/267-devOps.jpg" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/naresh.jpg" alt="author">
                                            <a href="devOps-Instructor.php" class="author-name">Naresh Chavda</a>
                                        </div>
                                        <!-- <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>
                                            (4.00)
                                        </div> -->
                                    </div>
                                    <h3 class="course-title"><a href="devops-certification-course.php">DevOps Certification Course</a></h3>
                                    <div class="course-meta">
                                        <span><i class="fal fa-file"></i>Modules 5</span>
                                        <span><i class="fal fa-user"></i>Students 85+</span>
                                        <span><i class="fal fa-eye"></i>View: 6.3K</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 col-xxl-3 filter-item cat1 cat3">
                            <div class="course-box2 style2">
                                <div class="course-img">
                                    <img src="assets/img/course/267x230/react.png" alt="course">
                                    
                                </div>
                                <div class="course-content">
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/yash.jpg" alt="author">
                                            <a href="react-native-Instructor.php" class="author-name">Yash Nandha</a>
                                        </div>
                                        <!-- <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>
                                            (4.00)
                                        </div> -->
                                    </div>
                                    <h3 class="course-title"><a href="react-native-course.php">Best React Native Training Course</a></h3>
                                    <div class="course-meta">
                                        <span><i class="fal fa-file"></i>Modules 8</span>
                                        <span><i class="fal fa-user"></i>Students 325+</span>
                                        <span><i class="fal fa-eye"></i>View: 4K</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 col-xxl-3 filter-item cat3 cat1">
                            <div class="course-box2 style2">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/course-flutter.jpg" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/karan.jpg" alt="author">
                                            <a href="flutter-Instructor.php" class="author-name"> Karan Parmar</a>
                                        </div>
                                        <!-- <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>
                                            (4.00)
                                        </div> -->
                                    </div>
                                    <h3 class="course-title"><a href="flutter-certification-course.php">Flutter Training Course</a></h3>
                                    <div class="course-meta">
                                        <span><i class="fal fa-file"></i>Modules 9</span>
                                        <span><i class="fal fa-user"></i>Students 200+</span>
                                        <span><i class="fal fa-eye"></i>View: 5.3K</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 col-xxl-3 filter-item cat2 cat1">
                            <div class="course-box2 style2">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/course-blockchain.jpg" alt="course">
                                    
                                </div>
                                <div class="course-content">
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/80x80_3.png" alt="author">
                                            <a href="ankit-patel-Instructor.php" class="author-name">Ankit Patel</a>
                                        </div>
                                        <!-- <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>
                                            (4.00)
                                        </div> -->
                                    </div>
                                    <h3 class="course-title"><a href="blockchain-training-course.php">Blockchain Training Course</a></h3>
                                    <div class="course-meta">
                                        <span><i class="fal fa-file"></i>Modules 12</span>
                                        <span><i class="fal fa-user"></i>Students 130+</span>
                                        <span><i class="fal fa-eye"></i>View: 10.9K</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xxl-3 filter-item cat3 cat2">
                            <div class="course-box2 style2">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/267-metaverse.jpg" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-author">
                                        <div class="author-info">
                                           <img src="assets/img/instructor/tejas.jpg" alt="author">
                                            <a href="metaverse-Instructor.php" class="author-name">Tejas Acharya</a>
                                        </div>
                                        <!-- <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>
                                            (4.00)
                                        </div> -->
                                    </div>
                                    <h3 class="course-title"><a href="metaverse-training-course.php">Metaverse Course</a></h3>
                                    <div class="course-meta">
                                        <span><i class="fal fa-file"></i>Modules 6</span>
                                        <span><i class="fal fa-user"></i>Students 45+</span>
                                        <span><i class="fal fa-eye"></i>View: 3.8K</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xxl-3 filter-item cat2 cat4">
                            <div class="course-box2 style2">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/courses-digital.jpg" alt="course">
                                    
                                </div>
                                <div class="course-content">
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/hinal.jpg" alt="author">
                                            <a href="digital-marketing-Instructor.php" class="author-name">Hinal Joshi</a>
                                        </div>
                                        <!-- <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>
                                            (4.00)
                                        </div> -->
                                    </div>
                                    <h3 class="course-title"><a href="digital-marketing-training-course.php">Best Digital Marketing Course</a></h3>
                                    <div class="course-meta">
                                        <span><i class="fal fa-file"></i>Modules 8</span>
                                        <span><i class="fal fa-user"></i>Students 200+</span>
                                        <span><i class="fal fa-eye"></i>View: 10.4K</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xxl-3 filter-item cat2 cat4">
                            <div class="course-box2 style2">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/267-seo.jpg" alt="course">
                                    
                                </div>
                                <div class="course-content">
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/jay-malvi.jpg" alt="author">
                                            <a href="seo-instructor.php" class="author-name">Jay Malvi</a>
                                        </div>
                                        <!-- <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>
                                            (4.00)
                                        </div> -->
                                    </div>
                                    <h3 class="course-title"><a href="seo-certification-training-course.php">SEO Certification Course</a></h3>
                                    <div class="course-meta">
                                        <span><i class="fal fa-file"></i>Modules 8</span>
                                        <span><i class="fal fa-user"></i>Students 100+</span>
                                        <span><i class="fal fa-eye"></i>View: 4.1K</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 col-xxl-3 filter-item cat2 cat4">
                            <div class="course-box2 style2">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/267-bde.jpg" alt="course">
                                    
                                </div>
                                <div class="course-content">
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/aman.jpg" alt="author">
                                            <a href="aman-patel-instructor.php" class="author-name">Aman Patel</a>
                                        </div>
                                        <!-- <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>
                                            (4.00)
                                        </div> -->
                                    </div>
                                    <h3 class="course-title"><a href="business-development-course.php">Business Development Course</a></h3>
                                    <div class="course-meta">
                                        <span><i class="fal fa-file"></i>Modules 8</span>
                                        <span><i class="fal fa-user"></i>Students 65+</span>
                                        <span><i class="fal fa-eye"></i>View: 6K</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xxl-3 filter-item cat2 cat4">
                            <div class="course-box2 style2">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/267-business-ana.jpg" alt="course">
                                    
                                </div>
                                <div class="course-content">
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/priya.jpg" alt="author">
                                            <a href="business-analyst-Instructor.php" class="author-name">Priya Jaiswal</a>
                                        </div>
                                        <!-- <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>
                                            (4.00)
                                        </div> -->
                                    </div>
                                    <h3 class="course-title"><a href="business-analyst-course.php">Business Analyst Course</a></h3>
                                    <div class="course-meta">
                                        <span><i class="fal fa-file"></i>Modules 8</span>
                                        <span><i class="fal fa-user"></i>Students 55+</span>
                                        <span><i class="fal fa-eye"></i>View: 4.7K</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xxl-3 filter-item cat2 cat4">
                            <div class="course-box2 style2">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/267-qa.jpg" alt="course">
                                    
                                </div>
                                <div class="course-content">
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/jimmy.jpg" alt="author">
                                            <a href="qa-Instructor.php" class="author-name">Jimmy Chotaliya</a>
                                        </div>
                                        <!-- <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>
                                            (4.00)
                                        </div> -->
                                    </div>
                                    <h3 class="course-title"><a href="software-testing-course.php">Software Testing Course</a></h3>
                                    <div class="course-meta">
                                        <span><i class="fal fa-file"></i>Modules 8</span>
                                        <span><i class="fal fa-user"></i>Students 180+</span>
                                        <span><i class="fal fa-eye"></i>View: 6.8K</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xxl-3 filter-item cat2 cat4">
                            <div class="course-box2 style2">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/267-cyber-security.jpg" alt="course">
                                    
                                </div>
                                <div class="course-content">
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/dixitbhai.jpg" alt="author">
                                            <a href="cyber-security-Instructor.php" class="author-name">Dixit Prajapati</a>
                                        </div>
                                        <!-- <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>
                                            (4.00)
                                        </div> -->
                                    </div>
                                    <h3 class="course-title"><a href="cyber-security-training-course.php">Cyber Security Course</a></h3>
                                    <div class="course-meta">
                                        <span><i class="fal fa-file"></i>Modules 8</span>
                                        <span><i class="fal fa-user"></i>Students 125+</span>
                                        <span><i class="fal fa-eye"></i>View: 7K</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xxl-3 filter-item cat2 cat4">
                            <div class="course-box2 style2">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/courses-wordpress.jpg" alt="course">
                                    
                                </div>
                                <div class="course-content">
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/sweta-rao.jpg" alt="author">
                                            <a href="cms-Instructor.php" class="author-name">Sweta Rao</a>
                                        </div>
                                        <!-- <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>
                                            (4.00)
                                        </div> -->
                                    </div>
                                    <h3 class="course-title"><a href="cms-certification-course.php">CMS Course</a></h3>
                                    <div class="course-meta">
                                        <span><i class="fal fa-file"></i>Modules 8</span>
                                        <span><i class="fal fa-user"></i>Students 140+</span>
                                        <span><i class="fal fa-eye"></i>View: 8.9K</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="tab-list" role="tabpanel" aria-labelledby="tab-course-list">
                    <div class="row gy-30">
                        <div class="col-12">
                            <div class="course-grid">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/blockchain-350x250.jpg" alt="img">
                                </div>
                                <div class="course-content">
                                    <h3 class="course-title"><a href="full-stack-blockchain-development-course.php">Full Stack Blockchain Development Course </a></h3>
                                    <p class="course-text">We aim to bridge educational gaps, improve learning outcomes. We are committed to making a positive impact on education globally, through our initiatives.</p>
                                    <div class="course-meta style2">
                                        <span><i class="fal fa-file"></i>Modules 3</span>
                                        <span><i class="fal fa-user"></i>Students 125+</span>
                                    </div>
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/nikita-karanpuria.jpg" alt="author">
                                            <a href="nikita-karanpuria-Instructor.php" class="author-name">Nikita Karanpuria</a>
                                        </div>
                                        <a href="full-stack-blockchain-development-course.php" class="link-btn">View Details<i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="course-grid">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/350-react.jpg" alt="img">
                                </div>
                                <div class="course-content">
                                    <!-- <div class="d-flex justify-content-between">
                                        <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>(4.7)
                                        </div>
                                    </div> -->

                                    <h3 class="course-title"><a href="full-stack-react-development-course.php">Full Stack React Development Course</a></h3>
                                    <p class="course-text">We aim to bridge educational gaps, improve learning outcomes. We are committed to making a positive impact on education globally, through our initiatives.</p>
                                    <div class="course-meta style2">
                                        <span><i class="fal fa-file"></i>Modules 12</span>
                                        <span><i class="fal fa-user"></i>Students 550+</span>
                                    </div>
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/uvesh.jpg" alt="author">
                                            <a href="uvesh-instructor.php" class="author-name">Uvesh Ansari</a>
                                        </div>
                                        <a href="full-stack-react-development-course.php" class="link-btn">View Details<i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="course-grid">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/350-angular.jpg" alt="img">
                                </div>
                                <div class="course-content">
                                    <!-- <div class="d-flex justify-content-between">
                                        <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>(4.7)
                                        </div>
                                    </div> -->

                                    <h3 class="course-title"><a href="full-stack-angular-development-course.php">Full Stack Angular Development Course</a></h3>
                                    <p class="course-text">We aim to bridge educational gaps, improve learning outcomes. We are committed to making a positive impact on education globally, through our initiatives.</p>
                                    <div class="course-meta style2">
                                        <span><i class="fal fa-file"></i>Modules 12</span>
                                        <span><i class="fal fa-user"></i>Students 250+</span>
                                    </div>
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/vishal-patel.jpg" alt="author">
                                            <a href="vishal-patel-instructor.php" class="author-name">Vishal Patel</a>
                                        </div>
                                        <a href="full-stack-angular-development-course.php" class="link-btn">View Details<i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="course-grid">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/350-python.jpg" alt="img">
                                </div>
                                <div class="course-content">
                                    <!-- <div class="d-flex justify-content-between">
                                        <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>(4.7)
                                        </div>
                                    </div> -->

                                    <h3 class="course-title"><a href="full-stack-python-development-course.php">Full Stack Python Development Course</a></h3>
                                    <p class="course-text">Elevate your career prospects with a recognized Python certification course from ACE. Our certification programs cover all aspects of Python, from basic syntax to advanced libraries like NumPy and pandas. Gain a competitive edge and showcase your proficiency to potential employers. Choose from beginner, intermediate, or advanced certification tracks depending on your skill level.</p>
                                    <div class="course-meta style2">
                                        <span><i class="fal fa-file"></i>Modules 2</span>
                                        <span><i class="fal fa-user"></i>Students 623+</span>
                                    </div>
                                    <div class="course-author">
                                    <div class="author-info">
                                            <img src="assets/img/instructor/nilesh-goud.jpg" alt="author">
                                            <a href="nilesh-goud-instructor.php" class="author-name">Nilesh Goud</a>
                                        </div>
                                        <a href="full-stack-python-development-course.php" class="link-btn">View Details<i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="course-grid">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/350-laravel.jpg" alt="img">
                                    
                                </div>
                                <div class="course-content">
                                    <!-- <div class="d-flex justify-content-between">
                                        <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>(4.7)
                                        </div>
                                    </div> -->

                                    <h3 class="course-title"><a href="full-stack-laravel-development-course.php">Full Stack Laravel Development Course</a></h3>
                                    <p class="course-text">Elevate your career prospects with a recognized Python certification course from ACE. Our certification programs cover all aspects of Python, from basic syntax to advanced libraries like NumPy and pandas. Gain a competitive edge and showcase your proficiency to potential employers. Choose from beginner, intermediate, or advanced certification tracks depending on your skill level.</p>
                                    <div class="course-meta style2">
                                        <span><i class="fal fa-file"></i>Modules 5</span>
                                        <span><i class="fal fa-user"></i>Students 360+</span>
                                    </div>
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/80x80.png" alt="author">
                                            <a href="javascript:void(0)" class="author-name">Bhargav Limbasiya</a>
                                        </div>
                                        <a href="full-stack-laravel-development-course.php" class="link-btn">View Details<i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="course-grid">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/350-webdesign.jpg" alt="img">
                                </div>
                                <div class="course-content">
                                    <!-- <div class="d-flex justify-content-between">
                                        <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>(4.7)
                                        </div>
                                    </div> -->

                                    <h3 class="course-title"><a href="web-designing-training-cours.php">Web Designing Course</a></h3>
                                    <p class="course-text">ACE's Web Design Training Course offers a comprehensive curriculum covering everything from design principles to advanced web development techniques. Learn to create user-friendly, visually appealing websites that leave a lasting impression. Our training programs are tailored to both beginners and experienced designers.</p>
                                    <div class="course-meta style2">
                                        <span><i class="fal fa-file"></i>Modules 8</span>
                                        <span><i class="fal fa-user"></i>Students 650+</span>
                                    </div>
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/80x80.png" alt="author">
                                            <a href="javascript:void(0)" class="author-name">Saloni Suthar</a>
                                        </div>
                                        <a href="web-designing-training-cours.php" class="link-btn">View Details<i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="course-grid">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/graphic-350x250.jpg" alt="img">
                                </div>
                                <div class="course-content">
                                    <!-- <div class="d-flex justify-content-between">
                                        <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>(4.7)
                                        </div>
                                    </div> -->

                                    <h3 class="course-title"><a href="graphic-and-ui-ux-design-course.php">Graphic & UI UX Design Course</a></h3>
                                    <p class="course-text">Elevate your design career with ACE's comprehensive Graphics and UI/UX Certification Course. Learn to make creative user interfaces, stunning visuals, and branding materials. Graphic Designing Training & UI/UX course with certification covers industry-standard tools like Adobe Photoshop, Illustrator, InDesign, Figma, and Adobe XD.</p>
                                    <div class="course-meta style2">
                                        <span><i class="fal fa-file"></i>Modules 8</span>
                                        <span><i class="fal fa-user"></i>Students 700+</span>
                                    </div>
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/ram.jpg" alt="author">
                                            <a href="ui-ux-Instructor.php" class="author-name">Ram Gondaliya</a>
                                        </div>
                                        <a href="graphic-and-ui-ux-design-course.php" class="link-btn">View Details<i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="course-grid">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/350-game-development.jpg" alt="img">
                                </div>
                                <div class="course-content">
                                    <!-- <div class="d-flex justify-content-between">
                                        <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>(4.7)
                                        </div>
                                        
                                    </div> -->

                                    <h3 class="course-title"><a href="game-development-course.php">Game Development Course</a></h3>
                                    <p class="course-text">Master the art of game creation with our expert-led Game Development Training. Learn industry-standard tools like Unity 3D and gain the skills to bring your game ideas to life. Take Unity 3D Game Development Course with Certificate and launch your career in the booming game development industry. </p>
                                    <div class="course-meta style2">
                                        <span><i class="fal fa-file"></i>Modules 11</span>
                                        <span><i class="fal fa-user"></i>Students 130+</span>
                                    </div>
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/rajdeep.jpg" alt="author">
                                            <a href="game-Instructor.php" class="author-name">Rajdeep Rathod</a>
                                        </div>
                                        <a href="game-development-course.php" class="link-btn">View Details<i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="course-grid">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/350-devOps.jpg" alt="img">
                                </div>
                                <div class="course-content">
                                    <!-- <div class="d-flex justify-content-between">
                                        <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>(4.7)
                                        </div>
                                        
                                    </div> -->

                                    <h3 class="course-title"><a href="devops-certification-course.php">DevOps Certification Course</a></h3>
                                    <p class="course-text">Elevate Your DevOps Career in Ahmedabad & Indore! Our comprehensive DevOps Certification Course equips you with in-demand skills to automate and streamline software delivery pipelines. Learn CI/CD, cloud technologies, and more. Gain hands-on experience and secure top-tier DevOps jobs with our placement assistance.</p>
                                    <div class="course-meta style2">
                                        <span><i class="fal fa-file"></i>Modules 5</span>
                                        <span><i class="fal fa-user"></i>Students 85+</span>
                                    </div>
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/naresh.jpg" alt="author">
                                            <a href="devOps-Instructor.php" class="author-name">Naresh Chavda</a>
                                        </div>
                                        <a href="devops-certification-course.php" class="link-btn">View Details<i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="col-12">
                            <div class="course-grid">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/react-350x250.jpg" alt="img">
                                </div>
                                <div class="course-content">
                                    <!-- <div class="d-flex justify-content-between">
                                        <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>(4.7)
                                        </div>
                                        
                                    </div> -->

                                    <h3 class="course-title"><a href="react-native-course.php">Best React Native Training Course</a></h3>
                                    <p class="course-text">Build Cross-Platform Apps with React Native in Ahmedabad & Indore! Learn to build high-performance, user-friendly apps, and get certified to validate your skills. Get certified and launch your career as a sought-after React Native developer.</p>
                                    <div class="course-meta style2">
                                        <span><i class="fal fa-file"></i>Modules 8</span>
                                        <span><i class="fal fa-user"></i>Students 325+</span>
                                    </div>
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/yash.jpg" alt="author">
                                            <a href="react-native-Instructor.php" class="author-name">Yash Nandha</a>
                                        </div>
                                        <a href="react-native-course.php" class="link-btn">View Details<i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="course-grid">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/flutter-350x250.jpg" alt="img">
                                </div>
                                <div class="course-content">

                                    <h3 class="course-title"><a href="flutter-certification-course.php">Flutter Training Course</a></h3>
                                    <p class="course-text">Get Certified in Flutter and Launch Your Mobile App Development Career! Our Flutter Certification Course in Ahmedabad and Indore equips you with the skills and knowledge to excel in the mobile app industry. Build real-world apps and become a proficient Flutter developer.</p>
                                    <div class="course-meta style2">
                                        <span><i class="fal fa-file"></i>Modules 9</span>
                                        <span><i class="fal fa-user"></i>Students 200+</span>
                                    </div>
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/karan.jpg" alt="author">
                                            <a href="flutter-Instructor.php" class="author-name">Karan Parmar</a>
                                        </div>
                                        <a href="flutter-certification-course.php" class="link-btn">View Details<i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="course-grid">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/blockchain-350x250.jpg" alt="img">
                                </div>
                                <div class="course-content">
                                    <!-- <div class="d-flex justify-content-between">
                                        <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>(4.7)
                                        </div>
                                        
                                    </div> -->

                                    <h3 class="course-title"><a href="blockchain-training-course.php">Blockchain Training Course</a></h3>
                                    <p class="course-text">Dive into the Future of Technology with Blockchain Training in Ahmedabad & Indore! Our comprehensive Blockchain Training Course provides in-depth knowledge of blockchain technology, cryptocurrencies, and smart contracts.</p>
                                    <div class="course-meta style2">
                                        <span><i class="fal fa-file"></i>Modules 12</span>
                                        <span><i class="fal fa-user"></i>Students 130+</span>
                                    </div>
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/80x80_3.png" alt="author">
                                            <a href="ankit-patel-Instructor.php" class="author-name">Ankit Patel</a>
                                        </div>
                                        <a href="blockchain-training-course.php" class="link-btn">View Details<i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="course-grid">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/350-metaverse.jpg" alt="img">
                                </div>
                                <div class="course-content">

                                    <h3 class="course-title"><a href="metaverse-training-course.php">Metaverse Course</a></h3>
                                    <p class="course-text">Master Metaverse Development with Hands-On Training! Our Metaverse Development Course in Ahmedabad and Indore provides practical training in creating virtual worlds. Get certified and launch your career in the metaverse.
                                    </p>
                                    <div class="course-meta style2">
                                        <span><i class="fal fa-file"></i>Modules 6</span>
                                        <span><i class="fal fa-user"></i>Students 45+</span>
                                    </div>
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/tejas.jpg" alt="author">
                                            <a href="metaverse-Instructor.php" class="author-name">Tejas Acharya</a>
                                        </div>
                                        <a href="metaverse-training-course.php" class="link-btn">View Details<i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="course-grid">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/digitalMarketing-350x250.jpg" alt="img">
                                </div>
                                <div class="course-content">
                                    <h3 class="course-title"><a href="digital-marketing-training-course.php">Digital Marketing Course</a></h3>
                                    <p class="course-text">Master Digital Marketing with Our Certified Course in Ahmedabad & Indore! Learn the latest digital marketing strategies, including SEO, PPC, social media marketing, email marketing, and content marketing. Gain hands-on experience and get certified to boost your career.</p>
                                    <div class="course-meta style2">
                                        <span><i class="fal fa-file"></i>Modules 15</span>
                                        <span><i class="fal fa-user"></i>Students 200+</span>
                                    </div>
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/hinal.jpg" alt="author">
                                            <a href="digital-marketing-Instructor.php" class="author-name">Hinal Joshi</a>
                                        </div>
                                        <a href="digital-marketing-training-course.php" class="link-btn">View Details<i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="course-grid">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/350-seo.jpg" alt="img">
                                </div>
                                <div class="course-content">

                                    <h3 class="course-title"><a href="seo-certification-training-course.php">SEO Certification Course</a></h3>
                                    <p class="course-text">Master SEO and Dominate Search Engine Rankings! Our SEO Certification Course provides in-depth training in search engine optimization techniques. Learn strategic keyword research, high-impactful on-page SEO, off-page SEO, advanced technical SEO, and more.</p>
                                    <div class="course-meta style2">
                                        <span><i class="fal fa-file"></i>Modules 7</span>
                                        <span><i class="fal fa-user"></i>Students 100+</span>
                                    </div>
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/jay-malvi.jpg" alt="author">
                                            <a href="seo-instructor.php" class="author-name">Jay Malvi</a>
                                        </div>
                                        <a href="seo-certification-training-course.php" class="link-btn">View Details<i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-12">
                            <div class="course-grid">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/350-bde.jpg" alt="img">
                                </div>
                                <div class="course-content">
                                    <!-- <div class="d-flex justify-content-between">
                                        <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>(4.7)
                                        </div>
                                        
                                    </div> -->

                                    <h3 class="course-title"><a href="business-development-course.php">Business Development Course</a></h3>
                                    <p class="course-text">Accelerate Your Career with Our Business Development Course! Learn the art of building strong business relationships, identifying new opportunities, and driving revenue growth. Our comprehensive training covers sales techniques, negotiation skills, market analysis, and strategic planning.</p>
                                    <div class="course-meta style2">
                                        <span><i class="fal fa-file"></i>Modules 8</span>
                                        <span><i class="fal fa-user"></i>Students 65+</span>
                                    </div>
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/tilak-masani.jpg" alt="author">
                                            <a href="javascript:void(0)" class="author-name">Tilak Masrani</a>
                                        </div>
                                        <a href="business-development-course.php" class="link-btn">View Details<i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="course-grid">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/350-business-ana.jpg" alt="img">
                                </div>
                                <div class="course-content">

                                    <h3 class="course-title"><a href="business-analyst-course.php">Business Analyst Course</a></h3>
                                    <p class="course-text">Level Up Your Career with Our Business Analyst Certification Course! Become a skilled business analyst and bridge the gap between business and technology. Learn to gather requirements, analyze data, and deliver innovative solutions.</p>
                                    <div class="course-meta style2">
                                        <span><i class="fal fa-file"></i>Modules 8</span>
                                        <span><i class="fal fa-user"></i>Students 55+</span>
                                    </div>
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/priya.jpg" alt="author">
                                            <a href="business-analyst-Instructor.php" class="author-name">Priya Jaiswal</a>
                                        </div>
                                        <a href="business-analyst-course.php" class="link-btn">View Details<i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="course-grid">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/qa-350x250.jpg" alt="img">
                                </div>
                                <div class="course-content">
                                    <!-- <div class="d-flex justify-content-between">
                                        <div class="course-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                            </div>(4.7)
                                        </div>
                                        
                                    </div> -->

                                    <h3 class="course-title"><a href="software-testing-course.php">Software Testing Course
                                    </a></h3>
                                    <p class="course-text">Level Up Your QA Career with Our Software Testing Course! Our hands-on software testing training equips you with the tools and techniques to excel in the QA field. Learn test planning, test execution, test automation, and defect tracking.</p>
                                    <div class="course-meta style2">
                                        <span><i class="fal fa-file"></i>Modules 8</span>
                                        <span><i class="fal fa-user"></i>Students 180+</span>
                                    </div>
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/jimmy.jpg" alt="author">
                                            <a href="qa-Instructor.php" class="author-name">Jimmy Chotaliya</a>
                                        </div>
                                        <a href="software-testing-course.php" class="link-btn">View Details<i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="course-grid">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/350-cyber-security.jpg" alt="img">
                                </div>
                                <div class="course-content">
                                    <h3 class="course-title"><a href="cyber-security-training-course.php">Cyber Security Course</a></h3>
                                    <p class="course-text">Protect the Digital World with Our Cyber Security Course! Our hands-on cyber security training equips you with the tools and techniques to combat cyber threats. Learn ethical hacking, network security, incident response, and digital forensics.</p>
                                    <div class="course-meta style2">
                                        <span><i class="fal fa-file"></i>Modules 8</span>
                                        <span><i class="fal fa-user"></i>Students 125+</span>
                                    </div>
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/dixitbhai.jpg" alt="author">
                                            <a href="cyber-security-Instructor.php" class="author-name">Dixit Prajapati</a>
                                        </div>
                                        <a href="cyber-security-training-course.php" class="link-btn">View Details<i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        
                        <div class="col-12">
                            <div class="course-grid">
                                <div class="course-img">
                                    <img src="assets/img/course/couses-new/wordpress-350_250.jpg" alt="img">
                                </div>
                                <div class="course-content">
                                    <h3 class="course-title"><a href="cms-certification-course.php">CMS Course</a></h3>
                                    <p class="course-text">Master WordPress and Build Stunning Websites! Our WordPress Training Course in Ahmedabad and Indore provides hands-on training in website design and development. Learn to create professional websites, blogs, and online stores. Get certified and launch your career in web development.</p>
                                    <div class="course-meta style2">
                                        <span><i class="fal fa-file"></i>Modules 8</span>
                                        <span><i class="fal fa-user"></i>Students 140+</span>
                                    </div>
                                    <div class="course-author">
                                        <div class="author-info">
                                            <img src="assets/img/instructor/sweta-rao.jpg" alt="author">
                                            <a href="cms-Instructor.php" class="author-name">Sweta Rao</a>
                                        </div>
                                        <a href="cms-certification-course.php" class="link-btn">View Details<i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="th-pagination text-center pt-20">
                <ul>
                    <li><a href="blog.php">01</a></li>
                    <li><a href="blog.php">02</a></li>
                    <li><a href="blog.php">03</a></li>
                    <li><a href="blog.php"><i class="far fa-arrow-right"></i></a></li>
                </ul>
            </div> -->
        </div>
    </section>


    <!--Register Modal -->
    <div class="modal fade register-modal  load-modal" id="registerModal" tabindex="-1"
        aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="load-modal-wrapper position-relative">
                    <button class="closeButton sideMenuCls btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="far fa-times"></i></button>
                    <div class="contact-form-wrap background-image"
                        style="background-image: url(&quot;assets/img/bg/contact_bg_1.png&quot;);">
                        <!-- <span class="sub-title">Contact With Us!</span> -->
                        <h2 class="border-title">Registration now</h2>
                        <p class="mt-n1 mb-30 sec-text">Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod
                            tempor eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <form action="mail.php" method="POST" class="contact-form ajax-contact register-form" id="register_form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="hidden" name="form" value="registration_form"> 
                                        <input type="text" class="form-control style-white" name="name" id="name"
                                            placeholder="Your Name*" required>
                                        <i class="fal fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control style-white" name="email" id="email"
                                            placeholder="Email Address*" required>
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="number" class="form-control style-white" name="number" id="number"
                                            placeholder="Contact Number*" required>
                                        <i class="fal fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="captcha-container">
                                        <div class="input-refresh-btn mb-10">
                                            <div id="captcha" class="captcha"></div>
                                            <button id="refreshBtn" class="captcha-ref-btn" type="button"><i
                                                    class="fal fa-refresh"></i></button>
                                        </div>
                                        <div class="input-refresh-btn">
                                            <input type="text" name="userInput" id="userInput" class="form-control style-white  userInput"
                                                placeholder="Enter CAPTCHA" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-btn col-12 mt-10">
                                    <button class="th-btn " type="submit">Submit<i class="fas fa-long-arrow-right ms-2"></i></button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

    <?php include('footer.php'); ?>