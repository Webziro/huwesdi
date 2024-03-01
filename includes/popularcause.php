    <?php
    include "volunteer/conn.php";

    //Querry to select data from database 
    $fundraisingQuery = mysqli_query($conn, "SELECT * FROM fundraising_campaigns ORDER BY updated_at DESC LIMIT 3");

    // Check if the query was successful
    if ($fundraisingQuery) {
        ?>

    <section class="popular-cause-area section-gap-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2><span> Recent Projects by</span> HUWESDI AFRICA</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <?php
                    // Loop through each row of the result set
                    while ($result = mysqli_fetch_assoc($fundraisingQuery)) {
                        ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card single-popular-cause">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="img/causes/c1.jpg" alt="Card image cap">
                            </figure>
                            <div class="card_inner_body">
                                <div class="tag"><?php echo $result['category']; ?></div>
                                <h4 class="card-title"><?php echo $result['title']; ?></h4>
                                <div class="d-flex justify-content-between raised_goal">
                                    <p>Raised: &#8358; <?php echo $result['amount_raised']; ?></p>
                                    <p><span>Goal: &#8358; <?php echo $result['amount_goal']; ?> </span></p>
                                </div>
                                <div class="d-flex justify-content-between donation align-items-center">
                                    <a href="../donate.php" class="primary-btn">donate</a>
                                    <p><span class="ti-heart mr-1"></span> <?php echo $result['total_donors']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                    ?>

            </div>
        </div>
    </section>

    <?php
    } else {
        // Handle the case where the query failed
        echo "Failed to fetch fundraising campaigns from the database.";
    }
    ?>