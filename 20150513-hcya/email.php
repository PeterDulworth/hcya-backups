<?php ob_start();
session_start();
?>
<html !DOCTYPE>
    <html lang="en">
        <head>
            <meta charset="UTF-8" />
            <title>Confirm Send</title>
            <link rel="stylesheet" href="hcyaStyle.css">
        </head>

        <body>
			<?php
				$username = "login42007";
				$password = "Lamborghini97!";
				$hostname = "68.178.217.44";

				$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to databasae");

				$selected = mysql_select_db("login42007", $dbhandle);

				$manualRecipients   = $_POST['recipients'];
				$manualRecipients   = $manualRecipients . ",";
				$subject      = $_POST['subject'];
				$emailContent = $_POST['emailContent'];

				$headers = "MIME-Version: 1.0"."\r\n";
				$headers .= "Content-type:text/html; charset=utf-8"."\r\n";
				$headers .= "From: HCYA <pdulworth97@gmail.com>"." \r\n";

				$query = mysql_query("SELECT * FROM emailList");

				$autoRecipients = "";

				while ($array = mysql_fetch_array($query)) {
					$autoRecipients = $autoRecipients.($array['Email'].",");
				}

				$allRecipients = $autoRecipients . $manualRecipients;

				mail($allRecipients, $subject, $emailContent, $headers);

				if (1 == 1) {header('location:admin_view.php?problem=messageSent');}

				mysql_close();
			?>
        </body>
    </html>