    @if (isset($label))
        <label for="name" class="fw700 fs14" style="margin-bottom: 8px">
            {{ $label ?? '' }} @if ($isRequired)
                <span class="text-danger">*</span>
            @endif
        </label>
    @endif

    <div class=" @if (isset($login) && $login) app_select_parent @else input_parent_select @endif"
        style="width: {{ $w ?? '100%' }}; height: {{ $h ?? '40px' }};border: {{ $border ?? 'none' }}; background: {{ $bg ?? '' }};">
        <select name="{{ $name ?? '' }}" id="{{ $id ?? '' }}" class="{{ $class ?? '' }}"
            style="width: 100%; height: 100%; outline: none; background: none; border: none; padding: 8px;"
            @if ($isRequired) required @endif>

            @if (isset($show_default) and $show_default)
                <option value="" {{ empty($selected) ? 'selected' : '' }} disabled>
                    {{ $placeholder ?? 'Select' }}
                </option>
            @endif
            @foreach ($options as $option)
                @php
                    $displayed_option = isset($option_val) ? $option[$option_val] : $option;
                    if (isset($concatenated_value) and $concatenated_value) {
                        if (isset($use_dash) and $use_dash) {
                            $displayed_option = $option[$value1] . ' - ' . $option[$value2];
                        } else {
                            $displayed_option = $option[$value1] . ' ' . $option[$value2];
                        }
                    }
                    $select_value = isset($option_val2) ? $option[$option_val2] : $option;
                    $_selected = isset($selected) && $select_value == $selected ? 'selected' : '';
                @endphp
                <option value="{{ $select_value }}" {{ $_selected }}>{{ $displayed_option }}</option>
            @endforeach
        </select>


    </div>
