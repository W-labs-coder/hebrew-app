@if (isset($label))
    <label for="name" class="fw700 fs14">
        <span> {{ $label ?? '' }}</span>
        @if ($isRequired or isset($redLabel))
            <span class="text-danger">*</span>
        @endif
    </label>
@endif

<div class="{{ $class ?? '' }}@if ($errors->has($name)) input_parent error @elseif (isset($svg)) input_parent  @elseif (isset($login) && $login) login_input_parent @else input_parent2 @endif @if (isset($read_only) and $read_only) readonly @endif "
    style="width: {{ $w ?? '100%' }}; height: {{ $h ?? '40px' }}; border: {{ $border ?? 'none' }}; background: {{ $bg ?? '' }}">
    <input type={{ $type ?? 'text' }} id="{{ $id ?? '' }}" class="{{ $input_class ?? '' }}"
        name="{{ $name ?? '' }}" value="{{ old($name, $value ?? '') }}"
        @if (isset($type) and $type == 'number') step="any" @endif
        style="width: 100%; height: 100%; background-color: transparent;  border :none; outline: none; height: 100%"
        placeholder="{{ $placeholder ?? '' }}" @if (isset($read_only) and $read_only) readonly @endif
        @if ($isRequired) required @endif autocomplete="off"
        @if (isset($type) and $type === 'number') min="{{ $min ?? '' }}" @endif />

    @if (isset($svg))
        <div class="input_icon">
            @include('components.svgs.' . $svg)
        </div>
    @endif


    @if (isset($svg_end))
        <div class="input_icon_end"
            @if (isset($for_pw) and $for_pw) onclick="handlePasswordView('{{ $id }}')" @endif>
            @include('components.svgs.' . $svg_end)
        </div>
    @endif

</div>
<div>
    @error($name)
        <div class="text-error" style="color: #CE2C60">{{ $message }}</div>
    @enderror
</div>

<script>
    function handlePasswordView(id) {
        var inputElement = document.getElementById(id);
        if (inputElement.type === "password") {
            inputElement.type = "text";
        } else {
            inputElement.type = "password";
        }
    }
</script>
