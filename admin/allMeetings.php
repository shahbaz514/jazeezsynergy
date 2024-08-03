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
            <h2 class="text-uppercase">ALL MEETINGS</h2>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header bg-blue">
                        <h2>
                            ALL MEETINGS
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Meeting Date</th>
                                    <th>Meeting Time</th>
                                    <th>Form Submission Date</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Meeting Date</th>
                                    <th>Meeting Time</th>
                                    <th>Form Submission Date</th>
                                </tr>
                                </tfoot>
                                <tbody style="text-align: center!important;">

                                <?php
                                $sqlCities = mysqli_query($db, "SELECT * FROM meeting");
                                while ($rowCities = mysqli_fetch_array($sqlCities))
                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $rowCities['name'] ; ?></td>
                                        <td><?php echo $rowCities['email'] ; ?></td>
                                        <td><?php echo $rowCities['phone'] ; ?></td>
                                        <td><?php echo $rowCities['meet_date'] ; ?></td>
                                        <td><?php echo $rowCities['time'] ; ?></td>
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
