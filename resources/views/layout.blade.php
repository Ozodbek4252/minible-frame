<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Vortex</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Vortex: Educational CRM" name="description" />
    <meta content="Themesbrand" name="author" />

    @include('includes.styles')
</head>

<body>
    <div id="layout-wrapper">
        @include('includes.header')
        @include('includes.sidebar')

        <div class="main-content">
            <div class="page-content">
                @yield('content')
            </div>

            {{--  @include('includes.footer')  --}}
        </div>
    </div>

    @include('includes.scripts')
</body>

</html>
