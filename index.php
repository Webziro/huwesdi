<?php
    include "includes/properties/title.php"

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
        <?php include "includes/header.php";?>
        <!--header area Ends-->



        <!--Banner area Starts-->
        <?php include "includes/banner.php"; ?>
        <!--Banner area Ends-->

        <!--Section1 Starts-->
        <?php include "includes/section1.php" ?>
        <!--Section1 Ends-->

        <!--Section2 Starts-->
        <?php include "includes/section2.php"; ?>
        <!--Section2 Ends-->

        <!--Popular Cause Starts-->
        <?php //include "includes/popularcause.php"; ?>
        <!--Popular Ends-->



        <!--volunteer Starts-->
        <?php include "includes/volunteer.php"; ?>
        <!--Volunteer Ends-->


        <!--Upcoming Events Starts-->
        <?php //include "includes/upcomingevents.php"; ?>
        <!--Upcoming Events Ends-->


        <!--blogs  Starts-->
        <?php //include "includes/blogs.php"; ?>
        <!--blogs  Ends-->


        <!--blogs  subscribe-->
        <?php include "subscribe.php"; ?>
        <!--blogs  subscribe-->


        <!--blogs  footer-->
        <?php include "includes/footer.php"; ?>
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
            data-cf-beacon='{"rayId":"856c8b5c8edfb8b2","version":"2024.2.0","token":"cd0b4b3a733644fc843ef0b185f98241"}'
            crossorigin="anonymous"></script>
    </body>

</html>