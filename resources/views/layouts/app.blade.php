<!DOCTYPE html>
<html lang="ja">
<hea>
    <meta charset="utf-8">
    <title> MessageBoard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content=" {{csrf_token()}} ">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.6.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com/3.4.1"> </script>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    </head>


    <body>​​
        @include ('commons.navbar')
        <div class="container mx-auto">
            @include ('commons.error_messages')
            @yield ('content')
        </div>

    </body>

</html>