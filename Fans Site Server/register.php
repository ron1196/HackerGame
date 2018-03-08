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

	if( strlen($username) > 16 ) {
		$conn->close();
	        echo "שם משתמש לא יכול להכיל יותר מ16 תווים";
        	echo "<br><button onclick='goBack()'>חזרה להרשמה</button>";
		die();
	}
	
	$sql = "INSERT INTO users (username, password) VALUES ('" . $username. "', '" . password_hash($password, PASSWORD_DEFAULT) . "')";

	if ($conn->query($sql) === TRUE) {
               $conn->close();
		header("Location: login.html");
		die();
    	} 

        $conn->close();
	echo "שם משתמש תפוס";
        echo "<br><button onclick='goBack()'>חזרה להרשמה</button>";
                
    	
?>
