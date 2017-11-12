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
	<title>Database Read - frameworkSurvey</title>
</head>
<body>

	<h1>Database Read - frameworkSurvey</h1>

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
			<td class="contact-delete">

				<form action='edit.php?name="<?php echo $frameworkSurvey['name']; ?>"' method="post">
        		<input type="hidden" name="name" value="<?php echo $frameworkSurvey['name']; ?>">
        		
        		<input type="submit" name="submit" value="Edit">
    			</form>

    			
    			<form action='delete.php?name="<?php echo $frameworkSurvey['name']; ?>"' method="post">
        		<input type="hidden" name="name" value="<?php echo $frameworkSurvey['name']; ?>">

        		<input type="submit" name="submit" value="Delete">
    			</form>

    			
			</td>
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