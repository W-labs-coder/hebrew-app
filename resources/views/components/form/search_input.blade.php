<div class="search_input_parent "
    style="width: {{ $w ?? '100%' }}; height: {{ $h ?? '44px' }};">
    <input type="text" name="{{ $name ?? '' }}" placeholder="{{ $placeholder ?? '' }}" value="{{$value ?? ''}}"
        style="width: 100%; height: 100%; outline: none; background-color: transparent; border: none; " />

    <div class="input_icon">
        @include('components.svgs.' . $svg)
    </div>
     @if (isset($svg_end) && $value != '')
        <div class="input_icon_end">
           <a href="{{isset($reset_link) ? $reset_link : '' }}" class="text-decoration-none">
             @include('components.svgs.' . $svg_end)
           </a>
        </div>
    @endif
</div>
