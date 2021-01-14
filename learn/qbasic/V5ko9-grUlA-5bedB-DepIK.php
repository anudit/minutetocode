<!DOCTYPE html>
<html >
<head>
  <!--Hard-->
  <meta charset="UTF-8">
  <title>QBasic | 20 Minutes</title>
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
      window.onfocus = function () { document.title = 'QBasic | 20 Minutes'; }
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

        <p class="large" style="text-align:center;">Looping in QBasic</p>

      </div>
    </li>

    <li class="step2">
      <div class="box" data-seq>
        <p class="large">IF Statements</p>
        <br />
  		  <p class="code">
                If <condition> Then<br />
                &nbsp;&nbsp;&nbsp;&nbsp;Do something<br />
                ElseIf <condition> Then<br />
                &nbsp;&nbsp;&nbsp;&nbsp;Do something<br />
                Else<br />
                &nbsp;&nbsp;&nbsp;&nbsp;Do something<br />
                End If<br />
  		  </p>
      </div>
    </li>

    <li class="step3">
      <div class="box" data-seq>
        <p class="large"><b>The Expression Signs</b></p>
        <br>
		  <p>
        <Less than<br />
        <=&nbsp;&nbsp;&nbsp;Less than or equal to<br />
        >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Greater than<br />
        >=&nbsp;&nbsp;&nbsp;Greater than or equal to<br />
        =&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Equal to<br />
        <>&nbsp;&nbsp;&nbsp;Not Equal to<br />
      </p><br />
      <p>
        The output will be:<br />
        5 Is Greater Than 2<br />
      </p>
      </div>
    </li>

    <li class="step4">
      <div class="box" data-seq>
		  <p>When the condition is met, the code associated with condition will trigger. For example, in a new file type:</p>
      <br />
      <p class ="code">
        CLS<br />
        IF 5 > 2 THEN<br />
        &nbsp;&nbsp;&nbsp;&nbsp;  PRINT “5 Is Greater Than 2”<br />
        END IF<br />
      </p>
      </div>
    </li>

    <li class="step5">
      <div class="box" data-seq>
		  <p>If the greater than changed to a less than, the computer will not output any information because the condition is not met.</p>
      <p class="code">
        CLS<br />
        IF 5 < 2 THEN<br />
        &nbsp;&nbsp;&nbsp;&nbsp;  PRINT “5 Is Greater Than 2”<br />
        END IF<br />
      </p>
      </div>
    </li>

    <li class="step6">
      <div class="box" data-seq>
        <p class="large"><b>Some things to try on your own</b></p>
        <br>
		  <p>Create a program that checks to see if one number is greater than or equal to the second number</p>
      </div>
    </li>

	  <li class="step7">
      <div class="box" data-seq>
        <p class="large"><b>Share Your Progress</b></p>
        <br>
		  <img class ="qr" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=I%20just%20completed%20Looping%20in%20QBasic%20on%20www.minutetocode.com">
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
