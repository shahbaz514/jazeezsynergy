<?php
session_start();
session_abort();
include "../db/db.php";
if (!isset($_SESSION['username']))
{
    header("Location: login.php");
}
include 'inc/head.php';

if (isset($_GET['del']))
{
    $sqlDel = mysqli_query($db, "DELETE FROM products WHERE id = '".$_GET['del']."'");
    if ($sqlDel)
    {
        echo "<script>window.open('allProducts.php', '_self')</script>";
    }
}
?>
<section>
    <?php include 'inc/sidebar.php'; ?>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>ALL PRODUCTS</h2>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header bg-blue">
                        <h2>
                            ALL PRODUCTS
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Weight Unit</th>
                                    <th>Date</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Weight Unit</th>
                                    <th>Date</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </tfoot>
                                <tbody style="text-align: center!important;">

                                <?php
                                $sqlCities = mysqli_query($db, "SELECT * FROM products");
                                while ($rowCities = mysqli_fetch_array($sqlCities))
                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $rowCities['name'] ; ?></td>
                                        <td>
                                            <a href="../images/<?php echo $rowCities['img'] ; ?>" target="_blank">
                                                <img src="../images/<?php echo $rowCities['img'] ; ?>" class="img-thumbnails img-responsive" width="100">
                                            </a>
                                        </td>
                                        <td style="text-align: justify;"><?php echo $rowCities['description'] ; ?></td>
                                        <td><?php echo $rowCities['price'] ; ?></td>
                                        <td><?php echo $rowCities['weight_unit'] ; ?></td>
                                        <td><?php echo $rowCities['date'] ; ?></td>
                                        <td>
                                            <a class="btn btn-info" href="editProducts.php?edit=<?php echo $rowCities['id']; ?>">
                                                <i class="material-icons">
                                                    edit
                                                </i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-danger" href="allProducts.php?del=<?php echo $rowCities['id']; ?>">
                                                <i class="material-icons">
                                                    delete
                                                </i>
                                            </a>
                                        </td>
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
