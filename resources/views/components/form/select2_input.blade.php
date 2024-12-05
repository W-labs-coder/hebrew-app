@if (isset($label))
    <label for="{{ $id ?? 'select2_input' }}" class="fw400 fs14 mb-0">
        {{ $label }} @if ($isRequired)
            <span class="text-danger">*</span>
        @endif
    </label>
@endif
<div class="@if (isset($login) && $login) app_select_parent @else input_parent_select @endif"
    style="width: {{ $w ?? '100%' }}; height: {{ $h ?? '40px' }}; border: {{ $border ?? 'none' }};
     background: {{ $bg ?? '' }};">
    <select name="{{ $name ?? '' }}" id="{{ $id ?? 'select2_input' }}" class=" {{ $class ?? '' }}"
        style="width: 100%; height: 100%; outline: none; background: none; border: none; padding: 8px;"
        @if ($isRequired) required @endif>
        @if (isset($show_default) && $show_default)
            <option value="" disabled {{ empty($selected) ? 'selected' : '' }}>
                {{ $placeholder ?? 'Select' }}
            </option>
        @endif
        @foreach ($options as $option)
            @php
                $displayed_option = $option[$option_val] ?? '';
                if (isset($concatenated_value) && $concatenated_value) {
                    if (isset($use_dash) && $use_dash) {
                        $displayed_option = $option[$value1] . ' - ' . $option[$value2];
                    } else {
                        $displayed_option = $option[$value1] . ' ' . $option[$value2];
                    }
                }
                $select_value = $option[$option_val2] ?? '';
                $_selected = isset($selected) && $select_value == $selected ? 'selected' : '';
            @endphp
            <option value="{{ $select_value }}" {{ $_selected }}>{{ $displayed_option }}</option>
        @endforeach
    </select>
</div>

<!-- Initialize Selectize -->
{{-- <script>
   $(document).ready(function() {
    $('select').each(function() {
        if ($(this)[0].selectize) {
            $(this)[0].selectize.destroy();
        }

        $(this).selectize({
            plugins: ["clear_button", "auto_select_on_type"],
            placeholder: 'Select',
            onChange: function(value) {
                const selectElement = $(this).closest('.product-item');
                if (value && selectElement.length) {
                    const functionName = selectElement.find('select[name="products[]"]').is(this) ?
                        "fetchPresentation" : "fetchProducts";

                    if (typeof window[functionName] === "function") {
                        window[functionName](this);
                    } else {
                        console.error(`${functionName} is not a valid function`);
                    }
                }
            }
        });
    });
});


</script> --}}

