<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Blog 2.0 - Home</title>
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="./assets2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets2/css/all.min.css">
    <link rel="stylesheet" href="./assets2/css/animate.css">
    <link rel="stylesheet" href="./assets2/css/nice-select.css">
    <link rel="stylesheet" href="./assets2/css/owl.min.css">
    <link rel="stylesheet" href="./assets2/css/jquery-ui.min.css">
    <link rel="stylesheet" href="./assets2/css/magnific-popup.css">
    <link rel="stylesheet" href="./assets2/css/flaticon.css">
    <link rel="stylesheet" href="./assets2/css/main.css">

    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
</head>

<body>
    <!--============= ScrollToTop Section Starts Here =============-->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--============= ScrollToTop Section Ends Here =============-->


    <!--============= Header Section Starts Here =============-->
    <header class="header-section header-white-dark">
        <div class="container">
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->


    <!--============= Banner Section Starts Here =============-->
    <section class="banner-8 oh">
        <div class="banner-shape-8 d-lg-block d-none">
            <img src="./assets2/images/banner/banner-shape-8.png" alt="banner">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content-8">
                        <h1 class="title">Blog 2.0</h1>
                        <p>
                            An Student Interactive Forum.
                        </p>
                        <?php if(isset($_SESSION['user'])){ ?>
                        <p>
                        Welcome back <span style="color:red;" ?><?php echo $_SESSION['user']['name']; ?></span>
                        </p>
                        <?php } ?>
                       <?php if(!isset($_SESSION['user'])){ ?>
                        <div class="banner-button-group">
                            <a href="register.php" class="button-4">Start Blogging</a>
                            <a href="login.php" class="button-4 active">Login</a>
                        </div>
<?php } else {?>
    <div class="banner-button-group">
                            <a href="home.php" class="button-4">Go to Blog</a>
                        </div>
<?php } ?>
                    </div>
                </div>
                <div class="col-lg-6 d-none">
                </div>
                <div class="col-12">
                    <div class="counter-wrapper-3">
                        <div class="counter-item">
                            <div class="counter-thumb">
                                <img src="./assets2/images/icon/access3.png" alt="icon">
                            </div>
                            <div class="counter-content">
                                <h2 class="title"><span class="counter">10000</span>+</h2>
                                <span class="name">Lines Of Code</span>
                            </div>
                        </div>
                        <?php
                        $sql = "select sum(views) as count from posts";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc(); 
                        $count = $row['count'];
                        ?>
                        <div class="counter-item">
                            <div class="counter-thumb">
                                <img src="./assets2/images/icon/counter2.png" alt="icon">
                            </div>
                            <div class="counter-content">
                                <h2 class="title"><span class="counter"><?php echo $count; ?></span></h2>
                                <span class="name">Post Visits</span>
                            </div>
                        </div>
                        <div class="counter-item">
                            <div class="counter-thumb">
                                <img src="./assets2/images/icon/counter5.png" alt="icon">
                            </div>
                            <div class="counter-content">
                                <h2 class="title"><span class="counter">100</span><span>%</span></h2>
                                <span class="name">User Friendly</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Banner Section Ends Here =============-->


    <!--============= To Access Section Starts Here =============-->
    <section class="to-access-section padding-top padding-bottom bg_img mb-lg-5" data-background="./assets2/images/feature/to-access-bg.png" id="feature">
        <div class="container">
            <div class="section-header">
                <h5 class="cate">Amazing features of</h5>
                <h2 class="title">Blog 2.0</h2>
                <p>The Student Interactive Forum</p>
            </div>
            <div class="row mb-30 justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="to-access-item active">
                        <div class="to-access-thumb">
                            <span class="anime"></span>
                            <div class="thumb">
                                <img src="./assets2/images/icon/access1.png" alt="access">
                            </div>
                        </div>
                        <h5 class="title">Lite</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="to-access-item active">
                        <div class="to-access-thumb">
                            <span class="anime"></span>
                            <div class="thumb">
                                <img src="./assets2/images/icon/access2.png" alt="access">
                            </div>
                        </div>
                        <h5 class="title">User Friendly</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="to-access-item active">
                        <div class="to-access-thumb">
                            <span class="anime"></span>
                            <div class="thumb">
                                <img src="./assets2/images/icon/access3.png" alt="access">
                            </div>
                        </div>
                        <h5 class="title">Secure</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="to-access-item active">
                        <div class="to-access-thumb">
                            <span class="anime"></span>
                            <div class="thumb">
                                <img src="./assets2/images/icon/access4.png" alt="access">
                            </div>
                        </div>
                        <h5 class="title">Reliable</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= To Access Section Ends Here =============-->


    <!--============= How It Works Section Starts Here =============-->
    <section class="work-section padding-bottom bg_img mb-md-95 pb-md-0" data-background="./assets2/images/work/work-bg.jpg">
        <div class="oh padding-top pos-rel">
            <div class="top-shape d-none d-lg-block">
                <img src="./assets2/css/img/work-shape.png" alt="css">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-7">
                        <div class="section-header left-style cl-white">
                            <h5 class="cate">About Our App</h5>
                            <h2 class="title">Let’s See How Our App Work</h2>
                            <p>It's easier than you think.Follow the simple easy steps</p>
                        </div>
                    </div>
                </div>
                <div class="work-slider owl-carousel owl-theme" data-slider-id="2">
                    <div class="work-item">
                        <div class="work-thumb">
                            <img src="./assets2/images/work/work1.png" alt="work">
                        </div>
                        <div class="work-content cl-white">
                            <h3 class="title">Register</h3>
                            <p>First, you need to register a user account on our website before
                                configuring and using it on a regular basis.</p>
                            <a href="register.php" class="get-button white light">Get Started <i class="flaticon-right"></i></a>
                        </div>
                    </div>
                    <div class="work-item">
                        <div class="work-thumb">
                            <img src="./assets2/images/work/work1.png" alt="work">
                        </div>
                        <div class="work-content cl-white">
                            <h3 class="title">View Posts</h3>
                            <p>After Login You can View the posts posted by the various users and you can able to comment on the posts the you like or ypou can post your feed-backs</p>
                            <a href="home.php" class="get-button white light">Get Started <i class="flaticon-right"></i></a>
                        </div>
                    </div>
                    <div class="work-item">
                        <div class="work-thumb">
                            <img src="./assets2/images/work/work1.png" alt="work">
                        </div>
                        <div class="work-content cl-white">
                            <h3 class="title">Create a Post</h3>
                            <p>You are able to create a new post without any worries with our user friendly post creation tool.</p>
                            <a href="new_post.php" class="get-button white light">Create a Post<i class="flaticon-right"></i></a>
                        </div>
                    </div>
                    <div class="work-item">
                        <div class="work-thumb">
                            <img src="./assets2/images/work/work1.png" alt="work">
                        </div>
                        <div class="work-content cl-white">
                            <h3 class="title">Manage</h3>
                            <p>You can manage your posts by edit, publish, delete and update your posts..</p>
                            <a href="post.php" class="get-button white light">Manage Now <i class="flaticon-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="count-slider owl-thumbs" data-slider-id="2">
                <div class="count-item">
                    <span class="serial">01</span>
                    <h5 class="title">Register</h5>
                </div>
                <div class="count-item">
                    <span class="serial">02</span>
                    <h5 class="title">Explore</h5>
                </div>
                <div class="count-item">
                    <span class="serial">03</span>
                    <h5 class="title">Create</h5>
                </div>
                <div class="count-item">
                    <span class="serial">04</span>
                    <h5 class="title">Manage</h5>
                </div>
            </div>
        </div>
    </section>
    <!--============= How It Works Section Ends Here =============-->


    <!--============= Access Section Starts Here =============-->
    <section class="access-section padding-bottom padding-top oh">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-4 col-xl-3 rtl d-none d-lg-block">
                    <img src="./assets2/images/access/access1.png" alt="access">
                </div>
                <div class="col-lg-8">
                    <div class="access-content">
                        <div class="section-header left-style mb-olpo">
                            <h5 class="cate">Enhanced</h5>
                            <h2 class="title">Student Interactive Forum</h2>
                            <p>Our innovative, easy-to-use tools live in just one platform, saving you time and 
                                exploring the world. Make admin tasks more efficient, usefull to students to share knowledge , and collaborate more seamlessly.</p>
                        </div>
                        <a href="register.php" class="get-button">Register <i class="flaticon-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Access Section Ends Here =============-->


    <!--============= Pricing Section Starts Here =============-->
    <section class="pricing-section padding-top oh padding-bottom pb-lg-half bg_img pos-rel" data-background="./assets2/images/bg/pricing-bg.jpg" id="pricing">
        <div class="top-shape d-none d-md-block">
            <img src="./assets2/css/img/top-shape.png" alt="css">
        </div>
        <div class="bottom-shape d-none d-md-block mw-0">
            <img src="./assets2/css/img/bottom-shape.png" alt="css">
        </div>
        <div class="ball-2" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
        data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="./assets2/images/balls/1.png" alt="balls">
        </div>
        <div class="ball-3" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30"
        data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="./assets2/images/balls/2.png" alt="balls">
        </div>
        <div class="ball-4" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30"
        data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="./assets2/images/balls/3.png" alt="balls">
        </div>
        <div class="ball-5" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30"
        data-paroller-type="foreground" data-paroller-direction="vertical">
            <img src="./assets2/images/balls/4.png" alt="balls">
        </div>
        <div class="ball-6" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
        data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="./assets2/images/balls/5.png" alt="balls">
        </div>
        <div class="ball-7" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
        data-paroller-type="foreground" data-paroller-direction="vertical">
            <img src="./assets2/images/balls/6.png" alt="balls">
        </div>
        <div class="container">
            <div class="section-header cl-white">
                <h5 class="cate">Enhanced Search</h5>
                <h2 class="title">Simple and efective ajax implementation</h2>
                <p>
                  &nbsp;
                </p>
            </div>
        </div>
    </section>
    <!--============= Pricing Section Ends Here =============-->


    <!--============= Testimonial Section Starts Here =============-->
    <section class="testimonial-section padding-top pt-lg-half">
        <div class="container">
            <div class="section-header">
                <h5 class="cate">Our</h5>
                <h2 class="title">Happy Users</h2>
            </div>
            <div class="testimonial-wrapper">
                <a href="#0" class="testi-next trigger">
                    <img src="./assets2/images/client/left.png" alt="client">
                </a>
                <a href="#0" class="testi-prev trigger">
                    <img src="./assets2/images/client/right.png" alt="client">
                </a>
                <div class="testimonial-area testimonial-slider owl-carousel owl-theme">
                    <div class="testimonial-item">
                        <div class="testimonial-thumb">
                            <div class="thumb">
                                <img src="./assets2/user.png" alt="client">
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="ratings">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <p>
                                Awesome product. The guys have put huge effort into this app and focused on simplicity and ease of use.
                            </p>
                            <h5 class="title"><a href="#0">Bela Bose</a></h5>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-thumb">
                            <div class="thumb">
                                <img src="./assets2/user.png" alt="client">
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="ratings">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <p>
                                Awesome product. The guys have put huge effort into this app and focused on simplicity and ease of use.
                            </p>
                            <h5 class="title"><a href="#0">Raihan Rafuj</a></h5>
                        </div>
                    </div>
                </div>
                <div class="button-area">
                    <a href="#0" class="button-2">Leave a review <i class="flaticon-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--============= Testimonial Section Ends Here =============-->


    <!--============= Faq Section Starts Here =============-->
    <section class="faq-section padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="faq-header">
                        <div class="cate">
                            <img src="./assets2/images/cate.png" alt="cate">
                        </div>
                        <h2 class="title">Frequently Asked Questions</h2>
                        <a href="#0">More Questions <i class="flaticon-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-wrapper mb--38">
                        <div class="faq-item">
                            <div class="faq-thumb">
                                <i class="flaticon-pdf"></i>
                            </div>
                            <div class="faq-content">
                                <h4 class="title">Is the Web App Secure?</h4>
                                <p>
                                    Web application security is the process of protecting websites and online services against different security threats that exploit vulnerabilities in an application’s code.
                                </p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-thumb">
                                <i class="flaticon-pdf"></i>
                            </div>
                            <div class="faq-content">
                                <h4 class="title">What features does the Web App have?</h4>
                                <p>
                                    Both the Mobile Apps and the Web App give you the ability to you to access your account information, view news releases, report an outage, and contact us via email or phone.
                                </p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-thumb">
                                <i class="flaticon-pdf"></i>
                            </div>
                            <div class="faq-content">
                                <h4 class="title">What is blog?</h4>
                                <p>
                                A blog is an online journal or informational website displaying information in reverse chronological order, with the latest posts appearing first, at the top. It is a platform where a writer or a group of writers share their views on an individual subject.
                                </p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-thumb">
                                <i class="flaticon-pdf"></i>
                            </div>
                            <div class="faq-content">
                                <h4 class="title">Why Blog? </h4>
                                <p>
                                One of the most effective ways to build brand awareness, while providing relevant and useful content to your target audience is through consistent blogging.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Faq Section Ends Here =============-->


    <!--============= Trial Section Starts Here =============-->
    <section class="trial-section padding-bottom padding-top">
        <div class="container">
            <div class="trial-wrapper padding-top padding-bottom pr">
                <div class="ball-1">
                    <img src="./assets2/images/balls/balls.png" alt="balls">
                </div>
                <div class="trial-content cl-white">
                    <h3 class="title">Still Confusing!!</h3>
                    <p>
                        Just Register to continue!!
                    </p>
                </div>
                <div class="trial-button">
                    <a href="register.php" class="transparent-button">Register <i class="flaticon-right ml-xl-2"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--============= Trial Section Ends Here =============-->

    <script>
