<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Python | 10 Minutes</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='css/normalize.css'>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="../icons/python.png" />
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <script>
    var copy = function(object){
      window.prompt("Copy to clipboard: Ctrl/Cmd + C, Enter", object.getAttribute("cpdata"));
    };
  </script>
  <script>
      window.onblur = function () { document.title = 'Getting Distracted?'; }
      window.onfocus = function () { document.title = 'Python | 10 Minutes'; }
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

        <p class="large">Python Basics</p>

      </div>
    </li>

    <li class="step2">
      <div class="box" data-seq>
        <p>Your First Program</p>
        <br />
		  <p class="code">
			<code>#!/usr/bin/python<br>
			print "Hello, Python!"<br>
			</code>
		  </p>
      </div>
    </li>

    <li class="step3">
      <div class="box" data-seq>
        <p class="large"><b>Line Indentation</b></p>
        <br>
		  <p>Python provides no braces to indicate blocks of code for class and function definitions or flow control. Blocks of code are denoted by line indentation, which is rigidly enforced.<br>The number of spaces in the indentation is variable, but all statements within the block must be indented the same amount.</p>


      </div>
    </li>

    <li class="step4">
      <div class="box" data-seq>
        This is right<br /><br />
		  <p class="code">
		  <code>
		  if True:<br />
          &nbsp;&nbsp;&nbsp;&nbsp;print &#x22;True&#x22;<br />
		  else:<br />
          &nbsp;&nbsp;&nbsp;&nbsp;print &#x22;False&#x22;<br />
		  </code>
		 </p>
		 <br>
		  <p>However this is an error</p>
		  <br />
		  <p class="code">
		  <code>
		  if True:<br />
    	  &nbsp;&nbsp;&nbsp;&nbsp;print "Answer"<br />
          &nbsp;&nbsp;&nbsp;&nbsp;print "True"<br />
          else:<br />
          &nbsp;&nbsp;print "Answer"<br />
          &nbsp;&nbsp;&nbsp;&nbsp;print "False"<br />
		  </code>
		  </p>
      </div>
    </li>

    <li class="step5">
      <div class="box" data-seq>
        <p class="large"><b>Quotation in Python</b></p>
        <br>
		  <p>Python accepts single (&#x27;), double (&#x22;) and triple (&#x27;&#x27;&#x27; or &#x22;&#x22;&#x22;) quotes to denote string literals, as long as the same type of quote starts and ends the string. The triple quotes are used to span the string across multiple lines.</p>
		  <br />
      </div>
    </li>

	<li class="step6">
      <div class="box" data-seq>
        <p class="large"><b>Quotation in Python</b></p>
        <br />
		<p>These are completly legal</p><br />
		  <p class="code">
			  word = 'word'<br>
			  sentence = "This is a sentence."<br>
			  paragraph = """This is a paragraph. It is<br>
			  made up of multiple lines and sentences."""<br>
		  </p>
		  <br />
      </div>
	  </li>


	<li class="step7">
      <div class="box" data-seq>
        <p class="large"><b>Share Your Progress</b></p>
        <br>
		  <img class ="qr" id="qr" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=I%20just%20completed%20Basics%20Of%20Python%20on%20www.minutetocode.com">
		  <br />
      </div>
    </li>

  </ul>

  <script>
	  var x=0;
	  function lightemup() {

		  if (x == 0){
		  	document.getElementsByTagName("body")[0].setAttribute("class", "themelight");
		  	document.getElementsByClassName("qr")[0].setAttribute("class", "qrlight");
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
