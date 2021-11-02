<a class="faq-btn-float">
  <i class="faq-btn-icon">?</i>
</a>
<div class="faq-modal ">
  <div class="faq-modal-wrapper">
    <i class="close-modal material-icons-round">close</i>
    <div class="faq-container">
      <h1 id="faq-title-h1">FAQ</h1> 
      <button class="faq-accordion faq-acc-1" style="display: none">
        <h3 id="faq-q"></h3>
      </button>
    </div>
    <a href="/" class="telegram-btn">Ask on Telegram</a>
  </div>
</div>

<script>
  $(document).ready( function(){
    $.ajax({
        type: "GET",
        url: "../../api/faqs/read",
        success: function (result) {
          var faqItems ='';
          $.each(result, function(key, faq){

            faqItems += '<button class="faq-accordion faq-acc-1">'+
                          '<h3>'+ faq["question"] +'</h3>'+
                        '</button>'+
                        '<div class="faq-panel">'+
                          '<p>'+ faq["answer"] +'</p>'+
                        '</div>';
          });
          $('#faq-title-h1').after(faqItems);
        }
      });
  });
</script>
