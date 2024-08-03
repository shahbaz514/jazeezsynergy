<?php
include "db/db.php";
include "inc/head.php";
if (isset($_GET['id']))
{
    $sqlRowBlog = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM blog WHERE id = '".$_GET['id']."'"));
}
else
{
    echo "<script>window.open('blog.php','_self')</script>";
}
?>
    <section class="hero-wrap hero-wrap-2" style="background: url('images/bg_1.jpg') center fixed; background-size: cover; background-repeat: no-repeat;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-4">
                <h1 class="mb-2 bread">Blog</h1>
                <p class="breadcrumbs">
                    <span class="mr-2">
                        <a href="index.php">
                            Home <i class="ion-ios-arrow-forward"></i>
                        </a>
                    </span>
                    <span class="mr-2">
                        <a href="blog.php">
                            Blog <i class="ion-ios-arrow-forward"></i>
                        </a>
                    </span>
                    <span>
                        <?php echo $sqlRowBlog['name']; ?><i class="ion-ios-arrow-forward"></i>
                    </span>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <h2 class="mb-3">
                    <?php echo $sqlRowBlog['name']; ?>
                </h2>
                <p>
                    <img src="images/<?php echo $sqlRowBlog['img']; ?>" alt class="img-fluid">
                </p>
                <p>
                    <?php echo $sqlRowBlog['description']; ?>
                </p>
            </div>
            <?php
            include "inc/sidebar.php";
            ?>
        </div>
    </div>
</section>
<?php
include "inc/footer.php";
?>