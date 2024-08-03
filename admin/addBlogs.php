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
                <h2>ADD NEW BLOG</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-blue">
                            <h2>
                                ADD NEW BLOG
                            </h2>
                        </div>
                        <div class="body">

                            <form action="" enctype="multipart/form-data" method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" placeholder="Name" class="form-control" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" name="img" title="Select Blog Image" class="form-control" accept="image/*" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="cat_id" required>
                                            <option value="">---Select Category---</option>
                                            <?php
                                            $sqlCities = mysqli_query($db, "SELECT * FROM categories");
                                            while ($rowCities = mysqli_fetch_array($sqlCities))
                                            {
                                                echo "<option value='".$rowCities['id']."'>".$rowCities['name']."</option>";
                                            }
                                            ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <textarea name="description" rows="5" placeholder="Description" class="form-control" required></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="submit" name="addUser" value="Add New Blog" class="btn bg-blue waves-button btn-block">
                                    </div>
                                </div>
                            </form>


                            <?php
                            if (isset($_POST['addUser']))
                            {
                                $name = mysqli_real_escape_string($db, $_POST['name']);
                                $description = mysqli_real_escape_string($db, $_POST['description']);
                                $cat_id = mysqli_real_escape_string($db, $_POST['cat_id']);

                                $temp = explode(".", $_FILES["img"]["name"]);
                                $newfilename = $_SESSION['username'] . '.' . time() . '.' . end($temp);
                                $sqlAddUser = mysqli_query($db, "INSERT INTO `blog`(`name`, `img`, `description`, `cat_id`, `username`) VALUES ('$name','$newfilename','$description','$cat_id','".$_SESSION['username']."')");
                                if ($sqlAddUser) {

                                    $move = move_uploaded_file($_FILES["img"]["tmp_name"], "../images/" . $newfilename);
                                    if ($move)
                                    {
                                        echo "<script>window.open('allBlogs.php', '_self')</script>";
                                    }
                                } else {
                                    echo "<script>alert('Take An Error! Try Again.')</script>";
                                    echo "<script>window.open('allBlogs.php', '_self')</script>";
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