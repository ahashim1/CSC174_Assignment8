<?php
    // 1. Create a database connection
    $dbhost = "66.147.242.186";
    $dbuser = "urcscon3_sanfran";
    $dbpass = "coffee1N";
    $dbname = "urcscon3_sanfrancisco";

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // Often these are form values in $_POST
    $name = Trim(stripslashes($_POST['name']));
    $email = Trim(stripslashes($_POST['email']));
    $suggestion = Trim(stripslashes($_POST['suggestion']));

    // Escape all strings
    $name = mysqli_real_escape_string($connection, $name);
    $email = mysqli_real_escape_string($connection, $email);
    $suggestion = mysqli_real_escape_string($connection, $suggestion);

    

    // // 2. Perform database query
    $query  = "INSERT INTO frameworkSurvey (";
    $query .= "  name, email, suggestion";
    $query .= ") VALUES (";
    $query .= "  '{$name}', '{$email}', '{$suggestion}'";
    $query .= ")";

    $result = mysqli_query($connection, $query);

?>

<!doctype html>
<html>
<head>
    <title>Processing Contact Form</title>
</head>
<body>

    <h1>Processing contact information</h1>

<?php
    if ($result) {
        echo "Success! - the query didn't error-out";

?>

<p>This just happened:<br>
<pre>
    $name = Trim(stripslashes($_POST['name']));
    $email = Trim(stripslashes($_POST['email']));
    $suggestion = Trim(stripslashes($_POST['suggestion']));

    // Escape all strings
    $name = mysqli_real_escape_string($connection, $name);
    $email = mysqli_real_escape_string($connection, $email);
    $suggestion = mysqli_real_escape_string($connection, $suggestion);

    

    // // 2. Perform database query
    $query  = "INSERT INTO frameworkSurvey (";
    $query .= "  name, email, suggestion";
    $query .= ") VALUES (";
    $query .= "  '{$name}', '{$email}', '{$suggestion}'";
    $query .= ")";
</pre>
</p>

<?php

    } else {
        die("Database query failed.");
    }
?>
    <br>
    <a href="contacts-list.php">Continue</a>

</body>
</html>





<?php
    // 5. Close database connection
    mysqli_close($connection);
?>