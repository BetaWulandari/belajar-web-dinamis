$(document).ready(function () {
  $(".hamburger").click(() => {
    $(".links").toggleClass("active");
  });
  $(window).scroll(() => {
    $(".links").removeClass("active");
  });
});