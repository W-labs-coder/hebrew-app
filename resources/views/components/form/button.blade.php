<button class="{{ $class ?? '' }} px-3 " type="{{ $type ?? 'button' }} d-flex"
    @isset($data_bs_toggle)
    data-bs-toggle={{ $data_bs_toggle }}
@endisset
    @if (isset($dismiss)) data-bs-dismiss="modal" @endif @if (isset($disabled) and $disabled) disabled @endif
    id="{{ $button_id ?? '' }}"
    @if (isset($onclick)) onclick="{{ $onclick }}"  @else onclick="swapMe(this, '{{ $button_id ?? '' }}', '{{ $formId ?? '' }}')" @endif
    @if (isset($for_modal) and $for_modal) data-bs-target="#{{ $modal_id }}" data-bs-toggle="modal" aria-expanded="false" @endif
    style="height: {{ $h }}; width: {{ $w }}; border-radius: {{ $br ?? 'initial' }}; color: {{ $color ?? '' }};  background: {{ $bg }}; border: {{ $border ?? 'initial' }}" >
    @if (isset($left_icon) and $left_icon)
        @include('components.svgs.' . $left_icon)
        <span class="mx-1"></span>
    @endif
    {{ $text }}
    @if (isset($right_icon) && $right_icon)
        <span class="mx-1"></span>
        @include('components.svgs.' . $right_icon)
    @endif
</button>

@if (isset($button_id))
    <button class="d-none aic jcc " type="button" disabled id="{{ $button_id . '_spinner' }}"
        style="height: {{ $h }}; width: {{ $w }}; border-radius: {{ $br ?? 'initial' }}; color: {{ $color ?? '' }};  background: {{ $bg }}; border: {{ $border ?? 'initial' }}">
        <div class="loader_small"></div>
    </button>
@endif



<script>
    var wasInvalid = false; // Define the flag at a higher scope


    function swapMe(element, btnId, formId) {
        var form = document.getElementById(formId);
        wasInvalid = false;
        // Add the event listeners only once, outside of this function
        if (element.type === 'submit' && !form.swapMeInitialized) {
            form.swapMeInitialized = true; // Prevent multiple initializations
            form.addEventListener('invalid', function(event) {
                wasInvalid = true;
            }, true);

            form.addEventListener('submit', function(event) {
                if (wasInvalid) {
                    event.preventDefault();
                    wasInvalid = false; // Reset the flag
                } else {
                    // The form is valid and will proceed with submission after this code runs
                    $("#" + btnId).removeClass("d-flex").addClass("d-none");
                    $("#" + btnId + "_spinner").addClass("d-flex").removeClass("d-none");
                }
            });
        }
    }

    //add a function to swap it back

    function returnRealButton(btnId) {
        $("#" + btnId).removeClass("d-none");
        $("#" + btnId + "_spinner").removeClass("d-flex").addClass("d-none");
    }

    function changeRoute(element, route) {
        window.location.href = route;
    }

    function spinMe(btnId) {
        $("#" + btnId).addClass("d-none");
        $("#" + btnId + "_spinner").addClass("d-flex").removeClass("d-none");
    }
</script>

