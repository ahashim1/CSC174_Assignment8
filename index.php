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
	
	<div class="container">

	<header>

		<h1>Front-End Frameworks</h1>

	</header>

		<h2>About</h2>

			<p>Front-end development is all about the parts of a website that the user sees. Using a <em>framework</em> helps construct the wbesite's front-end functionality. Commonly referred to as <em>"CSS frameworks"</em>, front-end frameworks are packages that contain standardized code in files and folders. It provides a starting base for the developer while still allowing flexibility with the final design. A known advantage in using a front-end framework is that it's a shortcut that saves time, understanding that the code works and is actually functional. There are many different frameworks out there and it's up to the developer to decide which is best for them, looking at different factors and what each one offers. This user survey will explore which frameworks are popular among users and what features of those frameworks they're compelled to.</p>

			<!-- "About" content taken from https://www.thebalance.com/what-is-a-front-end-framework-and-why-use-one-2071948 -->

		<h2>User Survey</h2> 

			<form method="post" action="database_action.php">
			
			<div class="row">
			
				<div class="input-field col s6">
					<i class="material-icons prefix">account_circle</i>
					<label for="name"> Name: </label>
					<input type="text" name="name" id="name">
				</div>
				
				<div class="input-field col s6">
					<i class="material-icons prefix">email</i>
					<input type="email" name="email" id="email" class="validate">
					<label for="email" data-error="Please enter a valid email">Email: </label>
					
					
				</div>
			
			</div>

			<fieldset>

				<legend>Front-End Frameworks</legend>

				<h3>What is your favorite front-end framework?</h3>
				
					<p>
						<input type="radio" name="framework" id="bootstrap" class="with-gap">
						<label for="bootstrap">Bootstrap</label>
					</p>

					<p>
						<input type="radio" name="framework" id="foundation" class="with-gap">
						<label for="foundation">Foundation</label>
					</p>
					
					<p>
						<input type="radio" name="framework" id="stylus" class="with-gap">
						<label for="stylus">Stylus</label>
					</p>
					
					<p>
						<input type="radio" name="framework" id="materialize" class="with-gap">
						<label for="materialize">Materialize</label><br>
					</p>
					
					<p>
						<input type="radio" name="framework" id="semantic" class="with-gap">
						<label for="semantic">Semantic UI</label><br>
					</p>
					
					<p>
						<input type="radio" name="framework" id="pure" class="with-gap">
						<label for="pure">Pure</label><br>
					</p>
					
					<p>
						<input type="radio" name="framework" id="uikit" class="with-gap">
						<label for="uikit">UIKit</label><br>
					</p>
					
					<p>
						<input type="radio" name="framework" id="milligram" class="with-gap">
						<label for="milligram">Milligram</label><br>
					</p>
					
					<p>
						<input type="radio" name="framework" id="skeleton" class="with-gap">
						<label for="skeleton">Skeleton</label><br>
					</p>
					
					<p>
						<input type="radio" name="framework" id="susy" class="with-gap">
						<label for="susy">Susy</label><br>
					</p>
	
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
				
				<div class="row">
				
					<div class="input-field col s12">
						<textarea name="suggestion" id="suggestion" class="materialize-textarea"></textarea>
						<label for="suggestion">What kind of features would you like to see added or upgraded?</label>
					</div>
					

					<div class="input-field col s12">
						<textarea name="recommend" id="recommend" class="materialize-textarea"></textarea>
						<label for="recommend">Do you recommend any other front-end frameworks not listed in this survey?</label>
					</div>
					
					<input type="submit" name="Submit"><br>
					
				</div>

			</fieldset>
				
			</form>
			
		</div>

<!-- Downloading jQuery and Materialize -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
					
</body>

</html>