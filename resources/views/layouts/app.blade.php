<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('components.imports.css_imports')
    @include('components.imports.scripts_imports')
    <title>{{ 'Hebrew App' }}</title>

</head>

<body>

    <div class="d-flex">
        @include('components.navbar.navbar')


        @if(auth()->user())

        <div class="left_side" id="sideBar">
            <div class="sidebar_parent">
                @include('components.sidebar.sidebar')
            </div>
        </div>
        @endif
        <div class="right_side">
            <div class="content_parent" style="width: 100%">
                @yield('content')
            </div>

        </div>

        @include('components.others.flashMessage')
    </div>
</body>

<script>
    var status = "closed"
    var side = document.getElementById("sideBar")
    const openSideBar = () => {
        if (status == "closed") {
            side.style.left = "0"
            status = "opened"
        } else {
            side.style.left = "-100%"
            status = "closed"
        }
    }
</script>
</html>
