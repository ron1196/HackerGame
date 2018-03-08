<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "site";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $username = $_SESSION["username"];
    $q1 = ($_POST["rate1"]);
    $q2 = intval($_POST["rate2"]);
    $q3 = intval($_POST["rate3"]);
    $q4 = intval($_POST["rate4"]);
    $q5 = intval($_POST["rate5"]);
    $message = mysqli_real_escape_string($conn, strip_tags($_POST["message"]));

    $sql = "INSERT INTO messages (username,q1,q2,q3,q4,q5,message) VALUES ('" . $username. "', '" . $q1 . "', '" . $q2 . "', '" . $q3 . "', '" . $q4."', '" . $q5 . "', '" . $message . "')";
    $conn->query($sql);
    header("Location: index.php");
    $conn->close();
    exit;
?>
