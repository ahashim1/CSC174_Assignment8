<?php
    // 1. Create a database connection
    include 'db_info.php';


    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // Often these are form values in $_POST
    $name = Trim(stripslashes($_POST['name']));
    $email = Trim(stripslashes($_POST['email']));
    $framework = Trim(stripslashes($_POST['framework']));
    
    $suggestion = Trim(stripslashes($_POST['suggestion']));
    $recommend = Trim(stripslashes($_POST['recommend']));

    // Escape all strings
    $name = mysqli_real_escape_string($connection, $name);
    $email = mysqli_real_escape_string($connection, $email);
    $framework = mysqli_real_escape_string($connection, $framework);
    $suggestion = mysqli_real_escape_string($connection, $suggestion);
    $recommend = mysqli_real_escape_string($connection, $recommend);

    $feature = "";
    $improveFeat = "";
    
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
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Assignment 8 - Frameworks Survey</title>
    
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css">
    
    <!--Import overrides.css-->
    <link type="text/css" rel="stylesheet" href="css/overrides.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body class="grey darken-3">
    
    <div class="container">
    
        <div class="charl center-align">

        <header>

            <h1>Survey Submission</h1>

        </header>

                    <?php
                        if ($result) {
                            echo "Thanks for completing the survey, $name. Your submission has been successfully recorded!";
                        } 

                        else {
                            die("Whoops, it looks like something went wrong.");
                        }
                    ?>
                        <br>
                        <br>

						<a href="index.php" class="orange lighten-1 btn waves-effect waves-light">Back to Index</a>
            
        </div>

    </div>
<!-- Downloading jQuery and Materialize -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
                    
</body>

</html>




<?php
    // 5. Close database connection
    mysqli_close($connection);
?>