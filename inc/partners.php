<section class="ftco-section testimony-section img">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-12 text-center heading-section ftco-animate">
                    <span class="subheading">
                        Rewarding
                    </span>
                <h2 class="mb-4">
                    Partnership
                </h2>
            </div>
        </div>
        <style>
            .user-img{
                border-radius: 10px!important;
                padding: 10px;
                border: 2px solid lightslategrey;
            }
        </style>
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <?php
                    $sqlBlog = mysqli_query($db,"SELECT * FROM `partners` ORDER BY id ASC");
                    while ($rowBlog = mysqli_fetch_array($sqlBlog))
                    {
                    ?>
                    <div class="item">
                        <div class="testimony-wrap text-center pb-5">
                            <div class="user-img mb-4" style="background-image: url(images/<?php echo $rowBlog['img']; ?>)">
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>
