@if (isset($label))
    <label for="name" class="fw400 fs14">
        <span> {{ $label ?? '' }}</span>
        @if ($isRequired or isset($redLabel))
            <span class="text-danger">*</span>
        @endif
    </label>
@endif
<div class="@if (isset($svg)) input_parent  @elseif (isset($login) && $login) login_input_parent @else  input_parent2 @endif"
     style="width: {{ $w ?? '100%' }}; height: {{ $h ?? '40px' }}; border: {{ $border ?? 'none' }}; background: {{ $bg ?? '' }}">
    <input type="date" id="{{ $input_id ?? '' }}" value="" name="{{ $name ?? '' }}"
      style="width: 100%; height: 100%; background-color: transparent;  border :none; outline: none; height: 100%"
        placeholder="{{ $placeholder ?? 'Select Date' }}" @if ($isRequired) required @endif />

    @if (isset($svg))
        <div class="input_icon">
            @include('components.svgs.' . $svg)
        </div>
    @endif


    <div class="input_icon_end_date">
        @if (isset($svg_end))
            @include('components.svgs.' . $svg_end)
        @endif
    </div>
</div>
