// Page Loader
$(document).ready(function () {
  $(window).on("load", function () {
    // setTimeout(function(){ $('.page-loader').hide("slow"); }, 1000);
    setTimeout(function () {
      $(".page-loader").fadeOut(500, "linear");
    }, 100);
  });
});
