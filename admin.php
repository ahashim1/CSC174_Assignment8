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
	echo $query;

	
?>

<!doctype html>
<html>
<head>
	<title>Database Read - Pages</title>
</head>
<body>

	<h1>Database Read - Pages</h1>

	<table border>

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





		</tr>

<?php } ?>

	</table>

	<br>
	<a href=".">Back to the Index</a>

</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>