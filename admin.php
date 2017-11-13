<?php
	// 1. Create a database connection
	$dbhost = "66.147.242.186";
    $dbuser = "urcscon3_sanfran";
    $dbpass = "coffee1N";
    $dbname = "urcscon3_sanfrancisco";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// 2. Perform database query
	$query  = "SELECT * FROM `frameworkSurvey` ORDER BY `frameworkSurvey`.`counter` ASC";

	$result = mysqli_query($connection, $query);

	
?>

<!doctype html>
<html>
<head>
	<title>Database Read - Framework Survey</title>

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

	<h1 class="arc center-align">Database Read - frameworkSurvey</h1>
	
	<div class="charl">

	<table border="1">

<?php
	// 3. Use returned data (if any)
	while($frameworkSurvey = mysqli_fetch_assoc($result)) {

		// output data from each row
?>

		<tr>
			<td><?php echo $frameworkSurvey["name"]; ?></td>
			<td><?php echo $frameworkSurvey["email"]; ?></td>
			<td><?php echo $frameworkSurvey["favoriteFramework"]; ?></td>
			<td><?php echo $frameworkSurvey["featuresToChange"]; ?></td>
			<td><?php echo $frameworkSurvey["favoriteFeature"]; ?></td>
			<td><?php echo $frameworkSurvey["suggestionFeature"]; ?></td>
			<td><?php echo $frameworkSurvey["suggestionFramework"]; ?></td>
			<td class="contact-delete">

				<form action='edit.php?name="<?php echo $frameworkSurvey['name']; ?>"' method="post">
        		<input type="hidden" name="name" value="<?php echo $frameworkSurvey['name']; ?>">
				
				<button class="orange lighten-1 btn waves-effect waves-light" type="submit" name="Submit" value="Edit">Edit</button>

    			</form>


    			<form action='delete.php?name="<?php echo $frameworkSurvey['name']; ?>"' method="post">
        		<input type="hidden" name="name" value="<?php echo $frameworkSurvey['name']; ?>">
				
				<button class="orange lighten-1 btn waves-effect waves-light" type="submit" name="Submit" value="Delete">Delete</button>

    			</form>

    			
			</td>
		</tr>


<?php } ?>

	</table>	
	
	<div class="center-align">
	
	<a class="orange lighten-1 btn waves-effect waves-light">Back to Index</a>
	
	</div>
	
	</div>
	
	</div>


<!-- Downloading jQuery and Materialize -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>