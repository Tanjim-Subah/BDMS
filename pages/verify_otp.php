<?php
require 'dbconnect.php';

if (isset($_POST['verify'])) {
    $otp = mysqli_real_escape_string($conn, $_POST['otp']);
    $activation_code = mysqli_real_escape_string($conn, $_POST['activation_code']);

    $sql = "SELECT * FROM donor WHERE otp = '$otp' AND activation_code = '$activation_code'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $sql_update = "UPDATE donor SET status = 'active' WHERE otp = '$otp' AND activation_code = '$activation_code'";
        if (mysqli_query($conn, $sql_update)) {
            echo '<script>alert("Successfully added!"); window.location.href="success.php";</script>';
        } else {
            echo '<script>alert("Error: ' . mysqli_error($conn) . '"); window.location.href="adddonor.php";</script>';
        }
    } else {
        echo '<script>alert("Invalid OTP. Please try again."); window.location.href="adddonor.php";</script>';
    }
}
?>
