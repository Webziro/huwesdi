<?php
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Unsubscribe Page</title>
        <link rel="shortcut icon" href="img/huwesdilogo.png">
    </head>



    <body>

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

                        <p class="top_text">Unsubscribe from HUWESDI</p>
                        <h3 class="top_text">Unsubscribe? Sad to see you leave!</h3>
                        <!-- <div id="mc_embed_signup"> -->


                        <form action="includes/unsub_process.php" method="POST">
                            <div class="row align-items-center">

                                <div class="col-lg-5 mb-lg-0 mb-3">
                                    <input class="form-control" name="email" id="email" type="email"
                                        placeholder="Enter email address"> <br><br>
                                </div>

                                <div class="col-lg-2">
                                    <button class="primary-btn" name="submit" value="submit"
                                        type="submit">Unsubscribe</button>
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

    </body>


    <style>
    .cta-area {
        background-color: orangered;
        color: #fff;
    }

    /* Input field styles */
    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        margin-bottom: 10px;
    }

    /* Focus styles */
    .form-control:focus {
        outline: none;
        border-color: #4CAF50;
        /* Change border color on focus */
    }

    .primary-btn {
        background-color: #fff;
        color: orangered;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .primary-btn:hover {
        background-color: #fff;
    }

    /* Default styles */
    .cta-area {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 70vh;
        /* Set the height to the viewport height for full-screen centering */
    }

    .top_text {
        font-size: 24px;
    }

    .col-lg-7 {
        text-align: center;
        /* Center-align the content */
    }

    .col-lg-5,
    .col-lg-2 {
        width: 100%;
        /* Make inputs and button take full width */
    }

    /* Adjust styles for smaller screens */
    @media (max-width: 768px) {
        .top_text {
            font-size: 20px;
        }
    }

    @media (max-width: 576px) {
        .top_text {
            font-size: 18px;
        }
    }
    </style>

</html>