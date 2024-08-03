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
            <h2 class="text-uppercase">ALL ORDERS</h2>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header bg-blue">
                        <h2>
                            ALL ORDERS
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Qty</th>
                                    <th>Total Price</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Last Updated</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Qty</th>
                                    <th>Total Price</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Last Updated</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                                </tfoot>
                                <tbody style="text-align: center!important;">

                                <?php
                                $sqlCities = mysqli_query($db, "SELECT * FROM orders");
                                while ($rowCities = mysqli_fetch_array($sqlCities))
                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $rowCities['order_id'] ; ?></td>
                                        <td><?php echo $rowCities['pro_name'] ; ?></td>
                                        <td><?php echo $rowCities['pro_qty'] ; ?></td>
                                        <td><?php echo $rowCities['pro_price'] ; ?></td>
                                        <td><?php echo $rowCities['pro_total_price'] ; ?></td>
                                        <td><?php echo $rowCities['name'] ; ?></td>
                                        <td><?php echo $rowCities['email'] ; ?></td>
                                        <td><?php echo $rowCities['phone'] ; ?></td>
                                        <td><?php echo $rowCities['address'] ; ?></td>
                                        <td><?php echo $rowCities['last_updated'] ; ?></td>
                                        <td>
                                            <a href="updateOrder.php?order_id=<?php echo $rowCities['order_id']; ?>" class="btn bg-blue waves-button">
                                                <?php echo $rowCities['status'] ; ?>
                                            </a>
                                        </td>
                                        <td><?php echo $rowCities['date'] ; ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
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
