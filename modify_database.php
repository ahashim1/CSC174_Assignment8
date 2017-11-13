<?php

$dbhost = "66.147.242.186";
$dbuser = "urcscon3_sanfran";
$dbpass = "coffee1N";
$dbname = "urcscon3_sanfrancisco";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(isset($_POST['edit_row']))
{
 $counter=$_POST['counter_val'];
 $name=$_POST['name_val'];
 $email=$_POST['email_val'];
 $favoriteFramework=$_POST['favoriteFramework_val'];
 $featuresToChange=$_POST['featuresToChange_val'];
 $favoriteFeature=$_POST['favoriteFeature_val'];
 $suggestionFeature=$_POST['suggestionFeature_val'];
 $suggestionFramework=$_POST['suggestionFramework_val'];

	
 $query  = "UPDATE `urcscon3_sanfrancisco`.`frameworkSurvey` SET `name` = '{$name}', `email` = '{$email}', `favoriteFramework` = '{$favoriteFramework}', `favoriteFeature` = '{$favoriteFeature}', `featuresToChange` = '{$featuresToChange}', `suggestionFeature` = '{$suggestionFeature}', `suggestionFramework` = '{$suggestionFramework}' WHERE `frameworkSurvey`.`counter` = $counter;";

$result = mysqli_query($connection, $query);
	if ($result){
 		echo "success";
	}
 exit();
}

if(isset($_POST['delete_row']))
{
 $counter=$_POST['counter_val'];
 $query = "DELETE FROM `urcscon3_sanfrancisco`.`frameworkSurvey` WHERE `frameworkSurvey`.`counter` = $counter";

 $result = mysqli_query($connection, $query);
	 if ($result){
 		echo "success";
	}
 exit();
}

?>