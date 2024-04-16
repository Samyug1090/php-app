<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book an appointment | Rapti Medical and Swasthya Clinic</title>

    <!--ICONSCOUT CDN-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">

    <!-- GOOGLE FONTS (MONTSERRAT) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/contact.css">

    <style>
        body {
            background-image: url("./images/bg-texture.png")
        }
    </style>
</head>

<body>
    <nav>
        <div class="container nav__container">
            <a href="index.php">
                <h4>Rapti Medical</h4>
            </a>
            <ul class="nav__menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="equipment.php">Equipments</a></li>
                <li><a href="appointment.php">Book Appointment</a></li>
                <li><a href="appointment_details.php">View Appointments</a></li>

                <li><a href="blogfaq.php">Blog and FAQs</a></li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!--================================================ END OF THE NAVBAR ================================================-->


    <section class="contact">
        <div class="container contact__container">
            <aside class="contact__aside">
                <div class="aside__image">
                    <img src="./images/contact.svg">
                </div>
                <h2>Book an Appointment</h2>
                <p>
                    Contact on any information below, reach out on Facebook and Whatsapp, or fill the form beside to
                    book an appointment.
                </p>
                <ul class="contact__details">
                    <li>
                        <i class="uil uil-phone-times"></i>
                        <h5>+977 082-560-790 <br>
                            +977 957-860-790</h5>
                    </li>
                    <li>
                        <i class="uil uil-envelope"></i>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=raptimedical2013@gmail.com"
                            target="_blank">
                            <h5>raptimedical2013@gmail.com</h5>
                        </a>
                    </li>
                    <li>
                        <i class="uil uil-location-point"></i>
                        <h5>Gorahi , Dang</h5>
                    </li>
                </ul>
                <ul class="contact__socials">
                    <li>
                        <a href="https://l.instagram.com/?u=https%3A%2F%2Fwww.facebook.com%2Fp%2FRapti-medical-and-swasthya-clinic-100057157911867%2F&e=AT20vFbl0VAtVYOM3PpJFwJ7Z0Lot6lMUeTEEVSYIddG4PHCTOm2GcP9H82jMSOYJ0e25LDiGtqnlOJg34Tf3YLaDxiD_jDANFppKcMjX-S4-E1WxPx_sNHsEd_KNqejXOtdqsZT9OHpa4LZ1H9ttA4"
                            target="_blank"><i class="uil uil-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="href=https://wa.me/+9779847925300" target="_blank"><i class="uil uil-whatsapp">
                                Chat on
                                Whatsapp</i></a>
                    </li>
                </ul>
            </aside>

            <form id="appointment-form" class="contact__form" action="appointment-process.php" method="POST">
                <div class="form__name">
                    <input type="text" name="fName" id="fName" placeholder="First Name" required>
                    <input type="text" name="lName" id="lName" placeholder="Last Name" required>
	            <input type="text" name="phonenum" id="phonenum" placeholder="Your Phone Number" required>

                </div>
                <input type="email" name="email" id="email" placeholder="Your Email Address" required>
                <input type="text" name="mobile_number" id="mobile_number" placeholder="Your Mobile Number" required>
                <select name="doctor" id="doctor">
                    <option value="Dr. Ajay Regmi">Dr. Ajay Regmi</option>
                    <option value="Dr. Prabesh Neupane">Dr. Prabesh Neupane</option>
                    <option value="Dr. Sanjeev Shah">Dr. Sanjeev Shah</option>
                    <option value="Dr. Binay Bhattarai">Dr. Binay Bhattarai</option>
                    <option value="Dr. Himkar Gyawali">Dr. Himkar Gyawali</option>
                </select>
                <button type="button" class="btn btn-primary" onClick="sendOTP();">Send OTP</button>
                <div id="otp-form" style="display: none;">
                    <input type="number" name="otp" id="otp" placeholder="Enter OTP" required>
                    <button type="button" class="btn btn-primary" onClick="verifyOTP();">Verify OTP</button>
                </div>
            </form>
        </div>
    </section>


    <footer>
        <div class="container footer__container">
            <div class="footer__1">
                <a href="index.php" class="footer__logo">
                    <h4><img src="/images/logo.png"></h4>
                </a>
                <p>Our unwavering commitment towards you.
                </p>
            </div>

            <div class="footer__2">
                <h4>Permalinks</h4>
                <ul class="permalinks">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="equipment.php">Equipments</a></li>
                    <li><a href="appointment.php">Appointments</a></li>
                    <li><a href="blogfaq.php">Blog and FAQs</a></li>
                </ul>
            </div>

            <div class="footer__3">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3521.3786897020436!2d82.4862608!3d28.0434597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3997950043f8c641%3A0xca79109a92cda005!2sRapti%20medical%20and%20swasthya%20clinic!5e0!3m2!1sen!2snp!4v1703420231955!5m2!1sen!2snp"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="footer__4">
                <h4>Contact Us</h4>
                <div>
                    <p>+977 082-560-790</p>
                    <p>+977 957-860-790</p>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=raptimedical2013@gmail.com"
                        target="_blank">
                        <p>raptimedical2013@gmail.com</p>
                    </a>
                </div>

                <ul class="footer__socials">
                    <li>
                        <a href="https://l.instagram.com/?u=https%3A%2F%2Fwww.facebook.com%2Fp%2FRapti-medical-and-swasthya-clinic-100057157911867%2F&e=AT20vFbl0VAtVYOM3PpJFwJ7Z0Lot6lMUeTEEVSYIddG4PHCTOm2GcP9H82jMSOYJ0e25LDiGtqnlOJg34Tf3YLaDxiD_jDANFppKcMjX-S4-E1WxPx_sNHsEd_KNqejXOtdqsZT9OHpa4LZ1H9ttA4"
                            target="_blank"><i class="uil uil-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="https://wa.me/+9779847925300" target="_blank"><i class="uil uil-whatsapp-alt"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__copyright">
            <small>Copyright &copy; ClinicEase@2024</small>
        </div>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
     function sendOTP() {
    var number = $("#mobile_number").val();
    // Regular expression for validating the phone number format
    var phoneRegex = /^\+977\d{10}$/;
    if (phoneRegex.test(number)) {
        var input = {
            "mobile_number": number,
            "action": "send_otp"
        };
        $.ajax({
            url: 'controller.php',
            type: 'POST',
            data: input,
            success: function (response) {
                $("#otp-form").show();
            }
        });
    } else {
        alert('Please enter a valid phone number with +977 country code and 10 digits!');
    }
}


        function verifyOTP() {
            var otp = $("#otp").val();
            if (otp.length == 6 && otp != null) {
                var input = {
                    "otp": otp,
                    "action": "verify_otp"
                };
                $.ajax({
                    url: 'controller.php',
                    type: 'POST',
                    dataType: "json",
                    data: input,
                    success: function (response) {
                        if (response.type == "success") {
                            // Upon successful OTP verification, submit the form
                            $("#appointment-form").submit();
                            // Display success message
                            alert("Details saved successfully.");
                        } else {
                            alert("Invalid OTP");
                        }
                    },
                    error: function () {
                        alert("Error occurred while verifying OTP.");
                    }
                });
            } else {
                alert('Please enter a valid OTP.')
            }
        }
    </script>

</body>

</html>
