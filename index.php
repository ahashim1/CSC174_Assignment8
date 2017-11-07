<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Assignment 8 - User Survey</title>
	
	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

	<header>

		<h1>Front-End Frameworks</h1>

	</header>

		<h2>About</h2>

			<p>Front-end development is all about the parts of a website that the user sees. Using a <em>framework</em> helps construct the wbesite's front-end functionality. Commonly referred to as <em>"CSS frameworks"</em>, front-end frameworks are packages that contain standardized code in files and folders. It provides a starting base for the developer while still allowing flexibility with the final design. A known advantage in using a front-end framework is that it's a shortcut that saves time, understanding that the code works and is actually functional. There are many different frameworks out there and it's up to the developer to decide which is best for them, looking at different factors and what each one offers. This user survey will explore which frameworks are popular among users and what features of those frameworks they're compelled to.</p>

			<!-- "About" content taken from https://www.thebalance.com/what-is-a-front-end-framework-and-why-use-one-2071948 -->

		<h2>User Survey</h2> 

			<form method="post" action="database_action.php">

				<label for="name"> Name: </label>
				<i class="material-icons prefix">account_circle</i>
				<input type="text" name="name" id="name"><br><br>

				<label for="email">Email: </label>
				<input type="email" name="email" id="email"><br><br>
				

			<fieldset>

				<legend>Front-End Frameworks</legend>

				<h3>What is your favorite front-end framework?</h3>
				
					
					<input type="radio" name="framework" id="bootstrap">
					<label for="bootstrap">Bootstrap</label><br>

					<input type="radio" name="framework" id="foundation">
					<label for="foundation">Foundation</label><br>

					<input type="radio" name="framework" id="stylus">
					<label for="stylus">Stylus</label><br>

					<input type="radio" name="framework" id="materialize">
					<label for="materialize">Materialize</label><br>

					<input type="radio" name="framework" id="semantic">
					<label for="semantic">Semantic UI</label><br>

					<input type="radio" name="framework" id="pure">
					<label for="pure">Pure</label><br>

					<input type="radio" name="framework" id="uikit">
					<label for="uikit">UIKit</label><br>

					<input type="radio" name="framework" id="milligram">
					<label for="milligram">Milligram</label><br>
					
					<input type="radio" name="framework" id="skeleton">
					<label for="skeleton">Skeleton</label><br>
					
					<input type="radio" name="framework" id="susy">
					<label for="susy">Susy</label><br>


				<h3>Which features of this front-end framework appeals to you?</h3>
					
					<input type="checkbox" name="feature" id="flex">
					<label for="flex">Flexibility</label><br>

					<input type="checkbox" name="feature" id="browser">
					<label for="browser">Browser Compatability</label><br>

					<input type="checkbox" name="feature" id="community">
					<label for="community">Community & Popularity</label><br>

					<input type="checkbox" name="feature" id="mobile">
					<label for="mobile">Mobile Friendly</label><br>

					<input type="checkbox" name="feature" id="stability">
					<label for="stability">Stability</label><br>

					<input type="checkbox" name="feature" id="speed">
					<label for="speed">Speed</label><br>

					<input type="checkbox" name="feature" id="readability">
					<label for="readability">Code Readability</label><br>


				<h3>Which features do you think this front-end framework needs to work on?</h3>

					<input type="checkbox" name="feature" id="flex">
					<label for="flex">Flexibility</label><br>

					<input type="checkbox" name="feature" id="browser">
					<label for="browser">Browser Compatability</label><br>

					<input type="checkbox" name="feature" id="community">
					<label for="community">Community & Popularity</label><br>

					<input type="checkbox" name="feature" id="mobile">
					<label for="mobile">Mobile Friendly</label><br>

					<input type="checkbox" name="feature" id="stability">
					<label for="stability">Stability</label><br>

					<input type="checkbox" name="feature" id="speed">
					<label for="speed">Speed</label><br>

					<input type="checkbox" name="feature" id="readability">
					<label for="readability">Code Readability</label><br>


			</fieldset>

			<fieldset>
				<legend>Suggestions</legend>

					<label for="suggestion">What kind of features would you like to see added or upgraded?</label><br>
					<textarea name="suggestion" id="suggestion"></textarea><br><br><br>

					<label for="recommend">Do you recommend any other front-end frameworks not listed in this survey?</label><br>
					<textarea name="recommend" id="recommend"></textarea><br>
					
					<input type="submit" name="Submit"><br>

			</fieldset>
				
			</form>

<!-- Downloading jQuery and Materialize -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
					
</body>

</html>