<?php
$msg_success = '';
if (isset($_POST['submit'])) {
    // echo $_POST['fname'] . '<br>';
    // echo $_POST['email'] . '<br>';
    // echo $_POST['message'] . '<br>';

    $fname   = $_POST['fname'];
    $email   = $_POST['email'];
    $message = $_POST['message'];

    $error_arr = [];

    if ($fname == "") {
        array_push($error_arr, "Name Field can not be empty!!");
    };
    if ($email == "") {
        array_push($error_arr, "Email Field can not be empty!!");
    }
    if ($message == "") {
        array_push($error_arr, "Message Field can not be empty!!");
    }

    if (count($error_arr) == 0) {
        $sql = "INSERT INTO contacts (fname, email, msg)
        VALUES ('$fname', '$email', '$message')";

        if ($conn->query($sql) === TRUE) {
            $msg_success =  "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
}
?>