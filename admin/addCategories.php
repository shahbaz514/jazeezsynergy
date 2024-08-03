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
                <h2>ADD NEW CATEGORY</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-blue">
                            <h2>
                                ADD NEW CATEGORY
                            </h2>
                        </div>
                        <div class="body">

                            <form action="" enctype="multipart/form-data" method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" placeholder="Name" class="form-control" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="submit" name="addUser" value="Add New User" class="btn bg-blue waves-button btn-block">
                                    </div>
                                </div>
                            </form>


                            <?php
                            if (isset($_POST['addUser']))
                            {
                                $name = mysqli_real_escape_string($db, $_POST['name']);
                                $sqlAddUser = mysqli_query($db, "INSERT INTO `categories`(`name`) VALUES ('$name')");
                                if ($sqlAddUser) {
                                    echo "<script>window.open('allCategories.php', '_self')</script>";
                                } else {
                                    echo "<script>alert('Take An Error! Try Again.')</script>";
                                    echo "<script>window.open('allCategories.php', '_self')</script>";
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