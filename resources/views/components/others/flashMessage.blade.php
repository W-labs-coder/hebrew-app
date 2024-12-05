<style>
    .toast-success {
        /* background-color: #5151ff !important; */
        background-color: #20d489 !important;
    }

    .toast-error {
        background-color: #f41919 !important;
    }

    #toast-container>:hover {
        box-shadow: none !important;
    }

    #toast-container>:hover {
        opacity: 1 !important;
    }

    #toast-container>div {
        opacity: 1 !important;
    }

    .toast {
        backdrop-filter: none !important;
    }
</style>

<script type="text/javascript">
    const defaultSetting = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "5000",
        "hideDuration": "5000",
        "timeOut": "5000",
        "extendedTimeOut": "5000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut",
    }

    @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}", "", defaultSetting)
    @endif
    @if (Session::has('invited'))
        toastr.success("{{ Session::get('invited') }}", "", defaultSetting)
    @endif

    @if (Session::has('error'))
        toastr.error("{{ Session::get('error') }}", "", defaultSetting)
    @endif

    @if (Session::has('warning'))
        toastr.info("{{ Session::get('warning') }}", "", defaultSetting)
    @endif

    @if (Session::has('info'))
        toastr.info("{{ Session::get('info') }}", "", defaultSetting)
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}", "", defaultSetting)
        @endforeach
    @endif
</script>
