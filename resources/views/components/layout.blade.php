<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?? 'Default title' }}</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @endif

</head>

<body>
    @include('partials.navigation')
    @session('status')
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endsession
    {{ $slot }}

    @if (isset($sidebar))
        <div id="sidebar">
            <h3>Sidebar</h3>
            <div>{{ $sidebar }}</div>
        </div>
    @endif
</body>

</html>
