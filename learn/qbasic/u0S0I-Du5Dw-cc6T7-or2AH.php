<!DOCTYPE html>
<html >
<head>
  <!--Easy-->
  <meta charset="UTF-8">
  <title>QBasic | 5 Minutes</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='css/normalize.css'>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="../icons/qbasic.png" />
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <script>
    var copy = function(object){
      window.prompt("Copy to clipboard: Ctrl/Cmd + C, Enter", object.getAttribute("cpdata"));
    };
  </script>
  <script>
      window.onblur = function () { document.title = 'Getting Distracted?'; }
      window.onfocus = function () { document.title = 'QBasic | 5 Minutes'; }
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

        <p class="large">QBasic Basics</p>

      </div>
    </li>

    <li class="step2">
      <div class="box" data-seq>
        <p class="large"><b>Your First Program</b></p>
        <br />
		  <p class="code">
			<code>CLS<br>
			PRINT "Hello from QBasic"<br>
      PRINT "This Is A Second Line of Text"<br>
      END</code>
		  </p>
      </div>
    </li>

    <li class="step3">
      <div class="box" data-seq>
        <p class="large"><b>Printing Math</b></p>
        <br>
        <p>
  			QBasic follows the math rule of PEMDAS Please Excuse My Dear Aunt Sally. PEMDAS is also called the Order Of Operations.</p>
        <br>
        <p><font style="font-size:21px;font-weight:600;">P</font>arentheses</p>
        <p><font style="font-size:21px;font-weight:600;">E</font>xponents
        <p><font style="font-size:21px;font-weight:600;">M</font>ultiplication
        <p><font style="font-size:21px;font-weight:600;">D</font>ivision
        <p><font style="font-size:21px;font-weight:600;">A</font>ddition
        <p><font style="font-size:21px;font-weight:600;">S</font>ubtraction
  		  </p>
        </div>
    </li>

    <li class="step4">
      <div class="box" data-seq>
        <p class="large">Example:</p>
        <br />
      <p class="code">
      <code>CLS<br>
      PRINT 5 + 10<br>
      PRINT 6 - 5<br>
      PRINT  7 * 6<br>
      PRINT 10 / 2<br>
      PRINT 2 ^ 3<br>
      PRINT SQR(25)<br>
      PRINT ABS(-5)<br>
      PRINT 5 * 2 + 10<br>
      PRINT (5 * 2) + 10<br>
      PRINT 5 * (2 + 10)</code>
      </p>
      </div>
    </li>

    <li class="step5">
      <div class="box" data-seq>
        <p class="large">Output:</p>
        <br />
      <p class="code">
      <code>15<br>
        1<br>
        42<br>
        5<br>
        8<br>
        5<br>
        5<br>
        20<br>
        20<br>
        60<br>
        </code>
      </div>
    </li>

	<li class="step6">
      <div class="box" data-seq>
        <p class="large"><b>Share Your Progress</b></p>
        <br>
		  <img class ="qr" id="qr" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=I%20just%20completed%20Basics%20Of%20QBasic%20on%20www.minutetocode.com">
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
