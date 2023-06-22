<?php
$insert = false;
if(isset($_POST['Name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Other = $_POST['Other'];

    $sql = "INSERT INTO `gency`.`project` (`Name`, `Email`, `Phone`, `Other`, `Date`) VALUES ('$Name','$Email', '$Phone', '$Other', current_timestamp());";

    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Agency</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap"
        rel="stylesheet">


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">



    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Template Stylesheet -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <link href="css/responsive.css" rel="stylesheet">

    <!-- animation link -->

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-warning role=" status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Banner section start -->
    <section class="Banner_section">
        <nav class="sticky-top navbar">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
              <i class="fas fa-bars"></i>
            </label>
            <label class="logo">
                <img src="img/navbar.svg" alt="">
            </label>
            <ul>
              <li><a href="#services">services</a></li>
              <li><a href="#portfolio">portfolio</a></li>
              <li><a href="#about">about</a></li>
              <li><a href="#team">team</a></li>
              <li><a href="#Contact">Contact</a></li>
            </ul>
          </nav>
        <div class="container">
            <div class="text" data-aos="zoom-in-down">
                <?php
                    if($insert == true){
                   echo "<p class='submitmsg'>Thanks for submitting your form.</p>";
                   echo "<p class='submitms'>We talk With You Soon</p>";
                   echo ' <img src="img/a.webp" alt="" width="20" height="20">';
                  }
                  else{
                    echo "<h2>Welcome To Our Studio!</h2>";
                    echo "<h1>It's Nice To Meet You</h1>";
                    echo "<button type=button class=main-btn fw-light shadow py-5 my-5>TELL ME MORE</button>";
                  }
                 ?>

            </div>
        </div>
    </section>
    <!-- Banner section end -->

    <!-- service section start -->
    <section class="service-section" id="services">
        <div class="container">
            <div class="text-center">
                <div class="text" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h4>Services</h4>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4" data-aos="fade-up" data-aos-duration="3000">
                    <div class="text-center">
                        <div class="icon-box">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-warning"></i>
                                <i class="fas fa-shopping-cart fa-stack-1x fa-inverse fa-beat-fade"></i>
                            </span>
                        </div>
                        <h4>E-Commerce</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo
                            inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4" data-aos="fade-up" data-aos-duration="3000">
                    <div class="text-center">
                        <div class="icon-box">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-warning"></i>
                                <i class="fas fa-laptop fa-stack-1x fa-inverse fa-beat-fade"></i>
                            </span>
                        </div>
                        <h4>Responsive Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo
                            inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4" data-aos="fade-up" data-aos-duration="3000">
                    <div class="text-center">
                        <div class="icon-box">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-warning"></i>
                                <i class="fas fa-lock fa-stack-1x fa-inverse fa-beat-fade"></i>
                            </span>
                        </div>
                        <h4>Web Security</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo
                            inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service section end -->

    <!-- portfolio section start -->
    <section class="portfolio-section" id="portfolio">
        <div class="container">
            <div class="text-center">
                <div class="text" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h4>Portfolio</h4>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
            </div>
        </div>
        <div class="album py-5 bg-body-tertiary">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="boxes" data-bs-toggle="modal" data-bs-target="#signupModal" data-aos="flip-left"
                            data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <div class="card shadow-sm">
                                <img src="img/portfolio/1.jpg" alt="" class="img-fluid rounded-3">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h3>Threads</h3>
                                        <p>Illustration</p>
                                    </div>
                                    <div class="card-1">
                                        <div class="text-center">
                                            <h1>+</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="boxes" data-bs-toggle="modal" data-bs-target="#signupModal2" data-aos="flip-left"
                            data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <div class="card shadow-sm">
                                <img src="img/portfolio/2.jpg" alt="">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h3>Explore</h3>
                                        <p>Graphic Design</p>
                                    </div>
                                    <div class="card-1">
                                        <div class="text-center">
                                            <h1>+</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="boxes" data-bs-toggle="modal" data-bs-target="#signupModal3" data-aos="flip-left"
                            data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <div class="card shadow-sm">
                                <img src="img/portfolio/3.jpg" alt="">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h3>Finish</h3>
                                        <p>Identity</p>
                                    </div>
                                    <div class="card-1">
                                        <div class="text-center">
                                            <h1>+</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="boxes" data-bs-toggle="modal" data-bs-target="#signupModal4" data-aos="flip-left"
                            data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <div class="card shadow-sm">
                                <img src="img/portfolio/4.jpg" alt="">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h3>Lines</h3>
                                        <p>Branding</p>
                                    </div>
                                    <div class="card-1">
                                        <div class="text-center">
                                            <h1>+</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="boxes" data-bs-toggle="modal" data-bs-target="#signupModal5" data-aos="flip-left"
                            data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <div class="card shadow-sm">
                                <img src="img/portfolio/5.jpg" alt="">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h3>Southwest</h3>
                                        <p>Website Design</p>
                                    </div>
                                    <div class="card-2">
                                        <div class="text-center">
                                            <h1>+</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="boxes" data-bs-toggle="modal" data-bs-target="#signupModal6" data-aos="flip-left"
                            data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <div class="card shadow-sm">
                                <img src="img/portfolio/6.jpg" alt="">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h3>Window</h3>
                                        <p>Photography</p>
                                    </div>
                                    <div class="card-1">
                                        <div class="text-center">
                                            <h1>+</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio section end -->

    <!-- sing up 1 -->
    <div class="modal fade" id="signupModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog text-center justify-content-center align-items-center" data-aos="flip-left"
            data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container">
                        <div class="text-center">
                            <div class="text">
                                <h4>Project Name</h4>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn-close fs-1" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="img/portfolio/1.jpg" alt="" class="img-fluid">
                    <div class="text-center py-5">
                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam
                            quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis
                            facere nemo!</p>
                        <h6><span class="fw-bold">Client :</span>Threads</h6>
                        <h6><span class="fw-bold">Category :</span>Illustration</h6>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn " data-bs-dismiss="modal"><span>X CLOSE PROJECT</span></button>
                </div>
            </div>
        </div>
    </div>
    <!-- sign up 1-->

    <!-- sing up 2 -->
    <div class="modal fade" id="signupModal2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog text-center justify-content-center align-items-center" data-aos="flip-left"
            data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container">
                        <div class="text-center">
                            <div class="text">
                                <h4>Project Name</h4>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn-close fs-1" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="img/portfolio/2.jpg" alt="" class="img-fluid">
                    <div class="text-center py-5">
                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam
                            quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis
                            facere nemo!</p>
                        <h6><span class="fw-bold">Client :</span>Expore</h6>
                        <h6><span class="fw-bold">Category :</span>Graphic Design</h6>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal"><span>X CLOSE PROJECT</span></button>
                </div>
            </div>
        </div>
    </div>
    <!-- sign up 2-->

    <!-- sing up 3 -->
    <div class="modal fade" id="signupModal3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog text-center justify-content-center align-items-center" data-aos="flip-left"
            data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container">
                        <div class="text-center">
                            <div class="text">
                                <h4>Project Name</h4>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn-close fs-1" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="img/portfolio/3.jpg" alt="" class="img-fluid">
                    <div class="text-center py-5">
                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam
                            quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis
                            facere nemo!</p>
                        <h6><span class="fw-bold">Client :</span>Finish</h6>
                        <h6><span class="fw-bold">Category :</span>Identity</h6>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal"><span>X CLOSE PROJECT</span></button>
                </div>
            </div>
        </div>
    </div>
    <!-- sign up 3-->

    <!-- sing up 4 -->
    <div class="modal fade" id="signupModal4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog text-center justify-content-center align-items-center" data-aos="flip-left"
            data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container">
                        <div class="text-center">
                            <div class="text">
                                <h4>Project Name</h4>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn-close fs-1" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="img/portfolio/4.jpg" alt="" class="img-fluid">
                    <div class="text-center py-5">
                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam
                            quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis
                            facere nemo!</p>
                        <h6><span class="fw-bold">Client :</span>Lines</h6>
                        <h6><span class="fw-bold">Category :</span>Branding</h6>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal"><span>X CLOSE PROJECT</span></button>
                </div>
            </div>
        </div>
    </div>
    <!-- sign up 4-->

    <!-- sing up 5 -->
    <div class="modal fade" id="signupModal5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog text-center justify-content-center align-items-center" data-aos="flip-left"
            data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container">
                        <div class="text-center">
                            <div class="text">
                                <h4>Project Name</h4>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn-close fs-1" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="img/portfolio/5.jpg" alt="" class="img-fluid">
                    <div class="text-center py-5">
                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam
                            quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis
                            facere nemo!</p>
                        <h6><span class="fw-bold">Client :</span>Southwest</h6>
                        <h6><span class="fw-bold">Category :</span>Web Design</h6>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal"><span>X CLOSE PROJECT</span></button>
                </div>
            </div>
        </div>
    </div>
    <!-- sign up 5-->

    <!-- sing up 6 -->
    <div class="modal fade" id="signupModal6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog text-center justify-content-center align-items-center" data-aos="flip-left"
            data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container">
                        <div class="text-center">
                            <div class="text">
                                <h4>Project Name</h4>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn-close fs-1" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="img/portfolio/6.jpg" alt="" class="img-fluid">
                    <div class="text-center py-5">
                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam
                            quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis
                            facere nemo!</p>
                        <h6><span class="fw-bold">Client :</span>Window</h6>
                        <h6><span class="fw-bold">Category :</span>Photography</h6>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal"><span>X CLOSE PROJECT</span></button>
                </div>
            </div>
        </div>
    </div>
    <!-- sign up 6-->

    <!-- about start -->
    <section class="about-section" id="about">
        <div class="container">
            <div class="text-center">
                <div class="text" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h4>About</h4>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="row featurette">
                    <div class="col-md-5 a">
                        <span class="fw-bold fs-5">
                            2009-2011
                            Our Humble Beginnings
                        </span>
                        <p class="py-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum
                            eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed,
                            incidunt et ea quo dolore laudantium consectetur!</p>
                    </div>
                    <div class="col-md-2 b" data-aos="flip-right" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <img src="img/about/1.jpg" alt="" class="img-fluid rounded-circle">
                    </div>
                </div>
                <div class="timeline text-center"></div>
                <div class="row featurette">
                    <div class="col-md-2 image c" data-aos="flip-right" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <img src="img/about/2.jpg" alt="" class="img-fluid rounded-circle">
                    </div>
                    <div class="col-md-5 margin d">
                        <span class="fw-bold fs-5">
                            March 2011
                            An Agency is Born
                        </span>
                        <p class="py-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum
                            eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed,
                            incidunt et ea quo dolore laudantium consectetur!</p>
                    </div>
                </div>
                <div class="timeline text-center"></div>
                <div class="row featurette">
                    <div class="col-md-5 a">
                        <span class="fw-bold fs-5">
                            December 2015
                            Transition to Full Service
                        </span>
                        <p class="py-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum
                            eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed,
                            incidunt et ea quo dolore laudantium consectetur!</p>
                    </div>
                    <div class="col-md-2 b" data-aos="flip-right" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <img src="img/about/3.jpg" alt="" class="img-fluid rounded-circle">
                    </div>
                </div>
                <div class="timeline text-center"></div>
                <div class="row featurette">
                    <div class="col-md-2 image c" data-aos="flip-right" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <img src="img/about/4.jpg" alt="" class="img-fluid rounded-circle">
                    </div>
                    <div class="col-md-5 margin d">
                        <span class="fw-bold fs-5">
                            July 2020
                            Phase Two Expansion
                        </span>
                        <p class="py-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum
                            eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed,
                            incidunt et ea quo dolore laudantium consectetur!</p>
                    </div>
                </div>
                <div class="timeline text-center"></div>
                <div class="row featurette" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
                    <div class="col-md-5">
                    </div>
                    <div class="col-md-2 e">
                        <div class="text rounded-circle">
                            <p>Be Part
                                Of Our
                                Story! </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about end -->

    <!--team start -->
    <section class="team-section justify-content-center text-center" id="team">
        <div class="container">
            <div class="text-center">
                <div class="text" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h4>Our Amazing Team</h4>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row py-4  wow fadeInUp text-center" data-wow-delay="0.5s" data-aos="fade-up"
                data-aos-anchor-placement="center-bottom">
                <div class="col-6 col-lg-4 mb-5">
                    <div class=" product-box">
                        <div class="product-icon text-center">
                            <img src="img/team/1.jpg" class="img-fluid rounded-circle">
                        </div>
                        <div class="product-text text-center my-3">
                            <h3 class="fw-bold text-dark">Parveen Anand</h3>
                            <h5 class="text-warning">Lead Designer</h5>
                            <div class="icon h-100 d-inline align-items-center text-primary">
                                <a href="btn btn-link text-light"><i
                                        class="fab fa-facebook-f px-2 text-secondary shadow rounded-circle px-3 py-3"></i></a>
                                <a href="btn btn-link text-light"><i
                                        class="fab fa-twitter px-2 text-secondary shadow rounded-circle px-3 py-3"></i></a>
                                <a href="btn btn-link text-light"><i
                                        class="fab fa-instagram px-2 text-secondary shadow rounded-circle px-3 py-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 mb-5">
                    <div class=" product-box">
                        <div class="product-icon text-center">
                            <img src="img/team/2.jpg" class="img-fluid rounded-circle">
                        </div>
                        <div class="product-text text-center my-3">
                            <h3 class="fw-bold text-dark">Diana Petersen</h3>
                            <h5 class="text-warning">Lead Marketer</h5>
                            <div class="icon h-100 d-inline align-items-center text-primary">
                                <a href="btn btn-link text-light"><i
                                        class="fab fa-facebook-f px-2 text-secondary shadow rounded-circle px-3 py-3"></i></a>
                                <a href="btn btn-link text-light"><i
                                        class="fab fa-twitter px-2 text-secondary shadow rounded-circle px-3 py-3"></i></a>
                                <a href="btn btn-link text-light"><i
                                        class="fab fa-instagram px-2 text-secondary shadow rounded-circle px-3 py-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 mb-5">
                    <div class=" product-box">
                        <div class="product-icon text-center">
                            <img src="img/team/3.jpg" class="img-fluid rounded-circle">
                        </div>
                        <div class="product-text text-center my-3">
                            <h3 class="fw-bold text-dark">Larry Parker</h3>
                            <h5 class="text-warning">Lead Developer</h5>
                            <div class="icon h-100 d-inline align-items-center text-primary">
                                <a href="btn btn-link text-light"><i
                                        class="fab fa-facebook-f px-2 text-secondary shadow rounded-circle px-3 py-3"></i></a>
                                <a href="btn btn-link text-light"><i
                                        class="fab fa-twitter px-2 text-secondary shadow rounded-circle px-3 py-3"></i></a>
                                <a href="btn btn-link text-light"><i
                                        class="fab fa-instagram px-2 text-secondary shadow rounded-circle px-3 py-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container w-50">
            <div class="text-center">
                <div class="text-1">
                    <p class="fw-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam
                        veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>
    <!--team ends  -->

       <!-- Contact start -->
    <section class="contact-section" id="Contact">
        <div class="container text-center mt-4 pt-5">
            <div class="row">
                <div class="col-lg-3 microsoft">
                    <img src="img/logos/microsoft.svg" alt="" width="200" class="img-fluid">
                </div>
                <div class="col-lg-3 google">
                    <img src="img/logos/google.svg" alt="" width="150" class="img-fluid">
                </div>
                <div class="col-lg-3 fac">
                    <img src="img/logos/facebook.svg" alt="" width="180" class="img-fluid">
                </div>
                <div class="col-lg-3 ibm">
                    <img src="img/logos/ibm.svg" alt="" width="90" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="container-xxl text-center">
            <div class="container">
                <div class="text-center">
                    <div class="text">
                        <h4>Contact Us</h4>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="row g-0 text-center">
                <form action="index.php" method="post">
                    <div class="col-lg-6 py-5 my-2 px-5 wow fadeIn" data-wow-delay="0.5s"
                        data-aos-anchor-placement="center-bottom">
                        <div class="row py-0 px-2 pb-5">
                                <input type="text" class="form-control fs-4 fw-light" id="Name" name="Name"
                                    placeholder="Your Name">                            
                        </div>
                        <div class="row py-0 px-2">
                            <input type="email" name="Email" id="Email" class="form-control fs-4 fw-light"
                            placeholder="Your Email">
                        </div>
                        <div class="row py-5 px-2">
                            <input type="Phone" class="form-control fs-4 fw-light" id="Phone" name="Phone"
                                placeholder="Your Phone Number">
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos-anchor-placement="center-bottom" style="margin-top: 30px;">
                        <div class="mb-3">
                            <textarea class="form-control" id="Other" name="Other" rows="10"
                                placeholder="Messages"></textarea>
                        </div>
                    </div>
                    <button class="btn">submit</button>
                </form>
            </div>
        </div>
        <div class="container-fluid copyright bg-dark py-4" style="background-color: #fffef4 !important;">
            <div class="container justify-content-center text-center">
                <p class="mb-2">Copyright &copy; <a class="fw-semi-bold text-warning" href="#">Your Site Name</a>, All
                    Right Reserved.
                </p>
            </div>
        </div>
    </section>
    <!-- Contact end -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();
    </script>
</body>

</html>