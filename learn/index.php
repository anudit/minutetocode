<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Minute To Code</title>
		<link rel="shortcut icon" href="icons/main.png" />
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
		<script>
	      window.onblur = function () { document.title = 'Getting Distracted?'; }
	      window.onfocus = function () { document.title = 'Minute To Code`'; }
	    </script>
	  <style type="text/css">
		button{
	    transition:all .8s ease 0s;
	    -webkit-transition:all .8s ease 0s;
	    -moz-transition:all .8s ease 0s;
	    -ms-transition:all .8s ease 0s;
	    -o-transition:all .8s ease 0s;
	  }
		button:before{
	    transition:all .8s ease 0s;
	    -webkit-transition:all .8s ease 0s;
	    -moz-transition:all .8s ease 0s;
	    -ms-transition:all .8s ease 0s;
	    -o-transition:all .8s ease 0s;
	  }
		a{
			transition:all .4s ease 0s;
	    -webkit-transition:all .4s ease 0s;
	    -moz-transition:all .4s ease 0s;
	    -ms-transition:all .4s ease 0s;
	    -o-transition:all .4s ease 0s;
		}
	  </style>
	</head>
	<body class="nl-blurred">
		<div class="container">
			<header>
				<h1>Minute To Code</h1>
			</header>
			<div class="main clearfix">
				<form id="nl-form" class="nl-form" method="post" action="process.php">
					I want to learn something about
					<select name="selectlang" >
						<option value="c++" selected>C++</option>
						<option value="python">Python</option>
						<option value="java">Java</option>
						<option value="qbasic">Qbasic</option>
					</select>
					in
					<select name="selecttime">
						<option value="20" selected>20</option>
						<option value="15">15</option>
						<option value="10">10</option>
						<option value="5">5</option>
					</select>
					minutes <br />which is really
					<select name="selectdiff">
						<option value="easy" selected >Easy</option>
						<option value="hard">Hard</option>
					</select> .
					<div class="nl-submit-wrap">
						<button class="nl-submit" type="submit">Let us begin</button>
					</div>
					<div class="nl-overlay"></div>
				</form>
			</div>
		</div><!-- /container -->
		<script src="js/nlform.js"></script>
		<script>
			var nlform = new NLForm( document.getElementById( 'nl-form' ) );
		</script>
	</body>
</html>
