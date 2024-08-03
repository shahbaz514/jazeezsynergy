<?php
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
                <h2>ADD NEW PRODUCT</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-blue">
                            <h2>
                                ADD NEW PRODUCT
                            </h2>
                        </div>
                        <div class="body">

                            <form action="" enctype="multipart/form-data" method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" placeholder="Name" class="form-control" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="price" placeholder="Price" class="form-control" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="weight_unit" placeholder="Weight Unit" class="form-control" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" name="img" title="Select Product Image" class="form-control" accept="image/*" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <textarea name="description" rows="5" placeholder="Description" class="form-control" required></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="submit" name="addUser" value="Add New Product" class="btn bg-blue waves-button btn-block">
                                    </div>
                                </div>
                            </form>


                            <?php
                            if (isset($_POST['addUser']))
                            {
                                $name = mysqli_real_escape_string($db, $_POST['name']);
                                $description = mysqli_real_escape_string($db, $_POST['description']);
                                $price = mysqli_real_escape_string($db, $_POST['price']);
                                $weight_unit = mysqli_real_escape_string($db, $_POST['weight_unit']);

                                $temp = explode(".", $_FILES["img"]["name"]);
                                $newfilename = $_SESSION['username'] . '.' . time() . '.' . end($temp);
                                $sqlAddUser = mysqli_query($db, "INSERT INTO `products`(`name`, `img`, `description`, `price`, `weight_unit`) VALUES ('$name','$newfilename','$description','$price','$weight_unit')");
                                if ($sqlAddUser) {

                                    $move = move_uploaded_file($_FILES["img"]["tmp_name"], "../images/" . $newfilename);
                                    if ($move)
                                    {
                                        echo "<script>window.open('allProducts.php', '_self')</script>";
                                    }
                                } else {
                                    echo "<script>alert('Take An Error! Try Again.')</script>";
                                    echo "<script>window.open('allProducts.php', '_self')</script>";
                                }
                            }
                            ?>

                            <style>
                                input{
                                    margin-top: 20px;
                                }
                                select{
                                    margin-top: 20px;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php
include 'inc/footer.php';
?>