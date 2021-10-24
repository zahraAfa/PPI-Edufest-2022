<a class="faq-btn-float">
  <i class="faq-btn-icon">?</i>
</a>
<div class="faq-modal ">
  <div class="faq-modal-wrapper">
    <i class="close-modal material-icons-round">close</i>
    <div class="faq-container">
      <h1>FAQ</h1> 
      {{-- @foreach ($faqs as $faq)
      <button class="faq-accordion faq-acc-1">
        {{ var_dump($faq) }}
        <h3>Q: {{ $faq }}</h3>
      </button>
      <div class="faq-panel">
        <p>A: Around December 2021</p>
      </div>
      @endforeach --}}
      <button class="faq-accordion faq-acc-1">
        <h3>Q: When is the mint?</h3>
      </button>
      <div class="faq-panel">
        <p>A: Around December 2021</p>
      </div>
    </div>
    <a href="/" class="telegram-btn">Ask on Telegram</a>
  </div>
</div>
