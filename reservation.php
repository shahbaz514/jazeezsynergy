<?php
include "db/db.php";
include "inc/head.php";
?>
<section class="hero-wrap hero-wrap-2" style="background: url('images/bg_1.jpg') center fixed; background-size: cover; background-repeat: no-repeat;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-4">
                <h1 class="mb-2 bread">Book a Meeting</h1>
                <p class="breadcrumbs">
                    <span class="mr-2">
                        <a href="index.php">
                            Home <i class="ion-ios-arrow-forward"></i>
                        </a>
                    </span>
                    <span>
                        Make Appointment <i class="ion-ios-arrow-forward"></i>
                    </span>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container-fluid px-0">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 order-md-last ftco-animate makereservation p-4 p-md-5 pt-5">
                <div class="py-md-5">
                    <div class="heading-section ftco-animate mb-5">
                        <span class="subheading">Book a Meeting</span>
                        <h2 class="mb-4">Make Appointment</h2>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for>Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for>Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for>Phone</label>
                                    <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for>Date</label>
                                    <input type="text" class="form-control" id="book_date" name="meet_date" placeholder="Date" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for>Time</label>
                                    <input type="text" class="form-control" id="book_time" name="time" placeholder="Time" required>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group text-center">
                                    <input type="submit" value="Book a Meeting" name="save" class="btn btn-primary py-3 px-5">
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
                        $meet_date = mysqli_real_escape_string($db, $_POST['meet_date']);
                        $time = mysqli_real_escape_string($db, $_POST['time']);

                        $sql = mysqli_query($db, "INSERT INTO `meeting`(`name`, `email`, `phone`, `meet_date`, `time`) VALUES ('$name','$email','$phone','$meet_date','$time')");
                        if ($sql)
                        {
                            echo "Your Query has been Submitted! Our Team contact you shortly.";
                        }
                        else
                        {
                            echo "Take an Error! Try Again";
                        }

                    }
                    ?>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch pb-5 pb-md-0">
                <iframe

                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.445171219812!2d8.558468293286003!3d12.012843471868885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x11ae815cc43c3347%3A0xa14e81fd90a8ed24!2sKano%20pathfinder%20school!5e0!3m2!1sen!2s!4v1703164615920!5m2!1sen!2s"
                        style="border:0; width: 100%;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                >
                </iframe>
            </div>
        </div>
    </div>
</section>
<?php
include "inc/footer.php";
?>