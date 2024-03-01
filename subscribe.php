<div class="cta-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">

                <?php 
                    if(isset($_SESSION['message'])){ 
                        echo $_SESSION['message'];
                        unset($_SESSION['message']); 
                    }
                ?>
                <p class="top_text">Subscribe HUWESDI</p>
                <h3>Subscribe now to recieve our updates</h3>
                <!-- <div id="mc_embed_signup"> -->


                <form action="includes/sub_process.php" method="POST">
                    <div class="row align-items-center">
                        <div class="col-lg-5 mb-lg-0 mb-3">
                            <input class="form-control" name="name" id="name" type="text"
                                placeholder="Enter your Fullname">
                        </div>

                        <div class="col-lg-5 mb-lg-0 mb-3">
                            <input class="form-control" name="email" id="email" type="email"
                                placeholder="Enter email address">
                        </div>

                        <div class="col-lg-2">
                            <button class="primary-btn" name="submit" value="submit" type="submit">Subscribe</button>
                            <div style="position: absolute; left: -5000px;"></div>
                            <div class="info"></div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>