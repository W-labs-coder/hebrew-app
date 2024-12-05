<div class="form-check">
    <input class="form-check-input" type="radio"
           name="{{ $name ?? '' }}"
           id="{{ $id ?? '' }}"
           value="{{ $value ?? '' }}"
           @isset($read_only) disabled @endisset
           @if(isset($checked) && $checked) checked @endif>
    <label class="form-check-label fs14" for="{{ $id ?? '' }}" style="color: #777777;">
        {{ $label ?? '' }}
    </label>
</div>
