<div class="col {{ $mt ?? 'mt-4' }}">
    <label>{{ $label }} @if ($is_required)
            @include('components.others.is_required')
        @endif
    </label>
    <input type="number" id="{{ $input_id }}" name="{{ $name }}" class="form-control form-control-lg mt-1"
        placeholder="{{ $placeholder }}">
    <small class="text-danger d-none" id="{{ $error_id }}">{{ $error_text }}</small>
</div>
