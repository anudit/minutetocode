<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>C++ | 10 Minutes</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='css/normalize.css'>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="../icons/c++.png" />
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script>
    var copy = function(object){
      window.prompt("Copy to clipboard: Ctrl/Cmd + C, Enter", object.getAttribute("cpdata"));
    };
  </script>
  <script>
      window.onblur = function () { document.title = 'Getting Distracted?'; }
      window.onfocus = function () { document.title = 'C++ | 10 Minutes'; }
    </script>
  <style type="text/css">
  button{
    transition:all .8s ease 0s;
    -webkit-transition:all .8s ease 0s;
    -moz-transition:all .8s ease 0s;
    -ms-transition:all .8s ease 0s;
    -o-transition:all .8s ease 0s;
  }
  button:hover{
    border-radius: 100px;
  }
  </style>
</head>

<body>
  <div id="sequence" class="seq">
  <ul class="seq-canvas">

    <li class="step1">
      <div class="box" data-seq>

        <p class="large" style="text-align:center;">C++<br> Classes and Objects</p>

      </div>
    </li>

    <li class="step2">
      <div class="box" data-seq>
        <p class="large">C++ Class Definitions</p>
        <br />
		  <p>
        When you define a class, you define a blueprint for a data type. This doesn't actually define any data, but it does define what the class name means, that is, what an object of the class will consist of and what operations can be performed on such an object.
        A class definition starts with the keyword class followed by the class name; and the class body, enclosed by a pair of curly braces.
		  </p>
      </div>
    </li>

    <li class="step3">
      <div class="box" data-seq>
        <p class="large"><b>Example</b></p>
        <br />
        <p class="code">
          <code>
          class Box {<br />
          &nbsp;public:<br />
          &nbsp;&nbsp;&nbsp;&nbsp;double length;   // Length of a box<br />
          &nbsp;&nbsp;&nbsp;&nbsp;double breadth;  // Breadth of a box<br />
          &nbsp;&nbsp;&nbsp;&nbsp;double height;   // Height of a box<br />
          };<br />
          </code>
        </p><br />
        <p>NOTE : A class definition must be followed either by a semicolon or a list of declarations</p>
      </div>
    </li>

    <li class="step4">
      <div class="box" data-seq>
      <p class="large"><b>Defining Objects</b></p><br />
		  <p>A class provides the blueprints for objects, so basically an object is created from a class. We declare objects of a class with exactly the same sort of declaration that we declare variables of basic types.</p>
      <br />
      <p>Example:</p>
      <br />
      <p class="code">
      &nbsp;&nbsp;Box    Box1;          // Declare Box1 of type Box<br />
      &nbsp;&nbsp;Box    Box2;          // Declare Box2 of type Box<br />
      </p>
      </div>
    </li>

    <li class="step5">
      <div class="box" data-seq>
        <p class="large"><b>Accessing the Member Functions</b></p>
        <br>
		  <p>Member functions can be defined within the class definition or separately using scope resolution operator, :: Defining a member function within the class definition declares the function inline, even if you do not use the inline specifier. </p>
      </div>
    </li>

	<li class="step6">
      <div class="box" data-seq>
        <p class="large"><b>Share Your Progress</b></p>
        <br>
		  <img class ="qr" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=I%20just%20learnt%20about%20Classes%20and%20Objects%20on%20minutetocode.com">
		  <br />
      </div>
    </li>

  </ul>

  <script>
	  var x=0;
	  function lightemup() {

		  if (x == 0){
		  	document.getElementsByTagName("body")[0].setAttribute("class", "themelight");
		  	document.getElementsByClassName('qr')[0].setAttribute("class", "qrlight");
			 x++;
		  }
		  else if (x == 1) {
			document.getElementsByTagName("body")[0].removeAttribute("class", "themelight");
		  	document.getElementsByClassName("qrlight")[0].setAttribute("class", "qr");
			x--;
		  }

	  }
  </script>

  <div class="nav">
    <button type="button" title="Go Back" class="seq-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
	  <button type="button" title="Light 'em Up" class="lb" style="background-color: rgba(0,0,0,0);border: none;color: #555555;font-size: x-large;padding: 10px;" onclick="lightemup()"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></button>
    <button type="button" title="Home" class="lb" style="background-color: rgba(0,0,0,0);border: none;color: #555555;font-size: x-large;padding: 10px;" onclick="window.location.href='../index.php'"><i class="fa fa-home" aria-hidden="true"></i></button>
    <button type="button" title="Practice" class="lb" style="background-color: rgba(0,0,0,0);border: none;color: #555555;font-size: x-large;padding: 10px;" onclick="window.location.href='http://cpp.sh/'"><i class="fa fa-terminal" aria-hidden="true"></i></button>
	  <button type="button" title="Move Ahead" class="seq-next"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
  </div>
</div>

<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/154/imagesloaded.pkgd.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/154/hammer.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/154/sequence.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
