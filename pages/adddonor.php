<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BDMS</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../icofont/icofont.min.css">
</head>
<body>
    <div id="wrapper">
        <?php include 'includes/nav.php'?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add Donor's Detail</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Please fill up the form below:
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form" action="" method="post" id="donorForm" onsubmit="return validateForm()">
                                            <div class="form-group">
                                                <label>Enter Full Name</label>
                                                <input class="form-control" name="name" type="text" placeholder="Example: Harry Den" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Medical Condition(if any)</label>
                                                <input class="form-control" placeholder="if no, write None" name="medicalcondition" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <div class="radio">
                                                    <label><input type="radio" name="gender" value="male" required> Male</label>
                                                </div>
                                                <div class="radio">
                                                    <label><input type="radio" name="gender" value="female" required> Female</label>
                                                </div>
                                                <div class="radio">
                                                    <label><input type="radio" name="gender" value="other" required> Other</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Enter D.O.B</label>
                                                <input class="form-control" type="date" name="dob" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Enter Weight</label>
                                                <input class="form-control" type="number" placeholder="Enter Weight" name="weight" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Select Blood Group</label><br>
                                                <label class="radio-inline"><input type="radio" name="bloodgroup" value="A+" required> A+ </label>
                                                <label class="radio-inline"><input type="radio" name="bloodgroup" value="B+" required> B+ </label>
                                                <label class="radio-inline"><input type="radio" name="bloodgroup" value="O+" required> O+ </label>
                                                <label class="radio-inline"><input type="radio" name="bloodgroup" value="AB+" required> AB+ </label>
                                                <br><label class="radio-inline"><input type="radio" name="bloodgroup" value="A-" required> A- </label>
                                                <label class="radio-inline"><input type="radio" name="bloodgroup" value="B-" required> B- </label>
                                                <label class="radio-inline"><input type="radio" name="bloodgroup" value="O-" required> O- </label>
                                                <label class="radio-inline"><input type="radio" name="bloodgroup" value="AB-" required> AB- </label>
                                            </div>
                                            <div class="form-group">
                                                <label>Enter Email Id</label>
                                                <input class="form-control" type="email" placeholder="Enter Email Id" name="email" id="email" required>
                                                <p id="emailError" class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Enter Address</label>
                                                <input class="form-control" type="text" placeholder="Enter Address Here" name="address" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Enter Contact Number</label>
                                                <input class="form-control" type="text" placeholder="Contact Number" name="contact" pattern="01[0-9]{9}" title="Please enter a valid 11-digit number starting with 01" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Enter Username</label>
                                                <input class="form-control" placeholder="Enter Here" name="username" required>
                                                <p class="help-block">In order to create donor's account.</p>
                                                <p class="help-block">Example: harry20</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Enter Password</label>
                                                <input class="form-control" name="password" type="password" id="myInput" required>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" onclick="myFunction()">Show Password</label>
                                                </div>
                                            </div>
                                            <button type="submit" name="register" class="btn btn-success" style="border-radius:0%;">Submit Form</button>
                                        </form>
                                        <div id="otpForm" style="display: none;">
                                            <form action="verify_otp.php" method="post">
                                                <div class="form-group">
                                                    <label>Enter OTP</label>
                                                    <input class="form-control" name="otp" type="text" placeholder="Enter the OTP sent to your email" required>
                                                </div>
                                                <input type="hidden" name="activation_code" id="activation_code" value="">
                                                <button type="submit" name="verify" class="btn btn-success" style="border-radius:0%;">Verify OTP</button>
                                            </form>
                                        </div>
                                        <?php
                                        require 'C:/xampp/htdocs/blood-donorms-PHP/vendor/autoload.php';
                                        use PHPMailer\PHPMailer\PHPMailer;
                                        use PHPMailer\PHPMailer\Exception;

                                        if (isset($_POST['register'])) {
                                            include('dbconnect.php');

                                            $name = mysqli_real_escape_string($conn, $_POST['name']);
                                            $medicalcondition = mysqli_real_escape_string($conn, $_POST['medicalcondition']);
                                            $gender = mysqli_real_escape_string($conn, $_POST['gender']);
                                            $dob = mysqli_real_escape_string($conn, $_POST['dob']);
                                            $weight = mysqli_real_escape_string($conn, $_POST['weight']);
                                            $bloodgroup = mysqli_real_escape_string($conn, $_POST['bloodgroup']);
                                            $email = mysqli_real_escape_string($conn, $_POST['email']);
                                            $address = mysqli_real_escape_string($conn, $_POST['address']);
                                            $contact = mysqli_real_escape_string($conn, $_POST['contact']);
                                            $username = mysqli_real_escape_string($conn, $_POST['username']);
                                            $password = mysqli_real_escape_string($conn, $_POST['password']); // Remove md5 hashing
                                            $otp = substr(str_shuffle("0123456789"), 0, 5);
                                            $activation_code = str_shuffle("abcdefghijklmno" . rand(100000, 10000000));

                                            $sql = "INSERT INTO donor (name, medicalcondition, gender, dob, weight, bloodgroup, email, address, contact, username, password, otp, activation_code, status)
                                                    VALUES ('$name', '$medicalcondition', '$gender', '$dob', '$weight', '$bloodgroup', '$email', '$address', '$contact', '$username', '$password', '$otp', '$activation_code', 'inactive')";
                                            if (mysqli_query($conn, $sql)) {
                                                $mail = new PHPMailer;
                                                $mail->IsSMTP();
                                                $mail->Host = 'smtp.gmail.com';
                                                $mail->Port = '587';
                                                $mail->SMTPAuth = true;
                                                $mail->Username = 'pumkinbriee@gmail.com';
                                                $mail->Password = 'nfvqumeeqeljxmdz';
                                                $mail->SMTPSecure = 'tls';
                                                $mail->From = 'pumkinbriee@gmail.com';
                                                $mail->FromName = 'Signup Confirmation';
                                                $mail->AddAddress($email);
                                                $mail->WordWrap = 50;
                                                $mail->IsHTML(true);
                                                $mail->Subject = 'Verification code for Verify Your Email Address';

                                                $message_body = '<p>For verify your email address, enter this verification code when prompted: <b>' . $otp . '</b>.</p><p>Sincerely,</p>';
                                                $mail->Body = $message_body;

                                                if ($mail->Send()) {
                                                    echo '<script>
                                                        alert("Please Check Your Email for Verification Code");
                                                        document.getElementById("donorForm").style.display = "none";
                                                        document.getElementById("otpForm").style.display = "block";
                                                        document.getElementById("activation_code").value = "'.$activation_code.'";
                                                    </script>';
                                                } else {
                                                    $message = $mail->ErrorInfo;
                                                    echo '<script>alert("' . $message . '")</script>';
                                                }
                                            } else {
                                                echo '<script>alert("Error: ' . mysqli_error($conn) . '")</script>';
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        function validateForm() {
            var emailInput = document.getElementById('email');
            var email = emailInput.value.trim();
            var emailPattern = /^[^\s@]+@gmail\.com$/i;

            if (!emailPattern.test(email)) {
                document.getElementById('emailError').innerText = "Please enter a valid Gmail address.";
                emailInput.focus();
                return false;
            }

            document.getElementById('emailError').innerText = "";
            return true;
        }
    </script>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>
</body>
</html>
