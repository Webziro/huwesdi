<footer class="footer">
    <div class="footer-area">
        <div class="container">
            <div class="row section_gap">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h5 class="footer_title large_title">About HUWESDI</h5>
                        <p>

                            <? echo $about; ?>
                        </p>

                    </div>
                </div>
                <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title">Quick Links</h4>
                        <ul class="list">

                            <li><a href="donate.php">Donate</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="about.php">Vision</a></li>
                            <li><a href="about.php">Mission</a></li>
                        </ul>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title">Talk to Huwesdi</h4>
                        <div class="ml-5">
                            <p class="sm-head">
                                <span class="fa fa-location-arrow"></span>
                                Head Office
                            </p>
                            <p> <?php echo $address; ?> </p>
                            <p class="sm-head">
                                <span class="fa fa-phone"></span>
                                Phone Number
                            </p>
                            <p>
                                <?php echo $phone; ?>

                            </p>
                            <p class="sm-head">
                                <span class="fa fa-envelope"></span>
                                Email
                            </p>
                            <p> <?php echo $email; ?>
                            </p>

                        </div> <br>
                        <p>
                            Copyright <a href=""> HUWESDI </a> Developed by WEBON &copy; 2023 -
                            <?php echo date ("Y");  ?>
                            Developed by <a href="https://wa.link/k5cji9" target="_blank">WEBON
                            </a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>