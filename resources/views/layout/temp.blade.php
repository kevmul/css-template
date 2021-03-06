<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Code Template</title>
    <link rel="stylesheet" href="/css/app.css">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>
<body>
<div id="app">
    <div class="Wrapper">
        @yield('content')
    </div>

    <alert
        title="{{ session('flash_message')['title'] }}"
        message="{{ session('flash_message')['body'] }}"
        type="{{ session('flash_message')['level'] }}"
        important="{{ session('flash_message')['important'] }}"
    ></alert>

</div>
{{-- <script src="/js/vendor.js"></script> --}}
<script src="/js/app.js"></script>
@yield('footer.scripts')
</body>
</html>