let deferredPrompt;
const addBtn = document.querySelector('.add-button');
addBtn.style.display = 'none';

window.addEventListener('beforeinstallprompt', (e) => {
  // Prevent Chrome 67 and earlier from automatically showing the prompt
  e.preventDefault();
  // Stash the event so it can be triggered later.
  deferredPrompt = e;
  // Update UI to notify the user they can add to home screen
  addBtn.style.display = 'block';

  addBtn.addEventListener('click', (e) => {
    // hide our user interface that shows our A2HS button
    addBtn.style.display = 'none';
    // Show the prompt
    deferredPrompt.prompt();
    // Wait for the user to respond to the prompt
    deferredPrompt.userChoice.then((choiceResult) => {
        if (choiceResult.outcome === 'accepted') {
          console.log('User accepted the A2HS prompt');
        } else {
          console.log('User dismissed the A2HS prompt');
        }
        deferredPrompt = null;
      });
  });
});

btnInstall.addEventListener('click', () => {
  // Update the install UI to remove the install button
  document.querySelector('#install-button').disabled = true;
  // Show the modal add to home screen dialog
  installPromptEvent.prompt();
  // Wait for the user to respond to the prompt
  installPromptEvent.userChoice.then((choice) => {
    if (choice.outcome === 'accepted') {
      console.log('User accepted the A2HS prompt');
    } else {
      console.log('User dismissed the A2HS prompt');
    }
    // Clear the saved prompt since it can't be used again
    installPromptEvent = null;
  });
});
</script>


<script>
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', ()=> {
            navigator
            .serviceWorker
            .register('sw01.js')
            .then(()=>console.log("Ready."))
            .catch(()=>console.log("Err..."));
        });
    }
</script>


<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <!--============= Footer Section Starts Here =============-->
   <?php include('foot.php'); ?>
    <!--============= Footer Section Ends Here =============-->

    <script src="./assets2/js/jquery-3.3.1.min.js"></script>
    <script src="./assets2/js/modernizr-3.6.0.min.js"></script>
    <script src="./assets2/js/plugins.js"></script>
    <script src="./assets2/js/bootstrap.min.js"></script>
    <script src="./assets2/js/magnific-popup.min.js"></script>
    <script src="./assets2/js/jquery-ui.min.js"></script>
    <script src="./assets2/js/wow.min.js"></script>
    <script src="./assets2/js/waypoints.js"></script>
    <script src="./assets2/js/nice-select.js"></script>
    <script src="./assets2/js/owl.min.js"></script>
    <script src="./assets2/js/counterup.min.js"></script>
    <script src="./assets2/js/paroller.js"></script>
    <script src="./assets2/js/main.js"></script>
</body>

</html>