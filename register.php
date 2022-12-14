<!doctype html>
<html lang="en">
  <head><style>
.info{font-size:.8em;color: #FF6600;letter-spacing:2px;padding-left:5px;}
.btnAction{background-color:#2FC332;border:0;padding:10px 40px;color:#FFF;border:#F0F0F0 1px solid; border-radius:4px;}
.btnRefresh{background-color:gold;border:0;padding:7px 10px;color:#FFF;float:left;margin-left:15px}</style>
    <title>register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
	<script>
function refreshCaptcha() {
	$("#captcha_code").attr('src','captcha_code.php');
}
</script>
  </head>
  <body>
    
    <header role="banner">
     
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="index.html">University</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
              </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="courses.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Branch</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="courses.html">Mechanical Engineering</a>
                  <a class="dropdown-item" href="courses.html">Computer science</a>
                  <a class="dropdown-item" href="courses.html">Information technology</a>
                  <a class="dropdown-item" href="courses.html">Electrrical engineering</a>
                </div>

              </li>

            
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
            </ul>
            <ul class="navbar-nav absolute-right">
              <li>
                <a href="login.html">Login</a> / <a href="register.html">Register</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/img_3.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
  
           
            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="form-wrap">
              <h2 class="mb-5">Register new account</h2>
              <form action="insert.php" method="post">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="name">First name</label>
                      <input type="text" id="name" class="form-control py-2 " name="t1">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="name">Last name</label>
                      <input type="text" id="name" class="form-control py-2 " name="t2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Email Address</label>
                      <input type="text" id="name" class="form-control py-2" name="t3">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Address</label>
                      <input type="text" id="name" class="form-control py-2" name="t4">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Mobile No.</label>
                      <input type="number" id="name" class="form-control py-2" name="t5">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Password</label>
                      <input type="password" id="name" class="form-control py-2 " name="t6">
                    </div>
                  </div>

                  
                  <div class="row mb-5">
                    <div class="col-md-12 form-group">
                      <label for="name">Re-type Password</label>
                      <input type="password" id="name" class="form-control py-2">
                    </div>
                  </div>
                  <div class="col-md-6"><img id="captcha_code" src="captcha_code.php" /><br>
									<label>Captcha</label> 
<span id="captcha-info" class="info"></span><br/>
<input type="text" name="captcha" id="captcha" class="demoInputBox" autocomplete="off"><br>
</div><br>
<div>
<input type=button name="refresh captcha" value="Refresh captcha" class="btnRefresh" onClick="refreshCaptcha();">
</div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input name="submit" type="submit" value="Register" class="btn btn-primary px-5 py-2">
                    </div>
                       
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </section>
    
    <footer class="site-footer border-top">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3>University</h3>
            <p>Indore is India???s first Design Centered University, promoted by MIT Group of Institutions, Pune, which has a proven legacy of 35 years in the field of higher education..</p>
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3 class="heading">Quick Link</h3>
            <div class="row">
              <div class="col-md-6">
                <ul class="list-unstyled">
                   <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="">Branch</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="login.html">Login</a></li>
                  <li><a href="register.html">Register</a></li>
                </ul>
              </div>
              
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3 class="heading">Contact Information</h3>
            <div class="block-23">
              <ul>
                <li><span class="icon ion-android-pin"></span><span class="text">Indore university near bhavarkuwa (M.P.) India, </span></li>
                <li><a href="#"><span class="icon ion-ios-telephone"></span><span class="text">+919039696533</span></a></li>
                <li><a href="#"><span class="icon ion-android-mail"></span><span class="text">harshalmahajan171297@gmail.com</span></a></li>
                <li><span class="icon ion-android-time"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-md-12 text-center copyright">
            
            
            <p class="float-md-right">
              <a href="https://www.facebook.com/" class="fa fa-facebook p-2"></a>
              <a href="https://twitter.com/login?lang=en" class="fa fa-twitter p-2"></a>
              <a href="https://www.linkedin.com/uas/login" class="fa fa-linkedin p-2"></a>
              <a href="https://www.instagram.com/accounts/login/" class="fa fa-instagram p-2"></a>


            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>

    <script src="js/main.js"></script>
  </body>
</html>