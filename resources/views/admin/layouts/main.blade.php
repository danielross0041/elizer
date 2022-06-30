<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="keywords" content="HTML, CSS, JavaScript" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @include('admin.layouts.links')
        <title>{{isset($title)?$title:'Elizer'}}</title>
    </head>
    <body>
        <!-- Header Start -->
        <header class="header-1">
            @include('admin.layouts.header')
        </header>
        

        @yield('content')
        
        
        <footer>
            @include('admin.layouts.footer')
        </footer>
        
        @include('admin.layouts.scripts')
    </body>
</html>

