<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Assignment 8 - User Survey</title>
	
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

	<header class="center-align">

		<h1 class="arc">Front-End Frameworks</h1>

	</header>
	
	<div class="charl">

			<p class="big">Front-end development is all about the parts of a website that the user sees. Using a <em>framework</em> helps construct the wbesite's front-end functionality. Commonly referred to as <em>"CSS frameworks"</em>, front-end frameworks are packages that contain standardized code in files and folders. It provides a starting base for the developer while still allowing flexibility with the final design. A known advantage in using a front-end framework is that it's a shortcut that saves time, understanding that the code works and is actually functional. There are many different frameworks out there and it's up to the developer to decide which is best for them, looking at different factors and what each one offers. This user survey will explore which frameworks are popular among users and what features of those frameworks they're compelled to.</p>

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

				<legend class="big">Front-End Frameworks</legend>

				<h3>What is your favorite front-end framework?</h3>
				
				<div class="boxes">
				
					<p>
						<input type="radio" name="framework" id="bootstrap">
						<label for="bootstrap">Bootstrap</label>
					</p>

					<p>
						<input type="radio" name="framework" id="foundation">
						<label for="foundation">Foundation</label>
					</p>
					
					<p>
						<input type="radio" name="framework" id="stylus">
						<label for="stylus">Stylus</label>
					</p>
					
					<p>
						<input type="radio" name="framework" id="materialize">
						<label for="materialize">Materialize</label>
					</p>
					
					<p>
						<input type="radio" name="framework" id="semantic">
						<label for="semantic">Semantic UI</label>
					</p>
					
					<p>
						<input type="radio" name="framework" id="pure">
						<label for="pure">Pure</label>
					</p>
					
					<p>
						<input type="radio" name="framework" id="uikit">
						<label for="uikit">UIKit</label>
					</p>
					
					<p>
						<input type="radio" name="framework" id="milligram">
						<label for="milligram">Milligram</label>
					</p>
					
					<p>
						<input type="radio" name="framework" id="skeleton">
						<label for="skeleton">Skeleton</label>
					</p>
					
					<p>
						<input type="radio" name="framework" id="susy">
						<label for="susy">Susy</label>
					</p>
					
				</div>
	
				<h3>Which features of this front-end framework are the most important to you?</h3>
				
					<div class="boxes">
					
					<p>
						<input type="checkbox" name="feature" id="flex">
						<label for="flex">Flexibility</label>
					</p>
					
					<p>
						<input type="checkbox" name="feature" id="browser">
						<label for="browser">Browser Compatability</label>
					</p>
					
					<p>
						<input type="checkbox" name="feature" id="community">
						<label for="community">Community & Popularity</label>
					</p>
					
					<p>
						<input type="checkbox" name="feature" id="mobile">
						<label for="mobile">Mobile Friendly</label>
					</p>
					
					<p>
						<input type="checkbox" name="feature" id="stability">
						<label for="stability">Stability</label>
					</p>
					
					<p>
						<input type="checkbox" name="feature" id="speed">
						<label for="speed">Speed</label>
					</p>
					
					<p>
						<input type="checkbox" name="feature" id="readability">
						<label for="readability">Code Readability</label>
					</p>
				
					</div>

				<h3>Which features do you think this front-end framework can improve on?</h3>
				
					<div class="boxes">
					
					<p>
						<input type="checkbox" name="improve-feat" id="flex2">
						<label for="flex2">Flexibility</label>
					</p>
					
					<p>
						<input type="checkbox" name="improve-feat" id="browser2">
						<label for="browser2">Browser Compatability</label>
					</p>
					
					<p>
						<input type="checkbox" name="improve-feat" id="community2">
						<label for="community2">Community & Popularity</label>
					</p>
					
					<p>
						<input type="checkbox" name="improve-feat" id="mobile2">
						<label for="mobile2">Mobile Friendly</label>
					</p>
					
					<p>
						<input type="checkbox" name="improve-feat" id="stability2">
						<label for="stability2">Stability</label>
					</p>
					
					<p>
						<input type="checkbox" name="improve-feat" id="speed2">
						<label for="speed2">Speed</label>
					</p>
					
					<p>
						<input type="checkbox" name="improve-feat" id="readability2">
						<label for="readability2">Code Readability</label>
					</p>
					
					</div>

			</fieldset>

			<fieldset>
				<legend class="big">Suggestions</legend>
				
				<div class="row">
				
					<div class="input-field col s12">
						<textarea name="suggestion" id="suggestion" class="materialize-textarea" data-length="300"></textarea>
						<label for="suggestion">What kind of features would you like to see added or upgraded?</label>
					</div>
					

					<div class="input-field col s12">
						<textarea name="recommend" id="recommend" class="materialize-textarea" data-length="300"></textarea>
						<label for="recommend">Do you recommend any other front-end frameworks not listed in this survey?</label>
					</div>
					
					<div class="center-align">
					<button class="orange lighten-1 btn waves-effect waves-light" type="submit" name="Submit">Submit</button>
					</div>
					
				</div>

			</fieldset>
				
			</form>
		
		</div>
			
		</div>

<!-- Downloading jQuery and Materialize -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
					
</body>

</html>

