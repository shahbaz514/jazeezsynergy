<section class="ftco-section img" id="meeting" style="background-image: url(images/bg_3.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5">
                <div class="heading-section ftco-animate mb-5 text-center" style="padding: 30px;">
                    <span class="subheading">Book a Meeting</span>
                    <h2 class="mb-4">Make Appointment</h2>
                </div>
                <form action="index.php#meeting" method="post" enctype="multipart/form-data">
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
    </div>
</section>
