$(document).ready(function() {
  let currentImage = 3;
  let numImages = 5;
  let imageToggle = true;
  let prefix = "url(img/img";
  let suffix = ".jpg)";

  if ($(window).width() >= 768){
    setInterval(function() {
      swapPhoto();
    }, 5000);
  }

  function swapPhoto() {
    if (imageToggle) {
      $('#img2').fadeOut(500, function() {
        $('#img2').css('background-image', prefix + currentImage + suffix);
      });
    }
    else {
      $('#img2').fadeIn(500, function() {
        $('#img1').css('background-image', prefix + currentImage + suffix);
      });
    }
    imageToggle = !imageToggle;
    currentImage++;
    if (currentImage > numImages) {
      currentImage = 1;
    }
  }
})