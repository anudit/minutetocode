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

        <p class="large" style="text-align:center">Java <br />Data Structures</p>

      </div>
    </li>

    <li class="step2">
      <div class="box" data-seq>
      <p class ="large">Classes</p><br />
      <p>
        Enumeration<br />
        BitSet<br />
        Vector<br />
        Stack<br />
        Dictionary<br />
        Hashtable<br />
        Properties<br />
      </p><br />
      <p>
          NOTE :All these classes are now legacy and Java-2 has introduced a new framework called Collections Framework
      </p>
      </div>
    </li>

    <li class="step3">
      <div class="box" data-seq>
        <p class="large"><b>The Enumeration</b></p>
        <br>
		  <p>
        The Enumeration interface isn't itself a data structure, but it is very important within the context of other data structures.<br />
        The Enumeration interface defines a means to retrieve successive elements from a data structure.<br />
        For example, Enumeration defines a method called nextElement that is used to get the next element in a data structure that contains multiple elements.<br />
      </p>
      </div>
      </li>

      <li class="step4">
      <div class="box" data-seq>
        <p class="large"><b>The BitSet</b></p>
        <br>
		  <p>
        The BitSet class implements a group of bits or flags that can be set and cleared individually.<br />
        This class is very useful in cases where you need to keep up with a set of Boolean values; <br />
        you just assign a bit to each value and set or clear it as appropriate.<br />
      </p>
      </div>
      </li>

      <li class="step5">
      <div class="box" data-seq>
        <p class="large"><b>The Vector</b></p>
        <br>
		  <p>
        The Vector class is similar to a traditional Java array, except that it can grow as necessary to accommodate new elements.<br />
        Like an array, elements of a Vector object can be accessed via an index into the vector.<br />
        The nice thing about using the Vector class is that you don't have to worry about setting it to a specific size upon creation;<br />
        it shrinks and grows automatically when necessary.<br />
      </p>
      </div>
      </li>

      <li class="step6">
      <div class="box" data-seq>
        <p class="large"><b>The Stack</b></p>
        <br>
		  <p>
        The Stack class implements a last-in-first-out (LIFO) stack of elements.<br />
        You can think of a stack literally as a vertical stack of objects; when you add a new element, it gets stacked on top of the others.<br />
        When you pull an element off the stack, it comes off the top.<br />
        In other words, the last element you added to the stack is the first one to come back off.<br />
      </p>

      </div>
      </li>

      <li class="step7">
      <div class="box" data-seq>
        <p class="large"><b>The Dictionary</b></p>
        <br>
		  <p>
        The Dictionary class is an abstract class that defines a data structure for mapping keys to values.<br />
        This is useful in cases where you want to be able to access data via a particular key rather than an integer index.<br />
        Since the Dictionary class is abstract, it provides only the framework for a key-mapped data structure rather than a specific implementation.<br />
      </p>

      </div>
      </li>

      <li class="step8">
      <div class="box" data-seq>
        <p class="large"><b>The Hashtable</b></p>
        <br>
		  <p>
        The Hashtable class provides a means of organizing data based on some user-defined key structure.<br />
        For example, in an address list hash table you could store and sort data based on a key such as ZIP code rather than on a person's name.<br />
        The specific meaning of keys with regard to hash tables is totally dependent on the usage of the hash table and the data it contains.<br />
      </p>

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
