<script>
function goBack() {
    window.history.back();
}
</script>
<?php
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

	$username = $_POST["username"];
    	$password = $_POST["pass"];	

	$sql = "SELECT password FROM  users WHERE username='" . $username . "'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		if(password_verify($password, $row["password"])) {
			$conn->close();
			session_start();
			$_SESSION["username"] = $username;
			header("Location: index.php");
			exit;
		}
    	} 
        $conn->close();
	echo "שם משתמש או סיסמה שגויים";
        echo "<br><button onclick='goBack()'>חזרה לדף התחברות</button>";
?>

