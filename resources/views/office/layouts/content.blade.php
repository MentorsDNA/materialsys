<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="{{ csrf_token() }}" />
        <link rel="icon" type="image/png" href="assets/favicon.png" />
        <title>
            Material Systems 
        </title>

        @include ('office.layouts.sections.css')

    </head>
    <body>
        <div class="wrapper">
                               
            @include ('office.layouts.sections.menu')

            <div class="main-panel">

                @include ('office.layouts.sections.header')

                <!-- aqui esta el contenido del SITE -->
                    @yield('content')  
                                           

                @include ('office.layouts.sections.footer')

            </div>
        </div>

        @include ('office.layouts.sections.js')

    </body>
</html>