<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Check</title>
</head>

<body>
<h1>
    Check
</h1>

<p>
    <?php
    $sql = "SELECT * FROM users WHERE username= '" . $_POST['username'] . "' AND password= '" . $_POST['password'] . "'";
    $result = $conn->query($sql);

   
    
    ?>
</p>
</body>
</html>