<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Java | 20 Minutes</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='css/normalize.css'>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="../icons/java.png" />
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <script>
    var copy = function(object){
      window.prompt("Copy to clipboard: Ctrl/Cmd + C, Enter", object.getAttribute("cpdata"));
    };
  </script>
  <script>
      window.onblur = function () { document.title = 'Getting Distracted?'; }
      window.onfocus = function () { document.title = 'Java | 20 Minutes'; }
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

        <p class="large">Java Basics</p>

      </div>
    </li>

    <li class="step2">
      <div class="box" data-seq>
        <p class="large">Your First Program</p>
        <br />
		  <p class="code">
			<code>public class MyFirstJavaProgram {<br>
<br>
   /* This is my first java program.<br>
    * This will print 'Hello World' as the output<br>
    */<br>
<br>
   public static void main(String []args)<br>
                &nbsp;{<br>
&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("Hello World");<br>
&nbsp;&nbsp;&nbsp;&nbsp;// prints Hello World<br>
   &nbsp;}<br>
}<br>
			</code>
		  </p>
      </div>
    </li>

    <li class="step3">
      <div class="box" data-seq>
        <p class="large"><b>Case Sensitivity</b></p>
        <br>
		  <p>Java is case sensitive, which means identifier Hello and hello would have different meaning in Java.</p>


      </div>
      </li>

      <li class="step4">
      <div class="box" data-seq>
        <p class="large"><b>Class Names</b></p>
        <br>
		  <p>For all class names the first letter should be in Upper Case. If several words are used to form a name of the class, each inner word's first letter should be in Upper Case.</p>
          <br> <br>

          <b>Example:</b> <code>class MyFirstJavaClass</code>

      </div>
      </li>

      <li class="step5">
      <div class="box" data-seq>
        <p class="large"><b>Method Names</b></p>
        <br>
		  <p>All method names should start with a Lower Case letter. If several words are used to form the name of the method, then each inner word's first letter should be in Upper Case.</p>
          <br> <br>

          <b>Example:</b> <code>public void myMethodName()</code>

      </div>
      </li>

      <li class="step6">
      <div class="box" data-seq>
        <p class="large"><b>Program File Name</b></p>
        <br>
		  <p>Name of the program file should exactly match the class name.</p>
          <p>When saving the file, you should save it using the class name (Remember Java is case sensitive) and append '.java' to the end of the name (if the file name and the class name do not match, your program will not compile).</p>
          <br> <br>

          <b>Example:</b> Assume 'MyFirstJavaProgram' is the class name. Then the file should be saved as 'MyFirstJavaProgram.java'</code>

      </div>
      </li>

      <li class="step7">
      <div class="box" data-seq>
        <p class="large"><b>public static void main(String args[]) </b></p>
        <br>
		  <p>Java program processing starts from the main() method which is a mandatory part of every Java program.</p>

      </div>
      </li>


	<li class="step9">
      <div class="box" data-seq>
        <p class="large"><b>Share Your Progress</b></p>
        <br>
		  <img class ="qr" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=I%20just%20completed%20Basics%20Of%20Java%20on%20www.minutetocode.com">
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
