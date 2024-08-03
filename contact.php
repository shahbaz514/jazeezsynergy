<?php
include "db/db.php";
include "inc/head.php";
?>
<section class="hero-wrap hero-wrap-2" style="background: url('images/bg_1.jpg') center fixed; background-size: cover; background-repeat: no-repeat;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-4">
                <h1 class="mb-2 bread">Contact</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index-2.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact us <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4 font-weight-bold">Contact Information</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3 d-flex">
                    <div class="dbox">
                        <p><span>Address:</span><br> 247 Yangarki , along pathfinder School, Dakata Quarters off Hadeja Road Kano, Nigeria</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="dbox">
                        <p><span>Phone:</span><br> <a href="tel://+2348028871154">+234 802 887 1154</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="dbox">
                        <p><span>Email:</span><br> <a href="mailto:admin@jazeezsynergy.com"><span class="__cf_email__">admin@jazeezsynergy.com</span></a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="dbox">
                        <p><span>Website</span><br> <a href="https://jazeezsynergy.com">jazeezsynergy.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
    <div class="container">
        <div class="row d-flex align-items-stretch no-gutters">
            <div class="col-md-6 pt-5 px-2 pb-2 p-md-5 order-md-last">
                <h2 class="h4 mb-2 mb-md-5 font-weight-bold">Contact Us</h2>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" name="save" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
                <?php
                if (isset($_POST['save']))
                {
                    $name = mysqli_real_escape_string($db, $_POST['name']);
                    $email = mysqli_real_escape_string($db, $_POST['email']);
                    $message = mysqli_real_escape_string($db, $_POST['message']);
                    $subject = mysqli_real_escape_string($db, $_POST['subject']);

                    $sql = mysqli_query($db, "INSERT INTO `contacts`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')");
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
            <div class="col-md-6 d-flex align-items-stretch">
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