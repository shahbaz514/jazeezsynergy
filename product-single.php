<?php
include "db/db.php";
include "inc/head.php";
if (isset($_GET['id']))
{
    $sqlRowBlog = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM products WHERE id = '".$_GET['id']."'"));
}
else
{
    echo "<script>window.open('products.php','_self')</script>";
}
?>
    <section class="hero-wrap hero-wrap-2" style="background: url('images/bg_1.jpg') center fixed; background-size: cover; background-repeat: no-repeat;" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-4">
                    <h1 class="mb-2 bread">Products</h1>
                    <p class="breadcrumbs">
                    <span class="mr-2">
                        <a href="index.php">
                            Home <i class="ion-ios-arrow-forward"></i>
                        </a>
                    </span>
                        <span class="mr-2">
                        <a href="products.php">
                            Products <i class="ion-ios-arrow-forward"></i>
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
    <section class="ftco-section ftco-wrap-about">
        <div class="container">
            <div class="row">
                <div class="col-md-7 d-flex">
                    <div class="img img-1 mr-md-2" style="background-image: url(images/<?php echo $sqlRowBlog['img']; ?>);"></div>
                </div>
                <div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
                    <div class="heading-section mb-4 my-5 my-md-0">
                        <span class="subheading">Product</span>
                        <h2 class="mb-4"><?php echo $sqlRowBlog['name']; ?></h2>
                    </div>
                    <div class="meta">
                        <div>
                            <a>
                                ₦ <?php echo $sqlRowBlog['price']; ?>
                            </a>
                            <a style="text-transform: uppercase;">
                                Per <?php echo $sqlRowBlog['weight_unit']; ?>
                            </a>
                        </div>
                    </div>
                    <p style="text-align: justify;">
                        <?php echo $sqlRowBlog['description']; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section img" id="order" style="background-image: url(images/<?php echo $sqlRowBlog['img']; ?>)" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 ftco-animate makereservation p-4 px-md-5 pb-md-5">
                    <div class="heading-section ftco-animate mb-5 text-center" style="padding: 30px;">
                        <span class="subheading">Submit Your Inquiry</span>
                        <h2 class="mb-4">Buy Now</h2>
                    </div>
                    <form action="product-single.php?id=<?php echo $_GET['id']; ?>#order" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for>Qty</label>
                                    <input type="number" min="1" class="form-control" name="qty" placeholder="Enter Qty" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for>Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for>Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for>Phone</label>
                                    <input type="number" min="1" class="form-control" name="phone" placeholder="Phone" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for>Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="Your Address" required>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group text-center">
                                    <input type="submit" value="Place Order" name="save" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['save']))
                    {
                        $name = mysqli_real_escape_string($db, $_POST['name']);
                        $email = mysqli_real_escape_string($db, $_POST['email']);
                        $phone = mysqli_real_escape_string($db, $_POST['phone']);
                        $address = mysqli_real_escape_string($db, $_POST['address']);
                        $qty = mysqli_real_escape_string($db, $_POST['qty']);
                        date_default_timezone_set("Africa/Lagos");
                        $date = date("d-m-Y h:i:sa");

                        $sqlOrderRow = 0;
                        $orderId = 0;
                        $sqlOrderRow = mysqli_num_rows(mysqli_query($db, "SELECT * FROM `orders`"));
                        if ($sqlOrderRow==0)
                        {
                            $orderId = 1001;
                        }
                        else
                        {
                            $sqlORderID = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM `orders` ORDER BY id DESC"));
                            $orderId = $sqlORderID['order_id'];
                            $orderId++;
                        }

                        $pro_name = $sqlRowBlog['name'];
                        $pro_price = $sqlRowBlog['price'];
                        $pro_total_price = $pro_price*$qty;
                        $status = "In Progress";

                        $sql = mysqli_query($db, "INSERT INTO `orders`(`order_id`, `pro_name`, `pro_qty`, `pro_price`, `pro_total_price`, `name`, `email`, `phone`, `address`, `status`, `last_updated`)
                                                                    VALUES ('$orderId','$pro_name','$qty','$pro_price','$pro_total_price','$name','$email','$phone','$address','$status','$date')");
                        if ($sql)
                        {
                            echo "Your Order has been Placed! Our Team contact you shortly for Confirmation.";
                        }
                        else
                        {
                            echo "Take an Error! Try Again";
                        }

                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php
include "inc/footer.php";
?>