<div style="height: 200px" class="d-flex aic jcc flex-column">
    <img src="{{ asset('gif/search.gif') }}" width="154.13px"  />

    <p class="fs16 fw700 tc " style="color : #212121">Nothing to Display yet!</p>
    <div style="width:389px">
        <p class="fs14 fw400 tc " style="color : #212121">You currently don’t have any {{ $text ?? 'record' }} at the moment.  {{ isset($button_text) && $button_text ? 'Click the '.$button_text.' button to create.' : '' }} </p>
    </div>

</div>
