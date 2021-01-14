// Get the Sequence element
var sequenceElement = document.getElementById("sequence");

// Add your options here http://www.sequencejs.com/documentation/#options
var options = {
  reverseWhenNavigatingBackwards: true
}

// Launch Sequence on the element, and with the options specified above
var mySequence = sequence(sequenceElement, options);