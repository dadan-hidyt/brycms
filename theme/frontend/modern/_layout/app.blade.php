<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ frontendAsset('css/bs.min.css') }}">
    <link rel="stylesheet" href="{{ frontendAsset('css/bs_icon.css') }}">
    <link rel="stylesheet" href="{{ frontendAsset('css/custom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? null }}</title>
</head>

<body>
    {{--BAGIAN NAVBAR--}}
    @include('_section.navbar');
    {{--S:MAIN CONTENT--}}
    @yield('main')
    {{--E:MAIN CONTENT--}}
    {{--S:FOOTER--}}
    @include('_section.footer')
    @yield('footer')
    {{-- E:FOOTER --}}

    <script>
        document.querySelector('.toggle').onclick = () => {
            document.querySelector('.dropdown-navbar').classList.toggle('show')
        }
    </script>
</body>

</html>