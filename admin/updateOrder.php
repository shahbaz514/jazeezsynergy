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
                <h2>UPDATE ORDER <?php echo $_GET['order_id']; ?></h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-blue">
                            <h2>UPDATE ORDER <?php echo $_GET['order_id']; ?></h2>
                        </div>
                        <div class="body">

                            <form action="" enctype="multipart/form-data" method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <select class="form-control" name="status" required>
                                            <option value="">---Select Status---</option>
                                            <option>In Process</option>
                                            <option>Dispatched</option>
                                            <option>Delivered</option>
                                            <option>Cancelled</option>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="submit" name="addUser" value="Update Status" class="btn bg-blue waves-button btn-block">
                                    </div>
                                </div>
                            </form>
                            <?php
                            if (isset($_POST['addUser']))
                            {
                                $status = mysqli_real_escape_string($db, $_POST['status']);
                                date_default_timezone_set("Africa/Lagos");
                                $date = date("d-m-Y h:i:sa");
                                $sqlAddUser = mysqli_query($db, "UPDATE `orders` SET `status` = '$status', `last_updated` = '$date' WHERE order_id = '".$_GET['order_id']."'");
                                if ($sqlAddUser) {
                                    echo "<script>window.open('allOrders.php', '_self')</script>";
                                } else {
                                    echo "<script>alert('Take An Error! Try Again.')</script>";
                                    echo "<script>window.open('allOrders.php', '_self')</script>";
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