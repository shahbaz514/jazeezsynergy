<?php
include "db/db.php";
include "inc/head.php";
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
                        <span>
                        Blog <i class="ion-ios-arrow-forward"></i>
                    </span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ftco-animate">
                    <div class="row">
                        <?php
                        if (isset($_POST['search']))
                        {
                            $search = mysqli_real_escape_string($db, $_POST['search']);
                            $sqlBlog = mysqli_query($db,"SELECT * FROM `blog` WHERE name LIKE '%$search%'");
                        }
                        else if (isset($_GET['cat']))
                        {
                            $sqlBlog = mysqli_query($db,"SELECT * FROM `blog` WHERE cat_id = '".$_GET['cat']."'");
                        }
                        else
                        {
                            $sqlBlog = mysqli_query($db,"SELECT * FROM `blog` ORDER BY id DESC");
                        }
                        while ($rowBlog = mysqli_fetch_array($sqlBlog))
                        {
                            ?>
                            <div class="col-md-6 ftco-animate">
                                <div class="blog-entry">
                                    <a href="blog-single.php?id=<?php echo $rowBlog['id']; ?>" class="block-20" style="background-image: url('images/<?php echo $rowBlog['img']; ?>');">
                                    </a>
                                    <div class="text pt-3 pb-4 px-4">
                                        <div class="meta">
                                            <div>
                                                <a>
                                                    <?php echo $rowBlog['date']; ?>
                                                </a>
                                            </div>
                                            <div>
                                                <a style="text-transform: uppercase;">
                                                    <?php echo $rowBlog['username']; ?>
                                                </a>
                                            </div>
                                        </div>
                                        <h3 class="heading">
                                            <a href="blog-single.php?id=<?php echo $rowBlog['id']; ?>">
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
                <?php
                include "inc/sidebar.php";
                ?>
            </div>
        </div>
    </section>
<?php
include "inc/footer.php";
?>