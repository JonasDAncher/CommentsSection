<?php
date_default_timezone_set('Europe/Copenhagen');
include 'dbh.inc.php';
include 'comments.inc.php';

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="Style.css">

<body>


    <?php
    echo "<form method='POST' action='" . setComments($conn) . "'>
<input type='hidden' name='uid' value='Anonymous'>
<input type='hidden' name='date' value='" . date('Y-m-d H:i:s') . "'>
<textarea name='message'></textarea> <br>
<button type='submit' name='commentSubmit' >Comment</button>

</form>";
    ?>
</body>
</head>

</html>