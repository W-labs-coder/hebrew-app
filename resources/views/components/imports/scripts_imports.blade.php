<!-- jQuery (required for Select2) -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

<!-- Tel Input JS -->
<script src="/js/tel-input.js"></script>

<!-- Select2 JS (after jQuery) -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

<!-- Material Components JS -->
<script src="/js/material-components.min.js"></script>

<!-- Toastr JS -->
<script src="/js/toastr.min.js"></script>

<!-- International Tel Input JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<!-- Bootstrap Bundle JS  -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>


<!-- Google reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js?render=6LcQ79wpAAAAAFFstzN3GlOIkio-WmX-6GLtjeiM"></script>

<!-- CKEditor -->
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

{{-- Selectize --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js"
    integrity="sha512-IOebNkvA/HZjMM7MxL0NYeLYEalloZ8ckak+NDtOViP7oiYzG5vn6WVXyrJDiJPhl4yRdmNAG49iuLmhkUdVsQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- JQUERY DATE PICKER --}}
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>


<!-- Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<!-- Flatpickr JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


<!-- Notification Settings and Initialization -->
<script>
    const notificationSettings = {
        closeButton: true,
        debug: false,
        newestOnTop: false,
        progressBar: true,
        positionClass: "toast-top-right",
        preventDuplicates: false,
        onclick: null,
        showDuration: "5000",
        hideDuration: "5000",
        timeOut: "5000",
        extendedTimeOut: "5000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
    };

    @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}", "", notificationSettings);
    @endif

    @if (Session::has('error'))
        toastr.error("{{ Session::get('error') }}", "", notificationSettings);
    @endif
</script>
