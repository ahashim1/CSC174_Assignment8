<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Assignment 6</title>
    

     <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css">

    

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>



<!-- Form Test -->
    <h1>Hello Database!</h1>
    <form method="post" action="database_action.php">
      <div>
        <label for="name">Name: </label>
        <input type="text" name="name" id="name">
      </div>

      <div>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email">
      </div>

      <div>
        <label for="suggestion">Suggestion: </label>
        <textarea name="suggestion" id="suggestion"></textarea>
      </div>

     <div>
		<label class="container">One
		  <input type="checkbox">
		  <span class="checkmark"></span>
		</label>

		<label class="container">Two
		  <input type="checkbox">
		  <span class="checkmark"></span>
		</label>

		<label class="container">Three
		  <input type="checkbox">
		  <span class="checkmark"></span>
		</label>

		<label class="container">Four
		  <input type="checkbox">
		  <span class="checkmark"></span>
		</label>
	</div>

	<div>
		<label class="container">One
		  <input type="radio" checked="checked" name="radio">
		  <span class="checkmark"></span>
		</label>
		<label class="container">Two
		  <input type="radio" name="radio">
		  <span class="checkmark"></span>
		</label>
		<label class="container">Three
		  <input type="radio" name="radio">
		  <span class="checkmark"></span>
		</label>
		<label class="container">Four
		  <input type="radio" name="radio">
		  <span class="checkmark"></span>
		</label>
	</div>

      <input type="submit" value="Enter">
    </form>

  


<!-- Downloading jQuery and Materialize -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>



</body>

</html>
