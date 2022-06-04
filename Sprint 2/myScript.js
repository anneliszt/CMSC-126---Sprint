// Carousel Slideshow

var slidePosition = 0;
SlideShow();

// Slideshow function
function SlideShow() {
  var i;
  var slides = document.getElementsByClassName("Containers"); // Container for individual pictures
  for (i = 0; i < slides.length; i++) {  
    slides[i].style.display = "none";
  }
  slidePosition++; // Increment slide position

  // If slide position is greater than slides length, let slide position be 1
  if (slidePosition > slides.length) {slidePosition = 1}
  slides[slidePosition-1].style.display = "block";
  setTimeout(SlideShow, 2000);  // Set timeout
} 