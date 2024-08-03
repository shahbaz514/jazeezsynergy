<?php
session_start();
session_abort();
include "../db/db.php";
if (!isset($_SESSION['username']))
{
    header("Location: login.php");
}
include 'inc/head.php';
$sqlCities = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM products WHERE id = '".$_GET['edit']."'"));
?>
    <section>
        <?php include 'inc/sidebar.php'; ?>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>EDIT PRODUCT</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-blue">
                            <h2>
                                EDITS PRODUCT
                            </h2>
                        </div>
                        <div class="body">

                            <form action="" enctype="multipart/form-data" method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" placeholder="Name" class="form-control" value="<?php echo $sqlCities['name']; ?>" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="price" placeholder="Price" class="form-control"  value="<?php echo $sqlCities['price']; ?>" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="weight_unit" placeholder="Weight Unit" class="form-control"  value="<?php echo $sqlCities['weight_unit']; ?>" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" name="img" title="Select Product Image" class="form-control" accept="image/*">
                                    </div>
                                    <div class="col-sm-6">
                                        <textarea name="description" rows="5" placeholder="Description" class="form-control" required><?php echo $sqlCities['description']; ?></textarea>
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
                                if ($_FILES['img']['name'] == "")
                                {
                                    $sqlAddUser = mysqli_query($db, "UPDATE `products` SET `name`='$name',`description`='$description',`price`='$price',`weight_unit`='$weight_unit' WHERE id = '".$_GET['edit']."'");
                                    if ($sqlAddUser) {
                                        echo "<script>window.open('allProducts.php', '_self')</script>";
                                    }
                                    else {
                                        echo "<script>alert('Take An Error! Try Again.')</script>";
                                        echo "<script>window.open('allProducts.php', '_self')</script>";
                                    }
                                }
                                else{
                                    $sqlAddUser = mysqli_query($db, "UPDATE `products` SET `name`='$name',`img`='$newfilename',`description`='$description',`price`='$price',`weight_unit`='$weight_unit' WHERE id = '".$_GET['edit']."'");
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