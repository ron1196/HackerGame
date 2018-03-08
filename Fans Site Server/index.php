<HTML>
<HEAD>
<link rel="stylesheet" href="styles/5star.css">
<STYLE type="text/css">
    body {
        background-color: lightblue;
        margin:0px auto;
        max-width: 600px;
        padding: 20px 12px 10px 20px;
        font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    }
    h1 {
        margin:10px auto;
        text-align: center;
    }
    div {
        background-color: hsl(0, 0%, 90%);
    }
    .messages {
        margin:0px auto;
    	text-align: center;
    }
    .form-style-1 {
        margin:10px auto;
        max-width: 300px;
        padding: 20px 12px 10px 20px;
        font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    }
    .form-style-1 li {
        padding: 0;
        display: block;
        list-style: none;
        margin: 15px 0 0 0;
    }
    .form-style-1 label{
        margin:0 0 3px 0;
        padding:0px;
        display:block;
        font-weight: bold;
    }
    .form-style-1 input[type=text], 
    .form-style-1 input[type=date],
    .form-style-1 input[type=datetime],
    .form-style-1 input[type=number],
    .form-style-1 input[type=search],
    .form-style-1 input[type=time],
    .form-style-1 input[type=url],
    .form-style-1 input[type=email],
    textarea, 
    select{
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        border:1px solid #BEBEBE;
        padding: 7px;
        margin:0px;
        -webkit-transition: all 0.30s ease-in-out;
        -moz-transition: all 0.30s ease-in-out;
        -ms-transition: all 0.30s ease-in-out;
        -o-transition: all 0.30s ease-in-out;
        outline: none;  
    }
    .form-style-1 input[type=text]:focus, 
    .form-style-1 input[type=date]:focus,
    .form-style-1 input[type=datetime]:focus,
    .form-style-1 input[type=number]:focus,
    .form-style-1 input[type=search]:focus,
    .form-style-1 input[type=time]:focus,
    .form-style-1 input[type=url]:focus,
    .form-style-1 input[type=email]:focus,
    .form-style-1 textarea:focus, 
    .form-style-1 select:focus{
        -moz-box-shadow: 0 0 8px #88D5E9;
        -webkit-box-shadow: 0 0 8px #88D5E9;
        box-shadow: 0 0 8px #88D5E9;
        border: 1px solid #88D5E9;
    }
    .form-style-1 .field-divided{
        width: 49%;
    }

    .form-style-1 .field-long{
        width: 100%;
    }
    .form-style-1 .field-select{
        width: 100%;
    }
    .form-style-1 .field-textarea{
        height: 100px;
    }
    .form-style-1 input[type=radio]{
        background: #4B99AD;
        margin: 8px 15px 8px 15px;
        border: none;
        color: #fff;
    }
    .form-style-1 input[type=submit], .form-style-1 input[type=button]{
        background: #4B99AD;
        padding: 8px 15px 8px 15px;
        border: none;
        color: #fff;
    }
    .form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
        background: #4691A4;
        box-shadow:none;
        -moz-box-shadow:none;
        -webkit-box-shadow:none;
    }
    .form-style-1 .required{
        color:red;
    }
</STYLE>
</HEAD>
<BODY dir="rtl">
<div>
	<?php
		session_start();
        	if(isset($_SESSION['username']))
		{
			echo "<div><a href='logout.php'>התנתק</a></div>";
		}
		else
		{
			header("Location: login.html");
			exit;
		}
	?>

    <h2>פידבק מפגש מעריצים + פרידה מפטריק (Patrick בפורום)</h2>

    <form action="insert_message.php", method="post">
    <ul class="form-style-1">
        <li>
            <label>כמה מהנה היה האירוע?</label>
            <input type="radio" name="rate1" value="1" />1
            <input type="radio" name="rate1" value="2" />2
            <input type="radio" name="rate1" value="3" checked />3
            <input type="radio" name="rate1" value="4" />4
            <input type="radio" name="rate1" value="5" />5
        </li>
        <li>
            <label>איכות האוכל?</label>
            <input type="radio" name="rate2" value="1" />1
            <input type="radio" name="rate2" value="2" />2
            <input type="radio" name="rate2" value="3" checked/>3
            <input type="radio" name="rate2" value="4" />4
            <input type="radio" name="rate2" value="5" />5
        </li>
        <li>
            <label>ניקיון המקום?</label>
            <input type="radio" name="rate3" value="1" />1
            <input type="radio" name="rate3" value="2" />2
            <input type="radio" name="rate3" value="3" checked/>3
            <input type="radio" name="rate3" value="4" />4
            <input type="radio" name="rate3" value="5" />5
        </li>
        <li>
            <label>מחירי הדוכנים?</label>
            <input type="radio" name="rate4" value="1" />1
            <input type="radio" name="rate4" value="2" />2
            <input type="radio" name="rate4" value="3" checked/>3
            <input type="radio" name="rate4" value="4" />4
            <input type="radio" name="rate4" value="5" />5
        </li>
        <li>
            <label>האם תמליץ לחבר להגיע למפגש הבא?</label>
            <input type="radio" name="rate5" value="1" />1
            <input type="radio" name="rate5" value="2" />2
            <input type="radio" name="rate5" value="3" checked/>3
            <input type="radio" name="rate5" value="4" />4
            <input type="radio" name="rate5"  value="5" />5
        </li>
        <li>
            <label>הערות נוספות (מוצג בפומבי לכל המשתמשים)</label>
            <textarea name="message" class="field-long field-textarea"></textarea>
        </li>
        <li>
            <input type="submit" value="שלח" />
        </li>
    </ul>
    </form>
    </div>
    <?php
        $servername = "localhost";
        $username   = "root";
        $password   = "1234";
        $dbname     = "site";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql    = "SELECT username, message FROM messages";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<div class='messages'><h4>" . $row["username"] . "</h4><h3> " . $row["message"] . "</h3></div>";
            }
        } else {
            echo "אין תגובות";
        }
        $conn->close();
    ?>

</BODY>
</HTML>
