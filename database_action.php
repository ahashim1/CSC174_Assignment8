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
    $framework = Trim(stripslashes($_POST['framework']));
    $feature = Trim(stripslashes($_POST['feature']));
    $improveFeat = Trim(stripslashes($_POST['improveFeat']));
    $suggestion = Trim(stripslashes($_POST['suggestion']));
    $recommend = Trim(stripslashes($_POST['recommend']));

    // Escape all strings
    $name = mysqli_real_escape_string($connection, $name);
    $email = mysqli_real_escape_string($connection, $email);
    $framework = mysqli_real_escape_string($connection, $framework);
    $feature = mysqli_real_escape_string($connection, $feature);
    $improveFeat = mysqli_real_escape_string($connection, $improveFeat);
    $suggestion = mysqli_real_escape_string($connection, $suggestion);
    $recommend = mysqli_real_escape_string($connection, $recommend);


    $total = count($_POST['feature']);
    $i=0;
    // These print each checked box, working on inputting it into database
    if(isset($_POST['feature']))
        foreach ($_POST['feature'] as $featureName) {
            $i++;

            $feature .= $featureName;
            if ($i != $total){
                $feature .= ", ";
            }
        }

    $total = count($_POST['feature']);
    $i=0;    
    if(isset($_POST['improveFeat']))
        foreach ($_POST['improveFeat'] as $improveFeatName) {
            $i++;
           $improveFeat .= $improveFeatName;
           if ($i != $total){
                $improveFeat .= ", ";
            }
        }




    // // 2. Perform database query
    $query  = "INSERT INTO frameworkSurvey (";
    $query .= "  name, email, favoriteFramework, favoriteFeature, featuresToChange, suggestionFeature, suggestionFramework";
    $query .= ") VALUES (";
    $query .= "  '{$name}', '{$email}', '{$framework}', '{$feature}', '{$improveFeat}', '{$suggestion}', '{$recommend}'";
    $query .= ")";

    $result = mysqli_query($connection, $query);

?>

<!doctype html>
<html>
<head>

    <title>Framework Survey Result</title>

    
</head>
<body>

    <h1>Framework Survey</h1>

<?php
    if ($result) {
        echo "Your submission has been recorded.";
    } 

    else {
        die("Whoops, it looks like something went wrong.");
    }
?>
    <br>
    <a href="index.php">Back to Survey</a>

</body>
</html>





<?php
    // 5. Close database connection
    mysqli_close($connection);
?>