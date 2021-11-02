var acc = document.getElementsByClassName("faq-accordion");
var i;

for (i = 0; i < acc.length; i++) {
  $(document).on('click','.faq-accordion',function(){
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

$( ".faq-btn-float" ).click(function() {
  $( ".faq-modal" ).slideToggle( "slow", function() {
    $( ".faq-modal" ).toggleClass( "show-faq" );
  });
});
$( ".close-modal" ).click(function() {
  $( ".faq-modal" ).slideToggle( "slow", function() {
    $( ".faq-modal" ).toggleClass( "show-faq" );
  });
});