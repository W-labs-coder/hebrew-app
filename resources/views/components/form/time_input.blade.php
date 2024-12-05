<div class="{{ isset($svg) ? 'input_parent' : 'input_parent2' }}" style="width: {{ $w ?? '100%' }};">
    <!-- Time input field limited from 8:00 AM to 8:00 PM with one-hour steps -->
    <input  type="time" id="{{ $input_id ?? '' }}" name="{{ $name ?? '' }}"
           style="width: 100%; height: 100%; outline: none; background: none; border: none"
           placeholder="{{ $placeholder ?? 'Select Time' }}"
           {{ $isRequired ?? '' ? 'required' : '' }}
           min="08:00" max="20:00" {{-- step="3600" --}} />


    @if (isset($svg))
        <div class="input_icon">
            @include('components.svgs.' . $svg)
        </div>
    @endif


    @if (isset($svg_end))
        <div class="input_icon_end_date">
            @include('components.svgs.' . $svg_end)
        </div>
    @endif
</div>
