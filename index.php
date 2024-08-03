<?php
include "db/db.php";
include "inc/head.php";
?>
    <section class="home-slider owl-carousel">
        <?php
        $sqlCities = mysqli_query($db, "SELECT * FROM products");
        while ($rowCities = mysqli_fetch_array($sqlCities))
        {

            ?>
            <div class="slider-item" style="background-image: url('images/<?php echo $rowCities['img']; ?>');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">
                        <div class="col-md-12 col-sm-12 text-center ftco-animate">
                            <span class="subheading">Jazeez Synergy</span>
                            <h1 class="mb-4">
                                <a href="product-single.php?id=<?php echo $rowCities['id']; ?>" style="color: lightgrey;">
                                    <?php echo $rowCities['name']; ?>
                                </a>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </section>
<?php
include "inc/about.php";
include "inc/counter.php";
include "inc/values.php";
?>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-12 text-center heading-section ftco-animate">
                    <span class="subheading">Ethos</span>
                    <h2 class="mb-4">Philosophy</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                    <div class="media block-6 services d-block">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span>
                                1
                            </span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">
                                Commitment
                            </h3>
                            <p style="text-align: justify">
                                We fully-embrace our Mission, Vision, and Values. We understand our task, regardless of how minor, is critical to achieving our larger purpose, and that by fully-embracing and executing on our mission and vision that we will be rewarded.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                    <div class="media block-6 services d-block">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span>
                                2
                            </span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">
                                Vision
                            </h3>
                            <p style="text-align: justify">
                                To become Africa's leading foods manufacturing company focused on gaining market leadership through innovative products, operational excellence and strategic partnerships.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                    <div class="media block-6 services d-block">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span>3</span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">
                                Mission
                            </h3>
                            <p style="text-align: justify">
                                To produce, package, and distribute wholesome products that satisfy all regulatory standards through highly skilled and motivated employees and sustainable business practices that impact positively on our host communities.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include "inc/meeting.php";
include "inc/partners.php";
?>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Blog</span>
                    <h2 class="mb-4">Recent Posts</h2>
                </div>
            </div>
            <div class="row">

                <?php
                $sqlBlog = mysqli_query($db,"SELECT * FROM `blog` ORDER BY id DESC LIMIT 0,3");
                while ($rowBlog = mysqli_fetch_array($sqlBlog))
                {
                ?>
                <div class="col-md-4 ftco-animate">
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
    </section>
<?php
include "inc/footer.php";
?>