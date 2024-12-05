@if (isset($label))
    <label for="name" class="fw700 fs14">
        {{ $label ?? '' }} @if ($isRequired or isset($redLabel))
            <span class="text-danger">*</span>
        @endif
    </label>
@endif
<div
    style="background-color: {{ $bg ?? 'transparent' }}; border-radius: 10px ; height: {{ $h ?? '' }}; width:{{ $w ?? '' }};  position: relative; padding: 5px; border: {{ $border ?? 'none' }}">
    <textarea name="{{ $name ?? '' }}" @if (isset($isRequired) && $isRequired) required @endif id="{{ $id ?? '' }}"
        style="width: {{ $w ?? '100%' }}; height: 100%; resize: {{ $resize ?? 'none' }}; padding: 10px; outline: none; border: none; background-color : transparent;"
        placeholder="{{ isset($placeholder) ? $placeholder : '' }}" @if (isset($read_only) and $read_only) readonly @endif>{{ $value ?? '' }}</textarea>

</div>
