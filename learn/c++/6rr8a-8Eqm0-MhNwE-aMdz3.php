<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>C++ | 15 Minutes</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='css/normalize.css'>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="../icons/c++.png" />
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <script>
    var copy = function(object){
      window.prompt("Copy to clipboard: Ctrl/Cmd + C, Enter", object.getAttribute("cpdata"));
    };
  </script>
  <script>
      window.onblur = function () { document.title = 'Getting Distracted?'; }
      window.onfocus = function () { document.title = 'C++ | 15 Minutes'; }
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

        <p class="large">C++ Basics</p>

      </div>
    </li>

    <li class="step2">
      <div class="box" data-seq>
        <a id="copyanchor" onclick="copy(this)" cpdata="#include <iostream.h> using namespace std int main() cout << 'Hello this is C++' "><p class="copy"></p></a>
        <p class="large">Your First Program</p>
        <br />
		  <p class="code">
			<code>#include &#x3C;iostream.h&#x3E;<br>
				using namespace std;<br>
				int main(){<br>
				cout &#x3C;&#x3C; &#x22;Hello this is C++&#x22;;<br>
				}<br>
			</code>
		  </p>
      </div>
    </li>

    <li class="step3">
      <div class="box" data-seq>
        <p class="large"><b>Header files</b></p>
        <br>
		  <p>Header files are included at the beginning just like in C program. Here iostream is a header file which provides us with input & output streams. Header files contained predeclared function libraries, which can be used by users for their ease.</p>
		  <br />
		  eg : <code >#include &#x3C;iostream.h&#x3E;</code>
      </div>
    </li>

    <li class="step4">
      <div class="box" data-seq>
        <p class="large"><b>Using Namespace</b></p>
        <br>
		  <p>Using namespace std, tells the compiler to use standard namespace. Namespace collects identifiers used for class, object and variables. NameSpace can be used by two ways in a program, either by the use of using statement at the beginning, like we did in above mentioned program or by using name of namespace as prefix before the identifier with scope resolution (::) operator.</p>
		  <br />
		  eg : <code >std::cout &#x3C;&#x3C; &#x22;A&#x22;;</code>
      </div>
    </li>

    <li class="step5">
      <div class="box" data-seq>
        <p class="large"><b>main()</b></p>
        <br>
		  <p>It is the function which holds the executing part of program its return type is <code>int</code>.</p>
		  <br />
      </div>
    </li>

	<li class="step6">
      <div class="box" data-seq>
        <p class="large"><b>cout &#x3C;&#x3C;</b></p>
        <br>
		  <p>It is used to print anything on screen, same as printf in C language. cin and cout are same as scanf and printf, only difference is that you do not need to mention format specifiers like, %d for int etc, in cout &#x26; cin.</p>
		  <br />
      </div>
    </li>

	<li class="step7">
      <div class="box" data-seq>
        <p class="large"><b>Comments</b></p>
        <br>
		  <p>For single line comments, use // before mentioning comment, like</p>
		  <br />
		  <code>cout<<"one"; // Single line comment</code><br /><br />
		  <p>For multiple line comment, enclose the comment between /* and */</p>
		  <br />
		  <p class="code">
			  <code>
				/*this is <br />
				a multiple line <br />
				comment */
			  </code>
		  </p>
      </div>
    </li>


	<li class="step8">
      <div class="box" data-seq>
        <p class="large"><b>Share Your Progress</b></p>
        <br>
		  <img class ="qr" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=I%20just%20completed%20Basics%20Of%20C%2B%2B%20on%20www.minutetocode.com">
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

<script src='htstps://s3-us-west-2.amazonaws.com/s.cdpn.io/154/imagesloaded.pkgd.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/154/hammer.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/154/sequence.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
