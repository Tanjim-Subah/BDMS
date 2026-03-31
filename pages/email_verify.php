<?php
include('dbconnect.php');

if (isset($_POST['verify'])) {
    if (isset($_GET['code'])) {
        $activation_code = $_GET['code'];
        $otp = $_POST['otp'];

        $sqlSelect = "SELECT * FROM donors WHERE activation_code = '$activation_code'";
        $resultSelect = mysqli_query($conn, $sqlSelect);
        if (mysqli_num_rows($resultSelect) > 0) {
            $rowSelect = mysqli_fetch_assoc($resultSelect);

            $rowOtp = $rowSelect['otp'];
            $rowSignupTime = $rowSelect['signup_time'];

            $signupTime = date('d-m-Y h:i:s', strtotime($rowSignupTime));
            $signupTime = date_create($signupTime);
            date_modify($signupTime, "+1 minutes");
            $timeUp = date_format($signupTime, 'd-m-Y h:i:s');

            if ($rowOtp !== $otp) {
                echo "<script>alert('Please provide correct OTP..!')</script>";
            } else {
                if (date('d-m-Y h:i:s') >= $timeUp) {
                    echo "<script>alert('Your time is up..try it again..!')</script>";
                    header("Refresh:1; url=index.php");
                } else {
                    $sqlUpdate = "UPDATE donors SET otp = '', status = 'active' WHERE otp = '$otp' AND activation_code = '$activation_code'";
                    $resultUpdate = mysqli_query($conn, $sqlUpdate);
                    
                    if ($resultUpdate) {
                        echo "<script>alert('Your account successfully activated')</script>";
                        header("Refresh:1; url=index.php");
                    } else {
                        echo "<script>alert('Opss..Your account not activated')</script>";
                    }
                }
            }
        } else {
            header("Location: adddonor.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
</head>
<body>
    <form method="post" action="">
        <div class="form-group">
            <label>Enter OTP</label>
            <input class="form-control" name="otp" type="text" required>
        </div>
        <button type="submit" name="verify" class="btn btn-success">Verify</button>
    </form>
</body>
</html>
