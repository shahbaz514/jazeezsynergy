<?php
include "db/db.php";
include "inc/head.php";
?>
    <section class="hero-wrap hero-wrap-2" style="background: url('images/bg_1.jpg') center fixed; background-size: cover; background-repeat: no-repeat;" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-4">
                    <h1 class="mb-2 bread">Products</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Menu <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <?php
                $sqlBlog = mysqli_query($db,"SELECT * FROM `products` ORDER BY id ASC");
                while ($rowBlog = mysqli_fetch_array($sqlBlog))
                {
                    ?>
                    <div class="col-md-6 ftco-animate">
                        <div class="blog-entry">
                            <a href="product-single.php?id=<?php echo $rowBlog['id']; ?>" class="block-20" style="background-image: url('images/<?php echo $rowBlog['img']; ?>');">
                            </a>
                            <div class="text pt-3 pb-4 px-4">
                                <div class="meta">
                                    <div>
                                        <a>
                                            ₦ <?php echo $rowBlog['price']; ?>
                                        </a>
                                    </div>
                                    <div>
                                        <a style="text-transform: uppercase;">
                                            Per <?php echo $rowBlog['weight_unit']; ?>
                                        </a>
                                    </div>
                                </div>
                                <h3 class="heading">
                                    <a href="product-single.php?id=<?php echo $rowBlog['id']; ?>">
                                        <?php echo $rowBlog['name']; ?>
                                    </a>
                                </h3>
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
include "inc/footer.php";
?>