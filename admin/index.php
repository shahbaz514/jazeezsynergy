﻿<?php
session_start();
session_abort();
include "../db/db.php";
if (!isset($_SESSION['username']))
{
    header("Location: login.php");
}
include 'inc/head.php';
?>
    <section>
        <?php include 'inc/sidebar.php'; ?>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-blue">
                            <h2>
                                DASHBOARD
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row">
                                <?php
                                $sqlU = mysqli_query($db, "SELECT * FROM users");
                                $countU = mysqli_num_rows($sqlU);
                                ?>
                                <div class="col-sm-4">
                                    <div class="info-box bg-blue hover-expand-effect">
                                        <div class="icon">
                                            <i class="material-icons">groups</i>
                                        </div>
                                        <div class="content">
                                            <div class="text">ALL USERS</div>
                                            <div class="number count-to" data-from="0" data-to="<?php echo $countU; ?>" data-speed="1000" data-fresh-interval="20"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="info-box bg-cyan hover-expand-effect">
                                        <div class="icon">
                                            <i class="material-icons">shopping_cart</i>
                                        </div>
                                        <div class="content">
                                            <div class="text">ALL ORDERS</div>
                                            <div class="number count-to" data-from="0" data-to="<?php echo mysqli_num_rows(mysqli_query($db,"SELECT * FROM `orders`")); ?>" data-speed="1000" data-fresh-interval="20"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="info-box bg-red hover-expand-effect">
                                        <div class="icon">
                                            <i class="material-icons">meeting_room</i>
                                        </div>
                                        <div class="content">
                                            <div class="text">ALL MEETINGS</div>
                                            <div class="number count-to" data-from="0" data-to="<?php echo mysqli_num_rows(mysqli_query($db,"SELECT * FROM `meeting`")); ?>" data-speed="1000" data-fresh-interval="20"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="info-box bg-green hover-expand-effect">
                                        <div class="icon">
                                            <i class="material-icons">list</i>
                                        </div>
                                        <div class="content">
                                            <div class="text">ALL PRODUCTS</div>
                                            <div class="number count-to" data-from="0" data-to="<?php echo mysqli_num_rows(mysqli_query($db,"SELECT * FROM `products`")); ?>" data-speed="1000" data-fresh-interval="20"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="info-box bg-purple hover-expand-effect">
                                        <div class="icon">
                                            <i class="material-icons">category</i>
                                        </div>
                                        <div class="content">
                                            <div class="text">ALL CATEGORIES</div>
                                            <div class="number count-to" data-from="0" data-to="<?php echo mysqli_num_rows(mysqli_query($db,"SELECT * FROM `categories`")); ?>" data-speed="1000" data-fresh-interval="20"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="info-box bg-orange hover-expand-effect">
                                        <div class="icon">
                                            <i class="material-icons">rss_feed</i>
                                        </div>
                                        <div class="content">
                                            <div class="text">ALL BLOGS</div>
                                            <div class="number count-to" data-from="0" data-to="<?php echo mysqli_num_rows(mysqli_query($db,"SELECT * FROM `blog`")); ?>" data-speed="1000" data-fresh-interval="20"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include 'inc/footer.php';
?>