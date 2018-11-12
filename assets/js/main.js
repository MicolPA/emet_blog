window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
// $(document).ready(function(){
//   $('.carousel.carousel-slider').carousel({
//   fullWidth: true,
//   duration: 300
//   });
// });
$(document).ready(function () {
  // $('.fixed-action-btn').floatingActionButton();
  $('.carousel.carousel-slider').carousel({
      fullWidth:true,
      indicators:false,
    });
    setInterval(function(){
     $('.carousel').carousel('next');
    },3000);
});
