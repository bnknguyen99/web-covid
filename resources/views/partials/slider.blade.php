<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.mySlides {display: none}


/* Slideshow container */
.slideshow-container {
  width: 80%;
  position: relative;
  margin: 0px auto;
  padding: 0px;
  border:1px ;
  border-radius:10px;
  overflow: hidden;
  display: block;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 0%;
  width: auto;
  height: 100%;
  padding: 0px 20px;
  color: black;
  font-weight: bold;
  font-size: 18px;
  transition: 1s ease;
  border: none;
  user-select: none;
  background-color: rgba(0,0,0,0.05);
  position: absolute;
}

/* Position the "next button" to the right */
.next {
  right: 0;

}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.5);
}


.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">
<div class="mySlides fade">

  <a href=""><img src="https://hoanghamobile.com/i/home/Uploads/2021/06/21/nokia-hotsale-1200x382.jpg" style="width:100%"></a>

</div>
<div class="mySlides fade">

  <img src="https://hoanghamobile.com/i/home/Uploads/2021/06/10/hotsale-mua-ngay-keo-lo-web.png" style="width:100%">

</div>
<div class="mySlides fade">

  <img src="https://hoanghamobile.com/i/home/Uploads/2021/06/22/gio-vang-gia-soc-wweb.jpg" style="width:100%">


</div>


<button class="button prev" onclick="plusSlides(-1)">&#10094;</button>
<button class="button next" onclick="plusSlides(1)">&#10095;</button>

</div>


<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); 
}
</script>


</body>
</html> 
