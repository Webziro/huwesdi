<?php
    include "includes/properties/title";
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="shortcut icon" href="img/huwesdilogo.png">

        <meta name="author" content="colorlib">

        <meta name="description" content>

        <meta name="keywords" content>

        <meta charset="UTF-8">

        <title><?php echo "$title"; ?></title>
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Roboto:300,400" rel="stylesheet">

        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/themify-icons.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/main.css">
        <script nonce="df67c636-238f-49d5-8ce5-f21cf19c29cb">
        <?php include "includes/script";?>
        </script>
    </head>

    <body>

        <!--header area Starts-->
        <?php include "includes/header";?>
        <!--header area Ends-->


        <section class="banner-area relative">
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row justify-content-lg-end align-items-center banner-content">
                    <div class="col-lg-5">
                        <h1 class="text-white">Talk to us Today!</h1>
                        <p>Talk to us about your ideas, contributions, suggestions and causes you want us to take on. It
                            takes all to create a working
                            society.
                        </p>
                    </div>
                </div>
            </div>
        </section> <br><br><br><br>



        <section class="section-gap">
            <div class="container">
                <?php
                        if(isset($_SESSION['message']))
                        echo ($_SESSION['message']);
                        unset($_SESSION['message']);
                    ?>
                <div class=" mb-5 pb-4">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="contact-title">Get in Touch</h2>
                        </div>
                        <div class="col-lg-8">
                            <form class="form-contact contact_form" action="contact_script/contact_process"
                                method="POST" id="contactForm">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100" name="message" id="message" cols="30"
                                                rows="9" placeholder="Enter Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" name="name" id="name" type="text"
                                                placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" name="email" id="email" type="email"
                                                placeholder="Enter email address">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="subject" id="subject" type="text"
                                                placeholder="Enter Subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-2 mb-5 mb-lg-0">
                                    <button type="submit" class="button button-contactForm primary-btn">Send
                                        Message</button>
                                </div>
                            </form>
                        </div>


                        <div class="col-lg-4">
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="fa fa-home"></i></span>
                                <div class="media-body">
                                    <h3>HUWESDI AFRICA HQ</h3>
                                    <p><?php echo $address;   ?></p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="fa fa-phone"></i></span>
                                <div class="media-body">
                                    <h3><a href="#">Phone Numbers</a></h3>
                                    <p><?php echo $phone;?></p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="fa fa-envelope-o"></i></span>
                                <div class="media-body">
                                    <h3><a href=""><span>
                                                <?php echo $email;?>
                                            </span>
                                        </a>
                                    </h3>
                                    <p>Send us a mail at anytime!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>


        <!--blogs  footer-->
        <?php include "includes/footer"; ?>
        <!--blogs  footer-->

        <script data-cfasync="false"
            src="https://preview.colorlib.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
        </script>
        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
            integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
        </script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/parallax.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/main.js"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
        </script>
        <script defer
            src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
            integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
            data-cf-beacon='{"rayId":"856c8bce0a35b8b2","version":"2024.2.0","token":"cd0b4b3a733644fc843ef0b185f98241"}'
            crossorigin="anonymous"></script>
    </body>

</html>