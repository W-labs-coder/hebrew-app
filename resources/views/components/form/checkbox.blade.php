<div class="form-check">
    <input class="form-check-input" type="checkbox" name="{{ $name ?? '' }}" id="{{ $id ?? '' }}"
        value="{{ $value ?? '' }}" @isset($read_only) disabled @endisset
        @if (isset($checked) && $checked) checked @endif>
    <label class="form-check-label fw600 fs14 d-flex flex-column jcs" for="{{ $id ?? '' }}" style="color: #757575;">
        @isset($image)
            <img src="{{ asset('assets/images/payments/' . $image) }}" alt="" width="102.93px">
        @endisset
        @isset($icon)
            @include('components.svgs.'.$icon)
        @endisset
        {{ $label ?? '' }}
    </label>
</div>
